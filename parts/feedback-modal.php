<div class="modal fade" id="feedback-modal" tabindex="-1" aria-labelledby="feedback-modalLabel" aria-hidden="true" data-bs-backdrop="static"
     data-bs-keyboard="false">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть">×</button>
			<div class="modal-body">
				<h2>Мы Вам перезвоним</h2>
				<?php get_template_part( 'parts/form', null, [ 'name' => 'feedback', 'fields' => [ 'name', 'phone' ] ] ); ?>
			</div>
		</div>
	</div>
</div>