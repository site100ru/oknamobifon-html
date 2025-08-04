<footer class="site-footer" itemscope itemtype="http://schema.org/WPFooter">
	<meta itemprop="copyrightYear" content="<?= date( 'Y' ); ?>">
	<meta itemprop="copyrightHolder" content="<?php bloginfo(); ?>">

	<div class="container site-footer__container">
		<div class="row">
			<div class="col-lg-8 site-footer__contacts">
				<div class="site-footer__messangers">
					<a href="https://wa.me/79938642678?text=Здравствуйте!" title="Написать в WhatsApp" target="_blank"
					   rel="nofollow">
						<img src="<?= get_theme_file_uri( 'assets/img/icon-whatsapp.svg' ); ?>" alt="WhatsApp">
						Написать <br>в WhatsApp ↗
					</a>

					<a href="https://t.me/+79852111060" title="Написать в Телеграм" target="_blank" rel="nofollow">
						<img src="<?= get_theme_file_uri( 'assets/img/icon-telegram.svg' ); ?>" alt="Телеграм">
						Написать <br>в Телеграм ↗
					</a>
				</div>
			</div>
			<div class="col-lg-8 site-footer__logo">
				<?php echo file_get_contents( get_parent_theme_file_path( 'assets/img/logo-icon.svg' ) ); ?>
			</div>
			<div class="col-lg-8">
				ООО УК «Бифориум групп» (ИНН: 7713411510)
				<address>127411, Москва, Дмитровское шоссе, д. 125, к. 1</address>
				<?php the_phone( 'site-footer__phone' ) ?><br>E-mail: <a href="mailto:info@oknamobifon.ru">info@oknamobifon.ru</a>
			</div>
		</div>

		<div class="site-footer__bottom">
			<ul itemscope itemtype="http://schema.org/SiteNavigationElement">
				<li>
					<a itemprop="url" href="<?= get_privacy_policy_url(); ?>"><span itemprop="name">Политика конфиденциальности</span></a>
				</li>
				<li class="d-none">
					<a itemprop="url" href="<?= site_url( 'sitemap' ); ?>"><span itemprop="name">Карта сайта</span></a>
				</li>
				<li class="d-none">
					<a href="<?= get_post_type_archive_link( 'product' ); ?>">Каталог</a>
				</li>
			</ul>

			© 2025 ООО УК «Бифориум групп»
		</div>
	</div>


	<ul class="site-footer__animation-background">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</footer>

<?php get_template_part( 'parts/feedback-modal' ); ?>
<?php //get_template_part( 'template-parts/section', 'mobile-feedback' ); ?>
<?php get_template_part( 'template-parts/section', 'mobile-menu' ); ?>
<?php get_template_part( 'template-parts/modal', 'privacy' ); ?>

<?php //get_template_part( 'parts/measurer-cta' ); ?>

<?php wp_footer(); ?>
</body>
</html>