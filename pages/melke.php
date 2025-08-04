<?php

$items = [
	'Centum'    => [
		'left'  => [
			[
				'title' => 'Трёхкамерный стеклопакет',
			],
			[
				'title' => '7 камер в створке',
			],
			[
				'title' => 'Трехкамерная профильная система 60 мм'
			],
			[
				'title' => 'Армирование 2 мм'
			],
			[
				'title' => 'Самая лучшая фурнитура'
			],
		],
		'right' => [
			[
				'title' => 'Три контура уплотнения'
			],
			[
				'title' => 'Заглушка «Антипыль»'
			],
			[
				'title' => '6 камер в раме'
			]
		],
		'price' => 15290
	],
	'Wide'      => [
		'left'  => [
			[
				'title' => '5 камер в раме',
			],
			[
				'title' => '6 камер в створках',
			],
			[
				'title' => 'Заглушка «Антипыль»'
			],
			[
				'title' => 'Фурнитура Siegenia Titan AF'
			],
		],
		'right' => [
			[
				'title' => 'Фигурный штапик'
			],
			[
				'title' => 'Фигурная створка'
			],
			[
				'title' => 'Армирование 2 мм'
			]
		],
		'price' => 15290
	],
	'Evolution' => [
		'left'  => [
			[
				'title' => 'Двухкамерный мультифункциональный стеклопакет Climatherm™',
			],
			[
				'title' => 'Стальное армирование толщиной 1,5 мм',
			],
			[
				'title' => 'Уплотнители Melke'
			],
		],
		'right' => [
			[
				'title' => 'Премиум фурнитура Siegenia Titan'
			],
			[
				'title' => 'Заглушка «Антипыль»'
			]
		],
		'price' => 15290
	],
	'Smart'     => [
		'left'  => [
			[
				'title' => 'Двухкамерный мультифункциональный стеклопакет Climatherm™',
			],
			[
				'title' => 'Стальное армирование толщиной 1,5 мм',
			],
			[
				'title' => 'Уплотнители Melke'
			],
		],
		'right' => [
			[
				'title' => 'Немецкая фурнитура Siegenia в специальной комплектации'
			],
			[
				'title' => 'Заглушка «Антипыль»'
			]
		],
		'price' => 15290
	],
	'Lite 70'   => [
		'left'  => [
			[
				'title' => 'Двухкамерный мультифункциональный стеклопакет Climatherm™',
			],
			[
				'title' => 'Стальное армирование толщиной 1,5 мм',
			],
			[
				'title' => 'Уплотнители Melke'
			],
		],
		'right' => [
			[
				'title' => 'Фурнитура Futuruss в специальной комплектации'
			],
			[
				'title' => 'Заглушка «Антипыль»'
			]
		],
		'price' => 15290
	],
	'Lite 60'   => [
		'left'  => [
			[
				'title' => 'Двухкамерный стеклопакет',
			],
			[
				'title' => 'Стальное армирование толщиной 1,5 мм',
			],
			[
				'title' => 'Уплотнители Melke'
			],
		],
		'right' => [
			[
				'title' => 'Фурнитура Futuruss в специальной комплектации'
			],
			[
				'title' => 'Заглушка «Антипыль»'
			]
		],
		'price' => 15290
	]
];
?>

<div class="rehau rehau--melke">
	<section class="rehau-types">
		<div class="container">
			<h2 class="section__title">Типы окон Melke</h2>

			<ul class="section-tabs">
				<li data-tab="panel-Centum" class="--active">Melke Centum</li>
				<li data-tab="panel-Wide">Melke Wide</li>
				<li data-tab="panel-Evolution">Melke Evolution</li>
				<li data-tab="panel-Smart">Melke Smart</li>
				<li data-tab="panel-Lite 70">Melke Lite`70</li>
				<li data-tab="panel-Lite 60">Melke Lite`60</li>
			</ul>

			<div class="rehau__panels">
				<?php foreach ( $items as $type => $item ) {

					?>
					<section class="rehau__panel <?= $type === 'Centum' ? '--active' : ''; ?>" id="panel-<?= $type; ?>">
						<div class="rehau__panel-left">
							<?php foreach ( $item['left'] as $item_left ) { ?>
								<div class="rehau__panel-item">
									<h5><?= $item_left['title']; ?></h5>
								</div>
							<?php } ?>
						</div>
						<div class="rehau__panel-image">
							<img src="<?= get_theme_file_uri( 'assets/img/pages/melke/melke_' . strtolower( $type ) . '.webp' ); ?>" alt="<?= $type; ?>"
							     style="max-height:500px;">
						</div>
						<div class="rehau__panel-right">
							<?php foreach ( $item['left'] as $item_right ) { ?>
								<div class="rehau__panel-item">
									<h5><?= $item_right['title']; ?></h5>
								</div>
							<?php } ?>

							<div class="rehau__panel-price">
								Цена: от <?= number_format( $item['price'], 0, '.', ' ' ); ?> руб / м²
							</div>
						</div>
					</section>
				<?php } ?>
			</div>
		</div>
	</section>
</div>