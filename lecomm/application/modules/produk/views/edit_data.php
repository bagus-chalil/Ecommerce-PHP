<span style="color: #ff0000;">
	<html>
</span>

<body><br><br>
	<h1>Halaman Edit Produk Ecommerce</h1>
	<!-- Form -->
	<div class="card mb-3">
					<div class="card-header">
            <h5>Form Edit Produk Ecommerce</h5>
					</div>
					<div class="card-body">
					<form action="<?= base_url('produk/edit_produk') ?>" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="Nama">Nama Produk*</label>
                <input type="hidden" name="produk_id" value="<?= $data_edit->produk_id ?>">  
                <input type="text" class="form-control" name="nama" value="<?= $data_edit->nama ?>">
                <?= form_error('nama_produk');?>
              </div> 
              <div class="form-group">
                <label for="Nama">Produk Code*</label>
                <input type="text" class="form-control" name="produk_code" value="<?= $data_edit->produk_code ?>">
              </div> 
              <div class="form-group">
              <label for="keberangkatan">Masukkan Kategori Barang</label>
              <select name="catid" id="" class="form-control" required>
                        <optgroup label="TERPILIH">
                            <option value="<?= $data_edit->catid ?>"><?= $data_edit->catid ?></option>
                        </optgroup>
                        <optgroup label="PILIHAN">
                        <?php foreach ($kategori as $pl): ?>
                            <option value="<?= $pl->category ?>"><?= $pl->category ?></option>
                        <?php endforeach ?>
                        </optgroup>
                    </select>
              </div>
              <div class="form-group">
                <label for="Deskripsi">Deskripsi Produk</label>
                <textarea name="deskripsi" style="height: 250px;" class="form-control" value="<?= $data_edit->deskripsi ?>"></textarea>
              </div>   
              <div class="form-group">
                <label for="Harga">Harga*</label>
                <input type="number" step="0.01" name="harga_produk" class="form-control" value="<?= $data_edit->harga ?>">
                <?= form_error('harga_produk');?>
              </div>         
              <div class="form-group">
                <label for="Harga">Harga Diskon</label>
                <input type="number" step="0.01" name="harga_diskon" class="form-control" value="<?= $data_edit->diskon ?>">
                <?= form_error('harga_produk');?>
              </div> 
              <br>
              <div class="form-group">
              <label for="keberangkatan">Masukkan Jumlah Barang</label>
              <div class="input-group-prepend" >
                    <select name="jumlah" class="form-control" style="width: 20%;">
                      <optgroup label="TERPILIH">
                            <option value="<?= $data_edit->jumlah ?>"><?= $data_edit->jumlah ?></option>
                        </optgroup>
                        <optgroup label="PILIHAN">
                      <?php for ($i=1; $i<= 10 ;$i++){ ?>
                      <option value="<?= $i ?>"><?= $i ?> Buah</option>
                      <?php } ?>
                        </optgroup>
                    </select>
              </div>
              </div>
              <div class="col-sm-3">
                                <img src="<?= base_url('assets/gambar/') .$data_edit->gambar;  ?>" class="img-thumbnail" alt="">
                            </div>
              <div class="form-group">
                <label for="Harga">Gambar*</label>
                <input type="file"  name="gambar" class="form-control">
              </div>  
							<button type="submit" class="btn btn-primary btn-block">Edit Produk</button>
						</form>

					</div>


        </div>
</body>

</html>