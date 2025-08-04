<!-- Разработка сайтов на WordPress [ Woocommerce ] © Irtek.dev | https://irtek.dev -->




<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta http-equiv="Content-Type" content="type; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta name="theme-color" content="#1B75BB">

	<?php
	if(is_single() && 'product' === get_post_type()) :

		$price = get_post_meta( $post->ID, '_price', true );
	?>

	<meta property="product:price:amount" content="<?= $price; ?>">
<meta property="product:price:currency" content="RUB">
<meta property="product:availability" content="instock">
<meta property="og:type" content="product">
	<?php
	endif; 
	?>

	<link rel="icon" type="image/png" href="/wp-content/themes/oknamobifon/assets/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="/wp-content/themes/oknamobifon/assets/favicon/favicon.svg" />
	<link rel="shortcut icon" href="/wp-content/themes/oknamobifon/assets/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/oknamobifon/assets/favicon/apple-touch-icon.png" />


	<?php wp_head(); ?>

	<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(151126, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/151126" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

		<style>

			.gallery-grid__item img, .gallery__item img {
				object-fit: contain;
				margin-bottom: 20px;
			}

			.attributes {
				margin-top: 20px;
			}
		</style>

</head>
<body <?php body_class(); ?>>

<header class="site-header-top">
	<div class="container site-header-top__container">
		<a href="<?= get_permalink( 25 ); ?>" class="site-header-top__address-link">
			<span class="site-header-top__address-star">★</span>
			<address>
				г. Москва, Дмитровское шоссе, д. 125, к. 1
			</address>
		</a>

		<?php if ( is_front_page() ) : ?>
			<h1 class="site-header-top__slogan" style="font-size: 15px;margin-bottom:0;">Производим и устанавливаем пластиковые окна и двери с 2000 года</h1>
		<?php else : ?>
			<span class="site-header-top__slogan">
				<a href="">Скидка <span class="highlight">до 25%</span> на работы при заказе до 30 июня</a></span>
		<?php endif; ?>

		<div class="site-header-top__cta d-none">
			<button class="btn-chip" data-bs-toggle="modal" data-bs-target="#feedback-modal"><?php svg( 'ruler' ); ?> Вызвать <br>замерщика ↗</button>
			<button class="btn-chip" data-bs-toggle="modal" data-bs-target="#feedback-modal"><?php svg( 'phone' ); ?> Заказать <br>звонок ↗</button>
		</div>

		<nav class="site-header-top__nav">
			<ul>
				<li><a href="<?= get_permalink( 10277 ); ?>">О компании</a></li>
				<li><a href="<?= get_permalink( 10308 ); ?>">Оплата</a></li>
				<li><a href="<?= get_permalink( 17524 ); ?>">Доставка</a></li>
				<li><a href="<?= get_permalink( 18511 ); ?>">Сертификаты</a></li>
				<li><a href="<?= get_permalink( 12679 ); ?>">Гарантии</a></li>
			</ul>
		</nav>
	</div>
</header>

<header class="site-header" itemscope itemtype="https://schema.org/WPHeader">
	<div class="container site-header__container">
		<div class="site-header__column-logo <?= is_front_page() ? 'fade-in-right' : ''; ?>">
			<?php if ( ! is_front_page() ) : ?>
				<a href="<?php echo site_url(); ?>" class="logo site-header__logo">
					<?= file_get_contents( get_theme_file_path( 'assets/img/logo.svg' ) ); ?>
				</a>
			<?php else : ?>
				<div class="logo site-header__logo">
					<?= file_get_contents( get_theme_file_path( 'assets/img/logo.svg' ) ); ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="site-header__navbar order-2 order-lg-2">
			<?php get_template_part( 'navbar' ); ?>
		</div>
		<div class="order-lg-3 order-1 site-header__contacts">
			<div class="site-header__messengers">
				<a href="https://wa.me/79938642678?text=Здравствуйте!" title="Написать в WhatsApp" target="_blank"
				   rel="nofollow">
					<img src="<?= get_theme_file_uri( 'assets/img/icon-whatsapp.svg' ); ?>" alt="WhatsApp">
				</a>

				<a href="https://t.me/+79852111060" title="Написать в Телеграм" target="_blank" rel="nofollow">
					<img src="<?= get_theme_file_uri( 'assets/img/icon-telegram.svg' ); ?>" alt="Телеграм">
				</a>
			</div>

			<div class="site-header__phone">
				<a href="tel:+74956464959"><span>+7 (495)</span> 646-49-59</a>
				<div class="site-header__phone-schedule" <?= isBetween9And19( current_time( 'timestamp' ) ) ? 'title="Открыто сейчас"' : ''; ?>>
					<div class="is-working <?= isBetween9And19( current_time( 'timestamp' ) ) ? 'is-working-now' : ''; ?>"></div>
					9:00 — 19:00 • ежедневно
				</div>
			</div>
		</div>
		<div class="site-header__hamburger order-2 order-lg-3 d-lg-none">
			<div class="site-header__cta">
				<button class="btn-chip" data-bs-toggle="modal" data-bs-target="#feedback-modal"><?php svg( 'phone' ); ?> Заказать <br>звонок</button>
				<button class="btn-chip" data-bs-toggle="modal" data-bs-target="#feedback-modal"><?php svg( 'ruler' ); ?> Вызвать <br>замерщика</button>
			</div>

			<button class="btn btn-hamburger" type="button" data-bs-toggle="offcanvas"
			        data-bs-target="#offcanvasMenu"
			        aria-controls="offcanvasMenu"
			        aria-label="Меню">
                  <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
			</button>
		</div>
	</div>
</header>