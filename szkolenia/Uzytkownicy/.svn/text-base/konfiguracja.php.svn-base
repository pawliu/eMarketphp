<?php
require_once 'superlista/superlista.php';
require_once 'superlista/element.php';
function zbudujKonfiguracjeDla($nazwa) {
	$konfiguracja = new KonfiguracjaSuperListy ();
	if ($nazwa == 'producent') {
		require_once KATALOG_BAZOWY . '/producent/producent.php';
		$konfiguracja->repozytorium = new RepozytoriumProducentow ();
		$konfiguracja->skryptDoEdycji = "edytujProducenta";
		$konfiguracja->nazwaElementu = "Producenci";
	}
	
	if ($nazwa == 'uzytkownik') {
		require_once KATALOG_BAZOWY . '/repozytorium.php';
		require_once KATALOG_BAZOWY . '/repozytoriumUzytkownikow.php';
		require_once KATALOG_BAZOWY . '/uzytkownik.php';
		$konfiguracja->repozytorium = new RepozytoriumUzytkownik ();
		$konfiguracja->skryptDoEdycji = "edytujUzytkownika";
		$konfiguracja->nazwaElementu = "Użytkownicy";
	}
	return $konfiguracja;
}
function wezNazwyZGet() {
	return explode ( ",", $_GET ['nazwa'] );
}

function pokazDetale(WierszListy $element){
	
}
?>