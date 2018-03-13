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
{include file = "home/footer.tpl" assign = footer}
{$header}
<div class="contacts content">
    <h4>Наши контакти:</h4>
    <div class="contacts-phone">
        <h5>Телефон</h5>
        {foreach from=$CONTACTS.phone item=phone}
            {$phone}<br>
        {/foreach}
    </div>
    <div class="contacts-adress">
        <h5>Адреса</h5>
        {$CONTACTS.adress}
    </div>
    <div class="contacts-email">
        <h5>E-mail</h5>
        {$CONTACTS.email}
    </div>
    <div class="contacts-map" id="map"></div>
</div>
{$footer}
