<?php include "includes/head.php"; ?>
<div class="rz-admin-wrap d-flex flex-column h-100">

	<div class="admin-section rz-admin-inner d-flex flex-fill overflow-auto">

		<?php include "includes/leftbar_admin.php"; ?>

		<div class="center-col-wrap w-100 d-flex flex-column position-relative">

			<div class="header position-absolute z-1 w-100">

				<div class="rz-admin-header px-3 py-4 px-lg-5 pb-0 rounded-3 border-0">
					<div class="d-flex align-items-center">

						<button aria-label="Open Navigation Menu" class="btn btn-sm px-2 btn-outline-light align-content-center lh-1 me-2 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#rznavOffcanvas" aria-controls="rznavOffcanvas">
							<span class="ki-duotone ki-burger-menu-5 fs-4"></span>
						</button>

						<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
							<symbol id="check2" viewBox="0 0 16 16">
								<path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
							</symbol>
							<symbol id="circle-half" viewBox="0 0 16 16">
								<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
							</symbol>
							<symbol id="moon-stars-fill" viewBox="0 0 16 16">
								<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
								<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
							</symbol>
							<symbol id="sun-fill" viewBox="0 0 16 16">
								<path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"></path>
							</symbol>
						</svg>

						<div class="dropdown bd-mode-toggle">
							<button class="btn btn-outline-light btn-sm dropdown-toggle d-flex align-items-center h-100" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
								<svg class="bi my-1 theme-icon-active" width="1rem" height="1rem">
									<use href="#sun-fill"></use>
								</svg>
								<span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
							</button>
							<ul class="dropdown-menu dropdown-menu-start shadow" aria-labelledby="bd-theme-text">
								<li>
									<button type="button" class="dropdown-item d-flex align-items-center py-2 active" data-bs-theme-value="light" aria-pressed="true">
										<svg class="bi me-3" width="1.2em" height="1.2em">
											<use href="#sun-fill"></use>
										</svg>
										Light
										<svg class="bi ms-auto d-none" width="1em" height="1em">
											<use href="#check2"></use>
										</svg>
									</button>
								</li>
								<li>
									<button type="button" class="dropdown-item d-flex align-items-center py-2" data-bs-theme-value="dark" aria-pressed="false">
										<svg class="bi me-3" width="1.2em" height="1.2em">
											<use href="#moon-stars-fill"></use>
										</svg>
										Dark
										<svg class="bi ms-auto d-none" width="1em" height="1em">
											<use href="#check2"></use>
										</svg>
									</button>
								</li>
								<li>
									<button type="button" class="dropdown-item d-flex align-items-center py-2" data-bs-theme-value="auto" aria-pressed="false">
										<svg class="bi me-3" width="1.2em" height="1.2em">
											<use href="#circle-half"></use>
										</svg>
										Auto
										<svg class="bi ms-auto d-none" width="1em" height="1em">
											<use href="#check2"></use>
										</svg>
									</button>
								</li>
							</ul>
						</div>
						<div class="d-flex align-items-stretch ms-auto gap-2">

							<div class="btn-group account-dropdown">
								<button type="button" class="btn btn-outline-light btn-sm d-flex gap-2 align-items-center lh-1 p-2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="ki-duotone ki-user fs-4" aria-hidden="true"><span class="path1"></span><span class="path2"></span></i>
								</button>
								<ul class="dropdown-menu" style="">
									<li><a class="dropdown-item p-2 px-3 d-flex align-items-center gap-2" href="./"><i class="ki-duotone ki-information-2 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Current issues</a></li>
									<li><a class="dropdown-item p-2 px-3 d-flex align-items-center gap-2" href="reportanissue.php"><i class="ki-duotone ki-information-5 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Report an issue</a></li>
									<li><a class="dropdown-item p-2 px-3 d-flex align-items-center gap-2" href="myincidents.php"><i class="ki-duotone ki-information-3 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Your reported issues</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item p-2 px-3 d-flex align-items-center gap-2" href="mypublicprofile.php"><i class="ki-duotone ki-user fs-4" aria-hidden="true"><span class="path1"></span><span class="path2"></span></i>Account</a></li>
									<li><a class="dropdown-item p-2 px-3 d-flex align-items-center gap-2" href="#"><i class="ki-duotone ki-entrance-right fs-4" aria-hidden="true"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>Sign out</a></li>
								</ul>
							</div>

						</div><!-- /.d-flex -->

					</div><!-- /.d-flex -->
				</div><!-- /.rz-admin-header -->

			</div>

			<div class="center-col-inner overflow-hidden position-relative h-100 overflow-hidden px-3 py-5 px-lg-5">

				<div class="w-100 mt-5">
					<div class="d-flex align-items-center pb-3 pt-3 pt-lg-0">
						<h1 class="h4 lh-1 fw-bold m-0">Your Reported Incidents</h1>

						<button type="button" class="ms-auto btn btn-light bg-light border-0" data-bs-toggle="modal" data-bs-target="#filterModal">Filter</button>

					</div>

					<p class="mt-5 mb-3 text-muted v-small position-fixed bottom-0 end-0 mb-4 me-3">© <?php echo date("Y"); ?> revize. <a href="https://www.revize.com/privacy_policy.php" target="_blank">Privacy Policy</a> and <a href="https://www.revize.com/terms.php" target="_blank">Terms of Use</a></p>
				</div>

				<div class="table-responsive mb-lg-auto mb-auto">

					<table class="table table-bordered w-100">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Incident ID</th>
								<th>Title</th>
								<th>Address</th>
								<th>Created</th>
								<th>Status</th>
								<th>Reported By</th>
								<th>Days Past</th>
								<th>View</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td>Mark</td>
								<td>Mark</td>
								<td>Mark</td>
								<td>Mark</td>
								<td>Mark</td>
							</tr>
						</tbody>

					</table>
				</div>

				<div class="pb-3 mt-4 small d-flex flex-column align-items-center justify-content-center text-center">
					<p class="m-1 lh-sm text-muted small">Built by</p>
					<a href="https://www.revize.com/"><svg xmlns="http://www.w3.org/2000/svg" width="100.906" height="30.281" viewBox="0 0 88.906 22.281">
							<path fill-rule:="" evenodd;="" id="revizelogo" d="M0.93,22H5.49v-5.94a6.067,6.067,0,0,1,1.3-4.29,4.7,4.7,0,0,1,3.585-1.38h0.24V5.624a4.6,4.6,0,0,0-3.24.9,6.688,6.688,0,0,0-1.89,2.64V5.924H0.93V22Zm14.73-9.3a4.666,4.666,0,0,1,1.155-2.49,3.062,3.062,0,0,1,2.325-.93,2.99,2.99,0,0,1,2.31.945A4.443,4.443,0,0,1,22.53,12.7H15.66Zm7.74,8.865a8.092,8.092,0,0,0,2.76-2.2l-2.61-2.31a6.939,6.939,0,0,1-1.86,1.26,5.083,5.083,0,0,1-2.04.39,4.085,4.085,0,0,1-2.565-.8,3.84,3.84,0,0,1-1.365-2.355H26.91q0.03-.33.045-0.63t0.015-.57a11.548,11.548,0,0,0-.465-3.285,8.058,8.058,0,0,0-1.44-2.79A7.081,7.081,0,0,0,22.62,6.344a7.834,7.834,0,0,0-3.48-.72,7.626,7.626,0,0,0-5.73,2.46,8.237,8.237,0,0,0-1.635,2.67,8.994,8.994,0,0,0-.585,3.24v0.06a8.708,8.708,0,0,0,.63,3.375,7.906,7.906,0,0,0,1.755,2.625,7.738,7.738,0,0,0,2.67,1.71,9.164,9.164,0,0,0,3.345.6A8.561,8.561,0,0,0,23.4,21.569Zm10.35,0.555h4.14l6.33-16.2H39.48l-3.63,10.77-3.6-10.77H27.42ZM45.57,22h4.56V5.924H45.57V22ZM45.45,4.154h4.8V0.1h-4.8v4.05ZM52.38,22H66.36v-3.69H58.02l8.34-9.18V5.924H52.65v3.69h8.04l-8.31,9.18V22ZM72,12.7a4.666,4.666,0,0,1,1.155-2.49,3.062,3.062,0,0,1,2.325-.93,2.99,2.99,0,0,1,2.31.945,4.443,4.443,0,0,1,1.08,2.475H72Zm7.74,8.865a8.092,8.092,0,0,0,2.76-2.2l-2.61-2.31a6.939,6.939,0,0,1-1.86,1.26,5.083,5.083,0,0,1-2.04.39,4.085,4.085,0,0,1-2.565-.8,3.84,3.84,0,0,1-1.365-2.355h11.19q0.03-.33.045-0.63t0.015-.57a11.548,11.548,0,0,0-.465-3.285,8.058,8.058,0,0,0-1.44-2.79,7.081,7.081,0,0,0-2.445-1.935,7.834,7.834,0,0,0-3.48-.72,7.626,7.626,0,0,0-5.73,2.46,8.237,8.237,0,0,0-1.635,2.67,8.994,8.994,0,0,0-.585,3.24v0.06a8.708,8.708,0,0,0,.63,3.375,7.906,7.906,0,0,0,1.755,2.625,7.738,7.738,0,0,0,2.67,1.71,9.164,9.164,0,0,0,3.345.6A8.561,8.561,0,0,0,79.739,21.569ZM85.019,22h4.83V17.2h-4.83V22Z" transform="translate(-0.938 -0.094)"></path>
						</svg></a>
					<a href="https://www.revize.com/" class="text-muted text-decoration-none">the Government Website Experts</a>
				</div>

			</div><!-- /.center-col-inner -->
		</div><!-- /.center-col-wrap -->
	</div><!-- /.rz-admin-inner -->
