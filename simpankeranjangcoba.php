<?php
session_start();


echo "<pre>";
print_r($_SESSION);
echo "</pre>";

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
		<div class="container">

			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a> </li>
				<li><a href="keranjang.php">Keranjang</a> </li>
				<li><a href="login.php">Login</a> </li>
				<li><a href="checkout.php">Checkout</a> </li>

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
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php foreach($_SESSION["keranjang"] as $id_produk => $jumlah); ?>
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
					</tr>
					<?php $nomor++; ?>
					 <?php endforeach; ?>
			</tbody>
		</table>
	</div>
</section>

</body>
</html>