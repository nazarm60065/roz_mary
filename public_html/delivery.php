<?php
$pageConfig = [
    'metaTitle' => 'Доставка',
    'title' => 'Доставка',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-delivery/bundle-delivery.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-delivery/bundle-delivery.js',
    ],
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
    <div class="delivery">
        <div class="container">
            <h1 class="page__title delivery__title"><?= $pageConfig['title'] ?></h1>
            <?= $mustache->render('delivery-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/delivery/items.php'); ?>
            <div class="delivery-payment">
                <div class="delivery-payment__title">Оплата</div>
                <div class="article">
                    <p>Для выбора оплаты товара с помощью банковской карты на соответствующей странице необходимо нажать
                        кнопку Оплата заказа банковской картой. Оплата происходит через ПАО СБЕРБАНК с использованием
                        банковских карт следующих платёжных систем:</p>
                    <?= $mustache->render('article-image', [
                        'image' => [
                            'src' => '/local/assets/images/payment.png',
                            'width' => '372',
                            'height' => '43',
                            'alt' => 'Оплата',
                        ]
                    ]); ?>
                    <p>
                        Для оплаты (ввода реквизитов Вашей карты) Вы будете перенаправлены на платёжный шлюз ПАО
                        СБЕРБАНК. Соединение с платёжным шлюзом и передача информации осуществляется в защищённом режиме
                        с использованием протокола шифрования SSL.
                        В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified
                        By Visa, MasterCard SecureCode, MIR Accept, J-Secure, для проведения платежа также может
                        потребоваться ввод специального пароля.
                    </p>
                    <p>
                        Настоящий сайт поддерживает 256-битное шифрование. Конфиденциальность сообщаемой персональной
                        информации обеспечивается ПАО СБЕРБАНК. Введённая информация не будет предоставлена третьим
                        лицам за исключением случаев, предусмотренных законодательством РФ. Проведение платежей по
                        банковским картам осуществляется в строгом соответствии с требованиями платёжных систем.
                    </p>
                </div>
            </div>
        </div>
    </div>
<? include 'include/footer.php';
