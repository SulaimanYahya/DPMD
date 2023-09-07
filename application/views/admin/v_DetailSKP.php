<div class="main-panel">
	<div class="content-wrapper">
		<div class="col-8 offset-2" style="margin-top: -30px;">
			<h3 class="text-center text-bold mt-3"><u>DETAIL SURVEY YANG SUDAH DI INPUT</u></h3>
			<h5><strong><?= $this->session->flashdata('msg') ?></strong></h5>
			<?php foreach ($dt_skp as $r) : ?>
				<div class="form-group">
					<label for="kecamatan">Kecamatan</label>
					<input type="text" class="form-control" value="<?= masterGetId('kecamatan', 'dt_kecamatan', 'id_kec', $r->kd_kec) ?>" disabled>
				</div>
				<div class="form-group">
					<label for="desa">Desa</label>
					<input type="text" class="form-control" value="<?= masterGetId('desa', 'dt_desa', 'id_desa', $r->kd_desa) ?>" disabled>
				</div>
				<div class="form-group">
					<label for="jenis_kegiatan">Jenis Kegiatan</label>
					<input type="text" class="form-control" value="<?= $r->jenis_kegiatan ?>" disabled>
				</div>
				<div class="form-group">
					<label for="subkegiatan">Sub Kegiatan</label>
					<input type="text" class="form-control" value="<?= $r->sub_kegiatan ?>" disabled>
				</div>
				<div class="form-group">
					<label for="tahun">Tahun</label>
					<select class="form-control form-control-sm">
						<option value=""><?= $r->tahun ?></option>
					</select>
				</div>
				<hr>
				<div class="card">
					<div class="card-body">
						<strong>A. Perecanaan dan Penganggaran</strong>
						<label for="A1" class="mt-2"><b>1. Dokumen RPJMDes/Review RPJMDes memuat Kegiatan bidang Ketahanan Pangan.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->A1 ?></option>
						</select>
						<label for="A2" class="mt-2"><b>2. Dokumen RKPDes Tahun 2023 memuat kegitan ketahanan pangan secara rinci.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->A2 ?></option>
						</select>
						<!-- Foto -->
						<label for="A3" class="mt-2"><b>3. Terdapat surat Keputusan kepala desa tentang, daftar sasaran/pekerja pada kegiatan ketahahan pangan.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->A3 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_A3) ?>" alt="" width="100px"><br>
						<label for="A4" class="mt-2"><b>4. Terdapat Rencana Anggaran dan biaya pelaksanaan kegiatan.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->A4 ?></option>
						</select>
						<label for="A5" class="mt-2"><b>5. Terdapat lokasi pelaksanaan kegiatan.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->A5 ?></option>
						</select>
						<label for="A6" class="mt-2"><b>6. Terdapat Surat Keputusan/Daftar Tenaga Ahli/teknik/pendamping menduduk pelaksanaan kegiatan.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->A6 ?></option>
						</select>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<strong>B. PELAKSANAAN KEGIATAN</strong><br>
						<!-- Foto -->
						<label for="B1" class="mt-3"><b>1. Terdapat berita acara musyawarah.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->B1 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_B1) ?>" alt="" width="100px"><br>
						<!-- Foto -->
						<label for="B2" class="mt-3"><b>2. Terdapat daftar Pengecekan/kontrol kegiatan PKTD oleh pelaksanaan Kegiatan/TPK.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->B2 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_B2) ?>" alt="" width="100px"><br>
						<!-- Foto -->
						<label for="B3" class="mt-3"><b>3. Terdapat Laporan perkembangan pelaksanaan kegiatan oleh Pelaksanaan Kegiatan/TPK.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->B3 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_B3) ?>" alt="" width="100px"><br>
						<!-- Foto -->
						<label for="B4" class="mt-3"><b>4. Terdapat Daftar Rincian Pembayaran Upah Harian oleh Bendahara/PK/TPK.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->B4 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_B4) ?>" alt="" width="100px"><br>
						<!-- Foto -->
						<label for="B5" class="mt-3"><b>5. Terdapat Bukti berupa daftar/Photo Pelaksanaan Kegiatan</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->B5 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_B5) ?>" alt="" width="100px"><br>
						<!-- Foto -->
						<label for="B6" class="mt-3"><b>6. Terdapat Bukti atau rekomendasi tenaga ahli/pendamping terhadap perbaikan pelaksanaan kegiatan.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->B6 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_B6) ?>" alt="" width="100px"><br>
						<!-- Foto -->
						<label for="B7" class="mt-3"><b>7. Terdapat berita acara musyawarah SETELAH pelaksanaan kegiatan.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->B7 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_B7) ?>" alt="" width="100px"><br>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<strong>C. EVALUASI HASIL</strong><br>
						<!-- Foto -->
						<label for="C1" class="mt-3"><b>1. Terdapat Berita Acara Penyerahan Hasil ke BUMDES sebagai tindak lanjut kegiatan.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->C1 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_C1) ?>" alt="" width="100px"><br>
						<label for="C2" class="mt-3"><b>2. Terdapat hasil berupa aset/Uang/barang lainnya sebagai hasil kegiatan ketahanan pangan.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->C2 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_C2) ?>" alt="" width="100px"><br>
						<!-- Foto -->
						<label for="C3" class="mt-3"><b>3. Terdapat Bukti tindak lanjut kegiatan tahun lalu sampai dengan sekarang masih berjalan.</b></label>
						<select class="form-control form-control-sm" disabled>
							<option value=""><?= $r->C3 ?></option>
						</select>
						Foto:
						<img src="<?= base_url('uploads/' . $r->foto_C3) ?>" alt="" width="100px"><br>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>