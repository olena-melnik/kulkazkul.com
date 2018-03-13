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
<body>
{include file = "home/header.tpl" assign = header}
{include file = "home/categoryMenu.tpl" assign = menu}
{include file = "home/footer.tpl" assign = footer}
{$header}
<div class="content1 clearfix">
    <!--Presentation START-->
    <div class="small-presentation">
        <!-- CATEGORY-MENU-LIST START -->
        <div class="presentation-category-menu">
            {$menu}
        </div>
        <!-- END CATEGORY-MENU-LIST -->
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
                    <h5><a href="/product/{$itemProduct.id}">{$itemProduct.name}</a></h5>
                    <div class="product-code">
                        <span class="code">Код: {$itemProduct.code}</span>
                    </div>
                    <div class="price-box">
                        <span class="price">Ціна: {$itemProduct.price} грн</span>
                    </div>
                    <div class="product-action">
                        <div class="button-group">
                            <form class="product-button" action="" method="post">
                                <input type="hidden" value="{$itemProduct.id}" name="id-product">
                                <input type="number" min="1" value="1" id="number-product" name="number-product">
                                <input type="submit" name="send" class="add-to-cart" value="Додати у кошик">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}
        <!-- END Products-->
    {$PAGE}
    </div>
</div>
{$footer}