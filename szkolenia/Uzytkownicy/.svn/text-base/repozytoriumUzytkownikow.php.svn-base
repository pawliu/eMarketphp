<?php
require_once 'utils/SQLUtils.php';
require_once 'uzytkownik.php';
require_once 'utils/repozytorium.php';

error_reporting(E_ERROR);

// function baseSelectSql() {
// 	return "select id,nazwa as login,haslo,imie,nazwisko,email from uzytkownik";
// }

define ( 'BASE_SELECT_SQL', "select id,nazwa as login,haslo,imie,nazwisko,email from uzytkownik" );

function dodajNowy($login, $haslo, $imie, $nazwisko, $email) {
	$insertSql = "INSERT INTO uzytkownik (nazwa,haslo,imie,nazwisko,email) 
	VALUES ('$login','$haslo','$imie','$nazwisko','$email')";
	
	echo $insertSql;
	
	$polaczenie = otworzPolaczenie ();
	$wynik = mysql_query ( $insertSql );
	zamknijPolaczenie ( $polaczenie );
	return $wynik;
}
function znajdzUzytkownikow() {
	return  znajdzWszystkieRekordyZKasowaniemLogicznym("uzytkownik", "id,nazwa as login,haslo,imie,nazwisko,email,usuniety as skasowany", 
			"Uzytkownik"
			,"usuniety");
// 	$uzytkownicy=array();
// 	$ind=0;
// 	foreach ($wszystkieRekordy as $rekord){
// 		if($rekord->dostepny()){
// 			$uzytkownicy[$ind++]=$rekord;
// 		}
// 	}
// 	return $uzytkownicy;
}
function znajdzDetale($id) {
	$selectSql = BASE_SELECT_SQL. " where id= ?";
	$mysqli = otworzPolaczenieMySQLI ();
	
	$ps = $mysqli->prepare ( $selectSql );
	// ustaw wartosc parametrow dla aktualnego zapytania
	$ps->bind_param ( "s", $id );
	$wynik = false;
	if ($ps->execute ()) {
		$result = $ps->get_result ();
		if ($uzytkownik = $result->fetch_object ( "Uzytkownik" )) {
			$wynik = $uzytkownik;
		}
	}
	$mysqli->close ();
	return $wynik;
}
function edytuj(Uzytkownik $uzytkownik) {
	$updateSql = "update uzytkownik set nazwa= ?, haslo= ?, imie= ?, nazwisko= ?,email= ? where id= ?";
	
	$mysqli = otworzPolaczenieMySQLI ();
	$ps = $mysqli->prepare ( $updateSql );
	$ps->bind_param ( "sssssi", $uzytkownik->getLogin (),
			 $uzytkownik->getHaslo (), 
			$uzytkownik->getImie (), $uzytkownik->getNazwisko (), $uzytkownik->getEmail (), $uzytkownik->getId () );
	
	$wynik = $ps->execute ();
	
	$mysqli->close ();
	return $wynik;
}
function kasujUzytkownika($id) {
	$deleteSql = "update uzytkownik set usuniety=true where id=$id";
// 	$deleteSql = "delete from uzytkownik where id=$id";
	$polaczenie = otworzPolaczenie ();
	$wynik = mysql_query ( $deleteSql ) && (mysql_affected_rows () != 0);
	zamknijPolaczenie ( $polaczenie );
	return $wynik;
}
?>