<?php
$id           = $_GET['id'];
$article_path = "articles/$id.html";
$articles     = ['detroit-aka-motor-city' => 'Detroit aka Motor City'];

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

<style>
    .art_small_img {
        width: 280px;
        height: 200px;
    }
    .art_middle_img {
        width: 500px;
        height: 310px;
    }
    .art_big_img {
        width: 1000px;
        height: 710px;
    }
</style>
<div id="main">
    <section class="section main-section">
        <div class="center">
            <h1><?= $header_title; ?></h1>
            <?= $article_content; ?>
        </div>
    </section>
</div>

<?php
$exclude_js = ['forms', 'map'];
include 'footer.php';
?>