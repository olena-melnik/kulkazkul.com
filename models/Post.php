<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 23.02.2018
 * Time: 15:30
 */

class Post
{
    const SHOW_POST = 3;

    /**
     * Выводим список статей в сокращенном виде на главню страницу
     * @param int $count
     * @return array
     */
    public static function getLastPost ($count = self::SHOW_POST){

        $count = intval($count);

        $db = Db::getConnection();

        $postList = array();
        $result = $db->query("SELECT `id`, `title_article`, `text_article`, `short_text`, `date_article`, `image_article`, `sourse_link`, `author` FROM `article` LIMIT " . $count);

        if ($result) {
            foreach ($result as $row) {
                $postList[] = array(
                    'id' => $row['id'],
                    'title_article' => $row['title_article'],
                    'text_article' => $row['text_article'],
                    'short_text' => $row['short_text'],
                    'date_article' => $row['date_article'],
                    'image_article' => $row['image_article'],
                    'sourse_link'=> $row['sourse_link'],
                    'author' => $row['author']
            );
            }
        }
        return $postList;

    }

    /**
     * Список всех статей
     * @return array
     */
    public static function getListPost (){
        $db = Db::getConnection();

        $postList = array();
        $result = $db->query("SELECT `id`, `title_article`, `text_article`, `short_text`, `date_article`, `image_article`, `sourse_link`, `author` FROM `article` ");

        if ($result) {
            foreach ($result as $row) {
                $postList[] = array(
                    'id' => $row['id'],
                    'title_article' => $row['title_article'],
                    'text_article' => $row['text_article'],
                    'short_text' => $row['short_text'],
                    'date_article' => $row['date_article'],
                    'image_article' => $row['image_article'],
                    'sourse_link'=> $row['sourse_link'],
                    'author' => $row['author']
                );
            }
        }
        return $postList;

    }

    /**
     * Просмотр одной статьи
     * @param $id
     * @return array
     */
    public static function getPostById($id){
        $db = Db::getConnection();

        $onePost = array();
        $result = $db->query("SELECT `id`, `title_article`, `text_article`, `short_text`, `date_article`, `image_article`, `sourse_link`, `author` FROM `article` WHERE `id`=".$id);

        if ($result) {
            foreach ($result as $row) {
                $onePost = array(
                    'id' => $row['id'],
                    'title_article' => $row['title_article'],
                    'text_article' => $row['text_article'],
                    'short_text' => $row['short_text'],
                    'date_article' => $row['date_article'],
                    'image_article' => $row['image_article'],
                    'sourse_link'=> $row['sourse_link'],
                    'author' => $row['author']
                );
            }
        }
        return $onePost;
    }

    /**Создание статьи
     * @param $posts
     * @return int|string
     */
    public static function createPost($posts){
        $db =Db::getConnection();

        $sql = "INSERT INTO `article`(`title_article`, `text_article`, `short_text`, `date_article`, `sourse_link`, `author`) VALUES (:title_article, :text_article, :short_text, :date_article, :sourse_link, :author)";
        $result = $db->prepare($sql);

        $result->bindParam(":title_article", $posts['title_article'],PDO::PARAM_STR);
        $result->bindParam(":text_article", $posts['text_article'],PDO::PARAM_STR);
        $result->bindParam(":short_text", $posts['short_text'],PDO::PARAM_STR);
        $result->bindParam(":date_article", $posts['date_article'],PDO::PARAM_STR);
        $result->bindParam(":sourse_link", $posts['sourse_link'],PDO::PARAM_STR);
        $result->bindParam(":author", $posts['author'],PDO::PARAM_STR);

        if($result->execute()){
            return $db->lastInsertId();
        }
        return 0;
    }

    /**Редактирование статьи
     * @param $id
     * @param $posts
     * @return bool
     */
    public static function updatePostById($id, $posts){
        $db = Db::getConnection();

        $sql = "UPDATE `article` SET `title_article`=:title_article, `text_article`=:text_article, `short_text`=:short_text, `date_article`=:date_article, `sourse_link`=:sourse_link, `author`=:author WHERE `id`=:id";
        $result = $db->prepare($sql);
        $result->bindParam(":title_article", $posts['title_article'],PDO::PARAM_STR);
        $result->bindParam(":text_article", $posts['text_article'],PDO::PARAM_STR);
        $result->bindParam(":short_text", $posts['short_text'],PDO::PARAM_STR);
        $result->bindParam(":date_article", $posts['date_article'],PDO::PARAM_STR);
        $result->bindParam(":sourse_link", $posts['sourse_link'],PDO::PARAM_STR);
        $result->bindParam(":author", $posts['author'],PDO::PARAM_STR);
        $result->bindParam(":id", $id,PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Добавление фото к статье
     * @param $id
     * @param $src
     * @return bool
     */
    public static function addImagePost($id, $src){

        $db = Db::getConnection();

        $sql = "UPDATE `article` SET `image_article`=:image WHERE `id` = :id";

        $result = $db->prepare($sql);
        $result->bindParam(":image", $src,PDO::PARAM_STR);
        $result->bindParam(":id", $id,PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Удаление статьи
     * @param $id
     * @return bool
     */
    public static function deletePostById($id){
        $db = Db::getConnection();

        $sql = "DELETE FROM `article` WHERE `id` = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();

    }
}