<?php
/* Smarty version 3.1.30, created on 2018-03-11 13:52:01
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa52671068444_10742006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be23f1825c8e549d50964b4c65b8e104d0f58e04' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\home.tpl',
      1 => 1520772653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa52671068444_10742006 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

Вам доступні наступні операції:
<div class="presentation-category-menu-list">
    <ul>
        <li><a href="/shopSmarty/admin/product">Управління товарами</a></li>
        <li><a href="/shopSmarty/admin/category">Управліня категоріями</a></li>
        <li><a href="/shopSmarty/admin/orders">Управління замовленнями</a></li>
        <li><a href="/shopSmarty/admin/posts">Управління статтями</a></li>
        <li><a href="/shopSmarty/admin/slider">Редагувати слайдер</a></li>
        <li><a href="/shopSmarty/admin/contact">Редагувати контактні дані</a></li>
    </ul>
</div>
</body>
</html>
<?php }
}
