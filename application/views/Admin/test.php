<?php include('header.php'); ?>

<div class="container" style="margin-top:80px">


	<h3>Codeigniter 3 Dynamic Dependent Select Box Using Ajax</h3>

	<select class="form-select" id="country" name="country">
		<option value="">Select Country</option>
		<?php
		foreach ($country as $row) {
			echo '<option value="' . $row['country_id'] . '">' . $row['country_name'] . '</option>';
		}
		?>
	</select>
	<br />

	<select class="form-select" id="state" name="state">
		<option value="">Select State</option>

	</select>

	<br />

	<select class="form-select" id="city" name="city">
		<option value="">Select City</option>

	</select>

</div>

<?php include('footer.php'); ?>

<script>
$(document).ready(function(){
	$("#country").change(function(){
		var country_id = $('#country').val();
		if (country_id != '') {

			$.ajax({
				url: "<?= base_url(); ?>/admin/fetch_state",
				method: "POST",
				data: { c_id:country_id},
				success:function(data){
					$('#state').html(data);
					$('#city').html('<option value="">Select City</option>');
				}
			});
			
		}else{
			$('#state').html('<option value="">Select State</option>');
			$('#city').html('<option value="">Select City</option>');
		}
	});


	$("#state").change(function(){
		var state_id = $('#state').val();
		if (state_id != '') {
			$.ajax({
				url: "<?= base_url(); ?>/admin/fetch_city",
				method: "POST",
				data: { s_id:state_id},
				success:function(data){
					$('#city').html(data);
				}
			});
		}else{
			$('#city').html('<option value="">Select City</option>');
		}
	});
});
</script>
