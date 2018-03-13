{include file = "admin/header.tpl" assign = header}
{$header}
<div class="admin_content">
Редагувати інформацію о категорії #{$CATEGORY.id}:
<form action="" method="post">
    <div class="parametr">
        Назва
        <input type="text" name="name" value = "{$CATEGORY.name}" required>
    </div>
    <div class="parametr">
        Номер для сортировки
        <input type="number" name="sort_order" value="{$CATEGORY.sort_order}" required>
    </div>
    <div class="parametr">
        Статус
        <select name="status">
            <option value="{$CATEGORY.status}">
                {IF $CATEGORY.status == 1}
                <option value="1" selected>Доступна</option>
                <option value="0">Ні</option>
                {ELSE}
            <option value="1">Доступна</option>
            <option value="0" selected>Ні</option>
                {/IF}
            </option>
        </select>
    </div>
    <div class="parametr">
        <input type="submit" name="update" value="Зберегти">
    </div>
</form>
</div>
<br>
<br>
</body>
</html>