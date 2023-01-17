<!DOCTYPE html>
<html lang="hr">
<head>
   <?php
   $title = "Unos Korisnika";
   $description = "Web aplikacija za besplatno dijelenje fotografija. Unos fotografije."; 
   $keywords = "dijelenje fotografija, komentiranje, kategorije, unos fotografije"; 
    include "includes/head.php";
   ?>

</head>
<body>
    <div class="red">
        <?php include "includes/navigation.php"; ?>
        
    </div>


    <div class="red">
            <section id="sadrzaj" class="t-kolona-12 d-kolona-12" style="text-align: center; margin-top: 88px;">
                <h2>Unos Korisnika</h2>
                <?php                
 if(!isset($_POST["submit"])){
    echo "Ne možete pristupiti datoteci bez predaje podataka forme.";
    exit;
}
                    
                    require_once 'includes/baza.php';
                    $baza = new Baza();
                    $poruka = "";

                    //validacija podatak

                    if(empty(trim($_POST['email']))){
                        $poruka .= "Email je obavezno polje za unos.<br>";
                    }
                    else{
                        $email = strip_tags($_POST["email"]);
                    }
                    

                    
                    
                    if(empty(trim($_POST["lozinka1"])) OR empty(trim($_POST["lozinka2"]))){
                        $poruka .= "Lozinka je obavezno polje za unos.<br>";
                    }elseif($_POST["lozinka1"] !== $_POST["lozinka2"]){
                        $poruka .= "Lozinke se moraju podudarati.<br>";
                    }else{
                        $lozinka1 = strip_tags($_POST["lozinka1"]);
                    }
 
                   
                   

                    //U slučaju uspješne validacije i uspješnog prebacivanja slike na server, unos podataka u bazu
                    if(empty($poruka)){
                
                
                        $upit_korisnika = "INSERT INTO korisnik (email, lozinka, id_grupe) values('$email', '$lozinka1', 2)";
     

                        $status = $baza -> promijeniDB($upit_korisnika);
                        if($status){
                            $poruka .= "Uspješan unos novog korisnika.";
                        }else{
                            $poruka .= "Greška kod unosa.";
                        }
                        
                    }                    

                ?>

                <!-- Vračanje poruke-->
                <div id="poruka">
                    <p>
                        <?php echo $poruka;?>
                        <a href="index.php"><br>
                        <input type="button" value="U redu">
                </a>
                    </p>
                </div>
        </section>
    </div>
    <div class="red">
        <?php include "includes/footer.php"; ?>
    </div>
    
</body>
</html>