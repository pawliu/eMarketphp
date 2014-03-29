<?php
include 'utils/LinkiDoPlikow.php';
include 'utils/SQLUtils.php';
// ====================
if (isset ( $_GET ['producentId'] )) {
	$producentId = $_GET ['producentId'];
	$produktyProducenta = znajdzProduktyProducenta ( $producentId );
	wyswietlProduktyWTabeli ( $produktyProducenta );
} else {
	echo "Nie podano id producenta";
}
// ====================
function znajdzProduktyProducenta($producentId) {
	$polaczenie = otworzPolaczenie ();
	
	$produktyProducentSQL = "select p.id,p.nazwa from produkt p join opisprod op on op.id=p.id where op.idProducenta=$producentId";
	$wynik = mysql_query ( $produktyProducentSQL );
	sprawdzStatusSql ();
	$produkty = array ();
	$prodIdx=0;
	while ( $wiersz = mysql_fetch_row ( $wynik ) ) {
		$produkty[$prodIdx++]=$wiersz;
	}
	mysql_free_result($wynik);
	zamknijPolaczenie ( $polaczenie );
	return $produkty;
}
function wyswietlProduktyWTabeli($produktyDoWyswietlenia) {
	echo "No Nazwa produktu</br>";
	foreach ( $produktyDoWyswietlenia as $produkt ) {
		$id = $produkt [0];
		$nazwa = $produkt [1];
		wyswietlWiersz ( $id, $nazwa );
	}
	setcookie($name)
}
function wyswietlWiersz($id, $nazwa) {
	echo "&nbsp; $id " . linkDoDetaliProduktu ( $id, $nazwa ) . " </br>";
}
?>