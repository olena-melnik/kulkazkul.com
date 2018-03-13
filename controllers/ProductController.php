<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 02.02.2018
 * Time: 11:56
 */

class ProductController
{
    public function actionViews($productId) {
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        $product = Product::getProductById($productId);
        require_once(ROOT . '/views/site/product/ProductView.php');
        return true;
    }

}