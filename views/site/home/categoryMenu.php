<?php

$cm = array();
$cm = $categories;

$categoryActive = '';
if(isset($categoryId)){
    $categoryActive = $categoryId;
}
$smarty->assign("catAct", $categoryActive);
$smarty->assign("cm", $cm);