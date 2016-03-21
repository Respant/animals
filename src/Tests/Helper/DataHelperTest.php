<?php
namespace AG\Animals\Tests\Helper;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

use AG\Animals\Helper\DataHelper;

class DataHelperTest extends \PHPUnit_Framework_TestCase {

    public function testConfig() {
        $configData = DataHelper::getConfigData();

        $this->assertTrue(is_array($configData));
        $this->assertArrayHasKey('categories', $configData);
        $this->assertArrayHasKey('fileName', $configData);
        $this->assertTrue(is_array($configData['categories']));
        $this->assertTrue(is_string($configData['fileName']));

        $filePath = DataHelper::getFilePath($configData['fileName']);
        $this->assertFileExists($filePath);

        return $configData;
    }

    /**
     * @depends testConfig
     */
    public function testParseCategories($configData) {
        $data = DataHelper::parseCategories();

        $this->assertEquals(count($data), count($configData['categories']), 'Not all categories exist in file');
    }
}