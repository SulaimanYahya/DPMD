<div class="main-panel">
	<div class="content-wrapper">
		<div class="col-10 offset-1" style="margin-top: -30px;">
			<label class="alert alert-info">
				<h4>PENDAHULUAN</h4>
				<p>Program ketahanan pangan adalah program untuk meningkatkan ketersediaan oangan desa dengan memanfaatkan lahan kosong atau kahan tidur untuk meningkatkan produksi dan produktivitas petani yang berdanpal pada peningkatakan pendapatan masyarakat terutama dalam mememnuhi kebutuhan hidup.</p>

				<p>Peraturan bupati nomor 75 tentang pedoman Penyusunan APBDes Tahun 2022 yang dijadikan acuan teknis pelaksanaan APBDes yang berisi tentang program kegiatan serta belanja prioritas desa berdasarkan hasil musyawarah Desa.</p>

				<p>Monitoring yang dimaksud adalah untuk memastikan pelaksanaan kegiatan telah sesuai pedoman dan rencana kegiatan pembangungan Desa. Evaluasi dimaksud adalah untuk mengetahui sejauh mana kegiatan pangan telah berdampak pada peningkatan taraf hidup masyarakat terutama masyarakat petani dan nelayan miskin
					Pedoman ini berisi tetang pertanyaan yang diisi oleh pemerintah desa atau tim pelaksana kegiatan yang hasilnya dijaikan bahan atau dasar penyusunan kebijakan teknis pelaksanaan program digahun 2024.</p>
			</label>
			<h5><strong><?= $this->session->flashdata('msg') ?></strong></h5>
			<form action="<?= base_url('Biodata/insert') ?>" method="POST">
				<div class="card">
					<div class="card-body">
						<div class="row float-right">
							<div class="col-6">
								<div class="form-group">
									<label for="kd_kec">Kecamatan</label>
									<input type="text" value="<?= masterGetId('kecamatan', 'dt_kecamatan', 'id_kec', $kd_kec) ?>" class="form-control" name="kd_kec" id="kd_kec" readonly>
								</div>
								<div class="form-group">
									<label for="nama">Nama Lengkap</label>
									<input type="text" class="form-control" name="nama" id="nama" value="<?= $biodata['nama'] ?>">
								</div>
								<div class="form-group">
									<label for="jabatan">Jabatan</label>
									<input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $biodata['jabatan'] ?>">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label for="kd_desa">Desa</label>
									<input type="text" value="<?= masterGetId('desa', 'dt_desa', 'id_desa', $kd_desa) ?>" class="form-control" name="kd_desa" id="kd_desa" readonly>
								</div>
								<div class="form-group">
									<label for="Jenkel">Jenkel</label>
									<select class="form-control form-control-sm" style="padding-bottom: 12px;" name="jenkel" id="jenkel">
										<?php if ($biodata['jenkel'] == 'Laki-laki') {
											echo "
											<option value=''>-Pilih-</option>
											<option value='Laki-laki' selected>Laki - laki</option>
											<option value='Perempuan'>Perempuan</option>
											";
										} elseif ($biodata['jenkel'] == 'Perempuan') {
											echo "
											<option value=''>-Pilih-</option>
											<option value='Laki-laki'>Laki - laki</option>
											<option value='Perempuan' selected>Perempuan</option>
											";
										} else {
											echo "
											<option value='' selected>-Pilih-</option>
											<option value='Laki-laki'>Laki - laki</option>
											<option value='Perempuan'>Perempuan</option>
											";
										} ?>
									</select>
								</div>
								<div class="form-group">
									<label for="nohp">Nomor Handphone</label>
									<input type="text" class="form-control" name="nohp" id="nohp" value="<?= $biodata['nohp'] ?>">
								</div>
							</div>
							<button type="submit" class="btn btn-primary text-light">Simpan</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
