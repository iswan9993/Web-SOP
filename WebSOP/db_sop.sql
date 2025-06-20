-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2025 pada 14.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sop`
--

CREATE TABLE `tb_sop` (
  `id` int(11) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_sop`
--

INSERT INTO `tb_sop` (`id`, `divisi`, `judul`, `isi`) VALUES
(1, 'percetakan', 'kelebihan cetak', 'ganti rugi dong bro '),
(2, 'editor', 'mesin rusak', 'beli baru'),
(3, 'editor', 'mesin rusak #2', 'baeldfghjk'),
(4, 'percetakan', 'mesin terbakar', 'ganti baru lagi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_sop`
--
ALTER TABLE `tb_sop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_sop`
--
ALTER TABLE `tb_sop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
