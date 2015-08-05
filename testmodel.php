<?php
require_once 'model.php';

$flash = new Model;
$flash->firstName = 'Barry';
$flash->lastName = 'Allen';
$flash->alias = 'The Flash';
$flash->fast = 'super fast';
$flash->timetravel = 'traversed time multiple times';
$flash->livingMother = 'mother is dead as a door nail';


// echo $flash->firstName . PHP_EOL;
// echo $flash->lastName . PHP_EOL;
// echo $flash->alias . PHP_EOL;
// echo $flash->fast . PHP_EOL;
// echo $flash->timetravel . PHP_EOL;
// echo $flash->livingMother . PHP_EOL;

echo USER::getTableName() . PHP_EOL;