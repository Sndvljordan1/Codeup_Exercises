<?php

// TODO: Create your inspect() function here
function inspect($a)
{	
	$b = gettype($a);
	switch ($b) {
		case is_bool($a):
			if(boolval($a) == 1){
				return "The value is a boolean and is true";
			}else{
				return "The value is a boolean and is false";
			}
			break;

		case is_array($a):
			if (empty($a)== true) {
				return "The value is an empty array";
			}else{
				return "The value is an array." . print_r($a);
			};
			break;

		case is_null($a):
			return "The value is null.";
			break;

		case is_string($a):
			if(empty($a) == true){
				return "The value is an empty string";
			}else{
				return "The value is a string. " . $a ;
			};
			break;

		case is_int($a):
			return "The value is an interger and is " . $a;
			break;
			
		case is_float($a):
			return "The value is a float and is " . $a;
			break;
		};
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1) . PHP_EOL;
echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2) . PHP_EOL;
echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3) . PHP_EOL;
echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4) . PHP_EOL;
echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null) . PHP_EOL;
echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1) . PHP_EOL;
echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2) . PHP_EOL;
echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1) . PHP_EOL;
echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2) . PHP_EOL;
echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1) . PHP_EOL;
echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2) . PHP_EOL;
?>