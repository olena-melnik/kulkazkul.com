<?php
/* Smarty version 3.1.30, created on 2018-03-11 10:34:18
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\orders\show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4f81acc2d96_73487965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1456bbcf6ae3ef1d0ff2611fe9eb4e0f771b5a75' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\orders\\show.tpl',
      1 => 1520760504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa4f81acc2d96_73487965 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<h3>Замовлення № <?php echo $_smarty_tpl->tpl_vars['ORDER']->value['id'];?>
 від <?php echo $_smarty_tpl->tpl_vars['ORDER']->value['date_order'];?>
</h3>
<table>
    <tr>
        <th>Параметр</th><th>Значення</th>
    </tr>
    <tr>
        <td>Номер замовника</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['user_id'];?>
</td>
    </tr>
    <tr>
        <td>Им'я замовника</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['user_name'];?>
</td>
    </tr>
    <tr>
        <td>Телефон</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['user_phone'];?>
</td>
    </tr>
    <tr>
        <td>Електронна адреса</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['email'];?>
</td>
    </tr>
    <tr>
        <td>Коментарій</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['user_comment'];?>
</td>
    </tr>
    <tr>
        <td>Дата</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['date_order'];?>
</td>
    </tr>
    <tr>
        <td>Спосіб доставки</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['delivery'];?>
</td>
    </tr>
    <tr>
        <td>Спосіб оплати</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['paymethod'];?>
</td>
    </tr>
    <tr>
        <td>Статус замовлення</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['name_status'];?>
</td>
    </tr>
    <tr>
        <td>Дата останього редагування</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['time_update'];?>
</td>
    </tr>
</table>
<table>
    <tr>
        <th>Номер товара</th>
        <th>Назва</th>
        <th>Код</th>
        <th>Кількість</th>
        <th>Ціна, грн.</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTS']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['code'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <tr><td></td><td></td><td></td><td><h4>До сплати:</h4></td><td><?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td></tr>
</table>
</body>
</html><?php }
}
