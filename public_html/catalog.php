<?php
$pageConfig = [
    'metaTitle' => 'Каталог',
    'title' => 'Каталог',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-catalog/bundle-catalog.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-catalog/bundle-catalog.js',
    ],
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
    <div class="container catalog-title-container">
        <h1 class="page__title catalog__title"><?= $pageConfig['title'] ?></h1>
        <div class="catalog__welcome">Добро пожаловать!</div>
    </div>
    <div class="catalog">
        <div class="container">
            <div class="catalog-top">
                <div class="catalog-jumbo">
                    <picture class="catalog-jumbo__picture">
                        <source media="(max-width: 767px)"
                                srcset="/local/assets/images/catalog/detail-picture-mobile.jpg">
                        <img src="/local/assets/images/catalog/detail-picture.jpg" width="1440" height="622"
                             alt="<?= $pageConfig['title'] ?>" class="catalog-jumbo__img" loading="lazy">
                    </picture>
                </div>
                <button class="catalog__anchor" type="button" data-src="#catalog-list">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" fill="none" viewBox="0 0 6 11">
                        <path fill="#fff"
                              d="M2.78 10.116a.312.312 0 0 0 .44 0l1.983-1.982a.312.312 0 1 0-.44-.441L3 9.455 1.238 7.693a.312.312 0 0 0-.44.44l1.982 1.983ZM2.688.286v9.61h.624V.286h-.624Z"/>
                    </svg>
                </button>
            </div>
            <div id="catalog-list" class="catalog-list-wrapper">
                <div class="page__title catalog-list__title">Уходовая Косметика</div>
                <?= $mustache->render('catalog-filter', include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog/filter.php') ?>
                <?= $mustache->render('catalog-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog/items.php') ?>
            </div>
        </div>
    </div>
<? include 'include/footer.php';
