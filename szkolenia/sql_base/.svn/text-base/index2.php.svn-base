<?php
function pokazStatusSql() {
	$kodBledu = mysql_errno ();
	echo 'Status sql = ' . mysql_errno () . '</br>';
	if ($kodBledu != 0) {
		// echo "Problem z SQL " . mysql_error () . '</br>';
		throw new Exception ( "Problem z SQL " . mysql_error (), $kodBledu );
	}
}

// laczymy sie z serwerem bazy danych
// try {
	$polaczenie_sql = mysql_connect ( "localhost:3306", "php", "php2" ) or die ( "B³ad podczas po³aczenia z baz¹ danych: " . mysql_error () );
	pokazStatusSql ();
	echo "Zawartoœæ bazy danych php ";
	// wybieramy baze danych
	mysql_select_db ( 'php' ) or die ( 'Nie mo¿na wybraæ bazy danych:' . mysql_error () );
	pokazStatusSql ();
	// a tu sie nie uda
	mysql_select_db ( 'php123' );
	pokazStatusSql ();
	//update 
// 	$update="UPDATE Test set value2='val2'";
// 	mysql_query($update);
	// zapytanie
	$zapytanie = 'SELECT * FROM Produkt';
	// wykonanie zapytania
	$wynikZapytania = mysql_query ( $zapytanie );
	pokazStatusSql ()	or die();
	echo "Wyniki zapytania:" . $zapytanie;
	echo "<table>\n";
	echo '<tr>';
	// listujemy kolumny z bazy jako naglowek
	for($i = 0; $i < mysql_num_fields ( $wynikZapytania ); $i ++) {
		echo '<th>' . mysql_field_name ( $wynikZapytania, $i ) . '</th>';
	}
	echo '</tr>';
	// listujemu dane
	// wez wiersz z wynikum, jak nie ma zwroci false
	while ( $wiersz = mysql_fetch_array ( $wynikZapytania, MYSQL_ASSOC ) ) {
		echo "\t<tr>\n";
		// dla kazdej kolumny z wiersza
// 		for ($i=0;$i < count($wiersz);$i++){
// 			$kolumna=$wiersz[$i];
// 		}
		foreach ( $wiersz as $kolumna ) {
			// pokaz jej wartosc
			echo "\t\t<td>$kolumna</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	// odlacz wynik
	mysql_free_result ( $wynikZapytania );
	// zamknij polaczenie
	mysql_close ( $polaczenie_sql );
// } catch ( Exception $e ) {
// 	echo "Wystapil blad.", $e->getMessage ();
// }
?>