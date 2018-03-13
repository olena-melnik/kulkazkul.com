<?php
/* Smarty version 3.1.30, created on 2018-03-12 11:56:29
  from "/storage/ssd2/069/5041069/public_html/views/templates/home/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa66aedb250b1_25120375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63703db840d641f07cde4e877ae46ae322343f2e' => 
    array (
      0 => '/storage/ssd2/069/5041069/public_html/views/templates/home/footer.tpl',
      1 => 1520855212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa66aedb250b1_25120375 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
    <div class="footer-menu">
        <div class="footer-menu-item"><a href="/shopSmarty/catalog/"><span class="footer-title">Каталог</span></a>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                    <li class="presentation-category-menu-list-item">
                        <a href="/shopSmarty/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
        <div class="footer-menu-item"><span class="footer-title">Інформація</span>
            <ul>
                <li><a href="/shopSmarty/aboutUs/">О нас</a></li>
                <li><a href="/shopSmarty/contact/">Контакти</a></li>
                <li><a href="/shopSmarty/posts/">Статті</a></li>
                <li><a href="#">Зворотній зв'язок</a></li>
            </ul>
        </div>
        <div class="footer-menu-item"><a href="/shopSmarty/contact/"><span class="footer-title">Контакти:</span></a><br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONTACTS']->value['phone'], 'phone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
?>
                <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
<br>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <div class="footer-menu-item"><span class="footer-title">Режим роботи</span><br>
            <?php echo $_smarty_tpl->tpl_vars['CONTACTS']->value['work'];?>

        </div>
        <div class="footer-menu-item"><span class="footer-title">Підписка</span><br>
            Залиште свою пошту і отримуйте інформацію про найближчих акції та знижки
            <form action="/shopSmarty/subscription" method="post">
                <input type="email" name = "email" required>
                <input type="submit" value="Підписатись">
            </form>
        </div>
    </div>
    <div class="copyright">
    Olena Melnik KNz-13-1 2018
    </div>
</footer>
<?php echo '<script'; ?>
 src="../views/js/jquery-3.3.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../views/js/Scripts.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./views/js/jquery-3.3.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./views/js/Scripts.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>
</body>
</html>


<?php }
}
