<?php include('header.php'); ?>

<div class="container" style="margin-top:80px">

	<?php if ($error = $this->session->flashdata('error_message')){ ?>
		<div id="FlashMessage" class="alert alert-danger text-center" role="alert">
			<?= $error ?>
		</div>
	<?php } ?>

	<div class="row">
		<div class="col-md-4">

		</div>

		<div class="col-md-4 border">

				<h3 class="text-center">Admin Login</h3>
				<?= form_open('admin/index'); ?>
				<label for="email" class="col-sm-4 col-form-label">Username :</label>

				<?= form_input(['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Username', 'name' => 'uname', 'value' => set_value('uname')]); ?>
				<span class="text-danger"><?= form_error('uname') ?></span>
				
				<label for="inputPassword" class="col-sm-3 col-form-label">Password : </label>
				<?= form_input(['type' => 'password', 'class' => 'form-control', 'placeholder' => 'Enter Password', 'name' => 'password', 'value' => set_value('password')]); ?>
				<span class="text-danger"><?= form_error('password') ?></span>

				<br/>
				<?= form_submit(['type' => 'submit', 'class' => 'btn btn-outline-success', 'value'=> 'Submit']); ?>
				<?= form_submit(['type' => 'reset', 'class' => 'btn btn-outline-success', 'value'=> 'Reset']); ?>
				<?= anchor('admin/register/', 'Sign up?', 'class="link-class"') ?>
				<br/>
				<!-- <span style="color: red;"><?= validation_errors(); ?></span> -->
		</div>

		<div class="col-md-4">
			
		</div>

	</div>
</div>

<?php include('footer.php'); ?>
