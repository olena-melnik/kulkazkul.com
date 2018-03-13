<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.02.2018
 * Time: 23:11
 */
include ROOT. "/views/site/admin/header.php";

$smarty->assign("PRODUCTLIST", $productList);
$smarty->display('admin/product/product.tpl');