<?php
for ($i = 1; $i <= 4000000; $i += 1){
	$i += $i;
	if($i % 2 == 0){
		$items[] = $i;
	}
}
echo array_sum($items) . PHP_EOL;
?>