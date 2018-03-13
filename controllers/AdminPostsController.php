<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 04.03.2018
 * Time: 17:43
 */

class AdminPostsController extends AdminBase
{
    /**
     * @return bool Отображается список всех статей
     */
    public static function actionIndex(){
        self::checkAdmin();

        $posts = Post::getListPost();
        require_once (ROOT.('/views/site/admin/posts/index.php'));
        return true;
}

    /**
     * Страница добавления новой статьи
     * @return bool
     */
    public static function actionCreate(){
        self::checkAdmin();
        //Принимаем данные из формы
        if(isset($_POST['add'])) {
            $posts['title_article'] = $_POST['title_article'];
            $posts['text_article'] = $_POST['text_article'];
            $posts['short_text'] = $_POST['short_text'];
            $posts['date_article'] = $_POST['date_article'];
            $posts['sourse_link'] = $_POST['sourse_link'];
            $posts['author'] = $_POST['author'];
            $posts['status'] = $_POST['status'];


            $id = Post::createPost($posts);
            //загружаем фотографию
            if ($id) {
                if (is_uploaded_file($_FILES['image_article']['tmp_name'])) {
                    move_uploaded_file($_FILES['image_article']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/views/image/articles/article".$id.".jpg");
                    $src = "/views/image/articles/article".$id.".jpg";
                    Post::addImagePost($id, $src);
                }
                header("Location: /admin/posts");
            }
        }

        require_once (ROOT.('/views/site/admin/posts/add.php'));
        return true;
    }

    /**Редактирование статьи по @param $id
     * @return bool
     */
    public function actionUpdate($id){
        self::checkAdmin();

        $onePost = Post::getPostById($id);

        if(isset($_POST['update'])) {
            $onePost['title_article'] = $_POST['title_article'];
            $onePost['text_article'] = $_POST['text_article'];
            $onePost['short_text'] = $_POST['short_text'];
            $onePost['date_article'] = $_POST['date_article'];
            $onePost['sourse_link'] = $_POST['sourse_link'];
            $onePost['author'] = $_POST['author'];



            if (Post::updatePostById($id, $onePost)) {

                if (is_uploaded_file($_FILES['image_article']['tmp_name'])) {
                    move_uploaded_file($_FILES['image_article']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/views/image/articles/article".$id.".jpg");
                    $src = "/views/image/articles/article".$id.".jpg";
                    Post::addImagePost($id, $src);
                }
                header("Location: /admin/posts");
            }
        }


        require_once (ROOT.('/views/site/admin/posts/update.php'));
        return true;

    }

    /**
     * Удаление статьи по @param $id
     * @return bool
     */
    public function actionDelete($id){
        self::checkAdmin();

        if(isset($_POST['submit'])){

            Post::deletePostById($id);

            header('Location: /admin/posts');
        }
        require_once (ROOT.('/views/site/admin/posts/delete.php'));
        return true;

    }

}