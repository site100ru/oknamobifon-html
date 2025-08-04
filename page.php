<?php

get_header();
//
//if ( is_page( 'dveri-2' ) ) {
//	$title    = 'Пластиковые и деревянные двери с установкой от профессионалов';
//	$subtitle = '';
//	$image    = 3;
//}
//
//if ( is_page( 'osteklenie' ) ) {
//	$title    = 'Надежные услуги по остеклению балконов и лоджий';
//	$subtitle = 'Опыт более 25 лет и безупречная репутация';
//	$image    = 0;
//}
//
//$children = new WP_Query( [ 'post_type' => 'page', 'post_parent' => $post->ID ] );

$hero = get_field( 'hero' );

?>

<main class="site-main">
	<?php do_action( 'before_main_content' ); ?>

	<?php

	if ( $hero && $hero['image'] ) :
		get_template_part( 'template-parts/section', 'hero',
			[
				'title'    => get_the_title(),
				'subtitle' => $post->post_excerpt ? get_the_excerpt() : ''
			] );
	endif;
	?>

	<?php if ( have_rows( 'advantages' ) ): ?>
		<section class="page-advantages">
			<div class="container">
				<div class="row">
					<?php while ( have_rows( 'advantages' ) ) : the_row(); ?>
						<div class="col-lg-8">
							<div class="page-advantages__item">
								<?php echo wp_get_attachment_image( get_sub_field( 'image' ) ); ?>
								<?php the_sub_field( 'title' ); ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<div class="container">
		<?php if ( ! $hero || ! $hero['image'] ) : ?>
			<h1 class="page-title"><?php the_title(); ?></h1>
		<?php endif; ?>

		<article <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
	</div>

	<?php if ( $offer = get_field( 'offer' ) ) : ?>
		<section class="section section-offer">
			<div class="container section-offer__container">
				<svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
					<rect fill="none" />
					<polygon fill="none" points="96 240 112 160 48 136 160 16 144 96 208 120 96 240" stroke="currentColor" stroke-linecap="round"
					         stroke-linejoin="round" stroke-width="12" />
				</svg>
				<div class="section-offer__content">
					<?= $offer; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php $relations = get_field( 'relations' );
	if ( $relations && $relations['svyazi'] ) : ?>
		<section class="section section-relations">
			<div class="container">
				<h2 class="section__title section-relations__title"><?= $relations['title']; ?></h2>

				<?php if ( $relations['subtitle'] ) : ?>
					<p class="section__subtitle"><?= $relations['subtitle']; ?></p>
				<?php endif; ?>

				<div class="row">
					<?php foreach ( $relations['svyazi'] as $relation ) : $post = $relation; ?>
						<div class="col-lg-6">
							<div class="section-relations__item">
								<div class="section-relations__item-image">
									<?php echo get_the_post_thumbnail(); ?>
								</div>
								<div class="section-relations__item-content">
									<h3 class="section-relations__item-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<?php if ( $s_excerpt = get_field( 'super_excerpt' ) ) : ?>
										<p class="section-relations__item-excerpt"><?= $s_excerpt; ?> ↘</p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endforeach;
					wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php get_template_part( 'template-parts/section', 'faq' ); ?>
</main>

<?php
if ( $category = get_field( 'product_cat' ) ):
	$products = new WP_Query( [ 'post_type' => 'product', 'posts_per_page' => - 1, 'orderby' => 'rand', 'product_cat' => $category[0]->slug ] );
	?>
	<section class="section section--catalog">
		<div class="container">
			<h2 class="section__title">Готовая продукция <span>товары со склада</span></h2>

			<div class="row">
				<?php while ( $products->have_posts() ) : $products->the_post(); ?>
					<div class="col-lg-6">
						<?php get_template_part( 'content/catalog', 'item' ); ?>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_template_part( 'template-parts/section', 'works' ); ?>

<?php get_footer(); ?>
