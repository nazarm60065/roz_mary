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
                <?= $mustache->render('brand-top-cards', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/top/cards.php') ?>
                <?= $mustache->render('brand-top-person', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/top/person.php') ?>
                <button class="brand__anchor brand-top__anchor" type="button" data-src="#skin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" viewBox="0 0 6 11" fill="none">
                        <path fill="#fff"
                              d="M2.78 10.116a.311.311 0 0 0 .44 0l1.983-1.982a.312.312 0 1 0-.44-.441L3 9.455 1.238 7.693a.312.312 0 0 0-.44.44l1.982 1.983ZM2.688.286v9.61h.624V.286h-.624Z"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <section class="brand-section brand-skin" id="skin">
        <div class="container">
            <div class="brand-skin-rail">
                <div class="brand-skin-stick">
                    <div class="brand-skin-inner">
                        <?= $mustache->render('brand-skin-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/skin/cards.php') ?>
                        <?= $mustache->render('brand-quote', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/skin/quote.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="brand-section brand-tech">
        <div class="container">
            <div class="brand-tech__text brand-tech__text_top">
                Каждый продукт проходит сертификацию, лабораторные исследования, имеет протоколы испытаний, декларацию
                соответствия, тестируется на фокус группе до выпуска партии и также проходит пост маркетинговые
                исследования.
            </div>
            <?= $mustache->render('brand-tech-slider', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/tech/cards.php') ?>
            <div class="brand-tech__text brand-tech__text_bottom">
                Косметика Roz Mary производится на
                нескольких высокотехнологичных заводах
                в Подмосковье при участии ведущих
                биохимиков, технологов и дерматологов.
            </div>
        </div>
    </section>
    <section class="brand-section brand-delivery">
        <div class="container">
            <div class="brand-delivery-inner">
                <div class="brand-delivery-top">
                    <div class="brand__title brand-delivery__title">«Система доставки»</div>
                    <?= $mustache->render('brand-quote', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/delivery/quote.php') ?>
                </div>
                <?= $mustache->render('brand-delivery-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/delivery/cards.php') ?>
            </div>
        </div>
    </section>
    <section class="brand-section brand-dispensers">
        <div class="container">
            <div class="brand-dispensers-rail">
                <div class="brand-dispensers-stick">
                    <div class="brand__title brand-dispensers__title">
                        Вакуумные диспенсеры
                    </div>
                    <div class="brand-dispensers-inner">
                        <?= $mustache->render('brand-quote', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/dispensers/quote.php') ?>
                        <div class="brand-dispensers-scene">
                            <div class="brand-dispensers-bottle brand-dispensers-bottle_sm">
                                <div class="brand-dispensers-bottle-container">
                                    <div class="brand-dispensers-bottle-inner">
                                        <div class="brand-dispensers-bottle-top">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image3-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image3.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                        <div class="brand-dispensers-bottle-middle">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image2-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image2.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                        <div class="brand-dispensers-bottle-bottom">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image1-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image1.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-dispensers-bottle brand-dispensers-bottle_md">
                                <div class="brand-dispensers-bottle-container">
                                    <div class="brand-dispensers-bottle-inner">
                                        <div class="brand-dispensers-bottle-top">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image3-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image3.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                        <div class="brand-dispensers-bottle-middle">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image2-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image2.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                        <div class="brand-dispensers-bottle-bottom">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image1-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image1.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-dispensers-bottle brand-dispensers-bottle_lg">
                                <div class="brand-dispensers-bottle-container">
                                    <div class="brand-dispensers-bottle-inner">
                                        <div class="brand-dispensers-bottle-top">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image3-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image3.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                        <div class="brand-dispensers-bottle-middle">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image2-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image2.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                        <div class="brand-dispensers-bottle-bottom">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image1-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image1.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-dispensers-bottle brand-dispensers-bottle_xl">
                                <div class="brand-dispensers-bottle-container">
                                    <div class="brand-dispensers-bottle-inner">
                                        <div class="brand-dispensers-bottle-top">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image3-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image3.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                        <div class="brand-dispensers-bottle-middle">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image2-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image2.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                        <div class="brand-dispensers-bottle-bottom">
                                            <picture class="brand-dispensers-bottle__picture">
                                                <source media="(max-width: 767px)"
                                                        srcset="/local/assets/images/brand/dispenser/image1-mobile.png">
                                                <img src="/local/assets/images/brand/dispenser/image1.png" alt=""
                                                     class="brand-dispensers-bottle__img">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="brand__anchor brand-dispensers__anchor" type="button" data-src="#adv">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" fill="none" viewBox="0 0 6 11"><path fill="#534B6D" d="M2.788 10.108a.3.3 0 0 0 .424 0l1.91-1.91a.3.3 0 0 0-.425-.424L3 9.471 1.303 7.774a.3.3 0 0 0-.424.425l1.909 1.909ZM2.7.286v9.61h.6V.286h-.6Z"/></svg>
                </button>
            </div>
        </div>
    </section>
    <section class="brand-section brand-adv" id="adv">
        <div class="container">
            <div class="brand-adv-top">
                <div class="brand__title brand-adv__title">Топ 6 причин использовать косметику Roz Mary</div>
                <a href="#" class="button button_filled-violet brand-adv__link">Перейти в каталог</a>
            </div>
            <?= $mustache->render('brand-adv-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/adv/cards.php') ?>
        </div>
    </section>

<? include 'include/footer.php';
