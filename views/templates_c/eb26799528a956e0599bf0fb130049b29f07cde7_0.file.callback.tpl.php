<?php
/* Smarty version 3.1.30, created on 2018-03-12 11:09:45
  from "D:\xampp\htdocs\shopSmarty\views\templates\info\callback.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa651e9a0b233_15603479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb26799528a956e0599bf0fb130049b29f07cde7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\info\\callback.tpl',
      1 => 1520849381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.tpl' => 1,
    'file:home/footer.tpl' => 1,
  ),
),false)) {
function content_5aa651e9a0b233_15603479 (Smarty_Internal_Template $_smarty_tpl) {
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

<div class="content">
    <br>
    <h5>Написати листа</h5>
    <form>
        <div class="cabinet_content callback">
            <div class="parametr">
                <label>Ваше им'я
                    <input type="text" name="nameUser" required>
                </label>
            </div>
            <div class="parametr">
                <label>
                    Номер телефона
                    <input type="text" name="phone">
                </label>
            </div>
            <div class="parametr">
                <label>
                    Електронна адреса
                    <input type="email" name="email" required>
                </label>
            </div>
            <div class="parametr">
                <label>Тема звірнення
                    <input type="text" name="theme">
                </label>
            </div>
            <div class="parametr">
                <label>Текст листа
                    <textarea name="message" required></textarea>
                </label>
            </div>
        </div>
        <div class="callback-btn">
            <div class="parametr">
                <label>
                    <input type="button" name="clear" value="Очистити">
                </label>
            </div>
            <div class="parametr">
                <label>
                    <input type="submit" name="send" value="Відправити">
                </label>
            </div>
        </div>
    </form>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;
}
}
