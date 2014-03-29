<?php
require_once KATALOG_BAZOWY . '/superlista/element.php';
class SuperLista {
	private $konfiguracja;
	public function __construct(KonfiguracjaSuperListy $konfiguracja) {
		$this->konfiguracja = $konfiguracja;
	}
	public function pokaz() {
		echo $this->konfiguracja->nazwaElementu . "</br>";
		$this->pokazDodanieNowego ();
		$this->pokazListe ();
	}
	private function pokazDodanieNowego() {
		echo "<a href='dodajNowy.php'>Dodaj nowy element</a></br>";
	}
	private function pokazListe() {
		$wiersze = $this->znajdzWiersze ();
		foreach ( $wiersze as $wiersz ) {
			$this->pokazWiersz ( $wiersz );
		}
	}
	private function pokazWiersz(WierszListy $wiersz) {
		$id = $wiersz->getId ();
		if ($this->konfiguracja->skryptDoEdycji != null) {
			echo "<a href=" . $this->konfiguracja->skryptDoEdycji . "?id=$id>Edytuj</a> &nbsp";
		}
		echo " <a href=usun.php?id=$id>Usuń</a> &nbsp<a href=detale.php?id=$id>" . $wiersz->podsumowanie () . "</a></br>";
	}
	private function znajdzWiersze() {
		return $this->konfiguracja->repozytorium->znajdzWszystkie ();
	}
}
class KonfiguracjaSuperListy {
	public $repozytorium;
	public $nazwaElementu;
	public $skryptDoEdycji = null;
	public $dostepna = false;
	public function jestDostepna() {
		return ($this->nazwaElementu != null) && ($this->repozytorium != null);
	}
}

?>