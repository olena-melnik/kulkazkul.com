<?php
/* Smarty version 3.1.30, created on 2018-03-11 22:15:19
  from "D:\xampp\htdocs\shopSmarty\views\templates\product\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa59c67196545_15722210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2edec9c3da776c23055d7f0efb5f837a851c8b57' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\product\\product.tpl',
      1 => 1520764139,
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
function content_5aa59c67196545_15722210 (Smarty_Internal_Template $_smarty_tpl) {
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
<body>
<?php echo '<?php ';?>include "header.php"<?php echo '?>';
ob_start();
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
<!--Presentation START-->
    <!-- CATEGORY-MENU-LIST START -->
<div class="small-presentation">
    <div class="presentation-category-menu">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    </div>
</div>>
    <!-- END CATEGORY-MENU-LIST -->
<!--END Presentation-->
<!-- START Product view-->
<div class="ProductView">
        <div class="productView-foto">
            <img src="<?php echo $_smarty_tpl->tpl_vars['PRODUCTITEM']->value['image'];?>
">
        </div>
        <div class="productView-info">
            <div class="productView-info-name">
                <h3><?php echo $_smarty_tpl->tpl_vars['PRODUCTITEM']->value['name'];?>
</h3>
            </div>
            <div class="productView-info-avalibity">
                <p><?php echo $_smarty_tpl->tpl_vars['AVALLIBITY']->value;?>
<p/>
            </div>
            <div class="productView-info-code">
                <p>Код товару: <?php echo $_smarty_tpl->tpl_vars['PRODUCTITEM']->value['code'];?>
<p/>
            </div>
            <div class="productView-info-price">
                <p>Ціна: <?php echo $_smarty_tpl->tpl_vars['PRODUCTITEM']->value['price'];?>
 грн<p/>
            </div>
            <div class="productView-description">
                <P>Описание товара</P>
                <p><?php echo $_smarty_tpl->tpl_vars['PRODUCTITEM']->value['descriptoon'];?>
</p>
            </div>
            <br>
            <div class="button-group">
                <form class="product-button" action="" method="post">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['id'];?>
" name="id-product">
                    <input type="number" min="1" value="1" id="number-product" name="number-product">
                    <input type="submit" name="send" class="add-to-cart" value="Додати у кошик">
                </form>
            </div>
            </div>
</div>
</div>
<!-- Product view END-->
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>
</html><?php }
}
