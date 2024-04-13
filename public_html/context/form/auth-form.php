<?

$mustache = new Mustache_Engine([
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/assets/mustache/')
]);

return [
    'ajax_component_id' => 'auth-form',
    'action' => '',
    'title' => 'Кабинет партнера',
    'sub_title' => '<p>После регистрации в партнерской программе Roz Mary в своем личном кабинете
<b>вы найдете уникальную ссылку.</b></p>
<p>Делитесь ею с Вашими друзьями и близкими. <b>10% стоимости от всех заказов, сделанных по этой ссылке, будут начисляться на Ваш счет.</b></p>
<p>Полную детализацию заказов и начислений вы так же увидите в личном кабинете.</p>',
    'form_header' => 'Вход',
    'submit_text' => 'Войти',
    'errors' => [
        'Слово для защиты от автоматической регистрации введено неверно.',
        'Такой логин или E-Mail уже авторизирован.',
    ],
    'html_fields' => [
        [
            'html' => $mustache->render('form__control_type_text', [
                'placeholder' => 'Логин',
                'code' => 'LOGIN',
                'required' => true,
                'requiredCssClass' => 'form__control_required',
                'additional_css_class' => '',
                'inputmode' => 'text',
                'label' => '',

                'has_error' => true,
                'error_message' => 'Обязательное поле',
                'value' => 'Login',
            ])
        ],
        [
            'html' => $mustache->render('form__control_type_password', [
                'placeholder' => 'Пароль',
                'code' => 'PASSWORD',
                'required' => true,
                'requiredCssClass' => 'form__control_required',
                'maskCssClass' => '',
                'inputmode' => '',
                'label' => '',
            ])
        ],
    ],
    'remember' => true,
    'forgot_link' => '#',
    'footer_text' => 'Если вы впервые на сайте, заполните, пожалуйста,<br> регистрационную форму. <a href="#" class="form__link">Зарегистрироваться</a>'
    //'user_consent' => 'Я согласен на обработку <a href="/privacy-policy/" rel="nofollow" target="_blank">персональных данных</a>',
];