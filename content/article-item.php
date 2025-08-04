<article <?php post_class(); ?>>
  <img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'middle' ); ?>" alt='Изображение для статьи "<?php the_title(); ?>"' class="post__image">
  <div class="post__description">
    <h3 class="post__title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <div class="post__excerpt">
		<?php the_excerpt(); ?>
    </div>
  </div>
</article>