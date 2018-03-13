<?php
/* Smarty version 3.1.30, created on 2018-03-11 10:21:35
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\category\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4f51f59aa28_12203963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df4776cd20198f3d8c269485abebf1eaa70bfa0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\category\\add.tpl',
      1 => 1520760072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa4f51f59aa28_12203963 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

Додати нову категорію:
<form action="" method="post">
    <div class="parametr">
        Назва
        <input type="text" name="name" required>
    </div>
    <div class="parametr">
        Номер для сортировки
        <input type="number" name="sort_order" required>
    </div>
    <div class="parametr">
        Статус
        <select name="status">
            <option value="1">Доступна</option>
            <option value="0">Ні</option>
        </select>
    </div>
    <div class="parametr">
        <input type="submit" name="add" value="Додати">
    </div>
</form>
</body>
</html><?php }
}
