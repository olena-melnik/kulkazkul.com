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
{include file = "home/footer.tpl" assign = footer}
{$header}
<section class="content">
    <div class="personal-cabinet">
        <h2>Особистий кабінет</h2>
        <h3>Привет, {$USER.name}</h3>
        <ul>
            <li><a href="" name="edit">Редагувати дані</a></li>
            <li><a href="" name="ehistory">Список покупок</a></li>
        </ul>
    </div>
    <div class="ser-edit">
        <div class="cabinet_content">
        <form action="" method="post">
        <div class="parametr">
            Ваше им'я
            <input type="text" name="name" value="{$USER.name}">
        </div>
        <div class="parametr">
            Електронна адреса
            <input type="email" name="email" value="{$USER.email}">
        </div>
        <div class="parametr">
            Телефон
            <input type="text" name="phone" value="{$USER.phone}">
        </div>
        <div class="parametr">
            Для редагування, введить, будь-ласка, пароль
            <input type="password" name="password" value="{$USER.password}">
        </div>
            <div class="parametr">
                <input type="submit" name="update">
            </div>
        </form>
        <form action="" method="post" >
            <div class="parametr">
                Якщо Ви бажаете змінити пароль, введить, будь ласка, спочатку старих, а потім двічи новий.
            </div>
            <div class="parametr">
                Новий пароль
                <input type="password" name="passwordNew1">
            </div>
            <div class="parametr">
                <input type="password" name="passwordNew2">
            </div>
            <div class="parametr">
                Старий пароль
                <input type="password" name="passwordOld">
            </div>
            <div class="parametr">
                <input type="submit" name="updatePassword">
            </div>
        </form>
            <div class="error">{$ERROR}</div>
        </div>
    </div>
    <div class="user-orders" hidden>
        <table>
            <tr>
                <th>Номер замовлення</th>
                <th>Дата</th>
                <th>Коментарій користувача</th>
                <th>Спосіб доставки</th>
                <th>Адреса</th>
                <th>Спосіб оплати</th>
                <th>Статус замовлення</th>
                <th>Дата редагування</th>
            </tr>
            {foreach from=$ORDERS item=order}
            <tr>
                <td><a href="/cabinet/order/{$order.id}">{$order.id}</a></td>
                <td>{$order.date_order}</td>
                <td>{$order.user_comment}</td>
                <td>{$order.delivery}</td>
                <td>{$order.adress}</td>
                <td>{$order.paymethod}</td>
                <td>{$order.name_status}</td>
                <td>{$order.time_update}</td>
            </tr>
            {/foreach}
        </table>
    </div>
    <div class="mask"></div>
</section>
{$footer}
</body>
</html>