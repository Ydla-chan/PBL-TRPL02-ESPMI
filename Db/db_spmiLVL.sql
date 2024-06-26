-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2024 at 12:21 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmilvl`
--
CREATE DATABASE IF NOT EXISTS `spmilvl` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `spmilvl`;

-- --------------------------------------------------------

--
-- Table structure for table `capaian`
--

CREATE TABLE `capaian` (
  `id_capaian` bigint UNSIGNED NOT NULL,
  `id_target` bigint UNSIGNED NOT NULL,
  `Triwulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penilaian_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penilaian_auditor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian_auditor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capaian`
--

INSERT INTO `capaian` (`id_capaian`, `id_target`, `Triwulan`, `penilaian_pengguna`, `uraian_pengguna`, `dokumen`, `penilaian_auditor`, `uraian_auditor`, `created_at`, `updated_at`) VALUES
(1, 7, '2', '', '', 'ABCC', 'tidak tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(2, 1, '3', 'tidak tercapai', '', 'ABCC', 'tidak tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(3, 4, '4', 'terlampaui', 'Terisi', 'ABCC', 'tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(4, 6, '4', 'tidak tercapai', '', 'ABCC', 'tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(5, 2, '1', 'terlampaui', '', 'ABCC', 'tidak tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(6, 7, '3', 'terlampaui', '', 'ABCC', 'tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(7, 2, '4', 'tercapai', 'Terisi', 'ABCC', 'terlampaui', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(8, 4, '2', '', 'Terisi', 'ABCC', 'tidak tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(9, 6, '4', 'tercapai', '', 'ABCC', 'tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(10, 6, '4', 'tidak tercapai', '', 'ABCC', 'tidak tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(11, 8, '2', '', '', 'ABCC', 'tidak tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(12, 6, '2', '', 'Terisi', 'ABCC', 'terlampui', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(13, 2, '4', 'terlampaui', '', 'ABCC', 'tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(14, 6, '4', 'tercapai', '', 'ABCC', 'terlampaui', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(15, 6, '1', 'tidak tercapai', 'Terisi', 'ABCC', 'tidak tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(16, 7, '4', 'tercapai', 'Terisi', 'ABCC', 'tidak tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(17, 7, '1', 'tidak tercapai', '', 'ABCC', 'terlampaui', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(18, 4, '1', 'tercapai', 'Terisi', 'ABCC', 'tidak tercapai', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(19, 8, '3', 'terlampaui', 'Terisi', 'ABCC', 'terlampui', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(20, 7, '2', 'tercapai', '', 'ABCC', 'terlampui', 'Belum tercapai banyak yang salah', '2024-06-12 08:57:13', '2024-06-12 08:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `kebijakanspmi`
--

CREATE TABLE `kebijakanspmi` (
  `id_dokumen` bigint UNSIGNED NOT NULL,
  `link_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manual`
--

CREATE TABLE `manual` (
  `id_manual` bigint UNSIGNED NOT NULL,
  `id_standar` bigint UNSIGNED NOT NULL,
  `id_substandar` bigint UNSIGNED NOT NULL,
  `id_siklus` bigint UNSIGNED NOT NULL,
  `id_unitkerja` bigint UNSIGNED NOT NULL,
  `macam_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktivitas_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manual`
--

INSERT INTO `manual` (`id_manual`, `id_standar`, `id_substandar`, `id_siklus`, `id_unitkerja`, `macam_kerja`, `aktivitas_pekerjaan`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 5, 5, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(2, 3, 7, 2, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(3, 2, 6, 3, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(4, 3, 4, 1, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(5, 3, 9, 2, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(6, 1, 8, 2, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(7, 3, 9, 4, 5, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(8, 4, 5, 1, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(9, 1, 6, 3, 4, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(10, 2, 8, 2, 4, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(11, 4, 10, 3, 4, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(12, 2, 8, 3, 4, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(13, 4, 9, 4, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(14, 1, 9, 4, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(15, 3, 6, 1, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(16, 4, 7, 5, 5, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(17, 3, 8, 2, 5, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(18, 4, 2, 5, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(19, 4, 1, 1, 3, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(20, 2, 7, 5, 4, 'Kerja apa', 'Tidur', 'Malam hari', '2024-06-12 08:57:13', '2024-06-12 08:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_05_19_005710_create_unitkerja_table', 1),
(4, '2024_05_19_011222_create_manual_table', 1),
(5, '2024_05_19_011300_create_standar_table', 1),
(6, '2024_05_19_011337_create_siklus_table', 1),
(7, '2024_05_19_011411_create_targetmutu_table', 1),
(8, '2024_05_19_011454_create_substandar_table', 1),
(9, '2024_05_19_012014_create_capaian_table', 1),
(10, '2024_05_30_080000_create__kebijakan_s_p_m_i_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siklus`
--

