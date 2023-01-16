<!DOCTYPE html>
<html lang="hr">
<head>
   <?php
   $title = "Rezerviraj termin";
   $description = "Web aplikacija za rezervaciju termina"; 
   $keywords = "rezervacija, termini, doktor, termin, poliklinika"; 
    include "includes/head.php";  
   ?>
   <link rel="stylesheet" href="css/termin.css" type="text/css">
   
   </head>
<body>
<form class="form">
  <h2>Rezerviraj termin</h2>
  <p type="Ime i prezime:"><input placeholder="Upiši svoje ime i prezime ovdje.." name="ime_prezime_pacijenta"></input></p>
  <p type="Opis problema:"><input placeholder="Opišite svoj problem.." name="opis_problema"></input></p>
  <p type="Datum rođenja:"><input type="date"> </input></p>
  <p type="Vrijeme i datum termina?:"><input type="datetime-local" ></input></p>
  <p type="Boj mobitela:"><input placeholder="Upišite broj mobitela.."></input></p>
  <p type="Spol:">
      <select name="spol" id="spol" style="width:200px;">
        <option value="musko">Muško</option>
        <option value="zensko">Žensko</option>
    </p>
</select>

</div>
  <button>Rezerviraj</button>
  <div class="text">Vrati se na početnu.
    <a href="index.php" class="text">Početna</a>
</div>
</form>

</body>
</html>
