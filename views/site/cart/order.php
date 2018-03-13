<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.02.2018
 * Time: 16:34
 */
include ROOT . "/views/site/home/header.php";

$user = $userName;
$phone = $userPhone;

$smarty->assign('USERPHONE', $phone);
$smarty->assign('USERNAME', $user);
$smarty->display("cart/order.tpl");