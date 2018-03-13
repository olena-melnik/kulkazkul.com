<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 01.02.2018
 * Time: 23:09
 */
include ROOT . "/views/site/home/header.php";

$prodByCategory = array();
$prodByCategory = $categoryProducts;
$catId = $categoryId;
$pagin = $pagination->get();

$smarty->assign("LISTPRODUCT", $prodByCategory);
$smarty->assign("categoryId", $catId);
$smarty->assign("PAGE", $pagin);

$smarty->display('product/catalog.tpl');