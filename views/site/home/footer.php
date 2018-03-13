<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 03.02.2018
 * Time: 10:25
 */
/**
 * Переменные для footer.tpl
 */
$category = array();
$category = $categories;
$h = 'hello!';
$smarty->assign("HELLO",$h);
$smarty->assign("CATEGORIES", $category);
