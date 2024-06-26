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
    <section class="brand-catalog">
        <div class="container">
            <?= $mustache->render('brand-catalog-filter', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/catalog/filter.php') ?>
            <div class="brand-catalog-info">
                <div class="brand-catalog-consul">
                    <div class="brand-catalog-consul__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
                            <rect width="32" height="32" fill="#F4F4F4" rx="6"/>
                            <path fill="#9484C1" fill-rule="evenodd"
                                  d="M13.764 12.064c-.155-.372-.272-.386-.507-.396-.08-.004-.17-.009-.268-.009-.306 0-.626.09-.819.287-.235.24-.818.8-.818 1.947 0 1.148.837 2.258.95 2.413.117.155 1.632 2.544 3.982 3.518 1.839.762 2.384.691 2.803.602.61-.132 1.377-.583 1.57-1.129.193-.545.193-1.011.136-1.11-.056-.099-.211-.155-.446-.273-.235-.117-1.378-.681-1.594-.757-.212-.08-.414-.051-.574.174-.225.316-.446.635-.625.828-.141.15-.371.17-.564.09-.259-.108-.983-.363-1.876-1.157-.692-.616-1.162-1.383-1.298-1.613-.136-.236-.014-.372.094-.499.118-.146.23-.25.348-.386.118-.136.183-.207.259-.367.08-.155.023-.315-.033-.432-.057-.118-.527-1.266-.72-1.731ZM15.998 8C11.588 8 8 11.588 8 16c0 1.75.564 3.372 1.523 4.689l-.996 2.972 3.075-.983a7.937 7.937 0 0 0 4.4 1.322C20.412 24 24 20.411 24 16s-3.587-8-7.998-8h-.004Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="brand-catalog-consul__text">Консультация <br class="mobile-hide tablet-show">по подбору
                        косметики
                    </div>
                </div>
                <div class="brand-catalog-consul-link-container">
                    <a href="#" class="brand-catalog-consul__link">
                        Пройти <em>тест из 5 вопросов</em>, чтобы узнать какие продукты подходят Вашей коже
                    </a>
                </div>
            </div>
            <?= $mustache->render('brand-catalog-slider', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/catalog/items.php') ?>
            <div class="brand-catalog-button-container">
                <a href="" class="button button_filled-violet button_filled-bg brand-catalog__button">
                    <img src="/local/assets/images/button.jpg" alt="" class="button__bg" loading="lazy">
                    <span class="button__text">Перейти в раздел</span>
                </a>
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
    <section class="brand-changes">
        <div class="container brand-changes-container">
            <div class="brand-changes-wrapper">
                <div class="brand-changes-rail">
                    <div class="brand-changes-stick">
                        <div class="brand-changes-inner">
                            <div class="brand-changes-left">
                                <div class="brand__title brand-changes__title">
                                    В течение первой недели вы почувствуете первые положительные изменения, которые будут нарастать.
                                </div>
                                <?= $mustache->render('brand-quote', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/changes/quote.php') ?>
                                <?= $mustache->render('brand-changes-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/changes/cards.php') ?>
                            </div>
                            <div class="brand-changes-right">
                                <?= $mustache->render('brand-quote', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/changes/quote.php') ?>
                                <?= $mustache->render('brand-changes-photos', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/changes/cards.php') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-points">
            <div class="container">
                <div class="brand-points-rail">
                    <div class="brand-points-stick">
                        <div class="brand-points-wrapper">
                            <div class="brand-points-inner">
                                <picture class="brand-points__picture">
                                    <source media="(max-width: 767px)"
                                            srcset="/local/assets/images/brand/changes/bg-mobile.png">
                                    <source media="(max-width: 1279px)"
                                            srcset="/local/assets/images/brand/changes/bg.jpg">
                                    <img src="/local/assets/images/brand/changes/bg.jpg"
                                         alt="Восстановление липидного барьера и борьба с обезвоженностью"
                                         class="brand-points__img" loading="lazy">
                                </picture>
                                <div class="brand-points-list">
                                    <div class="brand-point">
                                        <div class="brand-point-inner">
                                            <div class="brand-point-bg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="507" height="387"
                                                     fill="none" viewBox="0 0 507 387">
                                                    <path stroke="#fff" stroke-width="2"
                                                          d="M354.009 229.299 62.76 374.213c-10.502 5.225-23.016-1.505-24.446-13.149L2.544 69.731c-.674-5.479 4.274-9.977 9.665-8.786l330.079 72.893c46.968 10.372 54.785 74.034 11.721 95.461Z"/>
                                                    <circle cx="333" cy="183" r="49" stroke="#fff" stroke-width="2"/>
                                                </svg>
                                            </div>
                                            <div class="brand-point-marker-wrapper">
                                                <div class="brand-point-marker">
                                                    <div class="brand-point-marker__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="10"
                                                             viewBox="0 0 4 10"
                                                             fill="none">
                                                            <path fill="#5A5276"
                                                                  d="m.779 9.348.985-.772-.213-4.332-1.162-.76 2.7-.458-.483 5.035 1.35.841-3.177.446Zm2.379-7.84a.871.871 0 0 1-.075.357c-.05.109-.12.207-.208.295-.087.084-.188.15-.3.2a1.02 1.02 0 0 1-.735 0 .97.97 0 0 1-.295-.2 1.084 1.084 0 0 1-.201-.295.871.871 0 0 1-.076-.358c0-.13.025-.249.076-.358a.97.97 0 0 1 .2-.295A.884.884 0 0 1 1.84.66a.946.946 0 0 1 .734 0 .956.956 0 0 1 .509.49c.05.108.075.227.075.357Z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-comp">
                                            <div class="brand-comp-item brand-comp-item_before brand-comp_active">
                                                <div class="brand-comp__label brand-comp__label_before">До</div>
                                                <img src="/local/assets/images/brand/changes/skin/image1.jpg"
                                                     alt="До"
                                                     class="brand-comp-image__img">
                                            </div>
                                            <div class="brand-comp-item brand-comp-item_after">
                                                <div class="brand-comp__label brand-comp__label_after">После</div>
                                                <img src="/local/assets/images/brand/changes/skin/image2.jpg"
                                                     alt="После" class="brand-comp-image__img">
                                            </div>
                                            <div class="brand-comp__cursor">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="52"
                                                     fill="none" viewBox="0 0 35 52">
                                                    <path fill="#fff"
                                                          d="M13.772 0h8.084v52h-8.084zM34.791 26l-9.701-5.63v11.26L34.79 26ZM.837 26l9.701-5.63v11.26L.837 26Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="brand-point">
                                        <div class="brand-point-inner">
                                            <div class="brand-point-bg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="487" height="356"
                                                     fill="none" viewBox="0 0 487 356">
                                                    <path stroke="#fff" stroke-width="2"
                                                          d="m145.127 220.924 300.648 124.245c10.841 4.48 22.855-3.107 23.469-14.822l15.362-293.118c.289-5.513-4.961-9.655-10.255-8.092L150.16 124.88c-46.129 13.623-49.486 77.675-5.033 96.045Z"/>
                                                    <circle cx="163" cy="173" r="49" stroke="#fff" stroke-width="2"/>
                                                </svg>
                                            </div>
                                            <div class="brand-point-marker-wrapper">
                                                <div class="brand-point-marker">
                                                    <div class="brand-point-marker__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="10"
                                                             viewBox="0 0 4 10"
                                                             fill="none">
                                                            <path fill="#5A5276"
                                                                  d="m.779 9.348.985-.772-.213-4.332-1.162-.76 2.7-.458-.483 5.035 1.35.841-3.177.446Zm2.379-7.84a.871.871 0 0 1-.075.357c-.05.109-.12.207-.208.295-.087.084-.188.15-.3.2a1.02 1.02 0 0 1-.735 0 .97.97 0 0 1-.295-.2 1.084 1.084 0 0 1-.201-.295.871.871 0 0 1-.076-.358c0-.13.025-.249.076-.358a.97.97 0 0 1 .2-.295A.884.884 0 0 1 1.84.66a.946.946 0 0 1 .734 0 .956.956 0 0 1 .509.49c.05.108.075.227.075.357Z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-comp">
                                            <div class="brand-comp-item brand-comp-item_before brand-comp_active">
                                                <div class="brand-comp__label brand-comp__label_before">До</div>
                                                <img src="/local/assets/images/brand/changes/skin/image3.jpg"
                                                     alt="До"
                                                     class="brand-comp-image__img">
                                            </div>
                                            <div class="brand-comp-item brand-comp-item_after">
                                                <div class="brand-comp__label brand-comp__label_after">После</div>
                                                <img src="/local/assets/images/brand/changes/skin/image4.jpg"
                                                     alt="После" class="brand-comp-image__img">
                                            </div>
                                            <div class="brand-comp__cursor">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="52"
                                                     fill="none" viewBox="0 0 35 52">
                                                    <path fill="#fff"
                                                          d="M13.772 0h8.084v52h-8.084zM34.791 26l-9.701-5.63v11.26L34.79 26ZM.837 26l9.701-5.63v11.26L.837 26Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="brand-point">
                                        <div class="brand-point-inner">
                                            <div class="brand-point-bg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="507" height="387"
                                                     fill="none" viewBox="0 0 507 387">
                                                    <path stroke="#fff" stroke-width="2"
                                                          d="M354.009 157.145c43.063 21.427 35.247 85.088-11.721 95.46l-317.655 70.15c-11.455 2.53-21.97-7.028-20.54-18.672L39.866 12.75c.672-5.479 6.561-8.646 11.504-6.187l302.64 150.582Z"/>
                                                    <circle cx="334" cy="203" r="49" stroke="#fff" stroke-width="2"/>
                                                </svg>
                                            </div>
                                            <div class="brand-point-marker-wrapper">
                                                <div class="brand-point-marker">
                                                    <div class="brand-point-marker__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="10"
                                                             viewBox="0 0 4 10"
                                                             fill="none">
                                                            <path fill="#5A5276"
                                                                  d="m.779 9.348.985-.772-.213-4.332-1.162-.76 2.7-.458-.483 5.035 1.35.841-3.177.446Zm2.379-7.84a.871.871 0 0 1-.075.357c-.05.109-.12.207-.208.295-.087.084-.188.15-.3.2a1.02 1.02 0 0 1-.735 0 .97.97 0 0 1-.295-.2 1.084 1.084 0 0 1-.201-.295.871.871 0 0 1-.076-.358c0-.13.025-.249.076-.358a.97.97 0 0 1 .2-.295A.884.884 0 0 1 1.84.66a.946.946 0 0 1 .734 0 .956.956 0 0 1 .509.49c.05.108.075.227.075.357Z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-comp">
                                            <div class="brand-comp-item brand-comp-item_before brand-comp_active">
                                                <div class="brand-comp__label brand-comp__label_before">До</div>
                                                <img src="/local/assets/images/brand/changes/skin/image5.jpg"
                                                     alt="До"
                                                     class="brand-comp-image__img">
                                            </div>
                                            <div class="brand-comp-item brand-comp-item_after">
                                                <div class="brand-comp__label brand-comp__label_after">После</div>
                                                <img src="/local/assets/images/brand/changes/skin/image6.jpg"
                                                     alt="После" class="brand-comp-image__img">
                                            </div>
                                            <div class="brand-comp__cursor">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="52"
                                                     fill="none" viewBox="0 0 35 52">
                                                    <path fill="#fff"
                                                          d="M13.772 0h8.084v52h-8.084zM34.791 26l-9.701-5.63v11.26L34.79 26ZM.837 26l9.701-5.63v11.26L.837 26Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="brand-point">
                                        <div class="brand-point-inner">
                                            <div class="brand-point-bg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="529" height="423"
                                                     fill="none" viewBox="0 0 529 423">
                                                    <path stroke="#fff" stroke-width="2"
                                                          d="m160.597 238.191 277.51 169.747c10.007 6.121 23.06.507 25.499-10.968l61.027-287.106c1.147-5.4-3.389-10.312-8.863-9.596l-335.177 43.848c-47.693 6.239-61.028 68.977-19.996 94.075Z"/>
                                                    <circle cx="185" cy="194" r="49" stroke="#fff" stroke-width="2"/>
                                                </svg>
                                            </div>
                                            <div class="brand-point-marker-wrapper">
                                                <div class="brand-point-marker">
                                                    <div class="brand-point-marker__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="10"
                                                             viewBox="0 0 4 10"
                                                             fill="none">
                                                            <path fill="#5A5276"
                                                                  d="m.779 9.348.985-.772-.213-4.332-1.162-.76 2.7-.458-.483 5.035 1.35.841-3.177.446Zm2.379-7.84a.871.871 0 0 1-.075.357c-.05.109-.12.207-.208.295-.087.084-.188.15-.3.2a1.02 1.02 0 0 1-.735 0 .97.97 0 0 1-.295-.2 1.084 1.084 0 0 1-.201-.295.871.871 0 0 1-.076-.358c0-.13.025-.249.076-.358a.97.97 0 0 1 .2-.295A.884.884 0 0 1 1.84.66a.946.946 0 0 1 .734 0 .956.956 0 0 1 .509.49c.05.108.075.227.075.357Z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-comp">
                                            <div class="brand-comp-item brand-comp-item_before brand-comp_active">
                                                <div class="brand-comp__label brand-comp__label_before">До</div>
                                                <img src="/local/assets/images/brand/changes/skin/image7.jpg"
                                                     alt="До"
                                                     class="brand-comp-image__img">
                                            </div>
                                            <div class="brand-comp-item brand-comp-item_after">
                                                <div class="brand-comp__label brand-comp__label_after">После</div>
                                                <img src="/local/assets/images/brand/changes/skin/image8.jpg"
                                                     alt="После" class="brand-comp-image__img">
                                            </div>
                                            <div class="brand-comp__cursor">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="52"
                                                     fill="none" viewBox="0 0 35 52">
                                                    <path fill="#fff"
                                                          d="M13.772 0h8.084v52h-8.084zM34.791 26l-9.701-5.63v11.26L34.79 26ZM.837 26l9.701-5.63v11.26L.837 26Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-points-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="brand-points-slide swiper-slide">
                                        <div class="brand-points-slide-image-container">
                                            <div class="brand-points-slide-image-wrapper">
                                                <div class="brand-comp">
                                                    <div class="brand-comp-item brand-comp-item_before brand-comp_active">
                                                        <div class="brand-comp__label brand-comp__label_before">До</div>
                                                        <img src="/local/assets/images/brand/changes/skin/image1.jpg"
                                                             alt="До"
                                                             class="brand-comp-image__img">
                                                    </div>
                                                    <div class="brand-comp-item brand-comp-item_after">
                                                        <div class="brand-comp__label brand-comp__label_after">После
                                                        </div>
                                                        <img src="/local/assets/images/brand/changes/skin/image2.jpg"
                                                             alt="После" class="brand-comp-image__img">
                                                    </div>
                                                    <div class="brand-comp__cursor">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="52"
                                                             fill="none" viewBox="0 0 35 52">
                                                            <path fill="#fff"
                                                                  d="M13.772 0h8.084v52h-8.084zM34.791 26l-9.701-5.63v11.26L34.79 26ZM.837 26l9.701-5.63v11.26L.837 26Z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-points-slide__text">
                                            Осветление пигментации и выравнивание тона кожи
                                        </div>
                                    </div>
                                    <div class="brand-points-slide swiper-slide">
                                        <div class="brand-points-slide-image-container">
                                            <div class="brand-points-slide-image-wrapper">
                                                <div class="brand-comp">
                                                    <div class="brand-comp-item brand-comp-item_before brand-comp_active">
                                                        <div class="brand-comp__label brand-comp__label_before">До</div>
                                                        <img src="/local/assets/images/brand/changes/skin/image3.jpg"
                                                             alt="До"
                                                             class="brand-comp-image__img">
                                                    </div>
                                                    <div class="brand-comp-item brand-comp-item_after">
                                                        <div class="brand-comp__label brand-comp__label_after">После
                                                        </div>
                                                        <img src="/local/assets/images/brand/changes/skin/image4.jpg"
                                                             alt="После" class="brand-comp-image__img">
                                                    </div>
                                                    <div class="brand-comp__cursor">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="52"
                                                             fill="none" viewBox="0 0 35 52">
                                                            <path fill="#fff"
                                                                  d="M13.772 0h8.084v52h-8.084zM34.791 26l-9.701-5.63v11.26L34.79 26ZM.837 26l9.701-5.63v11.26L.837 26Z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-points-slide__text">
                                            Повышение плотности кожи и коррекция мелких морщинок
                                        </div>
                                    </div>
                                    <div class="brand-points-slide swiper-slide">
                                        <div class="brand-points-slide-image-container">
                                            <div class="brand-points-slide-image-wrapper">
                                                <div class="brand-comp">
                                                    <div class="brand-comp-item brand-comp-item_before brand-comp_active">
                                                        <div class="brand-comp__label brand-comp__label_before">До</div>
                                                        <img src="/local/assets/images/brand/changes/skin/image5.jpg"
                                                             alt="До"
                                                             class="brand-comp-image__img">
                                                    </div>
                                                    <div class="brand-comp-item brand-comp-item_after">
                                                        <div class="brand-comp__label brand-comp__label_after">После
                                                        </div>
                                                        <img src="/local/assets/images/brand/changes/skin/image6.jpg"
                                                             alt="После" class="brand-comp-image__img">
                                                    </div>
                                                    <div class="brand-comp__cursor">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="52"
                                                             fill="none" viewBox="0 0 35 52">
                                                            <path fill="#fff"
                                                                  d="M13.772 0h8.084v52h-8.084zM34.791 26l-9.701-5.63v11.26L34.79 26ZM.837 26l9.701-5.63v11.26L.837 26Z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-points-slide__text">
                                            Очищение кожи, профилактика высыпаний
                                        </div>
                                    </div>
                                    <div class="brand-points-slide swiper-slide">
                                        <div class="brand-points-slide-image-container">
                                            <div class="brand-points-slide-image-wrapper">
                                                <div class="brand-comp">
                                                    <div class="brand-comp-item brand-comp-item_before brand-comp_active">
                                                        <div class="brand-comp__label brand-comp__label_before">До</div>
                                                        <img src="/local/assets/images/brand/changes/skin/image7.jpg"
                                                             alt="До"
                                                             class="brand-comp-image__img">
                                                    </div>
                                                    <div class="brand-comp-item brand-comp-item_after">
                                                        <div class="brand-comp__label brand-comp__label_after">После
                                                        </div>
                                                        <img src="/local/assets/images/brand/changes/skin/image8.jpg"
                                                             alt="После" class="brand-comp-image__img">
                                                    </div>
                                                    <div class="brand-comp__cursor">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="52"
                                                             fill="none" viewBox="0 0 35 52">
                                                            <path fill="#fff"
                                                                  d="M13.772 0h8.084v52h-8.084zM34.791 26l-9.701-5.63v11.26L34.79 26ZM.837 26l9.701-5.63v11.26L.837 26Z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-points-slide__text">
                                            Восстановление липидного барьера и борьба с обезвоженностью
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="brand-section brand-reviews">
        <div class="container">
            <div class="brand-reviews-inner">
                <?= $mustache->render('brand-reviews-slider', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/reviews/reviews.php') ?>
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
                                <div class="brand-dispensers-bottle__text">25мл</div>
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
                                <div class="brand-dispensers-bottle__text">50мл</div>
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
                                <div class="brand-dispensers-bottle__text">100мл</div>
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
                                <div class="brand-dispensers-bottle__text">150мл</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="brand__anchor brand-dispensers__anchor" type="button" data-src="#notice">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" fill="none" viewBox="0 0 6 11">
                        <path fill="#534B6D"
                              d="M2.788 10.108a.3.3 0 0 0 .424 0l1.91-1.91a.3.3 0 0 0-.425-.424L3 9.471 1.303 7.774a.3.3 0 0 0-.424.425l1.909 1.909ZM2.7.286v9.61h.6V.286h-.6Z"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <section class="brand-section brand-notice" id="notice">
        <div class="container">
            <div class="brand-notice-top">
                <div class="brand__title brand-notice__title">Топ 6 причин использовать косметику Roz Mary</div>
                <a href="#" class="button button_filled-violet button_filled-bg brand-notice__link">
                    <img src="/local/assets/images/button.jpg" alt="Перейти в каталог" class="button__bg"
                         loading="lazy">
                    <span class="button__text">Перейти в каталог</span>
                </a>
            </div>
            <?= $mustache->render('brand-notice-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/notice/cards.php') ?>
        </div>
    </section>

<? include 'include/footer.php';
