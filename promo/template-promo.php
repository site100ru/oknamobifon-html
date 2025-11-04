<?php
/**
 * Template Name: Страница акций
 */

session_start();

if (isset($_SESSION['win'])) {
	unset($_SESSION['win']);
	$display = "block";
} else
	$display = "none";

?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
	<meta http-equiv="Content-Type" content="type; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="theme-color" content="#1B75BB" />
	<link rel="icon" type="image/png" href="/wp-content/themes/oknamobifon/assets/favicon/favicon-96x96.png"
		sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="/wp-content/themes/oknamobifon/assets/favicon/favicon.svg" />
	<link rel="shortcut icon" href="/wp-content/themes/oknamobifon/assets/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180"
		href="/wp-content/themes/oknamobifon/assets/favicon/apple-touch-icon.png" />
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
	<!-- This site is optimized with the Yoast SEO plugin v25.2 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Акции на окна ПВХ - скидки на остекление в Москве | ОкнаМобифон</title>
	<meta name="description"
		content="Выгодные акции на пластиковые окна ПВХ, остекление балконов и лоджий. Скидки, рассрочка без процентов. Качественная установка с гарантией. Звоните: +7 (495) 646-49-59" />

	<meta name="keywords"
		content="акции на окна, скидки на окна пвх, акции остекление балконов, окна со скидкой москва, рассрочка на окна, выгодные предложения окна" />

	<link rel="canonical" href="https://oknamobifon.ru/promo-okna/" />

	<meta property="og:locale" content="ru_RU">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Акции на окна ПВХ - скидки на остекление в Москве">
	<meta property="og:description"
		content="Выгодные акции на пластиковые окна ПВХ, остекление балконов и лоджий. Скидки, рассрочка без процентов. Качественная установка с гарантией 5 лет.">
	<meta property="og:url" content="https://www.oknamobifon.ru/promo-okna/">
	<meta property="og:site_name" content="ОкнаМобифон">
	<meta property="article:modified_time" content="2025-06-04T19:40:22+00:00">
	<meta property="og:image" content="https://www.oknamobifon.ru/wp-content/uploads/2025/05/woman.jpg">
	<meta property="og:image:width" content="1280">
	<meta property="og:image:height" content="768">
	<meta property="og:image:type" content="image/jpeg">

	<!-- <link
			rel="stylesheet"
			id="wp-block-library-css"
			href="https://oknamobifon.ru//wp-includes/css/dist/block-library/style.min.css?ver=6.8.2"
			type="text/css"
			media="all"
		/> -->

	<link rel="stylesheet" id="wp-block-library-css"
		href="<?php echo get_template_directory_uri(); ?>/promo/css/bootstrap.min.css" type="text/css" media="all" />
	<link rel="stylesheet" id="OknaMobifon-style-css"
		href="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/css/main.min.css?ver=0.0.60" type="text/css"
		media="all" />
	<link rel="icon" href="https://oknamobifon.ru/wp-content/uploads/2025/06/web-app-manifest-512x512-1-150x150.png"
		sizes="32x32" />
	<link rel="icon" href="https://oknamobifon.ru/wp-content/uploads/2025/06/web-app-manifest-512x512-1-300x300.png"
		sizes="192x192" />
	<link rel="apple-touch-icon"
		href="https://oknamobifon.ru/wp-content/uploads/2025/06/web-app-manifest-512x512-1-300x300.png" />
	<meta name="msapplication-TileImage"
		content="https://oknamobifon.ru/wp-content/uploads/2025/06/web-app-manifest-512x512-1-300x300.png" />
	<!-- Yandex.Metrika counter -->
	<script defer
		src="data:text/javascript;base64,IChmdW5jdGlvbihtLGUsdCxyLGksayxhKXttW2ldPW1baV18fGZ1bmN0aW9uKCl7KG1baV0uYT1tW2ldLmF8fFtdKS5wdXNoKGFyZ3VtZW50cyl9OyBtW2ldLmw9MSpuZXcgRGF0ZSgpOyBmb3IgKHZhciBqID0gMDsgaiA8IGRvY3VtZW50LnNjcmlwdHMubGVuZ3RoOyBqKyspIHtpZiAoZG9jdW1lbnQuc2NyaXB0c1tqXS5zcmMgPT09IHIpIHsgcmV0dXJuOyB9fSBrPWUuY3JlYXRlRWxlbWVudCh0KSxhPWUuZ2V0RWxlbWVudHNCeVRhZ05hbWUodClbMF0say5hc3luYz0xLGsuc3JjPXIsYS5wYXJlbnROb2RlLmluc2VydEJlZm9yZShrLGEpfSkgKHdpbmRvdywgZG9jdW1lbnQsICJzY3JpcHQiLCAiaHR0cHM6Ly9tYy55YW5kZXgucnUvbWV0cmlrYS90YWcuanMiLCAieW0iKTsgeW0oMTUxMTI2LCAiaW5pdCIsIHsgY2xpY2ttYXA6dHJ1ZSwgdHJhY2tMaW5rczp0cnVlLCBhY2N1cmF0ZVRyYWNrQm91bmNlOnRydWUsIHdlYnZpc29yOnRydWUgfSk7IA=="></script>
	<noscript>
		<div>
			<img src="https://mc.yandex.ru/watch/151126" style="position: absolute; left: -9999px" alt="" />
		</div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
	<style>
		.gallery-grid__item img,
		.gallery__item img {
			object-fit: contain;
			margin-bottom: 20px;
		}

		.attributes {
			margin-top: 20px;
		}
	</style>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/promo/css/stocks.css" type="text/css" />
</head>

