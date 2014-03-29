<?php
include 'utils/LinkiDoPlikow.php';
include 'utils/SQLUtils.php';
// ===================
$producenci = znajdzProducentow ();
wyswietlProducentow ( $producenci );
// ===================
function znajdzProducentow() {
	$polaczenie = otworzPolaczenie ();
	$znajdzProducentowSql = "select id,nazwa from producent";
	$wynik = mysql_query ( $znajdzProducentowSql );
	sprawdzStatusSql ();
	
	$producenci = array ();
	$idxProducenta = 0;
	while ( $wiersz = mysql_fetch_row ( $wynik ) ) {
		$producenci [$idxProducenta ++] = $wiersz;
	}
	
	mysql_free_result ( $wynik );
	zamknijPolaczenie ( $polaczenie );
	return $producenci;
}
function wyswietlProducentow($producenci) {
	foreach ( $producenci as $producent ) {
		echo linkDoProduktowProducenta ( $producent [0], $producent [1] )."</br>";
	}
}
// ===================
?>