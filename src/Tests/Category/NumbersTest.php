<?php
namespace AG\Animals\Tests\Handler;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

use AG\Animals\Category\Numbers;

class NumbersTest extends \PHPUnit_Framework_TestCase {
    /**
     * @var Numbers
     */
    private $numbers;

    public function setUp() {
        parent::setUp();
        $this->numbers = new Numbers();
    }

    public function testRender() {
        $data = array('one', 'two', 'two');
        $expectedResult = 'one: 1' . "\n" . 'two: 2' . "\n";

        $output = $this->numbers->render($data);
        $this->assertEquals($output, $expectedResult);
    }
}
