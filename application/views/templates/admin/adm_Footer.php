<!-- partial:partials/_footer.html -->
<footer class="footer">
	<div class="d-sm-flex justify-content-center justify-content-sm-between">
		<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
			<a href="<?= base_url('Admin') ?>" target="_blank">Dinas Pemberdayaan Masyrakat dan Desa </a> || 2023</span>
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

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> -->

<script type="text/javascript">
	setTimeout(function() {

		// Closing the alert
		$('#alert').alert('close');
	}, 3000);


	// Tanggal target (ganti dengan tanggal yang Anda inginkan)
	const tanggalTarget = new Date("2023-09-17T00:00:00");

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

<script>
	// Ambil elemen select dan input foto_A5
	var a1 = document.getElementById("A1");
	var a2 = document.getElementById("A2");
	var a3 = document.getElementById("A3");
	var a4 = document.getElementById("A4");
	var a5 = document.getElementById("A5");
	var a6 = document.getElementById("A6");
	var b1 = document.getElementById("B1");
	var b2 = document.getElementById("B2");
	var b3 = document.getElementById("B3");
	var b4 = document.getElementById("B4");
	var b5 = document.getElementById("B5");
	var b6 = document.getElementById("B6");
	var b7 = document.getElementById("B7");
	var c1 = document.getElementById("C1");
	var c2 = document.getElementById("C2");
	var c3 = document.getElementById("C3");
	var foto_A1 = document.getElementById("foto_A1");
	var foto_A2 = document.getElementById("foto_A2");
	var foto_A3 = document.getElementById("foto_A3");
	var foto_A4 = document.getElementById("foto_A4");
	var foto_A5 = document.getElementById("foto_A5");
	var foto_A6 = document.getElementById("foto_A6");
	var foto_B1 = document.getElementById("foto_B1");
	var foto_B2 = document.getElementById("foto_B2");
	var foto_B3 = document.getElementById("foto_B3");
	var foto_B4 = document.getElementById("foto_B4");
	var foto_B5 = document.getElementById("foto_B5");
	var foto_B6 = document.getElementById("foto_B6");
	var foto_B7 = document.getElementById("foto_B7");
	var foto_C7 = document.getElementById("foto_C7");
	var foto_C7 = document.getElementById("foto_C7");
	var foto_C7 = document.getElementById("foto_C7");

	// Tambahkan event listener untuk mengubah atribut 'required' berdasarkan pilihan
	a1.addEventListener("change", function() {
		if (a1.value === "ADA") {
			foto_A1.setAttribute("required", "required");
		} else {
			foto_A1.removeAttribute("required");
		}
	});
	a2.addEventListener("change", function() {
		if (a2.value === "ADA") {
			foto_A2.setAttribute("required", "required");
		} else {
			foto_A2.removeAttribute("required");
		}
	});
	a3.addEventListener("change", function() {
		if (a3.value === "ADA") {
			foto_A3.setAttribute("required", "required");
		} else {
			foto_A3.removeAttribute("required");
		}
	});
	a4.addEventListener("change", function() {
		if (a4.value === "ADA") {
			foto_A4.setAttribute("required", "required");
		} else {
			foto_A4.removeAttribute("required");
		}
	});
	a5.addEventListener("change", function() {
		if (a5.value === "ADA") {
			foto_A5.setAttribute("required", "required");
		} else {
			foto_A5.removeAttribute("required");
		}
	});
	a6.addEventListener("change", function() {
		if (a6.value === "ADA") {
			foto_A6.setAttribute("required", "required");
		} else {
			foto_A6.removeAttribute("required");
		}
	});
	b1.addEventListener("change", function() {
		if (b1.value === "ADA") {
			foto_B1.setAttribute("required", "required");
		} else {
			foto_B1.removeAttribute("required");
		}
	});
	b2.addEventListener("change", function() {
		if (b2.value === "ADA") {
			foto_B2.setAttribute("required", "required");
		} else {
			foto_B2.removeAttribute("required");
		}
	});
	b3.addEventListener("change", function() {
		if (b3.value === "ADA") {
			foto_B3.setAttribute("required", "required");
		} else {
			foto_B3.removeAttribute("required");
		}
	});
	b4.addEventListener("change", function() {
		if (b4.value === "ADA") {
			foto_B4.setAttribute("required", "required");
		} else {
			foto_B4.removeAttribute("required");
		}
	});
	b5.addEventListener("change", function() {
		if (b5.value === "ADA") {
			foto_B5.setAttribute("required", "required");
		} else {
			foto_B5.removeAttribute("required");
		}
	});
	b6.addEventListener("change", function() {
		if (b6.value === "ADA") {
			foto_B6.setAttribute("required", "required");
		} else {
			foto_B6.removeAttribute("required");
		}
	});
	b7.addEventListener("change", function() {
		if (b7.value === "ADA") {
			foto_B7.setAttribute("required", "required");
		} else {
			foto_B7.removeAttribute("required");
		}
	});
	c1.addEventListener("change", function() {
		if (c1.value === "ADA") {
			foto_C1.setAttribute("required", "required");
		} else {
			foto_C1.removeAttribute("required");
		}
	});
	c2.addEventListener("change", function() {
		if (c2.value === "ADA") {
			foto_C2.setAttribute("required", "required");
		} else {
			foto_C2.removeAttribute("required");
		}
	});
	c3.addEventListener("change", function() {
		if (c3.value === "ADA") {
			foto_C3.setAttribute("required", "required");
		} else {
			foto_C3.removeAttribute("required");
		}
	});
</script>
</body>

</html>