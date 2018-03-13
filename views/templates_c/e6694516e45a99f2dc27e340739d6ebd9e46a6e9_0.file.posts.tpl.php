<?php
/* Smarty version 3.1.30, created on 2018-03-11 11:36:55
  from "D:\xampp\htdocs\shopSmarty\views\templates\info\posts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa506c7526553_35067584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6694516e45a99f2dc27e340739d6ebd9e46a6e9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\info\\posts.tpl',
      1 => 1520764076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.tpl' => 1,
    'file:home/footer.tpl' => 1,
  ),
),false)) {
function content_5aa506c7526553_35067584 (Smarty_Internal_Template $_smarty_tpl) {
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

<div class="posts content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POSTS']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class="post-item">
        <h4><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title_article'];?>
</a></h4>
        <img class="post-image" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image_article'];?>
">
        <p><span id="post-shorttext<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_text'];?>
</span></p>
        <p><span id="post-longtext<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['text_article'];?>
</span></p>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['sourse_link'];?>
">Источник</a></p>
        <div class="post-button">
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="postId<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <button class="more_info" id="open<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Детальніше</button>
            <button class="more_info" id="close<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Сховати</button>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;
}
}
