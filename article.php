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
    .leftimg {
        float:left;
        margin: 7px 17px 7px 0;
   }
   .rightimg  {
        float: right;
        margin: 8px 0px 0px 25px;
   }
    p {
        text-indent: 1.5em;
        text-align: justify;
        margin: 0px !important;
        padding: 0px !important;
    }
    ul.ort {
        margin: 2px 30px 2px;
        list-style: outside;
    }
</style>
<div id="main">
    <section class="section main-section">
        <div class="center">
            <h1><?= $header_title; ?></h1>
            <?= $article_content; ?>
            <ul class="list">
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
            </ul>
        </div>
    </section>
</div>

<?php
$exclude_js = array('forms', 'map');
include 'footer.php';
?>