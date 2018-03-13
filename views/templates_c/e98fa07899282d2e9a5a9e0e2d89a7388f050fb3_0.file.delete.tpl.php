<?php
/* Smarty version 3.1.30, created on 2018-03-04 16:17:21
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\category\delete.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9c0e0103ada6_34888194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e98fa07899282d2e9a5a9e0e2d89a7388f050fb3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\category\\delete.tpl',
      1 => 1520176638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9c0e0103ada6_34888194 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../views/css/style.css" type="text/css" rel="stylesheet">
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<body>
<div><a href="/shopSmarty/">Повернутися на сайт</a></div>
<h3><a href="/shopSmarty/admin/">Панель адміністратора</a></h3>

Удалить категорію <?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
?
<form action="/shopSmarty/admin/category/delete/<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" method="post">
    <input type="submit" value="Видалити" name="submit">
</form><?php }
}
