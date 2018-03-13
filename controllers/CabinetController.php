<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 02.02.2018
 * Time: 15:47
 */

class CabinetController
{
    /**
     * Отображает кабинет пользователя, проверяет, зарегистрирован ли пользователь, вошел ли он в свой аккаунт
     * Возвращает результат @return bool
     */
    public function actionIndex(){
        $userId = User::checkLogger();

        $countCart = Cart::countItems();

        $categories = array();
        $categories = Category::getCategoriesList();

        $error = '';
        $user = User::getUserById($userId);

        if(User::isGuest()){
            $helloUser = "Hello, guest!";
        } else {
            $helloUser = "Hello, ".($_SESSION['user']);
        }

        if(isset($_POST['update'])){
            $user['name'] = $_POST['name'];
            $user['email'] = $_POST['email'];
            $user['phone'] = $_POST['phone'];

            User::updateUserData($userId, $user);

            header("Location: /cabinet/");
        }
        if(isset($_POST['updatePassword'])){
            if(!User::checkPassword($_POST['passwordNew1'])){
                $error = "Пароль не має бути коротше ніж 6 символів";
            } else {
                if ($_POST['passwordNew1'] === $_POST['passwordNew2']) {
                    if ($_POST['passwordOld'] === $user['password']) {

                        User::updatePassword($userId, $_POST['passwordNew1']);
                        $error = "Пароль змінено";
                    } else {
                        $error = "Перевірьте старий пароль";
                    }
                } else {
                    $error = "Пароли не співпадають";
                }
            }
        }

        $orders = Order::getOrderByUsers($userId);

        require_once (ROOT.('/views/site/user/cabinet.php'));
        return true;
    }

    /**
     * Просмотр и редактирование своих заказов пользователем
     * @param $order_id
     * @return bool
     */
    public function actionOrder($order_id){
        $countCart = Cart::countItems();

        $categories = array();
        $categories = Category::getCategoriesList();

        $userId = User::checkLogger();
        $user = User::getUserById($userId);
        $order = Order::getOrderById($order_id);
        $status  = Order::getStatusList();

        $products = Product::getProductInOrder($order_id);
        $totalPrice = Cart::getTotalPriceOrder($products);

        if(isset($_POST['update']) && $order['status']<5) {
            $new_status = $_POST['status'];
            if(Order::updateOrder($order_id, $new_status, $userId)){
                header("Location: /cabinet/");
            } else {
                echo "Заказ неактивен";
            }
        }
        require_once (ROOT.'/views/site/user/orderUser.php');
        return true;
    }
}