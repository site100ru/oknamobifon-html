<div class="gallery">

	<?php foreach ( $args['ids'] as $image_id ) :
		if ( ! $image_id ) {
			continue;
		}
		$metadata = wp_get_attachment_metadata( $image_id );
		$caption  = wp_get_attachment_caption( $image_id );

		$width  = $metadata['width'];
		$height = $metadata['height'];

		$ratio = $width / $height;

		$blockCounts      = [ 'wide' => 0, 'tall' => 0, 'big' => 0 ];
		$totalBlocks      = 0;
		$targetPercentage = 0.33;

		if ( $ratio > 1 ) {
			$format = 'wide';
		}

		if ( $ratio < 1 ) {
			$format = 'tall';
		}

		if ( $ratio === 1 || $ratio === 0.75 ) {
			$format = 'big';
		}

		$format = 'big';

		?>

		<a href="<?= wp_get_attachment_image_url( $image_id, 'full' ); ?>"
		   target="_blank" data-pswp-width="<?= $width; ?>"
		   data-pswp-height="<?= $height; ?>" class="gallery__item">
			<?= wp_get_attachment_image( $image_id, 'medium', false, [ 'loading' => 'lazy' ] ); ?>
		</a>

	<?php endforeach; ?>

</div>