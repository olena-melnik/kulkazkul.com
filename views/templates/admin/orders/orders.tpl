{include file = "admin/header.tpl" assign = header}
{$header}
Список статей:
<table>
    <tr>
        <th>Номер замовлення</th><th>Им'я замовника</th><th>Телефон</th><th>Електронна адреса</th>
        <th>Номер замовника</th>
        <th>Дата замовлення</th><th>Спосіб доставки</th><th>Оплата</th><th>Статус замовлення</th>
    </tr>
    {foreach from=$ORDERSLIST item=order}
        <tr>
            <td><a href="/admin/orders/show/{$order.id}">{$order.id}</a></td>
            <td>{$order.user_name}</td>
            <td>{$order.user_phone}</td>
            <td>{$order.email}</td>
            <td>{$order.user_id}</td>
            <td>{$order.date_order}</td>
            <td>{$order.delivery}</td>
            <td>{$order.paymethod}</td>
            <td><a href="/admin/orders/update/{$order.id}">{$order.status}</a></td>
            <td><a href="/admin/orders/show/{$order.id}">Подивитись</a></td>
            <td><a href="/admin/orders/update/{$order.id}">Редагувати</a></td>
        </tr>
    {/foreach}
</table>
<br>
<br>
</body>
</html>