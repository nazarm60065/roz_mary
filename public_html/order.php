<?php
$pageConfig = [
    'metaTitle' => 'Кабинет партнера',
    'title' => 'Кабинет партнера',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-order/bundle-order.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-order/bundle-order.js',
    ],
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
    <div class="order">
        <div class="container">
            <div class="order-top">
                <h1 class="page__title order__title">Оформление заказа</h1>
            </div>
            <div class="order-wrapper">
                <div class="order-left">
                    <div class="order-section order-props">
                        <div class="order-section__title">1. Персональные данные</div>
                        <div class="order-props-fields">
                            <div class="order-props-group order-props-group-FIRST_NAME">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Имя</div>
                            </div>
                            <div class="order-props-group order-props-group-LAST_NAME">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Фамилия</div>
                            </div>
                            <div class="order-props-group order-props-group-PHONE">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Телефон</div>
                            </div>
                            <div class="order-props-group order-props-group-EMAIL">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Email</div>
                            </div>
                            <div class="order-props-group order-props-group-SUBSCRIBE">
                                <label for="soa-property-18" class="order-props-checkbox">
                                    <input type="hidden" name="ORDER_PROP_18" value="N">
                                    <input type="checkbox" name="ORDER_PROP_18" id="soa-property-18" value="Y">
                                    <span class="order-props-checkbox__marker">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"><path fill="#fff"
                                                                       d="M20.293 5.293 9 16.586l-4.293-4.293-1.414 1.414L9 19.414 21.707 6.707l-1.414-1.414z"/></svg>
                                    </span>
                                    <span class="order-props-checkbox__text">Присылайте мне новости и предложения</span>
                                </label>
                            </div>
                            <div class="order-props-group order-props-group-textarea order-props-group-ORDER_DESCRIPTION">
                                <textarea id="orderDescription" cols="4"
                                          class="order-props__control order-props__control_textarea"
                                          placeholder=""
                                          name="ORDER_DESCRIPTION"></textarea>
                                <div class="order-props__placeholder">Добавить примечание к заказу</div>
                            </div>
                        </div>
                    </div>
                    <div class="order-section order-delivery">
                        <div class="order-section__title">2. Варианты покупки</div>
                        <div class="order-delivery-list">
                            <div class="order-delivery-list-item bx-selected">
                                <input id="ID_DELIVERY_ID_5" name="DELIVERY_ID" type="checkbox"
                                       class="order-item-hidden" value="5">
                                <div class="order-delivery-list-item-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="44" fill="none"
                                         viewBox="0 0 56 44">
                                        <path fill="#D3D3D3"
                                              d="M55.755 1.267c0-.7-.568-1.267-1.267-1.267H41.816a1.267 1.267 0 1 0 0 2.534h10.621L47.37 12.672h-8.571L32.812.7 32.8.707A1.255 1.255 0 0 0 31.68 0H1.267C.567 0 0 .566 0 1.267c0 .204.06.39.146.56l-.012.007 6.202 12.404v27.578c0 .7.567 1.267 1.267 1.267h40.549c.7 0 1.267-.566 1.267-1.267V14.238l6.203-12.404-.012-.007c.085-.17.145-.356.145-.56ZM3.317 2.534h27.579l5.068 10.138H8.386L3.317 2.534Zm33.43 36.748c0 .7-.567 1.267-1.267 1.267H8.87V15.206h26.61c.7 0 1.268.566 1.268 1.267v22.809Zm10.138 1.267h-6.336c-.7 0-1.267-.566-1.267-1.267V16.473c0-.7.568-1.267 1.267-1.267h6.336v25.343Z"/>
                                    </svg>
                                </div>
                                <div class="order-delivery-list-item__text">Самовывоз</div>
                            </div>
                            <div class="order-delivery-list-item">
                                <input id="ID_DELIVERY_ID_5" name="DELIVERY_ID" type="checkbox"
                                       class="order-item-hidden" value="5">
                                <div class="order-delivery-list-item-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="58" height="43" fill="none"
                                         viewBox="0 0 58 43">
                                        <path fill="#D3D3D3"
                                              d="M57.697 24.704c0-.27-.1-.53-.278-.732l-9.747-11.005a1.103 1.103 0 0 0-.826-.372h-7.994c-.61 0-1.104-.494-1.104-1.103V9.074c0-.609-.494-1.103-1.103-1.103h-9.641a1.16 1.16 0 0 1-1.016-.628C23.668 2.979 19.074 0 13.798 0 6.19 0 0 6.19 0 13.797c0 5.046 2.723 9.466 6.775 11.872.351.209.58.58.58.99v9.125c0 .61.493 1.104 1.103 1.104h3.085c.592 0 1.068.47 1.19 1.05.608 2.887 3.175 5.062 6.241 5.062 3.067 0 5.634-2.175 6.242-5.063.122-.578.598-1.05 1.19-1.05h12.239c.591 0 1.068.471 1.19 1.05C40.443 40.825 43.01 43 46.076 43s5.633-2.175 6.241-5.063c.122-.578.599-1.05 1.19-1.05h3.086c.61 0 1.103-.493 1.103-1.103v-11.08ZM2.404 13.797c0-6.282 5.11-11.393 11.393-11.393s11.394 5.11 11.394 11.393-5.111 11.394-11.394 11.394c-6.282 0-11.393-5.111-11.393-11.394Zm16.57 26.8A3.98 3.98 0 0 1 15 36.62a3.98 3.98 0 0 1 3.975-3.975 3.98 3.98 0 0 1 3.976 3.975 3.98 3.98 0 0 1-3.976 3.975Zm16.37-6.113h-9.582c-.466 0-.874-.298-1.083-.715a6.385 6.385 0 0 0-5.704-3.527 6.385 6.385 0 0 0-5.705 3.527c-.209.417-.617.715-1.083.715h-1.325c-.61 0-1.104-.494-1.104-1.104v-4.896c0-.742.72-1.273 1.448-1.134.84.16 1.706.245 2.591.245 7.608 0 13.797-6.19 13.797-13.797 0-.69-.05-1.367-.149-2.03-.105-.713.42-1.393 1.141-1.393h5.655c.609 0 1.103.494 1.103 1.104v23.005Zm10.732 6.112a3.98 3.98 0 0 1-3.975-3.975 3.98 3.98 0 0 1 3.975-3.975 3.98 3.98 0 0 1 3.975 3.975 3.98 3.98 0 0 1-3.975 3.975Zm9.216-7.216c0 .61-.494 1.104-1.103 1.104h-1.325c-.467 0-.875-.298-1.084-.715a6.385 6.385 0 0 0-5.704-3.527 6.385 6.385 0 0 0-5.704 3.527c-.21.417-.617.715-1.084.715h-.436c-.61 0-1.104-.494-1.104-1.104V16.103c0-.61.494-1.104 1.104-1.104h6.912c.316 0 .616.136.826.372l8.425 9.513c.179.202.277.462.277.732v7.764Z"/>
                                        <path fill="#D3D3D3"
                                              d="M18.634 16.498a1.104 1.104 0 0 0-.398-1.509l-2.689-1.566A1.103 1.103 0 0 1 15 12.47V6.182c0-.61-.494-1.104-1.103-1.104h-.197c-.61 0-1.104.494-1.104 1.104v7.67c0 .392.209.755.548.953l3.883 2.262a1.103 1.103 0 0 0 1.508-.398l.1-.17Z"/>
                                    </svg>
                                </div>
                                <div class="order-delivery-list-item__text">Доставка</div>
                            </div>
                        </div>
                        <div class="order-delivery-company">
                            <div class="order-delivery-company-text-container">
                                <div class="order-delivery-company__star">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="none"
                                         viewBox="0 0 8 8">
                                        <path fill="#9484C1"
                                              d="m4 0 .898 2.764h2.906l-2.35 1.708.897 2.764L4 5.528 1.649 7.236l.898-2.764L.196 2.764h2.906L4 0Z"/>
                                    </svg>
                                </div>
                                <div class="order-delivery-company__text">
                                    Пункт самовывоза находится по адресу Москва, Проспект Вернадского, 41с1. Офис 428.
                                    (м.
                                    Проспект Вернадского, первый вагон из центра). Самовывоз по Москве - бесплатно.
                                </div>
                            </div>
                            <div class="order-delivery-company-list">
                                <div class="order-delivery-company-list-item bx-selected">
                                    <div class="order-delivery-company-list-item__marker"></div>
                                    <div class="order-delivery-company-list-item__text">Московская область (СДЭК) - 350
                                        руб
                                    </div>
                                </div>
                                <div class="order-delivery-company-list-item">
                                    <div class="order-delivery-company-list-item__marker"></div>
                                    <div class="order-delivery-company-list-item__text">Почта России</div>
                                </div>
                                <div class="order-delivery-company-list-item">
                                    <div class="order-delivery-company-list-item__marker"></div>
                                    <div class="order-delivery-company-list-item__text">Курьер (в пределах МКАД) - 350
                                        руб.
                                    </div>
                                </div>
                                <div class="order-delivery-company-list-item">
                                    <div class="order-delivery-company-list-item__marker"></div>
                                    <div class="order-delivery-company-list-item__text">Курьером (за МКАД) - 500 руб.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-section order-delivery-props">
                        <div class="order-section__title">3. Адрес доставки</div>
                        <div class="order-props-fields">
                            <div class="order-props-group order-props-group-LOCATION">
                                <div class="order-props-select">
                                    <select type="text" class="order-props__control order-props-select__control">
                                        <option value="Россия">Россия</option>
                                        <option value="Беларусь>">Беларусь</option>
                                        <option value="Казахстан">Казахстан</option>
                                    </select>
                                    <div class="order-props-select__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" fill="none"
                                             viewBox="0 0 18 10">
                                            <path stroke="#3E3E3E" d="m1 1 8 8 8-8"/>
                                        </svg>
                                    </div>
                                    <div class="order-props__placeholder">Местоположение</div>
                                </div>
                            </div>
                            <div class="order-props-group order-props-group_has-error order-props-group-LOCATION">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Местоположение</div>
                            </div>
                            <div class="order-props-group order-props-group_has-error order-props-group-CITY">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Город</div>
                                <div class="order-props__error">Введите ваш Город</div>
                            </div>
                            <div class="order-props-group order-props-group-ADDRESS">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Адрес (улица, дом)</div>
                                <div class="order-props__error">Введите ваш Адрес</div>
                            </div>
                            <div class="order-props-group order-props-group-FLAT">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Квартира</div>
                            </div>
                            <div class="order-props-group order-props-group_has-error order-props-group-BUILDING">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Офис, стр.</div>
                                <div class="order-props__error">Введите ваш Офис</div>
                            </div>
                            <div class="order-props-group order-props-group-ZIP">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">П. Индекс</div>
                            </div>
                        </div>
                    </div>
                    <div class="order-section order-payment">
                        <div class="order-section__title">4. Оплата</div>
                        <div class="order-section__note">Все транзакции защищены и зашифрованы.</div>
                        <div class="order-error">
                            <div class="order-error__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                     viewBox="0 0 20 20">
                                    <path fill="#E80000"
                                          d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20Zm0-18.667a8.667 8.667 0 1 0 0 17.334 8.667 8.667 0 0 0 0-17.334Z"/>
                                    <path fill="#E80000"
                                          d="M10 15.338a1.333 1.333 0 1 1 0-2.666 1.333 1.333 0 0 1 0 2.666ZM10 11.333a.667.667 0 0 1-.666-.666v-6a.667.667 0 0 1 1.333 0v6a.667.667 0 0 1-.666.666Z"/>
                                </svg>
                            </div>
                            <div class="order-error__text">
                                Ваши платежные реквизиты не удалось подтвердить.<br> Проверьте данные вашей карты и повторите попытку.
                            </div>
                        </div>
                        <div class="order-payment-list">
                            <div class="order-payment-list-item bx-selected">
                                <div class="order-payment-list-item__marker"></div>
                                <div class="order-payment-list-item__text">
                                    Банковская карта
                                </div>
                            </div>
                            <div class="order-payment-list-item">
                                <div class="order-payment-list-item__marker"></div>
                                <div class="order-payment-list-item__text">
                                    Наличный расчет
                                </div>
                            </div>
                        </div>
                        <div class="order-payment-fields">
                            <div class="order-props-group order-props-group-CARD_NUMBER">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Номер карты</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="15" fill="none"
                                     viewBox="0 0 12 15">
                                    <path fill="#939393"
                                          d="M9.844 14.063H1.406A1.406 1.406 0 0 1 0 12.655V7.5a1.406 1.406 0 0 1 1.406-1.406h8.438A1.406 1.406 0 0 1 11.25 7.5v5.156a1.406 1.406 0 0 1-1.406 1.406ZM1.406 7.03a.469.469 0 0 0-.468.469v5.156a.469.469 0 0 0 .468.469h8.438a.469.469 0 0 0 .469-.469V7.5a.469.469 0 0 0-.47-.469H1.407Z"/>
                                    <path fill="#939393"
                                          d="M9.375 7.031h-7.5a.469.469 0 0 1-.469-.468V3.75A3.75 3.75 0 0 1 5.156 0h.938a3.75 3.75 0 0 1 3.75 3.75v2.813a.469.469 0 0 1-.469.468Zm-7.031-.937h6.562V3.75A2.813 2.813 0 0 0 6.094.937h-.938A2.813 2.813 0 0 0 2.344 3.75v2.344Z"/>
                                </svg>
                            </div>
                            <div class="order-props-group order-props-group-CARD_HOLDER">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Владелец карты</div>
                            </div>
                            <div class="order-props-group order-props-group-CARD_EXPIRE">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Срок дейтсвия (MM / YY)</div>
                            </div>
                            <div class="order-props-group order-props-group-CARD_CCV">
                                <input type="text" class="order-props__control" placeholder="">
                                <div class="order-props__placeholder">Код безопасности</div>
                            </div>
                        </div>
                    </div>
                    <div class="order-section order-bottom">
                        <button class="button button_filled-bg button_filled-violet order__button" type="button">
                            <img src="/local/assets/images/button-long.png" alt="" class="button__bg" loading="lazy">
                            <span class="button__text">Оформить</span>
                        </button>
                        <div class="order-uc">
                            <label for="USER_CONSENT" class="order-props-checkbox">
                                <input type="hidden" name="USER_CONSENT" value="N">
                                <input type="checkbox" name="USER_CONSENT" id="USER_CONSENT" value="Y">
                                <span class="order-props-checkbox__marker">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"><path fill="#fff"
                                                                       d="M20.293 5.293 9 16.586l-4.293-4.293-1.414 1.414L9 19.414 21.707 6.707l-1.414-1.414z"/></svg>
                                    </span>
                                <span class="order-props-checkbox__text">Я согласен(а) с правилами и условиями и <a
                                            href="#">политикой конфиденциальности</a></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="order-right">
                    <div class="order-total">
                        <div class="order-total-top">
                            <div class="order-total__title">Корзина</div>
                            <a href="#" class="order-total__link">Изменить</a>
                        </div>
                        <div class="order-total-list">
                            <div class="order-total-item">
                                <div class="order-total-item-image">
                                    <img src="/local/assets/images/catalog/image1.png"
                                         alt="Пептидный омолаживающий крем для кожи вокруг глаз против морщин и отеков "
                                         class="order-total-item-image__img">
                                </div>
                                <div class="order-total-item-content">
                                    <div class="order-total-item__title">Пептидный омолаживающий крем для кожи вокруг
                                        глаз против морщин и отеков
                                    </div>
                                    <div class="order-total-item__volume">
                                        Объем: 15мл
                                    </div>
                                    <div class="order-total-item__amount">
                                        Количество: <b>1 упаковка</b>
                                    </div>
                                </div>
                                <div class="order-total-item-price">
                                    <div class="order-total-item-price-base">
                                        <span class="order-total-item-price__value">1 590</span>
                                        <span class="order-total-item-price__currency">₽</span>
                                    </div>
                                </div>
                            </div>
                            <div class="order-total-item">
                                <div class="order-total-item-image">
                                    <img src="/local/assets/images/catalog/image1.png"
                                         alt="Пептидный омолаживающий крем для кожи вокруг глаз против морщин и отеков "
                                         class="order-total-item-image__img">
                                </div>
                                <div class="order-total-item-content">
                                    <div class="order-total-item__title">Пептидный омолаживающий крем для кожи вокруг
                                        глаз против морщин и отеков
                                    </div>
                                    <div class="order-total-item__volume">
                                        Объем: 15мл
                                    </div>
                                    <div class="order-total-item__amount">
                                        Количество: <b>1 упаковка</b>
                                    </div>
                                </div>
                                <div class="order-total-item-price">
                                    <div class="order-total-item-price-base">
                                        <span class="order-total-item-price__value">1 590</span>
                                        <span class="order-total-item-price__currency">₽</span>
                                    </div>
                                    <div class="order-total-item-price-old">
                                        <span class="order-total-item-price__value">2 590</span>
                                        <span class="order-total-item-price__currency">₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-total-sum">
                            <div class="order-total-sum-item">
                                <div class="order-total-sum-item__title">Промежуточный итог</div>
                                <div class="order-total-sum-item__value">1 590 ₽</div>
                            </div>
                            <div class="order-total-sum-item bx-highlighted">
                                <div class="order-total-sum-item__title">Доставка</div>
                                <div class="order-total-sum-item__value">Бесплатно</div>
                            </div>
                            <div class="order-total-sum-item order-total-sum-item_total">
                                <div class="order-total-sum-item__title">Итоговая цена</div>
                                <div class="order-total-sum-item__value">1 590 ₽</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? include 'include/footer.php';
