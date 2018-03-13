<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 29.01.2018
 * Time: 15:11
 */

class SiteController
{
    public function actionIndex() {
        $categories = array();
        $categories = Category::getCategoriesList();

        $lastProducts = array();
        $lastProducts = Product::getLatestProduct(6);

        $lastPost = array();
        $lastPost = Post::getLastPost();



        if(User::isGuest()){
            $helloUser = "Guest";
        } else {
            $helloUser = $_SESSION['user'];
        }

        $countCart = Cart::countItems();

        require_once(ROOT . '/views/site/home/home.php');
        return true;
    }
}