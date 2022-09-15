<?php include('header.php'); ?>

<div class="container" style="margin-top:80px">

	<div class="row">

	<?php if (count($articles) > 0) :
	foreach ($articles as $key => $row) :  ?>

		<div class="col-md-4">
			<div class="card">
				<img src="<?= $row['image_path'] ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?= $row['article_title'] ?></h5>
					<p class="card-text"><?= $row['article_body'] ?></p>
					<a href="#" class="btn btn-light">Post Date : <?= date('d M Y H:i:s', strtotime($row['created_at'])) ?></a>
					<a href="#" class="btn btn-light">Post By : <?= $row['firstname'] ?>	<?= $row['lastname'] ?></a>
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
