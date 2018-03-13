{include file = "admin/header.tpl" assign = header}
{$header}
Удалить категорію {$ID}?
<form action="/admin/category/delete/{$ID}" method="post">
    <input type="submit" value="Видалити" name="submit">
</form>
<br>
<br>