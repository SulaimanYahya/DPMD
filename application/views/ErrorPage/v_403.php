<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>403</title>

	<style>
		@import url("https://fonts.googleapis.com/css?family=Lato");

		* {
			position: relative;
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Lato", sans-serif;
		}

		body {
			height: 100vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			background: linear-gradient(to bottom right, #EEE, #AAA);
		}

		h1 {
			margin: 40px 0 20px;
		}

		.lock {
			border-radius: 5px;
			width: 55px;
			height: 45px;
			background-color: #333;
			animation: dip 1s;
			animation-delay: 1.5s;
		}

		.lock::before,
		.lock::after {
			content: "";
			position: absolute;
			border-left: 5px solid #333;
			height: 20px;
			width: 15px;
			left: calc(50% - 12.5px);
		}

		.lock::before {
			top: -30px;
			border: 5px solid #333;
			border-bottom-color: transparent;
			border-radius: 15px 15px 0 0;
			height: 30px;
			animation: lock 2s, spin 2s;
		}

		.lock::after {
			top: -10px;
			border-right: 5px solid transparent;
			animation: spin 2s;
		}

		@keyframes lock {
			0% {
				top: -45px;
			}

			65% {
				top: -45px;
			}

			100% {
				top: -30px;
			}
		}

		@keyframes spin {
			0% {
				transform: scaleX(-1);
				left: calc(50% - 30px);
			}

			65% {
				transform: scaleX(1);
				left: calc(50% - 12.5px);
			}
		}

		@keyframes dip {
			0% {
				transform: translateY(0px);
			}

			50% {
				transform: translateY(10px);
			}

			100% {
				transform: translateY(0px);
			}
		}

		/* Tombol dasar */
		.button {
			display: inline-block;
			padding: 10px 20px;
			font-size: 16px;
			border: 1px solid #ccc;
			border-radius: 4px;
			background-color: #007bff;
			color: #fff;
			cursor: pointer;
			text-align: center;
			text-decoration: none;
			transition: background-color 0.3s ease;
		}

		/* Saat mouse di atas tombol */
		.button:hover {
			background-color: #0056b3;
		}

		/* Tombol yang lebih besar */
		.button.large {
			padding: 14px 28px;
			font-size: 20px;
		}

		/* Tombol yang lebih kecil */
		.button.small {
			padding: 6px 12px;
			font-size: 14px;
		}

		/* Tombol warna sekunder */
		.button.secondary {
			background-color: #333333;
		}

		/* Tombol warna sukses */
		.button.success {
			background-color: #28a745;
		}

		/* Tombol warna bahaya */
		.button.danger {
			background-color: #dc3545;
		}
	</style>
</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="lock"></div>
	<div class="message">
		<h1>Halaman Tidak dapat Diakses</h1>
		<p>- Akses ke halaman ini telah ditutup sementara berdasarkan waktu yang sudah ditetapkan. Atas pengertianya kami ucapkan Terima kasih.</p>
	</div>
	<a href="<?= base_url('Admin') ?>" style="text-decoration:none; margin-top: 50px;" class="button small secondary">Kembali ke Dashboard</a>
	<!-- partial -->

</body>

</html>