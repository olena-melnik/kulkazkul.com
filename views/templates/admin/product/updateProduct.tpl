{include file = "admin/header.tpl" assign = header}
{$header}
<div class="admin_content">
    Редагувати інформацію о товарі #{$PRODUCT.id}:
<form action="" method="post"  enctype=multipart/form-data>
    <div class="parametr">
        <label>Назва товару
        <input type="text" name="name" value="{$PRODUCT.name}" required>
        </label>
    </div>
    <div class="parametr">
        <label>Код
        <input type="text" name="code" value="{$PRODUCT.code}" required>
        </label>
    </div>
    <div class="parametr">
        <label>
        Вартість товару, грн
        <input type="text" name="price" value="{$PRODUCT.price}" required>
        </label>
    </div>
    <div class="parametr">
        <label>
        Категорія товару
        <select name="category_id">
            {foreach from=$cm item=category}
                <option value="{$category.id}"
                {IF $category.id == $PRODUCT.category_id}selected{/IF}
                >{$category.name}</option>
            {/foreach}
        </select>
        </label>
    </div>
    <div class="parametr">
        <label>
        Виробник
        <input type="text" name="brand" value="{$PRODUCT.brand}">
        </label>
    </div>
    <div class="parametr">
        <label>
        Зображення
        <image src="{$PRODUCT.image}">
        <input type="file" name="image">
        </image>
    </div>
    <div class="parametr">
        <label>
        Детальний опис
        <textarea name="description">{$PRODUCT.descriptoon}</textarea>
        </label>
    </div>
    <div class="parametr">
        <label>
        Товар доступний
        <select name="avallability">
            <option value="{$PRODUCT.avallibity}" selected>{$PRODUCT.avallibity}</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
        </label>
    </div>
    <div class="parametr">
        <label>
        Новинка
        <select name="is_new">
            <option value="{$PRODUCT.is_new}" selected>{$PRODUCT.is_new}</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
        </label>
    </div>
    <div class="parametr">
        <label>
        Рекомендуємий товар
        <select name="is_recommended">
            <option value="{$PRODUCT.is_recommended}" selected>{$PRODUCT.is_recommended}</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
        </label>
    </div>
    <div class="parametr">
        <label>
        Наявність на складі
        <select name="status">
            <option value="{$PRODUCT.status}" selected>{$PRODUCT.status}</option>
            <option value="1">Так</option>
            <option value="0">Ні</option>
        </select>
        </label>
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