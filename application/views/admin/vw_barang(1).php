<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row">
		<div class="col-md-6"><a href="<?= base_url('Barang/tambah') ?>" class="btn btn-info mb-2">Tambah Sembako</a></div>
		<div class="col-md-12"> -->
	<?= $this->session->flashdata('message'); ?>
	<div class="clearfix">
		<div class="float-left">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
		</div>
		<div class="float-right">
			<a href="<?= base_url() ?>Barang/tambah" class="btn btn-info mb-2">Tambah Barang</a>
		</div>
	</div>
	<div class="card shadow mb-4">
		<div class="card-body">
		<div class="card-body">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacinf="0">
					<thead>
						<tr>
							<td>No</td>
							<td>Nama Barang</td>
							<td>Stok</td>
							<td>Harga</td>
							<td>Keterangan</td>
							<td>Gambar</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($barang as $us) : ?>
						<tr>
							<td> <?= $i; ?>.</td>
							<td><?= $us['nama']; ?></td>
							<td><?= $us['stok']; ?></td>
							<td><?= $us['harga']; ?></td>
							<td><?= $us['keterangan']; ?></td>
							<td><img src="<?= base_url('assets/img/menu/') . $us['gambar']; ?>" style="width: 100px;"
									class="img-thumbnail" alt=""></td>
							<td>
								<a href="<?= base_url('Barang/hapus/') . $us['id']; ?>"
									class="badge badge-danger">Hapus</a>
								<a href="<?= base_url('Barang/edit/') . $us['id']; ?>"
									class="badge badge-warning">Edit</a>
							</td>
						</tr>
						<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>

