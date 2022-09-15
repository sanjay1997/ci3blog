<?php include('header.php'); ?>

<div class="container" style="margin-top:80px">

	<?php if ($error = $this->session->flashdata('success_message')) { ?>
		<div id="FlashMessage" class="alert alert-success text-center" role="alert">
			<?= $error ?>
		</div>
	<?php } ?>

	<!-- $this->db->last_query(); -->

	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col"></th>
				<th scope="col"></th>
				<th scope="col"><?= anchor('admin/addarticle/', 'Add Article', 'class="btn btn-primary btn-sm"') ?></th>
			</tr>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Article Title</th>
				<th scope="col">Edit</th>
				<th scope="col">Delete</th>
			</tr>
		</thead>
		<tbody>

			<?php if (count($articles) > 0) :
				$count = $this->uri->segment(3);
				foreach ($articles as $key => $row) :  
			?>
					<tr>
						<th scope="row"><?= ++$count ?></th>
						<td><?= $row['article_title'] ?></td>
						<td><a href="<?= base_url('/admin/editarticle/'.$row['id']) ?>" class="btn btn-success btn-sm">Edit</a></td>
						<td>
							<?=
							form_open('admin/delarticle'),
							form_hidden('id', $row['id']),
							form_submit(['name' => 'submit', 'value' => 'Delete', 'class' => 'btn btn-danger btn-sm']),
							form_close();
							?>
						</td>
					</tr>
				<?php
				endforeach;
			else :
				?>
				<tr>
					<td colspan="4">No Data Available</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>

	<?= $this->pagination->create_links(); ?>


</div>

<?php include('footer.php'); ?>
