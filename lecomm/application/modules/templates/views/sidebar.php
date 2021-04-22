<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="index.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Kategori</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="layout-vertical.html" target="_blank">Kebutuhan Rumah Tangga</a></li>
					        <li><a href="layout-horizontal.html" target="_blank">Non Rumah Tangga</a></li>
					    </ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Tagihan &amp; Pembayaran</label>
					</li>
					<li class="nav-item">
					    <a href="<?= base_url("produk/category")?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Buat Kategori</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Fitur Admin</span></a>
					    <ul class="pcoded-submenu">
							<li><a href="<?= base_url("produk")?>">Tambah Produk Ecommerce</a></li>
					        <li><a href="<?= base_url("produk") ?>">Ubah Produk Ecommerce</a></li>
					        <li><a href="layout-horizontal.html" target="_blank">Hapus Produk Ecommerce</a></li>
					    </ul>
					</li>
					<li class="nav-item">
					    <a href="<?= base_url('Produk/view_tabel')?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Tabel Produk</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>User</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="auth-signup.html" target="_blank">Data Diri</a></li>
					        <li><a href="<?= base_url('auth/logout'); ?>">Log out</a></li>
					    </ul>
					</li>
					<li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>

				</ul>
			
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->