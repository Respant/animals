<?php
namespace AG\Animals\Category;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

use AG\Animals\Structure\CategoryInterface;

class Numbers implements CategoryInterface {
    /**
     * Get data in necessary format
     *
     * @param array $data
     * @return string
     */
    public function render(array $data) {
        // return in necessary format list of all unique data items with count of occurrences for each
        $resultString = '';
        foreach(array_count_values($data) as $item=>$count) {
            $resultString .= $item . ': ' . $count . "\n";
        }

        return $resultString;
    }
}