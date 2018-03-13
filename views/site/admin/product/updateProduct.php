<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 12.02.2018
 * Time: 11:22
 */

include ROOT. "/views/site/admin/header.php";
include ROOT . "/views/site/home/categoryMenu.php";

$smarty->assign("PRODUCT", $productLast);
$smarty->assign("CATEGORYLIST", $categories);
$smarty->display('admin/product/updateProduct.tpl');