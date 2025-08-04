<?php

$attachments  = get_attached_media( 'image', 18511 );
$randomKeys   = array_rand( $attachments, 3 );
$randomValues = array_map( function ( $key ) use ( $attachments ) {
	return $attachments[ $key ];
}, $randomKeys );
?>

<section class="certificates">
	<h2 class="section__title">Вся продукция <br><span>сертифицирована</span></h2>

	<figure class="stack">
		<?php foreach ( $randomValues as $attachment ) :
			$meta = wp_get_attachment_metadata( $attachment->ID );
			echo wp_get_attachment_image( $attachment->ID, 'medium' );
		endforeach; ?>
	</figure>
</section>