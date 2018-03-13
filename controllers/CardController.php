<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 08.02.2018
 * Time: 23:20
 */

class CardController
{
    /**Отображение содержимого корзины
     * @return bool
     */
    public function actionIndex(){
        $categories = array();
        $categories = Category::getCategoriesList();
        $countCart = Cart::countItems();

        $productInCart = false;

        $productInCart = Cart::getProducts();

        if($productInCart){
            $productsIds = array_keys($productInCart);
            $products = Product::getProductsByIds($productsIds);

            $totalPrice = Cart::getTotalPrice($products);
        }
        require_once(ROOT . '/views/site/cart/cart.php');

        return true;
    }

    /**
     * Добавение товара в корзину по @param $id и @param $numb
     * @return bool
     */
    public function actionAdd($id, $numb){
        Cart::addProduct($id, $numb);
        return true;
    }

    /**Удаление товара из корзины по @param $id
     * @return bool
     */
    public function actionRemove($id){
        // Удаляем заданный товар из корзины
        Cart::removeProduct($id);
        // Возвращаем пользователя в корзину
        header("Location: /cart/");
        return true;
    }

    /**Очистка корзины
     * @return bool
     */
    public function actionRemoveAll(){
        // Удаляем заданный товар из корзины
        Cart::removeProductAll();
        // Возвращаем пользователя в корзину
        header("Location: /cart/");
        return true;
    }

    /**
     * Оформление заказа
     * @return bool
     */
    public function actionCheckout()
    {
        $productsInCart = Cart::getProducts();

        // Если товаров нет, отправляем пользователи искать товары на главную
        if ($productsInCart == false) {
            header("Location: /");
        }

        $categories = array();
        $categories = Category::getCategoriesList();
        $countCart = Cart::countItems();

        $productsIds = array_keys($productsInCart);
        $products = Product::getProductsByIds($productsIds);
        $totalPrice = Cart::getTotalPrice($products);

        // Количество товаров
        $totalQuantity = Cart::countItems();

        // Поля для формы
        $userName = false;
        $userPhone = false;
        $userComment = false;


        $result = false;
        // Проверяем является ли пользователь гостем
        if (!User::isGuest()) {
            // Если пользователь не гость
            // Получаем информацию о пользователе из БД
            $userId = User::checkLogger();
            $user = User::getUserById($userId);
            $userName = $user['name'];
            $userPhone = $user['phone'];

        } else {
            // Если гость, поля формы останутся пустыми
            $userId = 0;
            $userPhone = '';

        }
        //Принимаем элементы из формы
        if (isset($_POST['send'])) {
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];
            $delivery = $_POST['delivery'];
            $adress = '';
            $payment = $_POST['payment'];

            //Проверка правильности заполнения полей
            $errors = false;
            if (!User::checkName($userName))
                $errors[] = "Error";
            if (!User::checkPhone($userPhone))
                $errors[] = "Error";
            //Формирование адреса доставки в зависимости от способа
            switch($delivery){
                case 'himself':
                    break;
                case 'np-warehouse':
                    $adress = $_POST['region'].", ".$_POST['city-np'].", ".$_POST['warehouse-np'].";";
                    break;
                case 'np-corier':
                    $adress = $_POST['city-np-cor'].", ".$_POST['street-np-cor'].", ".$_POST['house-np-cor'].", ".$_POST['entrance-np-cor'].", ".$_POST['floor-np-cor'].", ".$_POST['room-np-cor'].";";
                    break;
                case 'another-warehouse':
                    $adress = $_POST['name-aw'].", ".$_POST['city-aw'].", ".$_POST['warehouse-aw'].", ".$_POST['street-aw'].", ".$_POST['house-aw'].";";
                    break;
            }
            //если ошибок нет, отправлем заказ в базу данных и письмо администратору о поступлени  нового заказа
            if ($errors == false) {

                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart, $delivery, $adress, $payment);
                if ($result) {
                    $message = "Им'я:".$userName."; \n Телефон:".$userPhone."; \n Коментарій:".$userComment."; \n Идентифікатор покупця:".$userId."; \n Спосіб доставки:".$delivery."Спосіб оплати:".$payment;

                    $mail = new Mail();
                    $mail->setSubject('New order');
                    $mail->setMessage($message);
                    $mail->sendMail();

                    Cart::clear();
                }
            }
            require_once(ROOT . '/views/site/cart/checkout.php');
            return true;
        }

    }

}