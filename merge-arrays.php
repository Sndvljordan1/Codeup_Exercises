<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Ben', 'Ryan', 'Jenny'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Isaac', 'Ryan', 'JD Garza'];

function inArray($needle, $haystack){
	$result = array_search($needle, $haystack);

	if($result !== false){
		return true;
	}else{
		return false;
	}
}


if(inArray('Tina', $names) == true){
	echo "Tina is def in the array" . PHP_EOL;
}else{
	echo "Nah brah" . PHP_EOL;
}

if(inArray('Bob', $names) == true){
	echo "Bob is def in the array" . PHP_EOL;
}else{
	echo "Is Bob? Nah brah" . PHP_EOL;
}

function compareArrays($array1, $array2){
	$a = 0;
	foreach ($array1 as $key) {
		$vari = array_search($key, $array2);
		if($vari !== false){
			$a ++;
		}
	}
	echo $a . PHP_EOL;
}
echo compareArrays($names, $compare) . PHP_EOL;

function merger($array1, $array2){
	$x = [];
	foreach ($array1 as $name) {
		if($name == $array2[0]){
			$x[] = array_shift($array2);
		}else{
			array_push($x, $name);
			array_push($x, $array2[0]);
			array_shift($array2);
		}
	}
	return $x;
}

print_r(merger($names, $compare));
print_r(merger($compare, $names));
?>