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
<body>
<?php include "header.php"?>
{include file = "home/header.tpl" assign = header}
{include file = "home/categoryMenu.tpl" assign = menu}
{include file = "home/footer.tpl" assign = footer}
{$header}
<div class="clearfix">
<!--Presentation START-->
    <!-- CATEGORY-MENU-LIST START -->
<div class="small-presentation">
    <div class="presentation-category-menu">
        {$menu}
    </div>
</div>>
    <!-- END CATEGORY-MENU-LIST -->
<!--END Presentation-->
<!-- START Product view-->
<div class="ProductView">
        <div class="productView-foto">
            <img src="{$PRODUCTITEM.image}">
        </div>
        <div class="productView-info">
            <div class="productView-info-name">
                <h3>{$PRODUCTITEM.name}</h3>
            </div>
            <div class="productView-info-avalibity">
                <p>{$AVALLIBITY}<p/>
            </div>
            <div class="productView-info-code">
                <p>Код товару: {$PRODUCTITEM.code}<p/>
            </div>
            <div class="productView-info-price">
                <p>Ціна: {$PRODUCTITEM.price} грн<p/>
            </div>
            <div class="productView-description">
                <P>Описание товара</P>
                <p>{$PRODUCTITEM.descriptoon}</p>
            </div>
            <br>
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
<!-- Product view END-->
{$footer}
</body>
</html>