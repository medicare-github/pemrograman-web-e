-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2020 pada 07.46
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_obat`
--

CREATE TABLE `tbl_jenis_obat` (
  `id_jenis_obat` int(11) NOT NULL,
  `nama_jenis_obat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jenis_obat`
--

INSERT INTO `tbl_jenis_obat` (`id_jenis_obat`, `nama_jenis_obat`) VALUES
(1, 'Tablet'),
(2, 'Kapsul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `kode` varchar(11) NOT NULL,
  `nama_obat` varchar(35) NOT NULL,
  `id_jenis_obat` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `poto` varchar(100) NOT NULL,
  `expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`kode`, `nama_obat`, `id_jenis_obat`, `harga_beli`, `harga_jual`, `poto`, `expired`) VALUES
('kd01', 'Amoxcilin', 2, 3000, 4000, 'img', '2019-12-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_lengkap`, `email`, `username`, `password`) VALUES
(1, 'Admin 1', 'admin1@gmail.com', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda'),
(2, 'Admin 2', 'admin2@gmail.com', 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33'),
(4, 'Medicare', 'mcare@gmail.com', 'medi', 'ec1deb95d610f97b2e9fd3d7246c133ad07b26cf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_jenis_obat`
--
ALTER TABLE `tbl_jenis_obat`
  ADD PRIMARY KEY (`id_jenis_obat`);

--
-- Indeks untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_jenis_obat` (`id_jenis_obat`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_obat`
--
ALTER TABLE `tbl_jenis_obat`
  MODIFY `id_jenis_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD CONSTRAINT `tbl_obat_ibfk_1` FOREIGN KEY (`id_jenis_obat`) REFERENCES `tbl_jenis_obat` (`id_jenis_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
