<?php
/* Smarty version 3.1.30, created on 2018-03-11 10:10:07
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4f26f54bdb5_92716011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '486b3ebed34321182a624bdf3c30849872a13743' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\product.tpl',
      1 => 1520758380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa4f26f54bdb5_92716011 (Smarty_Internal_Template $_smarty_tpl) {
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
<a href="/shopSmarty/admin/product/create">Додати новий товар</a>
Список товарів:
<table>
    <tr>
        <th>Номер</th><th>Назва</th><th>Код</th><th>Ціна</th><th>Категорія</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTLIST']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['code'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['category_id'];?>
</td>
            <td><a href="/shopSmarty/admin/product/update/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">Редагувати</a></td>
            <td><a href="/shopSmarty/admin/product/delete/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">Видалити</a></td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
