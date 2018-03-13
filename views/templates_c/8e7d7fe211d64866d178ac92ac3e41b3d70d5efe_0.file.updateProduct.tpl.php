<?php
/* Smarty version 3.1.30, created on 2018-03-11 10:10:10
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\updateProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4f272887685_16015844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e7d7fe211d64866d178ac92ac3e41b3d70d5efe' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\updateProduct.tpl',
      1 => 1520758406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa4f272887685_16015844 (Smarty_Internal_Template $_smarty_tpl) {
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
<div><a href="/shopSmarty/">Повернутися на сайт</a></div>
<h3><a href="/shopSmarty/admin/">Панель адміністратора</a></h3>
Добрий день!
<br>
Редагувати інформацію о товарі #<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['id'];?>
:
<form action="" method="post"  enctype=multipart/form-data>
    <div class="parametr">
        Назва товару
        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
" required>
    </div>
    <div class="parametr">
        Код
        <input type="text" name="code" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['code'];?>
" required>
    </div>
    <div class="parametr">
        Вартість товару, грн
        <input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['price'];?>
" required>
    </div>
    <div class="parametr">
        Категорія товару
        <select name="category_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cm']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"
                <?php if ($_smarty_tpl->tpl_vars['category']->value['id'] == $_smarty_tpl->tpl_vars['PRODUCT']->value['category_id']) {?>selected<?php }?>
                ><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
    </div>
    <div class="parametr">
        Виробник
        <input type="text" name="brand" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['brand'];?>
">
    </div>
    <div class="parametr">
        Зображення
        <image src="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['image'];?>
">
        <input type="file" name="image">
    </div>
    <div class="parametr">
        Детальний опис
        <textarea name="description"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['descriptoon'];?>
</textarea>
    </div>
    <div class="parametr">
        Товар доступний
        <select name="avallability">
            <option value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['avallibity'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['avallibity'];?>
</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </div>
    <div class="parametr">
        Новинка
        <select name="is_new">
            <option value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['is_new'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['is_new'];?>
</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </div>
    <div class="parametr">
        Рекомендуємий товар
        <select name="is_recommended">
            <option value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['is_recommended'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['is_recommended'];?>
</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </div>
    <div class="parametr">
        Наявність на складі
        <select name="status">
            <option value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['status'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['status'];?>
</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </div>
    <div class="parametr">
        <input type="submit" name="update" value="Зберегти">
    </div>
</form>
</body>
</html><?php }
}
