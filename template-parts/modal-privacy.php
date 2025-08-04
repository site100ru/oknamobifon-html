<?php $privacy_policy_page_id = absint( get_option( 'wp_page_for_privacy_policy' ) ); ?>
<div class="modal fade" id="modal-privacy" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal__title"><?php echo get_the_title( $privacy_policy_page_id ); ?></h2>
				<button type="button" class="modal__close" data-bs-dismiss="modal" aria-label="Закрыть">×</button>
			</div>

			<div class="modal-body">
				<?php echo get_the_content( null, false, $privacy_policy_page_id ); ?>
			</div>
		</div>
	</div>
</div>