<?php
namespace AG\Animals\Tests\Handler;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

use AG\Animals\Category\Numbers;
use AG\Animals\Category\Animals;
use AG\Animals\Category\Cars;
use AG\Animals\Handler\Main;

class MainTest extends \PHPUnit_Framework_TestCase {

    public function testGetNumbersData() {
        $data = array(
            'one',
            'three',
            'six',
            'six'
        );
        $expectedResult = 'one: 1' . "\n" . 'three: 1' . "\n" . 'six: 2' . "\n";

        $numbers = new Main(new Numbers(), $data);
        $output = $numbers->getData();

        $this->assertEquals($output, $expectedResult);
    }

    public function testGetAnimalsData() {
        $data = array(
            'sheep',
            'horse'
        );
        $expectedResult = 'horse' . "\n" . 'sheep' . "\n";

        $animals = new Main(new Animals(), $data);
        $output = $animals->getData();

        $this->assertEquals($output, $expectedResult);
    }

    public function testGetCarsData() {
        $data = array(
            'BMW',
            'Audi'
        );
        $expectedResult = 'bmw (71913f59e458e026d6609cdb5a7cc53d)' . "\n" . 'audi (4d9fa555e7c23996e99f1fb0e286aea8)' . "\n";

        $cars = new Main(new Cars(), $data);
        $output = $cars->getData();

        $this->assertEquals($output, $expectedResult);
    }
}
