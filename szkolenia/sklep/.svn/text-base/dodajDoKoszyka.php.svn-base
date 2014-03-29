<?php
require 'utils/json.php';
require_once 'koszyk.php';
$wynik = new Wynik ();
if (metodaPost ()) {
	if (isset ( $_POST ['element'] )) {
		$id = $_POST ['element'];
		$elementy = array ();
		if (isset ( $_COOKIE [COOKIE_NAME] )) {
			$elementy = json_decode ( $_COOKIE [COOKIE_NAME] );
		}
		$znalezionyElement = null;
		foreach ( $elementy as $element ) {
			if ($element->id == $id) {
				$znalezionyElement = $element;
				break;
			}
		}
		if ($znalezionyElement == null) {
			$znalezionyElement = new Element ( $id, 0 );
			$elementy [sizeof ( $elementy )] = $znalezionyElement;
		}
		$znalezionyElement->ilosc += 1;
		
		$elementyAsString = json_encode ( $elementy );
		setcookie ( COOKIE_NAME, $elementyAsString, time () + 24 * 60 * 60 );
		$wynik->ok = true;
		$wynik->opis = $elementyAsString;
	} else {
		$wynik = bladSerwera ();
	}
} else {
	$wynik = bladSerwera ();
}
echo json_encode ( $wynik );
// ==============
function bladSerwera() {
	$wynik->ok = false;
	$wynik->opis = "Blad serwera";
}
class Wynik {
	public $ok = false;
	public $opis = "";
}
class Element {
	public $id;
	public $ilosc;
	function __construct($id, $ilosc) {
		$this->id = $id;
		$this->ilosc = $ilosc;
	}
}