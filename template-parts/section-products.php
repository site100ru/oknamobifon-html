<?php
$posts_per_page = $args['per_page'] ?? 12;
$title          = $args['title'] ?? 'Вас также могут заинтересовать';
$category       = $args['category'] ?? '';
$query          = new WP_Query( [ 'post_type' => 'product', 'posts_per_page' => $posts_per_page, 'orderby' => 'rand', 'product_cat' => $category ] );

?>
<section class="section section-products">
	<div class="container">
		<h2 class="section__title section-products__title"><?= $title; ?> <span>оптимальные цены от производителя</span></h2>
		<p class="section__subtitle section-products__subtitle">
			 Окна и двери из профильных систем и фурнитуры мировых производителей для жилых помещений, а также услуги по остеклению и
			отделке балконов.</p>

		<div class="row product-categories">
			<div class="col-xl-6 col-lg-8 col-md-12 col-full">
				<div class="product-category">
					<img src="<?= get_theme_file_uri( 'assets/img/category-okna-pvc.jpg' ); ?>" alt="Пластиковые окна">
					<h3 class="product-category__title">Пластиковые <span>окна</span></h3>
					<p>Изготовление и установка качественных пластиковых окон напрямую с завода по лучшей цене.</p>

					<ul>
						<li><a href="<?= get_permalink( 18488 ); ?>">Rehau</a></li>
						<li><a href="<?= get_permalink( 18490 ); ?>">KBE</a></li>
						<li><a href="<?= get_permalink( 18493 ); ?>">Novotex</a></li>
						<li><a href="<?= get_permalink( 18495 ); ?>">Proplex</a></li>
						<li><a href="<?= get_permalink( 18497 ); ?>">Melke</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-6 col-lg-8 col-md-12 col-full">
				<div class="product-category">
					<img src="<?= get_theme_file_uri( 'assets/img/category-okna-wood.jpg' ); ?>" alt="Деревянные окна">
					<h3 class="product-category__title">Деревянные <span>окна</span></h3>
					<p>Деревянные окна от производителя по индивидуальным размерам.</p>
					<ul>
						<li><a href="<?= get_permalink( 18507 ); ?>">Сосна</a></li>
						<li><a href="<?= get_permalink( 18505 ); ?>">Лиственница</a></li>
						<li><a href="<?= get_permalink( 18503 ); ?>">Дуб</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-6 col-lg-8 col-md-12 col-full">
				<div class="product-category">
					<img src="<?= get_theme_file_uri( 'assets/img/category-okna-alyuminii.jpg' ); ?>" alt="Алюминиевые окна">
					<h3 class="product-category__title">Алюминиевые <span>окна</span></h3>
					<p>Повышенная взломостойкость за счет прочности металла.</p>
					<ul>
						<li><a href="">NEW TEC</a></li>
						<li><a href="">AGS</a></li>
						<li><a href="">Alutech</a></li>
						<li><a href="">Provedal</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-6 col-lg-8 col-md-12 col-full">
				<div class="product-category">
					<img src="<?= get_theme_file_uri( 'assets/img/category-pvc-doors.jpg' ); ?>" alt="Пластиковые двери">
					<h3 class="product-category__title">Пластиковые <span>двери</span></h3>
					<p>Качественные пластиковые двери напрямую с завода по лучшей цене.</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-8 col-md-12 col-full">
				<div class="product-category">
					<h3 class="product-category__title">Алюминиевые <span>двери</span></h3>
					<p>Качественные пластиковые двери напрямую с завода по лучшей цене.</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-8 col-md-12 col-full">
				<div class="product-category">
					<h3 class="product-category__title">Москитные сетки <span>на окна и двери</span></h3>
					<p>Качественные москитные сетки напрямую с завода по лучшей цене.</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-8 col-md-12 col-full">
				<div class="product-category">
					<h3 class="product-category__title">Аксессуары <span>на любой вкус</span></h3>
					<p>Широкий выбор аксессуаров, замков, откосов.</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-8 col-md-12 col-full">
				<div class="product-category">
					<h3 class="product-category__title">Полный комплекс <span>услуг</span></h3>
					<p>От ремонта окон до производства и замены стеклопакетов.</p>
				</div>
			</div>
		</div>
	</div>
</section>