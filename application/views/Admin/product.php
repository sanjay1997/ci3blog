<?php include('header.php'); ?>

<div class="container-fluid" style="margin-top:80px">

	<div class="row">

		<?php if (count($product) > 0) :
			foreach ($product as $key => $row) :  ?>

				<div class="col-md-2">
				<div class="card">
					<img src="<?= $row['image'] ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<b><?= $row['name'] ?></b>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<b>MRP : <?= $row['mrp'] ?> | Selling Price : <?= $row['sprice'] ?></b>
						


						<div class="row" style="margin-top: 10px;">
							<div class="col-md-3">
							<label><b>Qty : </b></label>
							</div>
							<div class="col-md-4">
							<input type="number" class="form-control form-control-sm qty" placeholder="eg: 2" />
							</div>
							<div class="col-md-5">
							<button type="button" class="btn btn-success btn-sm buy_now" data-sprice="<?= $row['sprice']; ?>" data-pid="<?= $row['id'] ?>" data-pname="<?= $row['name'] ?>" data-fname="<?= $this->session->userdata('firstn'); ?>" data-email="<?= $this->session->userdata('email'); ?>" data-phone="<?= $this->session->userdata('phone'); ?>">Buy Now</button>
							</div>
						</div>
					</div>
				</div>
				</div>

			<?php
			endforeach;
		else :
			?>
			<tr>
				<td colspan="4">No Data Available</td>
			</tr>
		<?php endif; ?>
	</div>

</div>

<?php include('footer.php'); ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
	$(document).ready(function(){
		$('body').on('click', '.buy_now', function(e){
				var qty   		= $(this).parent().prev().children().val();
				if (qty == '') {
					alert('Please Select Quantity.');
					return;
				}

				var pid 		= $(this).attr("data-pid");
				var pname 		= $(this).attr("data-pname");
				var sprice 		= $(this).attr("data-sprice");
				var finalprice 	= qty * sprice;

			//console.log(data);
			var options = {
				"key" : "rzp_test_CYGWPnq2sykWgl", // test key
				"currency": "INR",
				"name": "Acme Corp",
    			"description": "Test Transaction",
				"amount": finalprice * 100,
				"description": "Test Transaction",
				"image": "http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png",
				"handler":function(response){
					
					if (response.razorpay_payment_id == 'undefined' ||  response.razorpay_payment_id < 1) {
						window.location.href = "<?= base_url('admin/failed') ?>"
					}else{
						$.ajax({
							url:"<?= base_url('admin/product') ?>",
							type: 'post',
							dataType: 'json',
							data:{
								razorpay_payment_id:response.razorpay_payment_id, totalAmount : finalprice, product_id : pid,pname: pname, qty:qty
							},
							success: function(res){
								if (res == 1) {
									window.location.href = "<?= base_url('admin/success') ?>"
								}
							}
						});
					}
				},

				"prefill": {
				"name": $(this).attr("data-fname"),
				"email": $(this).attr("data-email"),
				"contact": $(this).attr("data-phone")
				},
				"theme" : {
					"color": "#F37254"
				}
			};

				var rzp1 = new Razorpay(options);
				//document.getElementById('rzp-button1').onclick = function(e){
					rzp1.open();
					e.preventDefault();
				//}

		});
	});
</script>

