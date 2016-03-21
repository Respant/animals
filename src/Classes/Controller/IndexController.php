<?php
namespace AG\Animals\Controller;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

use AG\Animals\Structure\CategoryInterface;
use AG\Animals\Handler\Main;
use AG\Animals\Helper\DataHelper;

/**
 * Main controller
 */
class IndexController {
    /**
     * Main action
     */
    public function indexAction() {
        $configCategories = DataHelper::getConfigData()['categories'];
        $parsedCategories = DataHelper::parseCategories();

        foreach($parsedCategories as $categoryKey=>$categoryData) {
            $className = '\AG\Animals\Category\\' . ucfirst(strtolower($configCategories[$categoryKey]));
            /** @var CategoryInterface $instance */
            $instance = new $className();
            $categoryObject = new Main($instance, $categoryData);
            echo $categoryObject->getData() . "\n";
        }
    }
}