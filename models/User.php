<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 02.02.2018
 * Time: 14:18
 */

class User
{

    /**Регистрация новго пользователя
     * @param $name
     * @param $email
     * @param $password
     * @return bool
     */
    public static function register($name, $email, $password){
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();

    }

    /**
     * Валидация имени
     * @param $name
     * @return bool
     */
    public static function checkName($name){
        if(strlen($name) >= 2 && preg_replace('/[^a-zA-Zа-яА-Я0-9\s]/ui', '',$name)) {
            return true;
        }
        return false;
    }

    /**Валиация номера телефона
     * @param $phone
     * @return bool
     */
    public static function checkPhone($phone){
        if(strlen($phone) >= 5 && preg_replace('/\D/', '', $phone)) {
            return true;
        }
        return false;
    }

    /**
     * Валидация пароля
     * @param $password
     * @return bool
     */
    public static function checkPassword($password){
        if(strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * Валидация електронного адреса
     * @param $email
     * @return bool
     */
    public static function checkEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**Проверяем сущетвует ли пользователь с данным електронным адресом
     * @param $email
     * @return bool
     */
    public static function checkEmailExists($email){
        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM `users` WHERE `email`= :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn()){
            return true;
        }
        return false;
    }

    /**Проверяем существует ли пользлватель с @param $email и @param $password, ели да, то входим в систему
     * @return bool
     */
    public static function checkUserData($email, $password){
        $db = Db::getConnection();
        $sql = "SELECT * FROM `users` WHERE `email` = :email AND `password`= :password";
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetchColumn();

        if($user){
            return  $user;
        }
        return false;
    }

    /**
     * Достаем  @param $userId пользователя в системе
     */
    public static function auth($userId){
        $_SESSION['user'] = $userId;
    }

    /**
     * Проверем, вошел ли пользователь в ситетму
     * @return mixed
     */
    public static function checkLogger(){

        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        header("Location: /login/");
    }

    /**
     * Является ли пользователь гостем
     * @return bool
     */
    public static function isGuest(){

        if(isset($_SESSION['user'])){
            return false;
        } else {
            return true;
        }
    }

    /**
     * Достаем информацию о пользователе из БД
     * @param $id
     * @return mixed
     */
    public static function getUserById($id){
        $db = Db::getConnection();
        $sql = "SELECT * FROM `users` WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    /**
     * Редактирование информации пользователя
     * @param $id
     * @param $user
     * @return bool
     */
    public static function updateUserData($id, $user){
        $db = Db::getConnection();

        $sql="UPDATE `users` SET `name`=:nameU,`email`=:email,`phone`=:phone WHERE `id`=:id";
        $result=$db->prepare($sql);
        $result->bindParam(':nameU', $user['name'], PDO::PARAM_STR);
        $result->bindParam(':email', $user['email'], PDO::PARAM_STR);
        $result->bindParam(':phone', $user['phone'], PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return  $result->execute();
    }

    /**
     * Редактирование пароля поьзователя
     * @param $id
     * @param $password
     * @return bool
     */
    public static function updatePassword($id, $password){
        $db = Db::getConnection();

        $sql="UPDATE `users` SET `password`=:password WHERE `id`=:id";
        $result=$db->prepare($sql);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return  $result->execute();
    }

}