<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];



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
	echo "Is Bob in the array? Nah brah" . PHP_EOL;
}

function compareArrays($array1, $array2){
	$a = 0;
	foreach ($array1 as $key) {
		$vari = array_search($key, $array2);
		if($vari !== false){
			$a ++;
		}
	}
	return $a;
}
echo 'There are ' . compareArrays($names, $compare) . ' commonalities in the arrays.' . PHP_EOL;
?>