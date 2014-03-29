<?php
include 'utils/LinkiDoPlikow.php';
$nazwaKatalogu = "pictures";
$katalog = opendir ( $nazwaKatalogu );
$srednik = "\"";
$aktualnyPlik = readdir ( $katalog );
echo "[";
while ( $aktualnyPlik ) {
	if (plikNadajeSieDoWyswietlenia ( $aktualnyPlik )) {
// 		wyswietlLinkDoPlikuGraficznego ( $nazwaKatalogu, $aktualnyPlik );
		echo "\"".$nazwaKatalogu."/".$aktualnyPlik."\",";
	}
	$aktualnyPlik = readdir ( $katalog );
}
echo "];";
echo "/* A to byla tablica danych */"
?>