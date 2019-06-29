-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 05:53 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `biss`
--

CREATE TABLE `biss` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_po` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_small` int(11) NOT NULL,
  `harga_large` int(99) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biss`
--

INSERT INTO `biss` (`id`, `nama_po`, `harga_small`, `harga_large`, `created_at`, `updated_at`) VALUES
(3, 'jaya', 10000, 20000, NULL, NULL),
(4, 'aneka', 80000, 30000, NULL, NULL),
(7, 'sumber rejeki', 10000, 20000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanans`
--

CREATE TABLE `detail_pemesanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pemesanan` int(10) UNSIGNED NOT NULL,
  `id_wisata` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_pemesanans`
--

INSERT INTO `detail_pemesanans` (`id`, `id_pemesanan`, `id_wisata`, `created_at`, `updated_at`) VALUES
(1, 1, 6, NULL, NULL),
(2, 1, 7, NULL, NULL),
(7, 2, 7, NULL, NULL),
(8, 4, 7, '2019-01-02 08:41:19', '2019-01-02 08:41:19'),
(9, 4, 7, '2019-01-02 08:41:19', '2019-01-02 08:41:19'),
(10, 4, 7, '2019-01-02 08:41:19', '2019-01-02 08:41:19'),
(11, 4, 7, '2019-01-02 08:41:20', '2019-01-02 08:41:20'),
(12, 5, 6, '2019-01-30 21:31:28', '2019-01-30 21:31:28'),
(13, 6, 8, '2019-06-25 07:38:06', '2019-06-25 07:38:06'),
(14, 7, 8, '2019-06-25 21:06:54', '2019-06-25 21:06:54'),
(15, 7, 9, '2019-06-25 21:06:54', '2019-06-25 21:06:54'),
(16, 8, 9, '2019-06-26 03:42:32', '2019-06-26 03:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(99) UNSIGNED NOT NULL,
  `bintang_hotel` int(99) NOT NULL,
  `harga` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `nama`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES
(6, 'alemn', 'dsadsa42432', '534534', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayarans`
--

CREATE TABLE `konfirmasi_pembayarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pemesanan_paket` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konfirmasi_pembayarans`
--

INSERT INTO `konfirmasi_pembayarans` (`id`, `id_pemesanan_paket`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'Tulips.jpg', '2', NULL, NULL),
(4, 2, 'Lighthouse.jpg', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pemesanans`
--

CREATE TABLE `konfirmasi_pemesanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pemesanan` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konfirmasi_pemesanans`
--

INSERT INTO `konfirmasi_pemesanans` (`id`, `id_pemesanan`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'struk/LD1QTOlCdTgV2SkSTtlk0wmnfoAzZYJiFFUqT5G0.png', '1', '2019-06-25 09:52:59', '2019-06-25 09:54:12'),
(2, 7, 'struk/AXCLvQqHWOug8pORinEaILM0Ch138oCLzRJRIjwf.png', '1', '2019-06-25 21:08:43', '2019-06-25 21:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `kotas`
--

CREATE TABLE `kotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kotas`
--

INSERT INTO `kotas` (`id`, `nama_kota`, `provinsi`, `created_at`, `updated_at`) VALUES
(1, 'surabaya', 'jawa timur', NULL, NULL),
(2, 'jakarta', 'DKI jakarta', NULL, NULL),
(3, 'malang', 'jawa timur', NULL, NULL),
(4, 'jogjakarta', 'DIY', NULL, NULL),
(5, 'bandung', 'jawa barat', NULL, NULL),
(6, 'bali', 'bali', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_11_10_165300_create_paket_tours_table', 1),
(3, '2018_11_10_165302_create_pelanggans_table', 1),
(4, '2018_11_10_165303_create_karyawans_table', 1),
(6, '2018_11_10_165322_create_detail_paket_tours_table', 1),
(7, '2018_11_27_154223_create_password_resets_table', 2),
(8, '2018_11_27_154247_create_users_table', 3),
(9, '2018_11_27_155115_create_password_resets_table', 4),
(10, '2018_11_27_155129_create_users_table', 4),
(11, '2018_12_02_202816_create_kotas_table', 5),
(12, '2018_12_02_203831_create_biss_table', 5),
(15, '2018_12_02_205828_create_konfirmasi_biss_table', 8),
(18, '2018_11_27_155130_create_users_table', 10),
(19, '2018_11_27_155131_create_users_table', 11),
(22, '2018_12_02_202817_create_kotas_table', 14),
(23, '2018_12_04_103330_create_tempat_wisatas_table', 15),
(24, '2018_12_04_103331_create_tempat_wisatas_table', 16),
(25, '2018_12_04_104310_create_trayeks_table', 17),
(29, '2018_11_10_165310_create_paket_tours_table', 21),
(30, '2018_11_10_165311_create_paket_tours_table', 22),
(36, '2015_01_15_105324_create_roles_table', 24),
(37, '2015_01_15_114412_create_role_user_table', 24),
(38, '2015_01_26_115212_create_permissions_table', 24),
(39, '2015_01_26_115523_create_permission_role_table', 24),
(40, '2015_02_09_132439_create_permission_user_table', 24),
(41, '2018_12_21_152540_create_permission_tables', 25),
(43, '2018_12_14_221858_create_pemesanan_paket_tours_table', 27),
(44, '2018_12_15_212437_create_konfirmasi_pembayarans_table', 27),
(47, '2018_12_26_14333_create_konfirmasi_pembayarans_table', 29),
(49, '2018_12_26_144333_create_pemesanans_table', 30),
(50, '2018_12_26_144334_create_detail_pemesanans_table', 30),
(51, '2018_12_26_144335_create_konfirmasi_pemesanans_table', 30),
(52, '2019_01_02_064038_create_notifications_table', 31);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(99) UNSIGNED NOT NULL,
  `harga_mobil` int(99) NOT NULL,
  `nama_mobil` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paket_tours`
