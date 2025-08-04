<?php
/** @var Array $args */

$name = $args['name'] ?? null;

if ( ! $name ) {
	if ( WP_DEBUG ) {
		echo 'Error: Нет обязательных параметров для вывода формы';
	}

	return;
}

?>

<form action="" id="<?= $name; ?>" name="<?= $name; ?>" class="form">
	<div class="loader-box">
		<span class="loader"></span>
	</div>
	<div class="form__box">

		<div class="form-floating">
			<?php $id = $name . '-name'; ?>
			<input type="text" class="form-control" id="<?= $id; ?>" name="form-name" placeholder="Ваше имя" required>
			<label for="<?= $id; ?>"><span class="form__required">*</span> Ваше имя</label>
		</div>

		<div class="form-floating">
			<?php $id = $name . '-phone'; ?>
			<input type="tel" pattern="^(\+7|8)\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$" class="form-control" id="<?= $id; ?>" name="form-phone"
			       placeholder="Телефон" required title="Введите номер в формате: +7 (999) 999-99-99 или 8 (999) 999-99-99">
			<label for="<?= $id; ?>"><span class="form__required">*</span> Телефон</label>
		</div>

		<?php if ( isset( $args['fields'] ) && in_array( 'files', $args['fields'] ) ) : ?>
			<div class="form__files">
				<?php $id = $name . '-files'; ?>
				<div class="form__files-label">
					<label for="<?= $id; ?>">
						<button class="btn">+</button>
						Добавьте фотографии для предварительной оценки работ
					</label>

				</div>

				<input type="file" id="<?= $id; ?>" multiple accept=".jpg,.jpeg,.png,.tiff" style="display:none;" name="form-files">
				<div id="form__files-preview"></div>
			</div>
		<?php endif; ?>

		<?php if ( isset( $args['fields'] ) && in_array( 'message', $args['fields'] ) ) : ?>
			<div class="form-floating">
				<?php $id = $name . '-message'; ?>
				<textarea class="form-control expandable" id="<?= $id; ?>" name="form-message" placeholder=""></textarea>
				<label for="<?= $id; ?>">Сообщение</label>
			</div>
		<?php endif; ?>

		<?php if ( isset( $args['fields'] ) && in_array( 'how', $args['fields'] ) ) : ?>
			<div class="form-floating">
				<?php $id = $name . '-how'; ?>
				<select class="form-select" id="<?= $id; ?>" aria-label="Как удобно связаться">
					<option selected>Перезвонить</option>
					<option value="1">WhatsApp</option>
					<option value="2">Telegram</option>
				</select>
				<label for="<?= $id; ?>">Как удобно связаться?</label>
			</div>
		<?php endif; ?>

		<div class="form-check form__privacy-policy-check">
			<?php $id = $name . '-privacy-policy'; ?>
			<input class="form-check-input" type="checkbox" value="" id="<?= $id; ?>" checked required>
			<label class="form-check-label" for="<?= $id; ?>">
				Оставляя заявку, вы даете свое согласие на обработку персональных данных в соответствие с <a href="<?php echo get_privacy_policy_url(); ?>"
				                                                                                             data-bs-toggle="modal"
				                                                                                             data-bs-target="#modal-privacy">
					политикой конфиденциальности</a>
			</label>
		</div>

		<button type="submit" class="btn btn-primary btn-icon btn--icon-right">
			Отправить <?= file_get_contents( get_theme_file_path( 'assets/img/icon-arrow-right.svg' ) ); ?>
		</button>
	</div>
</form>
<div class="form-result"></div>