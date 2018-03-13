<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 08.02.2018
 * Time: 23:25
 */

class Cart
{
    /**
     * Добавление товара в корзину
     * @param $id
     * @param $numb
     * @return int
     */
    public static function addProduct($id,$numb){
        $id = intval($id);
        $numb = intval($numb);

        $productsInCard = array();

        if(isset($_SESSION['products'])){
            $productsInCard = $_SESSION['products'];
        }

        if(array_key_exists($id, $productsInCard)){
            $productsInCard[$id] = $numb + $productsInCard[$id];
        } else {
            $productsInCard[$id] = $numb;
        }

        $_SESSION['products'] = $productsInCard;
        self::countItems();
        return self::countItems();
    }

    /**Удаление товара из корзины
     * @param $id
     * @return bool
     */
    public static function removeProduct($id){
        $id = intval($id);
        // Получаем массив с идентификаторами и количеством товаров в корзине
        $productsInCart = self::getProducts();
        // Удаляем из массива элемент с указанным id
        unset($productsInCart[$id]);
        // Записываем массив товаров с удаленным элементом в сессию
        $_SESSION['products'] = $productsInCart;
        return true;
    }

    /**
     * Очистка корзины
     * @return bool
     */
    public static function removeProductAll(){
        if(self::getProducts()){
            unset($_SESSION['products']);
        }

        return true;
    }

    /**
     * Счетчик количества товара в корзине
     * @return int
     */
    public static function countItems(){
        if(isset($_SESSION['products'])){
            $count = 0;
            foreach (($_SESSION['products']) as $id => $quantity){
                $count = $count + $quantity;
            }
            return $count;
        }
        else {
            return 0;
        }
    }

    /**
     * Достаем массив товаров из сессии, для дальнейшей обработки
     * @return bool
     */
    public static function getProducts(){
        if(isset($_SESSION['products'])){
            return $_SESSION['products'];
        }
        return false;
    }

    /**
     * Подсчитываем стоимсоть товара в корзине
     * @param $products
     * @return int
     */
    public static function getTotalPrice($products){
        $productsInCart = self::getProducts();
        $total = 0;
        if($productsInCart){
            foreach($products as $item){
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

    /**
     * Подсчитываем стоимсоть товара в заказе
     * @param $products
     * @return int
     */
    public static function getTotalPriceOrder($products){
        $total = 0;
            foreach($products as $item){
                $total += $item['price'] * $item['quantity'];
            }
        return $total;
    }

    public static function clear(){
        if(isset($_SESSION['products'])){
            unset($_SESSION['products']);

        }
    }
}