<span style="color: #ff0000;">
	<html>
</span>

<body><br><br>
	<h1>Halaman Kategori Produk Ecommerce</h1>
	<!-- Form -->
	<div class="row">
<div class="col-md-7">
<div class="card">
          <div class="card-header">
            <h5>Daftar Kategori Ecommerce</h5>
          </div>
          
          <div class="card-body">
            <table class="table table-condensed table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelabuhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($kategori as $pl){ ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $pl->category ?></td>
                        <td>
                            <a href="<?= base_url('produk/hapus_kategori/' .$pl->id) ?>" class="btn btn-small btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
          </div>

          <div class="card-footer small text-muted">
          </div>
      </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">Form Tambah Kategori</div>
            <div class="card-body">
            <form action="<?= base_url('produk/tambah_kategori') ?>" method="post">
                <div class="form-group">
                    <label for="">Nama Kategori </label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Kategori">
                    <br>
                    <button type="submit" class="btn btn-block btn-primary">Selesai</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>