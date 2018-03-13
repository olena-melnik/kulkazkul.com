{include file = "admin/header.tpl" assign = header}
{$header}
Редагувати контактні дані<br>
<form action="" method="post">
    <div class="params">
        <input type="text" name="name" value="{$PARAMS.name}">
    </div>
        {foreach from=$PARAMS.phone key=key item=phone}
    <div class="params">
        <input type="text" name="phone[{$key}]" value="{$phone}">
    </div>
        {/foreach}
    <div class="params">
        <textarea name="adress">{$PARAMS.adress}</textarea>
    </div>
    <div class="params">
        <input type="email" name="email" value="{$PARAMS.email}">
    </div>
    <div class="params">
        <textarea name="work">{$PARAMS.work}</textarea>
    </div>
    <div class="params">
        <input type="submit" name="update" value="Змінити">
    </div>
</form>
<br>
<br>
</body>
</html>
