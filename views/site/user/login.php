<?php

include ROOT."/views/site/home/header.php";

$userEmail = $email;
$userPassword = $password;

$errorsLogin = array();
$error = $errors;
if($error){
    foreach($error as $er){
        $errorsLogin[] = $er;
        echo $er;
    }
}

$smarty->assign("USEREMAIL", $userEmail);
$smarty->assign("USERPASSWORD", $userPassword);
$smarty->assign("ERRORS", $errorsLogin);

$smarty->display("user/login.tpl");


