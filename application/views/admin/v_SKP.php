<div class="main-panel">
	<div class="content-wrapper">
		<div class="col-10 offset-1" style="margin-top: -10px;">
			<div class="col-2 offset-10">
				<a href="<?= base_url('SKP/Export') ?>" target="_blank" class="btn btn-sm btn-success text-decoration-none text-light"> <span class="mdi mdi-file-excel"></span>Export</a>
			</div>
			<h5><strong><?= $this->session->flashdata('msg') ?></strong></h5>
			<div class="card">
				<div class="card-body">
					<div class="card-title text-center"><?= $title ?></div>
					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Kecamatan</th>
								<th>Desa</th>
								<th>Jenis Kegiatan</th>
								<th>Sub Kegiatan</th>
								<th>Tahun</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($dt_skp as $r) : ?>
								<tr>
									<td><?= $i++ ?></td>
									<td><?= masterGetId('kecamatan', 'dt_kecamatan', 'id_kec', $r->kd_kec) ?></td>
									<td><?= masterGetId('desa', 'dt_desa', 'id_desa', $r->kd_desa) ?></td>
									<td><?= $r->jenis_kegiatan ?></td>
									<td><?= $r->sub_kegiatan ?></td>
									<td><?= $r->tahun ?></td>
									<td>
										<a href="<?= base_url('SKP/detail/') . enkrip($r->id) ?>" data-toggle="tooltip" title="Detail" class="text-decoration-none">
											<span class="mdi mdi-eye-circle" style="font-size: 20px;"></span>
										</a>
										<a href="<?= base_url('SKP/delete/') . enkrip($r->id) ?>" data-toggle="tooltip" title="Hapus" class="text-danger text-decoration-none">
											<span class="mdi mdi-delete" style="font-size: 20px;"></span>
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