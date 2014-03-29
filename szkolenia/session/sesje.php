<?php
require_once 'ImieNazwisko.php';
function zapiszDoSesji($nazwa, $wartosc) {
	if (session_status () != PHP_SESSION_ACTIVE) {
		session_start ();
	}
	$_SESSION [$nazwa] = $wartosc;
}
function odczytajZSesji($nazwa) {
	if (session_status () != PHP_SESSION_ACTIVE) {
		session_start ();
	}
	if (isset ( $_SESSION [$nazwa] )) {
		return $_SESSION [$nazwa];
	} else {
		return null;
	}
}
?>