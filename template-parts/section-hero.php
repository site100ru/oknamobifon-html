<?php

$image = isset( $args['image'] ) ? $args['image'] : 1;

$images = [
	'/wp-content/uploads/2023/04/b22.webp',
	get_theme_file_uri( '/assets/img/loving-couple.jpg' ),
	get_theme_file_uri( '/assets/img/male-worker-factory.jpg' ),
	get_theme_file_uri( '/assets/img/woman-with-coffee-cup.jpg' ),
	get_theme_file_uri( '/assets/img/low-angle-woman-looking-out-window.jpg' ),
	get_theme_file_uri( '/assets/img/woman-hand-mosquito-nets.jpg' ),
	get_theme_file_uri( '/assets/img/b6.jpg' ),
	get_theme_file_uri( '/assets/img/room-with-window-surreal-view.jpg' ),
];

$hero = get_field( 'hero' );

?>


<section class="section section-hero">
	<div class="section-hero__inner">
		<?php if ( $image_id = absint( $hero['image'] ) ) : ?>
			<div class="section__bg section-hero__bg">
				<?php echo wp_get_attachment_image( $image_id, 'large', false, [ 'loading' => 'lazy', 'class' => 'loading' ] ); ?>
			</div>
		<?php endif; ?>
		<?php if ( $hero['video_mp4'] || $hero['video_webm'] ) :
			$poster = $hero['preview'] ? 'poster="' . wp_get_attachment_image_src( $hero['preview'], 'large' )[0] . '"' : ''; ?>
			<div class="section__video section-hero__video">
				<video autoplay muted playsinline <?= $poster; ?> preload="none">
					<?php if ( $video_id = $hero['video_mp4'] ) : ?>
						<source src="<?= wp_get_attachment_url( $video_id ); ?>" type="video/mp4" media="(min-width: 768px)">
					<?php endif; ?>
					<?php if ( $video_id = $hero['video_webm'] ) : ?>
						<source src="<?= wp_get_attachment_url( $video_id ); ?>" type="video/webm" media="(min-width: 768px)">
					<?php endif; ?>
				</video>
			</div>
		<?php endif; ?>
		<div class="container section-hero__container">
			<div class="section-hero__text">
				<?php if ( is_front_page() ) : ?>
					<h2 class="section__title section-hero__title fade-in-right" style="--delay: .2s;"><?= $args['title']; ?></h2>
				<?php else : ?>
					<h1 class="section__title section-hero__title fade-in-right" style="--delay: .2s;"><?= $args['title']; ?></h1>
				<?php endif; ?>
				<h3 class="section-hero__promo  fade-in-right" style="--delay: .5s;"><?= $args['subtitle']; ?></h3>

				<div class="section-hero__cta fade-in-right" style="--delay: .8s;">
					<button class="btn btn-primary btn-cta" data-bs-toggle="modal" data-bs-target="#feedback-modal"
					        aria-label="Подробная консультация">
						Подробная консультация
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
