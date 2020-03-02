<?php include"koneksi.php" ?>

<!DOCTYPE html>
<html>
<head>
	<title>daftar</title>
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

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Daftar Pelangan</h3>
				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-3">Nama</label>
							<div class="col-md-7">
								<input type="nama" class="form-control" name="nama" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Email</label>
							<div class="col-md-7">
								<input type="email" class="form-control" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Password</label>
							<div class="col-md-7">
								<input type="password" class="form-control" name="password" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Alamat</label>
							<div class="col-md-7">
								<textarea class="form-control" name="alamat" required>
								</textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">No Telepon</label>
							<div class="col-md-7">
								<input type="telepon" class="form-control" name="telepon" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-3">
							<button class="btn btn-primary" name="daftar">Daftar
							</button>
						</div>
						</div>
					</form>
					<?php
						// jika di tekan tombol daftar 
						include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
						 
						if(isset($_POST['daftar'])){
						$nama  = $_POST['nama']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
						$email  = $_POST['email'];
						$password  = $_POST['password'];
						$alamat  = $_POST['alamat'];
						$telepon = $_POST['telepon'];

						//menambahkan query sql tambah data untuk memasukkan data ke database
						$data = $koneksi->query("INSERT INTO pelanggan SET nama_pelanggan='$nama',password_pelanggan='$password',email_pelanggan='$email',telepon_pelanggan='$telepon'")
						or die ("data salah : ");
						 
						//  untuk mengetahui apakah data berhasil disimpan atau belum
						if ($data) {
						    echo "<script>alert('login sukses'); </script>";
							echo "<script>location='login.php';</script>";
						} else {

						    echo "Gagal Input Data!!!";
						echo "<br><a href='daftar.php'>Kembali</a>"; // berfungsi untuk kembali ke halaman register.php
						}
						}
						?>

				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>






