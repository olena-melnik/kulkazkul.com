{include file = "admin/header.tpl" assign = header}
{$header}
Удалить статтю {$ID}?
<form action="/admin/posts/delete/{$ID}" method="post">
    <input type="submit" value="Видалити" name="submit">
</form>
<br>
<br>