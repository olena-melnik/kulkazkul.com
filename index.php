<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 15.01.2018
 * Time: 10:38
 */

//1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

//2.
session_start();

//2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
require_once (ROOT.'/components/Autoload.php');


//3. Вызов Router
$router = new Router();
$router->run();
