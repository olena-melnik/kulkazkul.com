{include file = "admin/header.tpl" assign = header}
{$header}
<div class="admin_content">
Додати нову категорію:
<form action="" method="post">
    <div class="parametr">
        Назва
        <input type="text" name="name" required>
    </div>
    <div class="parametr">
        Номер для сортировки
        <input type="number" name="sort_order" required>
    </div>
    <div class="parametr">
        Статус
        <select name="status">
            <option value="1">Доступна</option>
            <option value="0">Ні</option>
        </select>
    </div>
    <div class="parametr">
        <input type="submit" name="add" value="Додати">
    </div>
</form>
</div>
<br>
<br>
</body>
</html>