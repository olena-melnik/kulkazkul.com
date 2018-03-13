<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 12.03.2018
 * Time: 11:23
 */
include ROOT . "/views/site/home/header.php";

$smarty->assign("MESSAGE", $message);

$smarty->display("info/success.tpl");