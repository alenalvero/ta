-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ta-alen.biss
CREATE TABLE IF NOT EXISTS `biss` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_po` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_small` int(11) NOT NULL,
  `harga_large` int(99) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.biss: ~4 rows (approximately)
DELETE FROM `biss`;
/*!40000 ALTER TABLE `biss` DISABLE KEYS */;
INSERT INTO `biss` (`id`, `nama_po`, `harga_small`, `harga_large`, `created_at`, `updated_at`) VALUES
	(3, 'jaya', 3000000, 5000000, NULL, NULL),
	(4, 'aneka', 2500000, 4500000, NULL, NULL),
	(7, 'sumber rejeki', 2000000, 4000000, NULL, NULL),
	(8, 'Bus Pariwisata SHD/HDD', 3500000, 7000000, NULL, NULL);
/*!40000 ALTER TABLE `biss` ENABLE KEYS */;

-- Dumping structure for table ta-alen.detail_pemesanans
CREATE TABLE IF NOT EXISTS `detail_pemesanans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pemesanan` int(10) unsigned NOT NULL,
  `id_wisata` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_pemesanan_id_pemesanan_index` (`id_pemesanan`),
  KEY `detail_pemesanan_id_wisata_index` (`id_wisata`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.detail_pemesanans: ~26 rows (approximately)
DELETE FROM `detail_pemesanans`;
/*!40000 ALTER TABLE `detail_pemesanans` DISABLE KEYS */;
INSERT INTO `detail_pemesanans` (`id`, `id_pemesanan`, `id_wisata`, `created_at`, `updated_at`) VALUES
	(13, 6, 8, '2019-06-25 14:38:06', '2019-06-25 14:38:06'),
	(14, 7, 8, '2019-06-26 04:06:54', '2019-06-26 04:06:54'),
	(15, 7, 9, '2019-06-26 04:06:54', '2019-06-26 04:06:54'),
	(23, 13, 8, '2019-06-30 17:18:20', '2019-06-30 17:18:20'),
	(24, 13, 9, '2019-06-30 17:18:20', '2019-06-30 17:18:20'),
	(25, 14, 8, '2019-06-30 18:10:36', '2019-06-30 18:10:36'),
	(26, 14, 9, '2019-06-30 18:10:36', '2019-06-30 18:10:36'),
	(27, 15, 11, '2019-07-14 09:23:48', '2019-07-14 09:23:48'),
	(28, 15, 12, '2019-07-14 09:23:48', '2019-07-14 09:23:48'),
	(29, 15, 13, '2019-07-14 09:23:48', '2019-07-14 09:23:48'),
	(30, 15, 14, '2019-07-14 09:23:48', '2019-07-14 09:23:48'),
	(31, 15, 15, '2019-07-14 09:23:49', '2019-07-14 09:23:49'),
	(36, 17, 1, '2019-07-15 16:45:07', '2019-07-15 16:45:07'),
	(37, 17, 2, '2019-07-15 16:45:07', '2019-07-15 16:45:07'),
	(38, 17, 4, '2019-07-15 16:45:07', '2019-07-15 16:45:07'),
	(39, 17, 5, '2019-07-15 16:45:07', '2019-07-15 16:45:07'),
	(40, 17, 7, '2019-07-15 16:45:07', '2019-07-15 16:45:07'),
	(41, 17, 8, '2019-07-15 16:45:07', '2019-07-15 16:45:07'),
	(42, 17, 10, '2019-07-15 16:45:07', '2019-07-15 16:45:07'),
	(43, 18, 1, '2019-07-16 02:57:10', '2019-07-16 02:57:10'),
	(44, 18, 2, '2019-07-16 02:57:10', '2019-07-16 02:57:10'),
	(45, 18, 4, '2019-07-16 02:57:10', '2019-07-16 02:57:10'),
	(46, 18, 7, '2019-07-16 02:57:10', '2019-07-16 02:57:10'),
	(47, 20, 51, '2019-07-19 06:09:52', '2019-07-19 06:09:52'),
	(48, 20, 54, '2019-07-19 06:09:52', '2019-07-19 06:09:52'),
	(49, 20, 57, '2019-07-19 06:09:52', '2019-07-19 06:09:52');
/*!40000 ALTER TABLE `detail_pemesanans` ENABLE KEYS */;

-- Dumping structure for table ta-alen.foto_paket_tour
CREATE TABLE IF NOT EXISTS `foto_paket_tour` (
  `id` int(99) unsigned NOT NULL AUTO_INCREMENT,
  `id_paket_tour` int(99) unsigned NOT NULL,
  `foto` varchar(99) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_paket_tour` (`id_paket_tour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.foto_paket_tour: ~0 rows (approximately)
DELETE FROM `foto_paket_tour`;
/*!40000 ALTER TABLE `foto_paket_tour` DISABLE KEYS */;
/*!40000 ALTER TABLE `foto_paket_tour` ENABLE KEYS */;

-- Dumping structure for table ta-alen.hotel
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(99) unsigned NOT NULL AUTO_INCREMENT,
  `bintang_hotel` int(99) NOT NULL,
  `harga` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.hotel: ~5 rows (approximately)
DELETE FROM `hotel`;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` (`id`, `bintang_hotel`, `harga`) VALUES
	(1, 1, 200000),
	(2, 2, 250000),
	(3, 3, 300000),
	(4, 4, 450000),
	(5, 5, 700000);
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;

-- Dumping structure for table ta-alen.karyawans
CREATE TABLE IF NOT EXISTS `karyawans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.karyawans: ~0 rows (approximately)
DELETE FROM `karyawans`;
/*!40000 ALTER TABLE `karyawans` DISABLE KEYS */;
INSERT INTO `karyawans` (`id`, `nama`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES
	(6, 'alemn', 'dsadsa42432', '534534', NULL, NULL);
/*!40000 ALTER TABLE `karyawans` ENABLE KEYS */;

-- Dumping structure for table ta-alen.konfirmasi_pembayarans
CREATE TABLE IF NOT EXISTS `konfirmasi_pembayarans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pemesanan_paket` int(10) unsigned NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `konfirmasiPaket_index` (`id_pemesanan_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.konfirmasi_pembayarans: ~2 rows (approximately)
DELETE FROM `konfirmasi_pembayarans`;
/*!40000 ALTER TABLE `konfirmasi_pembayarans` DISABLE KEYS */;
INSERT INTO `konfirmasi_pembayarans` (`id`, `id_pemesanan_paket`, `foto`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Bodong1.PNG', '1', NULL, NULL),
	(2, 2, 'Bodong1.PNG', '1', NULL, NULL),
	(3, 5, '110-1102909_secretary-clipart-extra-work-man-working-clipart.png', '1', NULL, NULL),
	(4, 6, '021f21e395e384b8482b1c8969d0b623--doodle-sketch-sketch-drawing.jpg', '1', NULL, NULL);
/*!40000 ALTER TABLE `konfirmasi_pembayarans` ENABLE KEYS */;

-- Dumping structure for table ta-alen.konfirmasi_pemesanans
CREATE TABLE IF NOT EXISTS `konfirmasi_pemesanans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pemesanan` int(10) unsigned NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `konfirmasi_pemesanan_index` (`id_pemesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.konfirmasi_pemesanans: ~4 rows (approximately)
DELETE FROM `konfirmasi_pemesanans`;
/*!40000 ALTER TABLE `konfirmasi_pemesanans` DISABLE KEYS */;
INSERT INTO `konfirmasi_pemesanans` (`id`, `id_pemesanan`, `foto`, `status`, `created_at`, `updated_at`) VALUES
	(6, 15, 'struk/8uEogoL4lr2zqgT6z3QFP7ZdbkcdZ9jUzbpRDGvR.jpeg', '1', '2019-07-14 09:25:46', '2019-07-14 09:26:04'),
	(7, 17, 'struk/0Xr6fDNNWICyG5FNwRbMSVfEUWRXfX1JbvQpMURp.jpeg', '1', '2019-07-15 16:49:21', '2019-07-15 16:49:46'),
	(8, 18, 'struk/Rzydqk4oxRtDu77KEspqTiIrsEocLjaMxQqzy935.jpeg', '1', '2019-07-16 03:02:45', '2019-07-16 03:04:26'),
	(9, 19, 'struk/sPESdF1zrndGMymw6Z9vOHEHuIRjdtKtB2Gf4UQz.jpeg', '1', '2019-07-19 06:12:26', '2019-07-19 06:12:47');
/*!40000 ALTER TABLE `konfirmasi_pemesanans` ENABLE KEYS */;

-- Dumping structure for table ta-alen.kotas
CREATE TABLE IF NOT EXISTS `kotas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.kotas: ~6 rows (approximately)
DELETE FROM `kotas`;
/*!40000 ALTER TABLE `kotas` DISABLE KEYS */;
INSERT INTO `kotas` (`id`, `nama_kota`, `provinsi`, `harga`, `created_at`, `updated_at`) VALUES
	(1, 'surabaya', 'jawa timur', 500000, NULL, NULL),
	(2, 'jakarta', 'DKI jakarta', 1750000, NULL, NULL),
	(3, 'malang', 'jawa timur', 550000, NULL, NULL),
	(4, 'jogjakarta', 'DIY', 450000, NULL, NULL),
	(5, 'bandung', 'jawa barat', 1500000, NULL, NULL),
	(6, 'bali', 'bali', 1800000, NULL, NULL);
/*!40000 ALTER TABLE `kotas` ENABLE KEYS */;

-- Dumping structure for table ta-alen.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.migrations: ~33 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table ta-alen.mobil
CREATE TABLE IF NOT EXISTS `mobil` (
  `id` int(99) unsigned NOT NULL AUTO_INCREMENT,
  `harga_mobil` int(99) NOT NULL,
  `nama_mobil` varchar(99) NOT NULL,
  `max_person` int(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.mobil: ~4 rows (approximately)
DELETE FROM `mobil`;
/*!40000 ALTER TABLE `mobil` DISABLE KEYS */;
INSERT INTO `mobil` (`id`, `harga_mobil`, `nama_mobil`, `max_person`) VALUES
	(1, 800000, 'elf satu', 20),
	(2, 250000, 'Avanza', 6),
	(3, 350000, 'Innova reborn', 6),
	(4, 200000, 'Xenia', 4);
/*!40000 ALTER TABLE `mobil` ENABLE KEYS */;

-- Dumping structure for table ta-alen.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.model_has_permissions: ~0 rows (approximately)
DELETE FROM `model_has_permissions`;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping structure for table ta-alen.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.model_has_roles: ~0 rows (approximately)
DELETE FROM `model_has_roles`;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping structure for table ta-alen.notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) unsigned NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.notifications: ~0 rows (approximately)
DELETE FROM `notifications`;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;

-- Dumping structure for table ta-alen.paket_tours
CREATE TABLE IF NOT EXISTS `paket_tours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kuota` int(11) NOT NULL DEFAULT '10',
  `tgl_berangkat` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.paket_tours: ~4 rows (approximately)
DELETE FROM `paket_tours`;
/*!40000 ALTER TABLE `paket_tours` DISABLE KEYS */;
INSERT INTO `paket_tours` (`id`, `nama_tour`, `harga`, `foto`, `keterangan`, `created_at`, `updated_at`, `kuota`, `tgl_berangkat`) VALUES
	(1, 'Paket Bali', 10000000, 'bali.jpg', '<p><strong>Tempat Wisata</strong> :&nbsp;</p>\r\n\r\n<ul>\r\n	<li>- Pantai Sanur</li>\r\n	<li>- Pantai Pandawa</li>\r\n	<li>- GWK</li>\r\n</ul>\r\n\r\n<p><strong>Fasilitas</strong> :</p>\r\n\r\n<ul>\r\n	<li>- Hotel (inap 3hari, makan 3x)</li>\r\n	<li>Transportasi</li>\r\n</ul>\r\n\r\n<p><strong>Person : 5</strong></p>', NULL, NULL, 10, '2019-07-27 22:05:10'),
	(7, 'Paket Jakarta', 45000000, 'jakarta.jpg', '<p><strong>Tempat Wisata</strong> :</p>\r\n\r\n<ul>\r\n	<li>Dufan</li>\r\n	<li>Ancol</li>\r\n	<li>TMII</li>\r\n	<li>Monas</li>\r\n</ul>\r\n\r\n<p><strong>Fasilitas</strong> :</p>\r\n\r\n<ul>\r\n	<li>Hotel Bintang 3</li>\r\n	<li>Makan 3x Per hari</li>\r\n	<li>Transportasi</li>\r\n</ul>\r\n\r\n<p><strong>Duration : 5 Hari</strong><br />\r\n<strong>Person : 20 Orang</strong></p>', NULL, NULL, 10, '2019-07-27 22:05:10'),
	(8, 'Paket Bandung', 40000000, 'bandung.jpg', '<p><strong>Tempat Wisata</strong> :</p>\r\n\r\n<ul>\r\n	<li>Pasar Baru</li>\r\n	<li>Pasar Cibaduyut</li>\r\n	<li>Gunung takuban prahu</li>\r\n	<li>Gedung Sate</li>\r\n	<li>Trans Studio</li>\r\n</ul>\r\n\r\n<p><strong>Fasilitas</strong> :</p>\r\n\r\n<ul>\r\n	<li>Hotel</li>\r\n	<li>Makan 3x Perhari</li>\r\n</ul>\r\n\r\n<p><strong>Duration : 5 Hari</strong></p>\r\n\r\n<p><strong>Person : 20 Orang</strong></p>', NULL, NULL, 10, '2019-07-27 22:05:10'),
	(9, 'Paket Jogja', 25000000, 'jogja.jpg', '<p><strong>Tempat Wisata</strong> :</p>\r\n\r\n<ul>\r\n	<li>Goa Pindul</li>\r\n	<li>Pantai Parangtritis</li>\r\n	<li>Kebun Buah Mangunan</li>\r\n	<li>Malioboro</li>\r\n	<li>Keraton Jogja</li>\r\n	<li>Candi Prambanan</li>\r\n	<li>Candi Borobudur</li>\r\n</ul>\r\n\r\n<p><strong>Fasilitas</strong> :</p>\r\n\r\n<ul>\r\n	<li>Hotel Bintang 2</li>\r\n	<li>Makan 3x Per Hari</li>\r\n</ul>\r\n\r\n<p><strong>Duration : 3 Hari</strong></p>\r\n\r\n<p><strong>Person : 20 Orang</strong></p>', NULL, NULL, 10, '2019-07-28 00:05:10');
/*!40000 ALTER TABLE `paket_tours` ENABLE KEYS */;

-- Dumping structure for table ta-alen.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table ta-alen.pemesanans
CREATE TABLE IF NOT EXISTS `pemesanans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned DEFAULT NULL,
  `nama_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_orang` int(11) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `id_bis` int(10) unsigned DEFAULT NULL,
  `id_mobil` int(99) unsigned DEFAULT NULL,
  `tgl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kamar` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_hotel` int(99) unsigned DEFAULT NULL,
  `jumlah_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pemesanan_user_index` (`id_user`),
  KEY `pemesanan_bis_index` (`id_bis`),
  KEY `id_mobil` (`id_mobil`),
  KEY `id_hotel` (`id_hotel`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.pemesanans: ~5 rows (approximately)
DELETE FROM `pemesanans`;
/*!40000 ALTER TABLE `pemesanans` DISABLE KEYS */;
INSERT INTO `pemesanans` (`id`, `id_user`, `nama_pelanggan`, `alamat`, `no_telp`, `jumlah_orang`, `id_kota`, `id_bis`, `id_mobil`, `tgl`, `tgl2`, `jumlah_kamar`, `id_hotel`, `jumlah_total`, `created_at`, `updated_at`) VALUES
	(15, 11, 'Alen Alvero', 'Jalan Sulawesi', '081252017566', 4, 3, NULL, 3, '7/14/2019', '7/17/2019', NULL, 2, NULL, '2019-07-14 09:23:48', '2019-07-14 09:25:46'),
	(17, 12, 'Bayu', 'Jalan s.parman no 50 ponorogo', '0832732737', 4, 4, NULL, 3, '7/16/2019', '7/20/2019', NULL, 2, NULL, '2019-07-15 16:45:07', '2019-07-15 16:49:21'),
	(18, 12, 'alen alvero', 'Jlan.s. parman no 50 ponorogo', '081252017566', 5, 4, NULL, 3, '7/17/2019', '7/18/2019', '2', 3, NULL, '2019-07-16 02:57:10', '2019-07-16 03:02:45'),
	(19, 12, 'alenalvero', 'jalan s paraman no 50 ponorogo', '3442342342', 2, 1, NULL, 2, '7/25/2019', '7/30/2019', '2', 2, NULL, '2019-07-19 06:08:40', '2019-07-19 06:12:26'),
	(20, 12, NULL, NULL, NULL, 3, 2, NULL, NULL, '7/24/2019', '7/26/2019', '3', 2, NULL, '2019-07-19 06:09:52', '2019-07-19 06:09:52');
/*!40000 ALTER TABLE `pemesanans` ENABLE KEYS */;

-- Dumping structure for table ta-alen.pemesanan_paket_tours
CREATE TABLE IF NOT EXISTS `pemesanan_paket_tours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `nama_pelanggan_paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paket` int(10) unsigned DEFAULT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pemesananPaket_user_index` (`id_user`),
  KEY `pemesananPaket_paket_index` (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.pemesanan_paket_tours: ~1 rows (approximately)
DELETE FROM `pemesanan_paket_tours`;
/*!40000 ALTER TABLE `pemesanan_paket_tours` DISABLE KEYS */;
INSERT INTO `pemesanan_paket_tours` (`id`, `id_user`, `nama_pelanggan_paket`, `alamat`, `no_telp`, `id_paket`, `jumlah_orang`, `created_at`, `updated_at`) VALUES
	(5, 11, 'bayu', 'carat', '082323244232', 1, 2, '2019-07-22 15:03:02', '2019-07-22 15:03:02'),
	(6, 12, 'aadd', 'dd', '+628331231334', 1, 6, '2019-07-22 16:24:09', '2019-07-22 16:24:09');
/*!40000 ALTER TABLE `pemesanan_paket_tours` ENABLE KEYS */;

-- Dumping structure for table ta-alen.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.permissions: ~0 rows (approximately)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table ta-alen.promos
CREATE TABLE IF NOT EXISTS `promos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_promo` varchar(50) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `expired` date DEFAULT NULL,
  `diskon_persen` int(11) DEFAULT NULL,
  `maksimal_diskon` int(11) DEFAULT NULL,
  `foto` mediumtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.promos: ~4 rows (approximately)
DELETE FROM `promos`;
/*!40000 ALTER TABLE `promos` DISABLE KEYS */;
INSERT INTO `promos` (`id`, `nama_promo`, `kode`, `start`, `expired`, `diskon_persen`, `maksimal_diskon`, `foto`) VALUES
	(1, 'Promo baru', 'WarokHa\'e', '2019-07-08', '2019-07-09', 10, 100000, 'promo/5E7jXhapnmeWY8oeP7nmLbgMJfe86gyzDwBTnFcN.jpeg'),
	(2, 'Diskon Akhir Bulan', 'AkhirBulan2019', '2019-07-10', '2019-07-31', 10, 50000, 'promo/z4ztdLnPJbGOzPPPAiWibzObTexvFiq7g5L3mkR8.jpeg'),
	(4, 'Liburan Seru', 'serubanget', '2019-07-09', '2019-07-24', 10, 100000, 'promo/q9dneaTB8DjYqluMSpSDE479EcFw0irlAqj1T5MM.jpeg'),
	(5, 'Promo baru', '3123', '2019-07-18', '2019-07-24', 5, 20000, 'promo/UPZxUVuyMwbpoUxUUGU4eE7EgL4BECEFPotk69KM.jpeg');
/*!40000 ALTER TABLE `promos` ENABLE KEYS */;

-- Dumping structure for table ta-alen.promo_paket
CREATE TABLE IF NOT EXISTS `promo_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promo` int(11) NOT NULL DEFAULT '0',
  `id_paket` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.promo_paket: ~7 rows (approximately)
DELETE FROM `promo_paket`;
/*!40000 ALTER TABLE `promo_paket` DISABLE KEYS */;
INSERT INTO `promo_paket` (`id`, `id_promo`, `id_paket`) VALUES
	(1, 1, 1),
	(2, 1, 9),
	(3, 2, 1),
	(4, 2, 8),
	(5, 4, 7),
	(6, 4, 8),
	(7, 5, 9);
/*!40000 ALTER TABLE `promo_paket` ENABLE KEYS */;

-- Dumping structure for table ta-alen.promo_pemesanan_paket
CREATE TABLE IF NOT EXISTS `promo_pemesanan_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promo` int(11) NOT NULL,
  `id_pemesanan_paket` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.promo_pemesanan_paket: ~3 rows (approximately)
DELETE FROM `promo_pemesanan_paket`;
/*!40000 ALTER TABLE `promo_pemesanan_paket` DISABLE KEYS */;
INSERT INTO `promo_pemesanan_paket` (`id`, `id_promo`, `id_pemesanan_paket`) VALUES
	(1, 2, 18),
	(2, 2, 1),
	(3, 4, 2);
/*!40000 ALTER TABLE `promo_pemesanan_paket` ENABLE KEYS */;

-- Dumping structure for table ta-alen.promo_user
CREATE TABLE IF NOT EXISTS `promo_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT '0',
  `id_promo` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.promo_user: ~0 rows (approximately)
DELETE FROM `promo_user`;
/*!40000 ALTER TABLE `promo_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `promo_user` ENABLE KEYS */;

-- Dumping structure for table ta-alen.review
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `rating` int(99) NOT NULL,
  `tgl` datetime(6) DEFAULT NULL,
  `review` text,
  `id_pemesanan` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.review: ~2 rows (approximately)
DELETE FROM `review`;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` (`id`, `rating`, `tgl`, `review`, `id_pemesanan`) VALUES
	(1, 4, '2019-07-20 03:01:38.000000', 'sangat menyenangkan dan membahagiakan. terima kasih warok tour.', 17),
	(2, 4, '2019-07-20 05:20:16.000000', 'sangat bagus', 18);
/*!40000 ALTER TABLE `review` ENABLE KEYS */;

-- Dumping structure for table ta-alen.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.roles: ~0 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table ta-alen.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.role_has_permissions: ~0 rows (approximately)
DELETE FROM `role_has_permissions`;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping structure for table ta-alen.tempat_wisatas
CREATE TABLE IF NOT EXISTS `tempat_wisatas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kota` int(10) unsigned DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wisata_kota_index` (`id_kota`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.tempat_wisatas: ~60 rows (approximately)
DELETE FROM `tempat_wisatas`;
/*!40000 ALTER TABLE `tempat_wisatas` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `tempat_wisatas` ENABLE KEYS */;

-- Dumping structure for table ta-alen.trayeks
CREATE TABLE IF NOT EXISTS `trayeks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kota` int(10) unsigned DEFAULT NULL,
  `id_tempat_wisata` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trayek_kota_index` (`id_kota`),
  KEY `trayek_wisata_index` (`id_tempat_wisata`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.trayeks: ~3 rows (approximately)
DELETE FROM `trayeks`;
/*!40000 ALTER TABLE `trayeks` DISABLE KEYS */;
INSERT INTO `trayeks` (`id`, `asal`, `id_kota`, `id_tempat_wisata`, `created_at`, `updated_at`) VALUES
	(1, 'Ponorogo', 5, 6, NULL, NULL),
	(2, 'Ponorogo', 5, 6, NULL, NULL),
	(3, 'ponorogo', 5, 6, NULL, NULL);
/*!40000 ALTER TABLE `trayeks` ENABLE KEYS */;

-- Dumping structure for table ta-alen.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.users: ~8 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
	(4, 'dsadadssa', 'sadsdsa', '$2y$10$OcH/MWlnOeM.JLfIsjzXH.PqID17aBD/mKzN7Gv5q0j6DUTTMkply', 'admin', NULL, '2018-12-05 16:11:52', '2018-12-05 16:11:52'),
	(5, 'admin', 'admin@yahoo.com', '$2y$10$hjVNnY28/AvHmzrPE2nj7.uSG6EOH.soIx5GsF2qpacSLfunN4d8W', 'admin', 'aoScegkt6g4ZIAlgi66mRI1214Dnk5DJC58rlkDyQGSluMAyqJUfTkcFxnnI', '2018-12-14 18:53:07', '2018-12-14 18:53:07'),
	(6, 'dsaadasd', 'sadsad', '$2y$10$AOo5i.rNq4SQtMaij8u0Ke6Lv5tj3ZAeCLglkw.cZQidzWNB1cBd2', 'user', NULL, '2018-12-17 03:05:55', '2018-12-17 03:05:55'),
	(7, 'dsada', 'sdadasd', '$2y$10$D0DD9t3mB6FY/hlKSFer3ew0w3Zh/2w/7sRwNSSt8hraZNZpNV.uK', 'admin', NULL, '2018-12-17 03:07:26', '2018-12-17 03:07:26'),
	(9, 'cxzczczxCXZC', 'CXZCZXC', '$2y$10$qvhLY.OJhbcxx.TFWNadSu.oHXTREy6SdXIocB87ZnGroDmdVEP3C', 'admin', NULL, '2018-12-17 03:09:26', '2018-12-17 03:09:26'),
	(10, 'operator', 'operator@yahoo.com', '$2y$10$2hAy.hPZbVCh/VitVVsT..qQNKhGtgcRJM741dixalqQFG1iXPROC', 'operator', '5ss6IRr7A4tf1LW09M19cYO9zKhBjzPmDM0BWxlx6N6bcKhpPFMhU0mFK490', '2018-12-21 15:45:57', '2018-12-21 15:45:57'),
	(11, 'bayu', 'fanani707@gmail.com', '$2y$10$LadlLO4IKLy7lkokpR6/q.6Izez1laeFPAx9/4nMhRHj6JANXgj9W', 'user', 'xTphqC0aI6G1xMEneNuwZKaJW8KXoMe4WLvld5DJ030xvtA570u62pwSu8LR', '2019-06-25 14:37:35', '2019-06-25 14:37:35'),
	(12, 'alen alvero', 'arrow1658229alen@gmail.com', '$2y$10$zIwXQN1YwbE16Jkmx6bEZuneI3HS3GfQ5dp5pHfk8eKV3hV2HHlWm', 'user', 'ojR9U5E5qPP9PsR9FWo0FT3PBATpc01YuhOiw58Coz8x6TbbNR4KYPNOfWSh', '2019-06-26 04:06:17', '2019-06-26 04:06:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
