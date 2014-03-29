<?php
include 'utils/LinkiDoPlikow.php';
$nazwaPLiku = $_GET['nazwaPliku'];
$nazwaKatalogu = $_GET['katalog'];
echo $nazwaPLiku."</br>";
wyswieltObrazek($nazwaKatalogu, $nazwaPLiku);
echo tekstowyLinkDoPliku("index.php", "Wróć");

?>