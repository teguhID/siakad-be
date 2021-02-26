-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2021 pada 01.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cn_kelas_murid`
--

CREATE TABLE `cn_kelas_murid` (
  `id_conf_kelas_murid` int(4) NOT NULL,
  `id_kelas` int(4) NOT NULL DEFAULT 0,
  `id_murid` int(4) NOT NULL DEFAULT 0,
  `created_at` varchar(30) DEFAULT NULL,
  `updated_at` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cn_kelas_murid`
--

INSERT INTO `cn_kelas_murid` (`id_conf_kelas_murid`, `id_kelas`, `id_murid`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-02-23 12:26:18', '2021-02-23 12:26:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_kelas`
--

CREATE TABLE `md_kelas` (
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `md_kelas`
--

INSERT INTO `md_kelas` (`id_kelas`, `kelas`, `desc`, `created_at`, `updated_at`) VALUES
(1, '7', 'Kelas 7', '2021-02-22 10:20:27', '2021-02-22 10:20:27'),
(2, '8', 'Kelas 8', '2021-02-22 10:20:35', '2021-02-22 10:20:35'),
(3, '9', 'Kelas 9', '2021-02-22 10:20:41', '2021-02-22 10:20:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_mata_pelajaran`
--

CREATE TABLE `md_mata_pelajaran` (
  `id_mata_pelajaran` bigint(20) UNSIGNED NOT NULL,
  `mata_pelajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `md_mata_pelajaran`
--

INSERT INTO `md_mata_pelajaran` (`id_mata_pelajaran`, `mata_pelajaran`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Kimia', 'desc Kimia', '2021-02-22 09:27:31', '2021-02-22 09:27:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_murid`
--

CREATE TABLE `md_murid` (
  `id_murid` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `md_murid`
--

INSERT INTO `md_murid` (`id_murid`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Marteen', '2021-02-22 10:21:04', '2021-02-22 10:21:04'),
(2, 'Marco', '2021-02-22 08:45:30', '2021-02-22 08:45:30'),
(3, 'Gisel', '2021-02-22 08:49:19', '2021-02-22 08:49:19'),
(4, 'Gempi', '2021-02-22 08:49:50', '2021-02-22 08:49:50');

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
(15, '2021_01_31_074930_users', 2),
(37, '2016_06_01_000001_create_oauth_auth_codes_table', 3),
(38, '2016_06_01_000002_create_oauth_access_tokens_table', 3),
(39, '2016_06_01_000003_create_oauth_refresh_tokens_table', 3),
(40, '2016_06_01_000004_create_oauth_clients_table', 3),
(41, '2016_06_01_000005_create_oauth_personal_access_clients_table', 3),
(42, '2021_01_31_074930_create_um_users_table', 3),
(43, '2021_02_04_090340_create_md__kelas_table', 3),
(44, '2021_02_04_115903_create_md__mata__pelajaran_table', 3),
(45, '2021_02_04_122943_create_um__roles_table', 3),
(46, '2021_02_22_100407_create_md__murids_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0b3a80815efd06a682ccad6b9c3ccf892d1cfa70a2463e8e7619a4f604de9227d275bc3d212b8a83', 1, 1, 'users', '[]', 0, '2021-02-22 05:03:48', '2021-02-22 05:03:48', '2022-02-22 05:03:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, ' Personal Access Client', '506tDp6J55tAOvZBB9rqQlszDBbDVZcYakYfNX0h', 'http://localhost', 1, 0, 0, '2021-02-22 10:19:08', '2021-02-22 10:19:08'),
(2, NULL, ' Password Grant Client', 'e2xkOhCPkwH8hRRqZjqPU104w4Uo8iKmS21nvmZa', 'http://localhost', 0, 1, 0, '2021-02-22 10:19:08', '2021-02-22 10:19:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-02-22 10:19:08', '2021-02-22 10:19:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_penilaian`
--

CREATE TABLE `tr_penilaian` (
  `id_penilaian` int(10) NOT NULL,
  `id_murid` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_mata_pelajaran` int(10) NOT NULL,
  `nilai_tugas` varchar(3) NOT NULL DEFAULT '0',
  `nilai_uts` varchar(3) NOT NULL DEFAULT '0',
  `nilai_uas` varchar(3) NOT NULL DEFAULT '0',
  `nilai_akhir` varchar(3) NOT NULL DEFAULT '0',
  `keterangan` varchar(15) NOT NULL DEFAULT '-',
  `created_at` varchar(30) DEFAULT NULL,
  `updated_at` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tr_penilaian`
--

INSERT INTO `tr_penilaian` (`id_penilaian`, `id_murid`, `id_kelas`, `id_mata_pelajaran`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `nilai_akhir`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '90', '0', '0', '0', 'Lulus', NULL, '2021-02-22 09:41:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `um_roles`
--

CREATE TABLE `um_roles` (
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `um_users`
--

CREATE TABLE `um_users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `um_users`
--

INSERT INTO `um_users` (`id_user`, `email`, `password`, `profile`, `role`, `created_at`, `updated_at`) VALUES
(1, 'test@123.com', '$2y$10$eG9OR4wvreuSJovT9JedBuhHEs6gBiLtfIvmPrp0lrkNwOwxEcP5m', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cn_kelas_murid`
--
ALTER TABLE `cn_kelas_murid`
  ADD PRIMARY KEY (`id_conf_kelas_murid`);

--
-- Indeks untuk tabel `md_kelas`
--
ALTER TABLE `md_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `md_mata_pelajaran`
--
ALTER TABLE `md_mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`);

--
-- Indeks untuk tabel `md_murid`
--
ALTER TABLE `md_murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indeks untuk tabel `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indeks untuk tabel `tr_penilaian`
--
ALTER TABLE `tr_penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `um_roles`
--
ALTER TABLE `um_roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `um_users`
--
ALTER TABLE `um_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cn_kelas_murid`
--
ALTER TABLE `cn_kelas_murid`
  MODIFY `id_conf_kelas_murid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `md_kelas`
--
ALTER TABLE `md_kelas`
  MODIFY `id_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `md_mata_pelajaran`
--
ALTER TABLE `md_mata_pelajaran`
  MODIFY `id_mata_pelajaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `md_murid`
--
ALTER TABLE `md_murid`
  MODIFY `id_murid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tr_penilaian`
--
ALTER TABLE `tr_penilaian`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `um_roles`
--
ALTER TABLE `um_roles`
  MODIFY `id_role` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `um_users`
--
ALTER TABLE `um_users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
