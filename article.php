<?php
$id           = $_GET['id'];
$article_path = "articles/$id.html";
$articles     = array(
                    'united-arab-emirates'      => 'Объединённые Арабские Эмираты',
                    'sri-lanka-journey'         => 'Шри-Ланка',
                    'sri-lanka-country'         => 'Шри-Ланка',
                    'egypt-country'             => 'Египет',
                    'turkey-country'            => 'Турция',
                    'montenegro-country'        => 'Черногория',
                    'austria-country'           => 'Австрия',
                    'czech-country'             => 'Чехия');

if (file_exists($article_path)) {
    $header_title    = $articles[$id];
    $article_content = file_get_contents($article_path);
} else {
    $header_title    = 'Статья не найдена';
    $article_content = 'Проверьте правильность написания';
}

// Header details
$body_class     = '';
include 'header.php';
?>
<div id="main">
    <section class="section main-section">
        <div class="center">
            <h1><?= $header_title; ?></h1>
            <?= $article_content; ?>
        </div>
    </section>
</div>

<?php
$exclude_js = array('forms', 'map');
include 'footer.php';
?>