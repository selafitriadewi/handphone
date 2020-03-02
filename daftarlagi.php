<?php include'koneksi.php' ?>

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
<div class="col-sm-8 col-md-offset-8">
			<ul class="nav navbar-nav nav navbar-brand-centered pading">
				
				<li><a href="index.php">Home</a></li>
				<li><a href="keranjang.php">Keranjang</a></li>
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
					if(isset($_POST["daftar"]))
					{
						// mengambil isian nama,email,password,alamat, telepon
						$nama = $_POST["nama"];
						$email = $_POST["email"];
						$password = $_POST["password"];
						$alamat = $_POST["alamat"];
						$telepon = $_POST["telepon"];

						//cek apakah email sudah digunakan
						$ambil = $koneksi->query("SELECT * FROM pelanggan
							WHERE email_pelanggan = '$email' ");
						$yangcocok = $ambil->num_rows;
						if ($yangcocok=1) 
						{
							echo "<script>alert('pendaftaran gagal email 
							sudah digunakan'); </script>";
							echo "<script>location='daftar.php';</script>";
						}
						else
						{
							//melakukan query insert ke table pelanggan
							$koneksi->query("INSERT INTO pelanggan
								(email_pelanggan,password_pelanggan,nama_pelanggan,
								telepon_pelanggan,alamat_pelanggan)
								VALUES('$email','$password','$nama','$telepon','$alamat') ");

							echo "<script>alert('pendaftaran sukses, silahkan login'); </script>";
							echo "<script>location='login.php'; </script>";
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






