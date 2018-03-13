<?php
/* Smarty version 3.1.30, created on 2018-03-11 10:34:15
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\orders\orders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4f817e0a033_21741484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22383d9ca161cfce6f58db1d7207fd6c81215f6f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\orders\\orders.tpl',
      1 => 1520760498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa4f817e0a033_21741484 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

Список статей:
<table>
    <tr>
        <th>Номер замовлення</th><th>Им'я замовника</th><th>Телефон</th><th>Електронна адреса</th>
        <th>Номер замовника</th>
        <th>Дата замовлення</th><th>Спосіб доставки</th><th>Оплата</th><th>Статус замовлення</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ORDERSLIST']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
        <tr>
            <td><a href="/shopSmarty/admin/orders/show/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['user_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['user_phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['user_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['date_order'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['delivery'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['paymethod'];?>
</td>
            <td><a href="/shopSmarty/admin/orders/update/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</a></td>
            <td><a href="/shopSmarty/admin/orders/show/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">Подивитись</a></td>
            <td><a href="/shopSmarty/admin/orders/update/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">Редагувати</a></td>
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
