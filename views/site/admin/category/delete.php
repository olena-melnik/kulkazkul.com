<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 04.03.2018
 * Time: 17:13
 */
include ROOT. "/views/site/admin/header.php";

$smarty->assign('ID',$id);
$smarty->display('admin/category/delete.tpl');