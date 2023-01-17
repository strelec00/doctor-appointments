<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hr">
<head>
   <?php
   $title = "O nama";
   $description = "Web aplikacija za rezervaciju termina"; 
   $keywords = "rezervacija, termini, doktor, termin, poliklinika"; 
    include "includes/head.php";
    
   ?>

</head>

<body>
    <div class="red">
        <?php include "includes/navigation.php"; ?>        
    </div>


    <div class="red"> 
        <section id="onama_sadrzaj" class="t-kolona-12">
            <div class="d-kolona-1" id="onama_prvi">
            </div>
            <div class="d-kolona-5 t-kolona-12" id="onama_lijevi_container">
                <h3>Poliklinika zdravlje</h3>
                <div id="abmaint">
                Poliklinika zdravlje je privatna zdravstvena ustanova specijalizirana za pružanje usluga od kirurgije
                pregleda za obiteljsku medicinu. Naša klinika nudi sve usluge od pregleda i dijagnoze do rješenja i 
                oporavka pacijenata. Na raspolaganju Vam stoji naš tim vrhunskih liječnika kao i suvremena oprema
                za pružanje vrhunskih usluga.
                <br>
                <br>
                Poliklinika radi na principu moderne zdravstvene ustanove te je u skladu s time usmjerena na preglede,
                dijagnosticiranje i rješavanje problema. Uz to nudi i pružanje suluga i operativnih zahvata iz područja
                opće i estetske kirurgije, a za potpuni oporavak pacijenata omogućuje i kvalitetnu uslugu oporavka u 
                našoj dnevnoj bolnici.
                <br>
                <br>
                Prilikom dolaska obavlljamo kompletni sistematski pregled pacijenata i u roku od nekoliko sati nudimo
                uvid u zdravstveno stanje naših pacijenata što nam omogućuje individualiziran rad s našim pacijentima
                o čemu svjedoče mnogi zadovoljni klijenti.
                </div>
            </div>

        <div class="d-kolona-5 t-kolona-12" id="onama_desni_container">
        <h3> Usluge </h3>
            <!-- div red prvi -->
            
            <div class="d-kolona-12 t-kolona-12" id="onama_prvired">
                <!-- slika prva -->
                <div class="d-kolona-6 t-kolona-6">
                    <img src="slike/surgery.png">
                    <br>
                    <b>Kirurgija</b>
                    <br>
                    Na jednome mjestu obavite potrebne preglede i zahvate
                </div>
                <!-- slika druga -->
                <div class="d-kolona-6 t-kolona-6">
                    <img src="slike/doc.png">
                    <br>
                    <b>Pregled</b>
                    <br>
                    
                    Prilikom dolaska u bolnicu nudimo sveobuhvatni pregled pacijenata
                </div>
                      
            </div>
                <!-- div red drugi -->
            <div class="d-kolona-12 t-kolona-12" id="onama_drugired">
            <div class="d-kolona-6 t-kolona-6">
                <div>

                    <img src="slike/microskop.png">
                    <br>
                    <b>Laboratorij</b>
                    <br>
                    Modernim metodama testiranja nudimo uvid u vaše zdravlje
                </div>
                </div>
                <!-- slika druga -->
                <div class="d-kolona-6 t-kolona-6">
                    <img src="slike/doctool.png">
                    <br>
                    <b>Obiteljska medicina</b>
                    <br>
                    Najbolji liječnici obiteljske medicine stoje vam na raspolaganju
                </div>

            </div>
        </div>
     
               
    </div>
    <div class="red">
        <?php include "includes/footer.php"; ?>
    </div>
    

</body>
</html>
    
