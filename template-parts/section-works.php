<?php
$per_page = $args['per_page'] ?? 8;
$category = $args['category'] ?? '';
if ( ! $category ) {
	$category = get_field( 'works-category' ) ? get_field( 'works-category' )[0]->slug : '';
}

if ( ! $category ) {
	return;
}

$query = new WP_Query( [ 'post_type' => 'works', 'posts_per_page' => $per_page, 'orderby' => 'rand', 'work_category' => $category ] );

$images = [];

while ( $query->have_posts() ) : $query->the_post();
	$post_id     = get_the_ID(); // Получаем ID текущего поста
	$attachments = get_attached_media( 'image', $post_id );

	if ( ! empty( $attachments ) ) {
		$images = [ ...$images, ...$attachments ];
	}

endwhile;
wp_reset_postdata();

shuffle( $images );

?>

<section class="section section-works">
	<div class="container">
		<header class="section__header">
			<div>
				<h2 class="section__title">Галерея работ</h2>
				<div class="section__subtitle">Более 25 лет успешного опыта. Тысячи реализованных объектов.</div>
			</div>
			<a href="<?= get_term_link( $category, 'work_category' ); ?>" class="btn btn-outline-primary">Смотреть все ↗</a>
		</header>

		<?php get_template_part( 'parts/gallery', null, [ 'ids' => wp_list_pluck( array_slice( $images, 0, 5 ), 'ID' ) ] ); ?>
	</div>
</section>