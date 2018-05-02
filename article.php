<?php
require_once 'functions.php';

$id           = $_GET['id'];
$article_path = "articles/$id.html";
$articles = array(
                    'united-arab-emirates' => array (
                        'title'       => 'Объединённые Арабские Эмираты',
                        'tagline'     => 'Роскошь востока',
                        'share_image' => app_url() . '/images/articles/oae1.jpg'
                     ),
                    'sri-lanka-journey' => array (
                        'title'         => 'Шри-Ланка',
                        'tagline'       => 'Недельный отдых на Шри-Ланке',
                        'share_image'   => 'https://s3-us-west-2.amazonaws.com/tmtours/articles/shri-lanka-2.jpg'
                     ),
                    'sri-lanka-country' => array (
                        'title'         => 'Шри-Ланка',
                        'tagline'       => 'На берегу океана',
                        'share_image'   => 'https://s3-us-west-2.amazonaws.com/tmtours/articles/shri-lanka-1.jpg'
                     ),
                    'egypt-country'     => array (
                        'title'         => 'Египет',
                        'tagline'       => 'Отдых на море',
                        'share_image'   => app_url() . '/images/articles/egypt1.jpg'
                     ),
                    'turkey-country'    => array (
                        'title'         => 'Турция',
                        'tagline'       => 'Страна семейного отдыха',
                        'share_image'   => 'https://s3-us-west-2.amazonaws.com/tmtours/articles/turkey/dalaman-turtsiya.jpg'
                     ),
                    'montenegro-country' => array (
                        'title'          => 'Черногория',
                        'tagline'        => 'Вершины величественных гор',
                        'share_image'    => 'https://s3-us-west-2.amazonaws.com/tmtours/articles/montenegro/mont1.jpg'
                     ),
                    'austria-country'    => array (
                        'title'          => 'Австрия',
                        'tagline'        => 'Овощам здесь не место',
                        'share_image'    => 'https://s3-us-west-2.amazonaws.com/tmtours/articles/austria/austria-2.jpg'
                     ),
                    'czech-country'      => array (
                        'title'          => 'Чехия',
                        'tagline'        => 'Удовольствие в любой сезон',
                        'share_image'    => 'https://s3-us-west-2.amazonaws.com/tmtours/articles/czech/c1.jpg'
                     )
                 );
if (file_exists($article_path)) {
    $header_title        = $articles[$id]['title'];
    $article_title       = $header_title;
    $article_tagline     = $articles[$id]['tagline'];
    $article_share_image = $articles[$id]['share_image'];
    $article_url         = app_url() . '/articles/' . $id;
    $facebook_share_url  = "http://www.facebook.com/sharer.php?u=" . $article_url;
    $google_share_url    = "https://plus.google.com/share?url=" . $article_url;
    $twitter_share_url   = "http://twitter.com/share?url=" . $article_url;

    $article_content     = file_get_contents($article_path);
} else {
    $header_title    = 'Статья не найдена';
    $article_content = 'Проверьте правильность написания';
}

// Header details
$body_class     = '';
include 'header.php';
?>
<div id="main">
    <section class="section main-section article">
        <div class="center">
            <h1><?= $header_title; ?></h1>
            <?= $article_content; ?>
            <br>
            <div class="ssba">
                <a href="<?=$facebook_share_url; ?>" target="_blank">
                    <img src="/images/facebook.png" title="Facebook" class="ssba ssba-img" alt="Share on Facebook">
                </a>
                <a href="<?=$google_share_url; ?>" target="_blank">
                    <img src="/images/google.png" title="Facebook" class="ssba ssba-img" alt="Share on Google+">
                </a>
                <a href="<?=$twitter_share_url; ?>" target="_blank">
                    <img src="/images/twitter.png" title="Facebook" class="ssba ssba-img" alt="Share on Twitter">
                </a>
            </div>
        </div>
    </section>
</div>

<?php
$exclude_js = array('forms', 'map');
include 'footer.php';
?>