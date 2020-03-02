<?php
session_start();
// Menambahkan id produk dari pelanggan
$id_produk = $_GET['id'];

//Jika sudah ada produk itu di keranjang makan produk itu di tambah 1
if (isset($_SESSION['keranjang'][$id_produk])) {
	$_SESSION['keranjang'][$id_produk]+=1;
}

//selain itu belum ada di keranjang maka produk itu di anggap di beli 1
else{
	$_SESSION['keranjang'][$id_produk]=1;
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// halaman keranjang
echo "<script>alert('produk telah masuk keranjang belanja'); </script>";
echo "<script>location='keranjang.php';</script>";
?>