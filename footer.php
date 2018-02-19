        <footer id="footer">
            <div class="center">
                <div class="f-holder">
                    <strong class="logo"><a href="/"></a></strong>
                    <ul class="socials">
                        <li><a href="https://www.facebook.com/tmtours.com.ua/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-vk"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-telegram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
                <div class="f-block">
                    <h5>Свяжитесь с нами</h5>
                    <div class="row">
                        <i class="fa fa-phone"></i>
                        <span><a href="tel:+38 097 417 45 35">(097) 417-45-35</a></span>
                        <span><a href="tel:+38 067 614 67 86">(067) 614-67-86</a></span>
                    </div>
                    <div class="row">
                        <i class="fa fa-map-marker"></i>
                        <span>г.Харьков, </span>
                        <span>Театральный переулок, 4</span>
                    </div>
                    <div class="row">
                        <i class="fa fa-envelope-o"></i>
                        <span><a class="f-email" href="mailto:sales@tmtours.com.ua">sales@tmtours.com.ua</a></span>
                    </div>
                    <div class="row">
                        <i class="fa fa-clock-o"></i>
                        <span>Пн-Пт: с 10-00 до 18-00</span>
                        <span>Сб: по договоренности</span>
                        <span>Вс: выходной</span>
                    </div>
                </div>
                <span class="copy">&copy; TmTours <?php echo date("Y"); ?></span>
            </div>
        </footer>
		</div>
		<a href="#" class="btn-top"><i class="fa fa-chevron-up"></i></a>
		<div id="showcase_indexed_data" style="display: none;"></div>
		<?php include 'book_showcase_modal.php'; ?>
		<?php include 'book_tour_modal.php'; ?>
		<script>
            var api_url = '<?php echo api_url(); ?>';
		</script>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800,800italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
		<link rel="stylesheet" href="/css/animate.css" type="text/css" />
		<link rel="stylesheet" href="/css/main.css" type="text/css" />
		<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="/js/wow.js"></script>
		<script type="text/javascript" src="/js/plugins-scroll.js"></script>
		<script type="text/javascript" src="/js/slick.min.js"></script>
		<script type="text/javascript" src="/js/jquery-ui.1.10.3.min.js"></script>
		<script type="text/javascript" src="/js/jquery.ui.datepicker-ru.js"></script>
		<script type="text/javascript" src="/js/masked-input.js"></script>
		<script type="text/javascript" src="/js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
		<link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
		<script type="text/javascript" src="/js/fancybox/jquery.fancybox.pack.js?v=2.1.4"></script>
		<link rel="stylesheet" href="/js/fancybox/helpers/jquery.fancybox-buttons.css?v=2.1.4" type="text/css" media="screen" />
		<script type="text/javascript" src="/js/fancybox/helpers/jquery.fancybox-buttons.js?v=2.1.4"></script>
		<link rel="stylesheet" href="/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=2.1.4" type="text/css" media="screen" />
		<script type="text/javascript" src="/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=2.1.4"></script>
        <script type="text/javascript" src="/js/jquery.main.js"></script>
		<?php if (!in_array("forms", $exclude_js)) { ?>
		    <script type="text/javascript" src="/js/tmtours.jquery.form.js"></script>
		    <script type="text/javascript" src="/js/tmtours.jquery.showcase.js"></script>
		    <script type="text/javascript" src="/js/tmtours.jquery.order.js"></script>
		<?php }	?>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

		<?php if (!in_array("map", $exclude_js)) { ?>
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZBMIuroFtRaIq1njmlOgKlipMOeg9gcE"></script>
            <script type="text/javascript">
                google.maps.event.addDomListener(window, 'load', init);
                function init() {
                    viewMap();
                    function viewMap(){
                        var mapOptions = {
                            zoom: 18,
                            center: new google.maps.LatLng(49.994584,36.236568),
                            scrollwheel: false,
                            zoomControl: false,
                            scaleControl: false,
                            mapTypeControl: false,
                            streetViewControl: false
                        };
                        var mapElement = document.getElementById('map');
                        var map = new google.maps.Map(mapElement, mapOptions);
                        var contentString = '<div class="tooltip-map"><div class="address">Театральный переулок, 4 <br/> 5 Этаж</div><span class="tel">т. (097) 417-45-35</span></div>';
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });
                        var marker = new google.maps.Marker({
                            position: new google.maps.LatLng(49.994384,36.236568),
                            icon: 'images/map-logo2.png',
                            map: map
                       });
                        setTimeout(function(){
                            infowindow.open(map,marker);
                       },200);
                    }
                }
            </script>
        <?php }	?>
	</body>
</html>