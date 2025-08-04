<?php

$clients = [
	[ 'name' => 'Самолет', 'logo' => get_theme_file_uri( 'assets/img/clients/samolet.png' ) ],
	[ 'name' => 'А101', 'logo' => get_theme_file_uri( 'assets/img/clients/a101.png' ) ],
	[ 'name' => 'Первый канал', 'logo' => get_theme_file_uri( 'assets/img/clients/pervyj-kanal.png' ) ],
	[ 'name' => 'МГТС', 'logo' => get_theme_file_uri( 'assets/img/clients/mgts.png' ) ],
	[ 'name' => 'М.Видео', 'logo' => get_theme_file_uri( 'assets/img/clients/mvideo.png' ) ],
	[ 'name' => 'Gloria Jeans', 'logo' => get_theme_file_uri( 'assets/img/clients/gloriya.png' ) ],
	[ 'name' => 'KFC', 'logo' => get_theme_file_uri( 'assets/img/clients/kfc.png' ) ],
	[ 'name' => 'Аэрофлот', 'logo' => get_theme_file_uri( 'assets/img/clients/aeroflot.png' ) ],
];

?>
<section class="section section-clients">
	<div class="container">
		<div class="carousel">
			<div class="carousel__track">
				<?php foreach ( $clients as $client ) : ?>
					<div class="brand-logo">
						<img src="<?= $client['logo']; ?>" alt="<?= $client['name']; ?>">
					</div>
				<?php endforeach; ?>
				<?php foreach ( $clients as $client ) : ?>
					<div class="brand-logo">
						<img src="<?= $client['logo']; ?>" alt="<?= $client['name']; ?>">
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>