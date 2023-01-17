<?php
session_start(); 
/* ako korisnik nije prijavljen (nisu postavljene sesijske varijable $_SESSION['email'] i $_SESSION['lozinka']) vrati ga na početnu stranicu */
if((!isset($_SESSION['email'])) || (!isset($_SESSION['lozinka']))){
	echo "<script>location.href = 'index.php';</script>";
	exit;
}

/* ako su sesijski podaci postavljeni, provjeri da li u bazi postoji korisnik s istim podacima => ako ne, vrati korisnika na početnu stranicu */
require_once "includes/session/autentifikacija.php";
$korisnicki_podaci = autentifikacija($_SESSION['email'], $_SESSION['lozinka']);
if(($_SESSION['email'] != $korisnicki_podaci[1]) || ($_SESSION['lozinka'] != $korisnicki_podaci[2])){
	echo "<script>location.href = 'index.php';</script>";
	exit;
}
?>