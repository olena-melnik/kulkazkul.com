        <div class="presentation-category-head">
            <h2>Категорії</h2>
        </div>
        <div class="presentation-category-menu-list">
            <ul>
                {foreach from=$cm item=i}
                    <li class="presentation-category-menu-list-item {if $catAct == $i.id}active{/if}">
                        <a href="/category/{$i.id}">{$i.name}</a>
                    </li>
                {/foreach}
            </ul>
        </div>
