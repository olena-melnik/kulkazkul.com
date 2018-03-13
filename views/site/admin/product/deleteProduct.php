<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.02.2018
 * Time: 23:38
 */
include ROOT. "/views/site/admin/header.php";

$smarty->assign('ID',$id);
$smarty->display('admin/product/deleteProduct.tpl');