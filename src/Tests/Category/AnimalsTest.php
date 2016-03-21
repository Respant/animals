<?php
namespace AG\Animals\Tests\Handler;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

use AG\Animals\Category\Animals;

class AnimalsTest extends \PHPUnit_Framework_TestCase {
    /**
     * @var Animals
     */
    private $animals;

    public function setUp() {
        parent::setUp();
        $this->animals = new Animals();
    }

    public function testRender() {
        $data = array('cow', 'horse', 'cow');
        $expectedResult = 'cow' . "\n" . 'horse' . "\n";

        $output = $this->animals->render($data);
        $this->assertEquals($output, $expectedResult);
    }
}
