<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 12.02.2018
 * Time: 14:31
 */
include ROOT. "/views/site/admin/header.php";


$smarty->assign("CATEGORYLIST", $categories);
$smarty->display('admin/category/categories.tpl');