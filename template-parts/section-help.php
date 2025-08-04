<section class="section section-help">
	<div class="container">
		<h2 class="section__title">Нужна помощь в выборе окон?</h2>
		<div class="section__subtitle">Закажите обратный звонок, и мы перезвоним вам в удобное для вас время и поможем сделать правильный выбор.</div>
		<button class="btn btn-primary">Заказать звонок</button>
	</div>
</section>

<section class="section section-measurer">
	<div class="container section-measurer__container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section__title">Не уверены в размерах?</h2>
				<div class="section__subtitle">Запишитесь на бесплатный замер!</div>
				<p>
					<strong>Выезд бесплатный и ни к чему не обязывает.</strong>
					Мастер приедет в удобное для вас время и место, где он cделает необходимые замеры и расcчитает точную стоимость, а также
					расскажет про технологии монтажа окон и зафиксирует <span class="discount-highlight">скидку в 10%</span>
				</p>
			</div>
			<div class="col-md-12">
				<?php get_template_part( 'parts/form', null, [ 'name' => 'sizes', 'fields' => [ 'files' ] ] ); ?>
			</div>
		</div>
	</div>
</section>