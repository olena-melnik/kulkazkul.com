<?php
/* Smarty version 3.1.30, created on 2018-03-11 15:07:34
  from "D:\xampp\htdocs\shopSmarty\views\templates\info\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa53826d7b222_23914675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fca3b8907b6832c322343788fc17dba506927b3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\info\\contact.tpl',
      1 => 1520777247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.tpl' => 1,
    'file:home/footer.tpl' => 1,
  ),
),false)) {
function content_5aa53826d7b222_23914675 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../views/css/style.css" type="text/css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="../views/js/jquery-3.3.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:home/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('footer', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div class="contacts content">
    <h4>Наши контакти:</h4>
    <div class="contacts-phone">
        <h5>Телефон</h5>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONTACTS']->value['phone'], 'phone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
<br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <div class="contacts-adress">
        <h5>Адреса</h5>
        <?php echo $_smarty_tpl->tpl_vars['CONTACTS']->value['adress'];?>

    </div>
    <div class="contacts-email">
        <h5>E-mail</h5>
        <?php echo $_smarty_tpl->tpl_vars['CONTACTS']->value['email'];?>

    </div>
    <div class="contacts-map" id="map"></div>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php }
}
