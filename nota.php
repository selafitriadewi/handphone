<?php 
session_start();
//Koneksi ke databases
 include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Nota</title>
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
	<section class="konten">
		<div class="container">

			<!-- nota di isi yang ada di admin -->
			<!-- <h2>Detail Pembelian</h2>

<?php
	$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
		ON pembelian.id_pelanggan=pelanggan.id_pelanggan
		WHERE pembelian.id_pembelian='$_GET[id]'");
	$detail = $ambil->fetch_assoc();
?>

<strong><?php echo $detail['nama_pelanggan']; ?> </strong><br>
<p>
	<?php echo $detail['telepon_pelanggan']; ?><br>
	<?php echo $detail['email_pelanggan']; ?>
</p>
<p>
	Tanggal : <?php echo $detail['tanggal_pembelian']; ?><br>
	Total : <?php echo $detail['total_pembelian']; ?>
</p> -->

<!-- <div class="container">
	<div class="row">
		<div class="col-sm-7 col-md-offset-2">
			<div class="panel panel-default">

	<div class="col col-md-7">
		<h3>Pembelian</h3>
		<strong>No. Pembelian : <?php echo $detail['id_pembelian'] ?></strong><br>
		Tanggal: <?php echo $detail['tanggal_pembelian']; ?><br>
		Total: Rp. <?php echo number_format($detail['total_pembelian']) ?><br>
	<div class="col col-md-7">
		<h3>Pelanggan</h3>
		<strong><?php echo $detail['nama_pelanggan'] ?></strong><br>
		<p>
			<?php echo $detail['telepon_pelanggan']; ?><br>
			<?php echo $detail['email_pelanggan']; ?>
		</p>
	</div>
	</div>
	</div>




<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama produk</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<thead>
		<?php $nomor=1; ?>
		<?php
			$ambil = $koneksi->query("SELECT * FROM pembelian_produk JOIN produk
			ON pembelian_produk.id_produk=produk.id_produk
			WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
			
			<?php while ($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor; ?> </td>
			<td><?php echo $pecah['nama_produk'];?></td>
			<td><?php echo $pecah['harga_produk'];?></td>
			<td><?php echo $pecah['jumlah'];?></td>
			<td><?php echo $pecah['harga_produk']*$pecah['jumlah'];?></td>
		</tr>
		<?php $nomor++;  ?>
		<?php } ?>
	</thead>
</table> -->

<div class="row">
	<div class="col-md-7">
		<div class="alert alert-info">
			<p>
				<h3>Pelanggan</h3>
		<strong><?php echo $detail['nama_pelanggan'] ?></strong><br>
		<p>
			<?php echo $detail['telepon_pelanggan']; ?><br>
			<?php echo $detail['email_pelanggan']; ?>
		</p>
			</p>
			<p>
				<h3>Pembelian</h3>
		<strong>No. Pembelian : <?php echo $detail['id_pembelian'] ?></strong><br>
		Tanggal: <?php echo $detail['tanggal_pembelian']; ?><br>
		Total: Rp. <?php echo number_format($detail['total_pembelian']) ?><br>
			</p>
			<p>
				<h3>Pembayaran</h3>
				Silahkan melakukan pembayaran Rp. <?php echo number_format($detail['total_pembelian']); 
				?><br> Ke
				<strong>Bank Mandiri 546754-6768-67868-87687 AN. Bawazir Fadhil M</strong><br>
				<strong>Indomaret terdekat</strong>
			</p>
			
		</div>
		
	</div>
</div>
			
		</div>
	</section>

</body>
</html>