<?php
namespace AG\Animals\Category;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

use AG\Animals\Structure\CategoryInterface;

class Animals implements CategoryInterface {
    /**
     * Get sorted list of all unique data items of category
     *
     * @param array $data
     * @return string
     */
    public function render(array $data) {
        // get unique values and sort them
        $uniqueData = array_values(array_unique($data));
        sort($uniqueData);

        return implode("\n", $uniqueData) . "\n";
    }
}