</div><!-- /.rz-admin-wrap -->

<div class="modal fade" id="filterModal" style="--bs-modal-width:620px" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header p-4">
				<h3 class="modal-title fs-5">Filter</h3>
				<button type="button" class="btn-close align-self-center" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body align-items-start p-4">

				<div class="row">

					<div class="col-lg-6 mb-3">
						<label for="incident_status">Status</label>
						<select class="form-select form-control" id="incident_status" name="incident_status_id" aria-label="incident status">
							<option value="">All Status</option>
							<option value="1">New</option>
							<option value="2">Assigned</option>
							<option value="3">In Progress</option>
							<option value="4">Delayed (Weekend)</option>
							<option value="5">Delayed (Weather)</option>
							<option value="6">Delayed (Staff Shortage)</option>
							<option value="7">Resolved</option>
							<option value="8">Closed</option>
							<option value="9">Follow-up</option>
						</select>
					</div>

					<div class="col-lg-6 mb-3">
						<label for="issue_id">Issues</label>
						<select name="issue_id" id="issue_id" class="form-select form-control">
							<option value="">All Issues</option>
							<option value="-1">No Issue</option>
							<option value="1827">Click here to see options.</option>
							<option value="1800">Code Enforcement</option>
							<option value="1806">Miscellaneous</option>
							<option value="1797">Parking Structures &amp; Restrooms</option>
							<option value="1810">Parks, Playgrounds &amp; Trails</option>
							<option value="1824">Planning &amp; Zoning</option>
							<option value="1811">Recreation Facilities</option>
							<option value="1916">Seasonal Lights</option>
							<option value="1904">Snow &amp; Ice Removal</option>
							<option value="1793">Streets &amp; Sidewalks</option>
							<option value="1795">Trash &amp; Recycling (Pay as You Throw - PAYT)</option>
							<option value="1808">Trees, Weeds &amp; Landscaping</option>
							<option value="1799">Water &amp; Sewer</option>
						</select>
					</div>

					<div class="col-lg-6 mb-3">
						<label for="number_of_days">Days Past</label>
						<select name="number_of_days" id="number_of_days" class="form-select form-control">
							<option value=""></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
						</select>
					</div>

					<div class="col-lg-6 mb-3">
						<label for="incident_is_acknowledged">Acknowledged</label>
						<select name="incident_is_acknowledged" id="incident_is_acknowledged" class="form-select form-control">
							<option value=""></option>
							<option value="N">N </option>
							<option value="Y">Y</option>
						</select>
					</div>

					<div class="col-lg-4 mb-3">
						<label for="incident_title">Title</label>
						<input type="text" class="form-control" id="incident_title">
					</div>

					<div class="col-lg-4 mb-3">
						<label for="address">Address</label>
						<input type="text" class="form-control" id="address">
					</div>

					<div class="col-lg-4 mb-3">
						<label for="incident_id">Incident ID</label>
						<input type="text" class="form-control" id="incident_id">
					</div>

				</div><!-- /.row -->

			</div><!-- /.modal-body -->
			<div class="modal-footer p-3">
				<button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="cancelLeave">Filter and Close</button>
			</div>
		</div>
	</div>
</div>

<?php include "includes/footer.php"; ?>