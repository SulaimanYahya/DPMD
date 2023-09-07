<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title><?= $title ?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/mdi/css/materialdesignicons.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/base/vendor.bundle.base.css" />
	<!-- endinject -->
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css" />
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/style.css" />
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/admin/images/favicon.png" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

	<script>
		tinymce.init({
			selector: "textarea#editor",
		});
	</script>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="navbar-brand-wrapper d-flex justify-content-center">
				<div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
					<a class="navbar-brand brand-logo" href="<?= base_url('Admin') ?>">
						<img style="width: 150px; height: 40px" src="<?= base_url() ?>assets/admin/images/logo-hitam.png" alt="logo" />
					</a>
					<a class="navbar-brand brand-logo-mini" href="<?= base_url('Admin') ?>"><img src="<?= base_url() ?>assets/admin/images/logo-mini.svg" alt="logo" /></a>
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
						<span class="mdi mdi-sort-variant"></span>
					</button>
				</div>
			</div>