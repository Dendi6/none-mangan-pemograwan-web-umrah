-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangan`
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
(1, 1);

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
(1, '::1', 'msitimarliana@gmail.com', NULL, '2021-01-07 06:23:13', 0),
(2, '::1', 'msitimarliana@gmail.com', NULL, '2021-01-07 06:23:33', 0),
(3, '::1', 'msitimarliana@gmail.com', 1, '2021-01-07 06:24:25', 1),
(4, '::1', 'msitimarliana@gmail.com', 1, '2021-01-13 01:07:41', 1),
(5, '::1', 'msitimarliana@gmail.com', 1, '2021-01-13 01:10:25', 1),
(6, '::1', 'msitimarliana@gmail.com', 1, '2021-01-13 09:28:49', 1),
(7, '::1', 'msitimarliana@gmail.com', 1, '2021-01-14 04:28:04', 1),
(8, '::1', 'msitimarliana@gmail.com', 1, '2021-01-14 09:40:48', 1),
(9, '::1', 'msitimarliana@gmail.com', 1, '2021-01-14 09:44:05', 1),
(10, '::1', 'msitimarliana@gmail.com', NULL, '2021-01-14 20:11:07', 0),
(11, '::1', 'msitimarliana@gmail.com', NULL, '2021-01-14 20:11:18', 0),
(12, '::1', 'msitimarliana@gmail.com', 1, '2021-01-14 20:12:11', 1);

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

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id_favorite`, `id_user`, `id_produk`, `created_at`, `updated_at`) VALUES
(20, 1, 9, '2021-01-06 23:46:24', '2021-01-06 23:46:24'),
(21, 1, 9, '2021-01-06 23:46:28', '2021-01-06 23:46:28'),
(22, 1, 9, '2021-01-06 23:47:54', '2021-01-06 23:47:54'),
(23, 1, 9, '2021-01-06 23:47:56', '2021-01-06 23:47:56'),
(24, 1, 9, '2021-01-06 23:48:18', '2021-01-06 23:48:18'),
(25, 1, 9, '2021-01-06 23:49:19', '2021-01-06 23:49:19'),
(26, 1, 9, '2021-01-12 20:32:58', '2021-01-12 20:32:58'),
(27, 1, 11, '2021-01-13 23:34:54', '2021-01-13 23:34:54'),
(28, 1, 23, '2021-01-14 01:33:53', '2021-01-14 01:33:53'),
(29, 1, 10, '2021-01-14 01:33:58', '2021-01-14 01:33:58');

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
(3, 'Natuna', '2021-01-04 04:32:24', '2021-01-06 22:42:34'),
(4, 'Karimun', '2021-01-14 14:05:11', '2021-01-14 14:05:11'),
(5, 'Anambas', '2021-01-14 14:05:11', '2021-01-14 14:05:11'),
(6, 'Lingga', '2021-01-14 14:05:11', '2021-01-14 14:05:11');

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
  `id` int(20) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `hargaOngkir` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id`, `kota`, `hargaOngkir`, `created_at`, `updated_at`) VALUES
(3, 'Tanjungpinang Timur', 5000, '2021-01-12 18:37:33', '2021-01-13 21:50:12'),
(4, 'Tanjungpinang Barat', 2000, '2021-01-13 21:50:01', '2021-01-13 21:50:01'),
(5, 'Kijang/Bintan', 10000, '2021-01-13 21:51:39', '2021-01-13 21:51:39'),
(6, 'Kawal/Bintan', 10000, '2021-01-13 21:52:11', '2021-01-13 21:52:11'),
(7, 'Tg.Uban/Bintan', 25000, '2021-01-13 21:52:38', '2021-01-13 21:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `key` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `bukti` varchar(250) NOT NULL,
  `status` enum('diproses','dikirim') NOT NULL,
  `totalHarga` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `key`, `nama`, `bukti`, `status`, `totalHarga`, `created_at`, `updated_at`) VALUES
(3, '1625930145', 'simar', '1610527866_afbdd0ad648498e7e2eb.jpg', 'dikirim', 47000, '2021-01-12 19:51:06', '2021-01-13 23:26:16'),
(4, '921973996', 'gi', '1610622829_b80aaed5ebaf83cedd0f.jpg', 'dikirim', 50000, '2021-01-13 22:13:49', '2021-01-13 23:20:00'),
(5, '1902329511', 'se', '1610629575_b07dccd1a49cbf12a762.jpg', 'diproses', 80000, '2021-01-14 00:06:15', '2021-01-14 00:06:15'),
(6, '1902329511', 'ses', '1610630489_84d162f0b5840fbd1d9a.jpg', 'diproses', 80000, '2021-01-14 00:21:29', '2021-01-14 00:21:29'),
(7, '1902329511', 'ses', '1610630612_5d1fd41239ff32cb7ef0.jpg', 'diproses', 80000, '2021-01-14 00:23:32', '2021-01-14 00:23:32'),
(8, '784703249', 'se', '1610632696_26feb927ca68fc30b11a.jpg', 'diproses', 45000, '2021-01-14 00:58:16', '2021-01-14 00:58:16'),
(9, '12490643', 'sim', '1610679071_36fae8ba818971f1107c.png', 'diproses', 25000, '2021-01-14 13:51:11', '2021-01-14 13:51:11');

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
(9, '1610023043_0aeb86db93eabc2b6cc2.jpg', 'Mie Lendir', 'djddjjjjjj', 1, 20000, 7, '2021-01-06 23:37:23', '2021-01-13 23:34:31'),
(10, '1610620183_2e4ff5ef6d987a9a6391.jpeg', 'Gonggong', 'Gonggong adalah sejenis kerang yang hanya bisa ditemukan di Pulau Sumatera,\r\nkhususnya di Tanjung Pinang. Bentuknya seperti siput, \r\ndengan cangkang berwarna putih.', 1, 25000, 1, '2021-01-13 21:29:43', '2021-01-14 01:33:58'),
(11, '1610620277_35786521c410d6716b44.jpg', 'Nasi Dagang', 'Olahan nasi dagang mirip seperti nasi uduk, \r\nnamun bumbunya dari santan, ditambah beragam jenis lauk dan sambal.\r\nNasi Dagang cocok untuk sarapan.', 1, 5000, 1, '2021-01-13 21:31:17', '2021-01-13 23:34:54'),
(12, '1610620482_fbd4d503189cf57ffbf3.jpg', 'Sop Ikan', 'Bahan dasar dari sop ini yaitu ikan, udang, cumi, bawang goreng, dan disajikan bersama kuah segar dengan bumbu khas dan irisan tomat hijau membuat Sop Ikan Batam begitu lezat ketika disantap, apalagi jika dihidangkan sewaktu masih hangat bersama nasi', 2, 18000, 0, '2021-01-13 21:34:42', '2021-01-13 21:34:42'),
(13, '1610620543_b9aed3c6306633ce8011.jpg', 'Kerapu Steam', 'Kerapu Steam adalah menu khas sebuah tempat makan bernama D’steam yang merupakan satu-satunya kultur kuliner masakan China dan Melayu di Batam.', 2, 20000, 0, '2021-01-13 21:35:43', '2021-01-13 21:35:43'),
(15, '1610620699_3507fcad5dc69bed3fe9.jpg', 'BakKutTeh', 'Bak Kut Teh atau rou gu cha adalah makanan yang lahir dari \r\nbudaya Tionghoa di selat Malaka, salah satunya yaitu di Batam.', 2, 30000, 0, '2021-01-13 21:38:19', '2021-01-13 21:38:19'),
(16, '1610620776_b701d664ac2ad4255959.jpg', 'Tabel Mando', 'Bahannya merupakan campuran dari berbagai makanan \r\nlaut seperti daging ikan tongkol, ikan tuna, kepiting, atau bahkan gurita.Setelahnya, dicampur dengan sagu butir dan kelapa muda parut yang gurih. Cara masaknya mirip dengan martabak, menggunakan se', 3, 10000, 0, '2021-01-13 21:39:36', '2021-01-13 21:39:36'),
(17, '1610620831_7fe9a2c51cd25175e7bc.jpg', 'Kernas', 'Kernas juga dibuat dari campuran ikan tongkol dan tuna segar yang dihaluskan serta dicampur sagu butir.Seringkali disebut sebagai Kasam, bentuknya mirip nugget. Berbentuk bulat kecil agak pipih dengan butiran sagu yang cukup banyak terlihat.', 3, 10000, 0, '2021-01-13 21:40:31', '2021-01-13 21:40:31'),
(18, '1610621054_30cbaea2026873eb0b62.jpg', 'Ikan Salai', 'Kuliner yang primadona di Natuna ini memakai bukan ikan sembarangan, melainkan ikan tongkol yang pengolahannya melalui proses pengasapan satu sampai dua jam untuk mendapatkan hasil ikan asap yang berkualitas baik.\r\n', 3, 25000, 0, '2021-01-13 21:44:14', '2021-01-13 21:44:14'),
(19, '1610633809_e6a3c9fac2ca81fc2234.jpg', 'Lendot', 'Olahan kangkung kemudian dicampur dengan melinjo dan daun pakis. Yang membuat Lendot unik dibandingkan makanan yang lainnya adalah kuahnya yang ditambah sagu.', 4, 10000, 0, '2021-01-14 01:16:49', '2021-01-14 01:16:49'),
(20, '1610633872_3bd6e6e174226b10c64c.jpg', 'Roti Kirai', 'Olahan dari roti ini konon berasal dar India. Maka tidak heran jika penyajiannya miri-mirip yakni adanya kuah kare dengan rasa yang gurih.', 4, 15000, 0, '2021-01-14 01:17:52', '2021-01-14 01:17:52'),
(21, '1610634082_a00f66b6fb381a61189a.jpg', 'Mie SiamKuning', 'Mie ini menjadi makanan favorit bagi masyarakat yang tinggal di Kepulauan Riau. Sesuai namanya, mie ini memiliki tampilan kuning karena terbuat dari mie kuning.', 4, 12000, 0, '2021-01-14 01:21:22', '2021-01-14 01:21:22'),
(22, '1610634267_f545e42b0624e16f5c1d.jpg', 'Lakse', 'Istilah lakse berasal dari bahasa sansekerta yang berati banyak. Tak heran, Lakse ini dimasak dengan menggunakan banyak bumbu dan racikan rempah. Laskse merupakan olahan sejenis mie yang diracik dengan campuran bumbu khas Melayu dan Tionghoa. Sajian ', 5, 20000, 0, '2021-01-14 01:24:27', '2021-01-14 01:24:27'),
(23, '1610634330_29debf10fb11c46a712e.jpg', 'Mie Tarempa', 'Mie Tarempa menjadi salah satu ikon kuliner di kota Tarempa yang wajib dicoba jika anda bertandang ke Anambas. Mie kuning yang berasal dari campuran tepung dan telur ini terlihat begitu menggoda dengan irisan tongkol dan sawi.', 5, 15000, 1, '2021-01-14 01:25:30', '2021-01-14 01:33:53'),
(24, '1610634419_399c74476c12b5ec07e8.jpg', 'Mie Sagu', 'Mie yang berwarna abu-abu kehitaman ini dipadukan \r\ndengan potongan tuna dan bumbu-bumbu rempah lainnya. Terbuat dari sagu membuat tekstur mie sagu ini terasa kenyal dan membuat kita ingin menyendok lagi dan lagi.', 5, 13000, 0, '2021-01-14 01:26:59', '2021-01-14 01:26:59'),
(25, '1610634690_79e1602ba85d68b83fee.jpg', 'Gubal Sagu', 'Gubal sagui terbuat dari sagu basah dan dimakan bersama gulai ikan. Biasanya gubal dijadikan sebagai penganti nasi.', 6, 10000, 0, '2021-01-14 01:31:30', '2021-01-14 01:31:30'),
(26, '1610634744_01d41eeca9210d58e5c1.jpg', 'Bubur Lambok', 'Bubur lambok terbuat dari sagu yang dimasak bersama ikan teri dan sayur-sayuran seperti daun cekor, selasih, kangkung, cekor manis, daun kunyit, daun kacang, daun paku, dan sebagainya.', 6, 7000, 0, '2021-01-14 01:32:24', '2021-01-14 01:32:24'),
(27, '1610634787_e7597646fdca516ec78a.jpg', 'Kepurun', 'Kepurun diolah dari tepung sagu yang dimasak menggunakan air dengan api kecil adapun bahan-bahannya adalah sagu basah, asam, lada kecil, dan ikan teri. Setelah masak, bentuknya seperti ongol-ongol.', 6, 10000, 0, '2021-01-14 01:33:07', '2021-01-14 01:33:07');

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
  `id_ongkir` int(11) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `key`, `id_produk`, `id_user`, `jumlah_pesanan`, `id_ongkir`, `alamat`, `created_at`, `updated_at`) VALUES
(4, '1551349107', 9, 1, 2, 3, 'hvghvg', '2021-01-12 19:14:29', '2021-01-12 19:14:29'),
(5, '1625930145', 9, 1, 2, 3, 'jjjjjjja', '2021-01-12 19:32:07', '2021-01-12 19:32:07'),
(6, '388102162', 9, 1, 2, 3, 'dddd', '2021-01-12 20:32:13', '2021-01-12 20:32:13'),
(7, '921973996', 9, 1, 2, 5, 'nnnnnnn', '2021-01-13 22:13:34', '2021-01-13 22:13:34'),
(8, '1902329511', 10, 1, 3, 3, 'wwwww', '2021-01-14 00:06:02', '2021-01-14 00:06:02'),
(9, '784703249', 9, 1, 2, 3, 'ssss', '2021-01-14 00:58:01', '2021-01-14 00:58:01'),
(10, '12490643', 9, 1, 1, 3, 'asss', '2021-01-14 13:50:49', '2021-01-14 13:50:49');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'msitimarliana@gmail.com', 'simar', '$2y$10$hs8yojD8Ro/DL8afdUy9bOOpMEBCQ//d9/.S/pW7tg7NYUOdot8EO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-07 04:51:17', '2021-01-07 04:51:17', NULL);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id_favorite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
