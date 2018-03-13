<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 28.02.2018
 * Time: 11:50
 */

include ROOT . "/views/site/home/header.php";

$allPosts  = array();
$allPosts = $posts;

$smarty->assign("POSTS", $allPosts);

$smarty->display("info/posts.tpl");