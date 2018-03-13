<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/views/css/style.css" type="text/css" rel="stylesheet">
    <title>{$TITLE}</title>
</head>

{include file = "home/header.tpl" assign = header}
{include file = "home/categoryMenu.tpl" assign = menu}
{include file = "home/footer.tpl" assign = footer}

{$header}
<div class="main clearfix">
<!--Presentation START-->
<div class="presentation clearfix">
    <!-- CATEGORY-MENU-LIST START -->
    <div class="presentation-category-menu">
        {$menu}
    </div>
    <!-- END CATEGORY-MENU-LIST -->
    <div class="presentation-slider">
        <ul id="slides">
            {foreach from=$SLIDER key=key item=slide}
                <li class="slide
                {IF key== 0}
                    showing
                {/IF}
                "><img src="./views/image/slider/{$slide}"></li>
            {/foreach}
        </ul>
    </div>
</div>
<!--END Presentation-->
<!--Product line START-->
<div class="products clearfix">
    <div class="products-post">
        {foreach from=$ARTICLE item=itemPost}
        <div class="products-post-item">
            <div class="post-img">
                <image class="primary-img" src="{$itemPost.image_article}" alt="{$itemPost.title_article}">
            </div>
            <div class="post-description">
                <h4><a href="{$itemPost.id}">{$itemPost.title_article}</a></h4>
                <div class="short-text">
                    <span>{$itemPost.short_text}</span>
                </div>
                <div class="post-button">
                    <a class="more_info" href = "/posts/">Детальніше</a>
                </div>
            </div>
        </div>
        {/foreach}
    </div>
    <div class="product_status">
        <!-- START Products-->
        {foreach from=$LISTPRODUCT item=itemProduct}
            <div class="product_item">
                <div class="product-img">
                    <a href="/product/{$itemProduct.id}">
                        <image class="primary-img" src="{$itemProduct.image}" alt="{$itemProduct.name}">
                    </a>
                </div>
                <div class="product-description">
                    <h4><a href="/product/{$itemProduct.id}">{$itemProduct.name}</a></h4>
                    <div class="product-code">
                        <span class="code">Код: {$itemProduct.code}</span>
                    </div>
                    <div class="price-box">
                        <span class="price">Ціна: {$itemProduct.price} грн</span>
                    </div>
                    <form class="product-button" action="" method="post">
                        <input type="hidden" value="{$itemProduct.id}" name="id-product">
                        <input type="number" min="1" value="1" id="number-product" name="number-product">
                        <input type="submit" name="send" class="add-to-cart" value="Додати у кошик">
                    </form>
            </div>
            </div>
        {/foreach}
    </div>
</div>
</div>
<!--END Product line-->
{$footer}
