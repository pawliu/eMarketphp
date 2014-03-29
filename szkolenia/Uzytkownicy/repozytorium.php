<?php
require_once 'superlista/crud.php';
require_once 'repozytoriumUzytkownikow.php';
class RepozytoriumUzytkownik implements Repozytorium{
	function znajdzWszystkie(){
		return znajdzUzytkownikow();
	}
}
?>