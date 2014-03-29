<?php
function rysujTabele($dane,$kolumny=null){
	echo "<table border='solid'>";
	if($kolumny!=null){
		wypiszKolumny($kolumny);
	}
	$daneDostosowane=dostosujDane($dane);
	foreach ($daneDostosowane as $wiersz){
		wypiszWiersz($wiersz);
	}
	echo "</table>";
}

function wypiszKolumny($kolumny){
	wierszTabeli($kolumny, "th");
}

function wypiszWiersz($wiersz){
	wierszTabeli($wiersz, "td");
}

function wierszTabeli($wartosci,$typ){
	echo "<tr>";
	foreach ($wartosci as $kolumna){
		echo "<$typ>$kolumna</$typ>";
	}
	echo "</tr>";
}

function dostosujDane($zrodlo){
	$wynik=array();
	/*
	for ($aktWiersz=0;$aktWiersz<count($zrodlo);$aktWiersz++){
		$wiersz=$zrodlo[$aktWiersz];
		for($aktKolumna=0;$aktKolumna<count($wiersz);$aktKolumna++){
			$wynik[$aktKolumna][$aktWiersz]=$wiersz[$aktKolumna];
// 			$wynik[$aktKolumna][$aktWiersz]=$zrodlo[$aktWiersz][$aktKolumna];
		}
	}
	*/
	
	$aktWiersz=0;//index wiersza w zrodle oraz index kolumny w wyniku
	foreach ($zrodlo as $wiersz){
		$aktKolumna=0;//index koumny w zrodle i index wiersza w wyniku
		foreach ($wiersz as $wartoscKolumny){
			$wynik[$aktKolumna][$aktWiersz]=$wartoscKolumny;
			$aktKolumna++;
		}
		$aktWiersz++;
	}
	return $wynik;
}

?>