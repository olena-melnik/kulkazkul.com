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
{$header}
<div class="singup-form">
    <h2>Вхід на сайт</h2>
    <form action="" method="post">
        <input type="email" name="email" placeholder="E-mail" value="{$USEREMAIL}" required/>
        <input type="password" name="password" placeholder="Пароль" value="{$USERPASSWORD}" required"/>
        <input type="submit" name="submit" class="" value="Вхід">
        <a href="">Відновити пароль</a>
        {foreach from=$ERRORS item=er}
            <ul class="Error">
                <li>{$er}</li>
            </ul>
        {/foreach}

    </form>

</div>
</body>
</html>