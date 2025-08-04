<?php

get_header(); ?>

<main class="site-main">
	<?php do_action( 'before_main_content' ); ?>
	
	<div class="container">
		<h1 class="page-title">Акции</h1>
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-8">
					<article class="promo-item">

						<h2><?php the_title(); ?></h2>

						<?php the_content(); ?>

					</article>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
