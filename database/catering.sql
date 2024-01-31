-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 12:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` text NOT NULL,
  `foto` text DEFAULT NULL,
  `hak_akses` enum('admin','manager','','') NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `email`, `password`, `jk`, `alamat`, `foto`, `hak_akses`, `tanggal_update`) VALUES
(1, 'Kris Rezki A', 'krisrezki', 'kris@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', 'Laki-Laki', 'Jl. Sekumpul', '4685.jpg', 'admin', '2020-02-24 16:35:11'),
(2, 'kris', 'kris', 'kris@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', 'Laki-Laki', 'Sekumpul', 'lock.png', 'manager', '2020-02-24 22:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `foto_bank` text NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama`, `bank`, `no_rek`, `foto_bank`, `tanggal_update`) VALUES
(6, 'Kris Rezki', 'BNI', '0254520043', '20191208bni.png', '2020-01-28 16:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `judul_gambar` varchar(150) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `nama_web` varchar(40) NOT NULL,
  `nama_instansi` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `pemilik` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `logo` text NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `nama_web`, `nama_instansi`, `alamat`, `pemilik`, `email`, `logo`, `tanggal_update`) VALUES
(1, 'https://marwahcatering.com', 'Marwah Catering', 'Nogosaren, Nogotirto, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55293', 'Marwah', 'info@marwahcatering.com', '20191128logoatas.png', '2020-02-24 20:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `deskripsi_menu` text NOT NULL,
  `gambar_menu` text NOT NULL,
  `views_menu` int(11) NOT NULL,
  `terjual` int(11) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_paket`, `nama_menu`, `harga_menu`, `deskripsi_menu`, `gambar_menu`, `views_menu`, `terjual`, `tanggal_update`) VALUES
(16, 1, 'Prasmanan Paket B', 32000, '<p>Minuman : Teh, Air Putih, Soft Drink, Orange Squash</p>\r\n\r\n<p>Makanan : Nasi Putih Soup Kembang Waru + Sosis Sambal Goreng Daging Giling + Krecek Sate Ayam Gurameh Saus Cap Cay Soon Ayu Salad Buah Kerupuk Udang Buah Iris (Semangka, Melon, Pepaya)</p>\r\n\r\n<p>Minimal : 500 Porsi &gt;800 porsi bonus 1 gubuk @200 p @ Rp.8.000,00 1000 porsi bonus 1 gubuk @400 p @ Rp.8.000,00</p>\r\n', '20191204content_5a9e33ffa77e1.jpg', 15, 0, '2020-02-24 23:02:20'),
(17, 1, 'Prasmanan Paket C', 35000, '<p>Minuman : Teh, Air Putih, Soft Drink, Orange Squash</p>\r\n\r\n<p>Makanan : Nasi Putih Soup Kembang Waru + Sosis Sambal Goreng Daging Giling + Krecek Sate Ayam Gurameh Saus Oseng Daging Cabe Ijo Soon Ayu Salad Buah Kerupuk Udang Buah Iris (Semangka, Melon, Pepaya)</p>\r\n\r\n<p>Minimal : 500 Porsi &gt;800 porsi bonus 1 gubuk @200 p @ Rp.8.000,00 1000 porsi bonus 1 gubuk @400 p @ Rp.8.000,00</p>\r\n', '20191204content_5a9e341352c1a.jpg', 19, 0, '2020-02-03 10:27:37'),
(18, 1, 'Prasmanan Paket D', 40000, 'Minuman :\r\n\r\nTeh, Air Putih, Soft Drink, Orange Squash\r\nMakanan :\r\n\r\nNasi Putih\r\nSoup Krim Jagung/ Asparagus/ Kembang Waru\r\nSambal Goreng Daging Giling + Krecek\r\nCa Cumi Brokoli\r\nBestik Lidah\r\nOseng Daging Ijo\r\nSate Ayam\r\nUdang Krispi\r\nHusarensia\r\nKerupuk Udang + Kering Kentang\r\nBuah Iris (Semangka, Melon, Pepaya)\r\nMinimal : 500 Porsi\r\n\r\n>800 porsi bonus 1 gubuk @200 p @ Rp.8.000,00\r\n1000 porsi bonus 1 gubuk @400 p @ Rp.8.000,00', '20191204content_5a9e34527f840.jpg', 14, 0, '2020-02-24 16:32:27'),
(19, 1, 'Prasmanan Paket 1', 52500, 'Minuman :\r\n\r\nTeh, Air Putih, Soft Drink, Orange Squash\r\nMakanan :\r\n\r\nNasi Putih\r\nSoup Kembang Waru + Sosis\r\nSambal Goreng Daging Giling + Krecek\r\nGurameh Saus\r\nOseng Janggel Daging Telur Puyuh\r\nSoon Ayu / Capcay\r\nSalad Buah\r\nKerupuk udang\r\nBuah Iris (Semangka, Melon, Pepaya)\r\nEs Krim + Puding\r\nGubuk :\r\n\r\nBakso Sapi (250 porsi)\r\nLontong Sate (250 porsi)\r\nSoto Sulung (250 porsi)\r\nMie Oriental(250 porsi)', '20191204content_5aa0fcd312b44.jpg', 13, 0, '2020-02-24 15:54:14'),
(20, 1, 'Prasmanan Paket 2', 57000, 'Minuman :\r\n\r\nTeh, Air Putih, Soft Drink, Orange Squash\r\nMakanan :\r\n\r\nNasi Putih\r\nSoup Kembang Waru + Sosis\r\nSambal Goreng Daging Giling + Krecek\r\nBestick Galantin\r\nGurameh Saus/Sate Ayam\r\nSoon Ayu/Capcay\r\nSalad Buah\r\nKerupuk udang\r\nBuah Iris (semnagka, melon, pepaya)\r\nEs Krim + Puding\r\nGubuk :\r\n\r\nBakso Sapi (250 porsi)\r\nEmpek-empek (250 porsi)\r\nSiomay (250 porsi)\r\nMie Oriental(250 porsi)', '20191204content_5aa0fc9095980.jpg', 36, 15, '2020-02-24 21:03:44'),
(21, 1, 'Prasmanan Paket 3', 62500, 'Minuman :\r\n\r\nTeh, Air Putih, Soft Drink, Juice\r\nMakanan :\r\n\r\nNasi Putih\r\nSoup Rambutan\r\nSambal Goreng Daging Giling + Krecek\r\nOseng Daging cabe Ijo\r\nUdang Tulip\r\nCa Brokoli\r\nSalad Buah\r\nKerupuk Udang\r\nBuah Iris (semnagka, melon, pepaya)\r\nEs Krim + Puding\r\nGubuk :\r\n\r\nZupa Soup (250 porsi)\r\nEmpal Gentong (250 porsi)\r\nBakso Sapi (250 porsi)\r\nMie Oriental (250 porsi)\r\nLontong Sate Ayam (250 porsi)', '20191204content_5aa0fc7ee0fee.jpg', 79, 47, '2020-03-16 09:58:09'),
(25, 12, 'Jus Alpukat', 22000, '', '20200224alpukat.jpg', 4, 0, '2020-02-24 16:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `id_ongkirket` int(11) NOT NULL,
  `kabupaten` varchar(40) NOT NULL,
  `ongkos_kirim` int(11) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `id_ongkirket`, `kabupaten`, `ongkos_kirim`, `tanggal_update`) VALUES
(1, 2, 'Sleman', 50000, '2019-12-07 05:34:40'),
(2, 2, 'Bantul', 60000, '2019-12-07 05:34:44'),
(3, 2, 'Gunung Kidul', 40000, '2019-12-07 05:34:48'),
(4, 2, 'Kulon Progo', 45000, '2019-12-07 05:34:50'),
(5, 2, 'Yogyakarta', 30000, '2019-12-07 05:34:52'),
(12, 1, '-', 0, '2019-12-25 11:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `ongkirket`
--

CREATE TABLE `ongkirket` (
  `id_ongkirket` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkirket`
--

INSERT INTO `ongkirket` (`id_ongkirket`, `keterangan`, `tanggal_update`) VALUES
(1, 'Diambil', '2019-12-08 09:55:23'),
(2, 'Diantar', '2019-12-08 09:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `uraian` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `uraian`, `gambar`, `tanggal_update`) VALUES
(1, 'Prasmanan', 'Menu prasmanan untuk berbagai acara', '201912041.jpg', '2020-02-24 15:53:23'),
(2, 'Gubugan', 'Aneka menu khas nusantara dan internasional dalam gubug', '201912042.jpg', '2019-12-04 14:04:16'),
(3, 'Racikan', 'Paket menu racikan masakan khas nusantara praktis disajikan untuk tamu', '201912043.jpg', '2019-12-04 14:06:43'),
(4, 'Menu Box', 'Aneka paket Lunch Box, Snack Box dan Box untuk acara syukuran', '201912044.jpg', '2019-12-04 14:07:09'),
(5, 'Coffee Break', 'Paket menu coffe break khas nusantara praktis disajikan untuk tamu', '201912045.jpg', '2019-12-04 14:08:20'),
(10, 'Lain-lain', 'Aneka menu lainnya seperti Fountain, Tumpeng dan Jajan Pasar', '201912086.jpg', '2019-12-08 08:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `aktif` enum('0','1','','') NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `username`, `email`, `password`, `telepon`, `alamat`, `foto`, `token`, `aktif`, `tanggal_update`) VALUES
(2, 'Kris Rezki A', 'krisrezki', 'krisrezki77@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '081221502607', 'Jl. Purbalingga', '', 'e4d3fb1b0c227eb71345dcaca1d964df5ee2b845503b49e62bc07d261bd51b15', '1', '2020-02-24 22:59:32'),
(4, 'Aris Abdul Ajis', 'risduljis026', 'arisabdulajis027@gmail.com', '00ea1da4192a2030f9ae023de3b3143ed647bbab', '081221502607', 'Jl. Woroth', '', '11e68b480167f9277769964e67fc93df8528e7e8a00f9f4081be18d31bfb7835', '1', '2020-02-24 23:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_konfirmasi` datetime NOT NULL,
  `tanggal_verifikasi` datetime NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `atas_nama` varchar(40) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keperluan` enum('DP','Pelunasan','Pembayaran Ulang DP','Pembayaran Ulang Pelunasan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkirket` int(11) NOT NULL,
  `tanggal_pesanan` datetime NOT NULL,
  `deadline_dp` datetime NOT NULL,
  `deadline_lunas` datetime NOT NULL,
  `tanggal_pengiriman` datetime NOT NULL,
  `jam_pengiriman` time NOT NULL,
  `tgl_konfirmasi_pesanan` datetime NOT NULL,
  `status_pesanan` varchar(32) NOT NULL,
  `status_pembayaran` text NOT NULL,
  `alasan_tolak` text DEFAULT NULL,
  `dp` int(11) DEFAULT NULL,
  `lunas` int(11) DEFAULT NULL,
  `total_belanja` int(11) NOT NULL,
  `total_ongkir` int(11) DEFAULT NULL,
  `total_pesanan` int(11) NOT NULL,
  `nama_penerima` varchar(40) NOT NULL,
  `telepon_penerima` varchar(14) NOT NULL,
  `alamat_penerima` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_detail`
--

CREATE TABLE `pesanan_detail` (
  `id_pesanan_detail` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `jumlah_menu` int(11) NOT NULL,
  `subharga_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `ongkirket`
--
ALTER TABLE `ongkirket`
  ADD PRIMARY KEY (`id_ongkirket`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD PRIMARY KEY (`id_pesanan_detail`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ongkirket`
--
ALTER TABLE `ongkirket`
  MODIFY `id_ongkirket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  MODIFY `id_pesanan_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
