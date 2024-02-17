-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Feb 2024 pada 09.54
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Baba', 'Kosong', '2024-02-10 12:03:16', '2024-02-10 12:03:16'),
(2, 'Haeria', 'Antang', '2024-02-10 12:03:31', '2024-02-10 12:03:31'),
(3, 'Malang', 'Kosong', '2024-02-10 12:03:39', '2024-02-10 12:03:39'),
(4, 'Haena', 'Kosong', '2024-02-10 12:03:44', '2024-02-10 12:03:44'),
(5, 'Marni', 'Kosong', '2024-02-10 12:03:48', '2024-02-10 12:03:48'),
(6, 'Indartang', 'Kosong', '2024-02-10 12:03:55', '2024-02-10 12:03:55'),
(7, 'Jahira', 'Kosong', '2024-02-10 12:04:00', '2024-02-10 12:04:00'),
(8, 'Abdullah', 'Kosong', '2024-02-10 12:04:06', '2024-02-10 12:04:06'),
(9, 'Lahaling', 'Kosong', '2024-02-10 12:04:16', '2024-02-10 12:04:16'),
(10, 'Huseng', 'Kosong', '2024-02-10 12:04:20', '2024-02-10 12:04:20'),
(11, 'Jangke', 'Kosong', '2024-02-10 12:04:24', '2024-02-10 12:04:24'),
(12, 'Hamsah', 'Kosong', '2024-02-10 12:04:47', '2024-02-10 12:04:47'),
(13, 'Kamaruddin', 'Kosong', '2024-02-10 12:04:54', '2024-02-10 12:04:54'),
(14, 'Wa Asia', 'Kosong', '2024-02-10 12:05:00', '2024-02-10 12:05:00'),
(15, 'Madina', 'Kosong', '2024-02-10 12:05:05', '2024-02-10 12:05:05'),
(16, 'Beccetang', 'Kosong', '2024-02-10 12:05:13', '2024-02-10 12:05:13'),
(17, 'Suhartin', 'Kosong', '2024-02-10 12:05:18', '2024-02-10 12:05:18'),
(18, 'Hasimin', 'Kosong', '2024-02-10 12:05:26', '2024-02-10 12:05:26'),
(19, 'Samsudin', 'Kosong', '2024-02-10 12:05:58', '2024-02-10 12:05:58'),
(20, 'Marsin', 'Kosong', '2024-02-10 12:06:01', '2024-02-10 12:06:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriterias`
--

INSERT INTO `kriterias` (`id`, `nama`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'Lantai Rumah', 0.10, '2024-02-10 11:00:03', '2024-02-10 11:05:01'),
(2, 'Dinding Rumah', 0.20, '2024-02-10 11:03:29', '2024-02-10 11:03:29'),
(3, 'Penghasilan', 0.30, '2024-02-10 11:05:14', '2024-02-10 11:05:14'),
(4, 'Status Tinggal Lansia', 0.40, '2024-02-10 11:05:44', '2024-02-10 11:08:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_04_164309_create_alternatifs_table', 1),
(6, '2022_09_04_164345_create_kriterias_table', 1),
(7, '2022_09_04_164401_create_subkriterias_table', 1),
(8, '2022_09_04_164437_create_penilaians_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaians`
--

CREATE TABLE `penilaians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_alternatif` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria` bigint(20) UNSIGNED NOT NULL,
  `id_subkriteria` bigint(20) UNSIGNED NOT NULL,
  `nilai` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penilaians`
--

INSERT INTO `penilaians` (`id`, `id_user`, `id_alternatif`, `id_kriteria`, `id_subkriteria`, `nilai`, `created_at`, `updated_at`) VALUES
(5, 2, 2, 1, 1, 5, '2024-02-10 13:23:05', '2024-02-10 13:23:17'),
(6, 2, 2, 2, 7, 3, '2024-02-10 13:23:05', '2024-02-10 13:23:17'),
(7, 2, 2, 3, 9, 5, '2024-02-10 13:23:05', '2024-02-10 13:23:17'),
(8, 2, 2, 4, 13, 5, '2024-02-10 13:23:05', '2024-02-10 13:23:17'),
(9, 2, 3, 1, 1, 5, '2024-02-10 13:23:36', '2024-02-10 13:23:36'),
(10, 2, 3, 2, 7, 3, '2024-02-10 13:23:36', '2024-02-10 13:23:36'),
(11, 2, 3, 3, 9, 5, '2024-02-10 13:23:36', '2024-02-10 13:23:36'),
(12, 2, 3, 4, 15, 3, '2024-02-10 13:23:36', '2024-02-10 13:23:36'),
(13, 2, 4, 1, 1, 5, '2024-02-10 13:24:10', '2024-02-10 13:24:10'),
(14, 2, 4, 2, 7, 3, '2024-02-10 13:24:10', '2024-02-10 13:24:10'),
(15, 2, 4, 3, 9, 5, '2024-02-10 13:24:10', '2024-02-10 13:24:10'),
(16, 2, 4, 4, 14, 4, '2024-02-10 13:24:10', '2024-02-10 13:24:10'),
(17, 2, 5, 1, 4, 2, '2024-02-10 13:25:21', '2024-02-10 13:25:21'),
(18, 2, 5, 2, 8, 2, '2024-02-10 13:25:21', '2024-02-10 13:25:21'),
(19, 2, 5, 3, 9, 5, '2024-02-10 13:25:21', '2024-02-10 13:25:21'),
(20, 2, 5, 4, 15, 3, '2024-02-10 13:25:21', '2024-02-10 13:25:21'),
(21, 2, 6, 1, 1, 5, '2024-02-10 13:25:55', '2024-02-10 13:25:55'),
(22, 2, 6, 2, 7, 3, '2024-02-10 13:25:55', '2024-02-10 13:25:55'),
(23, 2, 6, 3, 9, 5, '2024-02-10 13:25:55', '2024-02-10 13:25:55'),
(24, 2, 6, 4, 15, 3, '2024-02-10 13:25:55', '2024-02-10 13:25:55'),
(25, 2, 7, 1, 1, 5, '2024-02-10 13:26:30', '2024-02-10 13:26:30'),
(26, 2, 7, 2, 7, 3, '2024-02-10 13:26:30', '2024-02-10 13:26:30'),
(27, 2, 7, 3, 9, 5, '2024-02-10 13:26:30', '2024-02-10 13:26:30'),
(28, 2, 7, 4, 15, 3, '2024-02-10 13:26:30', '2024-02-10 13:26:30'),
(29, 2, 8, 1, 3, 3, '2024-02-10 13:27:08', '2024-02-10 13:27:08'),
(30, 2, 8, 2, 8, 2, '2024-02-10 13:27:08', '2024-02-10 13:27:08'),
(31, 2, 8, 3, 10, 4, '2024-02-10 13:27:08', '2024-02-10 13:27:08'),
(32, 2, 8, 4, 14, 4, '2024-02-10 13:27:08', '2024-02-10 13:27:08'),
(33, 2, 9, 1, 3, 3, '2024-02-10 13:27:29', '2024-02-10 13:27:29'),
(34, 2, 9, 2, 8, 2, '2024-02-10 13:27:29', '2024-02-10 13:27:29'),
(35, 2, 9, 3, 9, 5, '2024-02-10 13:27:29', '2024-02-10 13:27:29'),
(36, 2, 9, 4, 15, 3, '2024-02-10 13:27:29', '2024-02-10 13:27:29'),
(37, 2, 10, 1, 1, 5, '2024-02-10 13:27:56', '2024-02-10 13:27:56'),
(38, 2, 10, 2, 7, 3, '2024-02-10 13:27:56', '2024-02-10 13:27:56'),
(39, 2, 10, 3, 9, 5, '2024-02-10 13:27:56', '2024-02-10 13:27:56'),
(40, 2, 10, 4, 14, 4, '2024-02-10 13:27:56', '2024-02-10 13:27:56'),
(41, 2, 11, 1, 1, 5, '2024-02-10 13:28:21', '2024-02-10 13:28:21'),
(42, 2, 11, 2, 7, 3, '2024-02-10 13:28:21', '2024-02-10 13:28:21'),
(43, 2, 11, 3, 9, 5, '2024-02-10 13:28:21', '2024-02-10 13:28:21'),
(44, 2, 11, 4, 13, 5, '2024-02-10 13:28:21', '2024-02-10 13:28:21'),
(45, 2, 12, 1, 4, 2, '2024-02-10 13:29:02', '2024-02-10 13:29:02'),
(46, 2, 12, 2, 8, 2, '2024-02-10 13:29:02', '2024-02-10 13:29:02'),
(47, 2, 12, 3, 10, 4, '2024-02-10 13:29:02', '2024-02-10 13:29:02'),
(48, 2, 12, 4, 14, 4, '2024-02-10 13:29:02', '2024-02-10 13:29:02'),
(49, 2, 13, 1, 3, 3, '2024-02-10 13:29:33', '2024-02-10 13:29:33'),
(50, 2, 13, 2, 7, 3, '2024-02-10 13:29:33', '2024-02-10 13:29:33'),
(51, 2, 13, 3, 10, 4, '2024-02-10 13:29:33', '2024-02-10 13:29:33'),
(52, 2, 13, 4, 14, 4, '2024-02-10 13:29:33', '2024-02-10 13:29:33'),
(53, 2, 14, 1, 1, 5, '2024-02-10 13:30:03', '2024-02-10 13:30:03'),
(54, 2, 14, 2, 7, 3, '2024-02-10 13:30:03', '2024-02-10 13:30:03'),
(55, 2, 14, 3, 9, 5, '2024-02-10 13:30:03', '2024-02-10 13:30:03'),
(56, 2, 14, 4, 13, 5, '2024-02-10 13:30:03', '2024-02-10 13:30:03'),
(57, 2, 15, 1, 1, 5, '2024-02-10 13:30:22', '2024-02-10 13:30:22'),
(58, 2, 15, 2, 7, 3, '2024-02-10 13:30:22', '2024-02-10 13:30:22'),
(59, 2, 15, 3, 9, 5, '2024-02-10 13:30:22', '2024-02-10 13:30:22'),
(60, 2, 15, 4, 13, 5, '2024-02-10 13:30:22', '2024-02-10 13:30:22'),
(61, 2, 16, 1, 1, 5, '2024-02-10 13:30:42', '2024-02-10 13:30:42'),
(62, 2, 16, 2, 7, 3, '2024-02-10 13:30:42', '2024-02-10 13:30:42'),
(63, 2, 16, 3, 9, 5, '2024-02-10 13:30:42', '2024-02-10 13:30:42'),
(64, 2, 16, 4, 13, 5, '2024-02-10 13:30:42', '2024-02-10 13:30:42'),
(65, 2, 17, 1, 1, 5, '2024-02-10 13:30:56', '2024-02-10 13:30:56'),
(66, 2, 17, 2, 7, 3, '2024-02-10 13:30:56', '2024-02-10 13:30:56'),
(67, 2, 17, 3, 9, 5, '2024-02-10 13:30:56', '2024-02-10 13:30:56'),
(68, 2, 17, 4, 13, 5, '2024-02-10 13:30:56', '2024-02-10 13:30:56'),
(69, 2, 18, 1, 3, 3, '2024-02-10 13:31:12', '2024-02-10 13:31:12'),
(70, 2, 18, 2, 7, 3, '2024-02-10 13:31:12', '2024-02-10 13:31:12'),
(71, 2, 18, 3, 10, 4, '2024-02-10 13:31:12', '2024-02-10 13:31:12'),
(72, 2, 18, 4, 15, 3, '2024-02-10 13:31:12', '2024-02-10 13:31:12'),
(73, 2, 19, 1, 4, 2, '2024-02-10 13:31:24', '2024-02-10 13:31:24'),
(74, 2, 19, 2, 8, 2, '2024-02-10 13:31:24', '2024-02-10 13:31:24'),
(75, 2, 19, 3, 12, 2, '2024-02-10 13:31:24', '2024-02-10 13:31:24'),
(76, 2, 19, 4, 15, 3, '2024-02-10 13:31:24', '2024-02-10 13:31:24'),
(77, 2, 20, 1, 4, 2, '2024-02-10 13:31:36', '2024-02-10 13:31:36'),
(78, 2, 20, 2, 8, 2, '2024-02-10 13:31:36', '2024-02-10 13:31:36'),
(79, 2, 20, 3, 12, 2, '2024-02-10 13:31:36', '2024-02-10 13:31:36'),
(80, 2, 20, 4, 14, 4, '2024-02-10 13:31:36', '2024-02-10 13:31:36'),
(81, 2, 1, 1, 1, 5, '2024-02-11 05:59:10', '2024-02-11 05:59:27'),
(82, 2, 1, 2, 7, 3, '2024-02-11 05:59:10', '2024-02-11 05:59:27'),
(83, 2, 1, 3, 9, 5, '2024-02-11 05:59:10', '2024-02-11 05:59:27'),
(84, 2, 1, 4, 15, 3, '2024-02-11 05:59:27', '2024-02-11 05:59:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriterias`
--

CREATE TABLE `subkriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria` bigint(20) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subkriterias`
--

INSERT INTO `subkriterias` (`id`, `id_kriteria`, `nama`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 1, 'Papan/Kayu', 5.00, '2024-02-10 11:30:48', '2024-02-10 11:30:48'),
(2, 1, 'Lantai Tanah', 4.00, '2024-02-10 11:30:58', '2024-02-10 11:30:58'),
(3, 1, 'Lantai Semen', 3.00, '2024-02-10 11:31:11', '2024-02-10 11:31:11'),
(4, 1, 'Lantai Keramik', 2.00, '2024-02-10 11:31:20', '2024-02-10 11:31:20'),
(5, 2, 'Terpal', 5.00, '2024-02-10 11:31:35', '2024-02-10 11:31:35'),
(6, 2, 'Anyaman Bambu', 4.00, '2024-02-10 11:31:47', '2024-02-10 11:31:47'),
(7, 2, 'Papan/Kayu', 3.00, '2024-02-10 11:32:17', '2024-02-10 11:32:17'),
(8, 2, 'Tembok', 2.00, '2024-02-10 11:32:26', '2024-02-10 11:32:26'),
(9, 3, '<500,000', 5.00, '2024-02-10 11:32:43', '2024-02-10 11:32:43'),
(10, 3, '>=500,000<=800,000', 4.00, '2024-02-10 11:33:04', '2024-02-10 11:33:04'),
(11, 3, '>=800,000<=1.000,000', 3.00, '2024-02-10 11:33:18', '2024-02-10 11:33:18'),
(12, 3, '>=1.000,000<=1.500,000', 2.00, '2024-02-10 11:34:25', '2024-02-10 11:34:25'),
(13, 4, 'Lansia Tunggal', 5.00, '2024-02-10 11:34:44', '2024-02-10 11:34:44'),
(14, 4, 'Bersama Suami/Istri', 4.00, '2024-02-10 11:34:55', '2024-02-10 11:34:55'),
(15, 4, 'Bersama Anak', 3.00, '2024-02-10 11:35:04', '2024-02-10 11:35:25'),
(16, 4, 'Numpang di Rumah Keluarga', 2.00, '2024-02-10 11:35:17', '2024-02-10 11:35:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decrypted_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('kepala','pegawai','penilai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `decrypted_password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Presley Glover', 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'password', 'pegawai', 'KdVLRdwSTghmwzM9avP4pL5L663pRiWww7AIT8Tx3CaBQFVwFi85u9a354Jt', '2024-02-10 10:44:50', '2024-02-10 10:44:50'),
(2, 'Lucio Greenfelder', 'penilai', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'password', 'penilai', 'IUBy9ELDzi5Xac5xQsV9fQzqNInEl7mCJY6pXhAeaCk3L2E5HNkHx0rkkvk1', '2024-02-10 10:44:50', '2024-02-10 10:44:50'),
(11, 'Coba', 'cobasaja', '$2y$10$Rr8p3BW8zlElWVnK7n0buOzuCklnMNPCoEUxilc3tCfracnnJZIjG', 'password', 'kepala', NULL, '2024-02-10 15:47:46', '2024-02-16 23:06:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penilaians`
--
ALTER TABLE `penilaians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penilaians_id_user_foreign` (`id_user`),
  ADD KEY `penilaians_id_alternatif_foreign` (`id_alternatif`),
  ADD KEY `penilaians_id_kriteria_foreign` (`id_kriteria`),
  ADD KEY `penilaians_id_subkriteria_foreign` (`id_subkriteria`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `subkriterias`
--
ALTER TABLE `subkriterias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subkriterias_id_kriteria_foreign` (`id_kriteria`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penilaians`
--
ALTER TABLE `penilaians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `subkriterias`
--
ALTER TABLE `subkriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penilaians`
--
ALTER TABLE `penilaians`
  ADD CONSTRAINT `penilaians_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatifs` (`id`),
  ADD CONSTRAINT `penilaians_id_kriteria_foreign` FOREIGN KEY (`id_kriteria`) REFERENCES `kriterias` (`id`),
  ADD CONSTRAINT `penilaians_id_subkriteria_foreign` FOREIGN KEY (`id_subkriteria`) REFERENCES `subkriterias` (`id`),
  ADD CONSTRAINT `penilaians_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `subkriterias`
--
ALTER TABLE `subkriterias`
  ADD CONSTRAINT `subkriterias_id_kriteria_foreign` FOREIGN KEY (`id_kriteria`) REFERENCES `kriterias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
