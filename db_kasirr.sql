-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 10:01 AM
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
-- Database: `db_kasirr`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'untuk admin'),
(2, 'petugas', 'untuk petugas');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 4),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'micco1', NULL, '2024-02-07 03:12:42', 0),
(2, '::1', 'nabil@gmail.com', 1, '2024-02-07 03:26:43', 1),
(3, '::1', 'nabil@gmail.com', 2, '2024-02-07 04:54:41', 1),
(4, '::1', 'nabil@gmail.com', 2, '2024-02-07 04:58:03', 1),
(5, '::1', 'nabil@gmail.com', 2, '2024-02-07 05:02:36', 1),
(6, '::1', 'nabil@gmail.com', 2, '2024-02-07 05:03:36', 1),
(7, '::1', 'melda@gmail.com', 3, '2024-02-07 05:09:03', 1),
(8, '::1', 'dinda2@gmail.com', 4, '2024-02-07 05:51:56', 1),
(9, '::1', 'dinda1', NULL, '2024-02-07 05:53:13', 0),
(10, '::1', 'fdgfd', NULL, '2024-02-07 05:59:52', 0),
(11, '::1', 'dinda1', NULL, '2024-02-07 06:00:19', 0),
(12, '::1', 'dinda1', NULL, '2024-02-07 06:01:48', 0),
(13, '::1', 'dinda1', NULL, '2024-02-07 06:02:34', 0),
(14, '::1', 'dinda1', NULL, '2024-02-07 06:03:13', 0),
(15, '::1', 'dinda1', NULL, '2024-02-07 06:03:32', 0),
(16, '::1', 'dinda1', NULL, '2024-02-07 06:06:06', 0),
(17, '::1', 'dinda1', NULL, '2024-02-07 06:08:00', 0),
(18, '::1', 'dinda1', NULL, '2024-02-07 06:08:26', 0),
(19, '::1', 'dinda2@gmail.com', 4, '2024-02-07 06:09:17', 1),
(20, '::1', 'melda@gmail.com', 3, '2024-02-07 06:09:56', 1),
(21, '::1', 'dinda2@gmail.com', 4, '2024-02-07 06:10:17', 1),
(22, '::1', 'melda', NULL, '2024-02-07 06:11:56', 0),
(23, '::1', 'melda', NULL, '2024-02-07 06:12:46', 0),
(24, '::1', 'melda', NULL, '2024-02-07 06:12:47', 0),
(25, '::1', 'melda@gmail.com', 3, '2024-02-07 06:13:43', 1),
(26, '::1', 'dinda2@gmail.com', 4, '2024-02-07 06:14:52', 1),
(27, '::1', 'melda@gmail.com', 3, '2024-02-07 06:16:02', 1),
(28, '::1', 'melda@gmail.com', 3, '2024-02-07 06:18:40', 1),
(29, '::1', 'melda@gmail.com', 3, '2024-02-07 06:23:01', 1),
(30, '::1', 'melda', NULL, '2024-02-07 06:23:16', 0),
(31, '::1', 'melda', NULL, '2024-02-07 06:38:54', 0),
(32, '::1', 'melda', NULL, '2024-02-07 06:42:52', 0),
(33, '::1', 'melda', NULL, '2024-02-07 06:45:47', 0),
(34, '::1', 'melda', NULL, '2024-02-07 06:46:45', 0),
(35, '::1', 'melda', NULL, '2024-02-07 06:47:42', 0),
(36, '::1', 'melda', NULL, '2024-02-07 06:48:34', 0),
(37, '::1', 'melda', NULL, '2024-02-07 06:48:55', 0),
(38, '::1', 'melda', NULL, '2024-02-07 06:51:15', 0),
(39, '::1', 'melda', NULL, '2024-02-07 06:51:39', 0),
(40, '::1', 'melda', NULL, '2024-02-07 06:51:59', 0),
(41, '::1', 'melda', NULL, '2024-02-07 06:52:32', 0),
(42, '::1', 'melda', NULL, '2024-02-07 06:52:57', 0),
(43, '::1', 'melda', NULL, '2024-02-07 06:53:16', 0),
(44, '::1', 'melda', NULL, '2024-02-07 06:53:57', 0),
(45, '::1', 'melda', NULL, '2024-02-07 06:54:45', 0),
(46, '::1', 'melda', NULL, '2024-02-07 06:55:18', 0),
(47, '::1', 'melda', NULL, '2024-02-07 06:55:40', 0),
(48, '::1', 'melda', NULL, '2024-02-07 06:56:10', 0),
(49, '::1', 'melda', NULL, '2024-02-07 06:57:58', 0),
(50, '::1', 'melda', NULL, '2024-02-07 06:59:09', 0),
(51, '::1', 'melda', NULL, '2024-02-07 06:59:30', 0),
(52, '::1', 'melda', NULL, '2024-02-07 06:59:47', 0),
(53, '::1', 'melda', NULL, '2024-02-07 07:01:07', 0),
(54, '::1', 'dinda2@gmail.com', 4, '2024-02-15 01:05:53', 1),
(55, '::1', 'dinda2@gmail.com', 4, '2024-02-15 01:09:14', 1),
(56, '::1', 'melda@gmail.com', 3, '2024-02-15 01:29:44', 1),
(57, '::1', 'dinda2@gmail.com', 4, '2024-02-20 05:46:17', 1),
(58, '::1', 'dinda2@gmail.com', 4, '2024-02-21 03:24:34', 1),
(59, '::1', 'sindiiaprilia@gmail.com', 5, '2024-02-21 05:02:36', 1),
(60, '::1', 'sindiiaprilia@gmail.com', 5, '2024-02-21 05:08:53', 1),
(61, '::1', 'sindii', NULL, '2024-02-23 00:56:12', 0),
(62, '::1', 'sindiiaprilia@gmail.com', 5, '2024-02-23 00:56:24', 1),
(63, '::1', 'sindii', NULL, '2024-02-27 00:54:23', 0),
(64, '::1', 'melda@gmail.com', 3, '2024-02-27 00:54:41', 1),
(65, '::1', 'melda@gmail.com', 3, '2024-02-27 01:24:13', 1),
(66, '::1', 'melda@gmail.com', 3, '2024-02-27 02:03:49', 1),
(67, '::1', 'melda', NULL, '2024-02-27 02:53:40', 0),
(68, '::1', 'melda@gmail.com', 3, '2024-02-27 02:53:50', 1),
(69, '::1', 'melda123', NULL, '2024-02-27 03:21:39', 0),
(70, '::1', 'dinda2@gmail.com', 4, '2024-02-27 03:23:55', 1),
(71, '::1', 'melda@gmail.com', 3, '2024-02-27 04:52:49', 1),
(72, '::1', 'dinda2@gmail.com', 4, '2024-02-27 04:53:08', 1),
(73, '::1', 'Haaimel123@gmail.com', 4, '2024-02-27 04:55:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'menu_pengguna', 'hanya untuk admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1707273221, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailpenjualan`
--

CREATE TABLE `tb_detailpenjualan` (
  `DetailID` int(11) NOT NULL,
  `PenjualanID` int(11) NOT NULL,
  `ProdukID` int(11) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `tb_detailpenjualan`
--
DELIMITER $$
CREATE TRIGGER `kurangStock` AFTER INSERT ON `tb_detailpenjualan` FOR EACH ROW UPDATE tb_produk SET stock = stock - NEW.jumlah_produk 
WHERE ProdukID = NEW.ProdukID
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `nambahStock` AFTER DELETE ON `tb_detailpenjualan` FOR EACH ROW UPDATE tb_produk SET stock = stock + OLD.jumlah_produk
WHERE ProdukID = OLD.ProdukID
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `nambahTotalHarga` AFTER INSERT ON `tb_detailpenjualan` FOR EACH ROW UPDATE tb_penjualan SET total_harga = total_harga + NEW.subtotal
WHERE PenjualanID = NEW.PenjualanID
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ngurangTotalHarga` AFTER DELETE ON `tb_detailpenjualan` FOR EACH ROW UPDATE tb_penjualan SET total_harga = total_harga - OLD.subtotal
WHERE PenjualanID = OLD.PenjualanID
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `PelangganID` int(11) NOT NULL,
  `nama_pelanggan` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`PelangganID`, `nama_pelanggan`, `alamat`, `nomor_telepon`) VALUES
