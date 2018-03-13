<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.02.2018
 * Time: 22:57
 */

class AdminProductController extends AdminBase
{
    /**
     * Отображается список всех продуктов
     * @return bool
     */
    public function actionIndex(){
        self::checkAdmin();

        $productList = Product::getProductsList();
        require_once (ROOT.('/views/site/admin/product/index.php'));
        return true;
    }

    /**
     * Выводится и обрабатывается форма для добавления нового товара
     * @return bool
     */
    public function actionCreate(){
        self::checkAdmin();

        $categories = Category::getCategoriesList();

        if(isset($_POST['add'])) {
            $product['name'] = $_POST['name'];
            $product['code'] = $_POST['code'];
            $product['price'] = $_POST['price'];
            $product['category_id'] = $_POST['category_id'];
            $product['brand'] = $_POST['brand'];
            $product['avallability'] = $_POST['avallability'];
            $product['descriptoon'] = $_POST['description'];
            $product['is_new'] = $_POST['is_new'];
            $product['is_recommended'] = $_POST['is_recommended'];
            $product['status'] = $_POST['status'];

            $id = Product::createProduct($product);
            echo $id;
            if ($id) {
                if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], ROOT . "/views/image/product/".$product['category_id']."/".$id.".jpg");
                    $src = "/views/image/product/".$product['category_id']."/".$id.".jpg";
                    Product::addImageProduct($id, $src);
                }
                header("Location: /admin/product");
            }
        }

        require_once (ROOT.('/views/site/admin/product/addProduct.php'));
        return true;

    }

    /**
     * Выводится и обрабатывается форма для редактирования товара, который идентифицируется входным параметром @param $id
     * Возвращает результат @return bool
     */
    public function actionUpdate($id){
        self::checkAdmin();

        $categories = Category::getCategoriesList();

        $productLast = Product::getProductById($id);

        if(isset($_POST['update'])) {
            $product['name'] = $_POST['name'];
            $product['code'] = $_POST['code'];
            $product['price'] = $_POST['price'];
            $product['category_id'] = $_POST['category_id'];
            $product['brand'] = $_POST['brand'];
            $product['avallability'] = $_POST['avallability'];
            $product['descriptoon'] = $_POST['description'];
            $product['is_new'] = $_POST['is_new'];
            $product['is_recommended'] = $_POST['is_recommended'];
            $product['status'] = $_POST['status'];

            if (Product::updateProductById($id, $product)) {
                if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], ROOT . "/views/image/product/".$product['category_id']."/".$id.".jpg");
                    $src = "/views/image/product/".$product['category_id']."/".$id.".jpg";
                    Product::addImageProduct($id, $src);
                }
                header("Location: /admin/product");
            }
        }


        require_once (ROOT.('/views/site/admin/product/updateProduct.php'));
        return true;

    }

    /**
     *  Выводится и обрабатывается форма для удаления товара, который идентифицируется входным параметром @param $id
     * Возвращает результат @return bool
     */
    public function actionDelete($id){
        self::checkAdmin();

        if(isset($_POST['submit'])){

            Product::deleteProductById($id);

            header('Location: /admin/product');
        }
        require_once (ROOT.('/views/site/admin/product/deleteProduct.php'));
        return true;

    }

}
