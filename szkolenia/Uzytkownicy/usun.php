<?php
require_once 'utils/utils.php';
require_once 'form.php';
require_once 'repozytoriumUzytkownikow.php';

// if (isset ( $_GET ['id'] )) {
// $id = $_GET ['id'];

// $skasowano=kasujUzytkownika($id);
// if($skasowano){
// echo "Skasowano";
// }else{
// echo "Blad podczsa kasowania";
// }
// echo "</br><a href='index.php'>Lista</a>";

// } else {
// echo "Blad - brak id";
// }

if (metodaPost ()) {
	if (isset ( $_POST ['tak'] )) {
		if (kasujUzytkownika ( $_POST ['id'] )) {
			echo "Skasowano</br> ";
		} else {
			echo "Blad</br>";
		}
		echo "<a href='index.php'>Lista</a>";
	} else {
		header ( 'Location: index.php' );
	}
} else {
	if (isset ( $_GET ['id'] )) {
		pokazTakNie ( "Czy napewno chcesz skasować użytkownika", $_GET ['id'] );
	} else {
		echo "Blad";
	}
}
?>