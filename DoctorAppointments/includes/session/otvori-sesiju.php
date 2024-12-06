<?php
require "autentifikacija.php";

if (!isset($_POST['email'])) {
	$_POST['email'] = "undefine"; 
}
if (!isset($_POST['lozinka'])) {
	$_POST['lozinka'] = "undefine"; 
}
$email = $_POST['email'];
$lozinka = $_POST['lozinka'];
$korisnicki_podaci = autentifikacija($email ,$lozinka);

if(($email == $korisnicki_podaci[1]) && ($lozinka == $korisnicki_podaci[2]) && (!empty($korisnicki_podaci[1])) && (!empty($korisnicki_podaci[2]))){
	session_start();
	$_SESSION['id_korisnika'] = $korisnicki_podaci[0];
	$_SESSION['email'] = $korisnicki_podaci[1];
	$_SESSION['lozinka'] = $korisnicki_podaci[2];
	$_SESSION['id_grupe'] = $korisnicki_podaci[3];
	$_SESSION['status'] = 1;

	echo "<script>location.href = '../../index.php';</script>";
}
else{
	/* ako prijava nije uspjela, radimo sljedeće:
		1. bacamo poruku greške
		2. vraćamo korisnika na početnu stranicu bez otvaranja korisničke sesije
	*/
	echo "<meta charset='utf-8' />";
	echo "<script>alert('Pogrešna prijava!');</script>";
	echo "<script>location.href = '../../index.php';</script>";
	exit;
}
?>