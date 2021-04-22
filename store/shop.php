<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
	<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">Store</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
						<div class="collapse navbar-collapse" id="collapsibleNavbar">
							<ul>
								<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
								</li>
								<li class="has-dropdown active">
									<a href="shop.php">Shop</a>
									<ul class="dropdown">
										<li><a href="product-detail.php">Product Detail</a></li>
										<li><a href="cart.php">Shipping Cart</a></li>
										<li><a href="checkout.php">Checkout</a></li>
										<li><a href="order-complete.php">Order Complete</a></li>
										<li><a href="add-to-wishlist.php">Wishlist</a></li>
									</ul>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="#">Categories</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="checkout.php">Checkout</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="cart.php"><i class="icon-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
								</li>
							</ul>
						</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-1.png);">
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1 style="color:azure;font-weight:bold;">Products</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span style="color:azure;">Shop</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-push-2">
						<div class="row row-pb-lg">
						<?php
								include "koneksi.php";
								$batas = 6;
								$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
								$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

								$previous = $halaman - 1;
								$next = $halaman + 1;

								$sql = "select * from tbl_produk";
								$data = mysqli_query($con, $sql);
								
								$jumlah_data = mysqli_num_rows($data);
								$total_halaman = ceil($jumlah_data / $batas);
								
								$data_ecomm = mysqli_query($con,"select * from tbl_produk limit $halaman_awal, $batas");
								$nomor = $halaman_awal+1;
								while($row = mysqli_fetch_array($data_ecomm)){
								?>

					<div class="col-md-6 text-center">
						<div class="product-entry">
							<div class="product-img"><a href="product-detail.php?id=<?php echo $row['produk_id']; ?>"><?php echo "<img src='../lecomm/assets/gambar/$row[gambar]' />";?></a> 
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.php?id=<?php echo $row['produk_id']; ?>"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.php"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.php"><?php echo $row['nama']?></a></h3>
								<p class="price"><span><?= 'Rp.' .number_format($row['harga'], 0, ',', '.') ?></span></p>
							</div>
						</div>
					</div>
					<?php } ?>
						</div>
						<div class="row">
						<nav>
							<ul class="pagination justify-content-center">
								<li class="page-item">
									<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
								</li>
								<?php 
								for($x=1;$x<=$total_halaman;$x++){
									?> 
									<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
									<?php
								}
								?>				
								<li class="page-item">
									<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
								</li>
							</ul>
						</nav>
						</div>
					</div>
					<div class="col-md-2 col-md-pull-10">
						<div class="sidebar">
								<h2>Categories</h2>
							<div class="side">
								<div class="fancy-collapse-panel">
			                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			                     <div class="panel panel-default">
							  <?php		
										$sql = "select * from toko_categories";
										$query = mysqli_query($con, $sql);
										$data = array();
										while (($d = mysqli_fetch_array($query)) != null) {
										?>
			                         <div class="panel-heading" role="tab" id="headingOne">
										 <h4 class="panel-title">
			                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo $d['category']?>
			                                 </a>
			                             </h4>
			                         <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                             <div class="panel-body">
			                                 <ul>
			                                 	<li><a href="#"><?php echo $d['category']?></a></li>
			                                 </ul>
			                             </div>
			                         </div>
			                         </div>
								 <?php } ?>
			                     </div>
			                  </div>
			               </div>
							</div>
							<div class="side">
								<h2>Price Range</h2>
								<form method="post" class="colorlib-form-2">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Price from:</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">200</option>
				                        <option value="#">300</option>
				                        <option value="#">400</option>
				                        <option value="#">1000</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Price to:</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">2000</option>
				                        <option value="#">4000</option>
				                        <option value="#">6000</option>
				                        <option value="#">8000</option>
				                        <option value="#">10000</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				              </div>
				            </form>
							</div>
							<div class="side">
								<h2>Color</h2>
								<div class="color-wrap">
									<p class="color-desc">
										<a href="#" class="color color-1"></a>
										<a href="#" class="color color-2"></a>
										<a href="#" class="color color-3"></a>
										<a href="#" class="color color-4"></a>
										<a href="#" class="color color-5"></a>
									</p>
								</div>
							</div>
							<div class="side">
								<h2>Star</h2>
								<div class="size-wrap">
									<p class="size-desc">
										<a href="#" class="size size-1">1</a>
										<a href="#" class="size size-2">2</a>
										<a href="#" class="size size-3">3</a>
										<a href="#" class="size size-4">4</a>
										<a href="#" class="size size-5">5</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Enter your email">
											<button type="submit" class="btn btn-primary">Subscribe</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Store</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-4">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>Indonesia,Semarang <br> Jalan Raya Baru 01</li>
							<li><a href="#">024 111 01</a></li>
							<li><a href="#">info@tiketkuid.com</a></li>
							<li><a href="#">www.tiketkuid.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							
							<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made by A22.201902733-Mohammad Bagus Chalil A
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