CREATE TABLE `siklus` (
  `id_siklus` bigint UNSIGNED NOT NULL,
  `nama_siklus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siklus`
--

INSERT INTO `siklus` (`id_siklus`, `nama_siklus`, `created_at`, `updated_at`) VALUES
(1, 'Penetapan', '2024-06-12 08:57:11', '2024-06-12 08:57:11'),
(2, 'Pelaksanaan', '2024-06-12 08:57:11', '2024-06-12 08:57:11'),
(3, 'Evaluasi', '2024-06-12 08:57:11', '2024-06-12 08:57:11'),
(4, 'Pengendalian', '2024-06-12 08:57:11', '2024-06-12 08:57:11'),
(5, 'Peningkatan', '2024-06-12 08:57:12', '2024-06-12 08:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `standar`
--

CREATE TABLE `standar` (
  `id_standar` bigint UNSIGNED NOT NULL,
  `nama_standar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `standar`
--

INSERT INTO `standar` (`id_standar`, `nama_standar`, `created_at`, `updated_at`) VALUES
(1, 'Standar Pendidikan', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(2, 'Standar Penelitian', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(3, 'Standar Pengabdian Kepada Masyarkat', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(4, 'Standar Layanan', '2024-06-12 08:57:12', '2024-06-12 08:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `substandar`
--

CREATE TABLE `substandar` (
  `id_substandar` bigint UNSIGNED NOT NULL,
  `id_standar` bigint UNSIGNED NOT NULL,
  `nama_substandar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `targetmutu`
--

CREATE TABLE `targetmutu` (
  `id_target` bigint UNSIGNED NOT NULL,
  `id_standar` bigint UNSIGNED NOT NULL,
  `id_substandar` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `butir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `standar_mutu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_capaian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cara_mengukur` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_unitkerja` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `targetmutu`
--

INSERT INTO `targetmutu` (`id_target`, `id_standar`, `id_substandar`, `judul`, `butir`, `standar_mutu`, `target_capaian`, `indikator`, `cara_mengukur`, `target_waktu`, `id_unitkerja`, `created_at`, `updated_at`) VALUES
(1, 3, 10, 'aku turu', '20', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(2, 4, 10, 'aku turu', '23', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 3, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(3, 2, 5, 'aku turu', '22', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(4, 3, 2, 'aku turu', '22', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 3, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(5, 4, 5, 'aku turu', '20', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(6, 1, 4, 'aku turu', '20', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 3, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(7, 4, 4, 'aku turu', '20', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 3, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(8, 1, 9, 'aku turu', '22', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(9, 3, 8, 'aku turu', '22', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(10, 2, 5, 'aku turu', '22', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(11, 1, 1, 'aku turu', '20', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(12, 2, 1, 'aku turu', '23', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 4, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(13, 3, 10, 'aku turu', '23', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 4, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(14, 1, 7, 'aku turu', '23', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 3, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(15, 4, 5, 'aku turu', '22', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(16, 4, 5, 'aku turu', '20', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(17, 3, 1, 'aku turu', '20', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(18, 2, 2, 'aku turu', '20', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 3, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(19, 1, 5, 'aku turu', '23', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 5, '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
(20, 3, 8, 'aku turu', '22', 'jnejkfnw', 'wfwef', 'wefwef', 'wefwef', 'wefwef', 4, '2024-06-12 08:57:13', '2024-06-12 08:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `unitkerja`
--

CREATE TABLE `unitkerja` (
  `id_unitkerja` bigint UNSIGNED NOT NULL,
  `nama_unitkerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unitkerja`
--

INSERT INTO `unitkerja` (`id_unitkerja`, `nama_unitkerja`, `created_at`, `updated_at`) VALUES
(1, 'P4M', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(2, 'Manajemen', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(3, 'Kajur', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(4, 'SBAK', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(5, 'KPS', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(6, 'SBKK', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(7, 'SBPK', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(8, 'SBUM', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(9, 'Perpustakaan', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(10, 'UPT-SI', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(11, 'PKPK', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(12, 'P3M', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(13, 'Audit', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(14, 'UPT-Pengadaan', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(15, 'UPT-PP', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(16, 'Shilau', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(17, 'SPI', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(18, 'Direktur', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(19, 'Pudir I', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(20, 'Pudir II', '2024-06-12 08:57:12', '2024-06-12 08:57:12'),
(21, 'Pudir III', '2024-06-12 08:57:12', '2024-06-12 08:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_unitkerja` bigint UNSIGNED NOT NULL,
  `NIK` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlProfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_unitkerja`, `NIK`, `nama`, `email`, `jk`, `role`, `notelp`, `urlProfile`, `created_at`, `updated_at`) VALUES
('027b43ee-c4b8-4ece-a3c7-5fb6423aea40', 18, '4342301073', 'VmacrOlehc', 'lkndKmcXkI@example.com', 'P', 'user', '08368596215', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('05c3969d-751f-4743-9a79-8dae84d200fe', 15, '4342301090', 'a0ui6BMHXr', 'NBeSpAOZeo@example.com', 'P', 'user', '08733599881', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('06ca0b00-478f-47c8-9c0f-421cc7275b5e', 4, '4342301016', 'OKNrfdpTcC', 'uISLMRMdfO@example.com', 'P', 'user', '08281007683', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('08bb900a-7723-4b23-89d7-4ef1394f6913', 18, '4342301102', '6y9zbNkaok', 'So6nbJytZ5@example.com', 'P', 'user', '08705071489', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('093a9752-0ee9-4689-87da-6eea773a82a2', 5, '4342301055', 'GWZhCnSeBk', '1n6UTkKz3L@example.com', 'P', 'user', '08894737038', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('0b74473a-47ff-468e-a4f2-86b330f66103', 12, '4342301045', 'OGkWU23ujC', 'uyrghB2jyW@example.com', 'P', 'user', '08116648023', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('0c86db35-53f9-401b-8534-a10aa7ec74bb', 8, '4342301075', '8ZvolfEY2i', 'QNmAYoOGBN@example.com', 'P', 'user', '08539643930', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('0c921a62-8aa0-4bf9-ba04-5c5c3b69a66d', 17, '4342301082', 'NHi3gSy5N0', 'ywRJ0cpr9L@example.com', 'P', 'user', '08123016676', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('0d4cb48c-b9b5-4586-bfc5-1839abe1d8ed', 20, '4342301056', 'PBRpgBN8DE', '43L9NAYuGu@example.com', 'P', 'user', '08103084382', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('11de5c0f-c509-47e7-8d30-37b679d41cef', 8, '4342301026', 'dCNlla5JNU', 'u6JTlcnitA@example.com', 'P', 'user', '08793085674', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('132107f2-380d-4d2a-ac26-3fbed10deeb9', 10, '4342301063', 'OXwFjd4ccp', 'bVwSgTXzeU@example.com', 'P', 'user', '08260022971', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('143afa55-3724-4c45-a5a8-bdc20cd7591f', 6, '4342301072', '5g9UgUQex9', 'EHiIp33ZRV@example.com', 'P', 'user', '08653380038', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('179186c8-53e5-40b6-ab47-f91cb1f53a4e', 21, '4342301020', 'nByS1BGD0J', 'xAcABFoC46@example.com', 'P', 'user', '08142683379', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('18c665df-e8f8-4a87-b09b-39aa08007a8d', 12, '4342301070', 'BBhQX2ziVo', 'aikT95H67f@example.com', 'P', 'user', '08498321800', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('19156f9d-dd81-4bb4-83f2-e267297851bb', 15, '4342301064', '026LcvtD1M', 'Tsun0xym1i@example.com', 'P', 'user', '08219282593', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('192222b2-3f58-42f7-af31-33b37c4b51a5', 14, '4342301033', 'angZjEj8ju', 'vSv8SD6r07@example.com', 'P', 'user', '08309683939', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('1aae71ba-0b05-4e7b-b58a-ea3539572a76', 21, '4342301054', '0DLCYEwtD9', 'yVxYgPPM6A@example.com', 'P', 'user', '08416487225', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('1be63226-9392-4a8f-be4a-0007a18144c7', 2, '4342301003', 'Aldy Jhonatan Hutasoit', 'Aldyjhonatanhutasoit.1@gmail.com', 'L', 'Mahasiswa', NULL, NULL, '2024-06-25 00:31:22', '2024-06-25 00:31:48'),
('1de2cbdc-ca82-4c57-b634-9d7ec9493f45', 12, '4342301109', 'izzhsp54rL', 'saH0xoDpzE@example.com', 'P', 'user', '08363871027', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('1df7d0be-71ae-46b4-84c7-fdc154061f03', 9, '4342301105', 'XBnGLlsPFx', 'foSMa76qtv@example.com', 'P', 'user', '08763523086', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('1e3ffbe8-1fc7-42d4-907b-ffed5aca11c3', 14, '4342301083', '49HGRGqrxd', 'hOGnGGI9b3@example.com', 'P', 'user', '08187214378', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('204a721a-ac7f-418e-a454-87914476a28f', 3, '4342301028', 'dAUToitkdA', 'UKQbHpaW5N@example.com', 'P', 'user', '08912763980', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('20a728d6-8d9a-4547-b0a4-bc7729fdf03d', 5, '4342301058', 'tMyg0qs8j5', 'CkporyjTi6@example.com', 'P', 'user', '08898102211', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('2105c9b8-2395-4477-b1a4-4fc0a37230e6', 18, '4342301009', '2XI5oCChYh', 'm1rUh3uMhI@example.com', 'P', 'user', '08555094886', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('23ed7cf9-c2f6-4ee5-90ab-c1dae6ae9657', 10, '4342301040', 'zRq6H50nC6', 'kyK6qpzkxg@example.com', 'P', 'user', '08147095657', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('245e814a-f70d-40b5-a6dd-259fbed48982', 17, '4342301046', 'hT1hYGMP25', 'B6rJYWGS5k@example.com', 'P', 'user', '08383009313', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('26cd6be0-381c-4dcd-8044-096fa6d00bf0', 17, '4342301111', 'Fkogs4Y9N4', 'gmeM4Q6BDw@example.com', 'P', 'user', '08638650497', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('2922b438-964f-41db-a478-93c394d17e86', 14, '4342301107', 'IW5OavkkFv', 'phvHWHfIvh@example.com', 'P', 'user', '08299225627', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('3307fb78-13a7-416f-9fe7-e4bc81034c91', 16, '4342301088', 'yEELF6dATM', 'XnX9vXCKmv@example.com', 'P', 'user', '08926373723', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('330e3769-a988-4974-9f74-0005cd8026b1', 8, '4342301093', 'AHe8LVbrHC', 'qqNX71vh9Y@example.com', 'P', 'user', '08513883285', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('332285e6-cc1b-4790-ac68-d0dc3a4d4862', 9, '4342301076', 'kEPi8vRDUQ', 'xnEk6neuIK@example.com', 'P', 'user', '08440930382', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('333e7fa7-40c5-4dd0-bd5a-a943d29cf21c', 15, '4342301071', 'eglxGtM7WH', '0nzRMP9ekW@example.com', 'P', 'user', '08839874460', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('33e39b46-3f45-4a32-b775-dc2158e11990', 15, '4342301060', 'EmwYS96TR5', 'n4HhZzU2dO@example.com', 'P', 'user', '08309374259', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('34bcc65d-05a1-4c2b-b882-f599cb6aa566', 18, '4342301049', '1wToj4H2Px', 'kgkfS4rKp3@example.com', 'P', 'user', '08716695664', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('389fee31-a340-48c1-976e-4be49ed63fc8', 11, '4342301024', 'XQYKZitCme', 'qPUHDoyxZP@example.com', 'P', 'user', '08436562017', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('39950f5e-b357-46b3-8091-ceb0384b25b0', 16, '4342301048', 'lyQVWGdbDF', '11nk5bsbQC@example.com', 'P', 'user', '08115993038', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('3aab1334-ad19-479a-8526-caf27f0034ea', 9, '4342301118', 'LXnJk9nz1t', 'MwLY4Cpalb@example.com', 'P', 'user', '08430222716', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('3c05ad03-0e04-4250-9203-f877f5df9dc0', 20, '4342301042', 'VSDMoqNItt', '73JPLasjNq@example.com', 'P', 'user', '08820000172', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('3e66a0ee-1510-41d3-988b-4ee0fa70ee24', 15, '4342301013', 'KQDmoFq83K', '1dZvrp94dj@example.com', 'P', 'user', '08516005990', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('43800200-8d4e-419f-bc29-662b42350fd7', 18, '4342301095', 'ql2XEfeJ4J', 'i2LurYLEt2@example.com', 'P', 'user', '08255915523', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('440ea4c5-fd99-4ac8-8a60-4b7da985efd8', 8, '4342301069', 'lX83zzUkAN', 'H4asthw2LK@example.com', 'P', 'user', '08330021411', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('45d04811-d1ad-4c6f-b246-d78c5f474154', 17, '4342301041', 'c4AH9j4xxO', 'ryaYZ2LN10@example.com', 'P', 'user', '08932668562', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('460885e9-11dc-4622-8bea-adb1b24ba4ab', 4, '4342301114', 'w9i2ik4wx0', 'BTIpoRX9F5@example.com', 'P', 'user', '08455312442', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('47c1db84-f628-42c5-a3ee-282d3cfd64ab', 16, '4342301030', 'd1Ep9GmQk4', 'HarrzQgWZO@example.com', 'P', 'user', '08502406781', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('4c91dbd6-f547-470c-acdd-b722b5a36ca5', 18, '4342301091', 'IU5RayLVVJ', '4tZr3gdxLJ@example.com', 'P', 'user', '08714073194', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('4d6f06ec-e8ac-4093-aa10-153a7f5238be', 21, '4342301119', 'T5u6xa9OGU', 'wn5vXN4gLr@example.com', 'P', 'user', '08889547694', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('4d9e447b-ab35-4ef4-ad32-235f168029b0', 10, '4342301099', 'YS23e6cRQ1', '2EhS5BqvhA@example.com', 'P', 'user', '08106517149', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('512105a2-cb77-457b-b6fb-07a26aa0f708', 11, '4342301011', 'FoLX9cHAKu', 'vshbLNKo3s@example.com', 'P', 'user', '08773467743', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('52ad1ae0-7a7e-4d8c-85b1-05d30399d5a6', 15, '4342301074', 'Flwspw3DAm', 'T1ATqd2g4C@example.com', 'P', 'user', '08118315213', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('597e8277-9993-442e-9bca-eb9290d78d96', 16, '4342301110', 'qULXB8F01n', '8fX8hNeoLc@example.com', 'P', 'user', '08354211559', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('5983bee1-ff0d-4cad-bcf0-6477b7e6a0b3', 21, '4342301021', 'tigIFOEXCP', 'a2CaQuVN1p@example.com', 'P', 'user', '08637905489', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('60a551fa-be51-4d3e-b994-58f57a1c2d83', 6, '4342301036', 'lzr6JbP6K7', 'HfLVeo15xL@example.com', 'P', 'user', '08415813395', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('626f780f-dcdf-43ae-9c2b-0cfd8715a8e1', 7, '4342301096', 'tNS0b7Z6t4', 'F5fDNgzUDh@example.com', 'P', 'user', '08357100426', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('657a7f12-cfe1-44f9-b31e-3cb759518048', 20, '4342301005', 'kUuDrCFU3a', 'm4WB9Lw2gR@example.com', 'P', 'user', '08282364175', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('65d01447-dc4d-475e-baa6-020fa0f8b458', 20, '4342301100', 'kWjnEPoEUo', 'fOvOZGZNY2@example.com', 'P', 'user', '08794648767', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('66ce58dc-773e-496d-82a2-48ddbde43fa8', 21, '4342301081', 'md9KDbTreI', 'vJdMEAAM00@example.com', 'P', 'user', '08189037609', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('66d2dba8-a956-4916-8c10-9054e286fb1a', 9, '4342301037', 'd4uqqgkmIM', 'M6X0lcZ3UY@example.com', 'P', 'user', '08414566222', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('672661d4-ac8d-419a-b322-aae1979ec66e', 8, '4342301120', 'F6Q9qaf8os', 'R01GgHWVBI@example.com', 'P', 'user', '08497924742', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('699a3022-c546-4807-befe-c48f5671775f', 12, '4342301019', '5GmZxGVCmA', '2VNZTN0INO@example.com', 'P', 'user', '08163525920', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('6a4d6ed3-0e4a-4c12-97cc-0cbd3f3f3f59', 8, '4342301031', 'vk5xYaHvxc', 'sUjln5sXPY@example.com', 'P', 'user', '08281879154', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('6c635804-aaad-4ddd-af2f-a2ef0ba332c0', 19, '4342301010', 'H4FDiMAUkC', 'CzLUTTGo8m@example.com', 'P', 'user', '08774812718', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('6e6cde42-3e36-48ab-b4dc-a25325bf0828', 8, '4342301006', 'EcCX81Wl6T', 'oWiZTKh7lk@example.com', 'P', 'user', '08249093580', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('6f5ecf3c-08e8-487d-855a-d1eaf5cc5e49', 21, '4342301061', 'QXgwzek9TB', 'lOFWRlMORH@example.com', 'P', 'user', '08435876160', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('6fc94c91-d01f-4457-a294-5af95095d493', 15, '4342301097', 'TRSyI4Jp6X', 'Max4YJsXQq@example.com', 'P', 'user', '08677222057', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('701180be-1d94-4373-93ab-aec86eaf688a', 5, '4342301018', '63ZqNFdCAS', 'pfueTrPHKu@example.com', 'P', 'user', '08120940161', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('714fb89a-4372-488e-83f5-2bf7236fb37f', 21, '4342301029', 'UEfwXzvWPF', 'nfXzL2nUB6@example.com', 'P', 'user', '08345322399', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('74bdfa04-c48e-44f8-b91f-c2e86a55a837', 17, '4342301027', 'WNh3szlHe5', 'q4ifPogrTn@example.com', 'P', 'user', '08488241190', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('74c9e263-91a7-481d-9706-594bcf068a6b', 4, '4342301032', 'sqMwwiON56', 'XxhEx44zIk@example.com', 'P', 'user', '08745285966', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('752991ef-1578-49f0-92f5-d3a968d180e7', 19, '4342301101', 'GkfGk9dJmt', 'amRC4L0TbV@example.com', 'P', 'user', '08209047269', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('7d468446-415f-418e-b013-3509ac32fd87', 6, '4342301092', 'dC3ehLzKwF', 'n8dPdpopYJ@example.com', 'P', 'user', '08121969258', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('7f18a4d2-76b3-4c3c-a2f2-e4b20ddf7e4a', 16, '4342301034', '86LnHNeH8V', '79JT0ksraA@example.com', 'P', 'user', '08538806131', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('82d97e6c-268d-4a3c-862b-70779e0dee41', 20, '4342301050', 'xSEAnZn3Us', 'boqKo87Lsd@example.com', 'P', 'user', '08698495074', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('8b393d9e-0762-49e2-96c4-e2a45eb3ab64', 16, '4342301035', 'CyMxLbrm1e', '8HbBYGiuEP@example.com', 'P', 'user', '08825910305', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('8d6e9dfe-6ce3-471f-8a6e-27b7a2edee82', 13, '4342301112', 'N4w4mWWEEA', 'MOM4I3ezvO@example.com', 'P', 'user', '08565282264', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('8e456448-b18c-4916-bf79-89a3a195c497', 17, '4342301057', 'WCdNVtTquU', 'kr7A0ahfok@example.com', 'P', 'user', '08397914309', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('90de1b7f-37e7-4c40-acc4-ada5368975b1', 4, '4342301012', 'LbvAJWsq4b', 'ZDZ4K3AmSN@example.com', 'P', 'user', '08555087633', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('91a018ce-b969-4efd-b3b0-83c85e18003c', 14, '4342301108', 'hUcgGhtCbM', 'zsNlqDO2y9@example.com', 'P', 'user', '08907551428', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('9212a413-671f-4618-bfa0-7c1fea5b429d', 18, '4342301062', 'QiUAjWfyJv', 'BTjyKkclLZ@example.com', 'P', 'user', '08733526904', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('926890d6-3117-4c96-bbe0-fbd4e2feefaf', 9, '4342301086', 'WdqxgEDSLP', 'sEET80P1nd@example.com', 'P', 'user', '08785934430', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('92bb1a89-2c8f-400a-8163-85b8b6ef2f9d', 20, '4342301066', '257wpnJ72F', '1CKeY270nf@example.com', 'P', 'user', '08867682460', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('935784f6-08d0-43a2-901e-0d313fa870f2', 16, '4342301067', 'o7qcKnfKZ0', 'rkvjN98Ynz@example.com', 'P', 'user', '08157319401', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('941e6964-cd78-4e2a-bb89-1c334d5622cf', 16, '4342301087', 'tNgQCL6qC7', 'xklhmBbC1n@example.com', 'P', 'user', '08943944417', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('98142c86-60a5-4cbb-ae17-b06734b2e837', 1, '4342301004', 'Tyas Wening Ayu Sawitri', 'tyasweningas@gmail.com', 'P', 'Mahasiswa', '08534596001', '', '2024-06-12 08:57:13', '2024-06-25 00:29:43'),
('9aebda8d-3f94-4ae1-be5c-366efa993ddc', 2, '4342301002', 'mvlN51Xo9P', 'qpCTxnDZLR@example.com', 'P', 'user', '08400600654', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('9c00be80-2558-4f1b-9b57-7d868926d97a', 21, '4342301038', 'OAxflEC1vd', 'y2wZz90wlf@example.com', 'P', 'user', '08963640223', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('9ebd0edf-9b12-404b-8314-58ac8e39916f', 3, '4342301068', 'HIfA86W9xF', 'oNbw0cJ3B0@example.com', 'P', 'user', '08367350825', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('a19687c9-77cf-42bf-817b-6f2eb7f087e1', 9, '4342301022', 'XfXyRuDGd9', 'oF2dxbapm4@example.com', 'P', 'user', '08652815747', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('a20c9356-a97f-4526-a778-a8e3f7801e55', 8, '4342301023', 'ZKnZaicMoW', 'cegrXsPVLH@example.com', 'P', 'user', '08808680995', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('a452253a-e6e9-494e-a0b6-619ae56868ec', 6, '4342301008', 'vr0IDMl0yF', 'Eh5jmGPy7Z@example.com', 'P', 'user', '08105484862', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('a518a8cd-0f62-4bb6-bb14-08e285ffa74a', 7, '4342301080', 'HHL3a1BSEo', 'LBdU2UHOgy@example.com', 'P', 'user', '08456009222', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('a530845f-ba38-42ae-99d8-6d522344199e', 12, '4342301065', 'aCpuwqJTCd', 't7CgxLYWHx@example.com', 'P', 'user', '08251657863', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('a544850c-941f-495f-80d8-26bb0fbe2378', 19, '4342301098', 'dOiuW7nouI', 'SSt0FOThy4@example.com', 'P', 'user', '08550287442', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('a9927df8-3a16-44fa-bab1-9158eefe551e', 21, '4342301103', 'DxRxogD9kG', 'wz4KHc7TbC@example.com', 'P', 'user', '08966015258', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('a9b4537e-fa0d-4953-bb4e-23c02ba9d7b4', 2, '4342301001', 'osj6rhPxgH', 'tW8hC6wSaF@example.com', 'P', 'user', '08792215146', '', '2024-06-12 08:57:13', '2024-06-24 07:12:31'),
('aab98097-9f67-467a-8e7b-19828a478eec', 15, '4342301047', 'iLWMjbJeLj', 'RnP1RV1O5T@example.com', 'P', 'user', '08954073251', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('ac18323d-e4b7-44f5-881d-385f55dd32d9', 18, '4342301052', 'vW0JrkQFaB', 'qTuBhOK6Bq@example.com', 'P', 'user', '08678684766', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('b24e70ef-fab1-4799-98c2-084e29675c49', 13, '4342301106', 'lgnowsWVCE', '4AciqQHPfw@example.com', 'P', 'user', '08714925970', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('b36deb70-c3ad-4254-a561-9d36e8b8efe8', 12, '4342301015', 'BtEIPIgixc', 'mNOIdg8C7w@example.com', 'P', 'user', '08362617875', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('b6a32496-7a17-4961-b7e2-7891d7aa3409', 6, '4342301078', '8fhR8OFNL8', 'zJIevTqRQ6@example.com', 'P', 'user', '08114848560', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('bc094e9b-06cc-40f6-b7f0-dde9158ac491', 18, '4342301053', '9SHPETs6DL', 'SKWFJDwR5p@example.com', 'P', 'user', '08210188274', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('c137ab6b-15a7-4ddd-9fc4-01a5e5cb93b3', 20, '4342301115', 'eBWkK7TIpr', 'zwv8i6b5vH@example.com', 'P', 'user', '08560952535', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('c264722a-5af4-47b0-93be-44d9579672b5', 18, '4342301059', 'XylYm7Gu9u', 'm6hl4jQtrd@example.com', 'P', 'user', '08755696619', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('c480dc2c-5dea-422f-b87c-351b5515c7a0', 14, '4342301116', 'bkZnuOZMmT', '5BHdK7hT03@example.com', 'P', 'user', '08522865303', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('c6274c52-f901-4a7b-9e21-1b68f943d0a9', 9, '4342301094', 'TLqv9qw9z9', 'z7MawahJ1x@example.com', 'P', 'user', '08585630999', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('c7eda2e9-efb1-4cf1-ad90-9be1add50303', 9, '4342301007', 'vgKBjQm7Lc', 'FsMkGE9Wue@example.com', 'P', 'user', '08360938872', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('c81e2e9c-6b61-4a4a-97b3-2e48cee9e0f0', 12, '4342301117', 'EXzxMajTmM', 'mmzcBbKWGQ@example.com', 'P', 'user', '08245346792', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('cba859ae-6434-4e09-b49f-3170f3149e7e', 6, '4342301089', 'ZtuhXMnCdA', 'VVOfKPv5on@example.com', 'P', 'user', '08735515417', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('d146a42f-c9c5-4a7e-a8d7-6604b2767eb8', 7, '4342301025', 'TIg8qEuxuN', 'opxXdy5VQE@example.com', 'P', 'user', '08808631662', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('d4d5f79e-3f71-4d0c-b379-f8415f024439', 13, '4342301077', 'kKZ60k0Elq', 'qcErJPGCHs@example.com', 'P', 'user', '08911459498', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('d6a845da-2e25-44b2-9459-555d72411914', 15, '4342301104', '53xfDHO0Og', 'NDifyTU3Om@example.com', 'P', 'user', '08790732479', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('d753093f-ae3c-4755-af5e-4478d2692de5', 5, '4342301085', 'OLlu7FNwrz', 'Uxg9qpgAbm@example.com', 'P', 'user', '08455869650', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('d7dd393e-dc69-4c8d-bbe9-ea209ff6c7a1', 15, '4342301017', 'DzB63yyyun', '0CerjMDVNC@example.com', 'P', 'user', '08152945514', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('dbe1b8d8-69c5-41f5-b7f8-f0c922c07dc0', 18, '4342301113', 'nutgWTejRk', '9G5U0vCQRQ@example.com', 'P', 'user', '08694102287', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('e04dfcd2-a556-47d8-80fa-1c069bdd447e', 17, '4342301044', 'xp4iESrbWN', 'BaSbAIuLCt@example.com', 'P', 'user', '08514129527', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('e1a195c6-dfdb-46d6-a25a-b2fe065d8f25', 14, '4342301039', '5IVKslDg7C', 'mYA7pdfgrX@example.com', 'P', 'user', '08188160747', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('e8165379-8689-4385-8bd9-4b65252fa01e', 11, '4342301051', 'rkW4UNCsko', 'MtkAr8XKma@example.com', 'P', 'user', '08777598066', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('f2146be3-1a41-43d3-9635-5e6a9568a881', 11, '4342301043', 'TZIUGx6op9', 'P98ojpdK9e@example.com', 'P', 'user', '08660400053', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('f35ce046-b088-4e48-aa74-b073765e3a12', 5, '4342301014', 'ltI8nXOl1x', 'd5n2LLux4M@example.com', 'P', 'user', '08649960521', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('fbfe482f-f44c-4cb0-856e-48b5eefc4fa4', 14, '4342301079', 'Cdu4AXBb7u', 'fzIbKjJ7tn@example.com', 'P', 'user', '08309267385', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13'),
('fc36a475-97a7-457a-8a92-b6d94e1ebd5e', 6, '4342301084', 'dmGa2w8Vh6', 'MTctBwiJ2C@example.com', 'P', 'user', '08152375059', '', '2024-06-12 08:57:13', '2024-06-12 08:57:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capaian`
--
ALTER TABLE `capaian`
  ADD PRIMARY KEY (`id_capaian`);

--
-- Indexes for table `kebijakanspmi`
--
ALTER TABLE `kebijakanspmi`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `manual`
--
ALTER TABLE `manual`
  ADD PRIMARY KEY (`id_manual`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `siklus`
--
ALTER TABLE `siklus`
  ADD PRIMARY KEY (`id_siklus`);

--
-- Indexes for table `standar`
--
ALTER TABLE `standar`
  ADD PRIMARY KEY (`id_standar`);

--
-- Indexes for table `substandar`
--
ALTER TABLE `substandar`
  ADD PRIMARY KEY (`id_substandar`);

--
-- Indexes for table `targetmutu`
--
ALTER TABLE `targetmutu`
  ADD PRIMARY KEY (`id_target`);

--
-- Indexes for table `unitkerja`
--
ALTER TABLE `unitkerja`
  ADD PRIMARY KEY (`id_unitkerja`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capaian`
--
ALTER TABLE `capaian`
  MODIFY `id_capaian` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kebijakanspmi`
--
ALTER TABLE `kebijakanspmi`
  MODIFY `id_dokumen` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manual`
--
ALTER TABLE `manual`
  MODIFY `id_manual` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siklus`
--
ALTER TABLE `siklus`
  MODIFY `id_siklus` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `standar`
--
ALTER TABLE `standar`
  MODIFY `id_standar` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `substandar`
--
ALTER TABLE `substandar`
  MODIFY `id_substandar` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `targetmutu`
--
ALTER TABLE `targetmutu`
  MODIFY `id_target` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `unitkerja`
--
ALTER TABLE `unitkerja`
  MODIFY `id_unitkerja` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
