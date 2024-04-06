<?

$description = include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog-detail/description.php';
$compose = include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog-detail/compose.php';
$docs = include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog-detail/docs.php';
$application = include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog-detail/application.php';

return [
    'issetItems' => true,
    'items' => [
        $description['description'],
        $compose['compose'],
        $docs['docs'],
        $application['application'],
    ]
];