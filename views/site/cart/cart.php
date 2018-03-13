<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.02.2018
 * Time: 14:37
 */

include ROOT . "/views/site/home/header.php";

if(isset($totalPrice)){
    $smarty->assign("TOTAL", $totalPrice);
}
if(isset($products)){
    $smarty->assign("PRODUCTS", $products);
}
if(isset($productInCart)){
    $smarty->assign("PRODUCTSINCART", $productInCart);
} else {
    $productInCart = false;
    $smarty->assign("PRODUCTSINCART", $productInCart);
}

$smarty->display("cart/cart.tpl");