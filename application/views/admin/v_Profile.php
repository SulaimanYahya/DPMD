<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

		<div class="row">
			<div class="col-lg-8">
				<?= $this->session->flashdata('msg'); ?>
			</div>
		</div>

		<div class="card mb-3 col-lg-6">
			<div class="row no-gutters">
				<div class="col-md-4">
					<!-- <img src="" class="card-img"> -->
					<?php $img = '';
					if (getUserData('image') == NULL || '') {
						$img = 'default.png';
					} else {
						$img = getUserData('image');
					} ?>
					<img src="<?= base_url("assets/admin/images/profile/$img") ?>" class="card-img w-75 m-3">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title"><?= $this->session->userdata('name') ?></h5>
						<p class="card-text"><?= (getUserData('email') == '') ? 'Email belum diisi' : getUserData('email') ?></p>
						<p class="card-text"><small class="text-muted">Akun Ini dibuat <?= date('d F Y', getUserData('date_created')); ?></small></p>
					</div>
					<a href="<?= base_url('Profile/Edit/' . enkrip(getUserData('id'))) ?>" class="btn btn-sm btn-primary mb-2 float-right text-right" style="float:right; margin-right:20px">Ubah</a>
				</div>
			</div>
		</div>

	</div>
