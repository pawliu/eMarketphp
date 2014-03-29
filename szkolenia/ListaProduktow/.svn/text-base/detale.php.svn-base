<?php
require_once 'repozytoriumProduktow.php';
$produktOk=false;
if (isset ( $_GET ['produktId'] )) {
	$produktId = $_GET ['produktId'];
	$detale = odczytajDetalePoId ( $produktId );
	if ($detale) {
		$produktOk=true;
		echo "Nazwa: $detale[0]<br> Opis: $detale[1]<br> Cena: $detale[2]<br>";
	} else {
		echo "Blad odczytu detali";
	}
} else {
	echo "Blad brak produktu";
}
echo "<a href=index.php>Index</a>";
if($produktOk){
	echo "&nbsp <a href=edytuj.php?produktId=$produktId>Edytuj</a>";
}
echo"<br>"
?>