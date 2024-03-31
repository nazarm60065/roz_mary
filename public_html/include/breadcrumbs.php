<?
/** @var array $pageConfig */
/** @var Mustache_Engine $mustache */

echo '<div class="container">';
echo $mustache->render('breadcrumbs', include $_SERVER['DOCUMENT_ROOT'] . '/context/brand/breadcrumbs.php');
echo '</div>';
