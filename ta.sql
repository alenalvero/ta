-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 02:11 PM
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
(3, 'jaya', 3000000, 5000000, NULL, NULL),
(4, 'aneka', 2500000, 4500000, NULL, NULL),
(7, 'sumber rejeki', 2000000, 4000000, NULL, NULL),
(8, 'Bus Pariwisata SHD/HDD', 3500000, 7000000, NULL, NULL);

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
(13, 6, 8, '2019-06-25 07:38:06', '2019-06-25 07:38:06'),
(14, 7, 8, '2019-06-25 21:06:54', '2019-06-25 21:06:54'),
(15, 7, 9, '2019-06-25 21:06:54', '2019-06-25 21:06:54'),
(23, 13, 8, '2019-06-30 10:18:20', '2019-06-30 10:18:20'),
(24, 13, 9, '2019-06-30 10:18:20', '2019-06-30 10:18:20'),
(25, 14, 8, '2019-06-30 11:10:36', '2019-06-30 11:10:36'),
(26, 14, 9, '2019-06-30 11:10:36', '2019-06-30 11:10:36'),
(27, 15, 11, '2019-07-14 02:23:48', '2019-07-14 02:23:48'),
(28, 15, 12, '2019-07-14 02:23:48', '2019-07-14 02:23:48'),
(29, 15, 13, '2019-07-14 02:23:48', '2019-07-14 02:23:48'),
(30, 15, 14, '2019-07-14 02:23:48', '2019-07-14 02:23:48'),
(31, 15, 15, '2019-07-14 02:23:49', '2019-07-14 02:23:49'),
(36, 17, 1, '2019-07-15 09:45:07', '2019-07-15 09:45:07'),
(37, 17, 2, '2019-07-15 09:45:07', '2019-07-15 09:45:07'),
(38, 17, 4, '2019-07-15 09:45:07', '2019-07-15 09:45:07'),
(39, 17, 5, '2019-07-15 09:45:07', '2019-07-15 09:45:07'),
(40, 17, 7, '2019-07-15 09:45:07', '2019-07-15 09:45:07'),
(41, 17, 8, '2019-07-15 09:45:07', '2019-07-15 09:45:07'),
(42, 17, 10, '2019-07-15 09:45:07', '2019-07-15 09:45:07'),
(43, 18, 1, '2019-07-15 19:57:10', '2019-07-15 19:57:10'),
(44, 18, 2, '2019-07-15 19:57:10', '2019-07-15 19:57:10'),
(45, 18, 4, '2019-07-15 19:57:10', '2019-07-15 19:57:10'),
(46, 18, 7, '2019-07-15 19:57:10', '2019-07-15 19:57:10'),
(47, 20, 51, '2019-07-18 23:09:52', '2019-07-18 23:09:52'),
(48, 20, 54, '2019-07-18 23:09:52', '2019-07-18 23:09:52'),
(49, 20, 57, '2019-07-18 23:09:52', '2019-07-18 23:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `foto_paket_tour`
--

CREATE TABLE `foto_paket_tour` (
  `id` int(99) UNSIGNED NOT NULL,
  `id_paket_tour` int(99) UNSIGNED NOT NULL,
  `foto` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(99) UNSIGNED NOT NULL,
  `bintang_hotel` int(99) NOT NULL,
  `harga` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `bintang_hotel`, `harga`) VALUES
(1, 1, 200000),
(2, 2, 250000),
(3, 3, 300000),
(4, 4, 450000),
(5, 5, 700000);

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
(1, 1, 'Bodong1.PNG', '1', NULL, NULL),
(2, 2, 'Bodong1.PNG', '1', NULL, NULL);

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
(6, 15, 'struk/8uEogoL4lr2zqgT6z3QFP7ZdbkcdZ9jUzbpRDGvR.jpeg', '1', '2019-07-14 02:25:46', '2019-07-14 02:26:04'),
(7, 17, 'struk/0Xr6fDNNWICyG5FNwRbMSVfEUWRXfX1JbvQpMURp.jpeg', '1', '2019-07-15 09:49:21', '2019-07-15 09:49:46'),
(8, 18, 'struk/Rzydqk4oxRtDu77KEspqTiIrsEocLjaMxQqzy935.jpeg', '1', '2019-07-15 20:02:45', '2019-07-15 20:04:26'),
(9, 19, 'struk/sPESdF1zrndGMymw6Z9vOHEHuIRjdtKtB2Gf4UQz.jpeg', '1', '2019-07-18 23:12:26', '2019-07-18 23:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `kotas`
--

CREATE TABLE `kotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kotas`
--

INSERT INTO `kotas` (`id`, `nama_kota`, `provinsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'surabaya', 'jawa timur', 500000, NULL, NULL),
(2, 'jakarta', 'DKI jakarta', 1750000, NULL, NULL),
(3, 'malang', 'jawa timur', 550000, NULL, NULL),
(4, 'jogjakarta', 'DIY', 450000, NULL, NULL),
(5, 'bandung', 'jawa barat', 1500000, NULL, NULL),
(6, 'bali', 'bali', 1800000, NULL, NULL);

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
  `nama_mobil` varchar(99) NOT NULL,
  `max_person` int(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `harga_mobil`, `nama_mobil`, `max_person`) VALUES
(1, 800000, 'elf satu', 20),
(2, 250000, 'Avanza', 6),
(3, 350000, 'Innova reborn', 6),
(4, 200000, 'Xenia', 4);

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
  `keterangan` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_tours`
--

INSERT INTO `paket_tours` (`id`, `nama_tour`, `harga`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Paket Bali', 10000000, 'bali.jpg', '<p><strong>Tempat Wisata</strong> :&nbsp;</p>\r\n\r\n<ul>\r\n	<li>- Pantai Sanur</li>\r\n	<li>- Pantai Pandawa</li>\r\n	<li>- GWK</li>\r\n</ul>\r\n\r\n<p><strong>Fasilitas</strong> :</p>\r\n\r\n<ul>\r\n	<li>- Hotel (inap 3hari, makan 3x)</li>\r\n	<li>Transportasi</li>\r\n</ul>\r\n\r\n<p><strong>Person : 5</strong></p>', NULL, NULL),
(7, 'Paket Jakarta', 45000000, 'jakarta.jpg', '<p><strong>Tempat Wisata</strong> :</p>\r\n\r\n<ul>\r\n	<li>Dufan</li>\r\n	<li>Ancol</li>\r\n	<li>TMII</li>\r\n	<li>Monas</li>\r\n</ul>\r\n\r\n<p><strong>Fasilitas</strong> :</p>\r\n\r\n<ul>\r\n	<li>Hotel Bintang 3</li>\r\n	<li>Makan 3x Per hari</li>\r\n	<li>Transportasi</li>\r\n</ul>\r\n\r\n<p><strong>Duration : 5 Hari</strong><br />\r\n<strong>Person : 20 Orang</strong></p>', NULL, NULL),
(8, 'Paket Bandung', 40000000, 'bandung.jpg', '<p><strong>Tempat Wisata</strong> :</p>\r\n\r\n<ul>\r\n	<li>Pasar Baru</li>\r\n	<li>Pasar Cibaduyut</li>\r\n	<li>Gunung takuban prahu</li>\r\n	<li>Gedung Sate</li>\r\n	<li>Trans Studio</li>\r\n</ul>\r\n\r\n<p><strong>Fasilitas</strong> :</p>\r\n\r\n<ul>\r\n	<li>Hotel</li>\r\n	<li>Makan 3x Perhari</li>\r\n</ul>\r\n\r\n<p><strong>Duration : 5 Hari</strong></p>\r\n\r\n<p><strong>Person : 20 Orang</strong></p>', NULL, NULL),
(9, 'Paket Jogja', 25000000, 'jogja.jpg', '<p><strong>Tempat Wisata</strong> :</p>\r\n\r\n<ul>\r\n	<li>Goa Pindul</li>\r\n	<li>Pantai Parangtritis</li>\r\n	<li>Kebun Buah Mangunan</li>\r\n	<li>Malioboro</li>\r\n	<li>Keraton Jogja</li>\r\n	<li>Candi Prambanan</li>\r\n	<li>Candi Borobudur</li>\r\n</ul>\r\n\r\n<p><strong>Fasilitas</strong> :</p>\r\n\r\n<ul>\r\n	<li>Hotel Bintang 2</li>\r\n	<li>Makan 3x Per Hari</li>\r\n</ul>\r\n\r\n<p><strong>Duration : 3 Hari</strong></p>\r\n\r\n<p><strong>Person : 20 Orang</strong></p>', NULL, NULL);

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
  `tgl2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kamar` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_hotel` int(99) UNSIGNED DEFAULT NULL,
  `jumlah_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `id_user`, `nama_pelanggan`, `alamat`, `no_telp`, `jumlah_orang`, `id_kota`, `id_bis`, `id_mobil`, `tgl`, `tgl2`, `jumlah_kamar`, `id_hotel`, `jumlah_total`, `created_at`, `updated_at`) VALUES
(15, 11, 'Alen Alvero', 'Jalan Sulawesi', '081252017566', 4, 3, NULL, 3, '7/14/2019', '7/17/2019', NULL, 2, NULL, '2019-07-14 02:23:48', '2019-07-14 02:25:46'),
(17, 12, 'Bayu', 'Jalan s.parman no 50 ponorogo', '0832732737', 4, 4, NULL, 3, '7/16/2019', '7/20/2019', NULL, 2, NULL, '2019-07-15 09:45:07', '2019-07-15 09:49:21'),
(18, 12, 'alen alvero', 'Jlan.s. parman no 50 ponorogo', '081252017566', 5, 4, NULL, 3, '7/17/2019', '7/18/2019', '2', 3, NULL, '2019-07-15 19:57:10', '2019-07-15 20:02:45'),
(19, 12, 'alenalvero', 'jalan s paraman no 50 ponorogo', '3442342342', 2, 1, NULL, 2, '7/25/2019', '7/30/2019', '2', 2, NULL, '2019-07-18 23:08:40', '2019-07-18 23:12:26'),
(20, 12, NULL, NULL, NULL, 3, 2, NULL, NULL, '7/24/2019', '7/26/2019', '3', 2, NULL, '2019-07-18 23:09:52', '2019-07-18 23:09:52');

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
(1, 11, 'alen alvero', 'jalan sulawesi 48 ponorogo', '081252017566', 1, '7/15/2019', '2019-07-14 20:45:02', '2019-07-14 20:45:02'),
(2, 11, 'Alvero Rajendra', 'Ponorogo', '435353', 7, '7/15/2019', '2019-07-14 20:53:34', '2019-07-14 20:53:34');

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
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` int(11) NOT NULL,
  `nama_promo` varchar(50) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `expired` date DEFAULT NULL,
  `diskon_persen` int(11) DEFAULT NULL,
  `maksimal_diskon` int(11) DEFAULT NULL,
  `foto` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id`, `nama_promo`, `kode`, `start`, `expired`, `diskon_persen`, `maksimal_diskon`, `foto`) VALUES
(1, 'Promo baru', 'WarokHa\'e', '2019-07-08', '2019-07-09', 10, 100000, 'promo/5E7jXhapnmeWY8oeP7nmLbgMJfe86gyzDwBTnFcN.jpeg'),
(2, 'Diskon Akhir Bulan', 'AkhirBulan2019', '2019-07-10', '2019-07-31', 10, 50000, 'promo/z4ztdLnPJbGOzPPPAiWibzObTexvFiq7g5L3mkR8.jpeg'),
(4, 'Liburan Seru', 'serubanget', '2019-07-09', '2019-07-24', 10, 100000, 'promo/q9dneaTB8DjYqluMSpSDE479EcFw0irlAqj1T5MM.jpeg'),
(5, 'Promo baru', '3123', '2019-07-18', '2019-07-24', 5, 20000, 'promo/UPZxUVuyMwbpoUxUUGU4eE7EgL4BECEFPotk69KM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `promo_paket`
--

CREATE TABLE `promo_paket` (
  `id` int(11) NOT NULL,
  `id_promo` int(11) NOT NULL DEFAULT '0',
  `id_paket` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_paket`
--

INSERT INTO `promo_paket` (`id`, `id_promo`, `id_paket`) VALUES
(1, 1, 1),
(2, 1, 9),
(3, 2, 1),
(4, 2, 8),
(5, 4, 7),
(6, 4, 8),
(7, 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `promo_pemesanan_paket`
--

CREATE TABLE `promo_pemesanan_paket` (
  `id` int(11) NOT NULL,
  `id_promo` int(11) NOT NULL,
  `id_pemesanan_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_pemesanan_paket`
--

INSERT INTO `promo_pemesanan_paket` (`id`, `id_promo`, `id_pemesanan_paket`) VALUES
(1, 2, 18),
(2, 2, 1),
(3, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `promo_user`
--

CREATE TABLE `promo_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT '0',
  `id_promo` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(99) NOT NULL,
  `rating` int(99) NOT NULL,
  `tgl` datetime(6) DEFAULT NULL,
  `review` text,
  `id_pemesanan` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `rating`, `tgl`, `review`, `id_pemesanan`) VALUES
(1, 4, '2019-07-20 03:01:38.000000', 'sangat menyenangkan dan membahagiakan. terima kasih warok tour.', 17),
(2, 4, '2019-07-20 05:20:16.000000', 'sangat bagus', 18);

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
(1, 'Candi Praambanan', 4, 12500, NULL, NULL),
(2, 'Malioboro', 4, 0, NULL, NULL),
(3, 'Wisata Alam Kali Biru', 4, 10000, NULL, NULL),
(4, 'Pantai Parangtritis', 4, 3000, NULL, NULL),
(5, 'Wisata Museum Gunung Api Merapi', 4, 3000, NULL, NULL),
(6, 'Wisata Kebun Teh Nglinggo', 4, 2000, NULL, NULL),
(7, 'Candi Ratu Boko', 4, 20000, NULL, NULL),
(8, 'Wisata Taman Pelangi', 4, 15000, NULL, NULL),
(9, 'Pantai Drini', 4, 10000, NULL, NULL),
(10, 'Wisata Monumen', 4, 10000, NULL, NULL),
(11, 'Jatim Park 1', 3, 100000, NULL, NULL),
(12, 'Jatim Park 2', 3, 120000, NULL, NULL),
(13, 'Predator Fun Park', 3, 50000, NULL, NULL),
(14, 'Eco Green Park', 3, 70000, NULL, NULL),
(15, 'Museum Tubuh', 3, 70000, NULL, NULL),
(16, 'Museum Angkut', 3, 100000, NULL, NULL),
(17, 'Selecta', 3, 25000, NULL, NULL),
(18, 'BNS', 3, 40000, NULL, NULL),
(19, 'Jatim Park 3', 3, 100000, NULL, NULL),
(20, 'Kebun Buah Apel', 3, 25000, NULL, NULL),
(21, 'Kampung Gajah Wonderland', 5, 15000, NULL, NULL),
(22, 'Gunung Takubah Perahu', 5, 20000, NULL, NULL),
(23, 'Museum Geologi', 5, 10000, NULL, NULL),
(24, 'Gedung Sate', 5, 0, NULL, NULL),
(25, 'Taman Bunga Begonia', 5, 10000, NULL, NULL),
(26, 'Bandung Treetop Adventure Park', 5, 150000, NULL, NULL),
(27, 'Kebun Teh Sukawana', 5, 5000, NULL, NULL),
(28, 'Lembang Floating Market', 5, 20000, NULL, NULL),
(29, 'Dago Dream Park', 5, 20000, NULL, NULL),
(30, 'De Ranch', 5, 10000, NULL, NULL),
(31, 'Pura Uluwatu', 6, 20000, NULL, NULL),
(32, 'Pura Ulun Danu Bedugul', 6, 20000, NULL, NULL),
(33, 'Monkey Forest Ubud', 6, 80000, NULL, NULL),
(34, 'Pulau Penyu Tanjung Benoa Bali', 6, 10000, NULL, NULL),
(35, 'Taman Nusa', 6, 85000, NULL, NULL),
(36, 'Kebun Raya Bali', 6, 11, NULL, NULL),
(37, 'Pantai Pandawa', 6, 8000, NULL, NULL),
(38, 'Desa Wisata Penglipuran', 6, 15000, NULL, NULL),
(39, 'Sangeh Monkey Forest', 6, 10000, NULL, NULL),
(40, 'Lumba-Lumba Lovina', 6, 100000, NULL, NULL),
(41, 'Museum Sepuluh November', 1, 5000, NULL, NULL),
(42, 'Taman Hiburan Pantai Kenjeran', 1, 10000, NULL, NULL),
(43, 'Sentra Ikan Bulak', 1, 10000, NULL, NULL),
(44, 'Museum Loka Jala Crana', 1, 2000, NULL, NULL),
(45, 'Museum W. R. Soepratman', 1, 3000, NULL, NULL),
(46, 'Museum House of Sampoerna', 1, 2000, NULL, NULL),
(47, 'Kebun Binatang Surabaya', 1, 15000, NULL, NULL),
(48, 'Surabaya Carnival Park', 1, 60000, NULL, NULL),
(49, 'Hutan Bakau Wonorejo', 1, 20000, NULL, NULL),
(50, 'Patung Buddha Empat Wajah', 1, 0, NULL, NULL),
(51, 'Dufan', 2, 270000, NULL, NULL),
(52, 'TMII', 2, 10000, NULL, NULL),
(53, 'Ancol', 2, 25000, NULL, NULL),
(54, 'Monas', 2, 20000, NULL, NULL),
(55, 'Kebun Binatan Ragunan', 2, 4000, NULL, NULL),
(56, 'Ocean Ecopaark', 2, 150000, NULL, NULL),
(57, 'Museum Fatahilah', 2, 5000, NULL, NULL),
(58, 'Museum Bank Indonesia', 2, 2000, NULL, NULL),
(59, 'Kidzania', 2, 50000, NULL, NULL),
(60, 'Museum Taman Prasasti', 2, 2000, NULL, NULL);

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
(5, 'admin', 'admin@yahoo.com', '$2y$10$hjVNnY28/AvHmzrPE2nj7.uSG6EOH.soIx5GsF2qpacSLfunN4d8W', 'admin', 'aoScegkt6g4ZIAlgi66mRI1214Dnk5DJC58rlkDyQGSluMAyqJUfTkcFxnnI', '2018-12-14 11:53:07', '2018-12-14 11:53:07'),
(6, 'dsaadasd', 'sadsad', '$2y$10$AOo5i.rNq4SQtMaij8u0Ke6Lv5tj3ZAeCLglkw.cZQidzWNB1cBd2', 'user', NULL, '2018-12-16 20:05:55', '2018-12-16 20:05:55'),
(7, 'dsada', 'sdadasd', '$2y$10$D0DD9t3mB6FY/hlKSFer3ew0w3Zh/2w/7sRwNSSt8hraZNZpNV.uK', 'admin', NULL, '2018-12-16 20:07:26', '2018-12-16 20:07:26'),
(9, 'cxzczczxCXZC', 'CXZCZXC', '$2y$10$qvhLY.OJhbcxx.TFWNadSu.oHXTREy6SdXIocB87ZnGroDmdVEP3C', 'admin', NULL, '2018-12-16 20:09:26', '2018-12-16 20:09:26'),
(10, 'operator', 'operator@yahoo.com', '$2y$10$2hAy.hPZbVCh/VitVVsT..qQNKhGtgcRJM741dixalqQFG1iXPROC', 'operator', '5ss6IRr7A4tf1LW09M19cYO9zKhBjzPmDM0BWxlx6N6bcKhpPFMhU0mFK490', '2018-12-21 08:45:57', '2018-12-21 08:45:57'),
(11, 'bayu', 'fanani707@gmail.com', '$2y$10$LadlLO4IKLy7lkokpR6/q.6Izez1laeFPAx9/4nMhRHj6JANXgj9W', 'user', '6I5bUHNuJmyzhKiIrWDtUfj6FYgJRMkVPk0kLQctnAuokuwbGHGPV4O6MVj3', '2019-06-25 07:37:35', '2019-06-25 07:37:35'),
(12, 'alen alvero', 'arrow1658229alen@gmail.com', '$2y$10$urVvBOkyckKwgTT.ypT3SOEgmmx/LLJ40ibyz7vwY1b6P6xeOmOIe', 'user', 'ojR9U5E5qPP9PsR9FWo0FT3PBATpc01YuhOiw58Coz8x6TbbNR4KYPNOfWSh', '2019-06-25 21:06:17', '2019-06-25 21:06:17');

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
-- Indexes for table `foto_paket_tour`
--
ALTER TABLE `foto_paket_tour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket_tour` (`id_paket_tour`);

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
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Index 2` (`kode`);

--
-- Indexes for table `promo_paket`
--
ALTER TABLE `promo_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_pemesanan_paket`
--
ALTER TABLE `promo_pemesanan_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_user`
--
ALTER TABLE `promo_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `foto_paket_tour`
--
ALTER TABLE `foto_paket_tour`
  MODIFY `id` int(99) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(99) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konfirmasi_pemesanans`
--
ALTER TABLE `konfirmasi_pemesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(99) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paket_tours`
--
ALTER TABLE `paket_tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pemesanan_paket_tours`
--
ALTER TABLE `pemesanan_paket_tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promo_paket`
--
ALTER TABLE `promo_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `promo_pemesanan_paket`
--
ALTER TABLE `promo_pemesanan_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promo_user`
--
ALTER TABLE `promo_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tempat_wisatas`
--
ALTER TABLE `tempat_wisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
-- Constraints for table `foto_paket_tour`
--
ALTER TABLE `foto_paket_tour`
  ADD CONSTRAINT `foto_paket_tour_ibfk_1` FOREIGN KEY (`id_paket_tour`) REFERENCES `paket_tours` (`id`);

--
-- Constraints for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  ADD CONSTRAINT `konfirmasiPaket_foreign` FOREIGN KEY (`id_pemesanan_paket`) REFERENCES `pemesanan_paket_tours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirmasi_pemesanans`
--
ALTER TABLE `konfirmasi_pemesanans`
  ADD CONSTRAINT `konfirmasi_pemesanans_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanans` (`id`);

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
