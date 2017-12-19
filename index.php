<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="format-detection" content="telephone=no"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>TMTours</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-180x180.png" />
		<style>.request-popup{left:-9999px;top:-9999px;}.main-preloader-body{position:fixed;z-index:2000;left:0;top:0;width:100%;height:100%;background-color:#fff;-webkit-transition:opacity .2s linear;transition:opacity .2s linear}.main-preloader{position:fixed;top:50%;left:50%;margin:-10px 0 0 -50px}.main-preloader span{position:absolute;width:20px;height:20px;background:#50B557;opacity:.5;border-radius:20px;animation:preloader 1s infinite ease-in-out}.main-preloader span:nth-child(2){left:20px;animation-delay:.2s}.main-preloader span:nth-child(3){left:40px;animation-delay:.4s}.main-preloader span:nth-child(4){left:60px;animation-delay:.6s}.main-preloader span:nth-child(5){left:80px;animation-delay:.8s}@keyframes preloader{0%,100%{opacity:.3;transform:translateY(0);box-shadow:0 0 3px rgba(0,0,0,.1)}50%{opacity:1;transform:translateY(-10px);background:#4E4E4E;box-shadow:0 20px 3px rgba(0,0,0,.05)}}</style>
	</head>
	<body class="index">
		<div class="main-preloader-body">
			<div class="main-preloader">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div id="wrapper">
			<header id="header">
				<strong class="logo"><a href="index.html"></a></strong>
				<nav id="nav">
					<a class="btn-open" href="#"><span></span></a>
					<ul>
						<li><a href="tour-search.html">Поиск тура</a></li>
						<li class="nav-item"><a href="#2">Горящие туры</a></li>
						<li class="nav-item"><a href="#3">Заказать тур</a></li>
						<li class="nav-item"><a href="#4">Преимущества работы</a></li>
						<li class="nav-item"><a href="#5">Контакты</a></li>
					</ul>
				</nav>
				<div class="mobile-sidebar">
					<a class="btn-close" href="#"><span></span></a>
					<div class="mobile-menu">
						<ul>
							<li><a href="tour-search.html">Поиск тура</a></li>
							<li class="nav-item"><a href="#2">Горящие туры</a></li>
							<li class="nav-item"><a href="#3">Заказать тур</a></li>
							<li class="nav-item"><a href="#4">Преимущества работы</a></li>
							<li class="nav-item"><a href="#5">Контакты</a></li>
						</ul>
					</div>
				</div>
			</header>
			<div id="main">
				<section class="section main-section">
					<div class="center">
						<h1>Landing page</h1>
						<div class="main-gallery">
							<div class="flex-img-holder">
								<img class="flex-image" src="images/slider_uae.jpg" alt="image description">
								<div class="slider-info">
									<h3>ОАЭ</h3>
									<p>Отдых на море</p>
									<a href="inner.html">show test</a>
								</div>
							</div>
							<div class="flex-img-holder">
								<img class="flex-image" src="images/slider_are.jpg" alt="image description">
								<div class="slider-info">
									<h3>ЕГИПЕТ</h3>
									<p>Отдых на море</p>
								</div>
							</div>
							<div class="flex-img-holder">
								<img class="flex-image" src="images/slide_europe_0417.jpg" alt="image description">
								<div class="slider-info">
									<h3>ЕВРОПА</h3>
									<p>Lorem ipsum dolor...</p>
								</div>
							</div>
							<div class="flex-img-holder">
								<img class="flex-image" src="images/slider_dom.jpg" alt="image description">
								<div class="slider-info">
									<h3>ДОМИНИКАНА</h3>
									<p>Отдых на море</p>
								</div>
							</div>
							<div class="flex-img-holder">
								<img class="flex-image" src="images/slider_sri.jpg" alt="image description">
								<div class="slider-info">
									<h3>ШРИ-ЛАНКА</h3>
									<p>Отдых на море</p>
								</div>
							</div>
							<div class="flex-img-holder">
								<img class="flex-image" src="images/slider_ski3.jpg" alt="image description">
								<div class="slider-info">
									<h3>АВСТРИЯ</h3>
									<p>Отдых на борде</p>
								</div>
							</div>
						</div>
						<div class="main-gallery-nav">
							<div>ОАЭ</div>
							<div>ЕГИПЕТ</div>
							<div>ЕВРОПА</div>
							<div>ДОМИНИКАНА</div>
							<div>ШРИ-ЛАНКА</div>
							<div>АВСТРИЯ</div>
						</div>
					</div>
				</section>
				<section class="section nav-section gray-section" id="2">
					<div class="center">
						<h2>Горящие туры</h2>
						<ul class="product-list" id="showcase_content">
						</ul>
					</div>
				</section>
				<section class="section nav-section gray-style has-bg" id="3">
					<div class="center">
						<h2>Отправьте запрос на подбор тура</h2>
						<a class="book-btn" href="#">Отправить запрос</a>
					</div>
				</section>
				<section class="section white-style" id="7">
					<div class="center">
						<h2>Блог. Рассказы о путешествиях и советы</h2>
						<div class="blog">
							<div class="blog-item">
								<div class="holder">
									<div class="visual">
										<img src="images/slider_sri.jpg" alt="image description">
									</div>
									<a href="inner2.html" class="name">Я не вспомнил свой отдых...</a>
									<span class="date">24-11-2017, 13:40</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam optio impedit dolore consectetur, ipsum, ad recusandae porro, labore esse nemo illum? Quaerat, voluptates sint minus, atque tempore laboriosam beatae.</p>
									<a href="inner2.html" class="more">More...</a>
								</div>
							</div>
							<div class="blog-item">
								<div class="holder">
									<div class="visual">
										<img src="images/slider_sri.jpg" alt="image description">
									</div>
									<a href="inner2.html" class="name">Я не вспомнил свой отдых...</a>
									<span class="date">24-11-2017, 13:40</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam optio impedit dolore consectetur, ipsum, ad recusandae porro, labore esse nemo illum? Quaerat, voluptates sint minus, atque tempore laboriosam beatae.</p>
									<a href="inner2.html" class="more">More...</a>
								</div>
							</div>
							<div class="blog-item">
								<div class="holder">
									<div class="visual">
										<img src="images/slider_sri.jpg" alt="image description">
									</div>
									<a href="inner2.html" class="name">Я не вспомнил свой отдых...</a>
									<span class="date">24-11-2017, 13:40</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam optio impedit dolore consectetur, ipsum, ad recusandae porro, labore esse nemo illum? Quaerat, voluptates sint minus, atque tempore laboriosam beatae.</p>
									<a href="inner2.html" class="more">More...</a>
								</div>
							</div>
							<div class="blog-item">
								<div class="holder">
									<div class="visual">
										<img src="images/slider_sri.jpg" alt="image description">
									</div>
									<a href="inner2.html" class="name">Я не вспомнил свой отдых...</a>
									<span class="date">24-11-2017, 13:40</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam optio impedit dolore consectetur, ipsum, ad recusandae porro, labore esse nemo illum? Quaerat, voluptates sint minus, atque tempore laboriosam beatae.</p>
									<a href="inner2.html" class="more">More...</a>
								</div>
							</div>
							<div class="blog-item">
								<div class="holder">
									<div class="visual">
										<img src="images/slider_sri.jpg" alt="image description">
									</div>
									<a href="inner2.html" class="name">Я не вспомнил свой отдых...</a>
									<span class="date">24-11-2017, 13:40</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam optio impedit dolore consectetur, ipsum, ad recusandae porro, labore esse nemo illum? Quaerat, voluptates sint minus, atque tempore laboriosam beatae.</p>
									<a href="inner2.html" class="more">More...</a>
								</div>
							</div>
							<div class="blog-item">
								<div class="holder">
									<div class="visual">
										<img src="images/slider_sri.jpg" alt="image description">
									</div>
									<a href="inner2.html" class="name">Я не вспомнил свой отдых...</a>
									<span class="date">24-11-2017, 13:40</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam optio impedit dolore consectetur, ipsum, ad recusandae porro, labore esse nemo illum? Quaerat, voluptates sint minus, atque tempore laboriosam beatae.</p>
									<a href="inner2.html" class="more">More...</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section nav-section green-style has-bg" id="4">
					<div class="center">
						<h2>Преимущества работы</h2>
						<div class="advantages">
							<div class="advantages-item">
								<span class="fa fa-exclamation-triangle"></span>
								<h4>Ответственно</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi animi facere quasi obcaecati esse porro, autem.</p>
							</div>
							<div class="advantages-item">
								<span class="fa fa-star"></span>
								<h4>Профессионально</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi animi facere quasi obcaecati esse porro, autem.</p>
							</div>
							<div class="advantages-item">
								<span class="fa fa-users"></span>
								<h4>Внимательно</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi animi facere quasi obcaecati esse porro, autem.</p>
							</div>
							<div class="advantages-item">
								<span class="fa fa-map-marker"></span>
								<h4>Удобно</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi animi facere quasi obcaecati esse porro, autem.</p>
							</div>
						</div>
					</div>
				</section>
				<section class="section">
					<div class="center">
						<h2>Наши партнеры</h2>
						<div class="partners">
							<div class="partners-item">
								<div class="holder">
									<div class="visual">
										<a href="#"><img src="images/joinuo.png" alt="image description"></a>
									</div>
									<span class="name"><a href="#">JoinUP!</a></span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quis consequuntur consectetur culpa id</p>
								</div>
							</div>
							<div class="partners-item">
								<div class="holder">
									<div class="visual">
										<a href="#"><img src="images/joinuo.png" alt="image description"></a>
									</div>
									<span class="name"><a href="#">JoinUP!</a></span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quis consequuntur consectetur culpa id</p>
								</div>
							</div>
							<div class="partners-item">
								<div class="holder">
									<div class="visual">
										<a href="#"><img src="images/joinuo.png" alt="image description"></a>
									</div>
									<span class="name"><a href="#">JoinUP!</a></span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quis consequuntur consectetur culpa id</p>
								</div>
							</div>
							<div class="partners-item">
								<div class="holder">
									<div class="visual">
										<a href="#"><img src="images/joinuo.png" alt="image description"></a>
									</div>
									<span class="name"><a href="#">JoinUP!</a></span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quis consequuntur consectetur culpa id</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section gray-section reviews-section" id="6">
					<div class="center">
						<h2>Отзывы</h2>
						<div class="reviews">
							<div class="reviews-item">
								<div class="holder">
									<div class="head">
										<div class="visual"><img src="images/joinuo.png" alt=""></div>
										<strong>Иванов Иван</strong>
										<span>Designer</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti accusamus quo, cumque esse ex ducimus adipisci itaque, voluptate temporibus deserunt explicabo modi praesentium quos id delectus hic odio doloremque! Vel.</p>
								</div>
							</div>
							<div class="reviews-item">
								<div class="holder">
									<div class="head">
										<div class="visual"><img src="images/joinuo.png" alt=""></div>
										<strong>Иванов Иван</strong>
										<span>Designer</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti accusamus quo, cumque esse ex ducimus adipisci itaque, voluptate temporibus deserunt explicabo modi praesentium quos id delectus hic odio doloremque! Vel.</p>
								</div>
							</div>
							<div class="reviews-item">
								<div class="holder">
									<div class="head">
										<div class="visual"><img src="images/joinuo.png" alt=""></div>
										<strong>Иванов Иван</strong>
										<span>Designer</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti accusamus quo, cumque esse ex ducimus adipisci itaque, voluptate temporibus deserunt explicabo modi praesentium quos id delectus hic odio doloremque! Vel.</p>
								</div>
							</div>
							<div class="reviews-item">
								<div class="holder">
									<div class="head">
										<div class="visual"><img src="images/joinuo.png" alt=""></div>
										<strong>Иванов Иван</strong>
										<span>Designer</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti accusamus quo, cumque esse ex ducimus adipisci itaque, voluptate temporibus deserunt explicabo modi praesentium quos id delectus hic odio doloremque! Vel.</p>
								</div>
							</div>
							<div class="reviews-item">
								<div class="holder">
									<div class="head">
										<div class="visual"><img src="images/joinuo.png" alt=""></div>
										<strong>Иванов Иван</strong>
										<span>Designer</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti accusamus quo, cumque esse ex ducimus adipisci itaque, voluptate temporibus deserunt explicabo modi praesentium quos id delectus hic odio doloremque! Vel.</p>
								</div>
							</div>
							<div class="reviews-item">
								<div class="holder">
									<div class="head">
										<div class="visual"><img src="images/joinuo.png" alt=""></div>
										<strong>Иванов Иван</strong>
										<span>Designer</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti accusamus quo, cumque esse ex ducimus adipisci itaque, voluptate temporibus deserunt explicabo modi praesentium quos id delectus hic odio doloremque! Vel.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section nav-section contacts" id="5">
					<div id="map"></div>
				</section>
			</div>
			<footer id="footer">
				<div class="center">
					<div class="f-holder">
						<strong class="logo"><a href="index.html"></a></strong>
						<ul class="socials">
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
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
							<span><a href="tel:+38 999 999 99 99">+38 999 999 99 99</a></span>
							<span><a href="tel:+38 999 999 99 99">+38 999 999 99 99</a></span>
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
					<span class="copy">2017 &copy; Все права защищены</span>
				</div>
			</footer>
		</div>
		<a href="#" class="btn-top"><i class="fa fa-chevron-up"></i></a>
		<div class="popup-holder" id="form">
			<div class="bg">&nbsp;</div>
			<div class="popup">
				<div class="head">
					<i class="icon fa fa-shopping-cart"></i>
					<h4>Заказать тур:</h3>
					<p><strong>Hilton, 4*</strong> <span>Египет</span> Хургада</p>
				</div>
				<div class="popup-info">
					<div class="visual">
						<img src="images/provider-product1.jpg" alt="image description">
						<span>Hilton, 4*</span>
					</div>
					<div class="title">
						<span class="price">$500</span>
						<p>Вылет 01.02.2018, из Киева, на 7 ночей</p>
						<ul class="list-info">
							<li><i class="fa fa-bed"></i>Double</li>
							<li><i class="fa fa-cutlery"></i>All</li>
						</ul>
					</div>
				</div>
				<form action="#" class="form">
					<fieldset>
						<h5>Ваши данные:</h5>
						<div class="row-group">
							<div class="form-row">
								<input class="name" type="text" placeholder="Имя*">
							</div>
							<div class="form-row">
								<input class="phone phone-input" type="tel" placeholder="Телефон*">
							</div>
						</div>
						<div class="form-row">
							<input class="email" type="text" placeholder="Email*">
						</div>
						<div class="form-row">
							<textarea placeholder="Комментари"></textarea>
						</div>
						<button>Купить</button>
					</fieldset>
				</form>
				<a class="close-popup" href="#">close</a>
			</div>
		</div>
		<div id="showcase_indexed_data" style="display: none;"></div>
		<?php include 'book_tour_modal.php'; ?>
		<script>
            var api_url = '<?php echo api_url(); ?>';
		</script>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800,800italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css" type="text/css" />
		<link rel="stylesheet" href="css/main.css" type="text/css" />
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/wow.js"></script>
		<script type="text/javascript" src="js/plugins-scroll.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.1.10.3.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.datepicker-ru.js"></script>
		<script type="text/javascript" src="js/masked-input.js"></script>
		<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
		<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js?v=2.1.4"></script>
		<link rel="stylesheet" href="js/fancybox/helpers/jquery.fancybox-buttons.css?v=2.1.4" type="text/css" media="screen" />
		<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=2.1.4"></script>
		<link rel="stylesheet" href="js/fancybox/helpers/jquery.fancybox-thumbs.css?v=2.1.4" type="text/css" media="screen" />
		<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js?v=2.1.4"></script>
		<script type="text/javascript" src="js/jquery.main.js"></script>
		<script type="text/javascript" src="js/tmtours.jquery.showcase.js"></script>
		<script type="text/javascript" src="js/tmtours.jquery.order.js"></script>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
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
	                var contentString = '<div class="tooltip-map"><div class="address">Театральный переулок, 4 <br/> 5 Этаж</div><span class="tel">т. - 999 999 99 99</span></div>';
				    var infowindow = new google.maps.InfoWindow({
				        content: contentString
				    });
	                var marker = new google.maps.Marker({
	                    position: new google.maps.LatLng(49.994384,36.236568),
	                    icon: 'images/map-logo.png',
	                    map: map
	               });
	                setTimeout(function(){
						infowindow.open(map,marker);
	               },200);
				}
            }
        </script>
	</body>
</html>

<?php

function api_url() {
  return (php_env() == 'development') ? 'http://localhost:3000/api' : 'https://tmtours-admin.herokuapp.com/api';
}

function get_offers() {
   $curl = curl_init(api_url() . '/offers');
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_POST, false);
   $curl_response = curl_exec($curl);
   curl_close($curl);
   // return json_decode($curl_response);
   return $curl_response;
}

function php_env() {
  if ($_SERVER['HTTP_HOST'] == 'tmtours.local') {
    return 'development';
  }
  return 'production';
}

function print_arr($arr) {
  echo '<pre>';
  print_r($arr);
  echo '</pre>';
}

?>