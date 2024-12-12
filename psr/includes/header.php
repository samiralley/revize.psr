
		<div class="rz-admin-header p-2 m-3 bg-body rounded-3 shadow-sm">
			<div class="d-flex align-items-center">

				<button aria-label="Open Navigation Menu" class="btn btn-sm px-2 btn-outline-light align-content-center lh-1 me-2 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#rznavOffcanvas" aria-controls="rznavOffcanvas">
					<span class="ki-duotone ki-burger-menu-5 fs-4"></span>
				</button>
			
					<?php include "includes/theme-switcher.php"; ?>

				<div class="d-flex align-items-stretch ms-auto gap-2">

					<a data-bs-toggle="offcanvas" data-bs-target="#rznavOffcanvas" aria-controls="rznavOffcanvas" aria-label="Report an issue" href="" class="btn btn-danger btn-sm d-flex d-lg-none gap-2 align-items-center lh-1"><i class="ki-duotone ki-information-3 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Report an issue
					</a>
					
					<a aria-controls="rznavOffcanvas" aria-label="Report an issue" href="reportanissue.php" class="border-0 btn btn-danger btn-sm d-none d-lg-flex gap-2 align-items-center lh-1"><i class="ki-duotone ki-information-3 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Report an issue
					</a>
					
					<!-- if user logged in -->
					<div class="btn-group account-dropdown">
						<button type="button" id="user-profile-drop" class="btn btn-outline-light btn-sm d-flex gap-2 align-items-center lh-1 p-2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="ki-duotone ki-user fs-4" aria-hidden="true"><span class="path1"></span><span class="path2"></span></i>
						</button>
						<ul class="dropdown-menu shadow">
							<li><a class="dropdown-item p-2 px-3 d-flex align-items-center gap-2" href="./"><i class="ki-duotone ki-information-2 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Current issues</a></li>
							<li><a class="dropdown-item p-2 px-3 d-flex align-items-center gap-2" href="reportanissue.php"><i class="ki-duotone ki-information-5 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Report an issue</a></li>
							<li><a class="dropdown-item p-2 px-3 d-flex align-items-center gap-2" href="myincidents.php"><i class="ki-duotone ki-information-3 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Your reported issues</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item p-2 px-3 d-flex align-items-center gap-2" href="mypublicprofile.php"><i class="ki-duotone ki-user fs-4" aria-hidden="true"><span class="path1"></span><span class="path2"></span></i>Account</a></li>
							<li><a class="dropdown-item p-2 px-3 d-flex align-items-center gap-2" href="#"><i class="ki-duotone ki-entrance-right fs-4" aria-hidden="true"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>Sign out</a></li>
						</ul>
					</div>
					<!-- if user logged in -->

					<!-- 
					<a aria-label="Sign in" href="login.php" class="btn btn-outline-light btn-sm d-flex gap-2 align-items-center lh-1"><i class="ki-duotone ki-user fs-4" aria-hidden="true"><span class="path1"></span><span class="path2"></span></i> Sign in to report an issue
					</a> -->

				</div><!-- /.d-flex -->

			</div><!-- /.d-flex -->
		</div><!-- /.rz-admin-header -->