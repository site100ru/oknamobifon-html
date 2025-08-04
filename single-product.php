<?php

get_header();

$gallery    = get_post_meta( $post->ID, '_product_image_gallery', true );
$attributes = get_post_meta( $post->ID, '_product_attributes', true );

$product_category = get_the_terms( $post, 'product_cat' );
$parent           = get_term_by( 'id', $product_category[0]->parent, 'product_cat' );
$parent_name      = $parent ? $parent->name : '';
?>

<main class="site-main">
	<?php do_action( 'before_main_content' ); ?>
	<article <?php post_class(); ?> itemscope itemtype="https://schema.org/Product">
		<div class="container">

			<h1 class="page-title" itemprop="name"><?php the_title(); ?></h1>

			<img itemprop="image" class="d-none" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>" alt='<?php the_title(); ?>' />

			<div class="container">

				<?= term_description( get_the_terms( $post, 'product_cat' ), 'product_cat' ); ?>

				<?php echo gallery_shortcode( [ 'ids' => $gallery . ',' . get_post_thumbnail_id(), 'columns' => 3, 'link' => 'file' ] ); ?>
				<div class="attributes">
					<?php foreach ( $attributes as $attribute ) : ?>
						<div class="attribute__item">
							<div class="attribute__name"><?php echo $attribute['name']; ?></div>
							<div class="attribute__value"><?php echo $attribute['value']; ?></div>
						</div>
					<?php endforeach; ?>
				</div>

				<article <?php post_class(); ?>>
					<?php the_content(); ?>


					<?php if ( $price = get_post_meta( $post->ID, '_price', true ) ) : ?>
						<div itemprop="offers" itemscope itemtype="https://schema.org/Offer">

							<span itemprop="availability" class="text-success" href="https://schema.org/InStock">В наличии</span></strong>
							<br>

							Стоимость от <span itemprop="price" content="<?= $price ?>"><?= number_format( $price, 0, '.', ' ' ); ?></span> <span
								itemprop="priceCurrency" content="RUB">₽</span>
						</div>
					<?php endif; ?>
				</article>

			</div>
		</div>
	</article>
</main>

<?php get_footer(); ?>
