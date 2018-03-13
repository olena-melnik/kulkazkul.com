<?php
/* Smarty version 3.1.30, created on 2018-03-11 09:16:44
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\posts\update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4e5ecd94d68_46181706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2166aa98ad37db9107d0729e9eade859d57fafde' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\posts\\update.tpl',
      1 => 1520756177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa4e5ecd94d68_46181706 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/shopSmarty/views/css/style.css" type="text/css" rel="stylesheet">
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<body>
<div class="admin-button"><a href="/shopSmarty/">Повернутися на сайт</a></div>
<h3><a href="/shopSmarty/admin/">Панель адміністратора</a></h3>
Добрий день!
<br>
Редагувати статтю #<?php echo $_smarty_tpl->tpl_vars['ONEPOST']->value['id'];?>
:
<form action="" method="post" enctype=multipart/form-data>
    <div class="parametr">
        Заголовок
        <input type="text" name="title_article" value="<?php echo $_smarty_tpl->tpl_vars['ONEPOST']->value['title_article'];?>
" required>
    </div>
    <div class="parametr">
        Текст
        <textarea name="text_article"><?php echo $_smarty_tpl->tpl_vars['ONEPOST']->value['text_article'];?>
</textarea>
    </div>
    <div class="parametr">
        Краткий текст
        <textarea name="short_text"><?php echo $_smarty_tpl->tpl_vars['ONEPOST']->value['short_text'];?>
</textarea>
    </div>
    <div class="parametr">
        Дата
        <input type="date" name="date_article" value="<?php echo $_smarty_tpl->tpl_vars['ONEPOST']->value['date_article'];?>
" required>
    </div>
    <div class="parametr">
        Посилання
        <input type="text" name="sourse_link" value="<?php echo $_smarty_tpl->tpl_vars['ONEPOST']->value['sourse_link'];?>
">
    </div>
    <div class="parametr">
        Посилання
        <input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['ONEPOST']->value['author'];?>
">
    </div>
    <div class="parametr">
        Зображення
        <image src="<?php echo $_smarty_tpl->tpl_vars['ONEPOST']->value['image_article'];?>
">
        <input type="file" name="image_article">
    </div>
    <div class="parametr">
        <input type="submit" name="update" value="Зберегти">
    </div>
</form>
</body>
</html><?php }
}
