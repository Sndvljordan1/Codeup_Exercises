<?php
	$a = 2;
	do {
		echo $a . PHP_EOL;
		$a *= $a ;
	} while ($a < 100000000);

?>