--

CREATE TABLE `paket_tours` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_tours`
--

INSERT INTO `paket_tours` (`id`, `nama_tour`, `harga`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Paket 1', 34324, 'Bodong1.PNG', '<p><strong>Tempat Wisata</strong> :&nbsp; - pabrk - pantai<br />\r\n<strong>Fasilitas</strong> : - Hotel (inap 3hari, makan 3x)<br />\r\n<strong>Person : 46 Orang</strong></p>', NULL, NULL),
(7, 'paket99', 600000, 'Bodong6.PNG', '<p><strong>Tempat Wisata</strong> : goa, pantai, malioboro, gunung,<br />\r\n<strong>Hotel</strong> : hotel tentrem<br />\r\n<strong>Fasilitas</strong> : Makan 3x</p>', NULL, NULL),
(8, 'Paket 10', 100000, 'Koala.jpg', '<p><strong>Tempat Wisata</strong> : - Malioboro - Benteng<br />\r\n<strong>Fasilitas</strong> : - Hotel (inap 3hari, makan 3x)<br />\r\n<strong>Person : 30 Orang</strong></p>', NULL, NULL),
(9, 'paket 11', 900000, 'Penguins.jpg', '<p><strong>Tempat Wisata</strong> : - Goa Pindul \r\n                                    - pantai \r\n<br>\r\n<strong>Fasilitas</strong> : - Hotel (inap 3hari, makan 3x)\r\n<br>\r\n<strong>Person : 30 Orang</strong></p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `nama_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_orang` int(11) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `id_bis` int(10) UNSIGNED DEFAULT NULL,
  `id_mobil` int(99) UNSIGNED DEFAULT NULL,
  `tgl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_hotel` int(99) UNSIGNED DEFAULT NULL,
  `jumlah_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `id_user`, `nama_pelanggan`, `alamat`, `no_telp`, `jumlah_orang`, `id_kota`, `id_bis`, `id_mobil`, `tgl`, `id_hotel`, `jumlah_total`, `created_at`, `updated_at`) VALUES
