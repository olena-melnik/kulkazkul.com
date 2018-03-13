<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 27.02.2018
 * Time: 14:26
 */

class InfoController
{
    /**
     * Страница О нас
     * @return bool
     */
    public function actionAboutUs(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        require_once(ROOT . "/views/site/info/aboutUs.php");
        return true;
    }

    /**
     * Страница статьи
     * @return bool
     */
    public function actionPosts(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        $posts = Post::getListPost();

        require_once(ROOT . "/views/site/info/posts.php");
        return true;
    }

    /**
     * Старница констакты
     * @return bool
     */
    public function actionContact(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        require_once(ROOT . "/views/site/info/contact.php");
        return true;

    }

    /**
     * Запрос звонка с header
     * @return bool
     */
    public function actionRequestcall(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        $callbackname = $_POST['callbackname'];
        $callbacktel = $_POST['callbacktel'];
        $message = "Ваше звернення прийнято! Чекайта дзвінка адміністратора!";
        $mesEmail = 'Була прийнята заявка від '.$callbackname.' з проханням передзвонити по номеру '.$callbacktel;

        $mail = new Mail();
        $mail->setSubject('Заявка на зворотній зв\'язок звонок');
        $mail->setMessage($mesEmail);
        $mail->sendMail();

        require_once(ROOT . "/views/site/info/success.php");
        return true;
    }

    /**
     * Оформление подписки на обновления и новости
     * @return bool
     */
    public function actionSubscription(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        $email = $_POST['email'];
        $message = "Ваше звернення прийнято! Дякуємо за підписку!";

        $mesEmail = 'Оформлена підписка на електронну адресу: '.$email;

        $mail = new Mail();
        $mail->setSubject('Підписка на новини');
        $mail->setMessage($mesEmail);
        $mail->sendMail();

        require_once(ROOT . "/views/site/info/success.php");
        return true;
    }

    /**
     * Страница обратный звонок
     * @return bool
     */
    public function actionCallback(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        if(isset($_POST['send'])){
            $name = $_POST['nameUser'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $theme= $_POST['theme'];
            $text = $_POST['message'];

            $message = "Ваше звернення прийнято! Дякуємо!";

            $mesEmail= "Вам прийшов лист від ".$name.",\nТелефон:".$phone."Електронна адреса:\n".$email."\n Тема:".$theme."\n Текст: \n".$text;

            $mail = new Mail();
            $mail->setSubject('Нове повідомлення');
            $mail->setMessage($mesEmail);
            $mail->sendMail();

            require_once(ROOT . "/views/site/info/success.php");
            return true;
        }

        require_once(ROOT . "/views/site/info/callback.php");
        return true;
    }
}