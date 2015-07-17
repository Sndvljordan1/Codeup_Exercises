<?php
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ', $physicistsString);
print_r($physicistsArray);
function humanizedList($array1, $sort = false){
	if ($sort) {
		sort($array1);
	}
	$part2 = array_pop($array1);
	$part1 = implode(', ', $array1);
	$newstring = $part1 . ", and " . $part2;
	return $newstring;	
}
$famousFakePhysicists = humanizedList($physicistsArray);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;
?>