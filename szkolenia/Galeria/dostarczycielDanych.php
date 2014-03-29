<?php
header ( 'Content-Type: application/json' );
$pliki = array ();
if (isset ( $_GET ['katalog'] )) {
	$nazwaKatalogu = $_GET ['katalog'];
	$katalog = opendir ( $nazwaKatalogu );
	$srednik = "\"";
	$aktualnyPlik = readdir ( $katalog );
	
	while ( $aktualnyPlik ) {
		if (plikNadajeSieDoWyswietlenia ( $aktualnyPlik )) {
			$pliki [sizeof ( $pliki )] = $nazwaKatalogu . "/" . $aktualnyPlik;
		}
		$aktualnyPlik = readdir ( $katalog );
	}
}
echo json_encode ( $pliki );
function plikNadajeSieDoWyswietlenia($nazwaPliku) {
	return ! ($nazwaPliku == "." || $nazwaPliku == "..");
}
?>