<?php
header ( 'Content-Type: application/json' );
// header ( 'Content-Type: application/json' );
// Aby ten kod zadzialal w php.ini musi byæ wlaczone rozszerzenie pdo dla mysql
// czyli trzeba odkomentowac linie extension=php_pdo_mysql.dll i restart Apache
try {
	$dbh = new PDO ( 'mysql:host=localhost;dbname=php', 'php', 'php2' );
	$sth = $dbh->prepare ( 'SELECT * from PlikGraficzny' );
	$sth->execute ();
	$lokalizacje = array ();
	while ( $plik = $sth->fetchObject ( "Plik" ) ) {
		$lokalizacje [sizeof ( $lokalizacje )] = $plik->lokalizacja;
	}
	$dbh = null;
	echo json_encode ( $lokalizacje, JSON_UNESCAPED_SLASHES );
} catch ( PDOException $e ) {
	echo $e->getMessage ();
	die ();
}
class Plik {
	public $id;
	public $lokalizacja;
	public $nazwa;
	public $opis;
}
?>