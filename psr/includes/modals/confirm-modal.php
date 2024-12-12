<!-- #done -->
<div class="modal fade" id="confirmAction" style="--bs-modal-width:460px" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body d-flex align-items-start gap-3 p-4">
				<div class="d-flex">
					<i class="d-flex lh-1 fs-3 rounded-circle bg-danger-subtle p-3 border-info text-danger-emphasis bi bi-exclamation-octagon flex-shrink-0"></i>
				</div>
				<p class="m-0"><span class="fw-bold d-block fs-5 text-dark">Wait, are your sure?</span> You're about to delete this item. Once deleted, it cannot be recovered. Do you wish to continue?</p>
			</div>
			<div class="modal-footer flex-nowrap p-0">
				<button type="button" class="btn btn-lg btn-link text-muted fs-6 text-decoration-none col-6 py-3 m-0 border-end" style="border-radius:0 0 0 var(--rz-modal-border-radius)"><strong>Yes, Delete it</strong></button>
				<button type="button" class="btn btn-lg btn-link text-success fw-bold fs-6 text-decoration-none col-6 py-3 m-0" data-bs-dismiss="modal" id="cancelLeave" style="border-radius:0 0 var(--rz-modal-border-radius)">No, Keep it </button>
			</div>
		</div>
	</div>
</div>
