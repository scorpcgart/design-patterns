<?php
//namespace SimpleFactory;

class Bicycle
{
    public function __construct()
    {
        echo "create bicycle" . PHP_EOL;
    }

    public function driveTo(string $destination)
    {
        echo "drive to " . $destination . PHP_EOL;
    }
}

