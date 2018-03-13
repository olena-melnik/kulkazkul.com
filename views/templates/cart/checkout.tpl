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
    </div>
        <!-- END CATEGORY-MENU-LIST -->
        <div class="product-in-cart">
            Ваше замовлення відправлено! Чекайта дзвінка адміністратора! Дякуємо за покупку!
            <br>
            <br>
            <a href="/">
                Повернутись до вибору товару
            </a>
        </div>
    </div>
</div>
{$footer}