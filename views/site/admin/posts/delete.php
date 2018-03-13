<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 04.03.2018
 * Time: 17:18
 */
include ROOT. "/views/site/admin/header.php";

$smarty->assign('ID',$id);
$smarty->display('admin/posts/delete.tpl');