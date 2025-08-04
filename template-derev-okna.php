<?php
// Template name: Деревянные окна
get_header();

$title    = 'Деревянные окна с установкой <br>от профессионалов';
$subtitle = 'Сейчас самое время купить долговечные деревянные окна у нас';
$image    = 2;

$children = new WP_Query( [ 'post_type' => 'page', 'post_parent' => $post->ID ] );

?>

<?php get_template_part( 'parts/hero', '', [
	'title'    => $title,
	'subtitle' => $subtitle,
	'image'    => $image
] ); ?>

  <main class="site-main">

	  <?php if ( $children->have_posts() ) : ?>
        <div class="children">
          <div class="container">
            <div class="row">
				<?php
				while ( $children->have_posts() ) : $children->the_post();
					?>
                  <div class="col-md-6">
                    <div class="children-item">
                      <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    </div>
                  </div>
				<?php endwhile;
				wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
	  <?php endif; ?>

    <article <?= post_class(); ?>>
      <div class="container">
		  <?php the_content(); ?>
      </div>
    </article>


  </main>

<?php get_footer();