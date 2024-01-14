-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 03:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjl`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` char(10) NOT NULL,
  `id_transaksi` char(10) NOT NULL,
  `resi` varchar(50) NOT NULL,
  `tgl_pengiriman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_transaksi`, `resi`, `tgl_pengiriman`) VALUES
('P001', 'T001', 'G6768HGFD77', '2023-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `gambar_produk` text NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `gambar_produk`, `nama_produk`, `harga_produk`, `deskripsi`, `jumlah_produk`, `status`) VALUES
(3, '1699259917_e1c114bcb47ababde421.jpeg', 'Chinos Standar 33-38', 500000, 'Jean Chinos dengan ukuran 33-38', 20, 'Aktif'),
(6, '1699260068_93162fe41033d933a135.jpeg', 'Casual 28-33', 500000, 'Jean Casual ukuran 28-33', 20, 'Aktif'),
(7, '1699260122_11bd1da7c25566a24057.jpeg', 'Casual 33-38', 500000, 'Jean Casual ukuran 33-38', 20, 'Aktif'),
(8, '1699260148_4c3b21762d76ed7c269c.jpeg', 'Jean ICM', 500000, 'Jean merek ICM', 20, 'Aktif'),
(10, '1699260230_66443449bd81cbdcbfe7.jpeg', 'Jean dengan variasi warna lainnya', 500000, 'Jean dengan variasi warna lainnya', 20, 'Aktif'),
(11, '1699260252_ab58ab7127dde3dc4139.jpeg', 'Jean STR', 500000, 'Jean STR dengan variasi kode', 20, 'Aktif'),
(12, '1699379293_1ca0d2eaf3c8b2156721.jpeg', 'Chinos Stretch 28-33', 500000, 'Jean Chinos Stretch dengan ukuran 28-33', 20, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id_request` char(10) NOT NULL,
  `id_transaksi` char(10) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `status_request` enum('diajukan','diterima','ditolak','pending','') NOT NULL,
  `nama_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `tgl_transaksi` date NOT NULL,
  `id_transaksi` char(10) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `total_bayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`tgl_transaksi`, `id_transaksi`, `nama_customer`, `alamat`, `no_hp`, `nama_barang`, `jumlah_barang`, `total_bayar`) VALUES
('2023-07-14', 'T001', 'Lina', 'jl.suka maju', '082322888113', 'clana jins', 2000, 16789),
('2023-07-17', 'T002', 'jwndwbq', ' sa dha', '87646545678', 'jdwqnhwb', 197382173, 9837819),
('2023-08-17', 'T006', 'jwndwbq', ' sa dha', '87646545678', 'jdwqnhwb', 197382173, 9837819),
('2023-09-17', 'T007', 'jwndwbq', ' sa dha', '87646545678', 'jdwqnhwb', 197382173, 9837819),
('2023-01-17', 'T009', 'jwndwbq', ' sa dha', '87646545678', 'jdwqnhwb', 197382173, 9837819),
('2023-02-17', 'T010', 'jwndwbq', ' sa dha', '87646545678', 'jdwqnhwb', 197382173, 9837819),
('2023-12-17', 'T011', 'jwndwbq', ' sa dha', '87646545678', 'jdwqnhwb', 197382173, 9837819),
('2023-12-17', 'T012', 'jwndwbq', ' sa dha', '87646545678', 'jdwqnhwb', 197382173, 9837819),
('2023-03-17', 'T013', 'jwndwbq', ' sa dha', '87646545678', 'jdwqnhwb', 197382173, 9837819),
('2023-04-14', 'T15', 'Lina', 'jl.suka maju', '082322888113', 'clana jins', 2000, 16789);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_created_at`) VALUES
(1, 'admin', 'admin', '2023-05-11 07:50:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
