<?php
include_once '../utils/stale.php';
echo KATALOG_BAZOWY;
require_once KATALOG_BAZOWY.'/superlista/superlista.php';
require_once KATALOG_BAZOWY.'/producent/producent.php';
$repozytorium=new RepozytoriumProducentow();
$lista=new SuperLista($repozytorium);
$lista->pokaz();
?>