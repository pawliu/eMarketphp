<?php
require_once 'repozytoriumUzytkownikow.php';
require_once 'form.php';
require_once 'utils/utils.php';

if (metodaPost ()) {
	// POST
	// zapisz
	$login = $_POST ['login'];
	$haslo = $_POST ['haslo'];
	$imie = $_POST ['imie'];
	$nazwisko = $_POST ['nazwisko'];
	$email = $_POST ['email'];
	if (dodajNowy ( $login, $haslo, $imie, $nazwisko, $email )) {
		echo "Udalo sie</br>";
	} else {
		echo "Nie udalo sie</br>";
	}
} else {
	// GET
	// pokaz formularz
	pokazFormularz ( 'dodajNowy.php' );
}

echo "<a href='index.php'>Lista</a>  ";

?>