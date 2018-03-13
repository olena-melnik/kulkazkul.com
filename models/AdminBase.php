<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.02.2018
 * Time: 22:41
 */

abstract class AdminBase
{
    /**
     * Проверка прав доступа пользователя
     * @return bool
     */
    public static function checkAdmin(){
        $userId = User::checkLogger();

        $user = User::getUserById($userId);

        if($user['role'] == 'admin'){
            return true;
        } else {
            header("Location: /");
        }

    }
}