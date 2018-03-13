<?php
/* Smarty version 3.1.30, created on 2018-03-04 20:37:43
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\posts\delete.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9c4b074cb773_33210083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '449b7c9cb5a3833212f25736a42c2e1955abed33' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\posts\\delete.tpl',
      1 => 1520192206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9c4b074cb773_33210083 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="admin-date"><a href="/shopSmarty/">Повернутися на сайт</a></div>
<h3><a href="/shopSmarty/admin/">Панель адміністратора</a></h3>

Удалить статтю <?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
?
<form action="/shopSmarty/admin/posts/delete/<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" method="post">
    <input type="submit" value="Видалити" name="submit">
</form><?php }
}
