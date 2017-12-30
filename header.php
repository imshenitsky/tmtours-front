<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="format-detection" content="telephone=no"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title><?= $header_title; ?></title>
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
	<body class="<?= $body_class; ?>">
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