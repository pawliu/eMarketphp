<?php
include 'utils/LinkiDoPlikow.php';
include 'utils/SQLUtils.php';
$produkty = znajdzProdukty ();
wyswietlProduktyWTabeli ( $produkty );
function znajdzProdukty() {
	$polaczenie = mysql_connect ( "localhost", "php", "php2" );
	sprawdzStatusSql ();
	mysql_select_db ( "php", $polaczenie );
	sprawdzStatusSql ();
	$select = "select id,nazwa from Produkt";
	$wynik = mysql_query ( $select );
	sprawdzStatusSql ();
	$tablicaProduktow = array ();
	$indexWTablicy = 0;
	// while ( $rekord = mysql_fetch_assoc ( $wynik ) ) {
	while ( $rekord = mysql_fetch_row ( $wynik ) ) {
		$tablicaProduktow [$indexWTablicy ++] = $rekord;
	}
	mysql_freeresult ( $wynik );
	mysql_close ( $polaczenie );
	return $tablicaProduktow;
}
function wyswietlProduktyWTabeli($produktyDoWyswietlenia) {
	echo "No Nazwa produktu</br>";
	foreach ( $produktyDoWyswietlenia as $produkt ) {
		$id = $produkt [0];
		$nazwa = $produkt [1];
		wyswietlWiersz ( $id, $nazwa );
	}
}
function wyswietlWiersz($id, $nazwa) {
	echo "&nbsp; $id " . linkDoDetaliProduktu ($id, $nazwa ) . " </br>";
}

?>