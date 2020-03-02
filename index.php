<?php
session_start();
//Koneksi ke databases
 include 'koneksi.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bawazir Shop</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body style="background-color: #7f8fa6;">

<!-- navbar -->
<nav class="navbar navbar-default">
	<li><a> <img src="logo.png" width="200"></a></li>
		<div class="container">
<div class="col-sm-8">
			<ul class="nav navbar-nav nav navbar-brand-centered pading">
				
				<li><a href="index.php">Home</a> </li>
				<li><a href="keranjang.php">Keranjang</a> </li>
				<!-- jika sudah ada sesion pelangan -->
				<?php if(isset($_SESSION["pelanggan"])): ?>
				<li><a href="logout.php">Logout</a> </li>
				<?php else: ?>
				<li><a href="login.php">Login</a> </li>
				<!-- <li><a href="daftar.php">Daftar</a> </li> -->
				<?php endif ?>
				<li><a href="checkout.php">Checkout</a> </li>
</div>
			</ul>
		</div>
	</nav>

<!-- kontainer -->
<section class="konten">
	<div class="container">
		<h1>Smartphone Terbaru</h1>

		<div class="row">

			<?php $ambil = $koneksi->query("SELECT * FROM produk "); ?>
			<?php while ($perproduk = $ambil->fetch_assoc()) { ?>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?> " alt="">
						<div class="caption">
							<h3><?php echo $perproduk['nama_produk']; ?></h3>
							<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>

							<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">beli</a>
							<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">detail</a>
							
						</div>		
					</div>
				</div>
			<?php } ?>
		
		</div>
	</div>	
</section>
</body>
</html>