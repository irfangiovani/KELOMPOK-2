-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2019 pada 06.17
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_literasi_umum`
--

CREATE TABLE `buku_literasi_umum` (
  `kode_buku_literasi` varchar(5) NOT NULL,
  `judul_buku_literasi` varchar(50) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `nama_rak` varchar(20) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `gambar_sampul` varchar(30) NOT NULL,
  `deskripsi_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_mapel_kelas`
--

CREATE TABLE `buku_mapel_kelas` (
  `id_judul_buku_mapel` varchar(5) NOT NULL,
  `judul_buku_mapel` varchar(30) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `untuk_kelas` varchar(5) NOT NULL,
  `gambar_sampul` varchar(30) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tahunan_siswa`
--

CREATE TABLE `buku_tahunan_siswa` (
  `id_judul_buku_tahunan` varchar(5) NOT NULL,
  `judul_buku_tahunan` varchar(30) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `untuk_kelas` varchar(5) NOT NULL,
  `gambar_sampul` varchar(15) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(5) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `wali kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_perpus`
--

CREATE TABLE `member_perpus` (
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_buku_literasi`
--

CREATE TABLE `peminjaman_buku_literasi` (
  `id_pinjam_buku_literasi` int(5) NOT NULL,
  `kode_buku_literasi` varchar(5) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_hrs_kembali` date NOT NULL,
  `notifikasi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_buku_mapel`
--

CREATE TABLE `peminjaman_buku_mapel` (
  `id_pinjam_buku_mapel` int(5) NOT NULL,
  `id_judul_buku_mapel` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `nama_peminjam` varchar(30) NOT NULL,
  `waktu_peminjaman` time NOT NULL,
  `banyak_buku` int(5) NOT NULL,
  `notifikasi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_buku_tahunan`
--

CREATE TABLE `peminjaman_buku_tahunan` (
  `id_pinjam_buku_tahunan` int(5) NOT NULL,
  `id_judul_buku_tahunan` varchar(5) NOT NULL,
  `kode_buku_tahunan` varchar(5) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_hrs_kembali` date NOT NULL,
  `notifikasi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_buku_literasi`
--

CREATE TABLE `pengembalian_buku_literasi` (
  `id_kembali_literasi` int(5) NOT NULL,
  `id_pinjam_buku_literasi` int(5) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `terlambat` int(5) NOT NULL,
  `denda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_buku_mapel`
--

CREATE TABLE `pengembalian_buku_mapel` (
  `id_kembali_mapel` int(5) NOT NULL,
  `id_pinjam_buku_mapel` int(5) NOT NULL,
  `nama_pengembali` varchar(30) NOT NULL,
  `banyak_buku_kembali` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_buku_tahunan`
--

CREATE TABLE `pengembalian_buku_tahunan` (
  `id_pengembalian_tahunan` int(5) NOT NULL,
  `id_pinjam_buku_tahunan` int(5) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `terlambat` int(5) NOT NULL,
  `denda` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung_siswa`
--

CREATE TABLE `pengunjung_siswa` (
  `id_pengunjung` int(5) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `keperluan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pustakawan`
--

CREATE TABLE `pustakawan` (
  `nip` int(15) NOT NULL,
  `nama_pustakawan` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(5) NOT NULL,
  `nama_tamu` varchar(30) NOT NULL,
  `delegasi` varchar(30) NOT NULL,
  `kepentingan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_literasi_umum`
--
ALTER TABLE `buku_literasi_umum`
  ADD PRIMARY KEY (`kode_buku_literasi`);

--
-- Indeks untuk tabel `buku_mapel_kelas`
--
ALTER TABLE `buku_mapel_kelas`
  ADD PRIMARY KEY (`id_judul_buku_mapel`);

--
-- Indeks untuk tabel `buku_tahunan_siswa`
--
ALTER TABLE `buku_tahunan_siswa`
  ADD PRIMARY KEY (`id_judul_buku_tahunan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `member_perpus`
--
ALTER TABLE `member_perpus`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `peminjaman_buku_literasi`
--
ALTER TABLE `peminjaman_buku_literasi`
  ADD PRIMARY KEY (`id_pinjam_buku_literasi`),
  ADD UNIQUE KEY `kode_buku_literasi` (`kode_buku_literasi`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `peminjaman_buku_mapel`
--
ALTER TABLE `peminjaman_buku_mapel`
  ADD PRIMARY KEY (`id_pinjam_buku_mapel`),
  ADD UNIQUE KEY `id_judul_buku_mapel` (`id_judul_buku_mapel`),
  ADD UNIQUE KEY `kode_kelas` (`kode_kelas`);

--
-- Indeks untuk tabel `peminjaman_buku_tahunan`
--
ALTER TABLE `peminjaman_buku_tahunan`
  ADD PRIMARY KEY (`id_pinjam_buku_tahunan`),
  ADD UNIQUE KEY `id_judul_buku_tahunan` (`id_judul_buku_tahunan`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `pengembalian_buku_literasi`
--
ALTER TABLE `pengembalian_buku_literasi`
  ADD PRIMARY KEY (`id_kembali_literasi`),
  ADD UNIQUE KEY `id_pinjam_buku_literasi` (`id_pinjam_buku_literasi`);

--
-- Indeks untuk tabel `pengembalian_buku_mapel`
--
ALTER TABLE `pengembalian_buku_mapel`
  ADD PRIMARY KEY (`id_kembali_mapel`),
  ADD UNIQUE KEY `id_pinjam_buku_mapel` (`id_pinjam_buku_mapel`);

--
-- Indeks untuk tabel `pengembalian_buku_tahunan`
--
ALTER TABLE `pengembalian_buku_tahunan`
  ADD PRIMARY KEY (`id_pengembalian_tahunan`),
  ADD UNIQUE KEY `id_pinjam_buku_tahunan` (`id_pinjam_buku_tahunan`);

--
-- Indeks untuk tabel `pengunjung_siswa`
--
ALTER TABLE `pengunjung_siswa`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indeks untuk tabel `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peminjaman_buku_literasi`
--
ALTER TABLE `peminjaman_buku_literasi`
  MODIFY `id_pinjam_buku_literasi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_buku_tahunan`
--
ALTER TABLE `peminjaman_buku_tahunan`
  MODIFY `id_pinjam_buku_tahunan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_buku_literasi`
--
ALTER TABLE `pengembalian_buku_literasi`
  MODIFY `id_kembali_literasi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_buku_mapel`
--
ALTER TABLE `pengembalian_buku_mapel`
  MODIFY `id_kembali_mapel` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_buku_tahunan`
--
ALTER TABLE `pengembalian_buku_tahunan`
  MODIFY `id_pengembalian_tahunan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengunjung_siswa`
--
ALTER TABLE `pengunjung_siswa`
  MODIFY `id_pengunjung` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(5) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman_buku_literasi`
--
ALTER TABLE `peminjaman_buku_literasi`
  ADD CONSTRAINT `peminjaman_buku_literasi_ibfk_1` FOREIGN KEY (`id_pinjam_buku_literasi`) REFERENCES `pengembalian_buku_literasi` (`id_pinjam_buku_literasi`),
  ADD CONSTRAINT `peminjaman_buku_literasi_ibfk_2` FOREIGN KEY (`kode_buku_literasi`) REFERENCES `buku_literasi_umum` (`kode_buku_literasi`),
  ADD CONSTRAINT `peminjaman_buku_literasi_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `member_perpus` (`nis`);

--
-- Ketidakleluasaan untuk tabel `peminjaman_buku_mapel`
--
ALTER TABLE `peminjaman_buku_mapel`
  ADD CONSTRAINT `peminjaman_buku_mapel_ibfk_1` FOREIGN KEY (`id_judul_buku_mapel`) REFERENCES `buku_mapel_kelas` (`id_judul_buku_mapel`),
  ADD CONSTRAINT `peminjaman_buku_mapel_ibfk_2` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`);

--
-- Ketidakleluasaan untuk tabel `peminjaman_buku_tahunan`
--
ALTER TABLE `peminjaman_buku_tahunan`
  ADD CONSTRAINT `peminjaman_buku_tahunan_ibfk_1` FOREIGN KEY (`id_judul_buku_tahunan`) REFERENCES `buku_tahunan_siswa` (`id_judul_buku_tahunan`),
  ADD CONSTRAINT `peminjaman_buku_tahunan_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `member_perpus` (`nis`);

--
-- Ketidakleluasaan untuk tabel `pengembalian_buku_mapel`
--
ALTER TABLE `pengembalian_buku_mapel`
  ADD CONSTRAINT `pengembalian_buku_mapel_ibfk_1` FOREIGN KEY (`id_pinjam_buku_mapel`) REFERENCES `peminjaman_buku_mapel` (`id_pinjam_buku_mapel`);

--
-- Ketidakleluasaan untuk tabel `pengembalian_buku_tahunan`
--
ALTER TABLE `pengembalian_buku_tahunan`
  ADD CONSTRAINT `pengembalian_buku_tahunan_ibfk_1` FOREIGN KEY (`id_pinjam_buku_tahunan`) REFERENCES `peminjaman_buku_tahunan` (`id_pinjam_buku_tahunan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
