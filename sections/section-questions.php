<section class="section section-questions">
	<div class="section__bg">
		<img src="<?= get_theme_file_uri( 'assets/img/bg/service-maintenance.jpg' ); ?>" alt="">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="questions__box">
					<h1 class="section__title">Остались вопросы?</h1>

					<p>Спросите у нашего эксперта по телефону <a href="tel:+74956464959" class="tel" target="_blank" rel="nofollow">+7 (495) 646-49-59</a> или
						напишите в <?php the_whatsapp(); ?> или <?php the_telegram(); ?>


					<p>Специалист перезвонит в течение нескольких минут и ответит на все ваши вопросы.</p>
				</div>
			</div>
			<div class="col-lg-12">
				<?php get_template_part( 'parts/form', null, [ 'name' => 'questions', 'fields' => [ 'name', 'phone' ] ] ); ?>
			</div>
		</div>
	</div>
</section>