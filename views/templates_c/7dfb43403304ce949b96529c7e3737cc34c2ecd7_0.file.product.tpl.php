<?php
/* Smarty version 3.1.30, created on 2018-03-11 10:34:01
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\product\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4f809974489_97194366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dfb43403304ce949b96529c7e3737cc34c2ecd7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\product\\product.tpl',
      1 => 1520760594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa4f809974489_97194366 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

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
