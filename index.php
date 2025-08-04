<?php get_header(); ?>

<main class="site-main">
	<div class="container">
		<h1 class="page-title">Полезная информация</h1>
		
		<div class="row articles-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-8">
					<?php get_template_part( 'content/article', 'item' ); ?>
				</div>
			<?php endwhile; ?>
		</div>

		<section class="show-more">
			<button class="btn btn-primary">Показать еще</button>
		</section>
	</div>
</main>

<?php get_footer(); ?>
