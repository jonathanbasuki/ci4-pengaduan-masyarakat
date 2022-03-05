-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 07:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `16_pengaduan`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Role Administrator'),
(2, 'petugas', 'Role Petugas'),
(3, 'user', 'Role User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 3),
(3, 10);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-14 22:26:52', 1),
(2, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-14 22:29:14', 1),
(3, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-15 08:55:55', 1),
(4, '::1', 'admin', NULL, '2022-02-15 09:02:45', 0),
(5, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-15 09:19:29', 1),
(6, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-15 17:54:45', 1),
(7, '::1', 'admin', NULL, '2022-02-15 20:18:43', 0),
(8, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-15 20:18:55', 1),
(9, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-15 21:00:44', 1),
(10, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-15 21:06:17', 1),
(11, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-15 22:31:58', 1),
(12, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-15 22:43:56', 1),
(13, '::1', 'admin', NULL, '2022-02-16 17:47:58', 0),
(14, '::1', 'admin', NULL, '2022-02-16 17:50:32', 0),
(15, '::1', 'admina', NULL, '2022-02-16 17:50:57', 0),
(16, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-16 17:51:20', 1),
(17, '::1', 'admin', NULL, '2022-02-16 17:52:18', 0),
(18, '::1', 'adminasd', NULL, '2022-02-16 17:53:18', 0),
(19, '::1', 'adminn', NULL, '2022-02-16 17:54:04', 0),
(20, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-16 17:55:02', 1),
(21, '::1', 'jonathanbasuki', NULL, '2022-02-16 17:56:58', 0),
(22, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-16 17:57:10', 1),
(23, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-16 18:10:43', 1),
(24, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-16 19:46:58', 1),
(25, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-16 19:48:00', 1),
(26, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-16 19:55:39', 1),
(27, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-16 19:56:36', 1),
(28, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-16 20:59:37', 1),
(29, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-16 21:13:28', 1),
(30, '::1', 'petugas@pengaduanmasyarakat.org', 3, '2022-02-16 21:51:49', 1),
(31, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-16 22:18:51', 1),
(32, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-16 22:30:53', 1),
(33, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-16 22:34:58', 1),
(34, '::1', 'petugas@pengaduanmasyarakat.org', 3, '2022-02-16 22:38:32', 1),
(35, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-16 22:48:10', 1),
(36, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-16 23:09:07', 1),
(37, '::1', 'petugas@pengaduanmasyarakat.org', 3, '2022-02-16 23:13:09', 1),
(38, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-16 23:13:53', 1),
(39, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-17 06:02:11', 1),
(40, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-17 06:53:35', 1),
(41, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-17 06:59:02', 1),
(42, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-17 10:06:52', 1),
(43, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-17 10:15:56', 1),
(44, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-17 10:24:24', 1),
(45, '::1', 'petugas@pengaduanmasyarakat.org', 3, '2022-02-17 11:45:31', 1),
(46, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-17 12:14:12', 1),
(47, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-17 12:22:51', 1),
(48, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-17 12:24:03', 1),
(49, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-17 12:33:04', 1),
(50, '::1', 'admin@pengaduanmasyarakat.org', 1, '2022-02-20 18:04:21', 1),
(51, '::1', 'petugas@pengaduanmasyarakat.org', 3, '2022-02-20 18:05:14', 1),
(52, '::1', 'basukijonathan4@gmail.com', 10, '2022-02-20 18:05:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1644898477, 1),
(2, '2022-02-15-002700', 'App\\Database\\Migrations\\CreatePengaduanTable', 'default', 'App', 1644898483, 2),
(3, '2022-02-15-002710', 'App\\Database\\Migrations\\CreateTanggapanTable', 'default', 'App', 1644898483, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nik` char(16) NOT NULL,
  `laporan` text NOT NULL,
  `foto` text NOT NULL,
  `status` enum('Belum Diproses','Diproses','Selesai') NOT NULL DEFAULT 'Belum Diproses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `tanggal`, `nik`, `laporan`, `foto`, `status`) VALUES
(3, '2022-02-17', '3173081412570002', 'ADA KUCING NYANGKUT DI GENTENG ', '1645056601_2df9e72c09d571ece6e1.png', 'Selesai'),
(4, '2022-02-17', '3173081412570002', 'Dompet saya hilang', '1645062970_d3fd68b670ce8b45df40.png', 'Selesai'),
(5, '2022-02-17', '3173081412570002', 'Ada mobil mogok', '1645072378_e64a7176f6ea52494342.png', 'Selesai'),
(7, '2022-02-17', '3173081412570002', 'Ada tiang roboh pak', '1645101595_6745e0a21e2a85697fb5.png', 'Diproses'),
(8, '2022-02-18', '3173081412570002', 'Ada ular dalam rumah', '1645121981_72e96b1c4b1b4739dc91.png', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_pengaduan` int(11) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id`, `id_pengaduan`, `tanggal`, `tanggapan`, `id_petugas`) VALUES
(1, 3, '2022-02-17', 'Kucingnya udah diturunin', 1),
(2, 4, '2022-02-17', 'Dompet gagal ditemukan', 3),
(3, 5, '2022-02-17', 'Udah diangkut', 3),
(4, 8, '2022-02-18', 'Ular sudah di evakuasi keluar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `nik` char(16) DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `nik`, `nama`, `telp`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@pengaduanmasyarakat.org', 'admin', NULL, 'Administrator', NULL, '$2y$10$E9hn7WV/dy2ZFNNbDdYi1Ofo5myQU/5z48ONNnnYpeVxo5KVApLPS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-14 22:20:08', NULL, NULL),
(3, 'petugas@pengaduanmasyarakat.org', 'petugas', NULL, 'Petugas', '081819312341', '$2y$10$VhfWF.Q594d5ZoqNq/bJxuphvaDPW//S9kmPLcnxF.Mt.bh2LYD5u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-15 18:11:06', '2022-02-15 18:11:06', NULL),
(10, 'basukijonathan4@gmail.com', 'jonathanbasuki', '3173081412570002', 'Jonathan Christoper Basuki', NULL, '$2y$10$DFslsIsSLdN7BrfPIqMdleZUQXj2mi/xMo.vfZ5BIRk4PH8Exa32W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-15 21:00:14', '2022-02-15 21:00:14', NULL);

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
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengaduan_nik_foreign` (`nik`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tanggapan_id_pengaduan_foreign` (`id_pengaduan`),
  ADD KEY `tanggapan_id_petugas_foreign` (`id_petugas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `nik` (`nik`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `users` (`nik`) ON UPDATE CASCADE;

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_id_pengaduan_foreign` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tanggapan_id_petugas_foreign` FOREIGN KEY (`id_petugas`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
