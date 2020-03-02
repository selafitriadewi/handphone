-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 14 Mei 2019 pada 11.07
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trainittoko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `nama_lengkap`) VALUES
(1, 'bawazir', 'bawazir@gmail.com', 'bawazir', 'Bagas Bawazir'),
(2, 'bagasbawazir', 'bagasbawazir@gmail.com', 'bagasbawazir', 'bagas bawazir'),
(3, 'bawazirfadhil', 'bawazirfadhil@gmail.com', 'bawazirfadhil', 'Bawazir Fadhil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE IF NOT EXISTS `ongkir` (
`id_ongkir` int(5) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'JNE', 20000),
(2, 'TIKI', 25000),
(3, 'POS INDONESIA', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
`id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'bawazir@gmail.com', 'bawazir', 'Bawazir Fadhil Mohammad', '05311129111', ''),
(2, 'budi@gmail.com', 'budi', 'Budi Anduk', '085711129111', ''),
(3, 'putri@yahoo.com', 'puteri', 'putri', '0812345678', ''),
(4, 'bambang@gmail.com', 'bawazir', 'bambang', '0867856587', ''),
(5, 'bagong@gmail.com', 'bawazir', 'bagong', '08756747658758', ''),
(6, 'lukman@gmail.com', 'bawazir', 'lukman', '085768657587', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
`id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`) VALUES
(1, 1, 1, '2018-07-01', 1500000),
(2, 1, 1, '2018-07-02', 500000),
(3, 1, 0, '2018-07-14', 12000000),
(4, 1, 0, '2018-07-15', 0),
(5, 1, 0, '2018-07-15', 4000000),
(6, 1, 0, '2018-07-15', 8000000),
(7, 1, 2, '2018-07-15', 21025000),
(8, 1, 2, '2018-07-15', 4025000),
(9, 1, 2, '2018-07-15', 13025000),
(10, 1, 2, '2018-07-15', 17025000),
(11, 1, 2, '2018-07-15', 25025000),
(12, 1, 0, '2018-07-15', 4000000),
(13, 1, 1, '2018-07-15', 17020000),
(14, 1, 2, '2018-07-15', 17025000),
(15, 1, 2, '2018-07-16', 20025000),
(16, 6, 2, '2018-07-16', 12025000),
(17, 6, 3, '2018-07-16', 21030000),
(18, 1, 1, '2018-07-17', 21020000),
(19, 1, 1, '2018-07-17', 21020000),
(20, 1, 3, '2018-07-18', 2147483647),
(21, 1, 0, '2018-07-19', 17000000),
(22, 1, 1, '2019-05-13', 4020000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE IF NOT EXISTS `pembelian_produk` (
`id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 3, 33, 1),
(4, 3, 13, 1),
(5, 5, 13, 1),
(6, 6, 33, 1),
(7, 7, 33, 1),
(8, 7, 31, 1),
(9, 8, 13, 1),
(10, 9, 31, 1),
(11, 10, 31, 1),
(12, 10, 13, 1),
(13, 11, 13, 1),
(14, 11, 31, 1),
(15, 11, 33, 1),
(16, 12, 13, 1),
(17, 13, 13, 1),
(18, 13, 31, 1),
(19, 14, 13, 1),
(20, 14, 31, 1),
(21, 15, 33, 1),
(22, 15, 34, 1),
(23, 16, 13, 1),
(24, 16, 33, 1),
(25, 17, 33, 1),
(26, 17, 31, 1),
(27, 18, 31, 1),
(28, 18, 33, 1),
(29, 19, 31, 1),
(30, 19, 33, 1),
(31, 20, 13, 1),
(32, 20, 39, 1),
(33, 21, 13, 1),
(34, 21, 31, 1),
(35, 22, 13, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(13, 'iPhone 6S', 4000000, 101, 'iphone.jpeg', '												iPhone 6S produksi hihihi						'),
(31, 'Samsung S9 Plus', 13000000, 120, 'Samsungs9-e1521371416912.jpg', 'ini hp'),
(33, 'Asus Zenfone 5', 8000000, 120, 'features01-14.jpg', 'ini hp asus'),
(35, 'iPhone X', 15000000, 190, 'iphone_x_screen_1507787726201.jpg', 'ini iphone x'),
(37, 'Samsung S8 Plus', 7000000, 140, 'Samsung-Galaxy-S8-7-800x600.jpg', 'ini hp samsung'),
(38, 'NOKIA', 500000, 50, 'Samsung-Galaxy-S8-7-800x600.jpg', '			HAHAHA		'),
(40, 'cok', 76896986, 9889, 'sony_xperia_x_compact_1473674380465.jpeg', 'hgchgfh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
 ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
 ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
 ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
MODIFY `id_ongkir` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
