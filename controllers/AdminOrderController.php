<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 05.03.2018
 * Time: 11:27
 */

class AdminOrderController extends AdminBase
{
    /**
     * @return bool Отображается списк всех заказов
     */
    public function ActionIndex(){
        self::checkAdmin();

        $orders = Order::getOrderList();
        require_once (ROOT.('/views/site/admin/orders/index.php'));
        return true;

    }

    /**
     * @param $id
     * @return bool Окно просмотра конкретного заказа, без возможности редактирования
     */
    public function ActionShow($id){
        self::checkAdmin();

        $order = Order::getOrderById($id);
        $status  = Order::getStatusList();

        $products = Product::getProductInOrder($id);
        $totalPrice = Cart::getTotalPriceOrder($products);

        require_once (ROOT.'/views/site/admin/orders/show.php');
        return true;
    }

    /**
     * @param $id
     * @return bool Окно редактирования статуса заказа
     */
    public function ActionUpdate($id){
        self::checkAdmin();

        $user_id = User::checkLogger();
        $order = Order::getOrderById($id);
        $status  = Order::getStatusList();

        $products = Product::getProductInOrder($id);
        $totalPrice = Cart::getTotalPriceOrder($products);

        if(isset($_POST['update'])) {
            $new_status = $_POST['status'];

            if(Order::updateOrder($id, $new_status, $user_id)){
                header("Location: /admin/orders/orders");
            }
        }

        require_once (ROOT.'/views/site/admin/orders/update.php');
        return true;
    }
}