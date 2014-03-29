<?php
require_once 'repozytoriumUzytkownikow.php';
require_once 'form.php';
require_once 'utils/utils.php';
require_once 'uzytkownik.php';

if (metodaPost ()) {
	// POST
	// zapisz
	$login = $_POST ['login'];
	$haslo = $_POST ['haslo'];
	$imie = $_POST ['imie'];
	$nazwisko = $_POST ['nazwisko'];
	$email = $_POST ['email'];
	$id = $_POST ['id'];
	$uzytkownik = new Uzytkownik ( $id );
	$uzytkownik->ustawNoweDane ( $login, $haslo, $imie, $nazwisko, $email );
	if (edytuj ( $uzytkownik )) {
		echo "Udalo sie</br>";
	} else {
		echo "Nie udalo sie</br>";
	}
} else {
	// GET
	// pokaz formularz
	$id = $_GET ['id'];
	$detale = znajdzDetale ( $id );
	pokazFormularz ( 'edytuj.php', $id, $detale );
}

echo "<a href='index.php'>Lista</a>  ";
?>