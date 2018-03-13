<?php
include ROOT . "/views/site/home/smartyNew.php";
include ROOT . "/views/site/home/categoryMenu.php";
include ROOT . "/views/site/home/footer.php";

$cat = array();
$cat = $categories;

$userOnline = '';
if(isset($_SESSION['user'])){
    $userOnline = $_SESSION['user'];
}

$smarty->assign("COUNTCART", $countCart);
$smarty->assign("userOnline", $userOnline);
$smarty->assign("CATEGORIES", $cat);







