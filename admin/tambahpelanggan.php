<h2>TPelanggan</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="id">		
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email">		
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="password">		
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input type="text" class="form-control" name="telepon">		
	</div>
	 <button class="btn btn-primary" name="save">Simpan</a></button>
 </form>
 <?php
if (isset($_POST['save'])) {
	$koneksi->query("INSERT INTO pelanggan
		(id_pelanggan,email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan)
		VALUES('$_POST[id]','$_POST[email]','$_POST[password]','$_POST[telepon]')");

	echo "<div class='alert alert-into'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' constant='1;url=index.php?halaman=pelanggan'>";
}
 ?>