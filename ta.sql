-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 03:49 AM
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
  `jenis_bis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_po` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biss`
--

INSERT INTO `biss` (`id`, `jenis_bis`, `nama_po`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Large', 'Sugeng Rahayu', 9999999, NULL, NULL);

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
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2018_11_10_165311_create_pemesanans_table', 1),
(6, '2018_11_10_165322_create_detail_paket_tours_table', 1),
(7, '2018_11_27_154223_create_password_resets_table', 2),
(8, '2018_11_27_154247_create_users_table', 3),
(9, '2018_11_27_155115_create_password_resets_table', 4),
(10, '2018_11_27_155129_create_users_table', 4),
(11, '2018_12_02_202816_create_kotas_table', 5),
(12, '2018_12_02_203831_create_biss_table', 5),
(13, '2018_11_10_165312_create_pemesanans_table', 6),
(14, '2018_11_10_165313_create_pemesanans_table', 7),
(15, '2018_12_02_205828_create_konfirmasi_biss_table', 8),
(16, '2018_12_02_212434_create_konfirmasi_pembayarans_table', 8),
(17, '2018_12_02_212435_create_konfirmasi_pembayarans_table', 9),
(18, '2018_11_27_155130_create_users_table', 10),
(19, '2018_11_27_155131_create_users_table', 11),
(20, '2018_12_02_212436_create_konfirmasi_pembayarans_table', 12),
(21, '2018_11_10_165314_create_pemesanans_table', 13),
(22, '2018_12_02_202817_create_kotas_table', 14),
(23, '2018_12_04_103330_create_tempat_wisatas_table', 15),
(24, '2018_12_04_103331_create_tempat_wisatas_table', 16),
(25, '2018_12_04_104310_create_trayeks_table', 17),
(26, '2018_11_10_165316_create_pemesanans_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `paket_tours`
--

CREATE TABLE `paket_tours` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_tours`
--

INSERT INTO `paket_tours` (`id`, `nama_tour`, `harga`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'asdasdas', 4342342, 'dsadsdsa', '2018-11-28 17:00:00', '2018-11-29 17:00:00');

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
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama`, `telp`, `alamat`, `email`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'alen', '53425', 'fhhjksdbfjdshfj', 'hkdjshfjsh', 'hdjshfkjdsh', NULL, NULL),
(2, 'bayu', '48589345', 'ndjasndksjb', 'djksadbjasgd', 'djkbfjdsbfhds', NULL, NULL),
(4, 'fhdjshfjshjkf', '5353', 'ndjsnfjkdsb', 'fskhfdskjfhj', 'fhdskhfskjfh', NULL, NULL),
(5, 'jfksjfksj', '53543', 'fjkfjkdsfjkshfj', 'fjkshfkjsdfhj', 'fksjhfskjhf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pelanggan` int(10) UNSIGNED DEFAULT NULL,
  `jumlah_orang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_trayek` int(10) UNSIGNED DEFAULT NULL,
  `id_bis` int(10) UNSIGNED DEFAULT NULL,
  `tgl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_konfirmasi` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(7, 'pantai kuta', 6, 100000, NULL, NULL);

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
(3, 'alen1234', 'kakakakakaka', '$2y$10$6V8YLYEHlRtE1Tt3zfXHQeZsbjUioHqIbPF5NxPMsm9nS/zCf9mES', 'operator', 'r72I5AcnfC2dR2wMb5BbdgHePQdUvXASXGliEJHaR0qZsWVlnH5v3QC7GbcA', '2018-12-03 07:09:05', '2018-12-04 14:03:03'),
(4, 'dsadadssa', 'sadsdsa', '$2y$10$OcH/MWlnOeM.JLfIsjzXH.PqID17aBD/mKzN7Gv5q0j6DUTTMkply', 'admin', NULL, '2018-12-05 09:11:52', '2018-12-05 09:11:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biss`
--
ALTER TABLE `biss`
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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `paket_tours`
--
ALTER TABLE `paket_tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_pelanggan_index` (`id_pelanggan`),
  ADD KEY `pemesanan_trayek_index` (`id_trayek`),
  ADD KEY `pemesanan_bis_index` (`id_bis`),
  ADD KEY `pemesanan_konfirmasi_index` (`id_konfirmasi`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `paket_tours`
--
ALTER TABLE `paket_tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tempat_wisatas`
--
ALTER TABLE `tempat_wisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trayeks`
--
ALTER TABLE `trayeks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD CONSTRAINT `pemesanan_bis_foreign` FOREIGN KEY (`id_bis`) REFERENCES `biss` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_konfirmasi_foreign` FOREIGN KEY (`id_konfirmasi`) REFERENCES `konfirmasi_pembayarans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_trayek_foreign` FOREIGN KEY (`id_trayek`) REFERENCES `trayeks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
