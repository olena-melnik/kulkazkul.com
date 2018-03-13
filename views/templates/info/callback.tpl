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
<div class="content">
    <br>
    <h5>Написати листа</h5>
    <form action="" method="post">
        <div class="cabinet_content callback">
            <div class="parametr">
                <label>Ваше им'я
                    <input type="text" name="nameUser" required>
                </label>
            </div>
            <div class="parametr">
                <label>
                    Номер телефона
                    <input type="text" name="phone">
                </label>
            </div>
            <div class="parametr">
                <label>
                    Електронна адреса
                    <input type="email" name="email" required>
                </label>
            </div>
            <div class="parametr">
                <label>Тема звірнення
                    <input type="text" name="theme">
                </label>
            </div>
            <div class="parametr">
                <label>Текст листа
                    <textarea name="message" required></textarea>
                </label>
            </div>
        </div>
        <div class="callback-btn">
            <div class="parametr">
                <label>
                    <input type="button" name="clear" value="Очистити">
                </label>
            </div>
            <div class="parametr">
                <label>
                    <input type="submit" name="send" value="Відправити">
                </label>
            </div>
        </div>
    </form>
</div>
{$footer}