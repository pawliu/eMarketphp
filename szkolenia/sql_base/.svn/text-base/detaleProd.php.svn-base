<?php
include 'utils\SQLUtils.php';
// ==============
if (isset ( $_GET ['produktId'] )) {
	$id = $_GET ['produktId'];
	$detaleProd = znajdzDetale ( $id );
	wyswietlDetale ( $detaleProd );
} else {
	echo "Brak produktu";
}
// ==============
function znajdzDetale($id) {
	$polaczenie = otworzPolaczenie ();
	$producent = znajdzProducenta ($id, $polaczenie );
	$nazwa = znajdzNazwe ( $id, $polaczenie );
	$cena = znajdzCene ( $id, $polaczenie );
	$opis = znajdzOpis ( $id, $polaczenie );
	$iloscSztuk = "napisz to";
	zamknijPolaczenie ( $polaczenie );
	return array (
			$producent,
			$nazwa,
			$cena,
			$opis,
			$iloscSztuk 
	);
}
function znajdzNazwe($id, $polaczenie) {
	$znajdzProduktSql = "select nazwa from produkt where id=$id";
	return wezKol1ZWiersza1 ( $znajdzProduktSql );
}
function znajdzCene($id, $polaczenie) {
	$znajdzCeneSql = "select vartosc from cena where id=$id";
	return wezKol1ZWiersza1 ( $znajdzCeneSql );
}
function znajdzOpis($id, $polaczenie) {
	$znajdzOpisSql = "select opis from OpisProd where id=$id";
	return wezKol1ZWiersza1 ( $znajdzOpisSql );
}
function znajdzProducenta($id,$polaczenie) {
	$znajdzProducentaSQL = "select nazwa from producent where id in (select idProducenta from opisprod where id=$id)";
	return wezKol1ZWiersza1 ( $znajdzProducentaSQL );
}
function wyswietlDetale($detale) {
	echo "Producent: " . $detale [0] . "</br>";
	echo "Nazwa    : " . $detale [1] . "</br>";
	echo "Cena w zl: " . $detale [2] . "</br>";
	echo "Opis     : " . $detale [3] . "</br>";
	echo "Ilosc szt: " . $detale [4] . "</br>";
}
?>