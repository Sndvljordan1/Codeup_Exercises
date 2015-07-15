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
	if (is_numeric($a) && is_numeric($b)) {
	    if($a == 0 || $b == 0){
	    	return "WHY";
	    }else {
	        return $a + $b;
	    }
	} else {
	    return "ERROR: Both arguments must be numbers\n";
	}
}

function subtract($a, $b)
{
    // Add code here
	if (is_numeric($a) && is_numeric($b)) {
	    if($a == 0 || $b == 0){
	    	return "YOU";
	    }else {
	        return $a - $b;
	    }
	} else {
	    return "ERROR: Both arguments must be numbers\n";
	}
}

function multiply($a, $b)
{
    // Add code here	
    if (is_numeric($a) && is_numeric($b)) {
        if($a == 0 || $b == 0){
	    	return "DO";
	    }else {
	        return $a * $b;
	    }
	} else {
	    return "ERROR: Both arguments must be numbers\n";
	}
}

function divide($a, $b)
{
    // Add code here
	if (is_numeric($a) && is_numeric($b)) {
	    if($a == 0 || $b == 0){
	    	return "DIS";
	    }else {
	        return $a / $b;
	    }
	} else {
	    return "ERROR: Both arguments must be numbers\n";
	}
}
function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		if($a == 0 || $b == 0){
	        return "?!?!?!?!?!?!?!?";
	    }else {
	    	return $a % $b;
	    }
	} else {
	    return "ERROR: Both arguments must be numbers\n";
	}
}
// Add code to test your functions here
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