<?php
$items = new WP_Query( [ 'post_type' => 'accessories' ] );

?>
<section class="section accessories">
	<div class="container">

		<h2 class="section__title">Аксессуары</h2>
		<p class="section__subtitle">Вы можете добавить к своим окнам ряд функциональных и декоративных атрибутов</p>

		<div class="row">
			<?php while ( $items->have_posts() ) : $items->the_post(); ?>
				<div class="col-xl-4 col-lg-6 col-md-12 accessories-item-col">
					<div class="accessories-item">
						<?php echo get_the_post_thumbnail( $post, 'medium' ); ?>
						<h3 class="accessories-item__title"><?php the_title(); ?></h3>
					</div>
				</div>
			<?php endwhile;
			wp_reset_postdata(); ?>
		</div>

	</div>
</section>