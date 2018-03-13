<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 05.03.2018
 * Time: 11:31
 */
include ROOT. "/views/site/admin/header.php";

$smarty->assign("ORDERSLIST", $orders);
$smarty->display('admin/orders/orders.tpl');