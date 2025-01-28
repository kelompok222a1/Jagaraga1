-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2025 pada 20.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjbl_kel2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kader`
--

CREATE TABLE `tb_kader` (
  `id_kader` int(10) NOT NULL,
  `nama_kader` varchar(30) NOT NULL,
  `telp_kader` varchar(13) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kader`
--

INSERT INTO `tb_kader` (`id_kader`, `nama_kader`, `telp_kader`, `username`, `password`) VALUES
(1, 'anas', '115135', 'anas', 'anas123'),
(2, 'anis', '7409`29489', 'anis', 'anis123'),
(3, 'della', '31553', 'della', 'della123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lansia`
--

CREATE TABLE `tb_lansia` (
  `id_lansia` varchar(10) NOT NULL,
  `nik_lansia` varchar(16) NOT NULL,
  `nama_lansia` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_lansia`
--

INSERT INTO `tb_lansia` (`id_lansia`, `nik_lansia`, `nama_lansia`, `tanggal_lahir`, `jenis_kelamin`, `alamat`) VALUES
('00001', '17922891', 'lililili', '2025-01-18', 'Perempuan', 'selo'),
('00002', '4121511', 'nono', '1956-01-16', 'Laki-Laki', 'Sondakan'),
('00005', '347900', 'lulu', '2025-01-11', 'Perempuan', 'solo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `id_pemeriksaan` varchar(10) NOT NULL,
  `tgl_periksa` text NOT NULL,
  `id_lansia` varchar(10) NOT NULL,
  `berat_lansia` varchar(5) NOT NULL,
  `tekanan_darah` varchar(7) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `keluhan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `tgl_periksa`, `id_lansia`, `berat_lansia`, `tekanan_darah`, `umur`, `keluhan`) VALUES
('P2501002', '2025-01-25', '00002', '80', '100/80', '77', 'Tidak Ada'),
('P250125', '2025-01-25', '00001', '88', '130/100', '68', 'Pusing');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kader`
--
ALTER TABLE `tb_kader`
  ADD PRIMARY KEY (`id_kader`);

--
-- Indeks untuk tabel `tb_lansia`
--
ALTER TABLE `tb_lansia`
  ADD PRIMARY KEY (`id_lansia`);

--
-- Indeks untuk tabel `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_lansia` (`id_lansia`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kader`
--
ALTER TABLE `tb_kader`
  MODIFY `id_kader` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD CONSTRAINT `tb_pemeriksaan_ibfk_1` FOREIGN KEY (`id_lansia`) REFERENCES `tb_lansia` (`id_lansia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
