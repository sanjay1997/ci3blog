<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article List</title>
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" >
</head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Article List</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<!-- <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li> -->
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>

			</ul>
			<form class="d-flex" role="search">
				<?= anchor('admin/', 'Admin Login', 'class="btn btn-outline-success"') ?>
			</form>
		</div>
	</div>
</nav>
