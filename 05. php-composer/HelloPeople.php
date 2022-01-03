<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpComposer\Data\People;

$people = new People("Yusron");

echo $people->sayHello("Ara") . PHP_EOL;