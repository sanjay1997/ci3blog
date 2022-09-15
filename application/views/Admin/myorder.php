<?php include('header.php'); ?>

<div class="container" style="margin-top:80px">

	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Product Name</th>
				<th scope="col">Product Image</th>
				<th scope="col">Quantity</th>
				<th scope="col">Paid Amount</th>
				<th scope="col">Transaction Id</th>
				<th scope="col">Status</th>
				<th scope="col">Order Date</th>
			</tr>
		</thead>
		<tbody>

			<?php if (count($order) > 0) :
				foreach ($order as $key => $row) :
			?>
					<tr>
						<th scope="row"><?= $key + 1 ?></th>
						<td><?= $row['name'] ?></td>
						<td><img src="http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png" class="card-img-top" width="50" height="60"></td>
						<td><?= $row['qty'] ?></td>
						<td><?= $row['paid_amount'] ?></td>
						<td><?= $row['txn_id'] ?></td>
						<td><?= $row['payment_status'] ?></td>
						<td><?= $row['created'] ?></td>
					</tr>
				<?php
				endforeach;
			else :
				?>
				<tr>
					<td colspan="4">No Order Found</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>

</div>

<?php include('footer.php'); ?>
