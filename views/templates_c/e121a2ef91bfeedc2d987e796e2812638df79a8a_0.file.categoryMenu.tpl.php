<?php
/* Smarty version 3.1.30, created on 2018-03-12 11:56:29
  from "/storage/ssd2/069/5041069/public_html/views/templates/home/categoryMenu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa66aedb06560_18342310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e121a2ef91bfeedc2d987e796e2812638df79a8a' => 
    array (
      0 => '/storage/ssd2/069/5041069/public_html/views/templates/home/categoryMenu.tpl',
      1 => 1520855212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa66aedb06560_18342310 (Smarty_Internal_Template $_smarty_tpl) {
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
