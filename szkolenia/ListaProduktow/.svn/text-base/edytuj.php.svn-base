<?php
require_once 'repozytoriumProduktow.php';
if (metodaPost ()) {
	// zmien wartosc
	$nowaNazwa=$_POST['nazwa'];
	$nowyOpis=$_POST['opis'];
	$nowaCena=$_POST['cena'];
	$produktId=$_POST['produktId'];
	if(	edytujProduktOId($produktId, $nowaNazwa, $nowyOpis, $nowaCena)){
		echo "Zmieniono poprawnie<br>";
	}else{
		echo "Blad<br>";
	}
} else {
	// pokaz formularz
	$produktId = $_GET ['produktId'];
	$detale = odczytajDetalePoId ( $produktId );
	if (! $detale) {
		echo "Brak produktu</br>";
	} else {
		$nazwa = $detale [0];
		$opis = $detale [1];
		$cena = $detale [2];
		echo "<form method='POST' action='edytuj.php'>
		<input type='hidden' name='produktId' value='$produktId'>
	<b>Nazwa:</b> <input type='text' name='nazwa' value='$nazwa' ><br>
	<b>Opis: </b> <input type='text' name='opis' value='$opis'><br>
	<b>Cena: </b> <input type='text' name='cena' value='$cena'><br>
	<input type='submit' value='Zapisz' name='zapisz'>
	</form></br>";
	}
}

echo "<a href='index.php'>Lista</a>  ";
function metodaPost() {
	return $_SERVER ['REQUEST_METHOD'] === 'POST';
}
?>