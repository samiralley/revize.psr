<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SiteName</title>
	<meta name="description" content="">
	<meta name="robots" content="noindex, nofollow">

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="_assets_/plugins/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<link rel="shortcut icon" href="_assets_/images/favicon.ico">
	
	<link rel="stylesheet" href="_assets_/font-icons/font/duotone/style.css">
	
	<link href="_assets_/css/layout.css" rel="stylesheet">
</head>

<body id="sign-in-form" class="vh-100 px-4 px-lg-0">
	<div class="position-fixed bottom-0 start-0 mb-3 ms-3">
		<?php include "includes/theme-switcher.php"; ?>
	</div>

	<main class="form-signin d-flex h-100">
		<div class="col mx-auto d-flex flex-column" style="max-width:420px">

			<div class="nav nav-pills gap-1 nav-justified rounded-2 mb-3 mt-auto" id="signin-nav-tab" role="tablist">
				<button class="nav-link active" id="nav-signin-tab" data-bs-toggle="tab" data-bs-target="#nav-signin" type="button" role="tab" aria-controls="nav-signin" aria-selected="true">Sign in</button>
				<button class="nav-link" id="nav-register-tab" data-bs-toggle="tab" data-bs-target="#nav-register" type="button" role="tab" aria-controls="nav-register" aria-selected="true">Create an account</button>
			</div><!-- /.nav -->

			<div class="tab-content mb-auto">

				<form class="tab-pane active mb-auto" id="nav-signin" role="tabpanel" aria-labelledby="signin-tab" tabindex="0">
					<div class="d-flex align-items-center justify-content-between pb-3 pt-3 pt-lg-0">
						<h1 class="h4 lh-1 fw-bold m-0">Sign in</h1>
					</div>
					<div class="form-floating">
						<input type="email" class="form-control border-bottom" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Email address</label>
					</div>
					<div class="form-floating">
						<input type="password" class="form-control" id="password" placeholder="Password">
						<label for="password">Password</label>
						<i class="ki-duotone ki-eye-slash position-absolute top-50 end-0 translate-middle-y fs-4 me-3 cursor-pointer" id="showpass" onclick="showPass()"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
					</div>

					<script>
						function showPass() {
							var x = document.getElementById("password");
							var y = document.getElementById("showpass");
							if (x.type === "password") {
								x.type = "text";
								y.classList.toggle('ki-eye-slash');
								y.classList.toggle('ki-eye');
							} else {
								x.type = "password";
								y.classList.toggle('ki-eye-slash');
								y.classList.toggle('ki-eye');
							}
						}
					</script>

					<div class="d-flex align-items-center my-3">
						<div class="form-check">
							<input class="form-check-input me-2 rounded-1" type="checkbox" value="remember-me" id="rememberMe" required>
							<label class="form-check-label" for="rememberMe">
								Remember me
							</label>
						</div>
						<button type="button" class="btn btn-link text-dark text-decoration-none ms-auto p-0" data-bs-toggle="modal" data-bs-target="#forgotModal">
							Forgot Password?
						</button>
					</div>
					<button class="btn btn-primary w-100 d-flex align-items-center gap-2 justify-content-center" type="submit">Sign in</button>
					<p class="my-3 text-center position-relative"><span class="left-center border-top w-100 z-1"></span><span class="bg-body z-2 position-relative p-3">or</span></p>
					<button class="btn btn-dark w-100 d-flex align-items-center gap-2 justify-content-center" type="submit">Continue as guest</button>

					<p class="mt-5 mb-3 text-muted small">© <?php echo date("Y"); ?> revize. By continuing, you confirm that you agree to our <a href="https://www.revize.com/privacy_policy.php" target="_blank">Privacy Policy</a> and <a href="https://www.revize.com/terms.php" target="_blank">Terms of Use</a></p>
				</form>

				<form class="tab-pane mb-auto" id="nav-register" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
					<div class="d-flex align-items-center justify-content-between pb-3 pt-3 pt-lg-0">
						<h1 class="h4 lh-1 fw-bold m-0">Create an account</h1>
					</div>
					<div class="form-floating">
						<input type="text" class="form-control border-bottom" id="floatingInputfname" placeholder="First name">
						<label for="floatingInputfname">First name</label>
					</div>
					<div class="form-floating">
						<input type="text" class="form-control border-bottom" id="floatingInputlname" placeholder="Last name">
						<label for="floatingInputlname">Last Name</label>
					</div>
					<div class="form-floating">
						<input type="email" class="form-control border-bottom" id="floatingInputemail" placeholder="name@example.com">
						<label for="floatingInputemail">Email address</label>
					</div>
					<div class="form-floating">
						<input type="password" class="form-control" id="passwordRegister" placeholder="Password">
						<label for="password">Password</label>
						<i class="ki-duotone ki-eye-slash position-absolute top-50 end-0 translate-middle-y fs-4 me-3 cursor-pointer" id="showpassRegister" onclick="showPassRegister()"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
					</div>

					<div class="d-flex align-items-center my-3">
						<div class="form-check">
							<input class="form-check-input me-2 rounded-1" type="checkbox" value="remember-me" id="agreetoterms" required>
							<label class="form-check-label" for="agreetoterms">
								Agree to our <a href="https://www.revize.com/terms.php" target="_blank">terms</a>
							</label>
						</div>
					</div>

					<script>
						function showPassRegister() {
							var x = document.getElementById("passwordRegister");
							var y = document.getElementById("showpassRegister");
							if (x.type === "password") {
								x.type = "text";
								y.classList.toggle('ki-eye-slash');
								y.classList.toggle('ki-eye');
							} else {
								x.type = "password";
								y.classList.toggle('ki-eye-slash');
								y.classList.toggle('ki-eye');
							}
						}
					</script>

					<button class="btn btn-primary w-100 d-flex align-items-center gap-2 justify-content-center" type="submit">Register</button>

					<p class="mt-5 mb-3 text-muted small">© <?php echo date("Y"); ?> revize. By continuing, you confirm that you agree to our <a href="https://www.revize.com/privacy_policy.php" target="_blank">Privacy Policy</a> and <a href="https://www.revize.com/terms.php" target="_blank">Terms of Use</a></p>
				</form>

			</div><!-- /.tab-content -->

			<div class="pb-3 mt-4 small d-flex flex-column align-items-center justify-content-center text-center">
				<p class="m-1 lh-sm text-muted small">Built by</p>
				<a href="https://www.revize.com/"><svg xmlns="http://www.w3.org/2000/svg" width="100.906" height="30.281" viewBox="0 0 88.906 22.281">
						<path fill-rule:="" evenodd;="" id="revizelogo" d="M0.93,22H5.49v-5.94a6.067,6.067,0,0,1,1.3-4.29,4.7,4.7,0,0,1,3.585-1.38h0.24V5.624a4.6,4.6,0,0,0-3.24.9,6.688,6.688,0,0,0-1.89,2.64V5.924H0.93V22Zm14.73-9.3a4.666,4.666,0,0,1,1.155-2.49,3.062,3.062,0,0,1,2.325-.93,2.99,2.99,0,0,1,2.31.945A4.443,4.443,0,0,1,22.53,12.7H15.66Zm7.74,8.865a8.092,8.092,0,0,0,2.76-2.2l-2.61-2.31a6.939,6.939,0,0,1-1.86,1.26,5.083,5.083,0,0,1-2.04.39,4.085,4.085,0,0,1-2.565-.8,3.84,3.84,0,0,1-1.365-2.355H26.91q0.03-.33.045-0.63t0.015-.57a11.548,11.548,0,0,0-.465-3.285,8.058,8.058,0,0,0-1.44-2.79A7.081,7.081,0,0,0,22.62,6.344a7.834,7.834,0,0,0-3.48-.72,7.626,7.626,0,0,0-5.73,2.46,8.237,8.237,0,0,0-1.635,2.67,8.994,8.994,0,0,0-.585,3.24v0.06a8.708,8.708,0,0,0,.63,3.375,7.906,7.906,0,0,0,1.755,2.625,7.738,7.738,0,0,0,2.67,1.71,9.164,9.164,0,0,0,3.345.6A8.561,8.561,0,0,0,23.4,21.569Zm10.35,0.555h4.14l6.33-16.2H39.48l-3.63,10.77-3.6-10.77H27.42ZM45.57,22h4.56V5.924H45.57V22ZM45.45,4.154h4.8V0.1h-4.8v4.05ZM52.38,22H66.36v-3.69H58.02l8.34-9.18V5.924H52.65v3.69h8.04l-8.31,9.18V22ZM72,12.7a4.666,4.666,0,0,1,1.155-2.49,3.062,3.062,0,0,1,2.325-.93,2.99,2.99,0,0,1,2.31.945,4.443,4.443,0,0,1,1.08,2.475H72Zm7.74,8.865a8.092,8.092,0,0,0,2.76-2.2l-2.61-2.31a6.939,6.939,0,0,1-1.86,1.26,5.083,5.083,0,0,1-2.04.39,4.085,4.085,0,0,1-2.565-.8,3.84,3.84,0,0,1-1.365-2.355h11.19q0.03-.33.045-0.63t0.015-.57a11.548,11.548,0,0,0-.465-3.285,8.058,8.058,0,0,0-1.44-2.79,7.081,7.081,0,0,0-2.445-1.935,7.834,7.834,0,0,0-3.48-.72,7.626,7.626,0,0,0-5.73,2.46,8.237,8.237,0,0,0-1.635,2.67,8.994,8.994,0,0,0-.585,3.24v0.06a8.708,8.708,0,0,0,.63,3.375,7.906,7.906,0,0,0,1.755,2.625,7.738,7.738,0,0,0,2.67,1.71,9.164,9.164,0,0,0,3.345.6A8.561,8.561,0,0,0,79.739,21.569ZM85.019,22h4.83V17.2h-4.83V22Z" transform="translate(-0.938 -0.094)"></path>
					</svg></a>
				<a href="https://www.revize.com/" class="text-muted text-decoration-none">the Government Website Experts</a>
			</div>
	</main>

	<!-- Modal -->
	<div class="modal fade" id="forgotModal" tabindex="-1" aria-labelledby="forgotModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header border-0 p-5 pb-0">
					<h1 class="fw-bold h4 mt-2">Forgot Password?</h1>
					<button type="button" class="btn-close m-3 position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-5 pt-0">
					<p>Enter your email address or username and we’ll send you instructions to reset your password.</p>
					<p class="form-"></p>
					<label for="emailResetInput" class="form-label">Username or email</label>
					<input type="text" class="form-control" id="emailResetInput" />
					<button class="btn btn-primary mt-2 d-flex align-items-center gap-2" type="submit">Submit</button>
				</div>
			</div>
		</div>
	</div>

	<script src="_assets_/js/scripts.js"></script>
</body>

</html>