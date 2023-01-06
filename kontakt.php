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
  <div class="wrapper">
    <form class="form">
      <div class="pageTitle title">Kontakt</div>
      <input type="text" class="name formEntry" placeholder="Unesi ime" />
      <input type="text" class="surname formEntry" placeholder="Unesi prezime" />
      <input type="text" class="email formEntry" placeholder="Email"/>
      <textarea class="message formEntry" placeholder="Message"></textarea>
      <button class="submit formEntry">Pošalji</button>
    </form>
  </div>
</body>

</html>