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
            <div class="table-responsive">
                <div class="tour_search">
                    <div id="tour_search_module"></div>
                </div>
                <script src="https://www.ittour.com.ua/tour_search.jsx?id=39642D911705265G108O17928&ver=1&type=2970"></script>
            </div>
        </div>
    </section>
</div>

<?php
$exclude_js = ['forms', 'map'];
include 'footer.php';
?>