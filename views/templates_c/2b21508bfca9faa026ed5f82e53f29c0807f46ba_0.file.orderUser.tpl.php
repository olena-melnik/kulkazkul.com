<?php
/* Smarty version 3.1.30, created on 2018-03-11 22:02:16
  from "D:\xampp\htdocs\shopSmarty\views\templates\user\orderUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa59958e39823_83227211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b21508bfca9faa026ed5f82e53f29c0807f46ba' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\user\\orderUser.tpl',
      1 => 1520802133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.tpl' => 1,
    'file:home/footer.tpl' => 1,
  ),
),false)) {
function content_5aa59958e39823_83227211 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/shopSmarty/views/css/style.css" type="text/css" rel="stylesheet">
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<body>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:home/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('footer', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<section>
    <div class="personal-cabinet">
        <h2><a href="/shopSmarty/cabinet">Особистий кабінет</a></h2>
        <h3>Привет, <?php echo $_smarty_tpl->tpl_vars['USER']->value['name'];?>
</h3>
    </div>
    <div>
<h3>Замовлення № <?php echo $_smarty_tpl->tpl_vars['ORDER']->value['id'];?>
 від <?php echo $_smarty_tpl->tpl_vars['ORDER']->value['date_order'];?>
</h3>
<table>
    <form action="" method="post">
    <tr>
        <th>Параметр</th><th>Значення</th>
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
        <td>Адреса</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['adress'];?>
</td>
    </tr>
    <tr>
        <td>Спосіб оплати</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['paymethod'];?>
</td>
    </tr>
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
        <td>Дата останього редагування</td><td><?php echo $_smarty_tpl->tpl_vars['ORDER']->value['time_update'];?>
</td>
    </tr>
    <tr>
        <td>Змінити статус замовлення?</td><td><input type="submit" name="update" value="Так"></td>
    </tr>
    </form>
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
    </div>
</section>
</body>
</html><?php }
}
