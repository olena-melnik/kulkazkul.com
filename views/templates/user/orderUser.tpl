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
<section>
    <div class="personal-cabinet">
        <h2><a href="/cabinet">Особистий кабінет</a></h2>
        <h3>Привет, {$USER.name}</h3>
    </div>
    <div>
<h3>Замовлення № {$ORDER.id} від {$ORDER.date_order}</h3>
<table>
    <form action="" method="post">
    <tr>
        <th>Параметр</th><th>Значення</th>
    </tr>
    <tr>
        <td>Телефон</td><td>{$ORDER.user_phone}</td>
    </tr>
    <tr>
        <td>Електронна адреса</td><td>{$ORDER.email}</td>
    </tr>
    <tr>
        <td>Коментарій</td><td>{$ORDER.user_comment}</td>
    </tr>
    <tr>
        <td>Дата</td><td>{$ORDER.date_order}</td>
    </tr>
    <tr>
        <td>Спосіб доставки</td><td>{$ORDER.delivery}</td>
    </tr>
    <tr>
        <td>Адреса</td><td>{$ORDER.adress}</td>
    </tr>
    <tr>
        <td>Спосіб оплати</td><td>{$ORDER.paymethod}</td>
    </tr>
    <tr>
        <td>Статус замовлення</td>
        <td>
            <select name="status">
                {foreach from=$STATUS item=st}
                    <option value="{$st.id}" {if $st.name_status == $ORDER.name_status}selected{/if}>{$st.name_status}</option>
                {/foreach}
            </select>
        </td>
    </tr>
    <tr>
        <td>Дата останього редагування</td><td>{$ORDER.time_update}</td>
    </tr>
    <tr>
        <td>Змінити статус замовлення?</td><td><input type="submit" name="update" value="Так"></td>
    </tr>
    </form>
</table>
<table>
    <tr>
        <th>Номер товара</th>
        <th>Назва</th>
        <th>Код</th>
        <th>Кількість</th>
        <th>Ціна, грн.</th>
    </tr>
    {foreach from=$PRODUCTS item=product}
        <tr>
            <td>{$product.id}</td>
            <td>{$product.name}</td>
            <td>{$product.code}</td>
            <td>{$product.quantity}</td>
            <td>{$product.price}</td>
        </tr>
    {/foreach}
    <tr><td></td><td></td><td></td><td><h4>До сплати:</h4></td><td>{$TOTAL}</td></tr>
</table>
    </div>
</section>
</body>
</html>