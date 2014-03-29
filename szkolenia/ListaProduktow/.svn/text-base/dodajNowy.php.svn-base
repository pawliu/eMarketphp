<?php
require_once 'repozytoriumProduktow.php';
require_once 'utils/SQLUtils.php';

if (metodaPost ()) {
	// POST
	// zapisz
	$nazwa = $_POST ['nazwa'];
	$opis = $_POST ['opis'];
	$cena = (double)$_POST ['cena']*1.0;
	if (dodajNowy ( $nazwa, $opis, $cena )) {
		echo "Udalo sie</br>";
	} else {
		echo "Nie udalo sie</br>";
	}
} else {
	// GET
	// pokaz formularz
	echo "<form method='POST' action='dodajNowy.php'>
<b>Nazwa:</b> <input type='text' name='nazwa' ><br>
<b>Opis: </b> <input type='text' name='opis' ><br>
<b>Cena: </b> <input type='text' name='cena' ><br>
<input type='submit' value='Zapisz' name='zapisz'>
</form></br>";
}

echo "<a href='index.php'>Lista</a>  ";
function metodaPost() {
	return $_SERVER ['REQUEST_METHOD'] === 'POST';
}

?>