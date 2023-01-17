    <?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="hr">
<head>
   <?php
   $title = "Zdravlje";
   $description = "Web aplikacija za rezervaciju termina"; 
   $keywords = "rezervacija, termini, doktor, pocetna"; 
    include "includes/head.php";
    
   ?>
   <script>
        window.alert("Dobrodošao natrag <?php echo $_SESSION['email']; ?>");
    </script>

</head>

<body>
    <div class="red">
        <?php include "includes/navigation.php"; ?> 
    </div>

   

    <div class="red">
         <?php include "includes/header.php"; ?>
         <?php include "includes/main.php"; ?>
         
            <section id="sadrzaj" class="t-kolona-12">
              
            </section> 
    </div>
    <div class="red">
        <?php include "includes/footer.php"; ?>
    </div>
    

</body>
</html>
