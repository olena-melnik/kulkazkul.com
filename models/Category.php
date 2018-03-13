<?php
class Category
{
    /**
     * @return array возвращает список категорий
     */
    public static function getCategoriesList()
    {
        $db = Db::getConnection();
        $categoryList = array();
        $result = $db->query("SELECT * FROM `category`");
        if ($result) {
            foreach ($result as $row) {
                $categoryList[] = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'sort_order'=>$row['sort_order'],
                    'status'=>$row['status']
                );
            }
            return $categoryList;
        }

    }

    /**
     * Достаем информацию о категори по @param $id
     * @return array
     */
    public static function getCategoryById($id){

        $db = Db::getConnection();
        $category = array();
        $sql = "SELECT `id`, `name`, `sort_order`, `status` FROM `category` WHERE `id` = ".$id;
        $result = $db->query($sql);

        if ($result) {
            foreach ($result as $row) {
                $category = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'sort_order'=>$row['sort_order'],
                    'status'=>$row['status']
                );
            }
            return $category;
        }
    }

    /**
     * Создаем новую ктегорию
     * @param $categories
     * @return bool
     */
    public static function createCategory($categories){
        $db =Db::getConnection();

        $sql = "INSERT INTO `category`(`name`, `sort_order`, `status`) VALUES (:nameC, :sort_order, :status)";

        $result = $db->prepare($sql);
        $result->bindParam(":nameC", $categories['name'],PDO::PARAM_STR);
        $result->bindParam(":sort_order", $categories['sort_order'],PDO::PARAM_INT);
        $result->bindParam(":status", $categories['status'],PDO::PARAM_STR);

        return $result->execute();
    }

    /**
     * Редактирование категории
     * @param $id
     * @param $category
     * @return bool
     */
    public static function updateCategoryById($id, $category){

        $db = Db::getConnection();
        $sql = "UPDATE `category` SET `name`=:nameC,`sort_order`=:sort_order,`status`=:status WHERE `id` = :id";

        $result = $db->prepare($sql);
        $result->bindParam(":nameC", $category['name'],PDO::PARAM_STR);
        $result->bindParam(":sort_order", $category['sort_order'],PDO::PARAM_INT);
        $result->bindParam(":status", $category['status'],PDO::PARAM_STR);
        $result->bindParam(":id", $id,PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Удаление категории, возможно, только если нет ни дного товара данной категории
     * @param $id
     * @return bool
     */
    public static function deleteCategoryById($id){
        $db = Db::getConnection();

        $sql = "DELETE FROM `category` WHERE `id` = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();

    }

}