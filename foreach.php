<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
// var_dump($things);
foreach ($things as $thingy) {
	if(is_bool($thingy)){
		echo "Boolean" . PHP_EOL;
	}elseif (is_string($thingy)) {
		echo "String" . PHP_EOL;
	}elseif (is_null($thingy)) {
		echo "Null" . PHP_EOL;
	}elseif (is_array($thingy)) {
		echo "Array" . PHP_EOL;
	}elseif (is_integer($thingy)) {
		echo "Interger" . PHP_EOL;
	}elseif (is_float($thingy)) {
		echo "Float" . PHP_EOL;

	}
}
echo " " . PHP_EOL;
foreach ($things as $thingy) {
	if(is_scalar($thingy)){
		echo "$thingy is a scalar" . PHP_EOL;
	}
}
echo " " . PHP_EOL;
foreach ($things as $thingy) {
	if(is_array($thingy)) {
		foreach ($thingy as $thing) {
			echo $thing . ', ';
		}
		echo " " . PHP_EOL;
	}else{
		echo $thingy . PHP_EOL;
	}
}
echo " " . PHP_EOL;
?>