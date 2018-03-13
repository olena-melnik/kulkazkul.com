<?php
include ROOT."/views/site/home/header.php";

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
$pagin = $pagination->get();

$smarty->assign("LISTPRODUCT", $prodAll);
$smarty->assign("PAGE", $pagin);
/**
 * Выводим переменные в шаблон catalog.tpl
 */
$smarty->display('product/catalog.tpl');