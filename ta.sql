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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.biss: ~3 rows (approximately)
DELETE FROM `biss`;
/*!40000 ALTER TABLE `biss` DISABLE KEYS */;
INSERT INTO `biss` (`id`, `nama_po`, `harga_small`, `harga_large`, `created_at`, `updated_at`) VALUES
	(3, 'jaya', 10000, 20000, NULL, NULL),
	(4, 'aneka', 80000, 30000, NULL, NULL),
	(7, 'sumber rejeki', 10000, 20000, NULL, NULL);
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
  KEY `detail_pemesanan_id_wisata_index` (`id_wisata`),
  CONSTRAINT `detail_pemesanan_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detail_pemesanan_id_wisata_foreign` FOREIGN KEY (`id_wisata`) REFERENCES `tempat_wisatas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.detail_pemesanans: ~8 rows (approximately)
DELETE FROM `detail_pemesanans`;
/*!40000 ALTER TABLE `detail_pemesanans` DISABLE KEYS */;
INSERT INTO `detail_pemesanans` (`id`, `id_pemesanan`, `id_wisata`, `created_at`, `updated_at`) VALUES
	(7, 2, 7, NULL, NULL),
	(13, 6, 8, '2019-06-25 14:38:06', '2019-06-25 14:38:06'),
	(14, 7, 8, '2019-06-26 04:06:54', '2019-06-26 04:06:54'),
	(15, 7, 9, '2019-06-26 04:06:54', '2019-06-26 04:06:54'),
	(23, 13, 8, '2019-06-30 17:18:20', '2019-06-30 17:18:20'),
	(24, 13, 9, '2019-06-30 17:18:20', '2019-06-30 17:18:20'),
	(25, 14, 8, '2019-06-30 18:10:36', '2019-06-30 18:10:36'),
	(26, 14, 9, '2019-06-30 18:10:36', '2019-06-30 18:10:36');
/*!40000 ALTER TABLE `detail_pemesanans` ENABLE KEYS */;

-- Dumping structure for table ta-alen.hotel
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(99) unsigned NOT NULL AUTO_INCREMENT,
  `bintang_hotel` int(99) NOT NULL,
  `harga` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.hotel: ~4 rows (approximately)
DELETE FROM `hotel`;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` (`id`, `bintang_hotel`, `harga`) VALUES
	(1, 1, 1000000),
	(2, 2, 2000000),
	(3, 3, 3000000),
	(4, 4, 4000000),
	(5, 5, 5000000);
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
  KEY `konfirmasiPaket_index` (`id_pemesanan_paket`),
  CONSTRAINT `konfirmasiPaket_foreign` FOREIGN KEY (`id_pemesanan_paket`) REFERENCES `pemesanan_paket_tours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.konfirmasi_pembayarans: ~2 rows (approximately)
DELETE FROM `konfirmasi_pembayarans`;
/*!40000 ALTER TABLE `konfirmasi_pembayarans` DISABLE KEYS */;
INSERT INTO `konfirmasi_pembayarans` (`id`, `id_pemesanan_paket`, `foto`, `status`, `created_at`, `updated_at`) VALUES
	(3, 1, 'Tulips.jpg', '2', NULL, NULL),
	(4, 2, 'Lighthouse.jpg', '2', NULL, NULL),
	(5, 14, '021f21e395e384b8482b1c8969d0b623--doodle-sketch-sketch-drawing.jpg', '2', NULL, NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.konfirmasi_pemesanans: ~2 rows (approximately)
DELETE FROM `konfirmasi_pemesanans`;
/*!40000 ALTER TABLE `konfirmasi_pemesanans` DISABLE KEYS */;
INSERT INTO `konfirmasi_pemesanans` (`id`, `id_pemesanan`, `foto`, `status`, `created_at`, `updated_at`) VALUES
	(1, 6, 'struk/LD1QTOlCdTgV2SkSTtlk0wmnfoAzZYJiFFUqT5G0.png', '1', '2019-06-25 16:52:59', '2019-06-25 16:54:12'),
	(2, 7, 'struk/AXCLvQqHWOug8pORinEaILM0Ch138oCLzRJRIjwf.png', '1', '2019-06-26 04:08:43', '2019-06-26 04:09:14'),
	(4, 14, 'struk/sfcYIVZIUdYLkBbxZ7YLn3JrJqGH6sfc1ysVxRI2.jpeg', '1', '2019-06-30 18:42:17', '2019-06-30 18:42:34'),
	(5, 13, 'struk/YMF3yh32WOiHU9w7woxozVW57HYMJsTQUUDgSAHT.jpeg', '2', '2019-07-04 16:56:34', '2019-07-04 16:56:34');
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
	(1, 'surabaya', 'jawa timur', 10000, NULL, NULL),
	(2, 'jakarta', 'DKI jakarta', 10000, NULL, NULL),
	(3, 'malang', 'jawa timur', 10000, NULL, NULL),
	(4, 'jogjakarta', 'DIY', 10000, NULL, NULL),
	(5, 'bandung', 'jawa barat', 10000, NULL, NULL),
	(6, 'bali', 'bali', 10000, NULL, NULL);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.mobil: ~0 rows (approximately)
DELETE FROM `mobil`;
/*!40000 ALTER TABLE `mobil` DISABLE KEYS */;
INSERT INTO `mobil` (`id`, `harga_mobil`, `nama_mobil`) VALUES
	(1, 10000, 'elf satu');
/*!40000 ALTER TABLE `mobil` ENABLE KEYS */;

-- Dumping structure for table ta-alen.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
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
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
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
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.paket_tours: ~4 rows (approximately)
DELETE FROM `paket_tours`;
/*!40000 ALTER TABLE `paket_tours` DISABLE KEYS */;
INSERT INTO `paket_tours` (`id`, `nama_tour`, `harga`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 'Paket 1', 34324, 'Bodong1.PNG', '<p><strong>Tempat Wisata</strong> :&nbsp; - pabrk - pantai<br />\r\n<strong>Fasilitas</strong> : - Hotel (inap 3hari, makan 3x)<br />\r\n<strong>Person : 46 Orang</strong></p>', NULL, NULL),
	(7, 'paket99', 600000, 'Bodong6.PNG', '<p><strong>Tempat Wisata</strong> : goa, pantai, malioboro, gunung,<br />\r\n<strong>Hotel</strong> : hotel tentrem<br />\r\n<strong>Fasilitas</strong> : Makan 3x</p>', NULL, NULL),
	(8, 'Paket 10', 100000, 'Koala.jpg', '<p><strong>Tempat Wisata</strong> : - Malioboro - Benteng<br />\r\n<strong>Fasilitas</strong> : - Hotel (inap 3hari, makan 3x)<br />\r\n<strong>Person : 30 Orang</strong></p>', NULL, NULL),
	(9, 'paket 11', 900000, 'Penguins.jpg', '<p><strong>Tempat Wisata</strong> : - Goa Pindul \r\n                                    - pantai \r\n<br>\r\n<strong>Fasilitas</strong> : - Hotel (inap 3hari, makan 3x)\r\n<br>\r\n<strong>Person : 30 Orang</strong></p>', NULL, NULL);
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
  `id_hotel` int(99) unsigned DEFAULT NULL,
  `jumlah_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pemesanan_user_index` (`id_user`),
  KEY `pemesanan_bis_index` (`id_bis`),
  KEY `id_mobil` (`id_mobil`),
  KEY `id_hotel` (`id_hotel`),
  CONSTRAINT `pemesanan_bis_foreign` FOREIGN KEY (`id_bis`) REFERENCES `biss` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pemesanan_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.pemesanans: ~5 rows (approximately)
DELETE FROM `pemesanans`;
/*!40000 ALTER TABLE `pemesanans` DISABLE KEYS */;
INSERT INTO `pemesanans` (`id`, `id_user`, `nama_pelanggan`, `alamat`, `no_telp`, `jumlah_orang`, `id_kota`, `id_bis`, `id_mobil`, `tgl`, `tgl2`, `id_hotel`, `jumlah_total`, `created_at`, `updated_at`) VALUES
	(2, 10, NULL, NULL, NULL, 50, 1, 3, 1, NULL, NULL, 3, NULL, NULL, NULL),
	(6, 11, 'bayu', 'sumoroto', '432432432', 56, 1, 3, 1, '6/26/2019', '7/7/2019', 3, NULL, '2019-06-25 14:38:06', '2019-06-25 16:52:59'),
	(7, 12, 'alen alvero', 'ponorog', '4354365654', 40, 1, 3, 1, '6/26/2019', NULL, 3, NULL, '2019-06-26 04:06:53', '2019-06-26 10:22:48'),
	(13, 11, 'tes user', 'dddd', '+628331231334', 5, 1, NULL, 1, '7/1/2019', '7/8/2019', 3, NULL, '2019-06-30 17:18:20', '2019-07-04 16:56:34'),
	(14, 11, 'tes user', 'aaaa', '123123', 2, 1, NULL, 1, '7/1/2019', '7/9/2019', 3, NULL, '2019-06-30 18:10:36', '2019-06-30 18:42:17');
/*!40000 ALTER TABLE `pemesanans` ENABLE KEYS */;

-- Dumping structure for table ta-alen.pemesanan_paket_tours
CREATE TABLE IF NOT EXISTS `pemesanan_paket_tours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `nama_pelanggan_paket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paket` int(10) unsigned DEFAULT NULL,
  `tgl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pemesananPaket_user_index` (`id_user`),
  KEY `pemesananPaket_paket_index` (`id_paket`),
  CONSTRAINT `pemesananPaket_paket_foreign` FOREIGN KEY (`id_paket`) REFERENCES `paket_tours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pemesananPaket_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.pemesanan_paket_tours: ~4 rows (approximately)
DELETE FROM `pemesanan_paket_tours`;
/*!40000 ALTER TABLE `pemesanan_paket_tours` DISABLE KEYS */;
INSERT INTO `pemesanan_paket_tours` (`id`, `id_user`, `nama_pelanggan_paket`, `alamat`, `no_telp`, `id_paket`, `tgl`, `created_at`, `updated_at`) VALUES
	(1, 10, 'Allen Alvero', 'jalan s.parman 50 ponorogo', '081252017566', 1, '12/12/2009', NULL, NULL),
	(2, 10, 'dadasdas', 'dsads', '424', 1, '4', NULL, NULL),
	(7, 10, 'dsadsa', 'dsads', '21321', 1, '12/25/2018', NULL, NULL),
	(13, 10, 'alen', 'ponorogo', '1212', 1, '1/24/2019', '2019-01-02 14:18:20', '2019-01-02 14:18:20'),
	(14, 11, 'bayu', 'carat', '082323244232', 1, '7/18/2019', '2019-07-04 15:41:05', '2019-07-04 15:41:05');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.promos: ~2 rows (approximately)
DELETE FROM `promos`;
/*!40000 ALTER TABLE `promos` DISABLE KEYS */;
INSERT INTO `promos` (`id`, `nama_promo`, `kode`, `start`, `expired`, `diskon_persen`, `maksimal_diskon`) VALUES
	(1, 'Promo baru', 'WarokHa\'e', '2019-07-08', '2019-07-09', 10, 100000),
	(2, 'Diskon Akhir Bulan', 'AkhirBulan2019', '2019-07-10', '2019-07-31', 10, 50000);
/*!40000 ALTER TABLE `promos` ENABLE KEYS */;

-- Dumping structure for table ta-alen.promo_paket
CREATE TABLE IF NOT EXISTS `promo_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promo` int(11) NOT NULL DEFAULT '0',
  `id_paket` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ta-alen.promo_paket: ~0 rows (approximately)
DELETE FROM `promo_paket`;
/*!40000 ALTER TABLE `promo_paket` DISABLE KEYS */;
/*!40000 ALTER TABLE `promo_paket` ENABLE KEYS */;

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
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
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
  KEY `wisata_kota_index` (`id_kota`),
  CONSTRAINT `wisata_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kotas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ta-alen.tempat_wisatas: ~4 rows (approximately)
