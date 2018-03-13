<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.02.2018
 * Time: 18:54
 */

class Order
{
    /**
     * Формируем заказ и записываем данные в бд
     * @param $userName
     * @param $userPhone
     * @param $userComment
     * @param $userId
     * @param $products
     * @param $delivery
     * @param $adress
     * @param $payment
     * @return bool
     */
    public static function save($userName, $userPhone, $userComment, $userId, $products, $delivery, $adress, $payment){
        echo $delivery;
        $db = Db::getConnection();
        $sql = "INSERT INTO `product_order`(`user_name`, `user_phone`, `user_comment`, `user_id`, `delivery`, `adress`, `paymethod`, `date_order`) 
                                    VALUES (:user_name, :user_phone, :user_comment, :user_id, :delivery, :adress, :paymethod, CURRENT_DATE)";

        $result = $db->prepare($sql);
        $result->bindParam(':user_name',$userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone',$userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment',$userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id',$userId, PDO::PARAM_INT);
        $result->bindParam(':delivery', $delivery, PDO::PARAM_STR);
        $result->bindParam(':adress', $adress, PDO::PARAM_STR);
        $result->bindParam(':paymethod', $payment, PDO::PARAM_STR);

        if($result->execute()){
            $sql = "SELECT MAX(`id`) FROM `product_order`";
            $result = $db->query($sql);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
            $id = $row['MAX(`id`)'];
            foreach($products as $product=>$quantity){
                $sql = "INSERT INTO `order_product`(`order_id`, `product_id`, `quantity`, `price`) VALUES (:order_id, :product_id , :quantity, (SELECT `price` FROM `product` WHERE `id` = :product_id))";
                $result = $db->prepare($sql);
                $result->bindParam(':order_id', $id, PDO::PARAM_INT);
                $result->bindParam(':product_id', $product, PDO::PARAM_INT);
                $result->bindParam(':quantity', $quantity, PDO::PARAM_INT);
                $result->execute();
            }
        }
        return true;
    }

    /**
     * Достаем список всх заказов
     * @return array
     */
    public static function getOrderList(){
        $db = Db::getConnection();
        $orders = array();
        //$sql = "SELECT `id`, `user_name`, `user_phone`, `email`, `user_id`, `date_order`, `delivery`, `paymethod`, `status` FROM `product_order`";
        $sql = "SELECT `product_order`.`id`, `product_order`.`user_name`, `product_order`.`user_phone`, `product_order`.`email`, `product_order`.`user_id`, `product_order`.`date_order`, `product_order`.`delivery`, `product_order`.`paymethod`, `status`.`name_status`, `product_order`.`time_update` FROM  `product_order`, `status` WHERE  `product_order`.`status` = `status`.`id`";

        $result = $db->query($sql);
        if ($result) {
            foreach ($result as $row) {
                $orders[] = array(
                    'id' => $row['id'],
                    'user_name' => $row['user_name'],
                    'user_phone'=>$row['user_phone'],
                    'email'=>$row['email'],
                    'user_id' => $row['user_id'],
                    'date_order'=>$row['date_order'],
                    'delivery'=>$row['delivery'],
                    'paymethod'=>$row['paymethod'],
                    'status'=>$row['name_status'],
                    'time_update'=>$row['time_update']
                );
            }
            return $orders;
        }
    }

    /**
     * Достаем из БД информацию о конкретном заказе по @param $id
     * @return mixed
     */
    public static function getOrderById($id){
        $db = Db::getConnection();

        $sql = "SELECT `product_order`.`id`, `product_order`.`user_name`, `product_order`.`user_phone`, `product_order`.`email`, `product_order`.`user_comment`, `product_order`.`user_id`, `product_order`.`date_order`, `product_order`.`products`, `product_order`.`delivery`, `product_order`.`adress`, `product_order`.`paymethod`, `product_order`.`status`, `status`.`name_status`, `product_order`.`time_update` FROm `product_order`, `status` WHERE `product_order`.`status` = `status`.`id` AND `product_order`.`id` = :id";

        $result = $db->prepare($sql);
        $result->bindParam(":id", $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }

    /**
     * Достаем из БД список заказов конкретного пользователя @param $userId
     * @return array
     */
    public static function getOrderByUsers($userId){
        $db = Db::getConnection();

        $sql = "SELECT `product_order`.`id`, `product_order`.`user_comment`, `product_order`.`date_order`, `product_order`.`delivery`, `product_order`.`adress`, `product_order`.`paymethod`, `status`.`name_status`, `product_order`.`time_update` FROm `product_order`, `status` WHERE `product_order`.`status` = `status`.`id` AND `product_order`.`user_id` = ".$userId;

        $result = $db->query($sql);
        if ($result) {
            foreach ($result as $row) {
                $orders[] = array(
                    'id' => $row['id'],
                    'user_comment' => $row['user_comment'],
                    'date_order'=>$row['date_order'],
                    'delivery'=>$row['delivery'],
                    'adress' =>$row['adress'],
                    'paymethod'=>$row['paymethod'],
                    'time_update'=>$row['time_update'],
                    'name_status' => $row['name_status']
                );
            }
            return $orders;
        }

    }

    /**
     * Список статусов заказа
     * @return array
     */
    public static function getStatusList(){
        $db = Db::getConnection();
        $sql = "SELECT  * FROM `status`";

        $result = $db->query($sql);
        if ($result) {
            foreach ($result as $row) {
                $status[] = array(
                    'id' => $row['id'],
                    'name_status' => $row['name_status']
                );
            }
            return $status;
        }
    }

    /**
     * Редактируем заказ
     * @param $order_id
     * @param $status
     * @param $user_id
     * @return bool
     */
    public static function updateOrder($order_id, $status, $user_id){
        $db = Db::getConnection();
        $sql = "UPDATE `product_order` SET `status` = :status, `user_update_id` = :user_id, `time_update` = CURRENT_DATE WHERE `id` = :order_id";

        $result = $db->prepare($sql);
        $result->bindParam(":status", $status, PDO::PARAM_INT);
        $result->bindParam(":order_id", $order_id, PDO::PARAM_INT);
        $result->bindParam(":user_id", $user_id, PDO::PARAM_INT);
        return $result->execute();
    }

}