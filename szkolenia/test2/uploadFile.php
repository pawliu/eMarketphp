<?php
$tmp_name = $_FILES ['tmp_name'];
$name = $_FILES ['name'];
while (is_uploaded_file ( $tmp_name )) {
}
	if (! move_uploaded_file ( $tmp_name, "pictures/$name" )) {
		echo "Nie uda³o siê wgraæ pliku $name";
	}else{
		echo "Udalo siê wgraæ plik $name";
	}
?>