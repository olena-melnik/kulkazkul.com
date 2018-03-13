<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 12.02.2018
 * Time: 10:40
 */
include ROOT. "/views/site/admin/header.php";
include ROOT . "/views/site/home/categoryMenu.php";

$smarty->assign("CATEGORYLIST", $cm);
$smarty->display('admin/product/addProduct.tpl');