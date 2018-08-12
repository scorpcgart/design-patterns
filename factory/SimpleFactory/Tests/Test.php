<?php
//namespace DesignPatterns\Creational\SimpleFactory\Tests;
require_once __DIR__ . "/../Bicycle.php";
require_once __DIR__ . "/../SimpleFactory.php";

use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}

$test = new SimpleFactoryTest();
$test->testCanCreateBicycle();