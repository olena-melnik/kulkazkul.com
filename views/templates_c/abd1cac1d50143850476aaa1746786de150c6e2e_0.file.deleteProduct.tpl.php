<?php
/* Smarty version 3.1.30, created on 2018-03-11 22:16:00
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\product\deleteProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa59c9037a019_30399393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abd1cac1d50143850476aaa1746786de150c6e2e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\product\\deleteProduct.tpl',
      1 => 1520760568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa59c9037a019_30399393 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

Удалить товар <?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
;
<form action="/shopSmarty/admin/product/delete/<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" method="post">
    <input type="submit" value="Видалити" name="submit">
</form><?php }
}
