<?php
/* Smarty version 3.1.30, created on 2018-03-11 11:37:08
  from "D:\xampp\htdocs\shopSmarty\views\templates\cart\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa506d42c9762_29722220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dc13b43dbf137db3a01226ff5255f547668b714' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\cart\\cart.tpl',
      1 => 1520763966,
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
function content_5aa506d42c9762_29722220 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!-- END CATEGORY-MENU-LIST -->
    </div>
    <div class="product-in-cart">
        <?php if (($_smarty_tpl->tpl_vars['PRODUCTSINCART']->value)) {?>
            <h3>Вы выбрали такие товары:</h3>
            <table>
                <tr><th>Код товару</th><th>Назва</th><th>Кількість, шт</th><th>Вартість, грн</th><th>Видалити</th></tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTS']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['code'];?>
</td>
                        <td><a href="/shopSmarty/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

                            </a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['PRODUCTSINCART']->value[$_smarty_tpl->tpl_vars['product']->value['id']];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
                        <td><a href="/shopSmarty/cart/remove/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">X</a></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <tr><td>Вього</td><td></td><td></td><td><?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td><td></td></tr>
            </table>
            <br>
            <a href="/shopSmarty">
                Повернутись до вибору товару
            </a>
            <a href="/shopSmarty/order/">
                Оформити замовлення
            </a>
            <a href="/shopSmarty/cart/removeAll">
                Почистити кошик
            </a>
        <?php } else { ?>
            Корзина пуста
            <br>
            <a href="/shopSmarty">
                Повернутись до вибору товару
            </a>
        <?php }?>    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;
}
}
