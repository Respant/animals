<?php
namespace AG\Animals\Category;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

use AG\Animals\Structure\CategoryInterface;

class Cars implements CategoryInterface {
    /**
     * Get data in necessary format
     *
     * @param array $data
     * @return string
     */
    public function render(array $data) {
        // each item in lower case
        $items = array_map('strtolower', $data);
        // get unique values and sort them
        $uniqueData = array_values(array_unique($items));
        sort($uniqueData);

        // return a backwards sorted list of all unique data items with md5 hash in brackets
        $resultString = '';
        foreach(array_reverse($uniqueData) as $item) {
            $resultString .= $item . ' (' . md5($item) . ')' . "\n";
        }

        return $resultString;
    }
}