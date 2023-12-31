<div class="main-panel">
	<div class="content-wrapper text-black">
		<div class="col-8 offset-2" style="margin-top: -30px;">
			<h4 class="text-center text-bold mt-4"><u>SURVEY KINERJA PELAKSANAAN (SKP) <br>PROGRAM KETAHANAN PANGAN</u></h4>
			<br>
			<h5><strong><?= $this->session->flashdata('msg') ?></strong></h5>
			<?= form_open_multipart('SKP/TambahSKP/insert') ?>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="kd_kec">Kecamatan</label>
						<input type="text" value="<?= masterGetId('kecamatan', 'dt_kecamatan', 'id_kec', $kd_kec) ?>" class="form-control" readonly>
						<input type="hidden" value="<?= $kd_kec ?>" class="form-control" name="kd_kec" id="kd_kec" readonly>
					</div>
					<div class="form-group">
						<label for="jenis_kegiatan">Jenis Kegiatan</label>
						<select style="padding-bottom: 12px;" name="jenis_kegiatan" id="jenis_kegiatan" class="form-control form-control-sm">
							<option value="">-Pilih-</option>
							<option value="Pertanian">1. Pertanian</option>
							<option value="Peternakan">2. Peternakan</option>
							<option value="Perkebunan">3. Perkebunan</option>
							<option value="Perikanan">4. Perikanan</option>
							<option value="Kelautan">5. Kelautan</option>
						</select>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="kd_desa">Desa</label>
						<input type="text" value="<?= masterGetId('desa', 'dt_desa', 'id_desa', $kd_desa) ?>" class="form-control" readonly>
						<input type="hidden" value="<?= $kd_desa ?>" class="form-control" name="kd_desa" id="kd_desa" readonly>
					</div>
					<div class="form-group">
						<label for="subkegiatan">Sub Kegiatan</label>
						<input type="text" class="form-control" name="subkegiatan" id="subkegiatan" placeholder="Sub Kegiatan">
					</div>
				</div>
				<div class="form-group">
					<label for="tahun">Tahun</label>
					<select name="tahun" id="tahun" class="form-control form-control-sm">
						<option value="2022">2022</option>
						<option value="2023">2023</option>
					</select>
				</div>
			</div>
			<hr>
			<div class="card">
				<div class="card-body">
					<strong>A. Perecanaan dan Penganggaran</strong>
					<label for="A1" class="mt-2"><b>1. Dokumen RPJMDes/Review RPJMDes memuat Kegiatan bidang Ketahanan Pangan.</b></label>
					<select name="A1" id="A1" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_A1" id="foto_A1">
					<label for="A2" class="mt-2"><b>2. Dokumen RKPDes Tahun 2023 memuat kegitan ketahanan pangan secara rinci.</b></label>
					<select name="A2" id="A2" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_A2" id="foto_A2">
					<!-- Foto -->
					<label for="A3" class="mt-2"><b>3. Terdapat surat Keputusan kepala desa tentang, daftar sasaran/pekerja pada kegiatan ketahahan pangan.</b></label>
					<select name="A3" id="A3" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_A3" id="foto_A3">
					<label for="A4" class="mt-2"><b>4. Terdapat Rencana Anggaran dan biaya pelaksanaan kegiatan.</b></label>
					<select name="A4" id="A4" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_A4" id="foto_A4">
					<label for="A5" class="mt-2"><b>5. Terdapat lokasi pelaksanaan kegiatan.</b></label>
					<select name="A5" id="A5" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_A5" id="foto_A5">
					<label for="A6" class="mt-2"><b>6. Terdapat Surat Keputusan/Daftar Tenaga Ahli/teknik/pendamping menduduk pelaksanaan kegiatan.</b></label>
					<select name="A6" id="A6" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_A6" id="foto_A6">
				</div>
			</div>
			<div class="card mt-3">
				<div class="card-body">
					<strong>B. PELAKSANAAN KEGIATAN</strong><br>
					<!-- Foto -->
					<label for="B1" class="mt-3"><b>1. Terdapat berita acara musyawarah.</b></label>
					<select name="B1" id="B1" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B1" id="foto_B1">
					<!-- Foto -->
					<label for="B2" class="mt-3"><b>2. Terdapat daftar Pengecekan/kontrol kegiatan PKTD oleh pelaksanaan Kegiatan/TPK.</b></label>
					<select name="B2" id="B2" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B2" id="foto_B2">
					<!-- Foto -->
					<label for="B3" class="mt-3"><b>3. Terdapat Laporan perkembangan pelaksanaan kegiatan oleh Pelaksanaan Kegiatan/TPK.</b></label>
					<select name="B3" id="B3" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B3" id="foto_B3">
					<!-- Foto -->
					<label for="B4" class="mt-3"><b>4. Terdapat Daftar Rincian Pembayaran Upah Harian oleh Bendahara/PK/TPK.</b></label>
					<select name="B4" id="B4" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B4" id="foto_B4">
					<!-- Foto -->
					<label for="B5" class="mt-3"><b>5. Terdapat Bukti berupa daftar/Photo Pelaksanaan Kegiatan</b></label>
					<select name="B5" id="B5" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B5" id="foto_B5">
					<!-- Foto -->
					<label for="B6" class="mt-3"><b>6. Terdapat Bukti atau rekomendasi tenaga ahli/pendamping terhadap perbaikan pelaksanaan kegiatan.</b></label>
					<select name="B6" id="B6" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_B6" id="foto_B6">
					<!-- Foto -->
					<label for="B7" class="mt-3"><b>7. Terdapat berita acara musyawarah SETELAH pelaksanaan kegiatan.</b></label>
					<select name="B7" id="B7" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" style="color:black" name="foto_B7" id="foto_B7">
				</div>
			</div>
			<div class="card mt-3">
				<div class="card-body">
					<strong>C. EVALUASI HASIL</strong><br>
					<!-- Foto -->
					<label for="C1" class="mt-3"><b>1. Terdapat Berita Acara Penyerahan Hasil ke BUMDES sebagai tindak lanjut kegiatan.</b></label>
					<select name="C1" id="C1" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_C1" id="foto_C1">
					<label for="C2" class="mt-3"><b>2. Terdapat hasil berupa aset/Uang/barang lainnya sebagai hasil kegiatan ketahanan pangan.</b></label>
					<select name="C2" id="C2" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_C2" id="foto_C2">
					<!-- Foto -->
					<label for="C3" class="mt-3"><b>3. Terdapat Bukti tindak lanjut kegiatan tahun lalu sampai dengan sekarang masih berjalan.</b></label>
					<select name="C3" id="C3" class="form-control form-control-sm" style="color:black" required>
						<option value="TIDAK ADA">TIDAK ADA</option>
						<option value="ADA">ADA</option>
					</select>
					Foto:
					<input type="file" class="form-control form-control-sm w-25" name="foto_C3" id="foto_C2">
				</div>
			</div>
			<button type="submit" class="btn btn-primary mt-2 float-right">SIMPAN</button>
		</div>
	</div>