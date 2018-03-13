<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 12.02.2018
 * Time: 14:41
 */

class AdminCategoryController extends AdminBase
{
    /** Проверяем есть право доступа и открываем список категорий
     * @return bool
     */
    public function actionIndex(){
        self::checkAdmin();

        $categories = Category::getCategoriesList();
        require_once (ROOT.('/views/site/admin/category/index.php'));
        return true;
    }

    /**
     * Создаем новую категорию
     * @return bool
     */
    public function actionCreate(){
        self::checkAdmin();

        if(isset($_POST['add'])) {
            $categories['name'] = $_POST['name'];
            $categories['sort_order'] = $_POST['sort_order'];
            $categories['status'] = $_POST['status'];

            $id = Category::createCategory($categories);

            if ($id) {
                header("Location: /admin/category");
            }
        }

        require_once (ROOT.('/views/site/admin/category/add.php'));
        return true;

    }

    /**
     * Редактируем категорию
     * @param $id
     * @return bool
     */
    public function actionUpdate($id){
        self::checkAdmin();

       $categoryLast = Category::getCategoryById($id);

        if(isset($_POST['update'])) {
            $categories['name'] = $_POST['name'];
            $categories['sort_order'] = $_POST['sort_order'];
            $categories['status'] = $_POST['status'];


            if (Category::updateCategoryById($id, $categories)) {

                header("Location: /admin/category");
            }
        }


        require_once (ROOT.('/views/site/admin/category/update.php'));
        return true;

    }

    /**
     * Удаляем категорию
     * @param $id
     * @return bool
     */

    public function actionDelete($id){
        self::checkAdmin();

        if(isset($_POST['submit'])){

            Category::deleteCategoryById($id);

            header('Location: /admin/category');
        }
        require_once (ROOT.('/views/site/admin/category/delete.php'));
        return true;

    }

}