<div class="container-fluid mt-5 pt-5">
<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row">
		<div class="col-md-12">
			<?= $this->session->flashdata('message');?>
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>No Pembelian</td>
						<td>Tanggal</td>
						<td>Total</td>
						<td>Status</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($pembelian as $us) : ?>
					<tr>
						<td> <?= $i; ?>.</td>
						<td><?= $us['no_penjualan']; ?></td>
						<td><?= $us['tanggal']; ?></td>
						<td><?= $us['total_bayar']; ?></td>
						<td><?= $us['status']; ?></td>
						<td>
							<a class="btn-book-a-table" href="<?= base_url('Home/statusbeli/') . $us['no_penjualan']; ?>" class="badge badge-danger">Detail</a>
						</td>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
				
