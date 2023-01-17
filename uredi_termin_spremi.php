<!DOCTYPE html>
<html lang="hr">
<head>
   <?php
   $title = "Unos Kategorije";
   $description = "Web aplikacija za besplatno dijelenje fotografija. Unos Kategorije."; 
   $keywords = "dijelenje fotografija, komentiranje, kategorije, unos Kategorije"; 
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
                    if(empty(trim($_POST['broj_telefona']))){
                        $poruka .= "Broj telefona je obavezno polje za unos.<br>";
                    }else{
                        $broj_telefona = strip_tags($_POST["broj_telefona"]);
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

                    if(empty($poruka)){

                    
                    $upit = "UPDATE termin SET ime_prezime_pacijenta='$ime_prezime_pacijenta',  opis_problema='$opis_problema', spol_pacijenta='$spol_pacijenta', broj_telefona=$broj_telefona, datum_rodenja=$datum_rodenja, datum_termina=$datum_termina";
                            
                       

                        $status = $baza -> promijeniDB($upit);
                        if($status){
                            $poruka .= "Uspješno anžuriranje kategorije";
                        }else{
                            $poruka .= "Neuspješno anžuriranje kategorije";
                        }

                    }   
            
                ?>

                <!-- Vračanje poruke-->
                <div id="poruka">
                    <p>
                        <?php echo $poruka;?>
                        <a href="index.php">
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