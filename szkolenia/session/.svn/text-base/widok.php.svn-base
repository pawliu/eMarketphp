<?php
require_once 'ImieNazwisko.php';
function wyswietlBladLogowania() {
	echo "Blad logowania</br>";
	wyswietlFormularzLogowania ();
}
function pokazDaneUzytkownika(ImieNazwiskoBase $daneUzytkownika) {
	// if ($daneUzytkownika instanceof ImieNazwiskoExt) {
	// echo "Witaj " . $daneUzytkownika->tekstDoPrzywitania () . "</br>";
	// } else {
	
	echo "Witaj " . $daneUzytkownika->imie . " " . $daneUzytkownika->getNazwisko () . "</br>";
	// }
	;
	// echo "Sha1 ".sha1($daneUzytkownika[0])."</br>";
	// echo "MD51 ".md5($daneUzytkownika[0])."</br>";
	echo "<a href='index.php'>Index</a>&nbsp";
	echo "<a href='wyloguj.php'>Wyloguj</a>";
}
function wyswietlFormularzLogowania($login = null, $haslo = null) {
	echo "<form method='POST' action='index.php'>
<b>Uzytkownik:</b> <input type='text' name='nazwaUzytkownika' value='$login'><br>
<b>Haslo:</b> <input type='password' name='haslo' value='$haslo'><br>
<input type='submit' value='Zaloguj' name='loguj'>
</form>  ";
}
?>