DELETE FROM `tempat_wisatas`;
/*!40000 ALTER TABLE `tempat_wisatas` DISABLE KEYS */;
INSERT INTO `tempat_wisatas` (`id`, `nama`, `id_kota`, `harga`, `created_at`, `updated_at`) VALUES
	(6, 'WTS', 5, 100001, NULL, NULL),
	(7, 'pantai kuta', 6, 100000, NULL, NULL),
	(8, 'dsadsadas', 1, 424242, NULL, NULL),
	(9, 'rungkut', 1, 160000, NULL, NULL);
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
  KEY `trayek_wisata_index` (`id_tempat_wisata`),
  CONSTRAINT `trayek_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kotas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trayek_wisata_foreign` FOREIGN KEY (`id_tempat_wisata`) REFERENCES `tempat_wisatas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
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
	(10, 'operator', 'operator@yahoo.com', '$2y$10$2hAy.hPZbVCh/VitVVsT..qQNKhGtgcRJM741dixalqQFG1iXPROC', 'operator', 'Vt4sP6R6S2zVtAYGSA2NPZiKNHZiF9X9R1Lsb318FF753BczfAQGeaopMHAM', '2018-12-21 15:45:57', '2018-12-21 15:45:57'),
	(11, 'bayu', 'fanani707@gmail.com', '$2y$10$LadlLO4IKLy7lkokpR6/q.6Izez1laeFPAx9/4nMhRHj6JANXgj9W', 'user', '87G4C7VfFYEan1Q27oTprNM1poMiXRearqRIzdDGOv0JZfeFxugRFIfXdnU3', '2019-06-25 14:37:35', '2019-06-25 14:37:35'),
	(12, 'alen alvero', 'arrow1658229alen@gmail.com', '$2y$10$urVvBOkyckKwgTT.ypT3SOEgmmx/LLJ40ibyz7vwY1b6P6xeOmOIe', 'user', 'wTSqGDO15057QLZb0dPYnHJMc85Rfr9KzFwR051yIwlhtWJt2KtMZd0qXt7l', '2019-06-26 04:06:17', '2019-06-26 04:06:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
