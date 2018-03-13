<?php
/* Smarty version 3.1.30, created on 2018-03-11 22:10:01
  from "D:\xampp\htdocs\shopSmarty\views\templates\user\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa59b293b80a3_99937635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ae36b9b270d1518e87836015cf65f88504e5832' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\user\\login.tpl',
      1 => 1520802598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.tpl' => 1,
  ),
),false)) {
function content_5aa59b293b80a3_99937635 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->_subTemplateRender("file:home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div class="singup-form">
    <h2>Вхід на сайт</h2>
    <form action="" method="post">
        <input type="email" name="email" placeholder="E-mail" value="<?php echo $_smarty_tpl->tpl_vars['USEREMAIL']->value;?>
" required/>
        <input type="password" name="password" placeholder="Пароль" value="<?php echo $_smarty_tpl->tpl_vars['USERPASSWORD']->value;?>
" required"/>
        <input type="submit" name="submit" class="" value="Вхід">
        <a href="">Відновити пароль</a>
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
