<?php
function pokazFormularz($action, $id = null, Uzytkownik $detale = null) {
	if($detale == null){
		$detale=new Uzytkownik();
	}
	$ukryteId = "";
	if ($id != null) {
		$ukryteId = "<input type='hidden' name='id' value='$id' >";
	}
	echo "<form method='POST' action='$action'>
	$ukryteId	
<b>Login:</b> <input type='text' name='login' value='" . $detale->getLogin () . "' ><br>
<b>Haslo: </b> <input type='text' name='haslo' value='" . $detale->getHaslo () . "'><br>
<b>Imie: </b> <input type='text' name='imie' value='" . $detale->getImie () . "'><br>
<b>Nazwisko: </b> <input type='text' name='nazwisko' value='" . $detale->getNazwisko () . "' ><br>
<b>Email: </b> <input type='text' name='email' value='" . $detale->getEmail () . "' ><br>
<input type='submit' value='Zapisz' name='zapisz'>
</form></br>";
}
function pokazTakNie($text, $id = null, $action = null) {
	if ($action == null) {
		$action = $_SERVER ["SCRIPT_NAME"];
	}
	echo $text . "</br>";
	$ukryteId = "";
	if ($id != null) {
		$ukryteId = "<input type='hidden' name='id' value='$id' >";
	}
	echo "<form method='POST' action='$action'>$ukryteId
	<input type='submit' value='Tak' name='tak'>
	<input type='submit' value='Nie' name='nie'>
	</form></br>";
}

?>