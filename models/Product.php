<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 30.01.2018
 * Time: 23:51
 */

class Product
{
    const SHOW_BY_DEFAULT = 3;

    /**
     * @param int $count
     * @return array выводит список товаров начиная с последнего
     */
    public static function getLatestProduct($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Db::getConnection();
        $productList = array();

        $result = $db->query("SELECT `id`, `name`, `code`, `price`, `image`, `is_new` FROM `product` WHERE `status` = 1 ORDER BY `id` DESC LIMIT " . $count);
        if ($result) {
            foreach ($result as $row) {
                $productList[] = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'code' => $row['code'],
                    'price' => $row['price'],
                    'image' => $row['image'],
                    'is_new' => $row['is_new']
                );
            }
            return $productList;
        }

    }

    /**
     * @param int $count
     * @return array выводит список товаров с галочкой Новинка
     */

    public static function getNewProduct($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Db::getConnection();
        $productList = array();

        $result = $db->query("SELECT `id`, `name`, `price`, `code`, `image`, `is_new` FROM `product` WHERE `is_new` = 1 ORDER BY `id` DESC LIMIT " . $count);
        if ($result) {
            foreach ($result as $row) {
                $productList[] = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'price' => $row['price'],
                    'code' => $row['code'],
                    'image' => $row['image'],
                    'is_new' => $row['is_new']
                );
            }
            return $productList;
        }

    }

    public static function getProdList($page = 1, $count){
        $page = intval($page);
        $offset = ($page - 1)*$count;
        $db = Db::getConnection();
        $productList = array();

        $sql = "SELECT `id`, `name`, `category_id`, `code`, `price`, `image`, `is_new` FROM `product` ORDER BY `id` DESC LIMIT :coun OFFSET :offset";
        $result = $db->prepare($sql);

        $result->bindParam(':coun', $count , PDO::PARAM_INT);
        $result->bindParam(':offset', $offset , PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }

    /**
     * @param bool $categoryId
     * @param $page
     * @return array выводит список птоваров по категориям
     */

    public static function getListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {
            $page = intval($page);
            $count = self::SHOW_BY_DEFAULT;
            $offset = ($page - 1)*$count;
            $db = Db::getConnection();
            $productList = array();
            $result = $db->prepare("SELECT `id`, `name`, `price`, `code`, `image`, `is_new` FROM `product` WHERE `category_id` = :categoryId ORDER BY `id` DESC LIMIT :count OFFSET :offset");

            $result->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
            $result->bindParam(':count', $count , PDO::PARAM_INT);
            $result->bindParam(':offset', $offset , PDO::PARAM_INT);
            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);

            // Выполнение коменды
            $result->execute();

            $i = 0;
            $productsList = array();
            while ($row = $result->fetch()) {
                $productsList[$i]['id'] = $row['id'];
                $productsList[$i]['name'] = $row['name'];
                $productsList[$i]['code'] = $row['code'];
                $productsList[$i]['price'] = $row['price'];
                $productsList[$i]['image'] = $row['image'];
                $productsList[$i]['is_new'] = $row['is_new'];
                $i++;
            }
            return $productsList;

        }
    }

    /**
     * @param $productId
     * @return array выводит данные о товаре на одной странице
     */
    public static function getProductById($productId){
        if($productId) {
            $db = Db::getConnection();
            $product = array();
            $result = $db->query("SELECT `id`, `name`, `category_id`, `code`, `price`, `avallibity`, `brand`, `image`, `descriptoon`, `is_new`, `is_recommended`, `status` FROM `product` WHERE `id`=".$productId);
            if($result) {
                foreach ($result as $row) {
                    $product = array(
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'category_id' => $row['category_id'],
                        'code' => $row['code'],
                        'price' => $row['price'],
                        'avallibity' => $row['avallibity'],
                        'brand' => $row['brand'],
                        'image' => $row['image'],
                        'descriptoon' => $row['descriptoon'],
                        'is_new' => $row['is_new'],
                        'is_recommended' => $row['is_recommended'],
                        'status' => $row['status']
                    );
                }
            }
            return $product;
        }
    }

    /**Подсчет количества товара для пагинации
     * @return mixed
     */
    public static function getTotalProducts(){
        $db = Db::getConnection();

        $result = $db->query("SELECT COUNT(`id`) FROM `product` WHERE `status` = 1");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        return $row['COUNT(`id`)'];
    }

    /**Подсчет количества товара для пагинации по катгориям
     * @param $categoryId
     * @return mixed
     */
    public static function getTotalProductsInCategiry($categoryId){
        $db = Db::getConnection();

        $result = $db->query("SELECT COUNT(`id`) FROM `product` WHERE `status` = 1 AND `category_id`=".$categoryId);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        return $row['COUNT(`id`)'];
    }

    /**
     * Информация о товарах из списка @param $idArray
     * @return array
     */
    public static function getProductsByIds($idArray){
        $products = array();
        $db = Db::getConnection();
        $idsString = implode(',', $idArray);

        $sql = "SELECT * FROM `product` WHERE `id` IN ($idsString)";

        $result = $db->query($sql);

        foreach ($result as $row){
            $products[] = array(
                'id' => $row['id'],
                'code' => $row['code'],
                'name' => $row['name'],
                'price' => $row['price']
                );
        }

        return $products;
    }

    /** Возвращает список товаров
     * @return array
     */

    public static function getProductsList(){
        $db = Db::getConnection();

        $sql = "SELECT `id`, `name`, `category_id`, `code`, `price` FROM `product` ORDER BY `id` ";
        $result = $db->query($sql);

        $productList = array();
        foreach ($result as $row){
            $productList[] = array(
                'id' => $row['id'],
                'code' => $row['code'],
                'name' => $row['name'],
                'price' => $row['price'],
                'category_id' => $row['category_id']
            );
        }
        return $productList;
    }

    /**
     * Поиск товара
     * @param $text
     * @return array
     */
    public static function searchProduct($text){
        $db = Db::getConnection();

        $text = '"%'.$text.'%"';
        $sql = "SELECT `id`, `name`, `category_id`, `code`, `price`, `image` FROM `product` WHERE `name` LIKE ".$text;
        $result = $db->query($sql);

        $productList = array();
        foreach ($result as $row){
            $productList[] = array(
                'id' => $row['id'],
                'code' => $row['code'],
                'name' => $row['name'],
                'price' => $row['price'],
                'category_id' => $row['category_id'],
                'image' => $row['image'],
            );
        }
        return $productList;
    }

    /**
     * Поиск товара по категории
     * @param $category_id
     * @param $text
     * @return array
     */
    public static function searchProductByCategory($category_id, $text){
        $db = Db::getConnection();
        $text = '%'.$text.'%';
        $sql = "SELECT `id`, `name`, `category_id`, `code`, `price`, `image` FROM `product` WHERE `category_id` = :category AND `name` LIKE  :search-text";
        $result = $db->prepare($sql);
        $result->bindParam(':category', $category_id, PDO::PARAM_INT);
        $result->bindParam(':search-text', $text, PDO::PARAM_STR);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['category_id'] = $row['category_id'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productsList;
    }

    /**Формируем массив из товаров конкретного заказа
     * @param $order_id
     * @return array
     */
    public static function getProductInOrder($order_id){
        $db = Db::getConnection();

        $sql = "SELECT `order_product`.`product_id`,  `product`.`name`,`product`.`code`, `order_product`.`quantity`,`order_product`.`price` FROM `order_product` JOIN  `product` ON `order_product`.`product_id` = `product`.`id` WHERE `order_product`.`order_id` = :order_id";

        $result = $db->prepare($sql);
        $result->bindParam(':order_id', $order_id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['product_id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['quantity'] = $row['quantity'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $productsList;
    }

    /**
     * Создание ового товара
     * @param $product
     * @return int|string
     */
    public static function createProduct($product){
        $db =Db::getConnection();

        $sql = "INSERT INTO `product`(`name`, `category_id`, `code`, `price`, `avallibity`, `brand`, `descriptoon`, `is_new`, `is_recommended`, `status`)"
        ." VALUES (:nameP, :category_id, :code, :price, :avallibity, :brand, :descriptoon, :is_new, :is_recommended, :status)";

        $result = $db->prepare($sql);
        $result->bindParam(":nameP", $product['name'],PDO::PARAM_STR);
        $result->bindParam(":category_id", $product['category_id'],PDO::PARAM_INT);
        $result->bindParam(":code", $product['code'],PDO::PARAM_STR);
        $result->bindParam(":price", $product['price'],PDO::PARAM_STR);
        $result->bindParam(":avallibity", $product['avallibity'],PDO::PARAM_INT);
        $result->bindParam(":brand", $product['brand'],PDO::PARAM_STR);
        $result->bindParam(":descriptoon", $product['descriptoon'],PDO::PARAM_STR);
        $result->bindParam(":is_new", $product['is_new'],PDO::PARAM_INT);
        $result->bindParam(":is_recommended", $product['is_recommended'],PDO::PARAM_INT);
        $result->bindParam(":status", $product['status'],PDO::PARAM_INT);

        if($result->execute()){
            return $db->lastInsertId();
        }
        return 0;
    }

    /**Редактирование информации о товаре
     * @param $id
     * @param $product
     * @return bool
     */
    public static function updateProductById($id, $product){

        $db = Db::getConnection();

        $sql = "UPDATE `product`  
                    SET 
                      `name`=:nameP,
                      `category_id`=:category_id,
                      `code`=:code,
                      `price`=:price,
                      `avallibity`=:avallibity,
                      `brand`=:brand,
                      `descriptoon`=:descriptoon,
                      `is_new`=:is_new,
                      `is_recommended`=:is_recommended,
                      `status`=:status 
                    WHERE `id` = :id";

        $result = $db->prepare($sql);
        $result->bindParam(":nameP", $product['name'],PDO::PARAM_STR);
        $result->bindParam(":category_id", $product['category_id'],PDO::PARAM_INT);
        $result->bindParam(":code", $product['code'],PDO::PARAM_STR);
        $result->bindParam(":price", $product['price'],PDO::PARAM_STR);
        $result->bindParam(":avallibity", $product['avallibity'],PDO::PARAM_INT);
        $result->bindParam(":brand", $product['brand'],PDO::PARAM_STR);
        $result->bindParam(":descriptoon", $product['descriptoon'],PDO::PARAM_STR);
        $result->bindParam(":is_new", $product['is_new'],PDO::PARAM_INT);
        $result->bindParam(":is_recommended", $product['is_recommended'],PDO::PARAM_INT);
        $result->bindParam(":status", $product['status'],PDO::PARAM_INT);
        $result->bindParam(":id", $id,PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Добаление фотографии вкарточку товара
     * @param $id
     * @param $src
     * @return bool
     */
    public static function addImageProduct($id, $src){

        $db = Db::getConnection();

        $sql = "UPDATE `product` SET `image`=:image WHERE `id` = :id";

        $result = $db->prepare($sql);
        $result->bindParam(":image", $src,PDO::PARAM_STR);
        $result->bindParam(":id", $id,PDO::PARAM_INT);
        return $result->execute();
    }

    /**Удаляет товар с указанным id
     * @param $id
     * @return bool
     */
    public static function deleteProductById($id){
        $db = Db::getConnection();

        $sql = "DELETE FROM `product` WHERE `id` = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}