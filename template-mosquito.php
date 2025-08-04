<?php
// Template name: Москитные сетки
get_header();

$title    = 'Москитные сетки на пластиковые окна с установкой от профессионалов';
$subtitle = 'Опыт более 25 лет и безупречная репутация';
$image    = 5;

?>

<?php get_template_part( 'parts/hero', '', [
	'title'    => $title,
	'subtitle' => $subtitle,
	'image'    => $image
] ); ?>

  <main class="site-main">
    <article <?php post_class(); ?>>
      <div class="container">
		  <?php the_content(); ?>
      </div>
    </article>

    <section class="section mosquito-types">
      <div class="container">
        <h2 class="section__title">Типы полотна москитной сетки</h2>

        <div class="row">
			<?php if ( have_rows( 'mosquito-types' ) ): ?>
				<?php while ( have_rows( 'mosquito-types' ) ): the_row(); ?>
                <div class="col-md-12">
                  <div class="mosquito-types__item">
                    <h3 class="mosquito-types__item-title"><?php the_sub_field( 'title' ); ?></h3>
					  <?php the_sub_field( 'description' ); ?>
                  </div>
                </div>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
      </div>
    </section>


  </main>

<?php get_template_part( 'template-parts/section', 'products', [ 'category' => 'moskitnye-setki-na-okna', 'per_page' => - 1 ] ); ?>
<?php get_template_part( 'template-parts/section', 'works', [ 'category' => 'moskitnye-setki' ] ); ?>
<?php get_template_part( 'template-parts/section', 'advantages' ); ?>
<?php get_template_part( 'template-parts/section', 'faq' ); ?>


<?php get_footer();