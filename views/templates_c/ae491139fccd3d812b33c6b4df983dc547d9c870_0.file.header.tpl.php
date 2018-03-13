<?php
/* Smarty version 3.1.30, created on 2018-03-12 11:04:26
  from "D:\xampp\htdocs\shopSmarty\views\templates\home\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa650aa6bdc54_01099999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae491139fccd3d812b33c6b4df983dc547d9c870' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopSmarty\\views\\templates\\home\\header.tpl',
      1 => 1520849059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa650aa6bdc54_01099999 (Smarty_Internal_Template $_smarty_tpl) {
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

                    </span>
                </div>
                <div class="contact-item">
                    <span class="item">
                        Режим роботи<br>
                        <?php echo $_smarty_tpl->tpl_vars['CONTACTS']->value['work'];?>

                    </span>
                </div>
                <div class="contact-item">
                    <span class="item">
                        <a href="" class="add" id="go"><span>Заказать звонок</span><br>
                        <img src="/shopSmarty/views/image/phone.png" class="callback-image"></a>
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
                    <li><a href="/shopSmarty">Головна</a></li>
                    <li><a href="/shopSmarty/catalog/">Каталог</a></li>
                    <li><a href="/shopSmarty/aboutUs/">О нас</a></li>
                    <li><a href="/shopSmarty/posts/">Статті</a></li>
                    <li><a href="/shopSmarty/contact/">Контакти</a></li>
                    <li><a href="/shopSmarty/callback/">Зворотній зв'язок</a></li>
                </ul>
            </nav>
        </div>
        <!-- Bottom header menu End-->

    <!-- header_top End-->
</header>

<div id="callback" class="modal" >
    <span id="modal_close">X</span>
    <form action="/shopSmarty/requestcall" method="post" class="ajax-form">
        <h3 class="title modal-title">Заказать консультацию</h3>
        <div class="form-group">
            <input type="text" name="callbackname" class="input input_modal" placeholder="Ваше имя*" required>
            <input type="text" name="callbacktel" class="input input_modal" placeholder="Ваш телефон*" required>
        </div>
        <p class="modal-text_small">* - поля, обязательные для заполнения</p>
        <input type="submit" name="callbackbtn" class="btn btn_act btn_submit" value="Отправить">
    </form>
</div>
<div id="overlay"></div>

<?php }
}
