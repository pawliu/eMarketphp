<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Testowa strona</title>
</head>
<body>
	Sttart php
	</br>
<?php
$n = 12;
// $ind = 0;
// $tablica [0] = 0;
// for($i = 1; $i <= $n; $i ++) {
// $tablica [$ind ++] = $i;
// }

$tablica [0] = array (
		1,
		2,
		3 
);
$tablica [1] = array (
		4,
		5,
		6 
);
$tablica [2] = array (
		7,
		8,
		9 
);

foreach ( $tablica as $wiersz ) {
	foreach ($wiersz as $wartosc) {
		echo $wartosc;
	};
	echo "</BR>";
};

// dla kazdego elementu
// foreach ( $tablica as $element ) {
// // napisz go i dopisz </br>
// echo $element . "</br>";
// }

echo "</br>================================</br>";

$a = 7;
$b = 13;
$docelowaIlosc = 1000;

pokazLiczbyWTabeli ( 15, 2, 1 );
pokazLiczbyWTabeli ( 25, 3, 4 );
function pokazLiczbyWTabeli($docelowaIlosc, $a, $b) {
	$iloscKolumn = $b;
	$iloscWierszyNaStrone = $a;
	if ($docelowaIlosc <= 0) {
		// docelowa ilosc <=0
		echo "Mercedes za 5z³ nie istnieje";
	} else {
		// sa dane do wyswietlenia
		$iloscWypisanychWierszy = 0;
		$nowaStrona = "Strona ";
		$numerStrony = 0;
		for($i = 1; $i < $docelowaIlosc; $i ++) {
			
			echo $i;
			if ($i % $iloscKolumn != 0) {
				// normalnie z , i pscja
				echo ';&nbsp';
			} else {
				// z³am wiersz
				echo "</br>";
				// nowa linia jesli trzeba
				$iloscWypisanychWierszy ++;
				if ($iloscWypisanychWierszy % $iloscWierszyNaStrone == 0) {
					// $numerStrony++;
					$numerStrony = $iloscWypisanychWierszy / $iloscWierszyNaStrone;
					// wlasnie wydrukowalismy co piaty wiersz
					echo $nowaStrona . $numerStrony . "</br>";
				}
			}
			
			// echo '&nbsp';
			// to jest komentarz liniowy
			// moze miec jedna linie
		}
		echo $docelowaIlosc;
		echo "</br>" . $nowaStrona . ++ $numerStrony . "</br>";
	}
}
// } else {

// }
?>
</br>Koniec php

	</br>
	</br>
	</br> $docelowaIlosc = 38; for($i = 1; $i < $docelowaIlosc; $i ++) {
	echo $i.',&nbsp'; // echo '&nbsp'; } echo $docelowaIlosc;
</body>
</html>