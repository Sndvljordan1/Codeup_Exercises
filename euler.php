<?php
for ($i = 1; $i < 1000; $i += 1){
	if ($i % 3 == 0 || $i % 5 == 0){
		$items[]= $i;
		//or $a +=i; but gives error as $a is undefined though script wiil run
	}
}
echo array_sum($items) . PHP_EOL;
?>