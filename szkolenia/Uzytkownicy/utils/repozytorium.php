<?php
require_once 'SQLUtils.php';
function znajdzWszystkieRekordyZKasowaniemLogicznym($nazwaTabeli, $nazwyKolumn, $klasaDocelowa, $kolumnaOznaczajacaSkasowanie) {
	$selectSql = "select $nazwyKolumn from $nazwaTabeli";
	
	if ($kolumnaOznaczajacaSkasowanie != null) {
		$selectSql = $selectSql . " where not $kolumnaOznaczajacaSkasowanie";
	}
	// nowy obiekt klasy mysqli z aktywnym polaczeniem do bazy
	$mysqli = otworzPolaczenieMySQLI ();
	// stworzenie przygotowanej instrukcji
	$przygotowanaInstrukcja = $mysqli->prepare ( $selectSql );
	if (mysqli_errno ( $mysqli )) {
		throw new ErrorException ( "Problem z zapytaniem ($selectSql) " . mysqli_error ( $mysqli ) );
	}
	$wynik = array ();
	$ind = 0;
	// wykonaj zapytanie, true == bez bledow
	if ($przygotowanaInstrukcja->execute ()) {
		// wez wynik
		$wynikPS = $przygotowanaInstrukcja->get_result ();
		// dla kazdego wiersza stworz z niego obiekt klasy Uzytkownik
		while ( $uzytkownik = $wynikPS->fetch_object ( $klasaDocelowa ) ) {
			$wynik [$ind ++] = $uzytkownik;
		}
	}
	$mysqli->close ();
	return $wynik;
}
function znajdzWszystkieRekordy($nazwaTabeli, $nazwyKolumn, $klasaDocelowa) {
	return znajdzWszystkieRekordyZKasowaniemLogicznym ( $nazwaTabeli, $nazwyKolumn, $klasaDocelowa,null );
}
?>