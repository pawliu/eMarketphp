<?php
$n = 35;
$x = 5;

$iloscLiczb = $n;
$liczbWWierszu = $x;

$tablicaLiczb = zbudujTabliceZLiczbWWierszach ( $iloscLiczb, $liczbWWierszu );
wyswietlTablice ( $tablicaLiczb );


function wyswietlTablice($tablicaLiczb) {
	foreach ( $tablicaLiczb as $wierszWTablicy ) {
		echo "Wiersz ==";
		wyswietlWiersz ( $wierszWTablicy );
		echo "</br>";
	}
}
function wyswietlWiersz($wierszWTablicy) {
	foreach ( $wierszWTablicy as $liczba ) {
		echo $liczba . "&nbsp";
	}
}
function zbudujTabliceZLiczbWWierszach($iloscLiczb, $liczbWWierszu) {
	$tablica;
	$wiersz;
	$indexWWierszu = 0;
	$indexWTablicy = 0;
	for($i = 1; $i <= $iloscLiczb; $i ++) {
		$wiersz [$indexWWierszu] = $i;
		if ($i % $liczbWWierszu != 0) {
			// ten sam wiersz
			$indexWWierszu += 1;
		} else {
			// nowy wiersz
			$tablica [$indexWTablicy ++] = $wiersz;
			$indexWWierszu = 0;
			$wiersz = array ();
		}		
	}
	if (count ( $wiersz ) > 0) {
		$tablica [$indexWTablicy ++] = $wiersz;
	}
	return $tablica;
}

?>