<?php include('header.php'); ?>

<div class="container" style="margin-top:80px">

	<?php if ($error = $this->session->flashdata('success_message')){ ?>
		<div id="FlashMessage" class="alert alert-success text-center" role="alert">
			<?= $error ?>
		</div>
	<?php } ?>

	<div class="row">
		<div class="col-md-4">

		</div>

		<div class="col-md-4 border">
				<h3 class="text-center">Register Form</h3>
				<?= form_open('admin/register'); ?>
				<label for="email" class="col-sm-4 col-form-label">Username :</label>

				<?= form_input(['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Username', 'name' => 'uname', 'value' => set_value('uname')]); ?>
				<span class="text-danger"><?= form_error('uname') ?></span>
				
				<label for="inputPassword" class="col-sm-3 col-form-label">Password : </label>
				<?= form_input(['type' => 'password', 'class' => 'form-control', 'placeholder' => 'Enter Password', 'name' => 'password', 'value' => set_value('password')]); ?>
				<span class="text-danger"><?= form_error('password') ?></span>

				<label for="inputPassword" class="col-sm-3 col-form-label">Firstname : </label>
				<?= form_input(['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Firstname', 'name' => 'fname', 'value' => set_value('fname')]); ?>
				<span class="text-danger"><?= form_error('fname') ?></span>

				<label for="inputPassword" class="col-sm-3 col-form-label">Lastname : </label>
				<?= form_input(['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Lastname', 'name' => 'lname', 'value' => set_value('lname')]); ?>
				<span class="text-danger"><?= form_error('lname') ?></span>

				<label for="inputPassword" class="col-sm-3 col-form-label">Email : </label>
				<?= form_input(['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Email', 'name' => 'email', 'value' => set_value('email')]); ?>
				<span class="text-danger"><?= form_error('email') ?></span>

				<br/>
				<?= form_submit(['type' => 'submit', 'class' => 'btn btn-outline-success', 'value'=> 'Submit']); ?>
				<?= form_submit(['type' => 'reset', 'class' => 'btn btn-outline-success', 'value'=> 'Reset']); ?>
				<?= anchor('admin/', 'Log in ?', 'class="link-class"') ?>
				<br/>
				<!-- <span style="color: red;"><?= validation_errors(); ?></span> -->
		</div>

		<div class="col-md-4">
			
		</div>

	</div>
</div>

<?php include('footer.php'); ?>