(2, 'Melda', 'Jalaksana', '083145654321'),
(3, 'Sindi', 'cikadu', '085634296512'),
(4, 'Dendi', 'Margabakti', '089238743843'),
(5, 'Fauzi', 'Cigugur', '087364732322'),
(6, 'Nabil', 'Cilimus', '08439053433');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `PenjualanID` int(11) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `PelangganID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`PenjualanID`, `tanggal_penjualan`, `total_harga`, `PelangganID`) VALUES
(2, '2024-01-26', 0.00, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `ProdukID` int(11) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `harga_beli` decimal(10,2) NOT NULL,
  `harga_jual` decimal(10,2) NOT NULL,
  `stock` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`ProdukID`, `nama_produk`, `harga_beli`, `harga_jual`, `stock`) VALUES
(1, 'Pensil Joyko', 1000.00, 2000.00, '10'),
(2, 'Tip X', 1000.00, 1500.00, '20'),
(7, 'Buku Gelatik', 3000.00, 3200.00, '11'),
(8, 'Penggaris', 2000.00, 4000.00, '11'),
(9, 'Buku Sidu', 2000.00, 4000.00, '10'),
(10, 'Tepak Pensil', 4000.00, 5500.00, '12'),
(11, 'Pengapus', 2000.00, 2500.00, '10'),
(12, 'Kertas HVS', 200.00, 1000.00, '50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`email`, `nama`, `username`, `password`) VALUES
('dandi@gmail.com', 'dendi', 'ferdiana1012', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'melda@gmail.com', 'melda', '$2y$10$ySNM8xOlfG0o9QcxjQtNqOlVo4lU9Uma2ZGw7qw4jTb1yaHyzt7yC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-02-07 05:08:42', '2024-02-07 05:08:42', NULL),
(4, 'Haaimel123@gmail.com', 'Melda Egis Tiani', '$2y$10$Np98IXyvOWUZAHGfAkX8G.zdpatIhFkMmJxaHsVa5BHV02A.aZpX6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-02-07 05:51:41', '2024-02-07 05:51:41', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_detailpenjualan`
--
ALTER TABLE `tb_detailpenjualan`
  ADD PRIMARY KEY (`DetailID`),
  ADD KEY `PenjualanID` (`PenjualanID`),
  ADD KEY `ProdukID` (`ProdukID`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`PelangganID`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `PelangganID` (`PelangganID`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`ProdukID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_detailpenjualan`
--
ALTER TABLE `tb_detailpenjualan`
  MODIFY `DetailID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `PelangganID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `ProdukID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_detailpenjualan`
--
ALTER TABLE `tb_detailpenjualan`
  ADD CONSTRAINT `tb_detailpenjualan_ibfk_1` FOREIGN KEY (`PenjualanID`) REFERENCES `tb_penjualan` (`PenjualanID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detailpenjualan_ibfk_2` FOREIGN KEY (`ProdukID`) REFERENCES `tb_produk` (`ProdukID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`PelangganID`) REFERENCES `tb_pelanggan` (`PelangganID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
