<footer>
    <div class="footer-menu">
        <div class="footer-menu-item"><a href="/catalog/"><span class="footer-title">Каталог</span></a>
            <ul>
                {foreach from=$CATEGORIES item=category}
                    <li class="presentation-category-menu-list-item">
                        <a href="/category/{$category.id}">{$category.name}</a>
                    </li>
                {/foreach}
            </ul>
        </div>
        <div class="footer-menu-item"><span class="footer-title">Інформація</span>
            <ul>
                <li><a href="/aboutUs/">О нас</a></li>
                <li><a href="/contact/">Контакти</a></li>
                <li><a href="/posts/">Статті</a></li>
                <li><a href="/callback/">Зворотній зв'язок</a></li>
            </ul>
        </div>
        <div class="footer-menu-item"><a href="/contact/"><span class="footer-title">Контакти:</span></a><br>
            {foreach from=$CONTACTS.phone item=phone}
                {$phone}<br>
            {/foreach}
        </div>
        <div class="footer-menu-item"><span class="footer-title">Режим роботи</span><br>
            {$CONTACTS.work}
        </div>
        <div class="footer-menu-item"><span class="footer-title">Підписка</span><br>
            Залиште свою пошту і отримуйте інформацію про найближчих акції та знижки
            <form action="/subscription" method="post">
                <input type="email" name = "email" required>
                <input type="submit" value="Підписатись">
            </form>
        </div>
    </div>
    <div class="copyright">
    Olena Melnik KNz-13-1 2018
    </div>
</footer>
<script src="/views/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="/views/js/Scripts.js" type="text/javascript"></script>
</body>
</body>
</html>


