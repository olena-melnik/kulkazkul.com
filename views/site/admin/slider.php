<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.03.2018
 * Time: 13:52
 */

include ROOT . "/views/site/admin/header.php";

$smarty->assign("SLIDER", $sliderWork);
/**
 * запускаем показ шаблона smarty
 */
$smarty->display("admin/slider.tpl");
