<div class="d-kolona-1 t-kolona-0">
    
    </div>
    <div id="logo" class="d-kolona-2 t-kolona-5">
        <a href="index.php">
            <img src="./slike/logo2.png" />
        </a>
</div>
<nav id="navigacija" class="d-kolona-9 t-kolona-8">
    
    <ul>
        <li><a href="index.php">POČETNA</a></li>
        <li><a href="termini.php">TERMINI</a></li>
        <?php 
         if(!isset($_SESSION["status"])){
            $_SESSION["status"] = "undifine";
        }
        if(!isset($_SESSION["id_grupe"])){
            $_SESSION["id_grupe"] = "undifine";
        }
        if($_SESSION["status"] != 0 AND ($_SESSION["id_grupe"] == 1)){
            echo "<li><a href='pacijenti.php'>PACIJENTI</a></li>";
        } 
        ?>
        
        <li><a href="onama.php">O NAMA</a></li>
        <li><a href="kontakt.php">KONTAKT</a></li>

        <?php 
        if(!isset($_SESSION["status"])){
            $_SESSION["status"] = "undifine";
        }
        if(!isset($_SESSION["id_grupe"])){
            $_SESSION["id_grupe"] = "undifine";
        }
        
        
        if($_SESSION["status"] == 1) {
        echo 
        "<li><a href='includes/session/zatvori-sesiju.php'><button class='button-85' role='button'>Odjavi se</button>";}
        else{
            echo 
            "<li><a href='login.php'><button class='button-85' role='button'>Login</button>";}
            
        ?>       
        
    
    </a></li>
</ul>
</nav>
<button class="hamburger">
            <div class="bar"></div>
        </button>
	<div class="mobile-nav">
    <ul>
        <a href="index.php">POČETNA</a>
        <a href="termini.php">TERMINI</a>

        <?php
         if(!isset($_SESSION["status"])){
            $_SESSION["status"] = "undifine";
        }
        if(!isset($_SESSION["id_grupe"])){
            $_SESSION["id_grupe"] = "undifine";
        }
            if($_SESSION["status"] == 1 AND ($_SESSION["id_grupe"] == 1)){
            echo "<a href='pacijenti.php'>PACIJENTI</a>";
        } 
        ?>
        <a href="onama.php">O NAMA</a>
        <a href="kontakt.php">KONTAKT</a>    
       <?php
       
  if($_SESSION["status"] != 1) {
    echo 
    "<a href='login.php'>LOGIN</a>";}
    else{
   echo 
    "<a href='includes/session/zatvori-sesiju.php'>ODJAVI SE</a>";}
        
       ?>
</li>
</ul>
    </div>
    <script src="./js/hamburger.js"></script>


