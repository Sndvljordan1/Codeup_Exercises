<?php
	$test = 5;
	while ($test <= 15){
		if ($test % 4 == 0 && $test % 3 ==0) {
			echo "$test is divisible by 4, 3, and 2" . PHP_EOL;
		}elseif ($test % 4 ==0) {
			echo "$test is divisible by both 4 and 2" . PHP_EOL;
		}elseif ($test % 3 == 0 && $test % 2 == 0){
			echo "$test is divisible by both 3 and 2" . PHP_EOL;
		}elseif ($test % 3 == 0 && $test % 2 !== 0){
			echo "$test is divisible by 3" . PHP_EOL;
		} elseif ($test % 2 == 0) {
			echo "$test is divisible by 2" . PHP_EOL;
		}else{
			echo "$test" . PHP_EOL;
		}
		$test++;
	}
?>