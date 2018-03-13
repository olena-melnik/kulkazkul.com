<?php
/* Smarty version 3.1.30, created on 2018-03-12 09:29:48
  from "D:\xampp\htdocs\shopSmarty\views\templates\user\cabinet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa63a7cb5c0d4_94971804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f0594494a3faf2092becc832616408c1a686725' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\user\\cabinet.tpl',
      1 => 1520843376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.tpl' => 1,
    'file:home/footer.tpl' => 1,
  ),
),false)) {
function content_5aa63a7cb5c0d4_94971804 (Smarty_Internal_Template $_smarty_tpl) {
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

<section class="content">
    <div class="personal-cabinet">
        <h2>Особистий кабінет</h2>
        <h3>Привет, <?php echo $_smarty_tpl->tpl_vars['USER']->value['name'];?>
</h3>
        <ul>
            <li><a href="" name="edit">Редагувати дані</a></li>
            <li><a href="" name="ehistory">Список покупок</a></li>
        </ul>
    </div>
    <div class="modal user-edit" hidden>
        <div class="cabinet_content">
        <form action="" method="post">
        <div class="parametr">
            Ваше им'я
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['USER']->value['name'];?>
">
        </div>
        <div class="parametr">
            Електронна адреса
            <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['USER']->value['email'];?>
">
        </div>
        <div class="parametr">
            Телефон
            <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['USER']->value['phone'];?>
">
        </div>
        <div class="parametr">
            Для редагування, введить, будь-ласка, пароль
            <input type="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['USER']->value['password'];?>
">
        </div>
            <div class="parametr">
                <input type="submit" name="update">
            </div>
        </form>
        <form action="" method="post" >
            <div class="parametr">
                Якщо Ви бажаете змінити пароль, введить, будь ласка, спочатку старих, а потім двічи новий.
            </div>
            <div class="parametr">
                Новий пароль
                <input type="password" name="passwordNew1">
            </div>
            <div class="parametr">
                <input type="password" name="passwordNew2">
            </div>
            <div class="parametr">
                Старий пароль
                <input type="password" name="passwordOld">
            </div>
            <div class="parametr">
                <input type="submit" name="updatePassword">
            </div>
        </form>
            <div class="error"><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</div>
        </div>
    </div>
    <div class="modal user-orders" hidden>
        <table>
            <tr>
                <th>Номер замовлення</th>
                <th>Дата</th>
                <th>Коментарій користувача</th>
                <th>Спосіб доставки</th>
                <th>Адреса</th>
                <th>Спосіб оплати</th>
                <th>Статус замовлення</th>
                <th>Дата редагування</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ORDERS']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
            <tr>
                <td><a href="/shopSmarty/cabinet/order/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['date_order'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['user_comment'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['delivery'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['adress'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['paymethod'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['name_status'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['time_update'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
    </div>
    <div class="mask"></div>
</section>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>
</html><?php }
}
