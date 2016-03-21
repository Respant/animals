<?php
namespace AG\Animals\Tests\Handler;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

use AG\Animals\Category\Cars;

class CarsTest extends \PHPUnit_Framework_TestCase {
    /**
     * @var Cars
     */
    private $cars;

    public function setUp() {
        parent::setUp();
        $this->cars = new Cars();
    }

    public function testRender() {
        $data = array('AUDI', 'BMW', 'Audi');
        $expectedResult =
            'bmw (71913f59e458e026d6609cdb5a7cc53d)' . "\n" .
            'audi (4d9fa555e7c23996e99f1fb0e286aea8)' . "\n";

        $output = $this->cars->render($data);
        $this->assertEquals($output, $expectedResult);
    }
}
