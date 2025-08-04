<section class="section-callback">
	<div class="section__bg section-callback__bg">
		<?= wp_get_attachment_image( 18750, 'large' ); ?>
	</div>
	<div class="section-callback__box">
		<h2 class="section__title">Мы можем вам позвонить</h2>
		<?php if ( isBetween9And19( current_time( 'timestamp' ) ) ) : ?>
			<p class="section__subtitle">Мы работаем сейчас. В офисе сейчас много сотрудников и мы ответим очень быстро.</p>
		<?php else : ?>
			<p class="section__subtitle">Получите бесплатную консультацию у нашиx специалистов</p>
		<?php endif; ?>
		<?php get_template_part( 'parts/form', null, [ 'name' => 'callback', 'fields' => [ 'name', 'phone' ] ] ); ?>
	</div>
</section>