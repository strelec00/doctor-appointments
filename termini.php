<?php
require "includes/session/provjera-prijava.php";
?>
<!DOCTYPE html>
<html lang="hr">
<head>
   <?php
   $title = "Rezerviraj termin";
   $description = "Web aplikacija za rezervaciju termina"; 
   $keywords = "rezervacija, termini, doktor, termin, poliklinika"; 
    include "includes/head.php";  
   ?>
   
   </head>
<body>
<?php

   if(!isset($_SESSION["status"])){
    $_SESSION["status"] = "undifine";
}
if(!isset($_SESSION["id_grupe"])){
    $_SESSION["id_grupe"] = "undifine";
}


if ($_SESSION["status"] == 1 and ($_SESSION["id_grupe"] == 1)) {
  echo "<div class='red'>";
  include "includes/navigation.php";
  echo "</div>";
  ?>


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

<?php 
  echo "<div class='red'>";
  include "includes/footer.php";
  echo "</div>";
}
else{
  
    include "includes/termini_forma.php";
}
    
?>



</body>
</html>
