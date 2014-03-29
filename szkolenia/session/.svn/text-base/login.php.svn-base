<?php
header ( 'Content-Type: application/json' );
require_once '../session/logowanie.php';
require_once '../session/sesje.php';
require_once '../session/ImieNazwisko.php';
error_reporting(E_ERROR);
if ($_SERVER ['REQUEST_METHOD'] === "POST") {
	if (isset ( $_POST ['uzytkownik'] ) && (isset ( $_POST ['haslo'] ))) {
		$uzytkownik = $_POST ['uzytkownik'];
		$haslo = $_POST ['haslo'];
		$daneUzytkownika=zalogujPS ( $uzytkownik, $haslo );
		if ($daneUzytkownika){
			zapiszDoSesji('daneUzytkownika', $daneUzytkownika);
			$wynik=new Wynik(true);
		}else{
			$wynik=new Wynik(false);
		}
		echo json_encode($wynik);
	}
}


class Wynik{
	public $wynik;
	
	function __construct($wynik){
		$this->wynik=$wynik;
	}
}
?>