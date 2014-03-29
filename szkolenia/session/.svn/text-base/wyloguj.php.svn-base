<?php
header ( 'Content-Type: application/json' );
session_start ();
session_destroy ();
// echo "Wylogowano pomyslnie.
// 		</br><a href='index.php'>Index</a>";
// header ( "Location: index.php" );
$wynik=new Wynik(true);
echo json_encode($wynik);

class Wynik{
	public $wynik;

	function __construct($wynik){
		$this->wynik=$wynik;
	}
}
?>