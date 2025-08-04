<?php get_header(); ?>

<main class="site-main">
	<?php do_action( 'before_main_content' ); ?>
	<div class="container">
		<h1 class="page-title"><?= post_type_archive_title(); ?></h1>

		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-lg-12">
					<?php get_template_part( 'template-parts/card', 'review' ); ?>
				</div>
			<?php endwhile;
			wp_reset_postdata(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
