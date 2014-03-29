<?php
require_once 'utils/utils.php';
function sqlQuery($query, $klasa=null) {
	try {
		$dbh = dajPDO ();
		$sth = $dbh->prepare ( $query );
		$sth->execute ();
		$wynik = array ();
		while ( $rekord = $sth->fetchObject ( $klasa ) ) {
			$wynik [sizeof ( $wynik )] = $rekord;
		}
		return $wynik;
	} catch ( PDOException $e ) {
		error_log ( "Problem z wykonaniem zapytania:\n $query \n" . $e->getMessage () );
		serverError ();
	}
}
function dajPDO() {
	$dbh = new PDO ( 'mysql:host=localhost;dbname=php', 'php', 'php2' );
	return $dbh;
}
?>