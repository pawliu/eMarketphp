<?php
require_once 'utils/sqlUtils.php';
$wszystkie = new Kategoria ();
$wszystkie->nazwa = "Wszystkie";
$wszystkie->id = null;
$wszystkie->dzieci = znajdzDzieci ( null );

echo json_encode ( $wszystkie );
function znajdzDzieci($idRodzica) {
	$warunek = "";
	if ($idRodzica == null) {
		$warunek = " is null";
	} else {
		$warunek = " = $idRodzica";
	}
	$zapytanie = "SELECT id, nazwa FROM kategoria where idRodzica" . $warunek;
	$podkategorie = sqlQuery ( $zapytanie, 'Kategoria' );
	foreach ( $podkategorie as $podkategoria ) {
		$podkategoria->dzieci = znajdzDzieci ( $podkategoria->id );
	}
	return $podkategorie;
}

class Kategoria {
	public $id;
	public $nazwa;
	public $dzieci = array ();
}
?>