<?php
/* Smarty version 3.1.30, created on 2018-03-03 11:23:21
  from "D:\xampp\htdocs\shopSmarty\views\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9a7799e59685_30619658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da3e252e02aad917da48cb712203a314b9809a99' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\home.tpl',
      1 => 1520072593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:categoryMenu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a9a7799e59685_30619658 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./views/css/style.css" type="text/css" rel="stylesheet">
    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
</head>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:categoryMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('menu', ob_get_clean());
?>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('footer', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div class="main clearfix">
<!--Presentation START-->
<div class="presentation clearfix">
    <!-- CATEGORY-MENU-LIST START -->
    <div class="presentation-category-menu">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    </div>
    <!-- END CATEGORY-MENU-LIST -->
    <div class="presentation-slider">
        <img src="./views/image/bg1.jpeg">
    </div>
</div>
<!--END Presentation-->
<!--Product line START-->
<div class="products clearfix">
    <div class="products-post">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ARTICLE']->value, 'itemPost');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemPost']->value) {
?>
        <div class="products-post-item">
            <div class="post-img">
                <image class="primary-img" src="<?php echo $_smarty_tpl->tpl_vars['itemPost']->value['image_article'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['itemPost']->value['title_article'];?>
">
            </div>
            <div class="post-description">
                <h4><a href="<?php echo $_smarty_tpl->tpl_vars['itemPost']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemPost']->value['title_article'];?>
</a></h4>
                <div class="short-text">
                    <span><?php echo $_smarty_tpl->tpl_vars['itemPost']->value['short_text'];?>
</span>
                </div>
                <div class="post-button">
                    <button class="more_info" data-id = "<?php echo $_smarty_tpl->tpl_vars['itemPost']->value['id'];?>
">Детальніше</button>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                    <a href="/shopSmarty/product/<?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['id'];?>
">
                        <image class="primary-img" src="<?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['name'];?>
">
                    </a>
                </div>
                <div class="product-description">
                    <h4><a href="/shopSmarty/product/<?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['name'];?>
</a></h4>
                    <div class="product-code">
                        <span class="code">Код: <?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['code'];?>
</span>
                    </div>
                    <div class="price-box">
                        <span class="price">Ціна: <?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['price'];?>
 грн</span>
                    </div>
                    <form class="product-button" action="" method="post">
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['itemProduct']->value['id'];?>
" name="id-product">
                        <input type="number" min="1" value="1" id="number-product" name="number-product">
                        <input type="submit" name="send" class="add-to-cart" value="Додати у кошик">
                    </form>
            </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
</div>
<!--END Product line-->
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php }
}
