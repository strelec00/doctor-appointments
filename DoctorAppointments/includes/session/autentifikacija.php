<?php 
function autentifikacija($email, $lozinka){
	if(is_file("../baza.php")){
		require_once "../baza.php";
	}
	else{
		require_once "includes/baza.php";
	}
	$baza = new Baza();
	$upit = "SELECT id_korisnika, email, lozinka, id_grupe FROM korisnik WHERE email = '$email' AND lozinka = '$lozinka'";
	$rezultat = $baza->dohvatiDB($upit);
	$broj = $rezultat->num_rows;
	if($broj != 0){
		while($red = $rezultat->fetch_array()){
			$polje = array($red['id_korisnika'], $red['email'], $red['lozinka'], $red['id_grupe']);
			return $polje;
		}
	}
}
?>
