<?php
$header_title = 'Поиск тура';

// Header details
$body_class     = '';
include 'header.php';
?>

<div id="main">
    <section class="section main-section">
        <div class="center">
            <h1><?= $header_title; ?></h1>
            <div style="padding-left: 180px;">
                <div id="tour_search_module_mod2"></div>
                <script  src="http://module.ittour.com.ua/tour_search.jsx?id=621304D836GN304016886853&ver=2&type=2970"></script>
            </div>
        </div>
    </section>
</div>

<?php
$exclude_js = array('forms', 'map');
include 'footer.php';
?>