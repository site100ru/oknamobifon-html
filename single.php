<?php get_header(); ?>

<?php get_template_part( 'parts/masthead' ); ?>

<main class="site-main">
  <article <?php post_class(); ?>>
    <div class="container">


		<?php the_content(); ?>


    </div>
  </article>
</main>

<?php get_footer(); ?>
