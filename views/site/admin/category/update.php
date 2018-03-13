<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 12.02.2018
 * Time: 15:11
 */
include ROOT. "/views/site/admin/header.php";

$categ = array();
$categ = $categoryLast;

$smarty->assign('CATEGORY', $categ);
$smarty->display('admin/category/update.tpl');