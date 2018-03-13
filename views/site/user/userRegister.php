<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 02.02.2018
 * Time: 13:46
 */

include ROOT."/views/site/home/header.php";

$userName = $name;
$userEmail = $email;
$userPassword = $password;

$errorsRegistry = array();
$error = $errors;
if($error){
    foreach($error as $er){
      $errorsRegistry[] = $er;
      echo $er;
    }
}

$smarty->assign("USERNAME", $userName);
$smarty->assign("USEREMAIL", $userEmail);
$smarty->assign("USERPASSWORD", $userPassword);
$smarty->assign("ERRORS", $errorsRegistry);

$smarty->display("user/userRegister.tpl");


