<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 01.02.2018
 * Time: 20:14
 */
//
include ROOT . "/views/site/home/header.php";


$hello = $helloUser;
$smarty->assign("HU", $hello);
/**
 * Выводим список последних продуктов
 */
$lastPr = array();
$lastPr = $lastProducts;

$lastArticle = array();
$lastArticle = $lastPost;

$slider = scandir(ROOT."/views/image/slider/");
$sliderWork = array();
foreach ($slider as $item){
    if($item !== "." && $item !== ".."){
        $sliderWork[] = $item;
    }
}

$smarty->assign("SLIDER", $sliderWork);
$smarty->assign("LISTPRODUCT", $lastPr);
$smarty->assign("ARTICLE", $lastArticle);
/**
 * запускаем показ шаблона smarty
 */
$smarty->display("home/home.tpl");
