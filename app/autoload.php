<?php
/***************************************************************
 *
 *  (c) 2016 Anton Gobzhelyan <anton.gobzhelyan@gmail.com>
 *
 ***************************************************************/

// probably it's too simple autoload, but we haven't "if"
spl_autoload_register(function ($className) {
    $namespaceArray = explode('\\', $className);
    $fileName = array_pop($namespaceArray);
    $path = __DIR__ . '/../src/Classes/' . array_pop($namespaceArray) . '/' . $fileName. '.php';

    file_exists($path) && include_once $path;
});