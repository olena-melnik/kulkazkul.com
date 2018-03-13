<?php
/* Smarty version 3.1.30, created on 2018-02-28 10:25:33
  from "D:\xampp\htdocs\shopSmarty\views\templates\categoryMenu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96758d75bee5_00900523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f76e6c64beb42dc05a5a1ee90c302800ab473c3b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\categoryMenu.tpl',
      1 => 1519809578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a96758d75bee5_00900523 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="presentation-category-head">
            <h2>Категорії</h2>
        </div>
        <div class="presentation-category-menu-list">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cm']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <li class="presentation-category-menu-list-item <?php if ($_smarty_tpl->tpl_vars['catAct']->value == $_smarty_tpl->tpl_vars['i']->value['id']) {?>active<?php }?>">
                        <a href="/shopSmarty/category/<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
<?php }
}
