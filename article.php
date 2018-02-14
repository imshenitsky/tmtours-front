<?php
$id           = $_GET['id'];
$article_path = "articles/$id.html";
$articles     = array(
                    'united-arab-emirates'      => 'Объединённые Арабские Эмираты',
                    'sri-lanka-journey'         => 'Шри-Ланка',
                    'sri-lanka-country'         => 'Шри-Ланка',
                    'egypt-country'             => 'Египет',
                    'turkey-country'            => 'Турция',
                    'montenegro-country'        => 'Черногория');

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
    .img.art_small_img {
        max-width: 280px;
    }
    .img.art_middle_img {
        max-width: 500px;
    }
    .img.art_big_img {
        max-width: 1000px;
    }
    .img.art_small_img img, .img.art_middle_img img, .img.art_big_img img{
        width: 100%;
        height: auto;
    }
    .img.leftimg {
        float:left;
        margin: 7px 20px 20px 0;
   }
   .img.rightimg  {
        float: right;
        margin: 8px 0px 20px 20px;
   }
    p {
        text-indent: 1.5em;
        text-align: justify;
    }
    @media screen and (max-width:900px){
        .img.art_small_img, .img.art_middle_img, .img.art_big_img{
            float: none;
            margin: 0 0 10px;
            max-width: 100%;
            width: 100%;
        }
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
$exclude_js = array('forms', 'map');
include 'footer.php';
?>