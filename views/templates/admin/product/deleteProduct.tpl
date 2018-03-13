{include file = "admin/header.tpl" assign = header}
{$header}
Удалить товар {$ID};
<form action="/admin/product/delete/{$ID}" method="post">
    <input type="submit" value="Видалити" name="submit">
</form>
<br>
<br>