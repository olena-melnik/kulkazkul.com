<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 05.03.2018
 * Time: 12:03
 */
include ROOT. "/views/site/admin/header.php";
if(isset($totalPrice)){
    $smarty->assign("TOTAL", $totalPrice);
}
$smarty->assign("STATUS", $status);
$smarty->assign("ORDER", $order);
$smarty->assign("PRODUCTS", $products);
$smarty->display('admin/orders/update.tpl');