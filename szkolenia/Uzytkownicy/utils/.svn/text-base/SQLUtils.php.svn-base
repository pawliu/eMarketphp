<?php

function sprawdzStatusSql() {
	$kodBledu = mysql_errno ();
	if ($kodBledu != 0) {
		// echo "Problem z SQL " . mysql_error () . '</br>';
		throw new Exception ( "Problem z SQL " . mysql_error (), $kodBledu );
	}
}

function otworzPolaczenie() {
	$polaczenie = mysql_connect ( "localhost", "php", "php2" );
	sprawdzStatusSql ();
	mysql_select_db ( "php", $polaczenie );
	sprawdzStatusSql ();
	return $polaczenie;
}

function otworzPolaczenieMySQLI() {
	$mysqli = new mysqli("localhost", "php", "php2", "php");
	if (mysqli_connect_errno()) {
		throw new Exception ( "Problem z SQL " . mysqli_connect_error());
	}
	return $mysqli;
}
function zamknijPolaczenie($polaczenie) {
	mysql_close ( $polaczenie );
}
?>