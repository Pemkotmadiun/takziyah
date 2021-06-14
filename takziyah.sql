-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 03:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takziyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'KARTOHARJO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(2, 'MANGUHARJO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(3, 'TAMAN', '2021-06-05 04:31:44', '2021-06-05 04:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahans`
--

CREATE TABLE `kelurahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelurahans`
--

INSERT INTO `kelurahans` (`id`, `kecamatan_id`, `kelurahan`, `created_at`, `updated_at`) VALUES
(1, 1, 'ORO-ORO OMBO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(2, 1, 'SUKOSARI', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(3, 1, 'KLEGEN', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(4, 1, 'REJOMULYO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(5, 1, 'PILANGBANGO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(6, 1, 'TAWANGREJO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(7, 1, 'KANIGORO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(8, 1, 'KARTOHARJO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(9, 1, 'KELUN', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(10, 2, 'MANGUHARJO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(11, 2, 'SOGATEN', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(12, 2, 'PATIHAN', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(13, 2, 'NGEGONG', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(14, 2, 'WINONGO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(15, 2, 'MADIUN LOR', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(16, 2, 'PANGONGANGAN', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(17, 2, 'NAMBANGAN LOR', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(18, 2, 'NAMBANGAN KIDUL', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(19, 3, 'MOJOREJO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(20, 3, 'PANDEAN', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(21, 3, 'BANJAREJO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(22, 3, 'KUNCEN', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(23, 3, 'MANISREJO', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(24, 3, 'KEJURON', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(25, 3, 'JOSENAN', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(26, 3, 'DEMANGAN', '2021-06-05 04:31:44', '2021-06-05 04:31:44'),
(27, 3, 'TAMAN', '2021-06-05 04:31:44', '2021-06-05 04:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelapor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_meninggal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_kematian` datetime DEFAULT NULL,
  `validasi_dukcapil` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_dinsos` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_validasi_dukcapil` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_validasi_dinsos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_validasi_dukcapil` datetime DEFAULT NULL,
  `waktu_validasi_dinsos` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id`, `nama_pelapor`, `alamat_email`, `no_telepon`, `nama_meninggal`, `keterangan`, `link`, `created_at`, `updated_at`, `status`, `waktu_kematian`, `validasi_dukcapil`, `validasi_dinsos`, `keterangan_validasi_dukcapil`, `keterangan_validasi_dinsos`, `waktu_validasi_dukcapil`, `waktu_validasi_dinsos`) VALUES
(14, 'Michael Wijaya', 'wijaya@gmail.com', '081122117711', 'Pangeran Yoel H.Simorangkir', '-', 'tITFOPHYRyndvKAj18Mp3xSJCB9DwL2XZqhQfsz5WlkbVEuear47o6mcGi0gNU', '2021-06-10 03:21:32', '2021-06-11 09:09:08', NULL, '2021-06-09 12:00:00', '1', '2', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `laporan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jenis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `laporan_id`, `jenis`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 0, 14, 'Input Laporan Kematian', NULL, '2021-06-10 03:21:32', '2021-06-10 03:21:32'),
(3, 0, 14, 'Input Pengajuan Santunan Kematian', NULL, '2021-06-10 06:05:58', '2021-06-10 06:05:58'),
(4, 3, 14, 'Validasi Dukcapil : Diterima', 'Akte Kematian Diterbitkan', '2021-06-10 06:50:47', '2021-06-10 06:50:47'),
(15, 2, 14, 'Validasi Surat Permohonan Santunan Kematian : Diterima', NULL, '2021-06-11 07:13:53', '2021-06-11 07:13:53'),
(16, 2, 14, 'Validasi KTP-EL Masyarakat yang Meninggal : Ditolak', 'Foto tidak jelas', '2021-06-11 07:14:05', '2021-06-11 07:14:05'),
(17, 2, 14, 'Validasi Akta Kematian atau Surat Keterangan Lahir Mati : Diterima', NULL, '2021-06-11 07:14:32', '2021-06-11 07:14:32'),
(18, 2, 14, 'Validasi KTP-EL Ahli Waris : Diterima', '-', '2021-06-11 07:58:44', '2021-06-11 07:58:44'),
(19, 2, 14, 'Validasi KK Ahli Waris : Diterima', '-', '2021-06-11 08:38:32', '2021-06-11 08:38:32'),
(20, 0, 14, 'Upload Ulang KTP-EL Masyarakat yang Meninggal', '', '2021-06-11 09:06:28', '2021-06-11 09:06:28'),
(21, 2, 14, 'Validasi KTP-EL Masyarakat yang Meninggal : Diterima', NULL, '2021-06-11 09:08:34', '2021-06-11 09:08:34'),
(22, 2, 14, 'Validasi Surat Pernyataan Ahli Waris : Ditolak', 'Tidak sesuai', '2021-06-11 09:09:08', '2021-06-11 09:09:08');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_26_040310_create_opds_table', 1),
(4, '2020_05_26_041638_create_permission_tables', 2),
(5, '2014_10_12_100000_create_password_resets_table', 3),
(7, '2021_05_28_061336_create_laporans_table', 4),
(8, '2021_05_31_031317_add_status_on_laporans_table', 5),
(13, '2021_05_31_031410_create_logs_table', 6),
(14, '2021_05_31_034758_create_pengajuan_santunans_table', 6),
(15, '2021_05_31_063026_add_waktu_on_laporans_table', 6),
(16, '2021_06_03_031957_add_status_on_pengajuan_santunans_table', 6),
(17, '2021_06_05_112837_create_kecamatans_table', 7),
(18, '2021_06_05_112849_create_kelurahans_table', 7),
(19, '2021_06_05_130341_create_penerbitans_table', 8),
(20, '2021_06_07_092528_add_validasi_on_laporans_table', 9),
(21, '2021_06_08_113301_add_keterangan_on_laporans_table', 10),
(22, '2021_06_08_132908_add_waktu_validasi_on_laporans_table', 11),
(23, '2021_06_08_155112_add_berkas_on_pengajuan_santunans_table', 12),
(25, '2021_06_10_142749_add_level_on_users_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 4),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(5, 'App\\User', 7);

-- --------------------------------------------------------

--
-- Table structure for table `opds`
--

CREATE TABLE `opds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_kepala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kepala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat_kepala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_kepala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `penerbitans`
--

CREATE TABLE `penerbitans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `laporan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nik_valid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap_valid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akte_kematian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penerbitans`
--

INSERT INTO `penerbitans` (`id`, `laporan_id`, `nik_valid`, `nama_lengkap_valid`, `akte_kematian`, `ktp`, `kk`, `created_at`, `updated_at`) VALUES
(3, 14, '1234567890123456', 'Pangeran Yoel H.Simorangkir', 'assets/dokumen/14/penerbitan/uU8VbJABvjGx94Yev9m5D72FxxiTdXfEb80IXhmM.jpeg', 'assets/dokumen/14/penerbitan/O2C4tJQzkRSeg5g9HX0EE0TBJDoGFZk0Wy9nHrs2.jpeg', 'assets/dokumen/14/penerbitan/aAV9aCY2oiAtU8McYVZbvgIr0ymtxdjfMaM0GiGw.jpeg', '2021-06-10 06:50:47', '2021-06-10 06:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_santunans`
--

CREATE TABLE `pengajuan_santunans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `laporan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nik_meninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_meninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp_meninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kk_meninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp_saksi_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp_saksi_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_keterangan_meninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_kematian` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_permohonan_santunan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp_masyarakat_meninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akta_kematian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp_ahli_waris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kk_ahli_waris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_pernyataan_ahli_waris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akta_kelahiran_ahli_waris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening_ahli_waris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_surat_permohonan_santunan` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_ktp_masyarakat_meninggal` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_akta_kematian` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_ktp_ahli_waris` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_kk_ahli_waris` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_surat_pernyataan_ahli_waris` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_akta_kelahiran_ahli_waris` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_rekening_ahli_waris` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_surat_permohonan_santunan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_ktp_masyarakat_meninggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_akta_kematian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_ktp_ahli_waris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_kk_ahli_waris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_surat_pernyataan_ahli_waris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_akta_kelahiran_ahli_waris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_rekening_ahli_waris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan_santunans`
--

INSERT INTO `pengajuan_santunans` (`id`, `laporan_id`, `nik_meninggal`, `nama_meninggal`, `ktp_meninggal`, `kk_meninggal`, `ktp_saksi_1`, `ktp_saksi_2`, `surat_keterangan_meninggal`, `waktu_kematian`, `created_at`, `updated_at`, `status`, `surat_permohonan_santunan`, `ktp_masyarakat_meninggal`, `akta_kematian`, `ktp_ahli_waris`, `kk_ahli_waris`, `surat_pernyataan_ahli_waris`, `akta_kelahiran_ahli_waris`, `rekening_ahli_waris`, `validasi_surat_permohonan_santunan`, `validasi_ktp_masyarakat_meninggal`, `validasi_akta_kematian`, `validasi_ktp_ahli_waris`, `validasi_kk_ahli_waris`, `validasi_surat_pernyataan_ahli_waris`, `validasi_akta_kelahiran_ahli_waris`, `validasi_rekening_ahli_waris`, `keterangan_surat_permohonan_santunan`, `keterangan_ktp_masyarakat_meninggal`, `keterangan_akta_kematian`, `keterangan_ktp_ahli_waris`, `keterangan_kk_ahli_waris`, `keterangan_surat_pernyataan_ahli_waris`, `keterangan_akta_kelahiran_ahli_waris`, `keterangan_rekening_ahli_waris`) VALUES
(3, 14, '1234567890123456', 'Pangeran Yoel H.Simorangkir', NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-10 06:05:58', '2021-06-11 09:06:28', '0', 'assets/dokumen/14/pengajuan/GdxmLtvGduGwAdGf0OmtsILvQ5ioHhG6wXIegxXr.jpeg', 'assets/dokumen/14/pengajuan/SeqntxvytwlUmpVWokWRC1oqlk9vBqO9X0gDCT5t.jpeg', 'assets/dokumen/14/pengajuan/tJUv976hp3nhlaXqHK7xvp7LSvADWOwaKT951ftf.jpeg', 'assets/dokumen/14/pengajuan/ZREikuxAMPqty2URZX6WtMA052S7HLvdHs3jy2uu.jpeg', 'assets/dokumen/14/pengajuan/T7d3o7ccXef9teuF3R1z4JgnLqFqDbAaATkceGC5.jpeg', 'assets/dokumen/14/pengajuan/R2TJAfmLzqV5qzwKDI1UHBZjDx0zV0rNNEgcHvDK.jpeg', 'assets/dokumen/14/pengajuan/UQbOLVYeBHLBzRozOAfZCRTbAYxWZ1IRQAN5m7t3.jpeg', 'assets/dokumen/14/pengajuan/TvWzHrNMuylJf48ebf5YVoCPfz8zVOyV9Pnd3ZsG.jpeg', '1', '1', '1', '1', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, '-', 'Tidak sesuai', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2020-06-08 01:34:40', '2020-06-08 01:34:40'),
(2, 'admin', 'web', '2020-06-08 01:34:40', '2020-06-08 01:34:40'),
(3, 'dukcapil', 'web', '2020-06-08 01:34:40', '2020-06-08 01:34:40'),
(4, 'dinsos', 'web', '2020-06-08 01:34:40', '2020-06-08 01:34:40'),
(5, 'user', 'web', '2020-06-08 01:34:40', '2020-06-08 01:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `level` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Berlin Wibi S', 'berlinwibi', '2020-06-08 01:24:46', '$2y$10$0giA845GnMB54QAOY/eBUOTRZUozdaP6Bhc67uDWeF8g.vkeei4Uq', 'rqrGtqcUHnKgMfUeQXxZInjl9jSwXvzsfFmEFcwoJOZxu479uEP7FUbDwjUr', '2020-06-08 00:51:20', '2020-06-08 01:18:16', NULL),
(2, 'Dinas Sosial, PP dan PA', 'dinsos', '2020-06-08 01:24:46', '$2y$10$FHtwSqbRNdHIpIxEfndONebOVOpVJrGC3w5wGUcrCq5fYqHQnLzoq', NULL, '2020-06-08 01:24:46', '2020-06-08 01:24:46', 4),
(3, 'Dinas Kependudukan dan Pencatatan Sipil', 'dukcapil', '2020-06-08 01:24:46', '$2y$10$h0sf5ZF3CguF9Br2B563DOUxL3iv8UegF2rd43QeR0A7j5WDyZ7Lq', NULL, '2020-06-08 01:40:04', '2021-06-07 09:49:27', 3),
(4, 'Super Admin', 'superadmin', '2020-06-08 01:24:46', '$2y$10$FHtwSqbRNdHIpIxEfndONebOVOpVJrGC3w5wGUcrCq5fYqHQnLzoq', NULL, '2020-06-08 01:58:04', '2020-06-08 01:58:04', NULL),
(7, 'User', 'user', '2020-06-08 01:24:46', '$2y$10$FHtwSqbRNdHIpIxEfndONebOVOpVJrGC3w5wGUcrCq5fYqHQnLzoq', NULL, '2020-06-08 01:24:46', '2020-06-08 01:24:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `opds`
--
ALTER TABLE `opds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penerbitans`
--
ALTER TABLE `penerbitans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_santunans`
--
ALTER TABLE `pengajuan_santunans`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelurahans`
--
ALTER TABLE `kelurahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `opds`
--
ALTER TABLE `opds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penerbitans`
--
ALTER TABLE `penerbitans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajuan_santunans`
--
ALTER TABLE `pengajuan_santunans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
