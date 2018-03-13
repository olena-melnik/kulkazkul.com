<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/views/css/style.css" type="text/css" rel="stylesheet">
    <script src="/views/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <title>{$TITLE}</title>
</head>
{include file = "home/header.tpl" assign = header}
{include file = "home/categoryMenu.tpl" assign = menu}
{include file = "home/footer.tpl" assign = footer}
{$header}
<div class="clearfix">
    <div class="small-presentation">
        <!-- CATEGORY-MENU-LIST START -->
        <div class="presentation-category-menu">
            {$menu}
        </div>
        <!-- END CATEGORY-MENU-LIST -->
    </div>
    <div class="order-form">
        <h3 class="title modal-title">Оформление заказа</h3>
        <div class="form-order-wrap">
            <form id="order-info" action = "/cart/checkout" method="post">
                <!-- name and phone -->
                <div class="order-step">
                    <span class="order-step-title">1. Ваши данные</span>
                    <div class="order-step-row">
                        <div class="row min">
                            <label>Им'я<br>
                                <input type="text" name="userName" value="{$USERNAME}" required></label><br>
                        </div>
                    </div>
                    <div class="order-step-row">
                        <div class="row min">
                            <div class="col-sm-2">
                                <div class="order-step-label">Телефон*</div>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="userPhone" class="input input_order" placeholder="" value ="{$USERPHONE}" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- delivery -->
                <div class="order-step">
                    <span class="order-step-title">2. Доставка</span>
                    <div class="order-list-type">
                        <div class="row min">
                                <ul class="check-radio">
                                    <li>
                                        <input type="radio" id="himself" value="himself" name="delivery" class="input_radio" checked>
                                        <label for="himself" class="input_label">Самовивіз</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="np-warehouse" value="np-warehouse" name="delivery" class="input_radio">
                                        <label for="np-warehouse" class="input_label">Нова Пошта - Склад</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="np-corier" value="np-corier" name="delivery" class="input_radio">
                                        <label for="np-corier" class="input_label">Нова Поша - Кур'єр</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="another-warehouse" value="another-warehouse" name="delivery" class="input_radio">
                                        <label for="another-warehouse" class="input_label">Інший варіант</label>
                                    </li>
                                </ul>
                        </div>
                    </div>

                    <!-- nova poshta - warehouse -->
                    <div id="warehouse-info" class="order-delivery-details">
                        <div class="order-step-row">
                            <label>Область<br>
                                <input type="text" name="region" class="input_order" placeholder="">
                            </label>
                        </div>
                        <div class="order-step-row">
                            <label>Місто<br>
                                <input type="text" name="city-np" class="input_order" placeholder="">
                            </label>
                        </div>
                        <div class="order-step-row">
                            <label>№ склада*<br>
                                <input type="text" name="warehouse-np" class="input_order" placeholder="">
                            </label>
                            <span class="modal-text_small">* - вкажіть грузове відділення</span>
                        </div>
                    </div>
                    <!-- nova poshta - corier -->
                    <div id="warehouse-corier" class="order-delivery-details">
                        <div class="order-step-row">
                            <label>Місто<br>
                                <input type="text" name="city-np-cor" class="input_order" placeholder="">
                            </label>
                        </div>

                        <div class="order-step-row">
                            <label>Вулиця<br>
                                <input type="text" name="street-np-cor" class="input_order" placeholder="">
                            </label>
                        </div>
                        <div class="order-step-row">
                            <label>Будинок<br>
                                <input type="text" name="house-np-cor" class="input_order" placeholder="">
                            </label>
                        </div>
                        <div class="order-step-row">
                            <label>Під'їзд<br>
                                <input type="text" name="entrance-np-cor" class="input_order" placeholder="">
                            </label>
                        </div>
                        <div class="order-step-row">
                            <label>Поверх<br>
                                <input type="text" name="floor-np-cor" class="input_order" placeholder="">
                            </label>
                        </div>
                        <div class="order-step-row">
                            <label>Квартира<br>
                                <input type="text" name="room-np-cor" class="input_order" placeholder="">
                            </label>
                        </div>
                    </div>
                <!-- another-warehouse -->
                <div id="other-warehouse-info" class="order-delivery-details">
                    <div class="order-step-row">
                        <label>Назва перезвізника<br>
                            <input type="text" name="name-aw" class="input_order" placeholder="">
                        </label>
                    </div>
                    <div class="order-step-row">
                        <label>№ склада*<br>
                            <input type="text" name="warehouse-aw" class="input_order" placeholder="">
                        </label>
                        <span class="modal-text_small">* - вкажіть грузове відділення</span>
                    </div>
                    <div class="order-step-row">
                        <label>Місто<br>
                            <input type="text" name="city-aw" class="input_order" placeholder="">
                        </label>
                    </div>
                    <div class="order-step-row">
                        <label>Вулиця<br>
                            <input type="text" name="street-aw" class="input_order" placeholder="">
                        </label>
                    </div>
                    <div class="order-step-row">
                        <label>Будинок<br>
                            <input type="text" name="house-aw" class="input_order" placeholder="">
                        </label>
                    </div>
                </div>
                </div>
                <!-- payment -->
                <div class="order-step">
                    <span class="order-step-title">3. Метод оплаты</span>
                    <div class="order-list-type">
                                <ul class="check-radio">
                                    <li>
                                        <input type="radio" id="paybefore" value="paybefore" name="payment" class="input_radio" checked>
                                        <label for="paybefore" class="input_label">Полная предоплата</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="cod" value="cod" name="payment" class="input_radio">
                                        <label for="cod" class="input_label">Наложеный платеж<span class="input_label-info">( 2% от суммы товара )</span></label>
                                    </li>
                                </ul>
                    </div>
                </div>

                <!-- add comment -->
                <div class="order-step">
                    <div class="order-comment">
                        <a href="javascript:void(0);" class="link order-comment-link">Додати коментарій до замовлення</a>
                        <textarea id="ordermssg" placeholder="Сообщение" name="userComment" class="input input_area"></textarea>
                    </div>
                </div>
                <!-- order button -->
                <input type="submit" name="send" value="Відправити"><br>
            </form>
        </div>
    </div>
</div>
</div>

{$footer}