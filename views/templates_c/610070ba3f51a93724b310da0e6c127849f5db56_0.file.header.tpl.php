<?php
/* Smarty version 3.1.30, created on 2018-03-04 21:52:23
  from "D:\xampp\htdocs\shopSmarty\views\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9c5c8707f5c3_99757319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '610070ba3f51a93724b310da0e6c127849f5db56' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\header.tpl',
      1 => 1520196737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9c5c8707f5c3_99757319 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="header">
    <div class="header-top-row clearfix">
        <div class="header-language">
            <ul>
                <li><a href="#">RU</a></li>
                <li><a href="#">UA</a></li>
            </ul>
        </div>
        <div class="header-top-menu">
            <ul>
                <li><a href='/shopSmarty/cart/'>Корзина(<span id="cart-count"><?php echo $_smarty_tpl->tpl_vars['COUNTCART']->value;?>
</span>)</a></li>
                <?php if ($_smarty_tpl->tpl_vars['userOnline']->value != '') {?>
                    <li><a href='/shopSmarty/cabinet/'>Кабинет</a></li>
                    <li><a href='/shopSmarty/logout/'>Вийти</a></li>
                <?php } else { ?>
                    <li><a href='/shopSmarty/login/'>Вхід</a></li>
                    <li><a href='/shopSmarty/registry/'>Авторізація</a></li>
                <?php }?>

            </ul>
        </div>
    </div>
    <!-- Start header_top-->
    <div class="header-top clearfix">
        <!-- Start Logo-->
        <div class="header-logo">
            <a href = / class="logo">
                <img class="logo-img" src="<?php echo $_smarty_tpl->tpl_vars['LOGOIMAGE']->value;?>
" alt="Kulka z kul.com">
            </a>
        </div>
        <!-- Logo End-->
        <!-- Start header information-->
        <div class="header-top-info">
            <div class="top-cont clearfix">
                <div class="contact-item">
                    <span class="item">
                        Контакти:<br>
                        098-888-88-88<br>
                        067-555-33-88<br>
                    </span>
                </div>
                <div class="contact-item">
                    <span class="item">
                        Режим роботи<br>
                        ПН-СБ с 8:00 до 19:00<br>
                        Неділя - вихідний<br>
                    </span>
                </div>
                <div class="contact-item">
                    <span class="item">
                        <button class="add">Заказать звонок</button>
                    </span>
                </div>
            </div>
            <div class="search-by-category">
                <div class="header-search">
                    <form action="/shopSmarty/catalog/search" method="post">
                        <div class="search-container">
                        <select name="category_id">
                            <option class="all-cate" value="0">Всі категорії</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                <option class="c-item" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                        </div>
                        <input type="text" placeholder="Search" name="text-for-search">
                        <button type="submit" class="search-button" name="search">Пошук</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!-- header information End-->
        <!-- Start Bottom header menu-->
        <div class="header-bottom-menu">
            <nav class="header-menu">
                <ul>
                    <li><a href="/shopSmarty/">Головна</a></li>
                    <li><a href="/shopSmarty/catalog/">Каталог</a></li>
                    <li><a href="/shopSmarty/aboutUs/">О нас</a></li>
                    <li><a href="/shopSmarty/posts/">Статті</a></li>
                    <li><a href="/shopSmarty/contact/">Контакти</a></li>
                    <li><a href="#">Зворотній зв'язок</a></li>
                </ul>
            </nav>
        </div>
        <!-- Bottom header menu End-->

    <!-- header_top End-->
</header>

<?php }
}
