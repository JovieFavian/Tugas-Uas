-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2019 pada 18.51
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `file`, `nama_barang`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(12, '480757_a8655419-87c3-4d0b-8a62-42334530e5fe_700_700.jpg', 'VIVO Y93', '10', '1649000', '2019-08-08 09:31:53', '2019-08-08 09:31:53'),
(13, 'Realme-3-spesifikasi-600x600.jpg', 'Realme 3', '15', '1730000', '2019-08-08 09:33:18', '2019-08-08 09:33:18'),
(15, 'xiomi.png', 'Xiaomi Redmi Note 7', '15', '2025000', '2019-08-08 09:35:05', '2019-08-08 09:35:05'),
(16, 'oppo a7.jpg', 'Oppo A7', '20', '3000000', '2019-08-08 09:37:51', '2019-08-08 09:37:51'),
(17, 'galaxy A 10.jpg', 'Samsung Galaxy A10', '30', '7000000', '2019-08-08 09:40:39', '2019-08-08 09:40:39'),
(18, 'vivo v15.jpg', 'Vivo V15', '20', '6000000', '2019-08-08 09:41:34', '2019-08-08 09:41:34'),
(19, 'Samsung Galaxy A20.jpg', 'Samsung Galaxy A20', '10', '10000000', '2019-08-08 09:42:19', '2019-08-08 09:42:19'),
(20, 'oppo-a5-2-600x600.jpg', 'OPPO A5s (AX5s)', '5', '8000000', '2019-08-08 09:43:08', '2019-08-08 09:43:08'),
(21, 'esiaslank.jpg', 'Esia Slank', '99', '100000', '2019-08-08 09:45:36', '2019-08-08 09:45:36'),
(22, 'CSLMobile_Blueberry_8800_L_1.jpg', 'Blueberry', '80', '200000', '2019-08-08 09:47:12', '2019-08-08 09:47:12'),
(23, 'iphone x.jpeg', 'Iphone X', '10', '12000000', '2019-08-08 09:48:18', '2019-08-08 09:48:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jovie', '$2y$10$pbidgmmT4uh3RcEqYkL.kO3lDeUqxeoqbsqM0S6j2z9fBVOYvTMCC', NULL, '2019-08-07 05:28:01', '2019-08-07 05:28:01'),
(2, 'gideonsuherman', '$2y$10$BB7VbXF0lx0x/k7IjgusjObdaDQywraX97C6coE7O5ZYo57WPN/R6', NULL, '2019-08-08 04:18:38', '2019-08-08 04:18:38'),
(3, 'gideonsuherman1', '$2y$10$RBZ4sbhY//eGjzyFNHwTR.1qfXdkCK0vhLSwd6hQvIWNUiI/rpig6', NULL, '2019-08-08 04:33:58', '2019-08-08 04:33:58'),
(4, 'indri', '$2y$10$/eJ5GQ/6T20ZiRhJ5j3wJOsaTyru/ioqjEbLwTiPQzgb9j.RM0eiO', NULL, '2019-08-08 08:24:24', '2019-08-08 08:24:24'),
(5, 'jovi', '$2y$10$3EaxAFTChlRoqMzJ6c2Ep.SUtCh4AX6XdHJKIureN5Dhj9fmQezbi', NULL, '2019-08-08 08:51:57', '2019-08-08 08:51:57'),
(6, 'dion', '$2y$10$HDbbotQ7OIjj0El1FsszM.hQYaq99l2AV2ndPZ2BYCf1kmWVD5bna', NULL, '2019-08-08 09:01:08', '2019-08-08 09:01:08'),
(7, 'dion', '$2y$10$Ep.tTKtEiz16P0XOo0IdM.iwy4171WqzGk5VTZt5V3/yEc9AmYbxK', NULL, '2019-08-08 09:01:43', '2019-08-08 09:01:43'),
(8, 'gideons', '$2y$10$Lcam.GI3JcSXhasUUvE0duQgxD5LzifVRVykr5aBhheESPC436Cha', NULL, '2019-08-08 09:02:36', '2019-08-08 09:02:36'),
(9, 'jovi', '$2y$10$HTB83HugQrR9mMMKUI9KR.jwFSfAPUR/DTs9p9OgpVf964IiYStUK', NULL, '2019-08-08 09:03:26', '2019-08-08 09:03:26'),
(10, 'gideonsuherman', '$2y$10$cZHxVIxnM/IEjbHSRPJFre9brCCH/Jof0w3wIjf/OtKQPbCbeoATu', NULL, '2019-08-08 09:04:00', '2019-08-08 09:04:00'),
(11, 'jovifavian', '$2y$10$MLByfxcH/WoJUGVHYhpOg.ksoxKqk3EhOI0sJwSE4AF6hsqMrp4lu', NULL, '2019-08-08 09:04:24', '2019-08-08 09:04:24'),
(12, 'jovifavian', '$2y$10$ZrjCJWkbAUj1CaxD2dD5rOlMe55gvyhe2xjyN6I0RhrF2Uy71tbR6', NULL, '2019-08-08 09:05:04', '2019-08-08 09:05:04');

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
(1, '2019_07_29_150513_create_barang', 1),
(2, '2019_07_29_150536_create_konsumen', 1),
(3, '2019_08_06_051851_create_login', 2),
(4, '2019_08_07_112502_create_gambars_table', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
