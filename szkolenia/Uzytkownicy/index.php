
<?php
include_once 'utils/stale.php';

require_once KATALOG_BAZOWY . '/superlista/superlista.php';
$nazwy=array();
if (isset ( $_GET ['nazwa'] )) {
	$nazwy = explode ( ",", $_GET ['nazwa'] );
} else {
	$nazwy = array (
			'uzytkownik' 
	);
}
foreach ( $nazwy as $nazwa ) {
	$konfiguracja = zbudujKonfiguracjeDla ( $nazwa );
	if ($konfiguracja->jestDostepna ()) {
		$superLista = new SuperLista ( $konfiguracja );
		$superLista->pokaz ();
	} else {
	}
}
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

?>