<?php
/* Smarty version 3.1.30, created on 2018-03-12 10:39:21
  from "D:\xampp\htdocs\shopSmarty\views\templates\info\success.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa64ac9330969_80837975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f56edfd822ea66e4b31a38815d7362404855778' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\info\\success.tpl',
      1 => 1520847529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.tpl' => 1,
    'file:home/categoryMenu.tpl' => 1,
    'file:home/footer.tpl' => 1,
  ),
),false)) {
function content_5aa64ac9330969_80837975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/shopSmarty/views/css/style.css" type="text/css" rel="stylesheet">
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
$_smarty_tpl->_subTemplateRender("file:home/categoryMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('menu', ob_get_clean());
?>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:home/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('footer', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div class="clearfix">
    <div class="small-presentation">
        <!-- CATEGORY-MENU-LIST START -->
        <div class="presentation-category-menu">
            <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        </div>
    </div>
    <!-- END CATEGORY-MENU-LIST -->
    <div class="product-in-cart">
        <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

        <br>
        <br>
        <a href="/shopSmarty">
            Повернутись до вибору товару
        </a>
    </div>
</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;
}
}
