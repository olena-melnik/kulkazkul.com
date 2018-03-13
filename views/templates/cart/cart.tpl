<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/views/css/style.css" type="text/css" rel="stylesheet">
    <script src="/views/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <title>{$TITLE}</title>
</head>
{include file = "home/header.tpl" assign = header}
{include file = "home/categoryMenu.tpl" assign = menu}
{include file = "home/footer.tpl" assign = footer}
{$header}
<div class="clearfix">
    <div class="small-presentation">
        <!-- CATEGORY-MENU-LIST START -->
        <div class="presentation-category-menu">
            {$menu}
        </div>
        <!-- END CATEGORY-MENU-LIST -->
    </div>
    <div class="product-in-cart">
        {if ($PRODUCTSINCART)}
            <h3>Вы выбрали такие товары:</h3>
            <table>
                <tr><th>Код товару</th><th>Назва</th><th>Кількість, шт</th><th>Вартість, грн</th><th>Видалити</th></tr>
                {foreach from=$PRODUCTS item=product}
                    <tr>
                        <td>{$product.code}</td>
                        <td><a href="/product/{$product.id}">
                                {$product.name}
                            </a></td>
                        <td>{$PRODUCTSINCART.{$product.id}}</td>
                        <td>{$product.price}</td>
                        <td><a href="/cart/remove/{$product.id}">X</a></td>
                    </tr>
                {/foreach}
                <tr><td>Вього</td><td></td><td></td><td>{$TOTAL}</td><td></td></tr>
            </table>
            <br>
            <a href="/">
                Повернутись до вибору товару
            </a>
            <a href="/order/">
                Оформити замовлення
            </a>
            <a href="/cart/removeAll">
                Почистити кошик
            </a>
        {else}
            Корзина пуста
            <br>
            <a href="/shopSmarty">
                Повернутись до вибору товару
            </a>
        {/if}
    </div>
</div>
{$footer}