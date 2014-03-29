<?php
error_reporting ( E_ERROR );
date_default_timezone_set ( "Europe/Warsaw" );
include 'logowanie.php';
include 'widok.php';
include 'sesje.php';
require_once 'ImieNazwisko.php';
if (isset ( $_POST ['nazwaUzytkownika'] )) {
	$nazwaUzytkownika = $_POST ['nazwaUzytkownika'];
	$haslo = $_POST ['haslo'];
	time ();
	$daneUzytkownika = zalogujPS ( $nazwaUzytkownika, $haslo );
	if ($daneUzytkownika) {
		zapiszDoSesji ( "daneUzytkownika", $daneUzytkownika );
		pokazDaneUzytkownika ( $daneUzytkownika );
	} else {
		wyswietlBladLogowania ();
	}
} else {
	$daneUzytkownika2 = odczytajZSesji ( "daneUzytkownika" );
	if ($daneUzytkownika2) {
 		pokazDaneUzytkownika ( $daneUzytkownika2 );
	} else {
		wyswietlFormularzLogowania ( "user1", "pass" );
	}
	if (isset ( $_COOKIE ['ostatniaData'] )) {
		$ostatniaData = $_COOKIE ['ostatniaData'];
		echo "</br>Data ostatniej wizyty to " . date ( "d.m.Y H:i:s", $ostatniaData );
	}
	setcookie ( 'ostatniaData', time (), time () + 60 );
}

?>