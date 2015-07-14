<?php
$arg = $argv[1];
$arg2 = $argv[2];
$arg3 = $argv[3];
if ($arg > $arg2 || $argc < 4){
	fwrite(STDOUT, "Invalid" . PHP_EOL);
	fwrite(STDOUT, "Input min, max, and increment after file name." . PHP_EOL);
	fwrite(STDOUT, "Please give minimum " .PHP_EOL);
	$arg = fgets(STDIN);
	fwrite(STDOUT, "Please give maximum " .PHP_EOL);
	$arg2 = fgets(STDIN);
	fwrite(STDOUT, "Please state increment for iteration " .PHP_EOL);
	$arg3 = fgets(STDIN);
	for ($i = $arg; $i <= $arg2; $i += $arg3) {
    	echo $i . PHP_EOL;
	};
}
if ($argc == 4){
	for ($i = $arg; $i <= $arg2; $i += $arg3) {
    	echo $i . PHP_EOL;
	};
}
?>