<body
	class="wp-singular page-template-default page page-id-17570 page-parent page-child parent-pageid-17508 wp-custom-logo wp-theme-oknamobifon">
	<header class="site-header" itemscope itemtype="https://schema.org/WPHeader">
		<div class="container site-header__container">
			<div class="site-header__column-logo">
				<a href="#" class="logo site-header__logo">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 224.65 33.82">
						<defs>
							<style>
								.svg-logo-1 {
									fill: #00adee;
									stroke-width: 0;
								}
							</style>
						</defs>
						<path class="svg-logo-1"
							d="M62.21 8.34c.82 0 1.65.11 2.36.2.82.2 1.54.51 2.16 1.03.61.51 1.13 1.23 1.54 2.16s.61 2.16.61 3.7v2.97c0 1.54-.2 2.78-.51 3.7-.42.92-.82 1.65-1.54 2.16-.61.51-1.34.92-2.16 1.03-.82.2-1.65.31-2.57.31s-1.75-.11-2.57-.31-1.54-.51-2.16-1.03-1.13-1.23-1.44-2.26c-.42-.92-.51-2.16-.51-3.7v-2.97c0-1.54.2-2.78.61-3.7.42-.92.92-1.65 1.54-2.16s1.34-.82 2.16-1.03c.92-.11 1.75-.11 2.47-.11h.02zm0 1.96c-.61 0-1.13.11-1.65.31s-.92.51-1.23.92-.61 1.03-.82 1.75-.31 1.65-.31 2.78v2.05c0 1.13.11 1.95.31 2.67s.42 1.23.82 1.65c.31.42.72.72 1.23.82.51.2 1.03.2 1.65.2s1.13-.11 1.65-.2c.51-.2.92-.42 1.23-.82s.61-.92.82-1.65.31-1.54.31-2.67v-2.05c0-1.13-.11-2.05-.31-2.78s-.42-1.34-.82-1.75c-.31-.42-.72-.72-1.23-.92-.42-.2-1.03-.31-1.65-.31zm21.78 2.05v2.05h-1.23l-3.9 4.42 3.81 3.5c.61.61 1.13 1.03 1.65 1.23.42.2.72.42.92.42l-.72 1.54c-.11.11-.31.11-.61.11s-.72-.11-1.34-.31c-.61-.2-1.23-.72-2.05-1.44l-5.35-4.93v2.97c0 .72-.11 1.34-.2 1.75-.11.51-.2.92-.42 1.23-.2.31-.31.51-.51.72s-.31.31-.42.31l-1.65-.51c.11-.2.2-.51.31-1.03s.2-1.13.2-1.95v-8.01h-1.65v-2.05h4.31v3.08l1.85 1.65L81 12.37h3zm13.36 0h4.31v2.05h-1.65v8.93h1.65v2.05h-4.31v-5.55h-6.06v5.55h-4.31v-2.05h1.65V14.4h-1.65v-2.05h4.31v5.35h6.06v-5.35zm16.75 10.28c0 .42.11.61.11.72.11.11.2.11.31.11h.42c.11 0 .2-.11.42-.2l.2 1.65c-.31.11-.61.2-.72.31-.2.11-.42.11-.72.11s-.61 0-.82-.11c-.2 0-.42-.11-.51-.2l-.31-.31a.762.762 0 01-.2-.51h-.11c-.31.2-.51.31-.82.51-.2.11-.51.31-.72.42-.31.11-.61.2-.92.2-.42.11-.82.11-1.44.11h-.42c-1.34 0-2.36-.42-3.08-1.03s-1.13-1.75-1.13-3.08v-.31c0-.72.11-1.23.42-1.75s.61-.92 1.13-1.23 1.03-.51 1.75-.72c.72-.11 1.44-.2 2.26-.2h2.36c0-.51 0-.92-.11-1.34s-.2-.61-.31-.92c-.2-.2-.42-.42-.72-.51s-.72-.2-1.23-.2h-1.44c-.11 0-.31.11-.61.11v.82l-2.05.11-.31-2.47c.31-.11.61-.2 1.03-.31l1.23-.31c.42-.11.92-.11 1.44-.2.51-.11 1.03-.11 1.54-.11 1.03 0 1.85.2 2.47.51.61.42 1.03.82 1.34 1.34s.42 1.13.51 1.75c.11.61.11 1.13.11 1.65v3.59c-.42 1.03-.42 1.65-.31 2.05h-.04v-.02zm-2.67-3.7h-1.65c-1.23 0-2.16.11-2.78.42-.61.31-.92.82-.92 1.65v.31c0 .82.2 1.34.72 1.65.51.31 1.13.42 2.05.42.31 0 .61 0 .82-.11.31 0 .51-.11.82-.31.2-.11.42-.31.61-.61.2-.31.31-.61.31-1.03v-2.36l.02-.02zm6.17 6.37v-2.05h1.13l.2-12.63h-1.65V8.57h5.14l4.52 10.48 4.83-10.48h5.04v2.05h-1.65c0 1.13 0 2.16.11 3.19 0 1.03 0 2.05.11 3.08 0 1.03 0 2.05.11 3.08v3.19h1.13v2.05h-3.7l-.2-13.05-4.52 10.07h-2.16l-4.42-10.07c0 .92-.11 1.95-.11 2.88v10.27h-3.9zm20.85-7.61c0-1.23.2-2.16.51-2.88s.72-1.34 1.34-1.75c.51-.42 1.13-.72 1.85-.82s1.34-.2 2.05-.2c.61 0 1.34.11 1.95.2.72.11 1.23.42 1.75.82.51.42.92.92 1.34 1.75.31.72.51 1.75.51 2.88v2.36c0 1.13-.2 2.16-.51 2.88-.31.72-.72 1.23-1.23 1.65s-1.13.61-1.75.72c-.72.11-1.34.2-2.05.2s-1.44-.11-2.05-.2c-.72-.11-1.23-.42-1.75-.72-.51-.42-.92-.92-1.23-1.65s-.51-1.65-.51-2.88v-2.36h-.21zm2.57 2.17c0 .82.11 1.44.31 1.95s.42.82.72 1.13c.31.31.61.42.92.51s.72.11 1.03.11.72 0 1.03-.11c.42-.11.72-.2 1.03-.51.31-.2.51-.61.72-1.13s.31-1.13.31-1.95v-1.95c0-.82-.11-1.44-.31-1.95s-.42-.92-.72-1.13c-.31-.31-.61-.42-.92-.51-.31-.11-.72-.11-1.03-.11s-.72 0-1.03.11c-.42.11-.72.31-1.03.51-.31.31-.51.61-.72 1.13s-.31 1.13-.31 1.95v1.95zm17.88-9.26c-.72 0-1.44.11-1.95.2-.61.11-1.03.31-1.44.72-.42.31-.72.82-.92 1.44-.2.61-.31 1.44-.31 2.36.42-.2.92-.42 1.54-.61.61-.2 1.34-.31 2.05-.31s1.54.11 2.26.2 1.44.42 2.05.82c.61.42 1.13.92 1.44 1.65.42.72.61 1.65.61 2.78s-.2 1.95-.51 2.78c-.31.72-.82 1.34-1.44 1.85-.61.42-1.23.82-2.05 1.03s-1.65.31-2.47.31c-1.03 0-1.85-.11-2.67-.31-.72-.2-1.44-.51-1.95-1.03s-.92-1.13-1.13-2.05c-.31-.82-.42-1.95-.42-3.39v-4.31c0-1.13.11-2.16.42-2.97s.72-1.44 1.23-1.85c.51-.51 1.23-.82 1.95-1.03s1.54-.31 2.47-.31h3.5l.11-.92 1.44-.11.61 2.57c-.61.31-1.23.42-2.05.51-.82-.11-1.54 0-2.36 0v-.03zm-4.73 7.61c0 1.23.11 2.16.2 2.88.11.72.31 1.23.61 1.54.31.42.61.61 1.03.72s.92.11 1.54.11c.42 0 .82 0 1.23-.11s.82-.31 1.23-.51c.42-.31.72-.61.92-1.13s.42-1.13.42-1.85-.11-1.34-.31-1.75c-.2-.51-.51-.82-.92-1.13s-.72-.42-1.23-.51c-.42-.11-.82-.11-1.23-.11-.61 0-1.34.11-1.95.2-.61.2-1.13.31-1.54.42v1.23-.02zm24.87-3.91v8.93h1.13v2.05h-3.81V14.8l-6.89 10.48h-3.81v-2.05h1.13v-8.84h-1.13v-2.05h3.81v9.14l6.17-9.14h4.42v2.05h-1.03v-.11zm10.9-6.46v4.21c.61 0 1.34.11 1.95.31s1.13.42 1.65.92c.51.42.82 1.03 1.13 1.75s.42 1.65.42 2.78v2.26c0 1.13-.11 2.05-.42 2.78s-.72 1.34-1.13 1.65c-.51.42-1.03.72-1.65.82-.61.2-1.23.2-1.85.31v4.83h-2.57v-4.83c-.61 0-1.23-.11-1.85-.31s-1.13-.42-1.65-.82-.82-.92-1.13-1.65c-.31-.72-.42-1.65-.42-2.78v-2.26c0-1.13.11-2.05.42-2.78s.61-1.34 1.13-1.75 1.03-.72 1.65-.92 1.23-.31 1.95-.31V7.84h2.36zm-5.36 11.91c0 .82.11 1.44.2 1.85.2.51.42.82.61 1.13.31.31.61.42.92.51s.61.2.92.2v-9.45c-.31 0-.72.11-1.03.2s-.61.31-.92.61-.51.72-.61 1.23c-.2.51-.2 1.13-.2 1.95v1.75h.11zm8.13-1.85c0-.82-.11-1.44-.2-1.95a7.8 7.8 0 00-.61-1.23c-.31-.31-.51-.51-.92-.61-.31-.11-.61-.2-1.03-.2v9.45c.31 0 .61-.11.92-.2s.61-.31.92-.51c.31-.31.51-.61.72-1.13s.31-1.13.31-1.85v-1.75h-.11zm4.31-.21c0-1.23.2-2.16.51-2.88s.72-1.34 1.34-1.75c.51-.42 1.13-.72 1.85-.82.61-.11 1.34-.2 2.05-.2.61 0 1.34.11 1.95.2s1.23.42 1.75.82c.51.42.92.92 1.34 1.75.31.72.51 1.75.51 2.88v2.36c0 1.13-.2 2.16-.51 2.88-.31.72-.72 1.23-1.23 1.65s-1.13.61-1.75.72c-.72.11-1.34.2-2.05.2s-1.44-.11-2.05-.2c-.72-.11-1.23-.42-1.75-.72a4.14 4.14 0 01-1.23-1.65c-.31-.72-.51-1.65-.51-2.88v-2.36h-.21zm2.67 2.17c0 .82.11 1.44.31 1.95s.42.82.72 1.13c.31.31.61.42.92.51s.72.11 1.03.11.72 0 1.03-.11c.42-.11.72-.2.92-.51.31-.2.51-.61.72-1.13s.31-1.13.31-1.95v-1.95c0-.82-.11-1.44-.31-1.95s-.42-.92-.72-1.13c-.31-.31-.61-.42-.92-.51s-.72-.11-1.03-.11-.72 0-1.03.11c-.42.11-.72.31-1.03.51-.31.31-.51.61-.72 1.13s-.31 1.13-.31 1.95v1.95h.11zm20.65-7.51h4.31v2.05H223v8.93h1.65v2.05h-4.31v-5.55h-6.06v5.55h-4.31v-2.05h1.65V14.4h-1.65v-2.05h4.31v5.35h6.06v-5.35z" />
						<path
							d="M42.25 28.78V15.62c-.36-3.03-1.7-5.75-3.75-7.72-2.32-2.28-5.49-3.7-8.97-3.66h-.04c-3.43.04-6.6 1.56-8.83 3.88-1.92 2.05-3.26 4.82-3.52 7.85v8.34l7.94-4.91v-2.23c0-1.2.85-2.28 1.61-3.08s1.78-1.29 2.99-1.29 2.23.45 3.03 1.25c.8.8 1.25 1.83 1.29 3.08v16.24l8.25-4.59z"
							fill="#1b75bb" stroke-width="0" />
						<path class="svg-logo-1"
							d="M21.28 3.57C18.96 1.3 15.79-.09 12.31 0h-.04c-3.48.09-6.6 1.61-8.83 3.97C1.52 6.07.22 8.84 0 11.87v21.95l8.3-4.73v-16.1c-.04-1.2.4-2.28 1.16-3.12.76-.8 1.78-1.29 2.99-1.34s2.23.45 3.03 1.2c.8.8 1.56 1.83 1.61 3.03v11.51l8.61-4.73v-8.25c-.4-3.03-2.41-5.71-4.42-7.72z" />
					</svg>
				</a>
			</div>
			<div class="site-header__navbar order-2 order-lg-2">
				<nav class="navbar" itemscope itemtype="https://schema.org/SiteNavigationElement">
					<meta itemprop="name" content="Навигация по сайту" />
					<ul class="navbar-nav">
						<li class="nav-item">
							<a itemprop="url" class="nav-link" href="#" title="Главная">
								<span itemprop="name">Главная</span>
							</a>
						</li>
						<li class="nav-item">
							<a itemprop="url" class="nav-link" href="#services">
								<span itemprop="name">Услуги </span>
							</a>
						</li>
						<li class="nav-item">
							<a itemprop="url" class="nav-link" href="#price">
								<span itemprop="name">Цены</span>
							</a>
						</li>
						<li class="nav-item">
							<a itemprop="url" class="nav-link" href="#quiz">
								<span itemprop="name">Расчет</span>
							</a>
						</li>
						<li class="nav-item">
							<a itemprop="url" class="nav-link" href="#stocks">
								<span itemprop="name">Акции</span>
							</a>
						</li>
						<li class="nav-item">
							<a itemprop="url" class="nav-link" href="#kontakty">
								<span itemprop="name">Контакты</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="order-lg-3 order-1 site-header__contacts">
				<div class="site-header__messengers">
					<a href="https://wa.me/79938642678?text=Здравствуйте!" title="Написать в WhatsApp" target="_blank"
						rel="nofollow">
						<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/icon-whatsapp.svg"
							alt="WhatsApp" />
					</a>
					<a href="https://t.me/+79852111060" title="Написать в Телеграм" target="_blank" rel="nofollow">
						<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/icon-telegram.svg"
							alt="Телеграм" />
					</a>
				</div>
				<div class="site-header__phone">
					<a href="tel:+74956464959"><span>+7 (495)</span> 646-49-59</a>
					<div class="site-header__phone-schedule">
						<div class="is-working"></div>
						9:00 — 19:00 • ежедневно
					</div>
				</div>
			</div>
			<div class="site-header__hamburger order-2 order-lg-3 d-lg-none">
				<div class="site-header__cta">
					<button class="btn-chip" data-bs-toggle="modal" data-bs-target="#feedback-modal"
						data-context="header-order-call">
						<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M19.44 13c-.22 0-.45-.07-.67-.12a9.44 9.44 0 01-1.31-.39 2 2 0 00-2.48 1l-.22.45a12.18 12.18 0 01-2.66-2 12.18 12.18 0 01-2-2.66l.42-.28a2 2 0 001-2.48 10.33 10.33 0 01-.39-1.31c-.05-.22-.09-.45-.12-.68a3 3 0 00-3-2.49h-3a3 3 0 00-3 3.41 19 19 0 0016.52 16.46h.38a3 3 0 002-.76 3 3 0 001-2.25v-3a3 3 0 00-2.47-2.9zm.5 6a1 1 0 01-.34.75 1.06 1.06 0 01-.82.25A17 17 0 014.07 5.22a1.09 1.09 0 01.25-.82 1 1 0 01.75-.34h3a1 1 0 011 .79q.06.41.15.81a11.12 11.12 0 00.46 1.55l-1.4.65a1 1 0 00-.49 1.33 14.49 14.49 0 007 7 1 1 0 00.76 0 1 1 0 00.57-.52l.62-1.4a13.69 13.69 0 001.58.46q.4.09.81.15a1 1 0 01.79 1z"
								fill="currentColor" />
						</svg>
						Заказать <br />звонок
					</button>
					<button class="btn-chip" data-bs-toggle="modal" data-bs-target="#feedback-modal"
						data-context="header-call-measurer">
						<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M22.61 7.05L17 1.39a1 1 0 00-.71-.29 1 1 0 00-.7.29L1.39 15.54a1 1 0 000 1.41l5.66 5.66a1 1 0 00.71.29 1 1 0 00.7-.29l2.83-2.83 8.49-8.49 2.83-2.83a1 1 0 000-1.41zm-3.54 2.12l-.71-.71a1 1 0 00-1.41 0 1 1 0 000 1.42l.71.71L16.24 12l-2.12-2.12a1 1 0 00-1.41 1.41l2.12 2.12-1.42 1.42-.7-.71a1 1 0 10-1.42 1.42l.71.7-1.41 1.42-2.13-2.12a1 1 0 00-1.41 0 1 1 0 000 1.41l2.12 2.12-1.41 1.42-4.25-4.25L16.24 3.51l4.25 4.25z"
								fill="currentColor" />
						</svg>
						Вызвать <br />замерщика
					</button>
				</div>
				<button class="btn btn-hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
					aria-controls="offcanvasMenu" aria-label="Меню">
					<span class="hamburger">
						<span></span> <span></span> <span></span> <span></span>
					</span>
				</button>
			</div>
		</div>
	</header>
	<main class="site-main">
		<section class="section section-hero">
			<div class="section-hero__inner">
				<div class="section__bg section-hero__bg">
					<img width="1024" height="683"
						src="https://oknamobifon.ru/wp-content/uploads/2025/06/molodaa-krasivaa-krasivaa-para-naslazdaetsa-utrennim-kofe-u-dveri-svoei-roskosnoi-domasnei-villy-1024x683.jpg"
						class="loading" alt="" loading="lazy" decoding="async" srcset="
								https://oknamobifon.ru/wp-content/uploads/2025/06/molodaa-krasivaa-krasivaa-para-naslazdaetsa-utrennim-kofe-u-dveri-svoei-roskosnoi-domasnei-villy-1024x683.jpg  1024w,
								https://oknamobifon.ru/wp-content/uploads/2025/06/molodaa-krasivaa-krasivaa-para-naslazdaetsa-utrennim-kofe-u-dveri-svoei-roskosnoi-domasnei-villy-300x200.jpg    300w,
								https://oknamobifon.ru/wp-content/uploads/2025/06/molodaa-krasivaa-krasivaa-para-naslazdaetsa-utrennim-kofe-u-dveri-svoei-roskosnoi-domasnei-villy-768x513.jpg    768w,
								https://oknamobifon.ru/wp-content/uploads/2025/06/molodaa-krasivaa-krasivaa-para-naslazdaetsa-utrennim-kofe-u-dveri-svoei-roskosnoi-domasnei-villy-1536x1025.jpg 1536w,
								https://oknamobifon.ru/wp-content/uploads/2025/06/molodaa-krasivaa-krasivaa-para-naslazdaetsa-utrennim-kofe-u-dveri-svoei-roskosnoi-domasnei-villy-2048x1367.jpg 2048w
							" sizes="(max-width: 1024px) 100vw, 1024px" />
				</div>
				<div class="container section-hero__container">
					<div class="section-hero__text">
						<h1 class="section__title section-hero__title-hero section-hero__title fade-in-right" style="--delay: 0.2s">
							Производство и установка окон ПВХ в квартиры и дома
						</h1>
						<ul class="section-hero__promo fade-in-right mb-0" style="--delay: 0.5s">
							<li>Замер и расчет стоимости бесплатно</li>
							<li>Изготовление 5-7 рабочих дней</li>
							<li>Бесплатная доставка и установка в один день</li>
							<li>Гарантия на установку 5 лет, на профиль 25 лет</li>
						</ul>
						<div class="section-hero__cta fade-in-right" style="--delay: 0.8s">
							<button class="btn btn-primary btn-cta" data-bs-toggle="modal" data-bs-target="#feedback-modal"
								aria-label="Оставить заявку" data-context="hero-section-request">
								Оставить заявку
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-uso">
			<div class="container section-uso__container">
				<h2 id="services" class="section__title section-uso__title">
					Что мы
					<span>делаем</span>
				</h2>
				<p class="section__subtitle">
					Профессиональное остекление любых объектов — от квартир до офисных зданий.
					Современные технологии, качественные материалы и полный цикл работ под ключ.
				</p>
				<div class="row">
					<div class="col-lg-8">
						<div class="section-uso__box">
							<div class="section-uso__box-image">
								<img width="800" height="533"
									src="https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkonov-i-lodzhij-oknami-pvh.jpg"
									class="loading" alt="" loading="lazy" decoding="async" srcset="
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkonov-i-lodzhij-oknami-pvh.jpg         800w,
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkonov-i-lodzhij-oknami-pvh-600x400.jpg 600w,
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkonov-i-lodzhij-oknami-pvh-300x200.jpg 300w,
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkonov-i-lodzhij-oknami-pvh-768x512.jpg 768w,
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkonov-i-lodzhij-oknami-pvh-128x84.jpg  128w,
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkonov-i-lodzhij-oknami-pvh-550x366.jpg 550w
										" sizes="(max-width: 800px) 100vw, 800px" />
							</div>
							<h3 class="section-uso__box-title">
								<a href="">Остекление квартиры</a>
							</h3>
							<ul>
								<li>
									<a href="" data-bs-toggle="modal" data-bs-target="#feedback-modal"
										data-context="service-apartment-glazing" aria-label="Оставить заявку">Оставить заявку</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-8">
						<div class="section-uso__box">
							<div class="section-uso__box-image">
								<img width="800" height="533"
									src="https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkona-s-vynosom-podokonnika-v-moskve-mytishchah-dolgoprudnom.jpg"
									class="loading" alt="" loading="lazy" decoding="async" srcset="
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkona-s-vynosom-podokonnika-v-moskve-mytishchah-dolgoprudnom.jpg         800w,
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkona-s-vynosom-podokonnika-v-moskve-mytishchah-dolgoprudnom-600x400.jpg 600w,
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkona-s-vynosom-podokonnika-v-moskve-mytishchah-dolgoprudnom-300x200.jpg 300w,
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkona-s-vynosom-podokonnika-v-moskve-mytishchah-dolgoprudnom-768x512.jpg 768w,
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkona-s-vynosom-podokonnika-v-moskve-mytishchah-dolgoprudnom-128x84.jpg  128w,
											https://oknamobifon.ru/wp-content/uploads/2022/12/osteklenie-balkona-s-vynosom-podokonnika-v-moskve-mytishchah-dolgoprudnom-550x366.jpg 550w
										" sizes="(max-width: 800px) 100vw, 800px" />
							</div>
							<h3 class="section-uso__box-title">
								<a href="">Остекление балконов и лоджий</a>
							</h3>
							<ul>
								<li>
									<a href="" data-bs-toggle="modal" data-bs-target="#feedback-modal"
										data-context="service-balcony-glazing" aria-label="Оставить заявку">Оставить заявку</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-8">
						<div class="section-uso__box">
							<div class="section-uso__box-image">
								<img width="1024" height="1024"
									src="https://oknamobifon.ru/wp-content/uploads/2025/06/fasadnoe-osteklenie-doma-1024x1024.jpg"
									class="loading" alt="" loading="lazy" decoding="async" srcset="
											https://oknamobifon.ru/wp-content/uploads/2025/06/fasadnoe-osteklenie-doma-1024x1024.jpg 1024w,
											https://oknamobifon.ru/wp-content/uploads/2025/06/fasadnoe-osteklenie-doma-300x300.jpg    300w,
											https://oknamobifon.ru/wp-content/uploads/2025/06/fasadnoe-osteklenie-doma-150x150.jpg    150w,
											https://oknamobifon.ru/wp-content/uploads/2025/06/fasadnoe-osteklenie-doma-768x768.jpg    768w,
											https://oknamobifon.ru/wp-content/uploads/2025/06/fasadnoe-osteklenie-doma.jpg           1280w
										" sizes="(max-width: 1024px) 100vw, 1024px" />
							</div>
							<h3 class="section-uso__box-title">
								<a href="">Остекление коттеджей и загородных домов</a>
							</h3>
							<ul>
								<li>
									<a href="" data-bs-toggle="modal" data-bs-target="#feedback-modal"
										data-context="service-cottage-glazing" aria-label="Оставить заявку">Оставить заявку</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-8">
						<div class="section-uso__box">
							<div class="section-uso__box-image">
								<img width="1024" height="683"
									src="https://oknamobifon.ru/wp-content/uploads/2025/06/scastlivyi-otec-s-docer-u-stoa-vozle-otkrytogo-balkona-i-ulybaas-1024x683.jpg"
									class="loading" alt="" loading="lazy" decoding="async" srcset="
											https://oknamobifon.ru/wp-content/uploads/2025/06/scastlivyi-otec-s-docer-u-stoa-vozle-otkrytogo-balkona-i-ulybaas-1024x683.jpg  1024w,
											https://oknamobifon.ru/wp-content/uploads/2025/06/scastlivyi-otec-s-docer-u-stoa-vozle-otkrytogo-balkona-i-ulybaas-300x200.jpg    300w,
											https://oknamobifon.ru/wp-content/uploads/2025/06/scastlivyi-otec-s-docer-u-stoa-vozle-otkrytogo-balkona-i-ulybaas-768x512.jpg    768w,
											https://oknamobifon.ru/wp-content/uploads/2025/06/scastlivyi-otec-s-docer-u-stoa-vozle-otkrytogo-balkona-i-ulybaas-1536x1024.jpg 1536w,
											https://oknamobifon.ru/wp-content/uploads/2025/06/scastlivyi-otec-s-docer-u-stoa-vozle-otkrytogo-balkona-i-ulybaas-2048x1366.jpg 2048w
										" sizes="(max-width: 1024px) 100vw, 1024px" />
							</div>
							<h3 class="section-uso__box-title">
								<a href="">Остекление веранд и террас</a>
							</h3>
							<ul>
								<li>
									<a href="" data-bs-toggle="modal" data-bs-target="#feedback-modal"
										data-context="service-veranda-glazing" aria-label="Оставить заявку">Оставить заявку</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-8">
						<div class="section-uso__box">
							<div class="section-uso__box-image">
								<img width="900" height="675"
									src="https://oknamobifon.ru/wp-content/uploads/2025/03/465c6094c477393ab49db3433bd51e86.jpg"
									class="loading" alt="" loading="lazy" decoding="async" srcset="
											https://oknamobifon.ru/wp-content/uploads/2025/03/465c6094c477393ab49db3433bd51e86.jpg         900w,
											https://oknamobifon.ru/wp-content/uploads/2025/03/465c6094c477393ab49db3433bd51e86-300x225.jpg 300w,
											https://oknamobifon.ru/wp-content/uploads/2025/03/465c6094c477393ab49db3433bd51e86-768x576.jpg 768w
										" sizes="(max-width: 900px) 100vw, 900px" />
							</div>
							<h3 class="section-uso__box-title">
								<a href="">Остекление беседок</a>
							</h3>
							<ul>
								<li>
									<a href="" data-bs-toggle="modal" data-bs-target="#feedback-modal"
										data-context="service-gazebo-glazing" aria-label="Оставить заявку">Оставить заявку</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-8">
						<div class="section-uso__box">
							<div class="section-uso__box-image">
								<img decoding="async" width="300" height="225"
									src="https://oknamobifon.ru/wp-content/uploads/2019/05/img-main-02-300x225.jpg"
									class="attachment-medium size-medium" alt="" loading="lazy" srcset="
											https://oknamobifon.ru/wp-content/uploads/2019/05/img-main-02-300x225.jpg 300w,
											https://oknamobifon.ru/wp-content/uploads/2019/05/img-main-02-600x450.jpg 600w,
											https://oknamobifon.ru/wp-content/uploads/2019/05/img-main-02-768x576.jpg 768w,
											https://oknamobifon.ru/wp-content/uploads/2019/05/img-main-02-550x413.jpg 550w,
											https://oknamobifon.ru/wp-content/uploads/2019/05/img-main-02.jpg         941w
										" sizes="(max-width: 300px) 100vw, 300px" />
							</div>
							<h3 class="section-uso__box-title">
								<a href="">Фасадное остекление домов, зданий</a>
							</h3>
							<ul>
								<li>
									<a href="" data-bs-toggle="modal" data-bs-target="#feedback-modal"
										data-context="service-facade-glazing" aria-label="Оставить заявку">Оставить заявку</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-quality section-glazing">
			<div class="container">
				<h2 class="section__title section-uso__title">
					Варианты
					<span>остекления</span>
				</h2>
				<p class="section__subtitle">
					В зависимости от помещения возможны разные варианты остекления
				</p>
				<div class="row">
					<div class="col-lg-8">
						<div class="section-glazing__item">
							<h5 class="section-glazing__item-title">Холодное остекление</h5>
							<p>
								Для неотапливаемых помещений. Экономичное решение для балконов и
								лоджий, которые не требуют поддержания высокой температуры.
							</p>
							<p class="price">Цена: от 15 000 руб. м. кв.</p>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="section-glazing__item">
							<h5 class="section-glazing__item-title">Полутеплое остекление</h5>
							<p>
								Для помещений, примыкающих к отапливаемым. Оптимальное
								соотношение цены и качества для переходных зон.
							</p>
							<p class="price">Цена: от 25 000 руб. м. кв.</p>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="section-glazing__item">
							<h5 class="section-glazing__item-title">Теплое остекление</h5>
							<p>
								Для отапливаемых помещений. Максимальная теплоизоляция и комфорт
								для жилых комнат и офисов.
							</p>
							<p class="price">Цена: от 35 000 руб. м. кв.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-profile bg-light">
			<div class="container pb-3 pb-md-0">
				<h2 class="section__title section-uso__title">
					Варианты
					<span>профилей</span>
				</h2>

				<p class="section__subtitle">
					Поможем выбрать оптимальный профиль и рассчитаем стоимость Ваших окон
				</p>

				<div class="row justify-content-between">
					<div class="col col-md-12 col-lg-6 mb-5 mb-lg-0">
						<div class="card border-0">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/stocks/Rehau.png" class="card-img-top"
								alt="rehau" />
							<div class="card-body text-center px-0">
								<h5 class="card-title">Rehau</h5>
								<img src="<?php echo get_template_directory_uri(); ?>/promo/img/stocks/Stars.svg" class="mb-2 img-fluid"
									alt="5 звезд" />

								<p class="card-text card-price">
									От <span>9&nbsp;940</span> руб/м<sup>2</sup>
								</p>
								<button class="btn btn-primary btn-cta" data-bs-toggle="modal" data-bs-target="#feedback-modal"
									data-context="calculate-cost-rehau" aria-label="Подробная консультация" data-profile="Rehau">
									Рассчитать стоимость
								</button>
							</div>
						</div>
					</div>

					<div class="col col-md-12 col-lg-6 mb-5 mb-lg-0">
						<div class="card border-0">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/stocks/KBE.png" class="card-img-top"
								alt="KBE" />
							<div class="card-body text-center px-0">
								<h5 class="card-title">KBE</h5>
								<img src="<?php echo get_template_directory_uri(); ?>/promo/img/stocks/Stars.svg" class="mb-2 img-fluid"
									alt="5 звезд" />

								<p class="card-text card-price">
									От <span>9&nbsp;040</span> руб/м<sup>2</sup>
								</p>
								<button class="btn btn-primary btn-cta" data-bs-toggle="modal" data-bs-target="#feedback-modal"
									data-context="calculate-cost-kbe" aria-label="Подробная консультация" data-profile="KBE">
									Рассчитать стоимость
								</button>
							</div>
						</div>
					</div>

					<div class="col col-md-12 col-lg-6 mb-5 mb-lg-0">
						<div class="card border-0">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/stocks/Novotex.png" class="card-img-top"
								alt="Novotex" />
							<div class="card-body text-center px-0">
								<h5 class="card-title">Novotex</h5>
								<img src="<?php echo get_template_directory_uri(); ?>/promo/img/stocks/Stars.svg" class="mb-2 img-fluid"
									alt="5 звезд" />

								<p class="card-text card-price">
									От <span>8&nbsp;240</span> руб/м<sup>2</sup>
								</p>
								<button class="btn btn-primary btn-cta" data-bs-toggle="modal" data-bs-target="#feedback-modal"
									data-context="calculate-cost-novotex" aria-label="Подробная консультация" data-profile="Novotex">
									Рассчитать стоимость
								</button>
							</div>
						</div>
					</div>

					<div class="col col-md-12 col-lg-6 mb-5 mb-lg-0">
						<div class="card border-0">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/stocks/Provedal.png" class="card-img-top"
								alt="Provedal" />
							<div class="card-body text-center px-0">
								<h5 class="card-title">Provedal</h5>
								<img src="<?php echo get_template_directory_uri(); ?>/promo/img/stocks/Stars.svg" class="mb-2 img-fluid"
									alt="5 звезд" />

								<p class="card-text card-price">
									От <span>6&nbsp;040</span> руб/м<sup>2</sup>
								</p>
								<button class="btn btn-primary btn-cta" data-bs-toggle="modal" data-bs-target="#feedback-modal"
									data-context="calculate-cost-provedal" aria-label="Подробная консультация" data-profile="Provedal">
									Рассчитать стоимость
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="price" class="section section-windows-standard-price bg-light">
			<div class="container">
				<h2 class="section__title section-uso__title">
					Цены на стандартные
					<span> варианты окон</span>
				</h2>
				<p class="section__subtitle">
					Готовые решения по остеклению с прозрачной ценой и гарантией качества.
					Подбираем оптимальный вариант под задачи — будь то уютная квартира или
					коммерческий объект.
				</p>

				<div class="row justify-content-center">
					<div class="col-md-10 col-lg-8 text-center mb-5 mb-lg-0">
						<h3 class="mb-3 mb-md-2">Окно с <span>2 створками</span></h3>
						<img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/card-img-4.png"
							class="mb-3 img-fluid w-100" alt="Окно с 2 створками" />
						<div class="flag mx-auto">
							<p class="card-discount-price">Скидка <span>1 250</span> руб</p>
						</div>
						<p class="card-price mb-2">От <span>8&nbsp;300</span> руб</p>
						<button class="btn btn-primary btn-cta mx-auto" data-bs-toggle="modal" data-bs-target="#feedback-modal"
							data-context="calculate-cost-2-wings" aria-label="Подробная консультация"
							data-profile="Окно с 2 створками">
							Рассчитать стоимость
						</button>
					</div>
					<div class="col-md-10 col-lg-8 text-center mb-5 mb-lg-0">
						<h3 class="mb-3 mb-md-2">Окно с <span>3 створками</span></h3>
						<img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/card-img-5.png"
							class="mb-3 img-fluid w-100" alt="Окно с 3 створками" />
						<div class="flag mx-auto">
							<p class="card-discount-price">Скидка <span>1 600</span> руб</p>
						</div>
						<p class="card-price mb-2">От <span>11&nbsp;900</span> руб</p>
						<button class="btn btn-primary btn-cta mx-auto" data-bs-toggle="modal" data-bs-target="#feedback-modal"
							data-context="calculate-cost-3-wings" aria-label="Подробная консультация"
							data-profile="Окно с 3 створками">
							Рассчитать стоимость
						</button>
					</div>
					<div class="col-md-10 col-lg-8 text-center mb-0">
						<h3 class="mb-3 mb-md-2">Балконный <span>блок</span></h3>
						<img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/card-img-6.png"
							class="mb-3 img-fluid w-100" alt="Балконный блокь" />
						<div class="flag mx-auto">
							<p class="card-discount-price">Скидка <span>2 050</span> руб</p>
						</div>
						<p class="card-price mb-2">От <span>14&nbsp;900</span> руб</p>
						<button class="btn btn-primary btn-cta mx-auto" data-bs-toggle="modal" data-bs-target="#feedback-modal"
							data-context="calculate-cost-balcony-block" aria-label="Подробная консультация"
							data-profile="Балконный блок">
							Рассчитать стоимость
						</button>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-windows-standard-price bg-light">
			<div class="container">
				<h2 class="section__title section-uso__title" style="max-width: 100%">
					Цены на стандартные варианты
					<span>остекления балконов и лоджий</span>
				</h2>
				<p class="section__subtitle">
					Поможем, подскажем и рассчитаем стоимость Вашего балкона или лоджии
				</p>

				<div class="row justify-content-center" style="margin-top: 30px">
					<div class="col-md-12 col-lg-10 col-xl-8 text-center mb-5 mb-lg-0">
						<h5 class="mb-3 section-windows-title">
							Лоджия <span>«Прямой»</span> 3х1,5
						</h5>
						<img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/card-img-1.png"
							class="mb-3 img-fluid w-100 card-windows" alt="Окно с 2 створками" />

						<div class="price-item-wrapper mb-3 px-md-3">
							<div class="price-item">
								<span class="price-item__name">Холодное остекление</span>
								<span class="price-item__dots"></span>
								<span class="price-item__price">от
									<span style="color: #1b75bb; font-weight: 700">12 630</span>
									руб</span>
							</div>

							<div class="price-item">
								<span class="price-item__name">Полутеплое остекление</span>
								<span class="price-item__dots"></span>
								<span class="price-item__price">от
									<span style="color: #1b75bb; font-weight: 700">17 300</span>
									руб</span>
							</div>

							<div class="price-item">
								<span class="price-item__name">Теплое остекление</span>
								<span class="price-item__dots"></span>
								<span class="price-item__price">от
									<span style="color: #1b75bb; font-weight: 700">18 355</span>
									руб</span>
							</div>
						</div>

						<button class="btn btn-primary btn-cta mx-auto" data-bs-toggle="modal" data-bs-target="#feedback-modal"
							data-context="calculate-cost-loggia-straight" aria-label="Подробная консультация"
							data-profile="Лоджия прямая">
							Рассчитать стоимость
						</button>
					</div>
					<div class="col-md-12 col-lg-10 col-xl-8 text-center mb-5 mb-lg-0">
						<h5 class="mb-3 section-windows-title">
							Балкон <span>«Угловой»</span> 3х1,5
						</h5>
						<img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/card-img-2.png"
							class="mb-3 img-fluid w-100 card-windows" alt="Окно с 3 створками" />

						<div class="price-item-wrapper mb-3 px-md-3">
							<div class="price-item">
								<span class="price-item__name">Холодное остекление</span>
								<span class="price-item__dots"></span>
								<span class="price-item__price">от
									<span style="color: #1b75bb; font-weight: 700">16 800</span>
									руб</span>
							</div>

							<div class="price-item">
								<span class="price-item__name">Полутеплое остекление</span>
								<span class="price-item__dots"></span>
								<span class="price-item__price">от
									<span style="color: #1b75bb; font-weight: 700">19 100</span>
									руб</span>
							</div>

							<div class="price-item">
								<span class="price-item__name">Теплое остекление</span>
								<span class="price-item__dots"></span>
								<span class="price-item__price">от
									<span style="color: #1b75bb; font-weight: 700">23 000</span>
									руб</span>
							</div>
						</div>

						<button class="btn btn-primary btn-cta mx-auto" data-bs-toggle="modal" data-bs-target="#feedback-modal"
							data-context="calculate-cost-balcony-corner" aria-label="Подробная консультация"
							data-profile="Балкон угловой">
							Рассчитать стоимость
						</button>
					</div>
					<div class="col-md-12 col-lg-10 col-xl-8 text-center mb-0">
						<h5 class="mb-3 section-windows-title">
							Балкон <span>«П-образный»</span> 3х1,5
						</h5>
						<img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/card-img-3.png"
							class="mb-3 img-fluid w-100 card-windows" alt="Балконный блокь" />

						<div class="price-item-wrapper mb-3 px-md-3">
							<div class="price-item">
								<span class="price-item__name">Холодное остекление</span>
								<span class="price-item__dots"></span>
								<span class="price-item__price">от
									<span style="color: #1b75bb; font-weight: 700">21 600</span>
									руб</span>
							</div>

							<div class="price-item">
								<span class="price-item__name">Полутеплое остекление</span>
								<span class="price-item__dots"></span>
								<span class="price-item__price">от
									<span style="color: #1b75bb; font-weight: 700">24 900</span>
									руб</span>
							</div>

							<div class="price-item">
								<span class="price-item__name">Теплое остекление</span>
								<span class="price-item__dots"></span>
								<span class="price-item__price">от
									<span style="color: #1b75bb; font-weight: 700">31 350
									</span>
									руб</span>
							</div>
						</div>

						<button class="btn btn-primary btn-cta mx-auto" data-bs-toggle="modal" data-bs-target="#feedback-modal"
							data-context="calculate-cost-balcony-u-shaped" aria-label="Подробная консультация"
							data-profile="Балкон П-образный">
							Рассчитать стоимость
						</button>
					</div>
				</div>
			</div>
		</section>

		<section id="quiz" class="quiz-section py-5">
			<div class="container">
				<h2 class="section__title section-uso__title">
					Нет вашего
					<span>варианта окна?</span>
				</h2>
				<p class="section__subtitle">
					Воспользуйтесь конфигуратором. Пришлем стоимость любым удобным способом.
				</p>

				<div class="quiz-question-container">
					<div class="row text-start">
						<!-- 1 -->
						<div class="col-md-16" id="question-1">
							<h3 class="quiz-section-subtitle mb-4">Какое окно Вам нужно?</h3>

							<div class="row quiz-questions-container">
								<div class="col-12 col-md-8 col-lg-6">
									<label class="option_item mb-3" for="answer-1-1">
										<input type="radio" id="answer-1-1" name="question-1" class="checkbox" value="Одностворчатое" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-1-1.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Одностворчатое</h6>
								</div>
								<div class="col-12 col-md-8 col-lg-6">
									<label class="option_item mb-3" for="answer-1-2">
										<input type="radio" id="answer-1-2" name="question-1" class="checkbox" value="Двухстворчатое" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-1-2.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Двухстворчатое</h6>
								</div>
								<div class="col-12 col-md-8 col-lg-6">
									<label class="option_item mb-3" for="answer-1-3">
										<input type="radio" id="answer-1-3" name="question-1" class="checkbox" value="Трехстворчатое" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-1-3.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Трехстворчатое</h6>
								</div>
								<div class="col-12 col-md-8 col-lg-6">
									<label class="option_item mb-3" for="answer-1-4">
										<input type="radio" id="answer-1-4" name="question-1" class="checkbox" value="Балконный блок" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-1-4.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3">Балконный блок</h6>
								</div>
								<div class="col-12 col-md-8 col-lg-6">
									<label class="option_item mb-3" for="answer-1-5">
										<input type="radio" id="answer-1-5" name="question-1" class="checkbox" value="Окна на балкон" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-1-5.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Окна на балкон</h6>
								</div>
								<div class="col-12 col-md-8 col-lg-6">
									<label class="option_item mb-3" for="answer-1-6">
										<input type="radio" id="answer-1-6" name="question-1" class="checkbox"
											value="Портальное остекление" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-1-6.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Портальное остекление</h6>
								</div>
							</div>

							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 0%"></div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												disabled="" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-1' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /1 -->

						<!-- 2-1 -->
						<div class="col-md-16" id="question-2-1" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">
								Какие створки окна Вам нужны?
							</h3>

							<div class="row quiz-questions-container">
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-1-1">
										<input type="radio" id="answer-2-1-1" name="question-2-1" class="checkbox" value="Глухое окно" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-1-1.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Глухое окно</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-1-2">
										<input type="radio" id="answer-2-1-2" name="question-2-1" class="checkbox"
											value="Створка поворотная" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-1-2.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Створка поворотная</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-1-3">
										<input type="radio" id="answer-2-1-3" name="question-2-1" class="checkbox"
											value="Створка поворотно-откидная" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-1-3.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Створка поворотно-откидная
									</h6>
								</div>
							</div>

							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 15%">15%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-2-1' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-2-1' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /2-1 -->

						<!-- 2-2 -->
						<div class="col-md-16" id="question-2-2" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">
								Какие створки окна Вам нужны?
							</h3>

							<div class="row quiz-questions-container">
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-2-1">
										<input type="radio" id="answer-2-2-1" name="question-2-2" class="checkbox"
											value="Створка глухая + створка поворотно-откидная" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-2-1.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Створка глухая + створка поворотно-откидная
									</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-2-2">
										<input type="radio" id="answer-2-2-2" name="question-2-2" class="checkbox"
											value="Створка поворотная + створка поворотно-откидная" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-2-2.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Створка поворотная + створка поворотно-откидная
									</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-2-3">
										<input type="radio" id="answer-2-2-3" name="question-2-2" class="checkbox"
											value="2 створки поворотно-откидные" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-2-3.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										2 створки поворотно-откидные
									</h6>
								</div>
							</div>

							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 15%">15%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-2-2' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-2-2' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /2-2 -->

						<!-- 2-3 -->
						<div class="col-md-16" id="question-2-3" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">
								Какие створки окна Вам нужны?
							</h3>
							<div class="row quiz-questions-container">
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-3-1">
										<input type="radio" id="answer-2-3-1" name="question-2-3" class="checkbox"
											value="Средняя створка поворотно-откидная + 2 створки глухие" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-3-1.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Средняя створка поворотно-откидная + 2 створки глухие
									</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-3-2">
										<input type="radio" id="answer-2-3-2" name="question-2-3" class="checkbox"
											value="Боковые створки поворотно откидные + средняя створка глухая" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-3-2.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Боковые створки поворотно откидные + средняя створка
										глухая
									</h6>
								</div>
							</div>

							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 15%">15%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-2-3' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-2-3' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /2-3 -->

						<!-- 2-4 -->
						<div class="col-md-16" id="question-2-4" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">Выберите балконный блок?</h3>

							<div class="row quiz-questions-container">
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-4-1">
										<input type="radio" id="answer-2-4-1" name="question-2-4" class="checkbox"
											value="Дверь + глухое окно" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-4-1.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Дверь + глухое окно</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-4-2">
										<input type="radio" id="answer-2-4-2" name="question-2-4" class="checkbox"
											value="Дверь + створка поворотно-откидная" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-4-2.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Дверь + створка поворотно-откидная
									</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-4-3">
										<input type="radio" id="answer-2-4-3" name="question-2-4" class="checkbox"
											value="Дверь + глухая створка + поворотно откидная" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-4-3.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Дверь + глухая створка + поворотно откидная
									</h6>
								</div>
							</div>

							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 15%">15%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-2-4' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-2-4' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /2-4 -->

						<!-- 2-5 -->
						<div class="col-md-16" id="question-2-5" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">Выберите форму балкон?</h3>

							<div class="row quiz-questions-container">
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-5-1">
										<input type="radio" id="answer-2-5-1" name="question-2-5" class="checkbox" value="Прямой балкон" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-5-1.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Прямой балкон</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-5-2">
										<input type="radio" id="answer-2-5-2" name="question-2-5" class="checkbox" value="Угловой балкон" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-5-2.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Угловой балкон</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-5-3">
										<input type="radio" id="answer-2-5-3" name="question-2-5" class="checkbox"
											value="П-образный балкон" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-5-3.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">П-образный балкон</h6>
								</div>
							</div>

							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 15%">15%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-2-5' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-2-5' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /2-5 -->

						<!-- 2-6 -->
						<div class="col-md-16" id="question-2-6" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">
								Выберите портальное остекление?
							</h3>

							<div class="row quiz-questions-container">
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-6-1">
										<input type="radio" id="answer-2-6-1" name="question-2-6" class="checkbox" value="Раздвижное" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-6-1.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Раздвижное</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-2-6-2">
										<input type="radio" id="answer-2-6-2" name="question-2-6" class="checkbox" value="Гармошкой" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-2-6-2.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Гармошкой</h6>
								</div>
							</div>
							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 15%">15%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-2-6' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-2-6' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /2-6 -->

						<!-- 3-1 -->
						<div class="col-md-16" id="question-3-1" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">Укажите размеры изделия</h3>

							<div class="row quiz-questions-container">
								<div class="col-24 col-sm-12 col-md-12">
									<label for="answer-3-1-1" class="form-label">Ширина, мм</label>
									<input type="text" class="form-control" id="answer-3-1-1" name="question-3-1" />
								</div>
								<div class="col-24 col-sm-12 col-md-12">
									<label for="answer-3-1-2" class="form-label">Высота, мм</label>
									<input type="text" class="form-control" id="answer-3-1-2" name="question-3-1" />
								</div>
							</div>
							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 30%">30%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-3-1' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-3-1' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /3-1 -->

						<!-- 3-2 -->
						<div class="col-md-16" id="question-3-2" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">Укажите размеры изделия</h3>

							<div class="row quiz-questions-container">
								<div class="col-24 col-sm-12 col-md-6">
									<label for="answer-3-2-1" class="form-label">Ширина основного блока, мм</label>
									<input type="text" class="form-control" id="answer-3-2-1" name="question-3-2" />
								</div>
								<div class="col-24 col-sm-12 col-md-6">
									<label for="answer-3-2-2" class="form-label">Высота основного блока, мм</label>
									<input type="text" class="form-control" id="answer-3-2-2" name="question-3-2" />
								</div>
								<div class="col-24 col-sm-12 col-md-6">
									<label for="answer-3-2-3" class="form-label">Ширина боковой створки, мм</label>
									<input type="text" class="form-control" id="answer-3-2-3" name="question-3-2" />
								</div>
							</div>
							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 30%">30%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-3-2' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-3-2' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /3-2 -->

						<!-- 3-3 -->
						<div class="col-md-16" id="question-3-3" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">Укажите размеры изделия</h3>

							<div class="row quiz-questions-container">
								<div class="col-24 col-sm-12 col-md-6">
									<label for="answer-3-3-1" class="form-label">Ширина основного блока, мм</label>
									<input type="text" class="form-control" id="answer-3-3-1" name="question-3-3" />
								</div>
								<div class="col-24 col-sm-12 col-md-6">
									<label for="answer-3-3-2" class="form-label">Высота основного блока, мм</label>
									<input type="text" class="form-control" id="answer-3-3-2" name="question-3-3" />
								</div>
								<div class="col-24 col-sm-12 col-md-6">
									<label for="answer-3-3-3" class="form-label">Ширина первой боковой створки, мм</label>
									<input type="text" class="form-control" id="answer-3-3-3" name="question-3-3" />
								</div>
								<div class="col-24 col-sm-12 col-md-6">
									<label for="answer-3-3-4" class="form-label">Ширина второй боковой створки, мм</label>
									<input type="text" class="form-control" id="answer-3-3-4" name="question-3-3" />
								</div>
							</div>
							<!-- /.quiz-questions-container -->
							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 30%">30%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-3-3' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-3-3' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /3-3 -->

						<!-- Question 4 -->
						<div class="col-md-16" id="question-4" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">
								Выберите вариант остекления
							</h3>

							<div class="row quiz-questions-container">
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-4-1">
										<input type="radio" id="answer-4-1" name="question-4" class="checkbox"
											value="Холодное (для неотапливаемых помещений)" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-4-1.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Холодное (для неотапливаемых помещений)
									</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-4-2">
										<input type="radio" id="answer-4-2" name="question-4" class="checkbox"
											value="Полутеплое (для помещений граничащих с отапливаемыми помещениями)" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-4-2.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Полутеплое (для помещений граничащих с отапливаемыми
										помещениями)
									</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-4-3">
										<input type="radio" id="answer-4-3" name="question-4" class="checkbox"
											value="Теплое (для жилых помещений)" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-4-3.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Теплое (для жилых помещений)
									</h6>
								</div>
							</div>
							<!-- /.quiz-questions-container -->
							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 45%">45%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-4' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-4' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Question 4 -->

						<!-- Question 5 -->
						<div class="col-md-16" id="question-5" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">Выберите цвет изделий</h3>

							<div class="row quiz-questions-container">
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-5-1">
										<input type="radio" id="answer-5-1" name="question-5" class="checkbox" value="Белый" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-5-1.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Белый</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-5-2">
										<input type="radio" id="answer-5-2" name="question-5" class="checkbox" value="Цветной гладкий" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-5-2.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Цветной гладкий</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-5-3">
										<input type="radio" id="answer-5-3" name="question-5" class="checkbox"
											value="Цветной с тексткурой дерева" />
										<div class="option_inner">
											<div class="shadow-wrapper">
												<div class="shadow-wrapper-decoration"></div>
											</div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-img-5-3.jpg"
												style="width: 100%" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Цветной с тексткурой дерева
									</h6>
								</div>
							</div>
							<!-- /.quiz-questions-container -->
							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 60%">60%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-5' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-5' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Question 5 -->

						<!-- Question 6 -->
						<div class="col-md-16" id="question-6" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">
								Какие детали изделия нужны дополнительно
							</h3>

							<div class="row quiz-questions-container">
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-6-1">
										<input type="checkbox" id="answer-6-1" name="answer-6-1" class="checkbox"
											value="демонтаж старой конструкции" />
										<div class="option_inner text-start">
											<div class="shadow-wrapper-box"></div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/ico/checkbox.svg" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">
										Демонтаж старой конструкции
									</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-6-2">
										<input type="checkbox" id="answer-6-2" name="answer-6-2" class="checkbox" value="монтаж изделий" />
										<div class="option_inner text-start">
											<div class="shadow-wrapper-box"></div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/ico/checkbox.svg" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Монтаж изделий</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-6-3">
										<input type="checkbox" id="answer-6-3" name="answer-6-3" class="checkbox" value="подоконник" />
										<div class="option_inner text-start">
											<div class="shadow-wrapper-box"></div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/ico/checkbox.svg" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Подоконник</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-6-4">
										<input type="checkbox" id="answer-6-4" name="answer-6-4" class="checkbox" value="теплые откосы" />
										<div class="option_inner text-start">
											<div class="shadow-wrapper-box"></div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/ico/checkbox.svg" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Теплые откосы</h6>
								</div>
								<div class="col-12 col-md-8">
									<label class="option_item mb-3" for="answer-6-5">
										<input type="checkbox" id="answer-6-5" name="answer-6-5" class="checkbox" value="отлив" />
										<div class="option_inner text-start">
											<div class="shadow-wrapper-box"></div>
											<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/ico/checkbox.svg" />
										</div>
									</label>
									<h6 class="quiz-section-h3 mb-4">Отлив</h6>
								</div>
							</div>
							<!-- /.quiz-questions-container -->
							<div class="row align-items-end">
								<div class="col-md-12 mb-4 mb-md-0">
									<div class="progress-title mb-1">Готово:</div>
									<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
										aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar" style="width: 75%">75%</div>
									</div>
									<div style="clear: both"></div>
								</div>
								<div class="col-md-12 text-md-center">
									<div class="row">
										<div class="col-24 col-md-12 mb-3">
											<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
												onclick="previousQuostion( 'question-6' );" />
										</div>
										<div class="col-24 col-md-12">
											<input type="button" id="btn-next-question-1" value="Далее"
												class="btn btn-primary btn-cta btn-corporate-color-1" style="width: 100%"
												onclick="nextQuostion( 'question-6' );" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Question 6 -->

						<!-- Question 7 -->
						<div class="col-md-16" id="question-7" style="display: none">
							<h3 class="quiz-section-subtitle mb-4">
								Оставьте Ваш номер телефона и получите
								<span style="color: #0c99cc">ценный подарок</span> на замере!
							</h3>

							<form action="<?php echo get_template_directory_uri(); ?>/promo/mails/callback_handler.php" id="feedback"
								method="post" name="feedback" class="form">
								<div class="loader-box"><span class="loader"></span></div>

								<input type="hidden" name="form-source" value="quiz">
								<input type="hidden" name="button-context" value="quiz-configurator">

								<div class="row quiz-questions-container align-items-center">
									<div class="col col-md-12">
										<div class="form__box">
											<div class="form-floating mb-3">
												<input type="text" class="form-control" id="feedback-name" name="form-name"
													placeholder="Ваше имя" required="" />
												<label for="feedback-name"><span class="form__required">*</span> Ваше
													имя</label>
											</div>
											<div class="form-floating mb-3">
												<input type="tel" pattern="^(\+7|8)\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$" class="form-control"
													id="feedback-phone" name="form-phone" placeholder="Телефон" required=""
													title="Введите номер в формате: +7 (999) 999-99-99 или 8 (999) 999-99-99" />
												<label for="feedback-phone"><span class="form__required">*</span>
													Телефон</label>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<img src="https://real-okno.ru/wp-content/themes/site100-windows/img/quiz/quiz-present-img.png"
											alt="Подарок" class="w-100" />
									</div>
								</div>
								<!-- /.quiz-questions-container -->

								<div class="row align-items-center">
									<div class="col-md-12 mb-4 mb-md-0">
										<div class="progress-title mb-1">Готово:</div>
										<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="90"
											aria-valuemin="0" aria-valuemax="100">
											<div class="progress-bar" style="width: 90%">
												90%
											</div>
										</div>
										<div style="clear: both"></div>
									</div>
									<div class="col-md-12 text-md-center">
										<div class="row">
											<div class="col text-start">
												<div class="form-check form__privacy-policy-check mb-3">
													<input class="form-check-input" type="checkbox" value="" id="feedback-privacy-policy"
														checked="" required="" />
													<label class="form-check-label" for="feedback-privacy-policy">
														Оставляя заявку, вы даете свое согласие
														на обработку персональных данных в
														соответствие с
														<a href="https://oknamobifon.ru/privacy/" data-bs-toggle="modal"
															data-bs-target="#modal-privacy">
															политикой конфиденциальности</a>
													</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-24 col-md-12 mb-3">
												<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" style="width: 100%"
													onclick="previousQuostion( 'question-7' );" />
											</div>
											<div class="col-24 col-md-12">
												<button type="submit" class="btn btn-primary btn-icon btn--icon-right btn-cta"
													style="width: 100%">
													Отправить
													<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
														<path
															d="M22 9a1 1 0 000 1.42l4.6 4.6H3.06a1 1 0 100 2h23.52L22 21.59A1 1 0 0022 23a1 1 0 001.41 0l6.36-6.36a.88.88 0 000-1.27L23.42 9A1 1 0 0022 9z"
															fill="currentColor"></path>
													</svg>
												</button>
											</div>
										</div>
									</div>
								</div>

								<!-- Скрытые поля для передачи ответов квиза -->
								<input type="hidden" id="form-answer-1" name="form-answer-1" />
								<input type="hidden" id="form-answer-2" name="form-answer-2" />
								<input type="hidden" id="form-answer-3-1" name="form-answer-3-1" />
								<input type="hidden" id="form-answer-3-2" name="form-answer-3-2" />
								<input type="hidden" id="form-answer-3-3" name="form-answer-3-3" />
								<input type="hidden" id="form-answer-3-4" name="form-answer-3-4" />
								<input type="hidden" id="form-answer-4" name="form-answer-4" />
								<input type="hidden" id="form-answer-5" name="form-answer-5" />
								<input type="hidden" id="form-answer-6-1" name="form-answer-6-1" />
								<input type="hidden" id="form-answer-6-2" name="form-answer-6-2" />
								<input type="hidden" id="form-answer-6-3" name="form-answer-6-3" />
								<input type="hidden" id="form-answer-6-4" name="form-answer-6-4" />
								<input type="hidden" id="form-answer-6-5" name="form-answer-6-5" />
							</form>
						</div>
						<!-- /Question 7 -->

						<!-- Quiz director -->
						<div class="col-md-8">
							<div class="row justify-content-center">
								<div class="col pt-5 text-center text-md-start">
									<h5 class="quiz-section-h3 mb-3">
										Нужна конcультация?<span> Отвечу на все вопросы</span>
									</h5>
									<img src="<?php echo get_template_directory_uri(); ?>/promo/img/director-img.jpg"
										class="img-fluid mb-2 w-100" style="max-width: 150px; border-radius: 50%" />
									<h5 class="quiz-section-h3 mb-4">
										Миронов Александр <br />
										<span style="color: #1b75bb"> Директор компании</span>
									</h5>
									<a href="tel:+74956464959" style="color: #343a40; text-decoration: none">
										<h4 class="quiz-section-h3 mb-3">
											+7 (495)<span style="color: #1b75bb">
												646-49-59</span>
										</h4>
									</a>
									<ul
										class="nav mb-2 mb-lg-0 d-flex p-0 justify-content-center justify-content-md-start quiz-section-icons">
										<li class="nav-item">
											<a class="nav-link ico-button px-0" href="https://wa.me/79938642678?text=Здравствуйте!"
												target="blank"><img
													src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/icon-whatsapp.svg"
													alt="WhatsApp" /></a>
										</li>
										<li class="nav-item">
											<a class="nav-link ico-button ms-3 px-0" href="https://t.me/+79852111060">
												<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/icon-telegram.svg"
													alt="Телеграм" />
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End quiz director -->
					</div>
				</div>
				<!-- /.quiz-question-container -->
			</div>
		</section>

		<section class="section form-smeta section-quality">
			<div class="container">
				<div class="recalc_smeta">
					<img class="background desktop"
						src="<?php echo get_template_directory_uri(); ?>/promo/img/smetaFon/smetaFon.png" />
					<img class="background tablet"
						src="<?php echo get_template_directory_uri(); ?>/promo/img/smetaFon/smetaFon_768.png" />
					<img class="background mobile"
						src="<?php echo get_template_directory_uri(); ?>/promo/img/smetaFon/smetaFon_320.png" />
					<div class="blockCont">
						<div class="text mb-3">
							<div class="title">Пересчитаем смету</div>
							<div class="subtitle">конкурентов со скидкой</div>
						</div>

						<button class="btn btn-primary btn-cta mx-auto mx-sm-0" data-bs-toggle="modal"
							data-bs-target="#calculatePriceWithDownloadModal" aria-label="Прикрепить смету"
							data-context="attach-estimate">
							Прикрепить смету
						</button>
					</div>
				</div>
			</div>
		</section>

        <section class="section section-promo-products section-quality bg-white pb-5">
			<div class="container">
				<h2 class="section__title section-uso__title">Установка <span>окон</span></h2>
				<p class="section__subtitle section-products__subtitle mb-5"
					style="max-width: 70%; width: 100%; text-wrap: auto">
					Одним из основных факторов качественного остекления является монтаж окон.
					При неправильном монтаже, даже после установки самых дорогих окон могут быть
					проблемы
				</p>

				<!-- Проблемы неправильного монтажа -->
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="icon-item">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/cross.svg" alt="" />
							<div class="icon-text">Продувание</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="icon-item">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/cross.svg" alt="" />

							<div class="icon-text">Протекание</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="icon-item">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/cross.svg" alt="" />
							<div class="icon-text">Плесень</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="icon-item">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/cross.svg" alt="" />
							<div class="icon-text">Грибок</div>
						</div>
					</div>
				</div>

				<h4 class="my-5">
					При установке окон нашей компанией это не произойдет, потому что:
				</h4>

				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="icon-item">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/check-mark.svg" alt="" />
							<p class="icon-text">Используем только качественные материалы</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="icon-item">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/check-mark.svg" alt="" />
							<p class="icon-text">Монтаж строго по ГОСТу</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="icon-item">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/check-mark.svg" alt="" />
							<p class="icon-text">Средний стаж монтажника более 15 лет</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="icon-item">
							<img src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/check-mark.svg" alt="" />
							<p class="icon-text">Опыт работы нашей компании более 25 лет</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="stocks" class="archive-portfolio-section archive-portfolio bg-light py-5">
			<div class="container">
				<h2 class="section__title section-uso__title">Акции и скидки <span>от нашей компании</span></h2>

				<div class="row">
					<div class="col-md-8">
						<img src="<?php echo get_template_directory_uri(); ?>/promo/img/action/action-card-1.jpg"
							class="img-fluid rounded w-100 mb-3 mb-md-0" alt="Скидки до 25% до 31 августа" />
					</div>
					<div class="col-md-8">
						<img src="<?php echo get_template_directory_uri(); ?>/promo/img/action/action-card-2.jpg"
							class="img-fluid rounded w-100 mb-3 mb-md-0" alt="Скидки до 50% до 31 декабря" />
					</div>
					<div class="col-md-8">
						<img src="<?php echo get_template_directory_uri(); ?>/promo/img/action/action-card-3.jpg"
							class="img-fluid rounded w-100 mb-3 mb-md-0" alt="Рассрочка на 1 год до 30 сентября" />
					</div>
				</div>
			</div>
		</section>

        <section class="section section-how bg-grey py-5">
            <div class="container">
                <h2 class="section__title section-uso__title">Как мы <span>работаем</span></h2>

                <div class="row mx-auto">
                    <div class="col-sm-12 col-xl-4 mb-4 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-12 text-center">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/1.svg" alt="Шаг" class="img-fluid">
                            </div>
                            <div class="col-12">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/process-ico-1.svg" alt="Процесс" class="img-fluid">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col text-start">
                                <p class="mb-0" >Свяжитесь с нами любым удобным для Вас способом или оставьте заявку на сайте.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 mb-4 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-12 text-center">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/2.svg" alt="Шаг" class="img-fluid">
                            </div>
                            <div class="col-12">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/process-ico-2.svg" alt="Процесс" class="img-fluid">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col text-start">
                                <p class="mb-0" >Рассчитаем предварительную стоимость за 15 минут.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 mb-4 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-12 text-center">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/3.svg" alt="Шаг" class="img-fluid">
                            </div>
                            <div class="col-12">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/process-ico-3.svg" alt="Процесс" class="img-fluid">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col text-start">
                                <p class="mb-0" >Если цена устраивает, то <b>бесплатно</b> приезжает замерщик для составления точной сметы.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 mb-4 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-12 text-center">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/4.svg" alt="Шаг" class="img-fluid">
                            </div>
                            <div class="col-12">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/process-ico-4.svg" alt="Процесс" class="img-fluid">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col text-start">
                                <p class="mb-0" >Если все устраивает, то заключаем договор.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 mb-4 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-12 text-center">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/5.svg" alt="Шаг" class="img-fluid">
                            </div>
                            <div class="col-12">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/process-ico-5.svg" alt="Процесс" class="img-fluid">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col text-start">
                                <p class="mb-0" >Изготовляем окна от 7&nbsp;дней!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 mb-0">
                        <div class="row align-items-center">
                            <div class="col-12 text-center">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/6.svg" alt="Шаг" class="img-fluid">
                            </div>
                            <div class="col-12">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/promo/img/SVG/process-ico-6.svg" alt="Процесс" class="img-fluid">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col text-start">
                                <p class="mb-0" >Доставляем и устанавливаем <b>одним&nbsp;днем!</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-how bg-light  py-5">
            <div class="container">
                <header class="section__header">
					<div>
						<h2 class="section__title section-uso__title">
							Сделайте свои окна 
							<span>еще лучше!</span>
						</h2>

						<p class="section__subtitle">
							Используйте возможности окна по полной — дополните его удобным функционалом!
						</p>
					</div>
				</header>

                <div class="d-flex flex-wrap row">
                    <div class="col-sm-12 col-xl-6 mb-4">
                        <button data-button-context="child-lock" data-bs-toggle="modal" data-bs-target="#feedback-modal" aria-label="Оставить заявку" class="card-link card-link-windows">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/windows-better-8.jpg"
                                    alt="Детский замок" class="card-image">
                                <div class="image-text">Детский замок</div>
                            </div>
                            <div class="card-content">
                                <p class="card-description">Безопасность Ваших детей у окна.</p>
                                <div class="btn btn-primary btn-cta">Оставить заявку </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-sm-12 col-xl-6 mb-4">
                        <button data-button-context="anti-burglary-hardware" data-bs-toggle="modal" data-bs-target="#feedback-modal" aria-label="Оставить заявку" class="card-link card-link-windows">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/windows-better-7.jpg"
                                    alt="Противовзломная фурнитура" class="card-image">
                                <div class="image-text">Противовзломная фурнитура</div>
                            </div>
                            <div class="card-content">
                                <p class="card-description">Защитит от проникновения злоумышленников.</p>
                                <div class="btn btn-primary btn-cta">Оставить заявку </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-sm-12 col-xl-6 mb-4">
                        <button data-button-context="step-ventilation" data-bs-toggle="modal" data-bs-target="#feedback-modal" aria-label="Оставить заявку" class="card-link card-link-windows">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/windows-better-6.jpg"
                                    alt="Ступенчатое проветривание" class="card-image">
                                <div class="image-text">Ступенчатое проветривание</div>
                            </div>
                            <div class="card-content">
                                <p class="card-description">Регулировка уровня проветривания до комфортного.</p>
                                <div class="btn btn-primary btn-cta">Оставить заявку </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-sm-12 col-xl-6 mb-4">
                        <button data-button-context="hidden-hinges" data-bs-toggle="modal" data-bs-target="#feedback-modal" aria-label="Оставить заявку" class="card-link card-link-windows">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/windows-better-5.jpg"
                                    alt="Скрытые петли" class="card-image">
                                <div class="image-text">Скрытые петли</div>
                            </div>
                            <div class="card-content">
                                <p class="card-description">Придают окну более эстетичный вид.</p>
                                <div class="btn btn-primary btn-cta">Оставить заявку </div>
                            </div>
                        </button>
                    </div>
                    
                    <div class="col-sm-12 col-xl-6 mb-4">
                        <button  data-button-context="window-sills" data-bs-toggle="modal" data-bs-target="#feedback-modal" aria-label="Оставить заявку" class="card-link card-link-windows">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/windows-better-4.jpg"
                                    alt="Подоконники для окон" class="card-image">
                                <div class="image-text">Подоконники для окон</div>
                            </div>
                            <div class="card-content">
                                <p class="card-description">Дополнительное удобство и возможность полноценно использовать каждый сантиметр пространства.</p>
                                <div class="btn btn-primary btn-cta">Оставить заявку </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-sm-12 col-xl-6 mb-4">
                        <button data-button-context="slope-finishing" data-bs-toggle="modal" data-bs-target="#feedback-modal" aria-label="Оставить заявку" class="card-link card-link-windows">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/windows-better-3.jpg"
                                    alt="Отделка откосов" class="card-image">
                                <div class="image-text">Отделка откосов</div>
                            </div>
                            <div class="card-content">
                                <p class="card-description">Утеплённые откосы из сандвич-панелей — красивый и стильный вид окна.</p>
                                <div class="btn btn-primary btn-cta">Оставить заявку </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-sm-12 col-xl-6 mb-4">
                        <button  data-button-context="glass-unit-replacement" data-bs-toggle="modal" data-bs-target="#feedback-modal" aria-label="Оставить заявку" class="card-link card-link-windows">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/windows-better-2.jpg"
                                    alt="Замена стеклопакета" class="card-image">
                                <div class="image-text">Замена стеклопакета</div>
                            </div>
                            <div class="card-content">
                                <p class="card-description">Повышенные свойства тепло и звуко изоляции Ваших окон.</p>
                                <div class="btn btn-primary btn-cta">Оставить заявку </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-sm-12 col-xl-6 mb-4">
                        <button data-button-context="remote-ventilation" data-bs-toggle="modal" data-bs-target="#feedback-modal" aria-label="Оставить заявку" class="card-link card-link-windows">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/promo/img/windows/windows-better-1.jpg"
                                    alt="Дистанционное проветривание" class="card-image">
                                <div class="image-text">Дистанционное проветривание</div>
                            </div>
                            <div class="card-content">
                                <p class="card-description">Открытие окна не только механически, но и за счёт радиоуправления.</p>
                                <div class="btn btn-primary btn-cta"  >Оставить заявку </div>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="row mt-5">
                    <p class="section__subtitle mb-0"><b>Не нашли нужной функции?</b></p>
                    <p class="section__subtitle mb-0">Оставьте заявку, мы обязательно Вам поможем!</p>
                    <div class="section-hero__cta fade-in-right">
                        <button class="btn btn-primary btn-cta" data-bs-toggle="modal" data-bs-target="#feedback-modal" aria-label="Оставить заявку" data-context="hero-section-request">
                            Оставить заявку
                        </button>
                    </div>
                </div>
            </div>
        </section>



		<section class="section section-cta">
			<div class="container">
				<div class="text-center mb-4">
					<h2 class="section__title section-uso__title mx-auto mb-3">
						Быстрая <span>консультация</span>
					</h2>
					<p class="section__subtitle">
						Заполните форму ниже и получите консультацию специалиста
					</p>
				</div>

				<form action="<?php echo get_template_directory_uri(); ?>/promo/mails/callback_handler.php" id="feedback4"
					method="post" name="feedback" class="form">
					<div class="loader-box justify-content-center align-items-center">
						<span class="loader"></span>
					</div>

					<input type="hidden" name="form-source" value="consultation">
					<input type="hidden" name="button-context" value="quick-consultation">

					<div class="form__box col-md-16 mx-auto">
						<div class="form-horizontal justify-content-center d-flex flex-wrap flex-lg-nowrap">
							<div class="form-floating">
								<input type="text" class="form-control" id="feedback-name4" name="form-name" placeholder="Ваше имя"
									required="" />
								<label for="feedback-name4"><span class="form__required">*</span> Ваше имя</label>
							</div>
							<div class="form-floating">
								<input type="tel" pattern="^(\+7|8)\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$" class="form-control"
									id="feedback-phone4" name="form-phone" placeholder="Телефон" required=""
									title="Введите номер в формате: +7 (999) 999-99-99 или 8 (999) 999-99-99" />
								<label for="feedback-phone4"><span class="form__required">*</span> Телефон</label>
							</div>
							<button type="submit" class="btn btn-primary btn-icon px-4">
								Получить консультацию
							</button>
						</div>
						<div class="text-center mt-3 col-18 col-md-20">
							<div class="form-check d-inline-block">
								<input class="form-check-input" type="checkbox" value="" id="feedback-privacy-policy" checked=""
									required="" />
								<label class="form-check-label" for="feedback-privacy-policy">
									Оставляя заявку, вы даете свое согласие на обработку
									персональных данных в соответствие с
									<a href="https://oknamobifon.ru/privacy/">
										политикой конфиденциальности</a>
								</label>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>

		<section class="section section-uso bg-light">
			<div class="container">
				<h2 class="section__title section-uso__title">
					О
					<span>нас</span>
				</h2>

				<p class="section__subtitle">
					Мы поможем выбрать лучший профиль для ваших окон
				</p>

				<div class="row justify-content-center">
					<div class="col-md-12">
						<img
							src="<?php echo get_template_directory_uri(); ?>/promo/img/free-meas-form/522082201_18403552108112146_5737413084418262371_n.jpg"
							class="w-100" style="border-radius: 9px" />
					</div>
					<div class="col-md-12 pb-5">
						<p>
							Компания ОкнаМобифон была основана более 25 лет назад. Главная
							специализация фирмы — профессиональное производство и установка
							пластиковых, деревянных и алюминиевых окон. Также наши специалисты
							занимаются остеклением и отделкой балконов и лоджий, предоставляем
							услуги монтажа,а также комплексное обслуживание по ремонту оконной
							фурнитуры, профессиональной замене стеклопакетов и установке
							москитных сеток.
						</p>
						<p>
							Предлагаемая продукция отличается высоким качеством. Окна компании
							ОкнаМобифон успешно эксплуатируются в загородных домах и частных
							квартирах Москвы, а также в государственных учреждениях
							образовательного типа (школах, детских садах, институтах и
							университетах). На сегодня мы имеем все необходимые лицензии и
							сертификаты, разрешающие производство и монтаж пластиковых и других
							конструкций.
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-uso advantage my-3 py-5">
			<div class="container">
				<h2 class="section__title section-uso__title">
					Наши
					<span>преимущества</span>
				</h2>
				<p class="section__subtitle">Почему стоит выбрать компанию «ОкнаМобифон»</p>

				<div class="row" style="margin-top: 30px">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-6 col-md-4 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/promo/img/advantage/section-advantage-ico-1.svg"
									class="img-fluid" />
							</div>
							<div class="col-18 col-md-20" style="align-content: center">
								<h5 class="advantage-title text-start">
									Замер и расчет стоимости в день обращения
								</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-6 col-md-4 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/promo/img/advantage/section-advantage-ico-2.svg"
									class="img-fluid" />
							</div>
							<div class="col-18 col-md-20" style="align-content: center">
								<h5 class="advantage-title text-start">
									Беспроцентная рассрочка на 12 месяцев без первоначального
									взноса. Нужен только паспорт
								</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-6 col-md-4 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/promo/img/advantage/section-advantage-ico-3.svg"
									class="img-fluid" />
							</div>
							<div class="col-18 col-md-20" style="align-content: center">
								<h5 class="advantage-title text-start">
									Изготовление 5 рабочих дней
								</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-6 col-md-4 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/promo/img/advantage/section-advantage-ico-4.svg"
									class="img-fluid" />
							</div>
							<div class="col-18 col-md-20" style="align-content: center">
								<h5 class="advantage-title text-start">
									Бесплатная доставка и установка в один день
								</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-6 col-md-4 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/promo/img/advantage/section-advantage-ico-5.svg"
									class="img-fluid" />
							</div>
							<div class="col-18 col-md-20" style="align-content: center">
								<h5 class="advantage-title text-start">
									Гарантия на работы 5 лет
								</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-6 col-md-4 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/promo/img/advantage/section-advantage-ico-6.svg"
									class="img-fluid" />
							</div>
							<div class="col-18 col-md-20" style="align-content: center">
								<h5 class="advantage-title text-start">
									Гарантия на профиль 25 лет
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script>
			document.addEventListener('DOMContentLoaded', function () {
				const hamburgerIcon = document.querySelector('.hamburger');
				const offcanvasMenu = document.getElementById('offcanvasMenu');
				const navLinks = document.querySelectorAll('#offcanvasMenu .nav-link');

				let lastState = false;

				const stateChecker = setInterval(function () {
					if (hamburgerIcon && offcanvasMenu) {
						const isOpen = offcanvasMenu.classList.contains('show');

						if (isOpen !== lastState) {
							if (isOpen) {
								hamburgerIcon.classList.add('open');
							} else {
								hamburgerIcon.classList.remove('open');
							}
							lastState = isOpen;
						}
					}
				}, 100);

				navLinks.forEach(function (link) {
					link.addEventListener('click', function (e) {
						const href = this.getAttribute('href');

						// Найдем и кликнем кнопку закрытия или используем Bootstrap
						const hamburgerBtn = document.querySelector('.btn-hamburger');
						if (hamburgerBtn) {
							hamburgerBtn.click();
						}

						// Для якорных ссылок
						if (href && href.startsWith('#') && href !== '#') {
							e.preventDefault();

							setTimeout(function () {
								const target = document.querySelector(href);
								if (target) {
									target.scrollIntoView({
										behavior: 'smooth',
										block: 'start',
									});
								}
							}, 400);
						}
					});
				});

				window.addEventListener('beforeunload', function () {
					clearInterval(stateChecker);
				});
			});
		</script>

		<section class="section section-reputation">
			<div class="container">
				<div class="row mb-2">
					<div class="col-lg-8">
						<h2 class="section__title section-uso__title">
							Более 25 лет <span>открытой и честной репутации</span>
						</h2>
					</div>
					<div class="col-lg-8">
						<div class="section-reputation__item">
							<div class="section-reputation__item-mark">
								<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/icon-yandex-map.svg"
									alt="Яндекс Карты" />
								5.0
							</div>
							<div class="section-reputation__item-stars">
								<span>✱✱✱✱✱</span>
								<a href="https://yandex.ru/maps/org/oknamobifon/1223052465/reviews/?ll=37.541575%2C55.886544&amp;tab=reviews&amp;z=15.83"
									target="_blank" rel="nofollow">
									119 оценок
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="section-reputation__item">
							<div class="section-reputation__item-mark">
								<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/icon-2gis.svg" alt="2ГИС" />
								5
							</div>
							<div class="section-reputation__item-stars">
								<span>✱✱✱✱✱</span>
								<a href="https://2gis.ru/moscow/firm/70000001051479447/tab/reviews?m=37.541475%2C55.886484%2F16"
									target="_blank" rel="nofollow">
									114 оценок
								</a>
							</div>
						</div>
					</div>
				</div>
				<section class="section section-clients">
					<div class="container">
						<div class="carousel">
							<div class="carousel__track">
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/samolet.png"
										alt="Самолет" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/a101.png"
										alt="А101" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/pervyj-kanal.png"
										alt="Первый канал" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/mgts.png"
										alt="МГТС" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/mvideo.png"
										alt="М.Видео" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/gloriya.png"
										alt="Gloria Jeans" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/kfc.png"
										alt="KFC" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/aeroflot.png"
										alt="Аэрофлот" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/samolet.png"
										alt="Самолет" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/a101.png"
										alt="А101" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/pervyj-kanal.png"
										alt="Первый канал" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/mgts.png"
										alt="МГТС" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/mvideo.png"
										alt="М.Видео" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/gloriya.png"
										alt="Gloria Jeans" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/kfc.png"
										alt="KFC" />
								</div>
								<div class="brand-logo">
									<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/clients/aeroflot.png"
										alt="Аэрофлот" />
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>

		<section class="section section-works">
			<div class="container">
				<header class="section__header">
					<div>
						<h2 class="section__title section-uso__title">
							Галерея
							<span>работ</span>
						</h2>

						<p class="section__subtitle">
							Более 25 лет успешного опыта. Сотни реализованных объектов.
						</p>
					</div>
					<a href="https://oknamobifon.ru/works/c/moskitnye-setki/" class="btn btn-outline-primary">Смотреть все ↗</a>
				</header>
				<div class="gallery-grid">
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/6edfd7ad2e8af1521aa9d3b9ede59055.jpg"
						target="_blank" data-pswp-width="640" data-pswp-height="427" class="gallery-grid__item">
						<img width="300" height="200"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/6edfd7ad2e8af1521aa9d3b9ede59055-300x200.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/6edfd7ad2e8af1521aa9d3b9ede59055-300x200.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/6edfd7ad2e8af1521aa9d3b9ede59055.jpg         640w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/6f5883e98970c36f6d94e7219b056503-1.jpg"
						target="_blank" data-pswp-width="427" data-pswp-height="640" class="gallery-grid__item">
						<img width="200" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/6f5883e98970c36f6d94e7219b056503-1-200x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/6f5883e98970c36f6d94e7219b056503-1-200x300.jpg 200w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/6f5883e98970c36f6d94e7219b056503-1.jpg         427w
								" sizes="(max-width: 200px) 100vw, 200px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/8e388374d0123f403580a44720b09d17.jpg"
						target="_blank" data-pswp-width="640" data-pswp-height="427" class="gallery-grid__item">
						<img width="300" height="200"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/8e388374d0123f403580a44720b09d17-300x200.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/8e388374d0123f403580a44720b09d17-300x200.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/8e388374d0123f403580a44720b09d17.jpg         640w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/19a8430eb3d2e7c06ae44a4eb29bce1d.jpg"
						target="_blank" data-pswp-width="640" data-pswp-height="427" class="gallery-grid__item">
						<img width="300" height="200"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/19a8430eb3d2e7c06ae44a4eb29bce1d-300x200.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/19a8430eb3d2e7c06ae44a4eb29bce1d-300x200.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/19a8430eb3d2e7c06ae44a4eb29bce1d.jpg         640w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/248510e96d7b27736dfe9e3fdb80c910-2.jpg"
						target="_blank" data-pswp-width="640" data-pswp-height="427" class="gallery-grid__item">
						<img width="300" height="200"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/248510e96d7b27736dfe9e3fdb80c910-2-300x200.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/248510e96d7b27736dfe9e3fdb80c910-2-300x200.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/248510e96d7b27736dfe9e3fdb80c910-2.jpg         640w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/c08fb0fa462b23f608bbe789cd4e56fa.jpg"
						target="_blank" data-pswp-width="640" data-pswp-height="427" class="gallery-grid__item">
						<img width="300" height="200"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/c08fb0fa462b23f608bbe789cd4e56fa-300x200.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/c08fb0fa462b23f608bbe789cd4e56fa-300x200.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/c08fb0fa462b23f608bbe789cd4e56fa.jpg         640w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/eee61318ce773cc0a9bed7c13ec1ef7d-1.jpg"
						target="_blank" data-pswp-width="427" data-pswp-height="640" class="gallery-grid__item">
						<img width="200" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/eee61318ce773cc0a9bed7c13ec1ef7d-1-200x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/eee61318ce773cc0a9bed7c13ec1ef7d-1-200x300.jpg 200w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/eee61318ce773cc0a9bed7c13ec1ef7d-1.jpg         427w
								" sizes="(max-width: 200px) 100vw, 200px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/24a14a13f4b7030a911c06b79f58d8ab-2.jpg"
						target="_blank" data-pswp-width="427" data-pswp-height="640" class="gallery-grid__item">
						<img width="200" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/24a14a13f4b7030a911c06b79f58d8ab-2-200x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/24a14a13f4b7030a911c06b79f58d8ab-2-200x300.jpg 200w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/24a14a13f4b7030a911c06b79f58d8ab-2.jpg         427w
								" sizes="(max-width: 200px) 100vw, 200px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/dd9fda5d2b702091455f0b8181e01e19-1.jpg"
						target="_blank" data-pswp-width="427" data-pswp-height="640" class="gallery-grid__item">
						<img width="200" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/dd9fda5d2b702091455f0b8181e01e19-1-200x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/dd9fda5d2b702091455f0b8181e01e19-1-200x300.jpg 200w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/dd9fda5d2b702091455f0b8181e01e19-1.jpg         427w
								" sizes="(max-width: 200px) 100vw, 200px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/6bbff4e5b4214357a1a1c73cf176c8db.jpg"
						target="_blank" data-pswp-width="360" data-pswp-height="480" class="gallery-grid__item">
						<img width="225" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/6bbff4e5b4214357a1a1c73cf176c8db-225x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/6bbff4e5b4214357a1a1c73cf176c8db-225x300.jpg 225w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/6bbff4e5b4214357a1a1c73cf176c8db.jpg         360w
								" sizes="(max-width: 225px) 100vw, 225px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/3073c5f3c68e3798a074d14757122b63-1.jpg"
						target="_blank" data-pswp-width="360" data-pswp-height="480" class="gallery-grid__item">
						<img width="225" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/3073c5f3c68e3798a074d14757122b63-1-225x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/3073c5f3c68e3798a074d14757122b63-1-225x300.jpg 225w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/3073c5f3c68e3798a074d14757122b63-1.jpg         360w
								" sizes="(max-width: 225px) 100vw, 225px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/81e44aafbf3ef9de1406be8c57b2e8b8.jpg"
						target="_blank" data-pswp-width="488" data-pswp-height="640" class="gallery-grid__item">
						<img width="229" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/81e44aafbf3ef9de1406be8c57b2e8b8-229x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/81e44aafbf3ef9de1406be8c57b2e8b8-229x300.jpg 229w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/81e44aafbf3ef9de1406be8c57b2e8b8.jpg         488w
								" sizes="(max-width: 229px) 100vw, 229px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/b12eb2defcc462efbd07ba8d9723cbf2.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="640" class="gallery-grid__item">
						<img width="225" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/b12eb2defcc462efbd07ba8d9723cbf2-225x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/b12eb2defcc462efbd07ba8d9723cbf2-225x300.jpg 225w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/b12eb2defcc462efbd07ba8d9723cbf2.jpg         480w
								" sizes="(max-width: 225px) 100vw, 225px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/b9055f911561b8336d73975079b64153-1.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="640" class="gallery-grid__item">
						<img width="225" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/b9055f911561b8336d73975079b64153-1-225x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/b9055f911561b8336d73975079b64153-1-225x300.jpg 225w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/b9055f911561b8336d73975079b64153-1.jpg         480w
								" sizes="(max-width: 225px) 100vw, 225px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/6b729862a3f362f0d3ed3e3dfb7a46fe-1.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="640" class="gallery-grid__item">
						<img width="225" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/6b729862a3f362f0d3ed3e3dfb7a46fe-1-225x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/6b729862a3f362f0d3ed3e3dfb7a46fe-1-225x300.jpg 225w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/6b729862a3f362f0d3ed3e3dfb7a46fe-1.jpg         480w
								" sizes="(max-width: 225px) 100vw, 225px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/df43a747e945a016b97a1d3a3cb99fdb.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="640" class="gallery-grid__item">
						<img width="225" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/df43a747e945a016b97a1d3a3cb99fdb-225x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/df43a747e945a016b97a1d3a3cb99fdb-225x300.jpg 225w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/df43a747e945a016b97a1d3a3cb99fdb.jpg         480w
								" sizes="(max-width: 225px) 100vw, 225px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/03d231b6a347a0ee4c30fc1b353c55a6-1.jpg"
						target="_blank" data-pswp-width="640" data-pswp-height="480" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/03d231b6a347a0ee4c30fc1b353c55a6-1-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/03d231b6a347a0ee4c30fc1b353c55a6-1-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/03d231b6a347a0ee4c30fc1b353c55a6-1.jpg         640w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/036f49669f97f3d2025c3fa582ccc660.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="640" class="gallery-grid__item">
						<img width="225" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/036f49669f97f3d2025c3fa582ccc660-225x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/036f49669f97f3d2025c3fa582ccc660-225x300.jpg 225w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/036f49669f97f3d2025c3fa582ccc660.jpg         480w
								" sizes="(max-width: 225px) 100vw, 225px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/08890abe775af1f7343cfa1fbb791957.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="640" class="gallery-grid__item">
						<img width="225" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/08890abe775af1f7343cfa1fbb791957-225x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/08890abe775af1f7343cfa1fbb791957-225x300.jpg 225w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/08890abe775af1f7343cfa1fbb791957.jpg         480w
								" sizes="(max-width: 225px) 100vw, 225px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/6f03655466c334f339dd42d243dc15e4.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="640" class="gallery-grid__item">
						<img width="225" height="300"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/6f03655466c334f339dd42d243dc15e4-225x300.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/6f03655466c334f339dd42d243dc15e4-225x300.jpg 225w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/6f03655466c334f339dd42d243dc15e4.jpg         480w
								" sizes="(max-width: 225px) 100vw, 225px" />
					</a>

					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/add337fe93dab82756099185f325a952.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/add337fe93dab82756099185f325a952-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/add337fe93dab82756099185f325a952-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/add337fe93dab82756099185f325a952.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/b1a5cf869cb391746207c5a116090c90.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/b1a5cf869cb391746207c5a116090c90-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/b1a5cf869cb391746207c5a116090c90-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/b1a5cf869cb391746207c5a116090c90.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/e519defacf617a51260936f8d5364686.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/e519defacf617a51260936f8d5364686-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/e519defacf617a51260936f8d5364686-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/e519defacf617a51260936f8d5364686.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/f3bbc6d04f3fe9e64255379ffefda7f4.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/f3bbc6d04f3fe9e64255379ffefda7f4-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/f3bbc6d04f3fe9e64255379ffefda7f4-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/f3bbc6d04f3fe9e64255379ffefda7f4.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/f05027aa8e401c3decd393fdb7ab4a93.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/f05027aa8e401c3decd393fdb7ab4a93-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/f05027aa8e401c3decd393fdb7ab4a93-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/f05027aa8e401c3decd393fdb7ab4a93.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/6dffea6b12f0212a31ccdb3970b60c7a.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/6dffea6b12f0212a31ccdb3970b60c7a-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/6dffea6b12f0212a31ccdb3970b60c7a-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/6dffea6b12f0212a31ccdb3970b60c7a.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/9ccefe7db75a71441733ba145dca971e.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/9ccefe7db75a71441733ba145dca971e-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/9ccefe7db75a71441733ba145dca971e-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/9ccefe7db75a71441733ba145dca971e.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/ad9a8374537a5b8c9919e205b48c225f.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/ad9a8374537a5b8c9919e205b48c225f-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/ad9a8374537a5b8c9919e205b48c225f-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/ad9a8374537a5b8c9919e205b48c225f.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/91f504cc23c1648a71bdf812e0313c0c.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/91f504cc23c1648a71bdf812e0313c0c-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/91f504cc23c1648a71bdf812e0313c0c-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/91f504cc23c1648a71bdf812e0313c0c.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/4141b7fa4eb6f3e7c2d2278fb723f100.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/4141b7fa4eb6f3e7c2d2278fb723f100-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/4141b7fa4eb6f3e7c2d2278fb723f100-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/4141b7fa4eb6f3e7c2d2278fb723f100.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/b4339d30723b2de23eb155493791a785.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/b4339d30723b2de23eb155493791a785-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/b4339d30723b2de23eb155493791a785-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/b4339d30723b2de23eb155493791a785.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/ea51276f2b5d16e9fca642cc6e12bf5b.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/ea51276f2b5d16e9fca642cc6e12bf5b-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/ea51276f2b5d16e9fca642cc6e12bf5b-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/ea51276f2b5d16e9fca642cc6e12bf5b.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/07f520f75d445b9b1e984febd561186a-1.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/07f520f75d445b9b1e984febd561186a-1-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/07f520f75d445b9b1e984febd561186a-1-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/07f520f75d445b9b1e984febd561186a-1.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/18e8b622150de625f8dc6374eebe591d.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/18e8b622150de625f8dc6374eebe591d-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/18e8b622150de625f8dc6374eebe591d-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/18e8b622150de625f8dc6374eebe591d.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/39c8770c68b9d95f0f6dc76248aec73d.jpg"
						target="_blank" data-pswp-width="395" data-pswp-height="316" class="gallery-grid__item">
						<img width="300" height="240"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/39c8770c68b9d95f0f6dc76248aec73d-300x240.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/39c8770c68b9d95f0f6dc76248aec73d-300x240.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/39c8770c68b9d95f0f6dc76248aec73d.jpg         395w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>

					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/e51fad2b18dbdb5272e4a99704cfafd0-1.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/e51fad2b18dbdb5272e4a99704cfafd0-1-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/e51fad2b18dbdb5272e4a99704cfafd0-1-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/e51fad2b18dbdb5272e4a99704cfafd0-1.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/3e0667a9f524a43cddef97cadce5ec10-1.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/3e0667a9f524a43cddef97cadce5ec10-1-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/3e0667a9f524a43cddef97cadce5ec10-1-300x225.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/3e0667a9f524a43cddef97cadce5ec10-1.jpg         480w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/ddf73e20fe44dea2cda5fd73c87ee1f0.jpg"
						target="_blank" data-pswp-width="412" data-pswp-height="308" class="gallery-grid__item">
						<img width="300" height="224"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/ddf73e20fe44dea2cda5fd73c87ee1f0-300x224.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async" srcset="
									https://oknamobifon.ru/wp-content/uploads/2025/03/ddf73e20fe44dea2cda5fd73c87ee1f0-300x224.jpg 300w,
									https://oknamobifon.ru/wp-content/uploads/2025/03/ddf73e20fe44dea2cda5fd73c87ee1f0.jpg         412w
								" sizes="(max-width: 300px) 100vw, 300px" />
					</a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/05ea702bd87a631ffd67f744f1e968f8.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/05ea702bd87a631ffd67f744f1e968f8-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async"
							srcset="https://oknamobifon.ru/wp-content/uploads/2025/03/05ea702bd87a631ffd67f744f1e968f8-300x225.jpg 300w, https://oknamobifon.ru/wp-content/uploads/2025/03/05ea702bd87a631ffd67f744f1e968f8.jpg 480w"
							sizes="(max-width: 300px) 100vw, 300px"> </a>
					<a href="https://oknamobifon.ru/wp-content/uploads/2025/03/47b7c2ff997fe6f04ea6d2fa8c5433a6.jpg"
						target="_blank" data-pswp-width="480" data-pswp-height="360" class="gallery-grid__item">
						<img width="300" height="225"
							src="https://oknamobifon.ru/wp-content/uploads/2025/03/47b7c2ff997fe6f04ea6d2fa8c5433a6-300x225.jpg"
							class="attachment-medium size-medium" alt="" loading="lazy" decoding="async"
							srcset="https://oknamobifon.ru/wp-content/uploads/2025/03/47b7c2ff997fe6f04ea6d2fa8c5433a6-300x225.jpg 300w, https://oknamobifon.ru/wp-content/uploads/2025/03/47b7c2ff997fe6f04ea6d2fa8c5433a6.jpg 480w"
							sizes="(max-width: 300px) 100vw, 300px"> </a>
				</div>
			</div>
		</section>

		<section class="section section-advantages advantages bg-light">
			<div class="container">
				<header class="section__header">
					<div>
						<h2 class="section__title section-uso__title">
							Частые
							<span>вопросы</span>
						</h2>

						<p class="section__subtitle">
							Более 25 лет успешного опыта. Тысячи реализованных объектов.
						</p>
					</div>
				</header>

				<div class="row justify-content-center">
					<div class="col-lg-16">
						<div class="accordion text-start" id="accordionExample">
							<div class="accordion-item mb-3">
								<h2 class="accordion-header" id="heading-1">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1"
										aria-expanded="true" aria-controls="collapse-1">
										Вы занимаетесь только пластиковыми окнами?
									</button>
								</h2>
								<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
									data-bs-parent="#accordionExample">
									<div class="accordion-body pt-2 pb-2">
										Помимо пластиковых окон у нас можно купить тёплое и
										холодное остекление алюминиевыми окнами любой сложности,
										отделку и утепление балконов, пластиковые двери,
										раздвижные системы, зимние сады и многое другое.
									</div>
									<div class="accordion-body pb-2">
										Вместе с окнами у нас можно сразу заказать все
										необходимые аксессуары: москитные сетки, подоконники из
										натурального и искусственного камня, защитные механизмы
										на окна.
									</div>
									<div class="accordion-body pb-2">
										Мы всегда рады предложить услуги по гарантийному и
										постгарантийному обслуживанию, ремонту окон.
									</div>
								</div>
							</div>
							<div class="accordion-item mb-3">
								<h2 class="accordion-header" id="heading-2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										Сколько будут изготавливаться мои окна?
									</button>
								</h2>
								<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
									data-bs-parent="#accordionExample">
									<div class="accordion-body pt-2 pb-2">
										Если решили купить стандартные белые окна, то в
										зависимости от профиля, они будут готовы через 5-7 дней
										после заключения договора.
									</div>
								</div>
							</div>
							<div class="accordion-item mb-3">
								<h2 class="accordion-header" id="heading-3">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										Можно ли приобрести вашу продукцию в рассрочку?
									</button>
								</h2>
								<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
									data-bs-parent="#accordionExample">
									<div class="accordion-body pt-2 pb-2">
										Конечно, вы можете приобрести нашу продукцию и услуги в
										рассрочку или кредит, заключив договор с одним из
										банков-партнёров. Также возможна покупка без
										первоначального взноса.
									</div>
								</div>
							</div>
							<div class="accordion-item mb-3">
								<h2 class="accordion-header" id="heading-4">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										Где можно вживую увидеть образцы оконных рам и стёкол?
									</button>
								</h2>
								<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
									data-bs-parent="#accordionExample">
									<div class="accordion-body pt-2 pb-2">
										С образцами наших окон и аксессуаров вы можете
										ознакомиться в нашем офисе по адресу: Москва,
										Дмитровское шоссе, д. 125, к. 1
									</div>
								</div>
							</div>
							<div class="accordion-item mb-3">
								<h2 class="accordion-header" id="heading-4">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										Как я могу оплатить заказ?
									</button>
								</h2>
								<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
									data-bs-parent="#accordionExample">
									<div class="accordion-body pt-2 pb-2">
										Оплата возможна любым из способов:
									</div>
									<div class="accordion-body pb-2">
										Наличными — вы можете оплатить договор менеджеру на дому
										или подъехать в офис компании в рабочее время.
									</div>
									<div class="accordion-body pb-2">
										Банковским переводом — вы можете произвести оплату за
										заключенный договор на расчетный счет компании, указав в
										назначении платежа номер договора.
									</div>
									<div class="accordion-body pb-2">
										Банковской картой — в офисе или на дому, если
										предупредите что вам нужен именно такой способ оплаты.
									</div>
								</div>
							</div>
							<div class="accordion-item mb-3">
								<h2 class="accordion-header" id="heading-6">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
										Зачем вызывать замерщика, если я могу сказать нужные
										размеры?
									</button>
								</h2>
								<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
									data-bs-parent="#accordionExample">
									<div class="accordion-body pt-2 pb-2">
										Профессиональный замер гарантирует, что окно встанет в
										проём правильно. Мы хотим, чтобы установка прошла для
										вас быстро, и новые окна радовали вас долго.
									</div>
									<div class="accordion-body pb-2">
										Выезд специалиста и замер абсолютно бесплатны.
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading-7">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
										Что такое окна с климат-контролем?
									</button>
								</h2>
								<div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="heading-7"
									data-bs-parent="#accordionExample">
									<div class="accordion-body pt-2 pb-2">
										Каждое пластиковое окно нашего производства оборудовано
										специальным клапаном, который совершает автоматическую
										подачу свежего воздуха в помещение без сквозняков.
										Клапан устанавливается внутрь окна и при этом не
										нарушает его тепло- и шумоизоляционные свойства. Цена
										изделия остаётся адекватной.
									</div>
									<div class="accordion-body pb-2">
										Свежий воздух улучшает самочувствие и настроение всех
										обитателей дома, устраняет излишнюю влажность и
										неприятные запахи.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section my-3 py-5 pb-0 mb-0 py-md-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<section class="section-callback">
							<div class="section__bg section-callback__bg">
								<img width="784" height="627" src="https://oknamobifon.ru/wp-content/uploads/2025/05/386031-1.jpg"
									class="attachment-large size-large" alt="" decoding="async" srcset="
											https://oknamobifon.ru/wp-content/uploads/2025/05/386031-1.jpg         784w,
											https://oknamobifon.ru/wp-content/uploads/2025/05/386031-1-300x240.jpg 300w,
											https://oknamobifon.ru/wp-content/uploads/2025/05/386031-1-768x614.jpg 768w
										" sizes="(max-width: 784px) 100vw, 784px" />
							</div>
							<div class="section-callback__box">
								<h2 class="section__title">Мы можем вам позвонить</h2>
								<p class="section__subtitle">
									Получите бесплатную консультацию у нашиx специалистов
								</p>
								<form action="<?php echo get_template_directory_uri(); ?>/promo/mails/callback_handler.php"
									id="callback" method="post" name="callback" class="form" style="max-width: 600px">
									<div class="loader-box"><span class="loader"></span></div>

									<input type="hidden" name="form-source" value="footer-callback">
									<input type="hidden" name="button-context" value="footer-we-can-call">


									<div class="form__box">
										<div class="form-floating">
											<input type="text" class="form-control" id="callback-name" name="form-name" placeholder="Ваше имя"
												required="" />
											<label for="callback-name"><span class="form__required">*</span> Ваше
												имя</label>
										</div>
										<div class="form-floating">
											<input type="tel" pattern="^(\+7|8)\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$" class="form-control"
												id="callback-phone" name="form-phone" placeholder="Телефон" required=""
												title="Введите номер в формате: +7 (999) 999-99-99 или 8 (999) 999-99-99" />
											<label for="callback-phone"><span class="form__required">*</span>
												Телефон</label>
										</div>
										<div class="form-check form__privacy-policy-check">
											<input class="form-check-input" type="checkbox" value="" id="callback-privacy-policy" checked=""
												required="" />
											<label class="form-check-label" for="callback-privacy-policy">
												Оставляя заявку, вы даете свое согласие на
												обработку персональных данных в соответствие с
												<a href="https://oknamobifon.ru/privacy/" data-bs-toggle="modal"
													data-bs-target="#modal-privacy">
													политикой конфиденциальности</a>
											</label>
										</div>
										<button type="submit" class="btn btn-primary btn-icon btn--icon-right btn-cta">
											Отправить
											<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M22 9a1 1 0 000 1.42l4.6 4.6H3.06a1 1 0 100 2h23.52L22 21.59A1 1 0 0022 23a1 1 0 001.41 0l6.36-6.36a.88.88 0 000-1.27L23.42 9A1 1 0 0022 9z"
													fill="currentColor"></path>
											</svg>
										</button>
									</div>
								</form>
								<div class="form-result"></div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>

		<script>
			document.addEventListener('DOMContentLoaded', function () {
				const form = document.getElementById('callback');
				const loader = form.querySelector('.loader-box');
				const phoneInput = document.getElementById('callback-phone');

				// Скрываем лоадер по умолчанию
				if (loader) {
					loader.style.display = 'none';
				}

				// Маска для телефона
				if (phoneInput) {
					phoneInput.addEventListener('input', function (e) {
						let value = e.target.value.replace(/\D/g, '');

						if (value.length > 0) {
							if (value[0] === '8') {
								value = '8' + value.substring(1);
							} else if (value[0] === '7') {
								value = '+7' + value.substring(1);
							} else if (value.length >= 10) {
								value = '+7' + value;
							}

							// Форматируем номер
							if (value.startsWith('+7') && value.length >= 5) {
								value = value.replace(
									/(\+7)(\d{3})(\d{3})(\d{2})(\d{2})/,
									'$1 ($2) $3-$4-$5',
								);
							} else if (value.startsWith('8') && value.length >= 4) {
								value = value.replace(
									/8(\d{3})(\d{3})(\d{2})(\d{2})/,
									'8 ($1) $2-$3-$4',
								);
							}
						}

						e.target.value = value;
					});

					// Автоматически добавляем +7, если поле пустое
					phoneInput.addEventListener('focus', function (e) {
						if (e.target.value === '') {
							e.target.value = '+7 (';
						}
					});
				}
			});
		</script>
	</main>
	<footer id="kontakty" class="site-footer" itemscope itemtype="http://schema.org/WPFooter">
		<meta itemprop="copyrightYear" content="2025" />
		<meta itemprop="copyrightHolder" content="ОкнаМобифон" />
		<div class="container site-footer__container">
			<div class="row">
				<div class="col-lg-8 site-footer__contacts">
					<div class="site-footer__messangers">
						<a href="https://wa.me/79938642678?text=Здравствуйте!" title="Написать в WhatsApp" target="_blank"
							rel="nofollow">
							<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/icon-whatsapp.svg"
								alt="WhatsApp" />
							Написать <br />в WhatsApp ↗
						</a>
						<a href="https://t.me/+79852111060" title="Написать в Телеграм" target="_blank" rel="nofollow">
							<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/icon-telegram.svg"
								alt="Телеграм" />
							Написать <br />в Телеграм ↗
						</a>
					</div>
				</div>
				<div class="col-lg-8 site-footer__logo">
					<svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 94.7 75.81">
						<path
							d="M94.7 64.51v-29.5c-.8-6.8-3.8-12.9-8.4-17.3-5.2-5.1-12.3-8.3-20.1-8.2h-.1c-7.7.1-14.8 3.5-19.8 8.7-4.3 4.6-7.3 10.8-7.9 17.6v18.7l17.8-11v-5c0-2.7 1.9-5.1 3.6-6.9 1.7-1.8 4-2.9 6.7-2.9s5 1 6.8 2.8 2.8 4.1 2.9 6.9v36.4l18.5-10.3z"
							fill="#1b75bb" />
						<path
							d="M47.7 8.01C42.5 2.91 35.4-.19 27.6 0h-.1C19.7.2 12.7 3.6 7.7 8.9 3.4 13.61.5 19.81 0 26.61v49.2l18.6-10.6v-36.1c-.1-2.7.9-5.1 2.6-7 1.7-1.8 4-2.9 6.7-3s5 1 6.8 2.7c1.8 1.8 3.5 4.1 3.6 6.8v25.8l19.3-10.6v-18.5c-.9-6.8-5.4-12.8-9.9-17.3z"
							fill="#00adee" />
					</svg>
				</div>
				<div class="col-lg-8">
					ООО УК «Бифориум групп» (ИНН: 7713411510)
					<address>127411, Москва, Дмитровское шоссе, д. 125, к. 1</address>
					<a href="tel:+74956464959" class="site-footer__phone" target="_blank" rel="nofollow">+7 (495)
						646-49-59</a><br />E-mail: <a href="mailto:info@oknamobifon.ru">info@oknamobifon.ru</a>
				</div>
			</div>
			<div class="site-footer__bottom">
				<ul itemscope itemtype="http://schema.org/SiteNavigationElement">
					<li>
						<a itemprop="url" href="https://oknamobifon.ru/privacy/"><span itemprop="name">Политика
								конфиденциальности</span></a>
					</li>
					<li class="d-none">
						<a itemprop="url" href="https://oknamobifon.ru/sitemap/"><span itemprop="name">Карта сайта</span></a>
					</li>
					<li class="d-none">
						<a href="https://oknamobifon.ru/catalog/">Каталог</a>
					</li>
				</ul>
				© 2025 ООО УК «Бифориум групп»
			</div>
		</div>
		<ul class="site-footer__animation-background">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</footer>
	<div class="modal fade" id="feedback-modal" tabindex="-1" aria-labelledby="feedback-modalLabel" aria-hidden="true"
		data-bs-backdrop="static" data-bs-keyboard="false">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть">
					×
				</button>
				<div class="modal-body">
					<h2>Мы Вам перезвоним</h2>

					<form action="<?php echo get_template_directory_uri(); ?>/promo/mails/callback_handler.php"
						id="feedback-modal-form" method="post" name="feedback" class="form">
						<div class="loader-box"><span class="loader"></span></div>

						<input type="hidden" name="form-source" value="modal-callback" id="modal-form-source">
						<input type="hidden" name="button-context" value="" id="modal-button-context">

						<div class="form__box">
							<div class="form-floating">
								<input type="text" class="form-control" id="feedback-name" name="form-name" placeholder="Ваше имя"
									required />
								<label for="feedback-name"><span class="form__required">*</span> Ваше имя</label>
							</div>
							<div class="form-floating">
								<input type="tel" pattern="^(\+7|8)\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$" class="form-control"
									id="feedback-modal-phone" name="form-phone" placeholder="Телефон" required
									title="Введите номер в формате: +7 (999) 999-99-99 или 8 (999) 999-99-99" />
								<label for="feedback-modal-phone"><span class="form__required">*</span> Телефон</label>
							</div>
							<div class="form-check form__privacy-policy-check">
								<input class="form-check-input" type="checkbox" value="" id="feedback-privacy-policy" checked
									required />
								<label class="form-check-label" for="feedback-privacy-policy">
									Оставляя заявку, вы даете свое согласие на обработку
									персональных данных в соответствие с
									<a href="https://oknamobifon.ru/privacy/" data-bs-toggle="modal" data-bs-target="#modal-privacy">
										политикой конфиденциальности</a>
								</label>
							</div>
							<button type="submit" class="btn btn-primary btn-icon btn--icon-right btn-cta">
								Отправить
								<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M22 9a1 1 0 000 1.42l4.6 4.6H3.06a1 1 0 100 2h23.52L22 21.59A1 1 0 0022 23a1 1 0 001.41 0l6.36-6.36a.88.88 0 000-1.27L23.42 9A1 1 0 0022 9z"
										fill="currentColor" />
								</svg>
							</button>
						</div>
					</form>
					<div class="form-result"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
		<div class="offcanvas-body">
			<nav class="navbar" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<meta itemprop="name" content="Навигация по сайту" />
				<ul class="navbar-nav">
					<li class="nav-item">
						<a itemprop="url" class="nav-link" href="#" title="Главная">
							<span itemprop="name">Главная</span>
						</a>
					</li>
					<li class="nav-item">
						<a itemprop="url" class="nav-link" href="#services">
							<span itemprop="name">Услуги </span>
						</a>
					</li>
					<li class="nav-item">
						<a itemprop="url" class="nav-link" href="#price">
							<span itemprop="name">Цены</span>
						</a>
					</li>
					<li class="nav-item">
						<a itemprop="url" class="nav-link" href="#quiz">
							<span itemprop="name">Расчет</span>
						</a>
					</li>
					<li class="nav-item">
						<a itemprop="url" class="nav-link" href="#stocks">
							<span itemprop="name">Акции</span>
						</a>
					</li>
					<li class="nav-item">
						<a itemprop="url" class="nav-link" href="#kontakty">
							<span itemprop="name">Контакты</span>
						</a>
					</li>
				</ul>
			</nav>
			<footer class="offcanvas__footer">
				<div class="offcanvas__cta">
					<button class="btn-chip" data-bs-toggle="modal" data-bs-target="#feedback-modal"
						data-context="mobile-call-measurer">
						<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M22.61 7.05L17 1.39a1 1 0 00-.71-.29 1 1 0 00-.7.29L1.39 15.54a1 1 0 000 1.41l5.66 5.66a1 1 0 00.71.29 1 1 0 00.7-.29l2.83-2.83 8.49-8.49 2.83-2.83a1 1 0 000-1.41zm-3.54 2.12l-.71-.71a1 1 0 00-1.41 0 1 1 0 000 1.42l.71.71L16.24 12l-2.12-2.12a1 1 0 00-1.41 1.41l2.12 2.12-1.42 1.42-.7-.71a1 1 0 10-1.42 1.42l.71.7-1.41 1.42-2.13-2.12a1 1 0 00-1.41 0 1 1 0 000 1.41l2.12 2.12-1.41 1.42-4.25-4.25L16.24 3.51l4.25 4.25z"
								fill="currentColor" />
						</svg>
						Вызвать <br />замерщика
					</button>
					<button class="btn-chip" data-bs-toggle="modal" data-bs-target="#feedback-modal"
						data-context="mobile-order-call">
						<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M19.44 13c-.22 0-.45-.07-.67-.12a9.44 9.44 0 01-1.31-.39 2 2 0 00-2.48 1l-.22.45a12.18 12.18 0 01-2.66-2 12.18 12.18 0 01-2-2.66l.42-.28a2 2 0 001-2.48 10.33 10.33 0 01-.39-1.31c-.05-.22-.09-.45-.12-.68a3 3 0 00-3-2.49h-3a3 3 0 00-3 3.41 19 19 0 0016.52 16.46h.38a3 3 0 002-.76 3 3 0 001-2.25v-3a3 3 0 00-2.47-2.9zm.5 6a1 1 0 01-.34.75 1.06 1.06 0 01-.82.25A17 17 0 014.07 5.22a1.09 1.09 0 01.25-.82 1 1 0 01.75-.34h3a1 1 0 011 .79q.06.41.15.81a11.12 11.12 0 00.46 1.55l-1.4.65a1 1 0 00-.49 1.33 14.49 14.49 0 007 7 1 1 0 00.76 0 1 1 0 00.57-.52l.62-1.4a13.69 13.69 0 001.58.46q.4.09.81.15a1 1 0 01.79 1z"
								fill="currentColor" />
						</svg>
						Заказать <br />звонок
					</button>
				</div>
				<div class="offcanvas__messengers">
					<a href="https://wa.me/79938642678?text=Здравствуйте!" title="Написать в WhatsApp" target="_blank"
						rel="nofollow">
						<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/icon-whatsapp.svg"
							alt="WhatsApp" />
						Написать <br />в WhatsApp ↗
					</a>
					<a href="https://t.me/+79852111060" title="Написать в Телеграм" target="_blank" rel="nofollow">
						<img src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/img/icon-telegram.svg"
							alt="Телеграм" />
						Написать <br />в Телеграм ↗
					</a>
				</div>
				<div class="offcanvas__phone">
					<a href="tel:+74956464959"><span>+7 (495)</span> 646-49-59</a>
					<div class="offcanvas__phone-schedule">
						<div class="is-working"></div>
						9:00 — 19:00 • ежедневно
					</div>
				</div>
			</footer>
		</div>
	</div>
	<div class="modal fade" id="modal-privacy" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal__title">Политика обработки персональных данных</h2>
					<button type="button" class="modal__close" data-bs-dismiss="modal" aria-label="Закрыть">
						×
					</button>
				</div>
				<div class="modal-body">
					<h4>Согласие на обработку персональных данных</h4>
					Настоящем в соответствии с Федеральным законом № 152-Ф3 о персональных
					данных от 27.07. 2006 года свободно, своей волей и в своем интересе выражаю
					свое безусловное согласие на обработку моих персональных данных ООО УК
					«Бифориум Групп»(ОГРН(ИП) 1167746156852, ИНН 7713411510), зарегистрированным
					в соответствии с законодательством РФ по адресу: 127411, г. Москва,
					Дмитровское шоссе, д. 125, корп.1 (далее по тексту - Оператор). Персональные
					данные - любая информация, относящаяся к определенному или определяемому на
					основании такой информации физическому лицу. Настоящее Согласие выдано мною
					на обработку следующих персональных данных:
					<ul>
						<li>Имя;</li>
						<li>Телефон;</li>
						<li>Адрес электронной почты;</li>
					</ul>
					Согласие дано Оператору для совершения следующих действий с моими
					персональными данными с использованием средств автоматизации и/или без
					использования таких средств: сбор, систематизация, накопление, хранение,
					уточнение (обновление, изменение), использование, обезличивание, передана
					третьим лицам для указанных ниже целей, а также осуществление любых иных
					действий, предусмотренных действующим законодательством РФ как
					неавтоматизированными, так и автоматизированными способами. Данное согласие
					дается Оператору для обработки моих персональных данных в следующих целях:
					<ul>
						<li>Предоставление мне услуг/работ;</li>
						<li>
							Направление в мой адрес уведомлений касающихся предоставляемых услуг
							работ;
						</li>
						<li>Подготовка и направление ответов на мои запросы;</li>
						<li>
							Направление в мой адрес информации, в том числе рекламной, о
							мероприятиях/товарах /услугах/работах Оператора.
						</li>
					</ul>
					Настоящее согласие действует до момента его отзыва путем направления
					соответствующего уведомления на электронный адрес info@oknamobifon.ru. В
					случае отзыва мною согласия на обработку персональных данных Оператор вправе
					продолжить обработку персональных данных без моего согласия при наличии
					оснований указанных в пунктах 2 - 11 части 1 статьи 6, части 2 статьи 10 и
					части 2 статьи 11 Федерального закона № 152-Ф3 «0 персональных данных» от
					26.06. 2006 г.
				</div>
			</div>
		</div>
	</div>

	<!-- Рассчитать стоимость с загрузкой файла -->
	<div class="modal fade" id="calculatePriceWithDownloadModal" tabindex="-1"
		aria-labelledby="calculatePriceWithDownloadLabel" data-bs-backdrop="static" data-bs-keyboard="false"
		aria-modal="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть">
					×
				</button>
				<div class="modal-body">
					<h2>Мы Вам перезвоним</h2>
					<form action="<?php echo get_template_directory_uri(); ?>/promo/mails/callback_handler.php" method="post"
						id="feedback-consultation-form" name="feedback" class="form" enctype="multipart/form-data">
						<div class="loader-box"><span class="loader"></span></div>

						<input type="hidden" name="form-source" value="estimate-upload">
						<input type="hidden" name="button-context" value="recalculate-estimate">

						<div class="form__box">
							<div class="input-group custom-file-button">
								<label class="btn btn-primary" style="border-radius: 8px" for="inputGroupFile">Прикрепить</label>
								<input type="file" name="file[]" class="form-control" id="inputGroupFile"
									accept=".jpg,.jpeg,.png,.pdf,.heic,.doc,.docx,.xls,.xlsx" multiple />
							</div>

							<div class="form-floating">
								<input type="text" class="form-control" id="feedback-name" name="form-name" placeholder="Ваше имя"
									required="" />
								<label for="feedback-name"><span class="form__required">*</span> Ваше имя</label>
							</div>
							<div class="form-floating">
								<input type="tel" pattern="^(\+7|8)\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$" class="form-control"
									id="feedback-consultation-phone" name="form-phone" placeholder="Телефон" required=""
									title="Введите номер в формате: +7 (999) 999-99-99 или 8 (999) 999-99-99" />
								<label for="feedback-phone"><span class="form__required">*</span> Телефон</label>
							</div>
							<div class="form-check form__privacy-policy-check">
								<input class="form-check-input is-invalid" type="checkbox" value="" id="feedback-privacy-policy"
									checked="" required="" />
								<label class="form-check-label" for="feedback-privacy-policy">
									Оставляя заявку, вы даете свое согласие на обработку
									персональных данных в соответствие с
									<a href="https://oknamobifon.ru/privacy/" data-bs-toggle="modal" data-bs-target="#modal-privacy">
										политикой конфиденциальности</a>
								</label>
							</div>
							<button type="submit" class="btn btn-primary btn-icon btn--icon-right btn-cta">
								Отправить
								<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M22 9a1 1 0 000 1.42l4.6 4.6H3.06a1 1 0 100 2h23.52L22 21.59A1 1 0 0022 23a1 1 0 001.41 0l6.36-6.36a.88.88 0 000-1.27L23.42 9A1 1 0 0022 9z"
										fill="currentColor"></path>
								</svg>
							</button>
						</div>
					</form>
					<div class="form-result"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Рассчитать стоимость с загрузкой изображения -->

	<div class="callback-button-wrapper">
		<div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
			<div id="btnIco" class="callback-button-ico"></div>
		</div>

		<div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left"
			data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
			<a data-bs-toggle="modal" data-bs-target="#feedback-modal" aria-label="Подробная консультация">
				<div class="callback-form-button-ico"></div>
			</a>
		</div>
		<div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left"
			data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
			<a href="tel:+74956464959">
				<div class="callback-phone-button-ico"></div>
			</a>
		</div>
		<div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left"
			data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
			<a href="https://wa.me/79938642678?text=Здравствуйте!" target="blank">
				<div class="callback-whatsapp-button-ico"></div>
			</a>
		</div>
		<div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left"
			data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
			<a href="https://t.me/+79852111060">
				<div class="callback-telegram-button-ico"></div>
			</a>
		</div>
	</div>

	<!-- Callback button JS -->
	<script>
		function callbackButtonClick() {
			let formBtn = document.getElementById('formBtn').style.top;

			if (formBtn == '0px' || formBtn == 0) {
				document.getElementById('callbackBtn').style.animation = 'none';
				document.getElementById('btnIco').style.animation = 'change2 linear .5s';
				document.getElementById('btnIco').style.webkitAnimation = 'change2 linear .5s';
				document.getElementById('btnIco').style.webkitTransition =
					'transform 1s ease-in-out';

				document.getElementById('btnIco').style.webkitTransform = 'rotate(180deg)';
				document.getElementById('btnIco').style.transform = 'rotate(180deg)';

				document.getElementById('btnIco').style.backgroundImage =
					'url("//oknamobifon.ru/wp-content/themes/oknamobifon/promo/css/../img/icons/callback-button-close.png")';
				document.getElementById('btnIco').style.backgroundPosition = 'center';
				document.getElementById('btnIco').style.backgroundRepeat = 'no-repeat';

				document.getElementById('btnIco').style.webkitBackgroundSize = 'cover';
				document.getElementById('btnIco').style.backgroundSize = 'cover';

				document.getElementById('formBtn').style.top = '-60px';
				document.getElementById('formBtn').style.opacity = '1';

				document.getElementById('phoneBtn').style.top = '-120px';
				document.getElementById('phoneBtn').style.opacity = '1';

				document.getElementById('whatsappBtn').style.top = '-180px';
				document.getElementById('whatsappBtn').style.opacity = '1';

				document.getElementById('telegramBtn').style.top = '-240px';
				document.getElementById('telegramBtn').style.opacity = '1';
			} else {
				document.getElementById('callbackBtn').style.animation =
					'waves linear 2s infinite';
				document.getElementById('btnIco').style.animation =
					'change linear 16s infinite';
				document.getElementById('btnIco').style.webkitTransition =
					'transform 1s ease-in-out';
				document.getElementById('btnIco').style.webkitAnimation =
					'change linear 16s infinite';
				document.getElementById('btnIco').style.transform = 'rotate(180deg)';
				document.getElementById('btnIco').style.webkitTransform = 'rotate(180deg)';
				document.getElementById('btnIco').style.backgroundImage =
					'url("//oknamobifon.ru/wp-content/themes/oknamobifon/promo/css/../img/icons/callback-button-close.png")';
				document.getElementById('btnIco').style.backgroundPosition = 'center';
				document.getElementById('btnIco').style.backgroundRepeat = 'no-repeat';

				document.getElementById('btnIco').style.webkitBackgroundSize = 'cover';
				document.getElementById('btnIco').style.backgroundSize = 'cover';

				document.getElementById('formBtn').style.top = '0px';
				document.getElementById('formBtn').style.opacity = '0';

				document.getElementById('phoneBtn').style.top = '0px';
				document.getElementById('phoneBtn').style.opacity = '0';

				document.getElementById('whatsappBtn').style.top = '0px';
				document.getElementById('whatsappBtn').style.opacity = '0';

				document.getElementById('telegramBtn').style.top = '0px';
				document.getElementById('telegramBtn').style.opacity = '0';
			}
		}
	</script>
	<!-- /Callback button JS -->

	<script src="<?php echo get_template_directory_uri(); ?>/promo/js/quize.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<!-- <script src="assets/js/Accordion.js"></script>-->
	<!-- 
	<script type="text/javascript"
		src="https://oknamobifon.ru/wp-content/themes/oknamobifon/assets/js/main.bundle.min.js?ver=0.0.60"
		id="OknaMobifon-script-js" defer="defer" data-wp-strategy="defer"></script> -->


	<!-- Показываем сообщение об успешной отправки -->
	<div style="display: <?php echo $display; ?>;" onclick="f1();">
		<!-- Присваиваем свойству display значение переменной $display -->
		<div id="background-msg" style="display: <?php echo $display; ?>;"></div> <!-- Показываем background -->
		<!-- Показываем сообщение об успешной отправке данных -->
		<div id="message">
			<?php echo $_SESSION['message_text'];
			unset($_SESSION['message_text']); ?>
		</div>
	</div>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Отслеживание кнопок для модального окна обратного звонка
			const modalButtons = document.querySelectorAll('[data-bs-target="#feedback-modal"]');

			modalButtons.forEach(function (button) {
				button.addEventListener('click', function () {
					const context = this.getAttribute('data-context');
					const formSourceInput = document.querySelector('#modal-form-source');
					const buttonContextInput = document.querySelector('#modal-button-context');

					if (formSourceInput && buttonContextInput && context) {
						buttonContextInput.value = context;

						// Определяем более точный источник формы
						if (context.includes('calculate-cost')) {
							formSourceInput.value = 'modal-calculate-cost';
						} else if (context.includes('service-')) {
							formSourceInput.value = 'modal-service-request';
						} else if (context.includes('header-')) {
							formSourceInput.value = 'modal-header-request';
						} else if (context.includes('mobile-')) {
							formSourceInput.value = 'modal-mobile-request';
						} else {
							formSourceInput.value = 'modal-callback';
						}
					}
				});
			});

			// Отслеживание кнопок плавающего меню
			const callbackButtons = document.querySelectorAll('.callback-form-button a, .callback-phone-button a, .callback-whatsapp-button a, .callback-telegram-button a');

			callbackButtons.forEach(function (button) {
				button.addEventListener('click', function () {
					const buttonClass = this.closest('[class*="callback-"]').className;
					let context = 'floating-menu-unknown';

					if (buttonClass.includes('callback-form-button')) {
						context = 'floating-menu-callback-form';
						// Если это модальная форма, установим контекст
						setTimeout(() => {
							const formSourceInput = document.querySelector('#modal-form-source');
							const buttonContextInput = document.querySelector('#modal-button-context');
							if (formSourceInput && buttonContextInput) {
								formSourceInput.value = 'modal-floating-menu';
								buttonContextInput.value = context;
							}
						}, 100);
					} else if (buttonClass.includes('callback-phone-button')) {
						context = 'floating-menu-direct-call';
					} else if (buttonClass.includes('callback-whatsapp-button')) {
						context = 'floating-menu-whatsapp';
					} else if (buttonClass.includes('callback-telegram-button')) {
						context = 'floating-menu-telegram';
					}

					console.log('Floating menu action:', context);
				});
			});
		});
	</script>

	<script>

		document.addEventListener('DOMContentLoaded', function () {
			import('https://cdn.jsdelivr.net/npm/photoswipe@5.4.2/dist/photoswipe.esm.min.js')
				.then(({ default: PhotoSwipe }) => {

					class PhotoSwipeGallery {
						constructor(options) {
							this.options = options || {};
							this._uid = 0;
							this.shouldOpen = false;
							this._preloadedContent = undefined;
							this.onThumbnailsClick = this.onThumbnailsClick.bind(this);
						}

						init() {
							const galleries = document.querySelectorAll(this.options.gallery);
							galleries.forEach((gallery) => {
								gallery.addEventListener("click", this.onThumbnailsClick, false);
							});
						}

						onThumbnailsClick(event) {
							if (this.isClickToIgnore(event) || window.pswp) return;

							let clickPoint = { x: event.clientX, y: event.clientY };
							if (!clickPoint.x && !clickPoint.y) clickPoint = null;

							let clickedIndex = this.getClickedIndex(event);
							const galleryData = { gallery: event.currentTarget };

							if (clickedIndex >= 0) {
								event.preventDefault();
								this.loadAndOpen(clickedIndex, galleryData, clickPoint);
							}
						}

						isClickToIgnore(event) {
							return ("button" in event && event.button === 1) ||
								event.ctrlKey || event.metaKey || event.altKey || event.shiftKey;
						}

						getClickedIndex(event) {
							const target = event.target;
							const gallery = event.currentTarget;

							const items = Array.from(gallery.querySelectorAll(this.options.children));

							const clickedItem = items.find(item =>
								item === target || item.contains(target)
							);

							return clickedItem ? items.indexOf(clickedItem) : -1;
						}

						loadAndOpen(index, galleryData, clickPoint) {
							if (window.pswp || !this.options) return false;

							this.options.index = index;
							this.options.initialPointerPos = clickPoint;
							this.shouldOpen = true;
							this.preload(index, galleryData);
							return true;
						}

						preload(index, galleryData) {
							if (galleryData) {
								this.options.dataSource = galleryData;
							}

							const uid = ++this._uid;

							this._openPhotoswipe(PhotoSwipe, uid);
						}

						_openPhotoswipe(PhotoSwipeClass, uid) {
							if (uid !== this._uid || !this.shouldOpen) return;

							this.shouldOpen = false;

							if (window.pswp) return;

							const options = this._prepareOptions();

							const pswp = new PhotoSwipeClass(options);
							this.pswp = pswp;
							window.pswp = pswp;

							pswp.on('destroy', () => {
								this.pswp = undefined;
								delete window.pswp;
							});

							pswp.init();
						}

						_prepareOptions() {
							const gallery = this.options.dataSource.gallery;
							const items = this._getGalleryItems(gallery);

							return {
								dataSource: items,
								index: this.options.index || 0,

								allowPanToNext: true,
								spacing: 0.1,
								loop: true,
								pinchToClose: true,
								closeOnVerticalDrag: true,
								hideAnimationDuration: 333,
								showAnimationDuration: 333,
								zoomAnimationDuration: 333,
								escKey: true,
								arrowKeys: true,
								trapFocus: true,
								returnFocus: true,
								maxWidthToAnimate: 4000,
								clickToCloseNonZoomable: true,
								imageClickAction: "zoom-or-close",
								bgClickAction: "close",
								tapAction: "toggle-controls",
								doubleTapAction: "zoom",
								indexIndicatorSep: " / ",
								preloaderDelay: 2000,
								bgOpacity: 0.8,
								preload: [1, 2],
								easing: "cubic-bezier(.4,0,.22,1)"
							};
						}

						_getGalleryItems(gallery) {
							const items = Array.from(gallery.querySelectorAll(this.options.children));

							return items.map(item => {
								return this._domElementToItemData(item);
							});
						}

						_domElementToItemData(element) {
							const itemData = { element: element };
							const linkEl = element.tagName === "A" ? element : element.querySelector("a");

							if (linkEl) {
								itemData.src = linkEl.dataset.pswpSrc || linkEl.href;

								if (linkEl.dataset.pswpSrcset) {
									itemData.srcset = linkEl.dataset.pswpSrcset;
								}

								itemData.width = linkEl.dataset.pswpWidth
									? parseInt(linkEl.dataset.pswpWidth, 10) : 0;
								itemData.height = linkEl.dataset.pswpHeight
									? parseInt(linkEl.dataset.pswpHeight, 10) : 0;

								itemData.w = itemData.width;
								itemData.h = itemData.height;

								if (linkEl.dataset.pswpType) {
									itemData.type = linkEl.dataset.pswpType;
								}

								const imgEl = element.querySelector("img");
								if (imgEl) {
									itemData.msrc = imgEl.currentSrc || imgEl.src;
									itemData.alt = imgEl.getAttribute("alt") || "";
								}

								if (linkEl.dataset.pswpCropped || linkEl.dataset.cropped) {
									itemData.thumbCropped = true;
								}
							}

							return itemData;
						}

						destroy() {
							if (this.pswp) {
								this.pswp.destroy();
								this.pswp = undefined;
							}

							this.shouldOpen = false;
							this._listeners = {};

							const galleries = document.querySelectorAll(this.options.gallery);
							galleries.forEach((gallery) => {
								gallery.removeEventListener("click", this.onThumbnailsClick, false);
							});
						}
					}

					new PhotoSwipeGallery({
						gallery: ".gallery-grid",
						children: ".gallery-grid__item",
						pswpModule: PhotoSwipe
					}).init();

					new PhotoSwipeGallery({
						gallery: ".gallery",
						children: ".gallery__item",
						pswpModule: PhotoSwipe
					}).init();
				});
		});
	</script>

</body>

</html>