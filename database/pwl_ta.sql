-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 05:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dosen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` int(11) DEFAULT NULL,
  `no_handphone` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama_dosen`, `foto`, `jenis_kelamin`, `no_handphone`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '20210001', 'Oh Sehun', 'images/v7ZLRBZcdFgAVpl7bKK894zuvmr6t24WO1uUNMiu.jpg', 1, '081999222888', 'Seoul', NULL, '2021-06-08 05:29:53'),
(3, '20210011', 'Naily', 'images/XEjYCgBmLlNVl95Yzy0TGsaDTGAz5YP14y3F8pvN.jpg', 1, '089922131', 'pasuruan', '2021-06-06 22:20:33', '2021-06-06 22:20:33'),
(4, '20210022', 'luluk', 'images/b5u5JtSJ9Joe48dqsI5WvaQD43gTqYDuwkfr1j7w.jpg', 2, '0899221311', 'pasuruan', '2021-06-07 21:22:28', '2021-06-07 21:22:28'),
(11, '120023003', 'wulan', 'images/KcjEHmz2L8cXLqZJYcuoguqdquXFLiP1Os0bCuEq.jpg', 2, '0329423', 'pasuruan', '2021-06-22 13:01:57', '2021-06-22 13:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `dosen_id`, `kelas_id`, `jam_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, '2021-06-14 06:06:58', '2021-06-14 06:06:58'),
(6, 1, 1, 3, '2021-06-22 08:43:55', '2021-06-22 08:43:55'),
(7, 4, 2, 3, '2021-06-22 09:01:09', '2021-06-22 09:01:09'),
(8, 4, 2, 4, '2021-06-22 13:07:41', '2021-06-22 13:07:41'),
(9, 4, 1, 1, '2021-06-22 13:09:40', '2021-06-22 13:09:40'),
(10, 4, 1, 1, '2021-06-22 13:19:08', '2021-06-22 13:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai` time NOT NULL,
  `toleransi_waktu` time DEFAULT NULL,
  `selesai` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id`, `nama`, `mulai`, `toleransi_waktu`, `selesai`, `created_at`, `updated_at`) VALUES
(1, '1', '06:30:00', '16:30:00', '07:32:00', '2021-06-07 21:25:18', '2021-06-07 21:25:37'),
(2, 'Sistem Informasi', '08:30:00', '17:30:00', '18:30:00', '2021-06-22 01:57:22', '2021-06-22 09:00:47'),
(3, 'Basis Data', '14:00:00', '17:45:00', '18:00:00', '2021-06-22 07:10:34', '2021-06-22 08:43:39'),
(4, 'PBO', '20:00:00', '21:00:00', '21:30:00', '2021-06-22 13:05:55', '2021-06-22 13:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'TI-2C', '2021-06-07 21:01:54', '2021-06-07 21:01:54'),
(2, 'TI-1A', '2021-06-22 06:19:51', '2021-06-22 06:19:51'),
(3, 'TI-2D', '2021-06-22 13:04:47', '2021-06-22 13:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_handphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `foto`, `jenis_kelamin`, `no_handphone`, `alamat`, `created_at`, `updated_at`, `kelas_id`, `id_user`) VALUES
(1, '1941720044', 'wildan alam', 'images/iK3QF5JV3zfjoCpzLCDpuMuXi2mWfYVRBmLCKR51.jpg', '1', '089922131001', 'pasuruan', '2021-06-07 21:21:29', '2021-06-22 06:38:28', 1, NULL),
(2, '1941720088', 'Arif Setiawan', 'images/UIdg9sFnJREihuBIaemtmPHymDtr3wZ0mjmYBxlI.jpg', '1', '089766556445', 'pasuruan', '2021-06-22 01:45:46', '2021-06-22 13:00:43', 1, '5'),
(4, '1941720090', 'Reza', 'images/OV60g89d7U9FJy9dP5QUuBZ6mHlBr81wuyJPO6ze.jpg', '1', '0899221310', 'pasuruan', '2021-06-22 08:59:43', '2021-06-22 08:59:43', 2, '7'),
(5, '202100001', 'Mufida S', 'images/0C3vOl9823EsNepexJig2B6cfAqMokmdHOcnwMSO.jpg', '2', '099201232', 'pasuruan', '2021-06-22 12:59:21', '2021-06-22 12:59:39', 2, '8');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_matakuliah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `jam` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_dosen` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama_matakuliah`, `sks`, `jam`, `created_at`, `updated_at`, `id_dosen`) VALUES
(1, 'pemograman web', 2, 4, '2021-06-03 08:32:09', '2021-06-08 01:04:45', 1),
(3, 'basis data', 2, 2, '2021-06-07 21:23:53', '2021-06-08 00:55:41', 4),
(4, 'sistem informasi', 1, 2, '2021-06-08 00:33:42', '2021-06-08 00:33:42', 4),
(5, 'Machine Learning', 4, 3, '2021-06-22 06:20:24', '2021-06-22 06:20:36', 3),
(6, 'Pemograman Berbasis Objek', 3, 3, '2021-06-22 13:04:02', '2021-06-22 13:04:22', 4),
(7, 'Basis Data', 3, 3, '2021-06-22 13:25:01', '2021-06-22 13:25:01', 1);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_06_01_044426_create_dosens_table', 2),
(6, '2021_06_01_050821_create_matakuliahs_table', 2),
(7, '2021_06_01_043937_create_mahasiswas_table', 3),
(8, '2021_06_06_060721_update_table_mahasiswa', 4),
(9, '2021_06_06_143547_create_kelas_table', 4),
(10, '2021_06_07_030002_create_jams_table', 4),
(11, '2021_06_07_045011_update_tabel_dosen', 5),
(12, '2021_06_07_135150_relasi_dosen_matakuliah', 6),
(13, '2021_06_07_073826_relasi_kelas_mahasiswa', 7),
(14, '2021_06_09_082543_tambah_kolom_toleransi_waktu', 8),
(15, '2021_06_09_083129_create_jadwals_table', 8),
(16, '2021_06_13_065119_create_presensis_table', 9),
(18, '2021_06_17_140132_create_permissions_table', 10),
(21, '2021_06_19_032252_tambah_kolom_role', 11),
(22, '2021_06_21_055019_tambah_kolom_id_user', 12);

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
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jadwal_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `mahasiswa_id`, `jadwal_id`, `status`, `created_at`, `updated_at`) VALUES
(4, 4, 7, 'Masuk', '2021-06-22 09:07:30', '2021-06-22 09:07:30'),
(339, 2, 2, 'Masuk', '2021-06-22 08:39:57', '2021-06-22 08:39:57'),
(340, 2, 6, 'Masuk', '2021-06-22 08:44:17', '2021-06-22 08:44:17'),
(342, 2, 9, 'Telat', '2021-06-22 13:15:58', '2021-06-22 13:15:58'),
(343, 2, 10, 'Telat', '2021-06-22 13:21:03', '2021-06-22 13:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'Luluk', 'lulukmufida0015@gmail.com', NULL, '$2y$10$JYi/gix750AbQgubaLEqkO5oNOxRnmn6p.aaQJcR46v1KLJAjdN0a', NULL, '2021-06-07 16:39:55', '2021-06-07 16:39:55', 'administrator'),
(2, 'administrator', 'admin@gmail.com', NULL, '$2y$10$QGHa3WgsGAxyo5issSsADuionf.bEcEP1RpWDUPkHdwMxDDBgrgWu', NULL, '2021-06-18 20:42:05', '2021-06-18 20:42:05', 'administrator'),
(3, 'Baga Dharma Sembada', '1941720216@gmail.com', NULL, '$2y$10$GR09ixWzD1/hinpb4itYneRWdN32tbpURxCx7yIPYDtrS1PCaXQDa', NULL, '2021-06-20 23:11:16', '2021-06-20 23:11:16', 'mahasiswa'),
(4, 'Naily', '1941720011@gmail.com', NULL, '$2y$10$qFagcqwZzzULjRrKa.vrQehegKIaTk31VwR5/5S1.Mugyi27sj.B.', NULL, '2021-06-20 23:13:24', '2021-06-20 23:13:24', 'mahasiswa'),
(5, 'Arif', '1941720088@gmail.com', NULL, '$2y$10$wST8MjZRsLArJLZNvsSZbuf3zEu28LvgrlsBn9i40FpXm9Q8jJlHS', NULL, '2021-06-22 01:45:46', '2021-06-22 01:45:46', 'mahasiswa'),
(7, 'Reza', '1941720090@gmail.com', NULL, '$2y$10$fxgalW0TuLMBSxXtLYBt1eE5nl9GXEmHZno5T3yX.tP9Wc7/S.spq', NULL, '2021-06-22 08:59:43', '2021-06-22 08:59:43', 'mahasiswa'),
(8, 'Mufida', '202100001@gmail.com', NULL, '$2y$10$31Gv3slM.L1J6rAjSqN3.eeRn3P.fKEpo7B9chySkGk5tPLNFsYG.', NULL, '2021-06-22 12:59:21', '2021-06-22 12:59:21', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_dosen_id_foreign` (`dosen_id`),
  ADD KEY `jadwal_kelas_id_foreign` (`kelas_id`),
  ADD KEY `jadwal_jam_id_foreign` (`jam_id`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_nim_unique` (`nim`),
  ADD KEY `mahasiswa_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matakuliah_id_dosen_foreign` (`id_dosen`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presensi_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `presensi_jadwal_id_foreign` (`jadwal_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `jadwal_jam_id_foreign` FOREIGN KEY (`jam_id`) REFERENCES `jam` (`id`),
  ADD CONSTRAINT `jadwal_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_id_dosen_foreign` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_jadwal_id_foreign` FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal` (`id`),
  ADD CONSTRAINT `presensi_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