(1, 10, NULL, NULL, NULL, 61, 1, 4, NULL, '12', NULL, NULL, NULL, NULL),
(2, 10, NULL, NULL, NULL, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, 100, 6, 4, NULL, '1/9/2019', NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, 100, 6, NULL, NULL, '1/9/2019', NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, 10, 5, 3, NULL, '1/1/2019', NULL, NULL, NULL, '2019-06-27 05:51:01'),
(6, 11, 'bayu', 'sumoroto', '432432432', 56, 1, 3, NULL, '6/26/2019', NULL, NULL, '2019-06-25 07:38:06', '2019-06-25 09:52:59'),
(7, 12, 'alen alvero', 'ponorog', '4354365654', 40, 1, 3, NULL, '6/26/2019', NULL, NULL, '2019-06-25 21:06:53', '2019-06-26 03:22:48'),
(8, 12, NULL, NULL, NULL, 79, 1, 3, NULL, '6/27/2019', NULL, NULL, '2019-06-26 03:42:32', '2019-06-27 05:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_paket_tours`
--

CREATE TABLE `pemesanan_paket_tours` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama_pelanggan_paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paket` int(10) UNSIGNED DEFAULT NULL,
  `tgl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanan_paket_tours`
--

INSERT INTO `pemesanan_paket_tours` (`id`, `id_user`, `nama_pelanggan_paket`, `alamat`, `no_telp`, `id_paket`, `tgl`, `created_at`, `updated_at`) VALUES
(1, 10, 'Allen Alvero', 'jalan s.parman 50 ponorogo', '081252017566', 1, '12/12/2009', NULL, NULL),
(2, 10, 'dadasdas', 'dsads', '424', 1, '4', NULL, NULL),
(7, 10, 'dsadsa', 'dsads', '21321', 1, '12/25/2018', NULL, NULL),
(13, 10, 'alen', 'ponorogo', '1212', 1, '1/24/2019', '2019-01-02 07:18:20', '2019-01-02 07:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisatas`
--

CREATE TABLE `tempat_wisatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kota` int(10) UNSIGNED DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tempat_wisatas`
--

INSERT INTO `tempat_wisatas` (`id`, `nama`, `id_kota`, `harga`, `created_at`, `updated_at`) VALUES
(6, 'WTS', 5, 100001, NULL, NULL),
(7, 'pantai kuta', 6, 100000, NULL, NULL),
(8, 'dsadsadas', 1, 424242, NULL, NULL),
(9, 'rungkut', 1, 160000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trayeks`
--

CREATE TABLE `trayeks` (
  `id` int(10) UNSIGNED NOT NULL,
  `asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kota` int(10) UNSIGNED DEFAULT NULL,
  `id_tempat_wisata` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trayeks`
--

INSERT INTO `trayeks` (`id`, `asal`, `id_kota`, `id_tempat_wisata`, `created_at`, `updated_at`) VALUES
(1, 'Ponorogo', 5, 6, NULL, NULL),
(2, 'Ponorogo', 5, 6, NULL, NULL),
(3, 'ponorogo', 5, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'dsadadssa', 'sadsdsa', '$2y$10$OcH/MWlnOeM.JLfIsjzXH.PqID17aBD/mKzN7Gv5q0j6DUTTMkply', 'admin', NULL, '2018-12-05 09:11:52', '2018-12-05 09:11:52'),
(5, 'admin', 'admin@yahoo.com', '$2y$10$hjVNnY28/AvHmzrPE2nj7.uSG6EOH.soIx5GsF2qpacSLfunN4d8W', 'admin', 'mKqKnt2LoE2iT9NHYYyyuI1LR3MuVbg7FBtGclzwRSpiEs0D84fSW5x84AeJ', '2018-12-14 11:53:07', '2018-12-14 11:53:07'),
(6, 'dsaadasd', 'sadsad', '$2y$10$AOo5i.rNq4SQtMaij8u0Ke6Lv5tj3ZAeCLglkw.cZQidzWNB1cBd2', 'user', NULL, '2018-12-16 20:05:55', '2018-12-16 20:05:55'),
(7, 'dsada', 'sdadasd', '$2y$10$D0DD9t3mB6FY/hlKSFer3ew0w3Zh/2w/7sRwNSSt8hraZNZpNV.uK', 'admin', NULL, '2018-12-16 20:07:26', '2018-12-16 20:07:26'),
(9, 'cxzczczxCXZC', 'CXZCZXC', '$2y$10$qvhLY.OJhbcxx.TFWNadSu.oHXTREy6SdXIocB87ZnGroDmdVEP3C', 'admin', NULL, '2018-12-16 20:09:26', '2018-12-16 20:09:26'),
(10, 'operator', 'operator@yahoo.com', '$2y$10$2hAy.hPZbVCh/VitVVsT..qQNKhGtgcRJM741dixalqQFG1iXPROC', 'operator', '7G9iiIGEFKXbIcC28qfzQf2sOtBO6eRZAk8cjLp953g4kvk9akdz2RrQAokh', '2018-12-21 08:45:57', '2018-12-21 08:45:57'),
(11, 'bayu', 'fanani707@gmail.com', '$2y$10$ntcdkfaJ3mq7u2DOtz8.ruJVClE1jmUavv/B2msR60e36gHb.I1PC', 'user', '2gRuY8HKNNnjrKAzLa9GzVQ0eB0dSKBrjSHwkaZqFdml7Hgscs3EXMTyKf1T', '2019-06-25 07:37:35', '2019-06-25 07:37:35'),
(12, 'alen alvero', 'arrow1658229alen@gmail.com', '$2y$10$urVvBOkyckKwgTT.ypT3SOEgmmx/LLJ40ibyz7vwY1b6P6xeOmOIe', 'user', 'wTSqGDO15057QLZb0dPYnHJMc85Rfr9KzFwR051yIwlhtWJt2KtMZd0qXt7l', '2019-06-25 21:06:17', '2019-06-25 21:06:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biss`
--
ALTER TABLE `biss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pemesanan_id_pemesanan_index` (`id_pemesanan`),
  ADD KEY `detail_pemesanan_id_wisata_index` (`id_wisata`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konfirmasiPaket_index` (`id_pemesanan_paket`);

--
-- Indexes for table `konfirmasi_pemesanans`
--
ALTER TABLE `konfirmasi_pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konfirmasi_pemesanan_index` (`id_pemesanan`);

--
-- Indexes for table `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `paket_tours`
--
ALTER TABLE `paket_tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_hotel_2` (`id_hotel`),
  ADD KEY `pemesanan_user_index` (`id_user`),
  ADD KEY `pemesanan_bis_index` (`id_bis`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `pemesanan_paket_tours`
--
ALTER TABLE `pemesanan_paket_tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesananPaket_user_index` (`id_user`),
  ADD KEY `pemesananPaket_paket_index` (`id_paket`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tempat_wisatas`
--
ALTER TABLE `tempat_wisatas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wisata_kota_index` (`id_kota`);

--
-- Indexes for table `trayeks`
--
ALTER TABLE `trayeks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trayek_kota_index` (`id_kota`),
  ADD KEY `trayek_wisata_index` (`id_tempat_wisata`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biss`
--
ALTER TABLE `biss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konfirmasi_pemesanans`
--
ALTER TABLE `konfirmasi_pemesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `paket_tours`
--
ALTER TABLE `paket_tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemesanan_paket_tours`
--
ALTER TABLE `pemesanan_paket_tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tempat_wisatas`
--
ALTER TABLE `tempat_wisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trayeks`
--
ALTER TABLE `trayeks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  ADD CONSTRAINT `detail_pemesanan_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pemesanan_id_wisata_foreign` FOREIGN KEY (`id_wisata`) REFERENCES `tempat_wisatas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  ADD CONSTRAINT `konfirmasiPaket_foreign` FOREIGN KEY (`id_pemesanan_paket`) REFERENCES `pemesanan_paket_tours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirmasi_pemesanans`
--
ALTER TABLE `konfirmasi_pemesanans`
  ADD CONSTRAINT `konfirmasi_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD CONSTRAINT `pemesanan_bis_foreign` FOREIGN KEY (`id_bis`) REFERENCES `biss` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanans_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id`),
  ADD CONSTRAINT `pemesanans_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`);

--
-- Constraints for table `pemesanan_paket_tours`
--
ALTER TABLE `pemesanan_paket_tours`
  ADD CONSTRAINT `pemesananPaket_paket_foreign` FOREIGN KEY (`id_paket`) REFERENCES `paket_tours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesananPaket_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tempat_wisatas`
--
ALTER TABLE `tempat_wisatas`
  ADD CONSTRAINT `wisata_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kotas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trayeks`
--
ALTER TABLE `trayeks`
  ADD CONSTRAINT `trayek_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kotas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trayek_wisata_foreign` FOREIGN KEY (`id_tempat_wisata`) REFERENCES `tempat_wisatas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
