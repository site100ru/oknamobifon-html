<?php
// Template name: Алюминиевые окна
get_header();

$title    = 'Алюминиевые окна с установкой от профессионалов';
$subtitle = 'Сейчас самое время купить долговечные алюминиевые окна у нас';
$image    = 2;

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

  </main>

<?php get_footer();