<?php
$arg = $argv[1];
$arg2 = $argv[2];
$arg3 = $argv[3];
if ($arg > $arg2 || $argc < 4){
	fwrite(STDOUT, "Invalid" . PHP_EOL);
	fwrite(STDOUT, "Input min, max, and increment after file name." . PHP_EOL);
	exit(0);
}
if ($argc == 4){
	for ($i = $arg; $i <= $arg2; $i += $arg3) {
    	echo $i . PHP_EOL;
	};
}
?>