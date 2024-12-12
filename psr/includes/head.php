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

	<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="_assets_/plugins/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<link rel="stylesheet" href="_assets_/font-icons/font/duotone/style.css">
	<link rel="stylesheet" href="_assets_/font-icons/font/outline/style.css">
	<link rel="stylesheet" href="_assets_/font-icons/font/solid/style.css">
	
	<link href="_assets_/css/layout.css" rel="stylesheet">
</head>

<body class="admin-panel user-logged-in h-100">

	<div class="rz-loader-wrapper"></div>

	<!-- #note must be logged in splash page -->
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column vh-100 d-none">
		<main class="px-3 container m-auto">
			<h1>Sorry :)</h1>
			<p class="mb-4">You must be logged in to view this page, it's a revize. thing</p>
			<a href="#" class="btn btn-light">Login</a>
			<a href="#" class="btn btn-light">Go home</a>
			<a href="game.php" class="btn btn-dark border-dark bg-dark"><i class="bi bi-joystick me-2"></i>Play tic tac toe</a>
		</main>

		<footer class="mt-auto text-primary">
			<p class="p-2 pb-0 m-0 v-small text-muted">© <?php echo date("Y"); ?> with <i class="bi bi-heart-fill"></i> by revize.,<a href="https://www.revize.com/terms.php" target="_blank">Terms of use</a></p>
		</footer>
	</div>
	<!-- #note must be logged in splash page -->