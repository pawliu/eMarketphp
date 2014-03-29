
<?php
if (isset ( $_POST ["wartosc"] )) {
	echo "Wartoœæ= " . $_POST ["wartosc"];
} else {
	echo '<form action="test.php" method="post">
	Wartosc: <input type="text" name="wartosc" /> <input type="submit"
		value="OK" />
</form>';
}
?>