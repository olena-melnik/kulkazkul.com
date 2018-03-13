<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 02.02.2018
 * Time: 13:44
 */

class UserController
{
    /**
     * Регистрация нового пользователя
     * @return bool
     */
    public function actionRegister()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        $name = '';
        $email = '';
        $password = '';
        $errors = false;
        //валидация полей
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!User::checkName($name)){
                $errors[] = "Им'я не має бути коротше ніж 2 символа";
            }
            if(!User::checkPassword($password)){
                $errors[] = "Пароль не має бути коротше ніж 6 символів";
            }
            if(!User::checkEmail($email)) {
                $errors[] = "Введить коректний email";
            }

            if(User::checkEmailExists($email)){
                $errors[] = "Такій email вже використовувається";
            }

            if($errors == false) {
                $result = User::register($name,$email,$password);
                if($result){
                    echo "Вы зарегистрированы!";
                } else {
                    echo "Что-то пошло не так((";
                }
            }

        }
        require_once(ROOT . "/views/site/user/userRegister.php");
        return true;
    }

    /**
     * Залогирование пользователя
     * @return bool
     */
    public function actionLogin(){

        $categories = array();
        $categories = Category::getCategoriesList();

        $countCart = Cart::countItems();

        $email = '';
        $password = '';
        $errors = false;

        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            //Проверяем поля
            if(!User::checkPassword($password)){
                $errors[] = "Пароль не має бути коротше ніж 6 символів";
            }
            if(!User::checkEmail($email)) {
                $errors[] = "Введить коректний email";
            }

            $userId = User::checkUserData($email,$password);

            if($userId == false){
                $errors[] = "Перевірьте вхідні дані.";

            } else {
                User::auth($userId);
                header("Location: /cabinet/");
            }
        }
        require_once(ROOT . "/views/site/user/login.php");
        return true;
    }

    /**
     * Выход из сайта
     */
    public function actionLogout(){
        unset($_SESSION['user']);
        header("Location: /");
    }



}