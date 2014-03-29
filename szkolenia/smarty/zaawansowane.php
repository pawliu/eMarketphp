<?php
// ladujemy plik smarty
require_once 'libs/Smarty.class.php';
// tworzymy obiekt smary
$smarty = new Smarty ();
// tylko bledy
$smarty->error_reporting = E_ERROR;

$tablica=array("Element 1","Element 2","Element 3","Element 4");

// ustawienie zmiennej abc ze smarty
$smarty->assign ( "tablica", $tablica );

// pokaz
$smarty->display ( "zaawansowane.html" );
?>