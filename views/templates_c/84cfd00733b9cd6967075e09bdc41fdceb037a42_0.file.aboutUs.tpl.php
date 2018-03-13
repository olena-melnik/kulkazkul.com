<?php
/* Smarty version 3.1.30, created on 2018-03-11 11:36:52
  from "D:\xampp\htdocs\shopSmarty\views\templates\info\aboutUs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa506c4788167_84750480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84cfd00733b9cd6967075e09bdc41fdceb037a42' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\info\\aboutUs.tpl',
      1 => 1520764058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.tpl' => 1,
    'file:home/footer.tpl' => 1,
  ),
),false)) {
function content_5aa506c4788167_84750480 (Smarty_Internal_Template $_smarty_tpl) {
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

<div class="aboutUs clearfix content">
    <div class="aboutUs-text">
        <h4>Вас вітає kulkazkul.com інтернет магазин з святковими товарами!</h4>
        <p>Саме у нас ви можете обрати цікаві речі, які зроблять Ваше свято особливим та оригінальним!
            Для цього ми пропонуємо великий асортимент фольгованих цифр та різноманітних фольгованих кульок різних форм та кольорів,
            латексні шари та шари для моделювання, подарункові пакети та коробки, товари для проведення тематичних та дівочих вечірок,
            викупу нареченої повітряні ліхтарики, феєрверки, хлопавки, листівки та багато іншого.
            Зробіть своє життя святковим, а свято незабутнім!!</p>
    </div>
    <h4>Галерея</h4>
    <div class="aboutUs-foto clearfix">
        <div class="foto-item">
            <img src="../views/image/aboutUs/aboutUs1.jpeg" alt="aboutUs1">
        </div>
        <div class="foto-item">
            <img src="../views/image/aboutUs/aboutUs2.jpeg" alt="aboutUs2">
        </div>
        <div class="foto-item">
            <img src="../views/image/aboutUs/aboutUs6.jpg" alt="aboutUs3">
        </div>
        <div class="foto-item">
            <img src="../views/image/aboutUs/aboutUs7.jpg" alt="aboutUs4">
        </div>
    </div>
    <div class="aboutUs-foto-bottom">
        <div class="foto-item">
            <img src="../views/image/aboutUs/aboutUs3.jpeg" alt="aboutUs3">
        </div>
        <div class="foto-item">
            <img src="../views/image/aboutUs/aboutUs4.jpeg" alt="aboutUs4">
        </div>
        <div class="foto-item">
            <img src="../views/image/aboutUs/aboutUs5.jpeg" alt="aboutUs5">
        </div>
        <div class="foto-item">
            <img src="../views/image/aboutUs/aboutUs8.jpg" alt="aboutUs8">
        </div>
        <div class="foto-item">
            <img src="../views/image/aboutUs/aboutUs9.jpg" alt="aboutUs9">
        </div>
        <div class="foto-item">
            <img src="../views/image/aboutUs/aboutUs10.jpg" alt="aboutUs10">
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;
}
}
