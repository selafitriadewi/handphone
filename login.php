<?php
session_start();
//Koneksi ke databases
 include 'koneksi.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
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
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel panel-heading">
						<h3 class="panel-titel">Login Pelangan</h3>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<button class="btn btn-primary" name="login">Login</button>
							  Sebagai Admin ? <a href="admin/login.php" >klik sini </a> 
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jika ada tombil simpan yang di tekan -->
<?php if (isset($_POST['login'])) 
{
	$email = $_POST["email"];
	$password = $_POST["password"];

	$ambil = $koneksi->query("SELECT * FROM pelanggan
		WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

	// hitung aku yang terambil
	$akunyangcocok = $ambil->num_rows;

	//jika satu akun yang cocok maka di loginkan
	if ($akunyangcocok==1) {
		//jika sukses login
		$akun = $ambil->fetch_assoc();
		//simpan si sesion pelangan
		$_SESSION["pelanggan"]=$akun;
		echo "<script>alert('anda sukses login'); </script>";
		echo "<script>location='checkout.php'; </script>";

	}else{
		//jika gagal
		  echo "<script>alert('anda gagal login, silahkan periksa kembali'); </script>";
		  echo "<script>location='login.php'; </script>";
	}
} ?>

</body>
</html>


