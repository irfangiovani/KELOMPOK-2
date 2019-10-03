-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2019 pada 06.26
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lt_kelompok2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerja`
--

CREATE TABLE `tb_pekerja` (
  `id_pekerja` varchar(50) NOT NULL,
  `nip` varchar(33) NOT NULL,
  `nama_pekerja` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nik` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pekerja`
--

INSERT INTO `tb_pekerja` (`id_pekerja`, `nip`, `nama_pekerja`, `alamat`, `tgl`, `no_hp`, `nik`) VALUES
('7493c001-ba69-4598-9587-2aa1bf5b3d33', '3521212', 'jablay', '<p>kuningan</p>\r\n', '09-agustus-2000', '822121', '34556787897');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `email`, `no_hp`) VALUES
(3, 'ansori', 'ansori', '$2y$10$aN8BlN43FRocuLirBaQRcODbBgVLTRvHB.9lDPusQSH4CeKd7OjBm', 'ansoriunyu33@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pekerja`
--
ALTER TABLE `tb_pekerja`
  ADD PRIMARY KEY (`id_pekerja`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
