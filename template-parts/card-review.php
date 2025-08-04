<section class="card card-review <?= get_the_title() === 'Видео' ? 'card-review--video' : ''; ?>">

	<?php if ( get_the_title() !== 'Видео' ) : ?>
		<h3><?php the_title(); ?></h3>
	<?php endif; ?>

	<div class="card__content card-review__content">
		<?php the_content(); ?>
	</div>

</section>