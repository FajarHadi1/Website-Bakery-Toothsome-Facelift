<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Barang
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama">Nama Barang</label>
							<input name="nama" type="text" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama Barang	">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="stok">Stok</label>
							<input name="stok" type="text" value="<?= set_value('stok'); ?>" class="form-control" id="stok" placeholder="Stok">
							<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="harga">Harga</label>
							<input name="harga" type="text" value="<?= set_value('harga'); ?>" class="form-control" id="harga" placeholder="Harga">
							<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						<div class="form-group">
							<label for="keterangan">Keterangan</label>
							<input name="keterangan" type="text" value="<?= set_value('keterangan'); ?>" class="form-control" id="keterangan" placeholder="Keterangan">
							<?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="gambar">Gambar</label>
							<div class="custom-file">
								<input name="gambar" type="file" class="custom-file-input" id="gambar">
								<label for="gambar" class="custom-file-label">Choose File</label>
							</div>
						</div>

						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah barang</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
