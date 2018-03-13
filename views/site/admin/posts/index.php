<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 04.03.2018
 * Time: 17:18
 */
include ROOT. "/views/site/admin/header.php";


$smarty->assign("POSTSLIST", $posts);
$smarty->display('admin/posts/posts.tpl');