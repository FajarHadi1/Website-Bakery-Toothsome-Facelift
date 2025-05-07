<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Barang
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $barang['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama Barang</label>
							<input name="nama" value="<?= $barang['nama']; ?>" type="text" class="form-control" id="nama" placeholder="Nama Barang">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="stok">Stok</label>
							<input name="stok" value="<?= $barang['stok']; ?>" type="text" class="form-control" id="stok" placeholder="Stok">
							<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="harga">Harga</label>
							<input value="<?= $barang['harga']; ?>" name="harga" type="text" class="form-control" id="harga" placeholder="Harga">
							<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="keterangan">Keterangan</label>
							<input value="<?= $barang['keterangan']; ?>" name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Keterangan">
							<?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						
						<div class="form-group">
							<img src="<?= base_url('assets/img/menu/') . $barang['gambar'];?>" style="width: 100px" class="img-thumbnail" alt="<?= $barang['nama']; ?>">
							<div class="custom-file">
								<input name="gambar" type="file" value="<?= set_value('gambar'); ?>" class="custom-file-input" id="gambar">
								<label for="gambar" class="custom-file-label">Choose File</label>
								<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
						<a href="<?= base_url('Barang') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah barang</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
