<?php
require_once 'utils/sqlUtils.php';
$idKategorii = 'null';
if (isset ( $_GET ['kategoriaID'] )) {
	$idKategorii = $_GET ['kategoriaID'];
}
// require 'utils/json.php';
$json=json_encode ( znajdzProdukty ( $idKategorii ) );
echo $json;
function znajdzProdukty($idKategorii) {
	$zapytanie = "SELECT id, nazwa, cena FROM produkt";
	if ($idKategorii != 'null') {
		$warunek = zbudujWarunek ( $idKategorii );
		$zapytanie = $zapytanie . $warunek;
	}
	$wynik = sqlQuery ( $zapytanie, 'ProduktNaLiscie' );
	return $wynik;
}
function zbudujWarunek($idKategorii) {
	$ids = wezIdiIdDzieci ( $idKategorii );
	return " where idKategorii in (" . $ids . ")";
}

function wezIdiIdDzieci($idKategorii) {
	$wynik = "".$idKategorii;
	$zapytanie = "SELECT id FROM kategoria where idRodzica = $idKategorii";
	$podkategorie = sqlQuery ( $zapytanie );
	foreach ( $podkategorie as $podkategoria ) {
		$wynik = $wynik.",".wezIdiIdDzieci ( $podkategoria->id ) ;
	}
	return $wynik;
}

class ProduktNaLiscie {
	public $id;
	public $nazwa;
	public $cena;
}
class Produkt {
}
?>