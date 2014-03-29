<?php
$x = 25;
$y = 25;
$a = $x;
$b = $y;
// a tu implementeacja
if ($a < $b) {
	$c = $a;
	$a = $b;
	$b = $c;
}

while ( $b != 0 ) {
	$c = $a % $b;
	$a = $b;
	$b = $c;
}

echo "NWD($x,$y)= $a";
?>