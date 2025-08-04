<?php get_header(); ?>

<?php get_template_part( 'template-parts/section', 'hero',
	[
		'title'    => 'Все заботы по установке <span>пластиковых окон и дверей</span> берем на себя',
		'subtitle' => 'Работаем с 2000 года. Окна и двери от производителя. Выезд на замер на следующий день. Установка окон и дверей от 1 дня.'
	] ); ?>

<?php get_template_part( 'template-parts/section', 'brands' ); ?>
<?php get_template_part( 'template-parts/section', 'quality' ); ?>


<section class="section-services d-none">
	<div class="container section-services__container">

		<header class="section-services__header">
			<h2 class="section__title">Мы предлагаем</h2>
		</header>

		<section class="section-services__item">
			<div class="row">
				<div class="col-lg-9">
					<h3 class="section__title">Окна и двери из фурнитуры <span>мировых производителей</span></h3>
				</div>
				<div class="col">sdfsfsdf</div>
			</div>
		</section>

		<section class="section-services__item">
			<div class="row">
				<div class="col-lg-9">
					<h3 class="section__title">Качественный монтаж по ГОСТу, <span>гарантийное обслуживание</span></h3>
				</div>
				<div class="col">dsfsdfsdf</div>
			</div>
		</section>

		<section class="section-services__item">
			<div class="row">
				<div class="col-lg-9">
					<h3 class="section__title">Широкий ассортимент фурнитуры, <span>установка москитных сеток</span></h3>
				</div>
				<div class="col">dsfdsfds</div>
			</div>
		</section>
	</div>
</section>

<section class="section section-reputation">
	<div class="container">
		<div class="row mb-2">
			<div class="col-lg-8">
				<h2 class="section__title section-reputation__title">Более 25 лет <span>открытой и честной репутации</span></h2>
			</div>
			<div class="col-lg-8">
				<div class="section-reputation__item">
					<div class="section-reputation__item-mark">
						<img src="<?= get_theme_file_uri( 'assets/img/icon-yandex-map.svg' ); ?>" alt="Яндекс Карты">
						5.0
					</div>
					<div class="section-reputation__item-stars">
						<span>✱✱✱✱✱</span>
						<a href="https://yandex.ru/maps/org/oknamobifon/1223052465/reviews/?ll=37.541575%2C55.886544&tab=reviews&z=15.83" target="_blank"
						   rel="nofollow">
							119 оценок
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="section-reputation__item">
					<div class="section-reputation__item-mark">
						<img src="<?= get_theme_file_uri( 'assets/img/icon-2gis.svg' ); ?>" alt="2ГИС">
						5
					</div>
					<div class="section-reputation__item-stars">
						<span>✱✱✱✱✱</span>
						<a href="https://2gis.ru/moscow/firm/70000001051479447/tab/reviews?m=37.541475%2C55.886484%2F16" target="_blank" rel="nofollow">
							114 оценок
						</a>
					</div>
				</div>
			</div>
		</div>

		<?php get_template_part( 'template-parts/section', 'clients' ); ?>
	</div>
</section>

<?php get_template_part( 'template-parts/section', 'uso' ); ?>

<?php get_template_part( 'template-parts/section', 'products', [ 'title' => 'Широкий ассортимент продукции' ] ); ?>

<?php //get_template_part( 'template-parts/section', 'discount' ); ?>

<section class="callmeback d-none">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

			</div>
			<div class="col-lg-12">
				<h3>Нужна помощь в выборе? Мы готовы предложить вам самые выгодные условия! Позвоните нам или оставьте заявку – наши консультанты свяжутся с
					вами в течение 15 минут. Закажите бесплатный выезд специалиста для детального расчета и консультации по вашему окну.
			</div>
		</div>
	</div>
</section>

<section class="section my-3">
	<div class="container">
		<div class="row">
			<div class="col-xl-16"><?php get_template_part( 'parts/callback' ); ?></div>
		</div>
	</div>
</section>

<?php //get_template_part( 'sections/section', 'questions' ); ?>

<?php //get_template_part( 'template-parts/section', 'trust' ); ?>

<?php //get_template_part( 'parts/scheme' ); ?>

<?php //get_template_part( 'parts/blog' ); ?>

<?php //get_template_part( 'template-parts/section', 'reviews' ); ?>

<?php //get_template_part( 'parts/promo' ); ?>

<?php //get_template_part( 'template-parts/section', 'reasons' ); ?>


<?php //get_template_part( 'template-parts/section', 'advantages' ); ?>
<?php //get_template_part( 'template-parts/section', 'accessories' ); ?>
<?php //get_template_part( 'template-parts/section', 'faq' ); ?>
<?php //get_template_part( 'template-parts/section', 'works' ); ?>
<?php //get_template_part( 'template-parts/section', 'help' ); ?>

<?php get_footer(); ?>
