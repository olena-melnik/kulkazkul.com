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
<div class="posts content">
    {foreach from=$POSTS item=$item}
    <div class="post-item">
        <h4><a href="{$item.id}">{$item.title_article}</a></h4>
        <img class="post-image" src="{$item.image_article}">
        <p><span id="post-shorttext{$item.id}">{$item.short_text}</span></p>
        <p><span id="post-longtext{$item.id}">{$item.text_article}</span></p>
        <p><a href="{$item.sourse_link}">Источник</a></p>
        <div class="post-button">
            <input type="hidden" value="{$item.id}" id="postId{$item.id}">
            <button class="more_info" id="open{$item.id}">Детальніше</button>
            <button class="more_info" id="close{$item.id}">Сховати</button>
        </div>
    </div>
    {/foreach}
</div>
{$footer}