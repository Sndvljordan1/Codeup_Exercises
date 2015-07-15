<?php
$a = 103;
$b = 22;
function add($a, $b)
{
    return $a + $b . PHP_EOL;
}

function subtract($a, $b)
{
    // Add code here
    return $a - $b . PHP_EOL;
}

function multiply($a, $b)
{
    // Add code here
    return $a * $b . PHP_EOL;
}

function divide($a, $b)
{
    // Add code here
    return $a / $b . PHP_EOL;
}
function modulus($a, $b)
{
	return $a % $b . PHP_EOL;
}
// Add code to test your functions here
echo add($a, $b);
echo " " . PHP_EOL;
echo subtract($a, $b);
echo " " . PHP_EOL;
echo multiply($a, $b);
echo " " . PHP_EOL;
echo divide($a, $b);
echo " " . PHP_EOL;
echo modulus($a, $b);
echo " " . PHP_EOL;
?>