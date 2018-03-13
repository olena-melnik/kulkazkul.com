<?php
/* Smarty version 3.1.30, created on 2018-03-12 12:15:08
  from "/storage/ssd2/069/5041069/public_html/views/templates/product/catalog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa66f4c9d8722_79637803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '150222bf12e3762556c879e18c51813c66200230' => 
    array (
      0 => '/storage/ssd2/069/5041069/public_html/views/templates/product/catalog.tpl',
      1 => 1520856903,
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
function content_5aa66f4c9d8722_79637803 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/views/css/style.css" type="text/css" rel="stylesheet">
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<body>
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

<div class="content1 clearfix">
    <!--Presentation START-->
    <div class="small-presentation">
        <!-- CATEGORY-MENU-LIST START -->
        <div class="presentation-category-menu">
            <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        </div>
        <!-- END CATEGORY-MENU-LIST -->
    </div>
    <div class="product_status">
        <!-- START Products-->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTPRODUCT']->value, 'itemProduct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemProduct']->value) {
?>
            <div class="product_item">
                <div class="product-img">
                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['id'];?>
">
                        <image class="primary-img" src="<?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['name'];?>
">
                    </a>
                </div>
                <div class="product-description">
                    <h5><a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['name'];?>
</a></h5>
                    <div class="product-code">
                        <span class="code">Код: <?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['code'];?>
</span>
                    </div>
                    <div class="price-box">
                        <span class="price">Ціна: <?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['price'];?>
 грн</span>
                    </div>
                    <div class="product-action">
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
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <!-- END Products-->
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;
}
}
