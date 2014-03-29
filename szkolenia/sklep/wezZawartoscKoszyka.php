<?php
require 'utils/json.php';
require_once 'utils/sqlUtils.php';
define ( 'COOKIE_NAME', "koszyk" );
$wynik = array ();
if (isset ( $_COOKIE [COOKIE_NAME] )) {
	$elementy = json_decode ( $_COOKIE [COOKIE_NAME] );
	$wynik = dekorujElementy ( $elementy );
}
echo json_encode ( $wynik );

// ================
function dekorujElementy($elementy) {
	$listaId = zbudujListeId ( $elementy );
	
	$query = "select id,nazwa,cena from Produkt where id in ($listaId)";
	$wynik = sqlQuery ( $query, 'ProduktWKoszyku' );
	foreach ($wynik as $elWyniku) {
		foreach ($elementy as $element) {
			if($element->id==$elWyniku->id){
				$elWyniku->ilosc=$element->ilosc;
				break;
			}
		}
	}
	return $wynik;
}
function zbudujListeId($elementy) {
	$lista = array ();
	foreach ( $elementy as $element ) {
		$lista [sizeof ( $lista )] = $element->id;
	}
	return implode ( ",", $lista );
}
class ProduktWKoszyku {
	public $id;
	public $nazwa;
	public $cena;
	public $ilosc;
}

?>