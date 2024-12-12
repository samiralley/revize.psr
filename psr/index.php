<?php include "includes/head.php"; ?>
<div class="rz-admin-wrap d-flex flex-column h-100">

	<div class="rz-admin-inner d-flex flex-fill overflow-auto">

		<div class="left-col-wrap bg-body d-flex flex-column border-end offcanvas-lg offcanvas-bottom" tabindex="-1" id="rznavOffcanvas">
			<div class="left-col-inner overflow-auto d-flex flex-column small">

				<div class="offcanvas-header d-flex border-bottom">
					<h5 class="offcanvas-title d-flex gap-3 align-items-center">
						Current Issues
					</h5>
					<button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#rznavOffcanvas" aria-label="Close"></button>
				</div>
				<div class="p-3 pt-0 offcanvas-body flex-column overflow-y-auto">

					<!-- #note use this if there are no issues and user not logged in -->
					<div class="border border-success p-3 rounded-3 text-center mb-2 relative bg-success-subtle mt-3">
						<p>There are currently no issues in your area. <a href="login.php" class="stretched-link text-success">Sign in</a> and be the first one to report an issue</p>

						<a aria-label="Report an issue" href="login.php" class="btn btn-success btn-sm d-inline-flex gap-2 align-items-center justify-content-center"><i class="ki-duotone ki-entrance-right fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Sign in
						</a>
					</div>
					<!-- #note use this if there are no issues and user not logged in -->

					<!-- #note use this if there are no issues and user is logged in -->
					<div class="border p-3 rounded-3 text-center mb-2 relative">
						<p>There are currently no issues in your area. be the first one to report an issue</p>

						<a aria-label="Report an issue" href="reportanissue.php" class="stretched-link btn btn-danger btn-sm p-2 d-inline-flex gap-2 align-items-center justify-content-center"><i class="ki-duotone ki-information-3 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Report a new issue
						</a>
					</div>
					<!-- #note use this if there are no issues and user is logged in -->

					<div class="d-flex gap-3 my-3 bg-light p-3 rounded">
						<i class="ki-duotone ki-chart-line-up-2 fs-3 text-success-emphasis"><span class="path1"></span><span class="path2"></span></i>
						<p class="m-0">
							<strong>Last 30 days:</strong> 70 Closed, 13 In Progress, 1 New, 108 Resolved, 125 Acknowledged
						</p>
					</div>

					<a aria-label="Report an issue" href="" class="btn btn-danger border-0 btn-sm p-2 d-flex gap-2 align-items-center justify-content-center"><i class="ki-duotone ki-information-3 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Report a new issue
					</a>

					<div class="reported-issues mb-3">
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->
						<div class="issue-reported d-flex gap-3 align-items-center py-3 border-bottom">
							<img src="_assets_/images/marker1.png" class="flex-shrink-0">
							<div class="flex-fill">
								<a href="" data-bs-toggle="modal" data-bs-target="#issueDetails">Streets & Sidewalks (1)</a>
								<p class="m-0">
									1407 Ford St, Golden, CO 80401, USA
								</p>
								<p class="m-0 text-muted small d-flex justify-content-between">Reported: 4 days ago <a href="">Ask to be fixed?</a></p>
							</div>
						</div><!-- /.issue-reported -->

					</div><!-- /.reported-issues -->

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