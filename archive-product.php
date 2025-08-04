<?php get_header();

$categories = get_terms_tree( 'product_cat' );
?>

<main class="site-main">
	<?php do_action( 'before_main_content' ); ?>

	<header class="page-header">
		<div class="container">
			<h1 class="page-title">Каталог</h1>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-lg-16">
				<div class="row catalog-list">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-lg-8">
							<?php get_template_part( 'content/catalog', 'item' ); ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-lg-8">
				<aside class="sidebar">
					<h2 class="sidebar-title">Категории товаров</h2>
					<ul>
						<?php foreach ( $categories as $term ) : ?>
							<li><a href="<?= get_term_link( $term ); ?>"><?= $term->name; ?></a></li>
							<?php if ( $term->children ) : ?>
								<ul>
									<?php foreach ( $term->children as $term_child ) : ?>
										<li><a href="<?= get_term_link( $term_child ); ?>"><?= $term_child->name; ?></a></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>

						<?php endforeach; ?>
					</ul>
				</aside>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
