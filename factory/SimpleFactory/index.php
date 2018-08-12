<?php

require_once __DIR__ . "/SimpleFactory.php";
//use SimpleFactory;

$factory = new SimpleFactory();
$bicycle = $factory->createBicycle();
$bicycle->driveTo('Moskva');