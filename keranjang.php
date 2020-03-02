<?php
session_start();


// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// 
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
			<h1>Keranjang</h1>
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Subharga</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php foreach($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
					<!-- Menampilkan produk -->
					
					<?php $ambil = $koneksi->query("SELECT * FROM produk
						WHERE id_produk='$id_produk'");
					$pecah = $ambil->fetch_assoc();
					$subharga = $pecah["harga_produk"]*$jumlah; ?>
					<tr>
						<td><?php echo $nomor ?></td>
						<td><?php echo $pecah["nama_produk"]; ?></td>
						<td>Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
						<td><?php echo $jumlah; ?> </td>
						<td><?php echo number_format($subharga); ?></td>
						<td>
							<a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">hapus</a>
						</td>
					</tr>
			<?php $nomor++; ?>
			<?php endforeach; ?>
			</tbody>
		</table>
		<a href="index.php" class="btn btn-default">Lanjut Belanja</a>
		<a href="checkout.php" class="btn btn-primary">Checkout & Beli</a>
	</div>
</section>

</body>
</html>