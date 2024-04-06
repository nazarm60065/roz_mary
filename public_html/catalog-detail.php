<?php
$pageConfig = [
    'metaTitle' => 'Детальная Каталога',
    'title' => 'Увлажняющий тоник для восстановления микробиома и рН кожи',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-catalog-detail/bundle-catalog-detail.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-catalog-detail/bundle-catalog-detail.js',
    ],
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
    <div class="catalog-detail">
        <div class="container">
            <?= $mustache->render('catalog-detail-top', include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog-detail/info.php') ?>
            <?= $mustache->render('catalog-detail-accordion', include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog-detail/accordion.php') ?>
            <?= $mustache->render('catalog-detail-tab', include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog-detail/accordion.php') ?>
        </div>
    </div>
<? include 'include/footer.php';
