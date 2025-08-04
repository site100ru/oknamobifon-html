<header class="masthead page-header">
	<div class="container">

		<?php
		if ( is_page() ) :
			if ( $post->post_parent > 0 ) :
				$parent_post = get_post( $post->post_parent );
				?>
				<div class="page-uptitle d-none">
					<a href="<?= get_the_permalink( $parent_post->ID ); ?>"><?= $parent_post->post_title; ?></a>
				</div>
			<?php endif; ?>
		<?php else: ?>

			<div class="page-uptitle">
				<a href="<?php echo get_post_type_archive_link( get_post_type() ); ?>">
					Все <?= get_post_type_object( get_post_type() )->label; ?>
				</a> →
			</div>

		<?php endif; ?>
		<h1 class="page-title"><?php the_title(); ?></h1>

	</div>
</header>