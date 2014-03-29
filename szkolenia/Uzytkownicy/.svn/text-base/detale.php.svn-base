<?php
require_once 'repozytoriumUzytkownikow.php';
require_once 'utils/tableUtils.php';
require_once 'uzytkownik.php';
$editLink = "";
$detaleOk = false;
if (isset ( $_GET ['id'] )) {
	echo "Detale użytkownika</br>";
	$id = $_GET ['id'];
	$detaleOk = pokazDetale ( $id );
	$editLink = "<a href=edytuj.php?id=$id>Edytuj</a>";
} else {
	pokazBlad ();
}
echo "<a href='index.php'>Lista</a>  ";
if ($detaleOk) {
	echo $editLink;
}
function pokazDetale($idUzytkownika) {
	$detale = znajdzDetale ( $idUzytkownika );
	if ($detale) {
		
		pokazDetaleJakoTabele ( $detale );
		// pokazDetal ( $detale[0], 'Login' );
		// pokazDetal ( $detale [1], 'Haslo' );
		// pokazDetal ( $detale [2], 'Imie' );
		// pokazDetal ( $detale [3], 'Nazwisko' );
		// pokazDetal ( $detale [4], 'Email' );
		return true;
	} else {
		pokazBlad ();
		return false;
	}
}
function pokazDetaleJakoTabele(Uzytkownik $detale) {
	$klucze = array (
			'Login',
			'Haslo',
			'Imie',
			'Nazwisko',
			'Email' 
	);
	$wartosci = array (
			$detale->getLogin (),
			$detale->getHaslo (),
			$detale->getImie (),
			$detale->getNazwisko (),
			$detale->getEmail () 
	);
	
	rysujTabele ( array (
			$klucze,
			$wartosci 
	) );
}
function pokazBlad($dodatkoweInfo = null) {
	echo 'Blad</br>';
}
function pokazDetal($wartosc, $klucz) {
	echo "$klucz: $wartosc </br>";
}
?>