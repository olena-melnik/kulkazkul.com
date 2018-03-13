
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
                <li><a href='/cart/'>Кошик(<span id="cart-count">{$COUNTCART}</span>)</a></li>
                {if $userOnline != ''}
                    <li><a href='/cabinet/'>Кабінет</a></li>
                    <li><a href='/logout/'>Вийти</a></li>
                {else}
                    <li><a href='/login/'>Вхід</a></li>
                    <li><a href='/registry/'>Реєстрація</a></li>
                {/if}

            </ul>
        </div>
    </div>
    <!-- Start header_top-->
    <div class="header-top clearfix">
        <!-- Start Logo-->
        <div class="header-logo">
            <a href = / class="logo">
                <img class="logo-img" src="/views/image/logo.png" alt="Kulka z kul.com">
            </a>
        </div>
        <!-- Logo End-->
        <!-- Start header information-->
        <div class="header-top-info">
            <div class="top-cont clearfix">
                <div class="contact-item">
                    <span class="item">
                        Контакти:<br>
                        {foreach from=$CONTACTS.phone item=phone}
                            {$phone}<br>
                        {/foreach}
                    </span>
                </div>
                <div class="contact-item">
                    <span class="item">
                        Режим роботи<br>
                        {$CONTACTS.work}
                    </span>
                </div>
                <div class="contact-item">
                    <span class="item">
                        <a href="" class="add" id="go"><span>Заказать звонок</span><br>
                        <img src="/views/image/phone.png" class="callback-image"></a>
                    </span>
                </div>
            </div>
            <div class="search-by-category">
                <div class="header-search">
                    <form action="/catalog/search" method="post">
                        <div class="search-container">
                        <select name="category_id">
                            <option class="all-cate" value="0">Всі категорії</option>
                            {foreach from=$CATEGORIES item=category}
                                <option class="c-item" value="{$category.id}">{$category.name}</option>
                            {/foreach}
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
                    <li><a href="/">Головна</a></li>
                    <li><a href="/catalog/">Каталог</a></li>
                    <li><a href="/aboutUs/">О нас</a></li>
                    <li><a href="/posts/">Статті</a></li>
                    <li><a href="/contact/">Контакти</a></li>
                    <li><a href="/callback/">Зворотній зв'язок</a></li>
                </ul>
            </nav>
        </div>
        <!-- Bottom header menu End-->

    <!-- header_top End-->
</header>

<div id="callback" class="modal" >
    <span id="modal_close">X</span>
    <form action="/requestcall" method="post" class="ajax-form">
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

