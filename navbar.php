<nav class="navbar" itemscope itemtype="https://schema.org/SiteNavigationElement">
	<meta itemprop="name" content="Навигация по сайту">
	<ul class="navbar-nav">
		<li class="nav-item nav-item--dropdown">
			<a itemprop="url" class="nav-link" href="<?= get_permalink( 18889 ); ?>" title="Остекление квартир, балконов, лоджий">
				<span itemprop="name">Квартира</span>
			</a>
			<div class="dropdown-menu">
				<div class="dropdown-menu__inner">
					<div class="row">
						<div class="col-lg-12">
							<ul>
								<li><a itemprop="url" href="<?= get_permalink( 18889 ); ?>"><span itemprop="name">Остекление квартиры</span></a></li>
								<li><a itemprop="url" href="<?= get_permalink( 18621 ); ?>"><span itemprop="name">Балконы и лоджии</span></a>Остекление, отделка</li>
								<li><a itemprop="url" href="<?= get_permalink( 18633 ); ?>"><span itemprop="name">Отделка балконов и лоджий</span></a>Внутренняя отделка балконов и внешняя отделка сайдингом</li>
								<li><a itemprop="url" href="<?= get_permalink( 18602 ); ?>"><span itemprop="name">Жалюзи и рулонные шторы</span></a>Римские и рулонные шторы, рольшторы</li>
							</ul>
						</div>
						<div class="col-lg-12">
							<ul>
								<li><a itemprop="url" href="<?= get_permalink( 18653 ); ?>"><span itemprop="name">Фильтрующая мембрана из нановолокна для окон</span></a></li>
								<li><a itemprop="url" href="<?= get_permalink( 18509 ); ?>"><span itemprop="name">Установка москитных сеток</span></a></li>
								<li><a itemprop="url" href="<?= get_permalink( 10110 ); ?>"><span itemprop="name">Регулировка окон</span></a></li>
								<li><a itemprop="url" href="<?= get_permalink( 10104 ); ?>"><span itemprop="name">Ремонт окон</span></a></li>
								<li><a itemprop="url" href="<?= get_permalink( 10095 ); ?>"><span itemprop="name">Замена пластиковых стеклопакетов</span></a></li>
								<li><a itemprop="url" href="<?= get_permalink( 10113 ); ?>"><span itemprop="name">Все услуги</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li class="nav-item nav-item--dropdown">
			<a itemprop="url" class="nav-link" href="<?= get_permalink( 18981 ); ?>">
				<span itemprop="name">Офис</span>
			</a>
			<div class="dropdown-menu">
				<div class="dropdown-menu__inner">
					<div class="row">
						<div class="col-lg-12">
							<ul>
								<li><a itemprop="url" href="<?= get_permalink( 18981 ); ?>"><span itemprop="name">Остекление офисов и производственных помещений</span></a></li>
								<li><a itemprop="url" href="<?= get_permalink( 18649 ); ?>"><span itemprop="name">Офисные двери</span></a></li>
								<li><a itemprop="url" href="<?= get_permalink( 17570 ); ?>"><span itemprop="name">Входные двери</span></a></li>
								<li><a itemprop="url" href="<?= get_permalink( 18635 ); ?>"><span itemprop="name">Производство и установка офисных перегородок</span></a></li>
								<li><a itemprop="url" href="<?= get_permalink( 17568 ); ?>"><span itemprop="name">Входные группы</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li class="nav-item nav-item--dropdown">
			<a itemprop="url" class="nav-link" href="<?= get_permalink( 17566 ); ?>">
				<span itemprop="name">Загородный дом</span>
			</a>
			<div class="dropdown-menu">
				<div class="dropdown-menu__inner">
					<ul>
						<li><a itemprop="url" href="<?= get_permalink( 17566 ); ?>"><span itemprop="name">Остекление коттеджей и загородных домов</span></a></li>
						<li><a itemprop="url" href="<?= get_permalink( 18611 ); ?>"><span itemprop="name">Раздвижные окна для беседки или веранды</span></a></li>
						<li><a itemprop="url" href="<?= get_permalink( 17556 ); ?>"><span itemprop="name">Фасадное остекление дома</span></a></li>
						<li><a itemprop="url" href="<?= get_permalink( 17554 ); ?>"><span itemprop="name">Остекление тамбура в частном доме</span></a></li>
						<li><a itemprop="url" href="<?= get_permalink( 17552 ); ?>"><span itemprop="name">Остекление крыльца</span></a></li>
						<li><a itemprop="url" href="<?= get_permalink( 17550 ); ?>"><span itemprop="name">Остекление дачных домов</span></a></li>
						<li><a itemprop="url" href="<?= get_permalink( 17548 ); ?>"><span itemprop="name">Остекление входных групп</span></a></li>
					</ul>
				</div>
			</div>
		</li>
		<li class="nav-item nav-item--dropdown">
			<a itemprop="url" class="nav-link" href="<?= get_permalink( 10113 ); ?>">
				<span itemprop="name">Услуги</span>
			</a>
			<div class="dropdown-menu">
				<div class="dropdown-menu__inner">
					<ul>
						<?php
						$subpages = get_posts( [ 'post_type' => 'page', 'post_parent' => 10113, 'posts_per_page' => - 1 ] );

						foreach ( $subpages as $subpage ) {
							$post = $subpage; ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php }
						wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
		</li>
		<li class="nav-item">
			<a itemprop="url" class="nav-link" href="<?= get_post_type_archive_link( 'works' ); ?>">
				<span itemprop="name">Галерея</span>
			</a>
		</li>
		<li class="nav-item">
			<a itemprop="url" class="nav-link" href="<?= get_permalink( 25 ); ?>">
				<span itemprop="name">Контакты</span>
			</a>
		</li>
	</ul>

	<ul class="navbar-nav--add">
		<li><a href="<?= get_permalink( 10277 ); ?>">О компании</a></li>
		<li><a href="<?= get_permalink( 10308 ); ?>">Оплата</a></li>
		<li><a href="<?= get_permalink( 17524 ); ?>">Доставка</a></li>
		<li><a href="<?= get_permalink( 18511 ); ?>">Сертификаты</a></li>
		<li><a href="<?= get_permalink( 12679 ); ?>">Гарантии</a></li>
		<li><a href="<?= get_post_type_archive_link( 'post' ); ?>">Статьи</a></li>
	</ul>
</nav>