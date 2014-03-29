<?php

date_default_timezone_set ( 'Europe/Warsaw' );
require_once 'repozytoriumZamowien.php';
require_once 'koszyk.php';

$zamowienie = new Zamowienie ();
if (metodaPost ()) {
	error_reporting ( E_ALL );
	if (isset ( $_POST ['elementy'] )) {
		$zamowienie->elementy = json_decode ( $_POST ['elementy'] );
		$zamowienie->adres = $_POST ['adres'];
		$zamowienie->komentarz = $_POST ['komentarz'];
		$zamowienie->data = date ( "d.m.Y H:i:s", time () );
		zlozZamowienie ( $zamowienie );
		echo "Zlozono zamowienie";
	} else {
		serverError ();
	}
}
if (metodaGet ()) {
	if (isset ( $_GET ['id'] )) {
		$id = $_GET ['id'];
		$zamowienie = znajdzZamowienie ( $id );
	} else {
		serverError ();
	}
}
include 'incl/widokZamowienia.html';

?>