<?php
/* Smarty version 3.1.30, created on 2018-03-11 10:34:26
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\orders\update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4f822ca8674_49996136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de392d1071b46d84bf898298e779624426e6edf6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\orders\\update.tpl',
      1 => 1520760511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa4f822ca8674_49996136 (Smarty_Internal_Template $_smarty_tpl) {
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
        <td>Сумма замовлення</td><td><?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
    </tr>
        <tr>
        <td>Дата останього редагування</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['time_update'];?>
</td>
    </tr>
    <form action="" method="post">
        <tr>
            <td>Статус замовлення</td>
            <td>
                <select name="status">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STATUS']->value, 'st');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['st']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['st']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['st']->value['name_status'] == $_smarty_tpl->tpl_vars['ORDER']->value['name_status']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['st']->value['name_status'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </td>
        </tr>
        <tr>
            <td>Змінити статус замовлення?</td><td><input type="submit" name="update" value="Так"></td>
        </tr>
    </form>
</table>
</form>

</body>
</html><?php }
}
