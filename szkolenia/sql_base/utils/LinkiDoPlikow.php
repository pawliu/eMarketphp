<?php
function tekstowyLinkDoPliku($adres, $nazwa) {
	return "<a href=" . lancuchWCudzyslowie ( $adres ) . "> $nazwa</a>";
}
function lancuchWCudzyslowie($lancuch) {
	return "\"$lancuch\"";
}
function linkDoDetaliProduktu($id,$nazwa) {
	$adres = "detaleProd.php?produktId=$id";
	return tekstowyLinkDoPliku ( $adres, $nazwa );
}

function linkDoProduktowProducenta($id,$nazwa){
	$adres = "produktyProducenta.php?producentId=$id";
	return tekstowyLinkDoPliku ( $adres, $nazwa );
}

?>