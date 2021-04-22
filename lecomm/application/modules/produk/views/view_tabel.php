<span style="color: #ff0000;">
	<html>
</span>

<body><br><br>
	
	<!-- Tabel -->
	<div class="card mb-3">
    <?= $this->session->flashdata('message'); ?>
					<div class="card-header">
            <h5>Tabel Produk Ecommerce</h5>
					</div>
					<div class="card-body">
					<!-- [ stiped-table ] start -->
                    <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Laptop Table</h5>
                        <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Nama </th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Jumlah</th>
                                <th width="20%" class="text-center">Gambar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                                <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($list as $li){ ?>
                            <tr>
                                <td class="text-center"><?= $no++ ?></td>
                                <td><?= $li->nama ?></td>
                                <td class="text-center"><?= $li->harga ?></td>
                                <td class="text-center"><?= $li->jumlah ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('assets/gambar/'. $li->gambar) ?>" target="blank">
                                    <img width="75%" src="<?= base_url('assets/gambar/'. $li->gambar) ?>" alt="">
                                    </a> 
                                </td>
                                <td class="text-center">
                                <a href="<?= base_url('produk/view_edit/' .$li->produk_id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                </td>
                            </tr>
                            <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->
					</div>


        </div>
</body>

</html>