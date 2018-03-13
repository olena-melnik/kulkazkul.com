<?php
/* Smarty version 3.1.30, created on 2018-03-11 14:55:49
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa53565194a59_16106385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad901f68dea4e764742e513ec16696613f0837eb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\contact.tpl',
      1 => 1520776545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa53565194a59_16106385 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

Редагувати контактні дані<br>
<form action="" method="post">
    <div class="params">
        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['PARAMS']->value['name'];?>
">
    </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PARAMS']->value['phone'], 'phone', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['phone']->value) {
?>
    <div class="params">
        <input type="text" name="phone[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
">
    </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div class="params">
        <textarea name="adress"><?php echo $_smarty_tpl->tpl_vars['PARAMS']->value['adress'];?>
</textarea>
    </div>
    <div class="params">
        <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['PARAMS']->value['email'];?>
">
    </div>
    <div class="params">
        <textarea name="work"><?php echo $_smarty_tpl->tpl_vars['PARAMS']->value['work'];?>
</textarea>
    </div>
    <div class="params">
        <input type="submit" name="update" value="Змінити">
    </div>
</form>
</body>
</html>
<?php }
}
