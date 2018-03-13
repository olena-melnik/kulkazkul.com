<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 02.02.2018
 * Time: 13:35
 */
function __autoload($class_name)
{
    $array_paths = array(
        '/models/',
        '/components/'
    );
    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if(is_file($path)){
            include_once $path;
        }
    }
}