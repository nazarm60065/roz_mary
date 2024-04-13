<?php
$pageConfig = [
    'metaTitle' => 'Формы и модальные окна',
    'title' => 'Формы и модальные окна',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-form/bundle-form.js',
    ],
    'notShowNavChain' => true,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>

    <div class="container">
        <h1 class="page__title">Формы и модальные окна</h1>
        <div style="margin: 20px 0; color: #998BC4;">
            <a href="#auth-form" data-fancybox>
                Форма авторизации
            </a>
        </div>
        <div style="margin: 20px 0; color: #998BC4;">
            <a href="#reg-form" data-fancybox>
                Форма регистрации
            </a>
        </div>
        <div style="margin: 20px 0; color: #998BC4;">
            <a href="#success-message" data-fancybox>
                Модалка с сообщением
            </a>
        </div>
        <div style="margin: 20px 0;">
            <?= $mustache->render('cart-message', include $_SERVER['DOCUMENT_ROOT'] . '/context/cart-message.php'); ?>
        </div>

        <?= $mustache->render('modal-form', include $_SERVER['DOCUMENT_ROOT'] . '/context/form/auth-form.php'); ?>
        <?= $mustache->render('modal-form', include $_SERVER['DOCUMENT_ROOT'] . '/context/form/reg-form.php'); ?>
        <?= $mustache->render('success-message', include $_SERVER['DOCUMENT_ROOT'] . '/context/form/success-message.php'); ?>
    </div>

<? include 'include/footer.php';
