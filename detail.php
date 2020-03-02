<?php
include 'koneksi.php';
?>
<?php $id_produk = $_GET["id"];

//query ambil data
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk' ");
$detail = $ambil->fetch_assoc();

// echo"<pre>";
// print_r($detail);
// echo"<pre>";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>detail</title>
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

	<section class="kontent">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="foto_produk/<?php echo $detail["foto_produk"]; ?>" alt="" class="img-responsive">
				</div>
			</div>
			<div class="col-md-6">
					<h2><?php echo $detail["nama_produk"] ?> </h2>
					<h4>Rp. <?php echo number_format($detail["harga_produk"]); ?></h4>
					<p><?php echo $detail["deskripsi_produk"] ?> </p>
				</div>
			</div>
		</div>
	</section>

</body>
</html>