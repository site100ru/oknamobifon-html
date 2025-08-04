<?php get_header(); ?>

	<main class="site-main">
		<div class="container">
			<div class="row">
				<div class="col error404__content">
					<h1 class="page-title">Этой страницы, <span>к сожалению нет или она была удалена</span></h1>
					<p>Мы готовы Вам помочь — у нас широкий ассортимент товаров и интересные предложения.
						Свяжитесь с нами по телефону или закажите обратный звонок, и
						менеджер предоставит подробную консультацию.</p>
				</div>
				<div class="col"><?php get_template_part( 'parts/callback', '' ); ?></div>
			</div>

		</div>
	</main>


<?php get_footer(); ?>