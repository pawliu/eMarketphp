<?php
// ladujemy plik smarty
require_once 'libs/Smarty.class.php';
// tworzymy obiekt smary
$smarty = new Smarty ();
// tylko bledy
$smarty->error_reporting = E_ERROR;

$abc = 'CDE';

// ustawienie zmiennej abc ze smarty
$smarty->assign ( "abc", $abc );

// pokaz
$smarty->display ( "basic.tpl" );
?>