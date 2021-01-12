-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 10:17 AM
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
-- Database: `none`
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
(1, 'admin', 'mengatur semuanya'),
(2, 'user', 'mengatur acun saja');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2);

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
(2, 2),
(2, 3),
(2, 4);

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
(1, '::1', 'mdendi6@gmail.com', 1, '2021-01-05 21:58:43', 0),
(2, '::1', 'mdendi6@gmail.com', 1, '2021-01-05 22:01:29', 0),
(3, '::1', 'mdendi6@gmail.com', 1, '2021-01-05 22:02:58', 0),
(4, '::1', 'mdendi6@gmail.com', 1, '2021-01-05 22:05:03', 1),
(5, '::1', 'mdendi6@gmail.com', 1, '2021-01-05 22:05:49', 1),
(6, '::1', 'mdendi6@gmail.com', 1, '2021-01-05 22:06:55', 1),
(7, '::1', 'mdendi6@gmail.com', 1, '2021-01-05 22:07:08', 1),
(8, '::1', 'mdendi6@gmail.com', 1, '2021-01-05 22:59:55', 1),
(9, '::1', 'mdendi6@gmail.com', 1, '2021-01-06 00:05:52', 1),
(10, '::1', 'mdendi6@gmail.com', 1, '2021-01-06 00:14:43', 1),
(11, '::1', 'simar@gmail.com', 2, '2021-01-06 00:23:16', 1),
(12, '::1', 'mdendi6@gmail.com', 1, '2021-01-06 00:23:51', 1),
(13, '::1', 'simar@gmail.com', 2, '2021-01-06 00:38:07', 1),
(14, '::1', 'mdendi6@gmail.com', 1, '2021-01-06 00:40:04', 1),
(15, '::1', 'mdendi6@gmail.com', 1, '2021-01-06 01:04:47', 1),
(16, '::1', 'simar@gmail.com', 2, '2021-01-06 01:05:27', 1),
(17, '::1', 'simar@gmail.com', 2, '2021-01-06 02:16:06', 1),
(18, '::1', 'mdendi6@gmail.com', 1, '2021-01-06 02:30:59', 1),
(19, '::1', 'simar@gmail.com', 2, '2021-01-06 02:34:32', 1),
(20, '::1', 'mdendi6@gmail.com', 1, '2021-01-06 02:35:49', 1),
(21, '::1', 'simar@gmail.com', 2, '2021-01-06 03:55:28', 1),
(22, '::1', 'simar@gmail.com', 2, '2021-01-06 03:57:49', 1),
(23, '::1', 'mdendi6@gmail.com', 1, '2021-01-06 07:38:50', 1),
(24, '::1', 'mdendi6@gmail.com', 1, '2021-01-06 10:48:13', 1),
(25, '::1', 'rezazulfan13@gmail.com', NULL, '2021-01-06 11:23:18', 0),
(26, '::1', 'rezazulfan13@gmail.com', NULL, '2021-01-06 11:23:38', 0),
(27, '::1', 'rezazulfan13@gmail.com', NULL, '2021-01-06 11:24:00', 0),
(28, '::1', 'rezazulfan7@gmail.com', 4, '2021-01-06 11:25:39', 1),
(29, '::1', 'mdendi6@gmail.com', 1, '2021-01-06 12:06:25', 1),
(30, '::1', 'mdendi6@gmail.com', 1, '2021-01-08 04:13:50', 1),
(31, '::1', 'mdendi6@gmail.com', 1, '2021-01-08 04:52:47', 1),
(32, '::1', 'rijal@gmail.com', 4, '2021-01-08 05:24:36', 1),
(33, '::1', 'mdendi6@gmail.com', 1, '2021-01-08 05:26:39', 1),
(34, '::1', 'rijal@gmail.com', 4, '2021-01-08 05:27:35', 1),
(35, '::1', 'mdendi6@gmail.com', 1, '2021-01-08 05:30:59', 1),
(36, '::1', 'mdendi6@gmail.com', 1, '2021-01-10 11:54:58', 1),
(37, '::1', 'mdendi6@gmail.com', 1, '2021-01-10 13:12:48', 1),
(38, '::1', 'mdendi6@gmail.com', 1, '2021-01-11 00:27:28', 1),
(39, '::1', 'mdendi6@gmail.com', 1, '2021-01-11 04:34:29', 1),
(40, '::1', 'alenaup7@gmail.com', NULL, '2021-01-12 01:09:00', 0),
(41, '::1', 'alenaup7@gmail.com', 4, '2021-01-12 01:09:56', 1),
(42, '::1', 'mdendi6@gmail.com', 1, '2021-01-12 01:13:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'admin', 'bisa akses semuanya'),
(2, 'user', 'hanya akses beberapa');

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
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id_favorite` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `created_at`, `updated_at`) VALUES
(1, 'Tanjungpinang', '2021-01-03 16:24:44', '2021-01-03 16:24:44'),
(2, 'Batam', '2021-01-03 16:40:53', '2021-01-03 16:51:12'),
(3, 'Lingga', '2021-01-04 04:32:24', '2021-01-04 04:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1609860706, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id` int(11) NOT NULL,
  `kota` varchar(250) NOT NULL,
  `ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id`, `kota`, `ongkir`) VALUES
