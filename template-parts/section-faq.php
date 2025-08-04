<?php if ( have_rows( 'faq' ) ): ?>
	<section class="section section-faq">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section-faq__list">
						<h2 class="section__title">Вопросы и ответы</h2>
						<p class="section__subtitle section-faq__subtitle">
							Если нужной информации здесь нет, мы будем рады проконсультировать вас лично. Свяжитесь с нами в любом офисе или
							позвоните на нашу горячую линию: <?php the_phone(); ?></p>


						<div class="faq" itemscope itemtype="https://schema.org/FAQPage">
							<?php while ( have_rows( 'faq' ) ) : the_row(); ?>
								<div class="faq__panel" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
									<h2 class="faq__item">
										<span itemprop="name"><?php the_sub_field( 'title' ); ?></span>
										<button class="btn-close"><span>+</span></button>
									</h2>
									<div class="faq__content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
										<div itemprop="text"><?php the_sub_field( 'description' ); ?></div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
				<div class="col-xxl-8 col-xl-9 col-lg-10">
					<div class="section-faq__sidebar">
						<h2 class="section__title">Остались вопросы?</h2>
						<?php if ( isBetween9And19( current_time( 'timestamp' ) ) ) : ?>
							<p class="section__subtitle">Мы работаем сейчас. В офисе сейчас много сотрудников и мы ответим очень быстро.</p>
						<?php else : ?>
							<p class="section__subtitle">Получите бесплатную консультацию у нашиx специалистов</p>
						<?php endif; ?>

						<?php get_template_part( 'parts/form', null, [ 'name' => 'callback', 'fields' => [ 'name', 'phone', 'how' ] ] ); ?>
					</div>
				</div>
			</div>

		</div>
	</section>
<?php endif; ?>