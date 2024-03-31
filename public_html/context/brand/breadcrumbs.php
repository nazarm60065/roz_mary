<?

return [
    'breadcrumbs' => [
        'items' => [
            [
                'href' => '/',
                'text' => 'Главная страница',
                'isLast' => false,
            ],
            [
                'href' => '',
                'text' => 'О бренде',
                'isLast' => true,
            ],
        ]
    ],

    // https://developers.google.com/search/docs/appearance/structured-data/breadcrumb?hl=ru
    'schema' => json_encode([
        "@context" => "https://schema.org/",
        "@type" => "BreadcrumbList",
        "itemListElement" => [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Главная страница",
                "item" => "http://rozmary.local/"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "О бренеде",
                "item" => "http://rozmary.local/brand/"
            ]
        ]
    ])
];