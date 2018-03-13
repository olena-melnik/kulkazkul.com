<?php
/* Smarty version 3.1.30, created on 2018-03-09 11:35:35
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\addProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa26377b7e203_42928716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f618a6efccdebabd12be71d4f0732025377d0f5a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\addProduct.tpl',
      1 => 1520591717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa26377b7e203_42928716 (Smarty_Internal_Template $_smarty_tpl) {
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
Добрий день!
<br>
Додати новий товар:
<form action="#" method="post" enctype=multipart/form-data>
    <label>
        Назва товару
        <input type="text" name="name" required>
    </label>
    <label>
        Код
        <input type="text" name="code" required>
    </label>
    <label>
        Вартість товару, грн
        <input type="text" name="price" required>
    </label>
    <label>
        Категорія товару
        <select name="category_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cm']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
    </label>
    <label>
        Виробник
        <input type="text" name="brand">
    </label>
    <label>
        Зображення
        <input type="file" name="image">
    </label>
    <label>
        Детальний опис
        <textarea name="description"></textarea>
    </label>
    <label>
        Товар доступний
        <select name="avallability">
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </label>
    <label>
        Новинка
        <select name="is_new">
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </label>
    <label>
        Рекомендуємий товар
        <select name="is_recommended">
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </label>
    <label>
        Наявність на складі
        <select name="status">
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </label>
    <input type="submit" name="add" value="Додати">
</form>
</body>
</html><?php }
}
