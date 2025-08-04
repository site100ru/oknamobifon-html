<?php get_header(); ?>

<main class="site-main">
	<?php do_action( 'before_main_content' ); ?>

	<div class="container">
		<h1 class="page-title"><?php the_title(); ?></h1>

		<?php the_content(); ?>
	</div>
</main>

<?php get_footer(); ?>
