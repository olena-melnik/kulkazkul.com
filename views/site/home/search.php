<?php
include ROOT . "/views/site/home/header.php";

/**
 * Переменные для footer.tpl
 */
$h = 'hello!';
$smarty->assign("HELLO",$h);

/**
 * Переменные для catalog.tpl
 */
$prodAll = array();
$prodAll = $productAll;

$smarty->assign("LISTPRODUCT", $prodAll);

/**
 * Выводим переменные в шаблон catalog.tpl
 */
$smarty->display('product/catalog.tpl');