<?php
//namespace SimpleFactory;
require_once __DIR__ . "/Bicycle.php";

class SimpleFactory
{
    public function __construct()
    {
        echo "create factory" . PHP_EOL;
    }

    public function createBicycle()
    {
        return new Bicycle();
    }
}