<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $title ?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/admin/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="row w-100 m-0">
				<div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
					<div class="card col-lg-4 mx-auto">
						<div class="card-body px-5 py-5">
							<h3 class="text-center mb-3">HALAMAN LOGIN</h3>
							<?= $this->session->flashdata('message'); ?>
							<form method="POST" action="<?= base_url('Auth'); ?>">
								<div class="form-group">
									<label>Username *</label>
									<input type="text" name="name" class="form-control p_input text-primary" value="<?= set_value('name'); ?>">
									<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label>Password *</label>
									<input type="password" name="pass" class="form-control p_input text-primary">
									<?= form_error('pass', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-lg btn-primary btn-block enter-btn">
										M A S U K
									</button>
								</div>
								<p class="sign-up">
									<a href="<?= base_url() ?>" class="text-decoration-none badge badge-danger text-white"> <i class="mdi mdi-arrow-left-bold-circle-outline"></i> Kembali</a>
								</p>
							</form>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- row ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?= base_url() ?>assets/admin/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url() ?>assets/admin/js/off-canvas.js"></script>
	<script src="<?= base_url() ?>assets/admin/js/hoverable-collapse.js"></script>
	<script src="<?= base_url() ?>assets/admin/js/misc.js"></script>
	<script src="<?= base_url() ?>assets/admin/js/settings.js"></script>
	<script src="<?= base_url() ?>assets/admin/js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>
