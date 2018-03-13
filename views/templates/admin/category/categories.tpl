{include file = "admin/header.tpl" assign = header}
{$header}
<a href="/admin/category/create">Додати нову катерогію</a>
Список категорій:
<table>
    <tr>
        <th>Номер</th><th>Назва</th><th>Номер для сортировки</th><th>Статус</th>
    </tr>
    {foreach from=$CATEGORYLIST item=category}
        <tr>
            <td>{$category.id}</td>
            <td><a href="#">{$category.name}</a></td>
            <td>{$category.sort_order}</td>
            <td>{$category.status}</td>
            <td><a href="/admin/category/update/{$category.id}">Редагувати</a></td>
            <td><a href="/admin/category/delete/{$category.id}">Видалити</a></td>
        </tr>
    {/foreach}
</table>
</body>
</html>