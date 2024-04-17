<?php
$pageConfig = [
    'metaTitle' => 'Кабинет партнера',
    'title' => 'Кабинет партнера',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-partner/bundle-partner.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-partner/bundle-partner.js',
    ],
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
    <div class="partner">
        <div class="container">
            <div class="partner-top">
                <h1 class="page__title partner__title">Кабинет партнера</h1>
                <div class="partner-logout">
                    <a href="?logout=y" class="partner-logout__link">Выйти</a>
                </div>
            </div>
            <div class="partner__text">
                <p>Добро пожаловать, Ольга!</p>
                <p>
                    Делитесь уникальной ссылкой с вашими друзьями и близкими. <b>10% стоимости от всех заказов,
                        сделанных по этой ссылке, будут начисляться на Ваш счет.</b>
                </p>
            </div>
            <div class="partner-share">
                <div class="partner-share__title">Ваша партнерская ссылка:</div>
                <div class="partner-share-group">
                    <input type="text" class="partner-share__control" value="https://rozmary.shop/?pk=8447" id="copy-control">
                    <button class="partner-share__copy" type="button" data-clipboard-target="#copy-control">Копировать</button>
                </div>
            </div>
            <div class="partner-info">
                <div class="partner-info-header">
                    <div class="partner-info-cell">Доступно к выплате</div>
                    <div class="partner-info-cell">Всего заработано</div>
                    <div class="partner-info-cell">Всего заказов сделано по вашей ссылке</div>
                </div>
                <div class="partner-info-stats">
                    <div class="partner-stats">
                        <div class="partner-stats__title">Доступно к выплате</div>
                        <div class="partner-stats__text">0 рублей</div>
                    </div>
                    <div class="partner-stats">
                        <div class="partner-stats__title">Всего заработано</div>
                        <div class="partner-stats__text">0 рублей</div>
                    </div>
                    <div class="partner-stats">
                        <div class="partner-stats__title">Всего заказов сделано по вашей ссылке</div>
                        <div class="partner-stats__text">0 шт</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? include 'include/footer.php';
