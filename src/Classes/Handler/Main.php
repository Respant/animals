<?php
namespace AG\Animals\Handler;

/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

use AG\Animals\Structure\CategoryInterface;

/**
 * Get items for defined category and return string in appropriate format
 *
 */
class Main {
    /**
     * Data array contains all items split up by categories
     *
     * @var array
     */
    private $data;

    /**
     * source of defined Category
     *
     * @var CategoryInterface
     */
    private $source;

    /**
     * Sets necessary vars
     *
     * @param CategoryInterface $source
     * @param array $data contains strings of current category
     */
    public function __construct(CategoryInterface $source, array $data) {
        $this->source = $source;
        $this->data = $data;
    }

    /**
     * Get data in appropriate format
     *
     * @return mixed
     */
    public function getData() {
        return $this->source->render($this->data);
    }
}