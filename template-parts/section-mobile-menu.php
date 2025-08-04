<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
	<div class="offcanvas-body">
		<?php get_template_part( 'navbar' ); ?>

		<footer class="offcanvas__footer">

			<div class="offcanvas__cta">
				<button class="btn-chip" data-bs-toggle="modal" data-bs-target="#feedback-modal"><?php svg( 'ruler' ); ?> Вызвать <br>замерщика</button>
				<button class="btn-chip" data-bs-toggle="modal" data-bs-target="#feedback-modal"><?php svg( 'phone' ); ?> Заказать <br>звонок</button>
			</div>

			<div class="offcanvas__messengers">
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

			<div class="offcanvas__phone">
				<a href="tel:+74956464959"><span>+7 (495)</span> 646-49-59</a>
				<div class="offcanvas__phone-schedule" <?= isBetween9And19( current_time( 'timestamp' ) ) ? 'title="Открыто сейчас"' : ''; ?>>
					<div class="is-working <?= isBetween9And19( current_time( 'timestamp' ) ) ? 'is-working-now' : ''; ?>"></div>
					9:00 — 19:00 • ежедневно
				</div>
			</div>
		</footer>
	</div>
</div>