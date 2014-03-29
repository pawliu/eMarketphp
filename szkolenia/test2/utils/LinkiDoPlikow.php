<?php
function tekstowyLinkDoPlikuGraficznegoWKatalogu($nazwaKatalogu,$nazwaPliku ) {	
	return  tekstowyLinkDoPliku("PictureViewer.php?katalog=$nazwaKatalogu&nazwaPliku=$nazwaPliku",$nazwaPliku);
}

function tekstowyLinkDoPliku($adres,$nazwa){
	return "<a href=".lancuchWCudzyslowie($adres)."> $nazwa</a>";
}

function lancuchWCudzyslowie($lancuch){
	return "\"$lancuch\"";
}

function sciezkaWCudzyslowie($nazwaKatalogu, $nazwaPliku) {
	return lancuchWCudzyslowie("$nazwaKatalogu/$nazwaPliku");
}
/*
 * Zwraca true gdy nazwa pliku nie jest '.' lub '..', false w innym przypadku
 */
function plikNadajeSieDoWyswietlenia($nazwaPliku) {
	return ! ($nazwaPliku == "." || $nazwaPliku == "..");
}
function wyswietlLinkDoPlikuGraficznego($nazwaKatalogu, $nazwaPliku) {
	$nowaLinia = "</br>";
	echo tekstowyLinkDoPlikuGraficznegoWKatalogu ( $nazwaKatalogu,$nazwaPliku  ) . $nowaLinia;
}
function wyswieltObrazek($katalog, $nazwaPliku) {
	echo "<img src=" . sciezkaWCudzyslowie ( $katalog, $nazwaPliku ) . " /></br>";
}

?>