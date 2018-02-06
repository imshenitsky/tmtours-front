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
                <div id="tour_search_module"></div>
                <script src="https://www.ittour.com.ua/tour_search.jsx?id=298605DGO164481358193212&ver=1&type=2970"></script>
            </div>
        </div>
    </section>
</div>

<?php
$exclude_js = array('forms', 'map');
include 'footer.php';
?>