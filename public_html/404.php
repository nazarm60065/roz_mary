<?php
$pageConfig = [
    'metaTitle' => 'Страница не найдена',
    'title' => 'Страница не найдена',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-error/bundle-error.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-error/bundle-error.js',
    ],
    'notShowNavChain' => true,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
    <div class="error">
        <div class="container">
            <div class="error-image">
                <picture class="error-image__picture">
                    <source media="(max-width: 767px)" srcset="/local/assets/images/404-mobile.png">
                    <img src="/local/assets/images/404.png" width="776" height="303" alt="404" class="error-image__img">
                </picture>
            </div>
            <div class="error-content">
                <b>Этой страницы не существует.</b><br class="tablet-hide"> Пожалуйста, перейдите на <a
                        href="/">главную</a> или вернитесь назад
            </div>
        </div>
    </div>
<? include 'include/footer.php';
