<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from www.bootstrapdash.com/demo/world-time/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2023 08:08:12 GMT -->

<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>PORSI-DPMD | Portal Informasi dan Aplikasi Dinas Pemberdayaan Masyarakat dan Desa</title>
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="<?= base_url('') ?>assets/public/vendors/mdi/css/materialdesignicons.min.css" />
	<link rel="stylesheet" href="<?= base_url('') ?>assets/public/vendors/aos/dist/aos.css/aos.css" />
	<link rel="stylesheet" href="<?= base_url('') ?>assets/public/vendors/fontawesome-free-6.4.0-web/css/all.css">
	<!-- End plugin css for this page -->
	<link rel="shortcut icon" href="<?= base_url('') ?>assets/public/images/favicon.png" />

	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('') ?>assets/public/css/style.css" />
	<!-- endinject -->
</head>

<body>
	<div class="container-scroller">
		<div class="main-panel">
			<!-- partial:partials/_navbar.html -->
			<header id="header">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="navbar-top">
							<div class="d-flex justify-content-between align-items-center">
								<ul class="navbar-top-left-menu">
									<li class="nav-item">
										<a href="pages/index-inner.html" class="nav-link">
											Galeri
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link"> Profil </a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link"> Masukkan/Tanggapan </a>
									</li>
									<li class="nav-item">
										<a href="pages/aboutus.html" class="nav-link">
											Tentang Kami
										</a>
									</li>
								</ul>
								<ul class="navbar-top-right-menu">
									<li class="nav-item">
										<span class="text-white"><?= hari_ini(); ?>, <span id="time" class="font-weight-bold mt-auto mb-auto"></span></span>
									</li>
									<li class="nav-item">
										<a href="<?= base_url('Auth') ?>" class="nav-link">LOGIN <i class="fa-solid fa-right-to-bracket"></i></a>
									</li>
									<li class="nav-item">
										<!-- <a href="#" class="nav-link">Sign in</a> -->
									</li>
								</ul>
							</div>
						</div>
						<div class="navbar-bottom">
							<div class="d-flex justify-content-between align-items-center">
								<div>
									<a class="navbar-brand" href="#">
										<img src="<?= base_url() ?>assets/public/images/logo.png" style="margin-top: -15px" alt="" />
										<!-- <img
                        src="assets/images/HPMU.png"
                        style="width: 165px; margin-top: -20px"
                        alt=""
                      /> -->
									</a>
								</div>
								<div>
									<button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
									<div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
										<ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
											<li>
												<button class="navbar-close">
													<i class="mdi mdi-close"></i>
												</button>
											</li>
											<li class="nav-item active">
												<a class="nav-link" href="index.html"><i class="fa-solid fa-house"></i> Home</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="pages/magazine.html">
													<i class="fa-solid fa-lightbulb"></i> KWU
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="pages/business.html">
													<i class="fa-solid fa-people-group"></i> SDM
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="pages/sports.html">
													<i class="fa-solid fa-oil-well"></i> Infra
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="pages/art.html">
													<i class="fa-solid fa-newspaper"></i> News
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="pages/politics.html">
													<i class="fa-solid fa-file-pdf"></i> Doc
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="<?= base_url('SKP') ?>">
													<i class="fa-solid fa-square-poll-vertical"></i> Survey
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- <ul class="social-media">
                    <a class="navbar-brand" href="#">
                      <img
                        src="assets/images/HPMU.png"
                        style="width: 90%; margin-top: -20px"
                        alt=""
                      />
                    </a>
                  </ul> -->
							</div>
						</div>
					</nav>
				</div>
			</header>

			<!-- partial
        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <span class="badge badge-dark mr-3">Flash news</span>
                <p class="mb-0">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s.
                </p>
              </div>
              <div class="d-flex">
                <span class="mr-3 text-danger">Wed, March 4, 2020</span>
                <span class="text-danger">30°C,London</span>
              </div>
            </div>
          </div>
        </div> -->