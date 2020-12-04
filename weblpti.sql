-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2020 pada 17.11
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblpti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_belajar`
--

CREATE TABLE `list_belajar` (
  `id_list` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama_materi` varchar(125) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list_belajar`
--

INSERT INTO `list_belajar` (`id_list`, `id_users`, `nama_materi`, `link`) VALUES
(3, 0, 'wahyu', 'www.php.com'),
(4, 0, 'aldi', 'www.php.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `sandi` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `email`, `sandi`) VALUES
(1, 'wahyu taqdirul aziz', 'admin@gmail.com', 'wahyu'),
(3, 'ara', 'ara@gmail.com', ''),
(4, 'eges', 'eges@depan.com', ''),
(5, 'em', 'user@gmail.com', 'wahyu'),
(6, 'arya', 'arya@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `list_belajar`
--
ALTER TABLE `list_belajar`
  ADD PRIMARY KEY (`id_list`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `list_belajar`
--
ALTER TABLE `list_belajar`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
