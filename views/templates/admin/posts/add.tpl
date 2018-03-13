{include file = "admin/header.tpl" assign = header}
{$header}
Додати нову статтю:
<form action="" method="post" enctype=multipart/form-data>
    <div class="parametr">
        Заголовок
        <input type="text" name="title_article" required>
    </div>
    <div class="parametr">
        Текст статті
        <input type="text" name="text_article" required>
    </div>
    <div class="parametr">
        Краткий текст
        <input type="text" name="short_text" required>
    </div>
    <div class="parametr">
        Дата
        <input type="date" name="date_article" required>
    </div>
    <div class="parametr">
        Зображення
        <input type="file" name="image_article">
    </div>
    <div class="parametr">
        Посилання
        <input type="text" name="sourse_link" required>
    </div>
    <div class="parametr">
        Автор
        <input type="text" name="author" required>
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
<br>
<br>
</body>
</html>