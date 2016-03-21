<?php
namespace AG\Animals\Structure;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

interface CategoryInterface {
    /**
     * Get data in necessary format
     *
     * @param array $data Category's items
     * @return mixed
     */
    public function render(array $data);
}