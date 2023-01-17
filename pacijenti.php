<?php
require "includes/session/provjera-prijava.php";
?>
<!DOCTYPE html>
<html lang="hr">
<head>
   <?php
   $title = "Pacijenti";
   $description = "Web aplikacija za rezervaciju termina"; 
   $keywords = "rezervacija, termini, doktor, termin, poliklinika,pacijenti"; 
    include "includes/head.php";
    
   ?>
</head>

<body>
  <?php
  if(($_SESSION['id_grupe'] != 1)){
    echo "<script>location.href = 'index.php';</script>";
    exit;
  }
  ?>
    <div class="red">
        <?php include "includes/navigation.php"; ?>        
    </div>


    <div class="red">
         
           
  <div class="t-kolona-0 d-kolona-1">
    asd
  </div>
  
  <div class="t-kolona-12 d-kolona-10" style="height: 600px;">
    
  
</div>

<div class="t-kolona-0 d-kolona-1">
  asd
</div>

    </div>
    <div class="red">
        <?php include "includes/footer.php"; ?>
    </div>
    

</body>
</html>
    
