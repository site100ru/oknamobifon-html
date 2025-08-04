<?php

// Template name: Карта сайта
get_header(); ?>

	<main class="site-main">
		<?php do_action( 'before_main_content' ); ?>

		<div class="container">

			<h1 class="page-title"><?php the_title(); ?></h1>

			<article <?php post_class(); ?>>

				<?php the_content(); ?>

				<ul class="sitemap-list">
					<?php
					$args = array(
						'title_li'    => '',
						'child_of'    => 0,
						'echo'        => 1,
						'sort_column' => 'menu_order, post_title',
					);
					wp_list_pages( $args );
					?>
				</ul>
			</article>
		</div>
	</main>

<?php get_footer();