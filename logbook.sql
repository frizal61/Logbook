-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 14.40
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logbook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `Tanggal` varchar(256) NOT NULL,
  `Kegiatan` varchar(256) NOT NULL,
  `Jenis_Perbaikan` varchar(256) NOT NULL,
  `Langkah_Perbaikan` varchar(256) NOT NULL,
  `Nama_Ruangan` varchar(256) NOT NULL,
  `Hasil` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id_history`, `Tanggal`, `Kegiatan`, `Jenis_Perbaikan`, `Langkah_Perbaikan`, `Nama_Ruangan`, `Hasil`) VALUES
(1, '2023-01-31', '', 'HARDWARE', 'adsfdsfsa', 'qwdqwdqwd', 'Selesai'),
(2, '2023-02-06', 'Mencak', 'SOFTWARE', 'Mossingan', 'Ruang Mencak', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `No` int(2) NOT NULL,
  `Tanggal` date NOT NULL,
  `Kegiatan` varchar(100) NOT NULL,
  `Hardware` varchar(100) NOT NULL,
  `Software` varchar(100) NOT NULL,
  `Jaringan` varchar(100) NOT NULL,
  `Permasalahan` varchar(100) NOT NULL,
  `Nama_Ruangan` varchar(100) NOT NULL,
  `Langkah` text NOT NULL,
  `Hasil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
