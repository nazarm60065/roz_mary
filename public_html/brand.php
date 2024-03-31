<?php
$pageConfig = [
    'metaTitle' => 'О бренде',
    'title' => 'О бренде',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-brand/bundle-brand.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-brand/bundle-brand.js',
    ],
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>

    <section class="brand-top">
        <div class="container">
            <div class="brand-top-inner">
                <div class="brand-top__title">Roz Mary</div>
                <div class="brand-top__slogan">«<b>Roz Mary</b> создано <br>косметологом<br> и это по любви».</div>
                <?= $mustache->render('brand-top-cards', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/cards.php') ?>
                <?= $mustache->render('brand-top-person', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/person.php') ?>
                <button class="brand-top__anchor" type="button" data-src="#skin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" viewBox="0 0 6 11" fill="none">
                        <path fill="#fff"
                              d="M2.78 10.116a.311.311 0 0 0 .44 0l1.983-1.982a.312.312 0 1 0-.44-.441L3 9.455 1.238 7.693a.312.312 0 0 0-.44.44l1.982 1.983ZM2.688.286v9.61h.624V.286h-.624Z"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <section class="brand-skin" id="skin">
        <div class="container">
            <div class="brand-skin-rail">
                <div class="brand-skin-stick">
                    <div class="brand-skin-inner">
                        <?= $mustache->render('brand-skin-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/skin/cards.php') ?>
                        <?= $mustache->render('brand-quote', include $_SERVER['DOCUMENT_ROOT'] . '/context/skin/quote.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section style="height: 600px"></section>

<? include 'include/footer.php';
