<?php
require_once 'utils/SQLUtils.php';

/**
 *
 * @return tablice z tablic z [id,nazwa] produktow
 */
function znajdzWszystkieProdukty() {
	$polaczenie = otworzPolaczenie ();
	
	$zapytanieSql = "select id,nazwa from produktprosty";
	
	$wynikZapytania = mysql_query ( $zapytanieSql );
	sprawdzStatusSql ();
	$produkty = array ();
	$ind = 0;
	while ( $wiersz = mysql_fetch_row ( $wynikZapytania ) ) {
		$produkty [$ind ++] = array (
				$wiersz [0],
				$wiersz [1] 
		);
	}
	
	zamknijPolaczenie ( $polaczenie );
	
	return $produkty;
}
/**
 *
 * @param $produktId id
 *        	produktu
 * @return tablice [nazwa,opis,cena] lub falsz gdy nie znaleziono
 */
function odczytajDetalePoId($produktId) {
	$znajdzDetaleSql = "select nazwa,opis,cena from produktprosty 
	where id=$produktId";
	$polaczenie = otworzPolaczenie ();
	$wynikZapytania = mysql_query ( $znajdzDetaleSql );
	sprawdzStatusSql ();
	$wiersz=mysql_fetch_row($wynikZapytania);
	zamknijPolaczenie($polaczenie);	
	return $wiersz;
}
/**
 *
 * @param
 *        	$nazwa
 * @param
 *        	$opis
 * @param
 *        	$cena
 * @return prawde gdy sie udalo, falsz gdy nie
 */
function dodajNowy($nazwa, $opis, $cena) {
	// echo "Zapis $nazwa $opis $cena";
	$dodajDaneSQL = "insert into produktprosty (nazwa,opis,cena) 
	values ('$nazwa','$opis',$cena)";
	
	$polaczenie = otworzPolaczenie ();
	mysql_query ( $dodajDaneSQL );	
	
	$wynik = mysql_errno () == 0;
	zamknijPolaczenie ( $polaczenie );
	
	return $wynik;
}
/**
 * Edutuje produkt o danym id;
 * @param  $produktId id produktu
 * @param  $nowaNazwa nowa nazwa dla produktu
 * @param  $nowyOpis nowy opis dla produktu
 * @param  $nowaCena nowa cena dla produktu
 */
function edytujProduktOId($produktId,$nowaNazwa,$nowyOpis,$nowaCena) {	
	$zmienProduktSQL="update produktprosty set
		nazwa='$nowaNazwa',opis='$nowyOpis',cena=$nowaCena where id=$produktId";
	$polaczenie = otworzPolaczenie ();
	mysql_query ( $zmienProduktSQL );
	
	$wynik = mysql_errno () == 0;
	zamknijPolaczenie ( $polaczenie );
	
	return $wynik;
}
?>