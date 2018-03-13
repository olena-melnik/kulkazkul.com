{include file = "admin/header.tpl" assign = header}
{$header}
<div class="admin_content">
Додати новий товар:
<form action="" method="post" enctype=multipart/form-data>
    <div class="parametr">
        Назва товару
        <input type="text" name="name" required>
    </div>
    <div class="parametr">
        Код
        <input type="text" name="code" required>
    </div>
    <div class="parametr">
        Вартість товару, грн
        <input type="text" name="price" required>
    </div>
    <div class="parametr">
        Категорія товару
        <select name="category_id">
            {foreach from=$cm item=category}
            <option value="{$category.id}">{$category.name}</option>
            {/foreach}
        </select>
    </div>
    <div class="parametr">
        Виробник
        <input type="text" name="brand">
    </div>
    <div class="parametr">
        Зображення
        <input type="file" name="image">
    </div>
    <div class="parametr">
        Детальний опис
        <textarea name="description"></textarea>
    </div>
    <div class="parametr">
        Товар доступний
        <select name="avallability">
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </div>
    <div class="parametr">
        Новинка
        <select name="is_new">
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </div>
    <div class="parametr">
        Рекомендуємий товар
        <select name="is_recommended">
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
    </div>
    <div class="parametr">
        Наявність на складі
        <select name="status">
            <option value="1">Так</option>
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