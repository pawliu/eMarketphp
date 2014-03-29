<?php
$zbA = array (
		1,
		2,
		56,
		24 
);
$zbB = array (
		4,
		81,
		37,
		21,
		2,
		56 
);

wyswietlTablice ( "zbior a", $zbA );
wyswietlTablice ( "zbior b", $zbB );
wyswietlTablice ( "suma a+b", sumaZb ( $zbA, $zbB ) );
wyswietlTablice ( "iloczyn a*b", iloczynZb($zbA, $zbB));
wyswietlTablice ( "rónica a-b", roznicaZb($zbA, $zbB));
function sumaZb($zbA, $zbB) {
	$suma = array ();
	$sumaInd = 0;
	foreach ( $zbA as $element ) {
		$suma [$sumaInd ++] = $element;
	}
	foreach ( $zbB as $element ) {
		if (! elementZnajdujeSieWTablicy ( $element, $suma )) {
			$suma [$sumaInd ++] = $element;
		}
	}
	return $suma;
}

function iloczynZb($zbA,$zbB){
	$iloczyn = array();
	$ind=0;
	foreach ($zbA as $elA){
		if(elementZnajdujeSieWTablicy($elA, $zbB)){
			$iloczyn[$ind++]=$elA;
		}
// 		foreach ($zbB as $elB){
// 			if($elA == $elB){
// 				$iloczyn[$ind++]=$elA;	
// 			}
// 		}
	}
	return $iloczyn;
}

function roznicaZb($zbA, $zbB){
	$roznica = array();
	$ind=0;
	foreach ($zbA as $elA){
		if(!elementZnajdujeSieWTablicy($elA, $zbB)){
			$roznica[$ind++]=$elA;
		}
	}
	return $roznica;
}

function elementZnajdujeSieWTablicy($elementDoSprawdzenia, $tablica) {
	foreach ( $tablica as $element ) {
		if ($elementDoSprawdzenia == $element) {
			// jestesmy pewni ze jest w tablicy
			return true;
		}
	}
	//jestesmy pewni ze nie ma
	return false;
}
function wyswietlTablice($nazwa, $tablica) {
	echo $nazwa . "=[";
	foreach ( $tablica as $element ) {
		echo $element . ",";
	}
	echo "]</br>";
}

?>