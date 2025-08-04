<?php

$clients = [
	[ 'name' => 'Rehau', 'logo' => get_theme_file_uri( 'assets/img/brands/logo-rehau.svg' ), 'link' => get_permalink( 18488 ) ],
	[ 'name' => 'KBE', 'logo' => get_theme_file_uri( 'assets/img/brands/logo-kbe.svg' ), 'link' => get_permalink( 18490 ) ],
	[ 'name' => 'Melke', 'logo' => get_theme_file_uri( 'assets/img/brands/logo-melke.svg' ), 'link' => get_permalink( 18497 ) ],
	[ 'name' => 'Proplex', 'logo' => get_theme_file_uri( 'assets/img/brands/logo-proplex.png' ), 'link' => get_permalink( 18495 ) ],
	[ 'name' => 'Novotex', 'logo' => get_theme_file_uri( 'assets/img/brands/logo-novotex.svg' ), 'link' => get_permalink( 18495 ) ]
];

?>
<section class="section section-brands">
	<div class="container">
		<div class="carousel">
			<div class="carousel__track">
				<?php foreach ( $clients as $client ) : ?>
					<a class="brand-logo" href="<?= $client['link']; ?>">
						<img src="<?= $client['logo']; ?>" alt="<?= $client['name']; ?>">
					</a>
				<?php endforeach; ?>
				<?php foreach ( $clients as $client ) : ?>
					<a class="brand-logo" href="<?= $client['link']; ?>">
						<img src="<?= $client['logo']; ?>" alt="<?= $client['name']; ?>">
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>