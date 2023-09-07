<div class="content-wrapper">
	<div class="container">
		<div class="col-8 offset-2" style="margin-top: -30px;">
			<h3 class="text-center text-bold"><u>SURVEY KINERJA PELAKSANAAN PROGRAM KETAHANAN PANGAN</u></h3>
			<a href="<?= base_url('SKP') ?>" class="btn btn-sm btn-danger">Kembali</a>
			<h5><strong><?= $this->session->flashdata('msg') ?></strong></h5>
			<?= form_open_multipart('TambahSKP/insert') ?>
			<div class="form-group">
				<label for="kecamatan">Kecamatan</label>
				<select name="kecamatan" id="kecamatan" class="form-control form-control-sm">
					<option value="">-Pilih-</option>
					<?php $i = 1; ?>
					<?php foreach ($dt_kec as $r) : ?>
						<option value="<?= $r->id_kec ?>"><?= $i++ . '. ' . $r->kecamatan ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="desa">Desa</label>
				<select name="desa" id="desa" class="form-control form-control-sm">
					<?php $i = 1; ?>
					<?php foreach ($dt_desa as $r) : ?>
						<option value="<?= $r->id_desa ?>" data-chained="<?= $r->kd_camat ?>"><?= $i++ . '. ' . $r->desa ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="jenis_kegiatan">Jenis Kegiatan</label>
				<select name="jenis_kegiatan" id="jenis_kegiatan" class="form-control form-control-sm">
					<option value="">-Pilih-</option>
					<option value="Pertanian">1. Pertanian</option>
					<option value="Peternakan">2. Peternakan</option>
					<option value="Perkebunan">3. Perkebunan</option>
					<option value="Perikanan">4. Perikanan</option>
					<option value="Kelautan">5. Kelautan</option>
				</select>
			</div>
			<div class="form-group">
				<label for="subkegiatan">Sub Kegiatan</label>
				<input type="text" class="form-control" name="subkegiatan" id="subkegiatan" placeholder="Sub Kegiatan">
			</div>
			<div class="form-group">
				<label for="tahun">Tahun</label>
				<select name="tahun" id="tahun" class="form-control form-control-sm">
					<option value="2022">2022</option>
					<option value="2023">2023</option>
				</select>
			</div>
			<hr>
			<div class="card">
				<div class="card-body">
					<strong>A. Perecanaan dan Penganggaran</strong>
					<label for="A1" class="mt-2"><b>1. Dokumen RPJMDes/Review RPJMDes memuat Kegiatan bidang Ketahanan Pangan.</b></label>
					<select name="A1" id="A1" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					<label for="A2" class="mt-2"><b>2. Dokumen RKPDes Tahun 2023 memuat kegitan ketahanan pangan secara rinci.</b></label>
					<select name="A2" id="A2" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					<!-- Foto -->
					<label for="A3" class="mt-2"><b>3. Terdapat surat Keputusan kepala desa tentang, daftar sasaran/pekerja pada kegiatan ketahahan pangan.</b></label>
					<select name="A3" id="A3" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_A3">
					<label for="A4" class="mt-2"><b>4. Terdapat Rencana Anggaran dan biaya pelaksanaan kegiatan.</b></label>
					<select name="A4" id="A4" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					<label for="A5" class="mt-2"><b>5. Terdapat lokasi pelaksanaan kegiatan.</b></label>
					<select name="A5" id="A5" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					<label for="A6" class="mt-2"><b>6. Terdapat Surat Keputusan/Daftar Tenaga Ahli/teknik/pendamping menduduk pelaksanaan kegiatan.</b></label>
					<select name="A6" id="A6" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
				</div>
			</div>
			<div class="card mt-3">
				<div class="card-body">
					<strong>B. PELAKSANAAN KEGIATAN</strong><br>
					<!-- Foto -->
					<label for="B1" class="mt-3"><b>1. Terdapat berita acara musyawarah.</b></label>
					<select name="B1" id="B1" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B1">
					<!-- Foto -->
					<label for="B2" class="mt-3"><b>2. Terdapat daftar Pengecekan/kontrol kegiatan PKTD oleh pelaksanaan Kegiatan/TPK.</b></label>
					<select name="B2" id="B2" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B2">
					<!-- Foto -->
					<label for="B3" class="mt-3"><b>3. Terdapat Laporan perkembangan pelaksanaan kegiatan oleh Pelaksanaan Kegiatan/TPK.</b></label>
					<select name="B3" id="B3" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B3">
					<!-- Foto -->
					<label for="B4" class="mt-3"><b>4. Terdapat Daftar Rincian Pembayaran Upah Harian oleh Bendahara/PK/TPK.</b></label>
					<select name="B4" id="B4" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B4">
					<!-- Foto -->
					<label for="B5" class="mt-3"><b>5. Terdapat Bukti berupa daftar/Photo Pelaksanaan Kegiatan</b></label>
					<select name="B5" id="B5" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B5">
					<!-- Foto -->
					<label for="B6" class="mt-3"><b>6. Terdapat Bukti atau rekomendasi tenaga ahli/pendamping terhadap perbaikan pelaksanaan kegiatan.</b></label>
					<select name="B6" id="B6" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B6">
					<!-- Foto -->
					<label for="B7" class="mt-3"><b>7. Terdapat berita acara musyawarah SETELAH pelaksanaan kegiatan.</b></label>
					<select name="B7" id="B7" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B7">
				</div>
			</div>
			<div class="card mt-3">
				<div class="card-body">
					<strong>C. EVALUASI HASIL</strong><br>
					<!-- Foto -->
					<label for="C1" class="mt-3"><b>1. Terdapat Berita Acara Penyerahan Hasil ke BUMDES sebagai tindak lanjut kegiatan.</b></label>
					<select name="C1" id="C1" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_C1">
					<label for="C2" class="mt-3"><b>2. Terdapat hasil berupa aset/Uang/barang lainnya sebagai hasil kegiatan ketahanan pangan.</b></label>
					<select name="C2" id="C2" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_C2">
					<!-- Foto -->
					<label for="C3" class="mt-3"><b>3. Terdapat Bukti tindak lanjut kegiatan tahun lalu sampai dengan sekarang masih berjalan.</b></label>
					<select name="C3" id="C3" class="form-control form-control-sm" required>
						<option value="ADA">ADA</option>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="LAINNYA">LAINNYA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_C3">
				</div>
			</div>
			<button type="submit" class="btn btn-primary mt-2 float-right">SIMPAN</button>
		</div>
	</div>
</div>