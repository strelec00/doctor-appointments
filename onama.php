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
         
            <section id="sadrzaj" class="t-kolona-12">
              <div class="d-kolona-1">
                  </div>
                  <div class="d-kolona-4 t-kolona-12" id="leftpart">
                    <h3 id="abtitle">Poliklinika zdravlje</h3>
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


                  <div class="d-kolona-5 t-kolona-12">
                    <h3 id="abtitle">Usluge</h3>
                    <div id="maincontainer">
                    <div id="firstcontainer">
                    <div id="kirurgija">
                      <img src="slike/surgery.png" id="surgery">
                      <span>
                        <br>
                        Kirurgija
                        <br>
                        Na jednome mjestu obavite potrebne preglede i zahvate
                      </span>
                    </div>
                    <br>
                    <div id="pregled">
                      <img src="slike/doc.png" id="dok">
                      <span>
                        <br>
                        Pregled
                        <br>
                        Prilikom dolaska u bolnicu nudimo sveobuhvatni pregled pacijenata
                      </span>
                    </div>
                    </div>
                    <br>
                    <br>
                    <div id="drugicontainer">
                    <div id="labos">
                      <img src="slike/microskop.png" id="micro">
                      <span>
                        <br>
                        Laboratorij
                        <br>
                        Modernim metodama testiranja nudimo uvid u vaše zdravlje
                      </span>
                    </div>
                    <div id="obmed">
                      <img src="slike/doctool.png" id="tool">
                      <span>
                        <br>
                        Obiteljska medicina
                        <br>
                        Najbolji liječnici obiteljske medicine stoje vam na raspolaganju
                      </span>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="d-kolona-1 t-kolona-12">
                  </div>
              
            </section> 
    </div>
    <div class="red">
        <?php include "includes/footer.php"; ?>
    </div>
    

</body>
</html>
    
