<div class="content-wrapper">
	<div class="container">
		<div class="col-10 offset-1" style="margin-top: -30px;">
			<h3 class="text-center text-bold"><u>SURVEY KINERJA PELAKSANAAN PROGRAM KETAHANAN PANGAN</u></h3>
			<a href="<?= base_url('TambahSKP') ?>" class="btn btn-sm btn-primary">Tambah Data</a>
			<h5><strong><?= $this->session->flashdata('msg') ?></strong></h5>
			<table class="table table-sm table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Kecamatan</th>
						<th>Desa</th>
						<th>Jenis Kegiatan</th>
						<th>Sub Kegiatan</th>
						<th>Tahun</th>
						<th>Detail</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($dt_skp as $r) : ?>
						<tr>
							<td><?= $i++ ?></td>
							<td><?= $r->kecamatan ?></td>
							<td><?= $r->desa ?></td>
							<td><?= $r->jenis_kegiatan ?></td>
							<td><?= $r->sub_kegiatan ?></td>
							<td><?= $r->tahun ?></td>
							<td><a href="<?= base_url('SKP/detail/') . "$r->id" ?>"><i class="fa-solid fa-eye"></i></a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>