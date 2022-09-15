<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin :: Login</title>
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" >
</head>
  <body>
  <nav class="navbar navbar-expand-lg bg-secondary">
	<div class="container-fluid">
		<a class="navbar-brand text-white" href="<?= base_url('admin'); ?>">ADMIN PANEL</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<?php
			if($this->session->userdata('id')){
			?>
			<?= anchor('admin', 'Home', 'class="btn btn-primary btn-outline-light btn-sm"') ?>&nbsp;&nbsp;
			<?= anchor('admin/product/', 'Shop', 'class="btn btn-primary btn-outline-light btn-sm"') ?>&nbsp;&nbsp;
			<?= anchor('admin/myorder/', 'My Order', 'class="btn btn-primary btn-outline-light btn-sm"') ?>&nbsp;&nbsp;
			<?= anchor('admin/test/', 'DropDown', 'class="btn btn-primary btn-outline-light btn-sm"') ?>&nbsp;&nbsp;

			<button class="btn btn-success btn-outline-light btn-sm" type="submit"><?= $this->session->userdata('firstn'); ?> <?= $this->session->userdata('lastn'); ?></button>
			&nbsp;&nbsp;
			<?= anchor('admin/logout/', 'Log out', 'class="btn btn-danger btn-outline-light btn-sm"') ?>
			<?php } ?>
		</div>
	</div>
</nav>
