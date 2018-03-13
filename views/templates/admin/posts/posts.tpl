{include file = "admin/header.tpl" assign = header}
{$header}
<div class="admin-button">
<a href="/admin/posts/create">Додати нову статтю</a>
</div>
Список статей:
<table>
    <tr>
        <th>Номер</th><th>Заголовок</th><th>Текст</th><th>Дата</th>
    </tr>
    {foreach from=$POSTSLIST item=item}
        <tr>
            <td>{$item.id}</td>
            <td><a href="#">{$item.title_article}</a></td>
            <td>{$item.short_text}</td>
            <td>{$item.date_article}</td>
            <td><a href="/admin/posts/update/{$item.id}">Редагувати</a></td>
            <td><a href="/admin/posts/delete/{$item.id}">Видалити</a></td>
        </tr>
    {/foreach}
</table>
</body>
</html>