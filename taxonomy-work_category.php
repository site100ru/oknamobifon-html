<?php get_header(); ?>

<main class="site-main">
	<?php do_action( 'before_main_content' ); ?>

	<div class="container">
		<h1 class="page-title"><?= single_cat_title(); ?></h1>
		
		<div class="gallery-grid">
			<?php while ( have_posts() ) : the_post();
				$post_id     = get_the_ID();
				$attachments = get_attached_media( 'image', $post_id );
				?>
				<?php foreach ( $attachments as $attachment_id => $attachment ) :

					$metadata = wp_get_attachment_metadata( $attachment_id );
					?>
					<a href="<?= wp_get_attachment_image_url( $attachment_id, 'full' ); ?>"
					   target="_blank" data-pswp-width="<?= $metadata['width']; ?>"
					   data-pswp-height="<?= $metadata['height']; ?>" class="gallery-grid__item">
						<?= wp_get_attachment_image( $attachment_id, 'medium', false, [ 'loading' => 'lazy' ] ); ?>
					</a>
				<?php endforeach; ?>
			<?php endwhile;
			wp_reset_postdata(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
