<?php
$reviews = new WP_Query( [ 'post_type' => 'reviews', 'posts_per_page' => 8, 'order' => 'rand' ] );
?>
<section class="section section-reviews">
	<div class="container">
		<h2 class="section__title section-reviews__title">Отзывы</h2>

		<div class="row">
			<?php
			$i = 0;
			while ( $reviews->have_posts() ) : $reviews->the_post();
				if ( get_the_title() === 'Видео' || $i > 3 ) {
					continue;
				}
				$i ++;
				?>
				<div class="col-md-6">
					<div class="section-reviews__item">
						<h3><?php the_title(); ?></h3>
						<div class="section-reviews__item-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			<?php endwhile;
			wp_reset_postdata(); ?>
		</div>

	</div>
</section>