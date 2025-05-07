<!-- Begin Page Content -->
<div class="container-fluid mt-5">
	<div class="row mt-5">
		<div class="col-xl-12 col-md-12 mb-6">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col-auto">
							<img src="<?= base_url('uploads/') . $barang['gambar']; ?>" style="width:400px"
								class="img-thumbnail">
						</div>
						<div class="col mr-2">
							<div class="card-body">
								<form action="" method="POST">
									<input type="hidden" name="id" value="<?= $barang['id']; ?>">
									<input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
									<input type="hidden" name="stok" value="<?= $barang['stok'] ?>">
									<div class="form-group">
										<label for="nama">Nama</label>
										<input name="nama" type="text" value="<?= $barang['nama']; ?>" readonly class="form-control" id="nama">
									</div>
									<div class="form-group">
										<label for="stok">Stok</label>
										<input name="stok" value="<?= $barang['stok']; ?>" type="text" readonly
											class="form-control" id="stok">
									</div>
									<div class="form-group">
										<label for="harga">Harga</label>
										<input name="harga" value="<?= $barang['harga']; ?>" type="text" readonly
											class="form-control" id="harga">
									</div>
									<div class="form-group">
										<label for="jenis">Jenis Pemesanan</label>
										<input name="jenis"  type="text"
											class="form-control" id="jenis">
									</div>
									<div class="form-group">
										<label for="jumlah">Jumlah</label>
										<input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
										<?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="keterangan">Keterangan</label>
										<input type="text" name="keterangan" id="keterangan" class="form-control" min='1'>
										<?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="total">Total Harga</label>
										<input type="text" name="total" id="total" readonly class="form-control" value="">
									</div>
									</div>									
									<button type="submit" id="tambah" name="tambah"
										class="btn btn-primary float-right">Tambah Ke Keranjang</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
