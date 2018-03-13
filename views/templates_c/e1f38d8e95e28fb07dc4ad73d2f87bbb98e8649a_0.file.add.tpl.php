<?php
/* Smarty version 3.1.30, created on 2018-03-04 17:18:10
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\posts\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9c1c427018a6_45596594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f38d8e95e28fb07dc4ad73d2f87bbb98e8649a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\posts\\add.tpl',
      1 => 1520179861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9c1c427018a6_45596594 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="admin-button"><a href="/shopSmarty/">Повернутися на сайт</a></div>
<h3><a href="/shopSmarty/admin/">Панель адміністратора</a></h3>
Добрий день!
<br>
Додати нову статтю:
<form action="" method="post">
    <label>
        Заголовок
        <input type="text" name="title_article" required>
    </label>
    <label>
        Текст статті
        <input type="text" name="text_article" required>
    </label>
    <label>
        Краткий текст
        <input type="text" name="short_text" required>
    </label>
    <label>
        Дата
        <input type="date" name="date_article" required>
    </label>
    <label>
        Зображення
        <input type="file" name="image_article">
    </label>
    <label>
        Посилання
        <input type="text" name="sourse_link" required>
    </label>
    <label>
        Автор
        <input type="text" name="author" required>
    </label>
    <label>
        Статус
        <select name="status">
            <option value="1">Доступна</option>
            <option value="0">Ні</option>
        </select>
    </label>
    <input type="submit" name="add" value="Додати">
</form>
</body>
</html><?php }
}
