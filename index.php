<?php
/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

require_once __DIR__ . '/app/autoload.php';

try {
    $controller = new \AG\Animals\Controller\IndexController();
    $controller->indexAction();
} catch(Exception $e) {
    echo $e->getMessage();
}