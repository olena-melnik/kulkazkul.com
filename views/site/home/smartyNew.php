<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 01.02.2018
 * Time: 20:50
 */
/**
 * подключаем библиотеку smarty
 */
include ROOT . "/system/smarty/Smarty.class.php";
/**
 * обьект smarty
 */
$smarty = new Smarty();
/**
 * указываем путь к шаблонам
 */
$smarty->template_dir = ROOT."/views/templates/";
$smarty->compile_dir = ROOT."/views/templates_c/";
$smarty->config_dir = ROOT."/system/configs/";
$smarty->cache_dir = ROOT."/system/cache/";

$contact = include(ROOT.'/config/adminConfig.php');
$title = "Kulka z kul.com";

$smarty->assign("CONTACTS", $contact);
$smarty->assign("TITLE", $title);
return $smarty;