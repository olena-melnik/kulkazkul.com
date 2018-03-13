<?php
/* Smarty version 3.1.30, created on 2018-03-11 13:23:24
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\slider.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa51fbc4742f7_38633840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10a2529f035f4e9f943b6e3698c1ffea35f78397' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\slider.tpl',
      1 => 1520770794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa51fbc4742f7_38633840 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

Редагувати слайдер на головній сторінці<br>
<a href="slider/add">Додати новий слайд</a>
<form action="" method="post" enctype=multipart/form-data>
    <input type="file" name="image">
    <input type="submit" name="add" value="Додати файл">
</form>
<table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SLIDER']->value, 'slide', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['slide']->value) {
?>
        <tr>
            <td><img src= "../views/image/slider/<?php echo $_smarty_tpl->tpl_vars['slide']->value;?>
"></td>
            <td><a href="slider/delete/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
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
