<?php
require 'utils/SQLUtils.php';
require_once 'ImieNazwisko.php';
function zaloguj($login, $haslo) {
	$zapytanieSQL = "select haslo,imie,nazwisko 
	from uzytkownik where nazwa='$login'";
	
	$polaczenie = otworzPolaczenie ();
	$wynikZapytania = mysql_query ( $zapytanieSQL );
	sprawdzStatusSql ();
	$wynik = mysql_fetch_row ( $wynikZapytania );
	$logowanieOk;
	if ($wynik) {
		if (strcmp ( $wynik [0], $haslo ) == 0) {
			$logowanieOk [0] = $wynik [1];
			$logowanieOk [1] = $wynik [2];
		} else {
			$logowanieOk = false;
		}
	}
	mysql_free_result ( $wynikZapytania );
	zamknijPolaczenie ( $polaczenie );
	return $logowanieOk;
}
function zalogujPS($login, $haslo) {
	$mysqli = otworzPolaczenieMySQLI ();
	$zapytanie = "select id,imie,nazwisko 
	from uzytkownik where nazwa= ? and haslo = ?";
	$przygotowanaInstrukcja = $mysqli->prepare ( $zapytanie );
	if (mysqli_errno ($mysqli) != 0) {
		throw new Exception ( mysqli_error ($mysqli) );
	}
	$przygotowanaInstrukcja->bind_param ( "ss", $login, $haslo );
	if ($przygotowanaInstrukcja->execute ()) {
		$wynik=$przygotowanaInstrukcja->get_result();
		$imienazwisko=$wynik->fetch_object("ImieNazwiskoEXT");
// 		$przygotowanaInstrukcja->bind_result ( $wynik [0], $wynik [1] );
// 		$wynikZapytania = $przygotowanaInstrukcja->fetch ();
		
		
		
// 		if ($wynikZapytania) {
			return $imienazwisko;
// 		}
	}
	return false;
}

?>