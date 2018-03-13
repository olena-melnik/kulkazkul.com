<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 02.02.2018
 * Time: 12:07
 */

include ROOT . "/views/site/home/header.php";
$cm = array();
$cm = $categories;

$productItem = array();
$productItem = $product;
foreach ($cm as $val) {
    if ($productItem['category_id'] == $val['id']) {
        $nameCat = $val['name'];
    } else {
        $nameCat = "no-no";
    }
}

if($productItem['avallibity']){
    $avallibity = "Товар в наличии";
} else {
    $avallibity = "Отсутствует на складе";
}
$smarty->assign("PRODUCTITEM", $productItem);
$smarty->assign("AVALLIBITY", $avallibity);
$smarty->assign("NAMECATEGORY", $nameCat);
$smarty->display("product/product.tpl");