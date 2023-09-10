<!-- partial:partials/_footer.html -->
<footer class="footer">
	<div class="d-sm-flex justify-content-center justify-content-sm-between">
		<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
			<a href="<?= base_url() ?>" target="_blank">Dinas Pemberdayaan Masyrakat dan Desa </a> || 2023</span>
		<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Contact Admin
			<a href="https://wa.me/+6281343931767" target="_blank"> <span class="mdi mdi-whatsapp"></span> WhatsApp</a>
		</span>
	</div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?= base_url() ?>assets/admin/vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="<?= base_url() ?>assets/admin/vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?= base_url() ?>assets/admin/js/off-canvas.js"></script>
<script src="<?= base_url() ?>assets/admin/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>assets/admin/js/template.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>assets/admin/js/dashboard.js"></script>
<script src="<?= base_url() ?>assets/admin/js/data-table.js"></script>
<script src="<?= base_url() ?>assets/admin/js/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/admin/js/dataTables.bootstrap4.js"></script>
<!-- End custom js for this page-->

<script src="<?= base_url() ?>assets/admin/js/jquery.cookie.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
	setTimeout(function() {

		// Closing the alert
		$('#alert').alert('close');
	}, 3000);


	// Tanggal target (ganti dengan tanggal yang Anda inginkan)
	const tanggalTarget = new Date("2023-09-21T00:00:00");

	// Fungsi untuk memperbarui timer setiap detik
	function perbaruiTimer() {
		const sekarang = new Date();
		const selisih = tanggalTarget - sekarang;

		if (selisih <= 0) {
			// Jika waktu habis, tampilkan pesan dan nonaktifkan konten
			// document.getElementById('timer').innerHTML = "Waktu habis! Halaman tidak dapat diakses.";
			// document.body.style.pointerEvents = "none"; // Menonaktifkan interaksi dengan halaman
			// var currentUrl = window.location.href;
			// console.log(currentUrl);
			if (window.location.href == "<?= base_url('SKP/TambahSKP') ?>") {
				window.location.href = "ErrorPage/403";
			}

		} else {
			const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
			const jam = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			const menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
			const detik = Math.floor((selisih % (1000 * 60)) / 1000);

			document.getElementById('timer').innerHTML = `<b class='bg-dark text-warning'>${hari} hari ${jam} jam ${menit} menit ${detik} detik</b><br><span style='font-size: 13px;' class='text-danger'>Segera melakukan penginputan survey, sebelum waktu berakhir..!!</span>`;
		}
	}

	// Memanggil fungsi perbaruiTimer setiap detik
	const interval = setInterval(perbaruiTimer, 1000);

	// Hentikan pembaruan timer jika waktu telah habis
	function hentikanTimer() {
		clearInterval(interval);
	}
</script>
</body>

</html>
