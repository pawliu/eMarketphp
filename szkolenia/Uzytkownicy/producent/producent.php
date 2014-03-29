<?php
require_once KATALOG_BAZOWY.'/superlista/element.php';
require_once KATALOG_BAZOWY.'/superlista/crud.php';
require_once KATALOG_BAZOWY.'/utils/repozytorium.php';
class Producent implements WierszListy {
	private $id;
	private $nazwa;
	public function __construct($id = null, $nazwa = null) {
		if ($id != null) {
			$this->id = $id;
		}
		if ($nazwa != null) {
			$this->nazwa = $nazwa;
		}
	}
	function getId() {
		return $this->id;
	}
	function podsumowanie() {
		return $this->nazwa;
	}
}
class RepozytoriumProducentow implements Repozytorium {
	public function znajdzWszystkie() {
		return znajdzWszystkieRekordy("Producent", "id,nazwa", "Producent");
	}
}
?>