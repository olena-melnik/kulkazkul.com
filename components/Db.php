<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 30.01.2018
 * Time: 20:41
 */

class Db
{
    public static function getConnection(){
        $paramPath = ROOT."/config/db_param.php";
        $params = include($paramPath);
        $host = $params['host'];
        $dbname = $params['dbname'];

        $dsn = "mysql:host=$host;dbname=$dbname";
        try {
            $db = new PDO($dsn, $params["user"], $params["password"]);
            $db->exec('set names utf8');
            return $db;
        } catch (PDOException $e){
            echo 'Подключение не удалось'.$e->getMessage();
            return false;
        }

    }
}