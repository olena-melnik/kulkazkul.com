<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 01.02.2018
 * Time: 0:42
 */

class CatalogController
{
    /**
     * Отображение каталога товаров с постраничной навигацией
     * @param int $page
     * @return bool
     */
    public function actionIndex($page = 1) {
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        $count = 12;
        $productAll = array();
        $productAll = Product::getProdList($page, $count);

        $total = Product::getTotalProducts();

        $pagination = new Pagination($total, $page, $count, 'page-');

        require_once(ROOT . '/views/site/product/catalog.php');
        return true;
    }

    /**
     * Отображение товара по категориям
     * @param $categoryId
     * @param int $page
     * @return bool
     */
    public function actionCategory($categoryId, $page = 1){

        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        $categoryProducts = array();
        $categoryProducts = Product::getListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategiry($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/site/product/productByCategory.php');
        return true;
    }

    /**
     * Отображение товара по ключевому слову
     * @return bool
     */
    public function actionSearch(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        $category_id = $_POST['category_id'];

        $text = $_POST['text-for-search'];
        $productAll = array();
        if($category_id == 0){
            $productAll = Product::searchProduct($text);
        } else {
            $productAll = Product::searchProductByCategory($category_id, $text);
        }

        require_once(ROOT . '/views/site/home/search.php');
        return true;
    }
}