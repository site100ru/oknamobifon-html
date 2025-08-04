<?php get_header();

$categories = get_terms( [ 'taxonomy' => 'work_category' ] );

?>

<main class="site-main">
	<?php do_action( 'before_main_content' ); ?>

	<div class="container">
		<h1 class="page-title"><?= post_type_archive_title(); ?></h1>

		<?php foreach ( $categories as $category ) :
			$images = []; ?>
			<div class="works__category">
				<header class="works__category-header">
					<h2><?= $category->name; ?></h2>
					<a href="<?= get_term_link( $category->slug, 'work_category' ); ?>" class="btn btn-outline-primary">Смотреть ↗</a>
				</header>

				<?php

				$args = array(
					'post_type'      => 'works',
					'work_category'  => $category->slug,
					'posts_per_page' => - 1
				);

				$works = new WP_Query( $args );

				while ( $works->have_posts() ) : $works->the_post();

					$post_id     = get_the_ID();
					$attachments = get_attached_media( 'image', $post_id );

					if ( ! empty( $attachments ) ) {
						$images = [ ...$images, ...$attachments ];
					}
					shuffle( $images );
					?>

				<?php endwhile;
				wp_reset_postdata(); ?>

				<?php get_template_part( 'parts/gallery', null, [ 'ids' => wp_list_pluck( array_slice( $images, 0, 5 ), 'ID' ) ] ); ?>

			</div>
		<?php endforeach; ?>
	</div>
</main>

<?php get_footer(); ?>
