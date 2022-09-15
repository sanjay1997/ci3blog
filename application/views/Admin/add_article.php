<?php include('header.php'); ?>

<div class="container" style="margin-top:80px">

	<?php if ($error = $this->session->flashdata('error_message')){ ?>
		<div id="FlashMessage" class="alert alert-danger text-center" role="alert">
			<?= $error ?>
		</div>
	<?php } ?>

	<div class="row">
		<div class="col-md-3">

		</div>

		<div class="col-md-6 border">

				<h3 class="text-center">Add Article</h3>
				<?= form_open_multipart('admin/addarticle'); ?>
				<label for="email" class="col-sm-4 col-form-label">Article Title :</label>

				<?= form_input(['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter Title', 'name' => 'title', 'value' => set_value('title')]); ?>
				<span class="text-danger"><?= form_error('title') ?></span>
				
				<label for="inputPassword" class="col-sm-3 col-form-label">Article Body : </label>
				<?= form_textarea(['rows' => 3,  'class' => 'form-control', 'placeholder' => 'Enter Body', 'name' => 'body', 'value' => set_value('body')]); ?>
				<span class="text-danger"><?= form_error('body') ?></span><br/>

				<label for="inputPassword" class="col-sm-3 col-form-label">Select Image : </label>
				<?= form_upload(['name' => 'userfile']); ?><br/>
				<span class="text-danger"><?php if(isset($upload_error)){ echo $upload_error; } ?></span><br/>
 
				<br/>
				<?= form_submit(['type' => 'submit', 'class' => 'btn btn-outline-success', 'value'=> 'Save']); ?>
				<?= form_submit(['type' => 'reset', 'class' => 'btn btn-outline-success', 'value'=> 'Reset']); ?>
				<?= anchor('admin/', 'Close', 'class="btn btn-outline-success"') ?>
				<br/>
				<!-- <span style="color: red;"><?= validation_errors(); ?></span> -->
		</div>

		<div class="col-md-3">
			
		</div>

	</div>
</div>

<?php include('footer.php'); ?>
