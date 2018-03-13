{include file = "admin/header.tpl" assign = header}
{$header}
<a href="/admin/product/create">Додати новий товар</a>
Список товарів:
<table>
    <tr>
        <th>Номер</th><th>Назва</th><th>Код</th><th>Ціна</th><th>Категорія</th>
    </tr>
    {foreach from=$PRODUCTLIST item=product}
        <tr>
            <td>{$product.id}</td>
            <td><a href="#">{$product.name}</a></td>
            <td>{$product.code}</td>
            <td>{$product.price}</td>
            <td>{$product.category_id}</td>
            <td><a href="/admin/product/update/{$product.id}">Редагувати</a></td>
            <td><a href="/admin/product/delete/{$product.id}">Видалити</a></td>
        </tr>
    {/foreach}
</table>
</body>
</html>