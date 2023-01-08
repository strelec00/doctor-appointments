<!DOCTYPE html>
<html lang="hr">
<head>
   <?php
   $title = "Kontakt";
   $description = "Web aplikacija za rezervaciju termina"; 
   $keywords = "rezervacija, termini, doktor, termin, poliklinika"; 
    include "includes/head.php";  
   ?>
   <link rel="stylesheet" href="css/contact.css" type="text/css">
   
   </head>
<body>
<form class="form">
  <h2>Kontaktiraj nas</h2>
  <p type="Ime:"><input placeholder="Upiši svoje ime ovdje.."></input></p>
  <p type="Email:"><input placeholder="Kako da vas kontaktiramo natrag.."></input></p>
  <p type="Poruka:"><input placeholder="Što nam žeite reći.."></input></p>
  <button>Pošalji poruku</button>
  <div class="text">Vrati se na početnu.
    <a href="index.php" class="text">Početna</a>
</div>
</form>

</body>
</html>
