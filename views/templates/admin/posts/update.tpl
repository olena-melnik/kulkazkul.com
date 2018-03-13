{include file = "admin/header.tpl" assign = header}
{$header}
Редагувати статтю #{$ONEPOST.id}:
<form action="" method="post" enctype=multipart/form-data>
    <div class="parametr">
        Заголовок
        <input type="text" name="title_article" value="{$ONEPOST.title_article}" required>
    </div>
    <div class="parametr">
        Текст
        <textarea name="text_article">{$ONEPOST.text_article}</textarea>
    </div>
    <div class="parametr">
        Краткий текст
        <textarea name="short_text">{$ONEPOST.short_text}</textarea>
    </div>
    <div class="parametr">
        Дата
        <input type="date" name="date_article" value="{$ONEPOST.date_article}" required>
    </div>
    <div class="parametr">
        Посилання
        <input type="text" name="sourse_link" value="{$ONEPOST.sourse_link}">
    </div>
    <div class="parametr">
        Посилання
        <input type="text" name="author" value="{$ONEPOST.author}">
    </div>
    <div class="parametr">
        Зображення
        <image src="{$ONEPOST.image_article}">
        <input type="file" name="image_article">
    </div>
    <div class="parametr">
        <input type="submit" name="update" value="Зберегти">
    </div>
</form>
<br>
<br>
</body>
</html>