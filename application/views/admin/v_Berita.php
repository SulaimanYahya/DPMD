<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-12 grid-margin">
				<div class="d-flex justify-content-between flex-wrap">
					<div class="d-flex align-items-end flex-wrap">
						<div class="me-md-3 me-xl-5">
							<h2>Halaman Berita<span class="text-primary"></h2>
						</div>
					</div>
					<div class="d-flex justify-content-between align-items-end flex-wrap">
						<button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0" data-bs-toggle="modal" data-bs-target="#TambahBerita">
							<i class="mdi mdi-plus text-muted"></i>
						</button>
						<button class="btn btn-primary mt-2 mt-xl-0">
							Generate report
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 stretch-card">
				<div class="card">
					<div class="card-body">
						<p class="card-title">Daftar Berita</p>
						<table id="recent-purchases-listing" class="table table-responsive table-sm">
							<thead>
								<tr>
									<th style="width: 10px;">No</th>
									<th>Judul</th>
									<th>Tanggal Input</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($berita as $r) : ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $r->judul ?></td>
										<td><?= $r->tanggal_input ?></td>
										<td>
											<a href="<?= base_url('Berita/Form_Edit/' . enkrip($r->id_berita)) ?>" class="btn btn-success btn-sm">
												<span class="text-white text-bold">Edit</span>
											</a>
											<a href="<?= base_url('Berita/Delete/' . enkrip($r->id_berita)) ?>" class="btn btn-danger btn-sm">
												<span class="text-white text-bold">Hapus</span>
											</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->

	<!-- Modal -->
	<div class="modal modal-fade" id="TambahBerita" tabindex="-1" aria-labelledby="TambahBeritaLabel" aria-hidden="true">
		<div class="modal-dialog  modal-lg">
			<?= form_open_multipart('Berita/insert'); ?>
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="TambahBeritaLabel">FORM BERITA</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Judul</label>
						<input type="text" class="form-control form-control-sm" id="judul" name="judul">
					</div>
					<div class="mb-3">
						<label for="sumber" class="form-label">Sumber</label>
						<input type="text" class="form-control form-control-sm" id="sumber" name="sumber">
					</div>
					<div class="mb-3">
						<label for="kategori" class="form-label">Kategori</label>
						<select name="kategori" id="kategori" class="form-control form-control-sm">
							<option value="Populer">Populer</option>
							<option value="Umum">Umum</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="foto" class="form-label">foto</label>
						<input type="file" class="form-control form-control-sm" id="foto" name="foto">
					</div>
					<div class="mb-3">
						<label for="foto" class="form-label">Isi Berita</label>
						<textarea type='file' nama='isi_text' id="editor"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Simpan</button>
				</div>
			</div>
			<?= form_close(); ?>
		</div>
	</div>