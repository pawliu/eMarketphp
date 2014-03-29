<?php
// error_reporting(E_ERROR);
require_once "repozytoriumProduktow.php";

echo "Produkty</br>";
pokazDodanieNowego ();
pokazListe ();


function pokazDodanieNowego() {
	echo "<a href='dodajNowy.php'>Dodaj nowy</a></br>";
}
function pokazListe() {
	$produkty = znajdzWszystkieProdukty ();
	foreach ( $produkty as $produkt ) {
		wyswietlProdukt ( $produkt );
	}
}
function wyswietlProdukt(&$produkt) {
	echo "<a href=edytuj.php?produktId=$produkt[0]>Edytuj</a> &nbsp<a href=detale.php?produktId=$produkt[0]>$produkt[1]</a></br>";
}

?>