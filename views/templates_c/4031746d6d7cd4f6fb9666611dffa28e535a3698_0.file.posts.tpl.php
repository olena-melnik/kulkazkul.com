<?php
/* Smarty version 3.1.30, created on 2018-03-11 21:24:37
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\posts\posts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa590855713e9_91048583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4031746d6d7cd4f6fb9666611dffa28e535a3698' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\posts\\posts.tpl',
      1 => 1520760545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa590855713e9_91048583 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div class="admin-button">
<a href="/shopSmarty/admin/posts/create">Додати нову статтю</a>
</div>
Список статей:
<table>
    <tr>
        <th>Номер</th><th>Заголовок</th><th>Текст</th><th>Дата</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POSTSLIST']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['title_article'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['short_text'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_article'];?>
</td>
            <td><a href="/shopSmarty/admin/posts/update/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Редагувати</a></td>
            <td><a href="/shopSmarty/admin/posts/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Видалити</a></td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
