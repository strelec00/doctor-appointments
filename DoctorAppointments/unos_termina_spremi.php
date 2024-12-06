
  <?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="hr">
<head>
   <?php
   $title = "Unos termina";
   $description = "Doktorova web aplikacija za unos termina. Unos termina."; 
   $keywords = "doktor, pacijenti, termini, unos termina"; 
    include "includes/head.php";
   ?>

</head>
<body>
    <div class="red">
        <?php include "includes/navigation.php"; ?>
        
    </div>


    <div class="red">
            <section id="sadrzaj" class="t-kolona-12 d-kolona-12" style="text-align: center; margin-top: 35px;">
                <h2>Unos Termina</h2>
                <?php
                    //ispis greske i prekidanje skripte, ako se datoteci pokuša pristupiti izravno    
                    if(!isset($_POST["submit"])){
                        echo "Ne možete pristupiti datoteci bez predaje podataka forme.";
                        exit;
                    }

                    require_once 'includes/baza.php';
                    $baza = new Baza();
                    $poruka = "";

                    //validacija podatak
                

                    if(empty(trim($_POST['ime_prezime_pacijenta']))){
                        $poruka .= "Ime i prezime je obavezno polje za unos.<br>";
                    }else{
                        $ime_prezime_pacijenta = strip_tags($_POST["ime_prezime_pacijenta"]);
                    }

                        
                    if(empty(trim($_POST['opis_problema']))){
                        $poruka .= "Opis problema je obavezno polje za unos.<br>";
                    }else{
                        $opis_problema = strip_tags($_POST["opis_problema"]);
                    } 
                    if(empty(trim($_POST['vrijeme_termina']))){
                        $poruka .= "Vrijeme termina telefona je obavezno polje za unos.<br>";
                    }else{
                        $vrijeme_termina = strip_tags($_POST["vrijeme_termina"]);
                    }
                    if(empty(trim($_POST['datum_rodenja']))){
                        $poruka .= "Datum rodenja je obavezno polje za unos.<br>";
                    }else{
                        $datum_rodenja = strip_tags($_POST["datum_rodenja"]);
                    }
                    if(empty(trim($_POST['datum_termina']))){
                        $poruka .= "Datum termina je obavezno polje za unos.<br>";
                    }else{
                        $datum_termina = strip_tags($_POST["datum_termina"]);
                    }if(empty(trim($_POST["spol_pacijenta"]))){
                        $poruka .= "Spol je obavezno polje za unos.<br>";
                    }else{
                    $spol_pacijenta = strip_tags($_POST["spol_pacijenta"]);
                    }
                $id_korisnika = $_SESSION['id_korisnika'];

                    if(empty($poruka)){

                    
                    $upit = "INSERT INTO termin (ime_prezime_pacijenta, opis_problema, spol_pacijenta ,vrijeme_termina,datum_rodenja,datum_termina, id_korisnika) values('$ime_prezime_pacijenta','$opis_problema','$spol_pacijenta', '$vrijeme_termina', '$datum_rodenja', '$datum_termina', $id_korisnika)"; 

                        $status = $baza -> promijeniDB($upit);
                        if($status){
                            $poruka .= "Uspješan unos termina";
                        }else{
                            $poruka .= "Neuspješan unos termina";
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