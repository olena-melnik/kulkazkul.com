<?php
/* Smarty version 3.1.30, created on 2018-03-12 08:29:56
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\category\update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa62c745d9b48_90461198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0af291c19a5c40d2a896a386bdcc571f9afcde2f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\category\\update.tpl',
      1 => 1520839790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa62c745d9b48_90461198 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div class="admin_content">
Редагувати інформацію о категорії #<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['id'];?>
:
<form action="" method="post">
    <div class="parametr">
        Назва
        <input type="text" name="name" value = "<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['name'];?>
" required>
    </div>
    <div class="parametr">
        Номер для сортировки
        <input type="number" name="sort_order" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['sort_order'];?>
" required>
    </div>
    <div class="parametr">
        Статус
        <select name="status">
            <option value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value['status'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['CATEGORY']->value['status'] == 1) {?>
                <option value="1" selected>Доступна</option>
                <option value="0">Ні</option>
                <?php } else { ?>
            <option value="1">Доступна</option>
            <option value="0" selected>Ні</option>
                <?php }?>
            </option>
        </select>
    </div>
    <div class="parametr">
        <input type="submit" name="update" value="Зберегти">
    </div>
</form>
</div>
</body>
</html><?php }
}