(1, 'Tanjunpinang', 10000),
(2, 'Bintan', 30000),
(3, 'Batam', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `key` varchar(250) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `bukti` varchar(250) NOT NULL,
  `status` enum('diproses','dikirim') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `sampul` varchar(250) NOT NULL,
  `nama_produk` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `kota_asal` int(11) NOT NULL,
  `harga` int(100) NOT NULL,
  `jumlah_suka` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `sampul`, `nama_produk`, `deskripsi`, `kota_asal`, `harga`, `jumlah_suka`, `created_at`, `updated_at`) VALUES
(1, '1609781731_932d707fb92d264a0071.jpg', 'Luti Gendang', 'Luti gendang merupakan kue yang di buat dengan bahan dasar tepung. Kue ini memiliki dalaman yang berupa isi sambal yang di haluskan dengan komposisi, kelapa dan ikan.', 1, 50000, 6, '2021-01-04 04:35:31', '2021-01-11 18:19:01'),
(2, '1609782318_7c7f4641a80e931337ea.jpg', 'Kek Pisang Villa', 'Pelopor dari oleh-oleh batam. Kek Pisang Pilla bisa di nikmati dengan harga yang murah. Rasa kelas VIP, selamat mencoba.', 2, 35000, 2, '2021-01-04 04:45:18', '2021-01-05 21:28:11'),
(3, '1609813227_5a2a4fc9ded980ee1c13.jpg', 'Tepung Gomak', 'Tepung Gomak adalah oleh oleh berupa kue. komposisi dari oleh oleh ini adalah tepung, mentega, gula.', 1, 5000, 7, '2021-01-04 13:20:27', '2021-01-07 22:25:06'),
(4, '1609829265_d1d2ea8435b28301c51c.jpg', 'Gubal Sagu', 'Merupakan Makanan Khas Kabupaten lingga, Gubal terbuat dari sagu, memiliki tekstur kenyal dan mudah di makan', 3, 30000, 3, '2021-01-04 17:47:45', '2021-01-10 21:46:09'),
(9, '1610365987_a6f3d2ae9708ecec6c53.jpg', 'Deram deram', 'Deram-deram direkomendasikan menjadi oleh-oleh khas Tanjung Pinang sebab bisa tahan lama sehingga tidak cepat basi. Cocok dibawa saat perjalanan jauh pulang ke rumah. Anda bisa mendapatkan kue ini di toko swalayan ataupun warung kelontong kecil di pi', 1, 10000, 0, '2021-01-10 22:53:08', '2021-01-10 22:53:08'),
(10, '1610366039_789fe2152abbd14c7e77.jpg', 'Otak-otak', 'Jajanan otak-otak memang sudah menyebar luas di kalangan masyarakat. Akan tetapi, tanjung pinang memiliki varian otak-otak yang cukup berbeda dari tempat lain. Jajanan ini terbuat dari daging ikan tenggiri yang telah dicincang dan dihaluskan lalu dib', 1, 5000, 2, '2021-01-10 22:53:59', '2021-01-11 19:40:42'),
(11, '1610366117_95285efd566e54ed36b2.jpg', 'Bingke Pandan', 'Jajanan tradisional satu ini tidak boleh dilewatkan begitu saja. Bingke pandan biasanya berbentuk bundar atau seperti mangkok yang pinggirannya berbentuk cekung. Kue khas Tanjung Pinang ini memiliki rasa manis dan bau harum dari pandan. Harganya pun ', 1, 15000, 0, '2021-01-10 22:55:17', '2021-01-10 22:55:17'),
(12, '1610366334_ebe766724da31c970c1b.jpg', 'Kek Buah Naga', 'Selain rasa original, kek buah naga asal Batam pun ada yang diberi sentuhan rasa cokelat, keju, blueberry, strawberry, moka, dan rasa lainnya. Untuk mendapatkan kek buah naga ini cukup mudah. Kamu bisa menemukan counter-nya di bandara maupun pelabuha', 2, 80000, 0, '2021-01-10 22:58:54', '2021-01-10 22:58:54'),
(13, '1610366389_4a57049e9423b9ddf850.jpg', 'Brownis Lava', 'Brownies lava yang menjadi oleh-oleh khas Batam ternyata berbeda dengan brownies lain yang dijual pada umumnya. Ya, dinamakan brownies lava karena memang brownies yng dibakar tersebut memiliki isian di dalamnya sehingga disebut lava.', 2, 150000, 0, '2021-01-10 22:59:49', '2021-01-10 22:59:49'),
(14, '1610366464_e932e8e71ceb8dbe4fc8.jpg', 'Ogura Cake', 'Ogura cake dibuat dengan teknik hot water bath atau au bain marie. Loyang berisi adonan kue dialasi dengan loyang yang berukuran lebih besar dan berisi air hangat. Karena itulah cake ini bisa sangat fluffy.', 2, 50000, 0, '2021-01-10 23:01:04', '2021-01-10 23:01:04'),
(15, '1610366742_723773e3f397377e8e6d.jpg', 'Bubur Lambok', 'Makanan Khas Daik Lingga selanjutnya adalah Bubur Lambok. Sayang rasanya bula saat kalian berkunjung ke Daik Lingga tanpa mencicipi bubur lambok yang lezat. Bubur lambok terbuat dari sagu yang dimasak bersama ikan teri dan sayur-sayuran seperti daun ', 3, 15000, 0, '2021-01-10 23:05:43', '2021-01-10 23:05:43'),
(16, '1610366788_4e64eaa74c7357e40c0f.jpg', 'Lendot', 'Lendot merupakan makanan khas Daik Lingga yang hampir mirip dengan bubur lambok. Lendot disajikan dengan dipenuhi sayur kangkung dan daun pakis yang banyak. Teksturnya cenderung kental dengan campuran yang lebih beragam dengan makanan laut seperti ud', 3, 10000, 0, '2021-01-10 23:06:28', '2021-01-10 23:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `key` varchar(15) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `sampul` varchar(250) NOT NULL DEFAULT 'default.jpg',
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

INSERT INTO `users` (`id`, `email`, `username`, `sampul`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'mdendi6@gmail.com', 'Dendi', 'default.jpg', '$2y$10$D4BqHp6Fxyyas1tG3VM3HeYdR7j7LhTgD2bDz/qbGzTVueMxwQUdS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-05 22:04:52', '2021-01-05 22:04:52', NULL),
(2, 'simar@gmail.com', 'simar', 'default.jpg', '$2y$10$4Z3lfv4NT0FQGdUyrSlGYuVy0G.6B/6Tbsnr5K9AZQYcAnuDy3qka', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-06 00:23:05', '2021-01-06 00:23:05', NULL),
(3, 'rezazulfan13@gmail.com', 'Reza', 'default.jpg', '$2y$10$yE0RvWpOksX6X7W9BS0.buT2jmHknisXc2ap41n0LmgXZfTujzYW6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-06 11:23:03', '2021-01-06 11:23:03', NULL),
(4, 'alenaup7@gmail.com', 'alena Uperianti', 'default.jpg', '$2y$10$lJyszXm4XtLdwuGjIsob/.mWFV8kWEFmipTjeOzE/QOofgfasFlpO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-12 01:08:38', '2021-01-12 01:08:38', NULL);

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
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id_favorite`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keyview` (`key`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota` (`kota_asal`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `key` (`key`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ongkir` (`id_ongkir`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id_favorite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `keyview` FOREIGN KEY (`key`) REFERENCES `transaksi` (`key`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kota` FOREIGN KEY (`kota_asal`) REFERENCES `kota` (`id_kota`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_ongkir` FOREIGN KEY (`id_ongkir`) REFERENCES `ongkir` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
