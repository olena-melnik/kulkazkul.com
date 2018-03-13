<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.03.2018
 * Time: 21:21
 */
include ROOT."/views/site/home/header.php";

if(isset($totalPrice)){
    $smarty->assign("TOTAL", $totalPrice);
}
$smarty->assign("USER", $user);
$smarty->assign("STATUS", $status);
$smarty->assign("ORDER", $order);
$smarty->assign("PRODUCTS", $products);
$smarty->display('user/orderUser.tpl');