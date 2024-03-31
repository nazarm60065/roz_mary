<?
/** @var array $pageConfig */

include $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

$mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/assets/mustache/'),
));

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <? if ($pageConfig['metaTitle']): ?><title><?= $pageConfig['metaTitle'] ?></title><? endif; ?>
    <? if (!empty($pageConfig['inlineCss'])): ?>
        <? foreach ($pageConfig['inlineCss'] as $path) {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $path)) {
                echo '<style>' . file_get_contents($_SERVER['DOCUMENT_ROOT'] . $path) . '</style>';
            }
        } ?>
    <? endif; ?>
</head>
<body class="page">
<div class="free-devilery"><img src="/local/assets/images/free-devilery.svg" alt=""/><strong>Бесплатная доставка по
        России при заказе
        от 5000 руб.</strong></div>
<header class="header">
    <div class="container-fluid">
        <div class="header-grid">
            <div class="header-left"><a class="logo" href="#"><img src="/local/assets/images/logo.svg" alt=""/>
                    <div class="logo__title">Roz Mary</div>
                </a><a class="consultation" href="#">
                    <div class="consultation__icon">
                        <svg class="icon">
                            <use xlink:href="/local/assets/images/sprite.svg#whatsapp"></use>
                        </svg>
                    </div>
                    <span>Консультация <br>по подбору косметики</span></a></div>
            <div class="header-right">
                <div class="header-head">
                    <div class="contacts-head"><a class="contacts-phone" href="tel:+79851448085">
                            <svg class="icon">
                                <use xlink:href="/local/assets/images/sprite.svg#phone"></use>
                            </svg>
                            <span>+7 (985) 144-80-85</span></a>
                        <div class="contacts-date"><strong>Режим работы: </strong>С 10:00 до 19:00 по МСК</div>
                    </div>
                    <a class="button-login" href="">Кабинет партнера</a>
                    <div class="social">
                        <div class="social__title">Присоединяйтесь <br>в социальных сетях:</div>
                        <ul class="social-list">
                            <li class="social__item"><a class="social__link" href="#">
                                    <svg class="icon">
                                        <use xlink:href="/local/assets/images/sprite.svg#vk"></use>
                                    </svg>
                                </a></li>
                            <li class="social__item"><a class="social__link" href="#">
                                    <svg class="icon">
                                        <use xlink:href="/local/assets/images/sprite.svg#inst"></use>
                                    </svg>
                                </a></li>
                            <li class="social__item"><a class="social__link" href="#">
                                    <svg class="icon">
                                        <use xlink:href="/local/assets/images/sprite.svg#tg"></use>
                                    </svg>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="header__bottom">
                    <div class="search">
                        <div class="search__icon">
                            <svg class="icon">
                                <use xlink:href="/local/assets/images/sprite.svg#search"></use>
                            </svg>
                        </div>
                        <input class="search__input" type="text" placeholder="Поиск по товарам"/>
                    </div>
                    <a class="button header-basket" href="#" data-count="1">
                        <svg class="icon">
                            <use xlink:href="/local/assets/images/sprite.svg#shopping-cart"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="header-mobile">
    <div class="container-fluid">
        <div class="header-mobile-main">
            <div class="open-menu js-open-menu"></div>
            <a class="logo" href="#"><img src="/local/assets/images/logo.svg" alt=""/>
                <div class="logo__title">Roz Mary</div>
            </a><a class="button header-basket" href="#" data-count="1">
                <svg class="icon">
                    <use xlink:href="/local/assets/images/sprite.svg#shopping-cart"></use>
                </svg>
            </a>
        </div>
    </div>
</header>
<div class="menu-mobile">
    <div class="menu-mobile-wrapper">
        <div class="menu-mobile-title js-close-menu">Меню</div>
        <div class="search">
            <div class="search__icon">
                <svg class="icon">
                    <use xlink:href="/local/assets/images/sprite.svg#search"></use>
                </svg>
            </div>
            <input class="search__input" type="text" placeholder="Поиск по товарам"/>
        </div>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="#">О бренде</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Вся косметика</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Уход для сухой кожи</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Уход для нормальной кожи</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Для жирной и проблемной кожи</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Антивозрастной уход</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Очищение и тонизация</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Кремы и сыворотки</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Маски и пилинги</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Для тела</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Защита от солнца</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Эфирные масла</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Аромабоксы</a></li>
            <li class="menu__item menu__item--mobile"><a class="menu__link" href="#"> <strong>Доставка и оплата</strong></a>
            </li>
        </ul>
        <div class="contacts-head"><a class="contacts-phone" href="tel:+79851448085">
                <svg class="icon">
                    <use xlink:href="/local/assets/images/sprite.svg#phone"></use>
                </svg>
                <span>+7 (985) 144-80-85</span></a>
            <div class="contacts-date"><strong>Режим работы: </strong>С 10:00 до 19:00 по МСК</div>
        </div>
        <a class="button-login w-100" href="">Кабинет партнера</a>
        <div class="mb-2"><a class="consultation mb-1" href="#">
                <div class="consultation__icon">
                    <svg class="icon">
                        <use xlink:href="/local/assets/images/sprite.svg#whatsapp"></use>
                    </svg>
                </div>
                <span>Консультация по подбору косметики</span></a><a class="consultation"
                                                                     href="mailto:info@rozmary.shop">
                <div class="consultation__icon">
                    <svg class="icon">
                        <use xlink:href="/local/assets/images/sprite.svg#email"></use>
                    </svg>
                </div>
                <span>E-mail: info@rozmary.shop</span></a></div>
        <div class="social mb-3">
            <div class="social__title">Присоединяйтесь <br>в социальных сетях:</div>
            <ul class="social-list">
                <li class="social__item"><a class="social__link" href="#">
                        <svg class="icon">
                            <use xlink:href="/local/assets/images/sprite.svg#vk"></use>
                        </svg>
                    </a></li>
                <li class="social__item"><a class="social__link" href="#">
                        <svg class="icon">
                            <use xlink:href="/local/assets/images/sprite.svg#inst"></use>
                        </svg>
                    </a></li>
                <li class="social__item"><a class="social__link" href="#">
                        <svg class="icon">
                            <use xlink:href="/local/assets/images/sprite.svg#tg"></use>
                        </svg>
                    </a></li>
            </ul>
        </div>
        <ul class="mobile-links">
            <li class="mobile-links__item"><a class="mobile-links__link" href="">Политика конфиденциальности</a></li>
            <li class="mobile-links__item"><a class="mobile-links__link" href="">Пользовательское соглашение</a></li>
            <li class="mobile-links__item"><a class="mobile-links__link" href=""> Публичная оферта</a></li>
        </ul>
        <div class="row">
            <div class="col">
                <div class="copy-text">
                    <div class="d-block">© 2023 Roz Mary</div>
                    <span>Все права защищены.</span>
                </div>
            </div>
            <div class="col-auto"><a class="button up-menu">
                    <svg class="icon">
                        <use xlink:href="/local/assets/images/sprite.svg#arrow-next"></use>
                    </svg>
                </a></div>
        </div>
    </div>
</div>
<main class="main">
    <? if (empty($pageConfig['notShowNavChain'])) include 'breadcrumbs.php' ?>

