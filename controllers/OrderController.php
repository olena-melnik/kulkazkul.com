<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.02.2018
 * Time: 16:35
 */

class OrderController
{
    public function actionIndex(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        // Проверяем является ли пользователь гостем
        if (!User::isGuest()) {
            // Если пользователь не гость
            // Получаем информацию о пользователе из БД
            $userId = User::checkLogger();
            $user = User::getUserById($userId);
            $userName = $user['name'];
            $userPhone = $user['phone'];

        } else {
            //Если гость, поля формы останутся пустыми
            $userName = '';
            $userId = 0;
            $userPhone = '';

        }

        require_once(ROOT . '/views/site/cart/order.php');
        return true;
    }

}