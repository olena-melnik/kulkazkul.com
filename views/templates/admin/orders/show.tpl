{include file = "admin/header.tpl" assign = header}
{$header}
<h3>Замовлення № {$ORDER.id} від {$ORDER.date_order}</h3>
<table>
    <tr>
        <th>Параметр</th><th>Значення</th>
    </tr>
    <tr>
        <td>Номер замовника</td><td>{$ORDER.user_id}</td>
    </tr>
    <tr>
        <td>Им'я замовника</td><td>{$ORDER.user_name}</td>
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
        <td>Спосіб оплати</td><td>{$ORDER.paymethod}</td>
    </tr>
    <tr>
        <td>Статус замовлення</td><td>{$ORDER.name_status}</td>
    </tr>
    <tr>
        <td>Дата останього редагування</td><td>{$ORDER.time_update}</td>
    </tr>
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
</body>
</html>