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
        <td>Сумма замовлення</td><td>{$TOTAL}</td>
    </tr>
        <tr>
        <td>Дата останього редагування</td><td>{$ORDER.time_update}</td>
    </tr>
    <form action="" method="post">
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
            <td>Змінити статус замовлення?</td><td><input type="submit" name="update" value="Так"></td>
        </tr>
    </form>
</table>
</form>
<br>
<br>
</body>
</html>