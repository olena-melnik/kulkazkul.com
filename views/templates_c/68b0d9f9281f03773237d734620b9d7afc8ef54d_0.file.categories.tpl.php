<?php
/* Smarty version 3.1.30, created on 2018-03-11 10:34:09
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\category\categories.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4f8111aa4b3_58765465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68b0d9f9281f03773237d734620b9d7afc8ef54d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\category\\categories.tpl',
      1 => 1520760327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa4f8111aa4b3_58765465 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<a href="/shopSmarty/admin/category/create">Додати нову катерогію</a>
Список категорій:
<table>
    <tr>
        <th>Номер</th><th>Назва</th><th>Номер для сортировки</th><th>Статус</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORYLIST']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
</td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value['sort_order'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value['status'];?>
</td>
            <td><a href="/shopSmarty/admin/category/update/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">Редагувати</a></td>
            <td><a href="/shopSmarty/admin/category/delete/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
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
