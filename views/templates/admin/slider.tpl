{include file = "admin/header.tpl" assign = header}
{$header}
Редагувати слайдер на головній сторінці<br>
<a href="slider/add">Додати новий слайд</a>
<form action="" method="post" enctype=multipart/form-data>
    <input type="file" name="image">
    <input type="submit" name="add" value="Додати файл">
</form>
<table>
    {foreach from=$SLIDER key=key item=slide}
        <tr>
            <td><img src= "/views/image/slider/{$slide}"></td>
            <td><a href="slider/delete/{$key}">Видалити</a></td>
        </tr>
    {/foreach}
</table>
</body>
</html>