<?php include "includes/head.php"; ?>
<div class="rz-admin-wrap d-flex flex-column h-100">

	<div class="rz-admin-inner d-flex flex-fill overflow-auto">

		<div class="left-col-wrap bg-body d-flex flex-column border-end offcanvas-lg offcanvas-bottom" tabindex="-1" id="rznavOffcanvas">
			<div class="left-col-inner overflow-auto d-flex flex-column small">

				<div class="offcanvas-header d-flex border-bottom">
					<h5 class="offcanvas-title d-flex gap-3 align-items-center">
						Report an Issue
					</h5>
					<button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#rznavOffcanvas" aria-label="Close"></button>
				</div>
				<div class="p-3 offcanvas-body flex-column overflow-y-auto">

					<button class="btn w-100 btn-sm bg-transparent border text-start d-flex align-items-center justify-content-center mb-2" onclick="locateMe(); return false;">
						<i class="ki-duotone ki-focus fs-4 me-2"><span class="path1"></span><span class="path2"></span></i>
						Share Your Location
					</button>

					<p class="mb-2 text-center position-relative"><span class="left-center border-top w-100 z-1"></span><span class="bg-body z-2 position-relative p-3 py-0">or</span></p>

					<div class="mb-3">
						<div class="form-floating">
							<input type="text" class="form-control form-control-sm bg-transparent border" id="location" placeholder="123 Street, Troy, MI 48000, USA" value="123 Street, Troy, MI 48000, USA">
							<label for="location" class="d-flex align-items-center"><i class="ki-duotone ki-geolocation fs-6 me-1"><span class="path1"></span><span class="path2"></span></i>Enter Location</label>
						</div>
						<button style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" class="w-100 form-text icon-link icon-link-hover text-success-emphasis lh-sm btn btn-sm btn-link text-decoration-none p-0 text-start d-flex align-items-center justify-content-start flex-wrap">
							<i class="bi ki-duotone ki-geolocation fs-4 text-success"><span class="path1"></span><span class="path2"></span></i>
							<span>
								Update Marker <br><span class="small">You can also move marker on the map</span>
							</span>
						</button>
					</div>

					<div class="form-check mb-3 d-flex">
						<input class="form-check-input" type="checkbox" value="" id="accurate">
						<label class="form-check-label" for="accurate">
							Confirm the address above is accurate <span class="text-danger">*</span>
						</label>
					</div>

					<div class="form-floating mb-3">
						<select class="form-select form-control form-control-sm bg-transparent border" id="categorySelect" aria-label="Select a category">
							<option selected>Category</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
						<label for="categorySelect">Select Category <span class="text-danger">*</span></label>
					</div>

					<div class="mb-3">
						<label for="RadioDefault" class="form-label">Type of Concern <span class="text-danger">*</span></label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="RadioDefault" id="RadioDefault1">
							<label class="form-check-label" for="RadioDefault1">
								Consectetur Magna Porta
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="RadioDefault" id="RadioDefault2">
							<label class="form-check-label" for="RadioDefault2">
								Ultricies Ornare Ullamcorper Tristique
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="RadioDefault" id="RadioDefault3">
							<label class="form-check-label" for="RadioDefault3">
								Nibh Parturient Cras Sollicitudin
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="RadioDefault" id="RadioDefault4">
							<label class="form-check-label" for="RadioDefault4">
								Ipsum Parturient Porta
							</label>
						</div>
					</div>

					<div class="mb-3">
						<div class="form-floating">
							<textarea class="form-control form-control-sm bg-transparent border" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
							<label for="floatingTextarea2">Describe the issue <span class="text-danger">*</span></label>
						</div>
					</div>

					<label for="fileUpload" class="form-label">Upload an image</label>
					<div class="input-group mb-3">
						<input type="file" class="form-control form-control-sm bg-transparent border" id="fileUpload">
					</div>

					<div class="form-check mb-3 d-flex">
						<input class="form-check-input" type="checkbox" value="" id="keepAnonymous ">
						<label class="form-check-label" for="keepAnonymous ">
							Sensitive Issue Keep it anonymous
						</label>
					</div>

					<button class="btn w-100 btn-sm border-0 btn-danger text-start d-flex align-items-center justify-content-center">
						<i class="ki-duotone ki-information-3 fs-4 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
						Report new issue
					</button>

				</div><!-- /.offcanvas-body -->

			</div><!-- /.left-col-inner -->
			<div class="mt-auto sticky-bottom text-center bg-body border-top p-3">
				<p class="m-0 v-small text-muted">© <?php echo date("Y"); ?> revize.,<a href="https://www.revize.com/terms.php" target="_blank">Terms of use</a></p>
			</div><!-- /.sticky-bottom -->

		</div><!-- /.left-col-warp -->

		<div class="center-col-wrap w-100 d-flex flex-column position-relative">

			<div class="header position-absolute z-1 w-100">
				<?php include "includes/header.php"; ?>
			</div><!-- /.header -->

			<div class="map-content center-col-inner overflow-hidden position-relative h-100 overflow-hidden">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11756.587329646023!2d-83.15417870087632!3d42.55217497761932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824c4294cf48a4f%3A0xaf836fb298dd9376!2sKrav%20Maga%20Detroit!5e0!3m2!1sen!2sus!4v1732223422692!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map w-100 h-100"></iframe>

			</div><!-- /.map-content -->
		</div><!-- /.center-col-wrap -->
	</div><!-- /.rz-admin-inner -->
</div><!-- /.rz-admin-wrap -->

<?php include "includes/footer.php"; ?>