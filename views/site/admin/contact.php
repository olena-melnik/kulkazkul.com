<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.03.2018
 * Time: 14:39
 */

include ROOT . "/views/site/admin/header.php";

$smarty->assign("PARAMS", $params);
/**
 * запускаем показ шаблона smarty
 */
$smarty->display("admin/contact.tpl");