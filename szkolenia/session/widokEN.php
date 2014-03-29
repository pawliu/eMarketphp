<?php
function wyswietlBladLogowania(){
	echo "Error during loggin</br>";
	wyswietlFormularzLogowania();
}


function pokazDaneUzytkownika($daneUzytkownika){

	echo "Hello $daneUzytkownika[0] $daneUzytkownika[1]";
	echo "<a href='nic'>Logout</a>";
}

function wyswietlFormularzLogowania() {
	echo "<form method='POST' action='index.php'>
<b>User:</b> <input type='text' name='nazwaUzytkownika'><br>
<b>Password:</b> <input type='password' name='haslo'><br>
<input type='submit' value='Login' name='loguj'>
</form>  ";
}
?>