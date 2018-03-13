<?php
/* Smarty version 3.1.30, created on 2018-03-02 17:43:23
  from "D:\xampp\htdocs\shopSmarty\views\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a997f2b356899_58436368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c65b0737c9422da4726268e1779569500985932' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\footer.tpl',
      1 => 1520008957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a997f2b356899_58436368 (Smarty_Internal_Template $_smarty_tpl) {
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
            098-888-88-88<br>
            067-555-33-88<br>
        </div>
        <div class="footer-menu-item"><span class="footer-title">Режим роботи</span><br>
            ПН-СБ с 8:00 до 19:00<br>
            Неділя - вихідний<br>
        </div>
        <div class="footer-menu-item"><span class="footer-title">Підписка</span><br>
            Залиште свою пошту і отримуйте інформацію про найближчих акції та знижки
            <form>
                <input type="email" required>
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
