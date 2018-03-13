<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 02.02.2018
 * Time: 15:40
 */


include ROOT."/views/site/home/header.php";

$smarty->assign("USER", $user);
$smarty->assign("ERROR", $error);
$smarty->assign("ORDERS",$orders);

$smarty->display("user/cabinet.tpl");