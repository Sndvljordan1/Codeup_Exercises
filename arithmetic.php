<?php
if($argc < 2){
	$a = 2;
	$b = 78;
}else{
	$a = $argv[1];
	$b = $argv[2];
}
function add($a, $b)
{
	error($a, $b);
		return $a + $b;
}
function subtract($a, $b)
{
	error($a, $b);
	return $a - $b;
}
function multiply($a, $b)
{
	error($a, $b);
	return $a * $b;
}
function divide($a, $b)
{
	error($a, $b);
	if ($b == 0){
		echo "YOU CAN'T DIVIDE BY ZERO!";
	}else{
		return $a / $b;
	}
}
function modulus($a, $b)
{
	error($a, $b);
	if ($b == 0){
		echo "YOU CAN'T DIVIDE BY ZERO!";
	}else{
		return $a % $b;
	}

}
function error($a, $b)
{
	if (is_numeric($a) == false || is_numeric($b) == false) {
		echo " " . PHP_EOL;
	    echo "'\$a' = $a, '\$b' = $b \nERROR: Both arguments must be numbers\n";
	    echo " " . PHP_EOL;
	    return false;
	}else{
		return true;
	}
}
echo add($a, $b) . PHP_EOL;
echo " " . PHP_EOL;
echo subtract($a, $b) . PHP_EOL;
echo " " . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo " " . PHP_EOL;
echo divide($a, $b) . PHP_EOL;
echo " " . PHP_EOL;
echo modulus($a, $b) . PHP_EOL;
echo " " . PHP_EOL;
?>