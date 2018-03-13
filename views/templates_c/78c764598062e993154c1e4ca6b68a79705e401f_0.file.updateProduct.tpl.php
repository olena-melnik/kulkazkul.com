<?php
/* Smarty version 3.1.30, created on 2018-03-12 08:19:04
  from "D:\xampp\htdocs\shopSmarty\views\templates\admin\product\updateProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa629e817e234_00927111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78c764598062e993154c1e4ca6b68a79705e401f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\admin\\product\\updateProduct.tpl',
      1 => 1520839140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
  ),
),false)) {
function content_5aa629e817e234_00927111 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('header', ob_get_clean());
?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div class="admin_content">
    Редагувати інформацію о товарі #<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['id'];?>
:
<form action="" method="post"  enctype=multipart/form-data>
    <div class="parametr">
        <label>Назва товару
        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
" required>
        </label>
    </div>
    <div class="parametr">
        <label>Код
        <input type="text" name="code" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['code'];?>
" required>
        </label>
    </div>
    <div class="parametr">
        <label>
        Вартість товару, грн
        <input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['price'];?>
" required>
        </label>
    </div>
    <div class="parametr">
        <label>
        Категорія товару
        <select name="category_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cm']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"
                <?php if ($_smarty_tpl->tpl_vars['category']->value['id'] == $_smarty_tpl->tpl_vars['PRODUCT']->value['category_id']) {?>selected<?php }?>
                ><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        </label>
    </div>
    <div class="parametr">
        <label>
        Виробник
        <input type="text" name="brand" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['brand'];?>
">
        </label>
    </div>
    <div class="parametr">
        <label>
        Зображення
        <image src="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['image'];?>
">
        <input type="file" name="image">
        </image>
    </div>
    <div class="parametr">
        <label>
        Детальний опис
        <textarea name="description"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['descriptoon'];?>
</textarea>
        </label>
    </div>
    <div class="parametr">
        <label>
        Товар доступний
        <select name="avallability">
            <option value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['avallibity'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['avallibity'];?>
</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
        </label>
    </div>
    <div class="parametr">
        <label>
        Новинка
        <select name="is_new">
            <option value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['is_new'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['is_new'];?>
</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
        </label>
    </div>
    <div class="parametr">
        <label>
        Рекомендуємий товар
        <select name="is_recommended">
            <option value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['is_recommended'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['is_recommended'];?>
</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
        </label>
    </div>
    <div class="parametr">
        <label>
        Наявність на складі
        <select name="status">
            <option value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['status'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['status'];?>
</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
        </label>
    </div>
    <div class="parametr">
        <input type="submit" name="update" value="Зберегти">
    </div>
</form>
</div>
</body>
</html><?php }
}
