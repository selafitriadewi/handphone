<?php
session_start();
//Koneksi ke databases
 $koneksi = new mysqli("localhost","root","","trainittoko");

 ?>
<html>
<head>
    <title>Online Shop SerbaBebas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head><!--/head-->
<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="contactinfo">
							<div class="col-sm-4">
								<div class="logo pull-left">
									<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
								</div>
							</div>
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Login</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Daftar</a></li>
								<li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header_top-->
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Belanja<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Baju</a></li>
										<li><a href="product-details.html">Celana</a></li> 
										<li><a href="checkout.html">Jaket</a></li> 
										<li><a href="cart.html">Sandal</a></li> 
										<li><a href="login.html">Sepatu</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Tentang Kami<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">SerbaBebas</a></li>
										<li><a href="blog-single.html">Cara Belanja</a></li>
										<li><a href="blog-single.html">Cara Pembayaran</a></li>
                                    </ul>
                                </li> 
								<li><a href="contact-us.html">Kontak Kami</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
								<div class="col-sm-6">
									<h1><span>New</span>Produk</h1>
									<h2>Berbagai Promo Baju Terbaru</h2>
									<p>Terdapat baju dengan merek ternama dan cukup terkenal, Kami menyipakan dengan berbagai potongan harga dan diskon besar-besaran</p>
									<button type="button" class="btn btn-default get">Belanja</button>
								</div>
								
							</div>		
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategori Produk</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Pakaian Waniata
										</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Pakaian Pria
										</a>
									</h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Celana Wanita
										</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Jaket</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Sepatu</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Sandal</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brand Produk</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(10)</span>Adidas</a></li>
									<li><a href="#"> <span class="pull-right">(26)</span>Nike</a></li>
									<li><a href="#"> <span class="pull-right">(17)</span>Levis</a></li>
									<li><a href="#"> <span class="pull-right">(22)</span>Crocodile</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="brands_products"><!--brands_products-->
							<h2>Pembayaran</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#">BRI (a.n SerbaBebas  : 0669.01.004717.973)</a></li>
									<li><a href="#"> BNI (a.n SerbaBebas  : 0669.01.004717.531)</a></li>
									<li><a href="#"> BCA (a.n SerbaBebas : 0321670012)</a></li>
									<li><a href="#"> Mandiri (a.n SerbaBebas : 06584304656)</a></li>
									<li><a href="#"> Mega (a.n SerbaBebas : 08535335305)</a></li>
									<li><a href="#"> Danamon (a.n SerbaBebas : 0604305405)</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Produk Terbaru</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<?php $ambil = $koneksi->query("SELECT * FROM produk "); ?>
			<?php while ($perproduk = $ambil->fetch_assoc()) { ?>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?> " alt="">
						<div class="caption">
							<h3><?php echo $perproduk['nama_produk']; ?></h3>
							<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>

							<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">beli</a>
							
						</div>		
					</div>
				</div>
			<?php } ?>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Rp. 70.000</h2>
											    <p>Kaos Hitam Pria</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product2.jpg" alt="" />
										    <h2>Rp. 80.000</h2>
											<p>Kaos Biru Wanita</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rp. 80.000</h2>
											<p>Kaos Biru Wanita</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product3.jpg" alt="" />
										    <h2>Rp. 40.000</h2>
											<p>Celana Abu-abu pria</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rp. 40.000</h2>
											<p>Celana Abu-abu pria</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product4.jpg" alt="" />
										<h2>Rp. 50.000</h2>
											<p>Celana Hitam pria</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
										<h2>Rp. 50.000</h2>
											<p>Celana Hitam pria</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
										</div>
									</div>
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product5.jpg" alt="" />
										<h2>Rp. 140.000</h2>
											<p>High Hill Wanita</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rp. 140.000</h2>
											<p>High Hill Wanita</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
										</div>
									</div>
									<img src="images/home/sale.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product6.jpg" alt="" />
										<h2>Rp. 120.000</h2>
											<p>Sepatu Pria</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rp. 120.000</h2>
											<p>Sepatu Pria</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Tambahkan ke compare</a></li>
									</ul>
								</div>
							</div>
						</div>					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
			<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>SerbaBebas</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Tentang Kami</a></li>
								<li><a href="#">Karir</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Media Kit</a></li>
								<li><a href="#">Kisah Penjual</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Beli</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Belanja Di SerbaBebas</a></li>
								<li><a href="#">Cara Belanja</a></li>
								<li><a href="#">Pembayaran</a></li>
								<li><a href="#">Pengembalian dana</a></li>
								<li><a href="#">Hot List</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Jual</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Jualan Di SerbaBebas</a></li>
								<li><a href="#">Cara Berjualan</a></li>
								<li><a href="#">Gold Merchant</a></li>
								<li><a href="#">Beriklan</a></li>
								<li><a href="#">Penarikan Dana</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Bantuan</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Syarat dan Ketentuan</a></li>
								<li><a href="#">Kebijakan Privasi</a></li>
								<li><a href="#">Pusat Resolusi</a></li>
								<li><a href="#">Hubungi Kami</a></li>
								<li><a href="#">Tentang Kami</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Tentang SerbaBebas</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Untuk mendapatkan Update baru dari Toko Online SerbaBebas<br />Tinggalkan Email Disini</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright &copy;  2016 SerbaBebas. All rights reserved.</p>
					<p class="pull-right">Powered by <span><a target="_blank" href="http://www.serbabebas.com">SerbaBebas</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
</body>
</html>