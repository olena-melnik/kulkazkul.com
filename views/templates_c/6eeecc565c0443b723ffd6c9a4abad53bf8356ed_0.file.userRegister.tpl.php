<?php
/* Smarty version 3.1.30, created on 2018-02-28 18:09:37
  from "D:\xampp\htdocs\shopSmarty\views\templates\user\userRegister.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96e251f30b43_90419657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eeecc565c0443b723ffd6c9a4abad53bf8356ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\user\\userRegister.tpl',
      1 => 1518109572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5a96e251f30b43_90419657 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../views/css/style.css" type="text/css" rel="stylesheet">
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<body>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div class="singup-form">
    <h2>Регістрація користувача</h2>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Им'я" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" required/>
        <input type="email" name="email" placeholder="E-mail" value="<?php echo $_smarty_tpl->tpl_vars['USEREMAIL']->value;?>
" required/>
        <input type="password" name="password" placeholder="Пароль" value="<?php echo $_smarty_tpl->tpl_vars['USERPASSWORD']->value;?>
" required"/>
        <input type="submit" name="submit" class="" value="Відправити">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'er');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['er']->value) {
?>
            <ul class="Error">
                <li><?php echo $_smarty_tpl->tpl_vars['er']->value;?>
</li>
            </ul>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </form>
</div>
</body>
</html><?php }
}
