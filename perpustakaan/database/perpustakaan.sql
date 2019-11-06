-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2019 pada 02.00
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
  `judul_buku_literasi` varchar(100) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `no_rak` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `gambar_sampul` varchar(30) NOT NULL,
  `deskripsi_buku` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_literasi_umum`
--

INSERT INTO `buku_literasi_umum` (`kode_buku_literasi`, `judul_buku_literasi`, `penerbit`, `tahun_terbit`, `no_rak`, `kategori`, `gambar_sampul`, `deskripsi_buku`) VALUES
('000', 'indonesia revolusi dan sejumlah isu penting', 'elexmedia', 2002, '000-099', 'karya umum', 'indonesia_revolusi.png', 'perkembangan indonesia dari masa kependudukan soeharto mengalami revolusi dan berita penting lainnya'),
('100', 'filsafat umum akal dan hati sejak thales sampai capra', 'ahmad tafsir', 2001, '100-199', 'filsafat', 'filsafat_umum.jpg', 'belajar bagaimana mempunyai kemampuan berpikir secara akal dan dipadukan dengan hati'),
('200', 'islam di nusantara', 'apipudin', 1998, '200-299', 'agama', 'islam_asia_tenggara.jpg', 'masuknya islam di nusantara melalui jalur dakwah yang dilakukan oleh walisongp'),
('201', 'sejarah arab sebelum islam geografi, iklim, karakteristik, dan silsilah', 'jawwad ali', 2008, '200-299', 'agama', 'sejarah_arab.jpg', 'peta penyebaran islam berdasrkan georafi, iklim, karakteristik, dan silsilah'),
('300', 'manusia dan pendidikan suatu analisa psikologi dan pendidikan', 'hasan media', 1997, '300-399', 'ilmu sosial', 'manusia_dan_pendidikan.jpg', 'analisis tentang bagaimana keterkaitan antara psikologi manusia dengan pendidikannya itu sendiri'),
('500', 'ilmu kebumian dan antariksa', 'Suprantiono ', 1999, '500-599', 'sains', 'ilmu_kebumian.jpg', 'mengetahui hukum alam seperti fisika dan biologi untuk membahas sistem tata surya dan bumi'),
('600', 'BJ Habibie si jenius', 'jenar situmorang', 2005, '600-699', 'teknologi', 'habibie.jpg', 'menceritakan biografi bj. Habibie bagaimna dengan kecerdasan yang dia miliki menjadi perkembangan teknologi yang pesat di indonesia'),
('900', 'geografi penduduk', 'ade sasmito', 2002, '900-999', 'sejarah, geografi', 'geografi_penduduk.jpg', 'merupakan buku yang mempelajari bagaimana tersebarnya penduduk dalam suatu wilayah'),
('901', 'sejarah/geografi agraria indonesia', 'ahmad tafsir', 2010, '900-999', 'sejarah, geografi', 'sejarah_agraria.jpg', 'sejarah penyebaran wilayah yang dimaksud disini yaitu daratan indonesia'),
('902', 'zaman peralihan', 'soe hok gie', 2011, '900-999', 'sejarah, geografi', 'zaman_peralihan.jpg', 'buku yang menjelaskan bagaimana peralihan dari kehidupan prasejarah menjadi kehidupan modern seperti sekarang');

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

--
-- Dumping data untuk tabel `buku_mapel_kelas`
--

INSERT INTO `buku_mapel_kelas` (`id_judul_buku_mapel`, `judul_buku_mapel`, `penerbit`, `tahun_terbit`, `untuk_kelas`, `gambar_sampul`, `stok`) VALUES
('x03', 'agama', 'erlangga', 2003, '10', 'agama10.jpg', 54),
('x04', 'bahasa indonesia', 'erlangga', 2005, '10', 'bindo10.jpg', 60),
('x05', 'bahasa inggris', 'erlangga', 2003, '10', 'binggris10.jpg', 54),
('xi03', 'agama', 'erlangga', 2007, '11', 'agama11.jpg', 53),
('xi04', 'bahasa indonesia', 'erlangga', 2009, '11', 'bindo11.jpg', 70),
('xi05', 'bahasa inggris', 'erlangga', 2002, '11', 'binggris11.jpg', 60),
('xii01', 'pendidikan kewarganegaraan', 'erlangga', 2001, '12', 'bukupkn.jpg', 50),
('xii02', 'matematika', 'erlangga', 2001, '12', 'buku_mtk.jpg', 60),
('xii03', 'bahasa inggris', 'erlangga', 2002, '12', 'binggris12.jpg', 55),
('xii04', 'bahasa indonesia', 'erlangga', 1999, '12', 'bindo12.jpg', 60);

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

--
-- Dumping data untuk tabel `buku_tahunan_siswa`
--

INSERT INTO `buku_tahunan_siswa` (`id_judul_buku_tahunan`, `judul_buku_tahunan`, `penerbit`, `tahun_terbit`, `untuk_kelas`, `gambar_sampul`, `stok`) VALUES
('x02', 'matematika', 'erlangga', 2009, '10', 'mtk10.jpg', 325),
('x06', 'kimia', 'erlangga', 2005, '10', 'kimia10.jpg', 360),
('x07', 'fisika', 'erlangga', 2012, '10', 'fisika10.jpg', 320),
('xi02', 'matematika', 'erlangga', 2006, '11', 'mtk11.jpg', 350),
('xi06', 'kimia ', 'erlangga', 2003, '11', 'kimia11.jpg', 330),
('xi07', 'fisika', 'erlangga', 2013, '11', 'fisika11.jpg', 351),
('xi09', 'seni budaya', 'erlangga', 2010, '11', 'senbud11.jpg', 313),
('xii06', 'kimia', 'erlangga', 1999, '12', 'kimia12.jpg', 290),
('xii07', 'fisika', 'erlangga', 2014, '12', 'fisika12.jpg', 302),
('xii08', 'prakarya', 'erlangga', 2013, '12', 'prakarya12.jpg', 340);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `wali kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `jurusan`, `kelas`, `wali kelas`) VALUES
('xbkp', 'bisnis kontruksi dan properti', '10', 'ariana dwi'),
('xtbo', 'teknik bodi otomotif', '10', 'sugiono arif'),
('xtbsm1', 'teknik bisnis sepeda motor', '10', 'tika wijayanti'),
('xtbsm2', 'teknik bisnis sepeda motor', '10', 'rahman darsono'),
('xtbsm3', 'teknik bisnis sepeda motor', '10', 'feri agustiono'),
('xtei1', 'teknik elektronika industri', '10', 'wayu subo'),
('xtei2', 'teknik elektronika industri', '10', 'intan meriana'),
('xtkro1', 'teknik kendaraan ringan otomotif', '10', 'dewi kumala'),
('xtkro2', 'teknik kendaraan ringan otomotif', '10', 'andi seto'),
('xtkro3', 'teknik kendaraan ringan otomotif', '10', 'ahmad tanjung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_perpus`
--

CREATE TABLE `member_perpus` (
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member_perpus`
--

INSERT INTO `member_perpus` (`nis`, `nama_siswa`, `kelas`, `jurusan`, `no_telp`, `alamat`, `status`) VALUES
('3464218632', 'heryanto', '10', 'teknik bisnis sepeda motor', '089253526726', 'jl.perikanan darat', 'terkonfirmasi'),
('3464236227', 'akbar hidayat', '12', 'teknik kendaraan ringan otomotif', '082644738283', 'jl. kh hasyim asyari', 'terkonfirmasi'),
('3464298267', 'yadi ahmad', '11', 'teknik bodi otomotif', '089756364822', 'jl.diponegoro', 'terkonfirmasi'),
('3464298278', 'agung mulyadi', '11', 'teknik elektronika industri', '081235673999', 'jl.hasanuddin', 'terkonfirmasi'),
('346572727', 'mita alvia', '12', 'teknik bodi otomotif', '089263627272', 'jl. nangkaan', 'terkonfirmasi'),
('3465827267', 'putri wulan', '10', 'bisnis kontruksi dan properti', '081812727728', 'jl. patih', 'terkonfirmasi'),
('3467276227', 'agung joyo', '12', 'teknik kendaraan ringan otomotif', '085171618181', 'jl. hayam wuruk', 'terkonfirmasi'),
('3467298282', 'alex ahmad', '11', 'teknik bodi otomotif', '082272725978', 'jl. ahmad dahlan', 'terkonfirmasi'),
('3629017465', 'gunarso', '12', 'teknik elektronika industri', '089002737191', 'jl.wahid hasyim', 'terkonfirmasi'),
('3727347689', 'yudi iriyanto', '10', 'teknik kendaraan ringan otomotif', '085328920321', 'jl.perikanan darat', 'terkonfirmasi');

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

--
-- Dumping data untuk tabel `peminjaman_buku_mapel`
--

INSERT INTO `peminjaman_buku_mapel` (`id_pinjam_buku_mapel`, `id_judul_buku_mapel`, `kode_kelas`, `nama_peminjam`, `waktu_peminjaman`, `banyak_buku`, `notifikasi`) VALUES
(223, 'x03', 'xbkp', 'rahmat santoso', '02:00:00', 25, 'masa pinjam'),
(501, 'x03', 'xbkp', 'mita alvia', '00:00:02', 25, 'masa pinjam'),
(502, 'x04', 'xtbo', 'heryanto', '00:00:02', 23, 'masa pinjam');

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

--
-- Dumping data untuk tabel `peminjaman_buku_tahunan`
--

INSERT INTO `peminjaman_buku_tahunan` (`id_pinjam_buku_tahunan`, `id_judul_buku_tahunan`, `kode_buku_tahunan`, `nis`, `tanggal_peminjaman`, `tanggal_hrs_kembali`, `notifikasi`) VALUES
(21, 'x02', 'dfh', '346572727', '2019-10-09', '2019-11-16', 'masa pinjam'),
(22, 'x02', 'dfg', '346572727', '2019-11-07', '2019-11-14', 'masa pinjam');

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
  `kode_kelas` varchar(10) NOT NULL,
  `keperluan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung_siswa`
--

INSERT INTO `pengunjung_siswa` (`id_pengunjung`, `nama_siswa`, `kode_kelas`, `keperluan`) VALUES
(1, 'beri ahmad', 'xbkp', 'membaca buku referensi'),
(2, 'fani dwi', 'xtkro1', 'meminjam buku mapel kelas'),
(3, 'yudi iriyanto', 'xtbsm2', 'mengerjakan tugas'),
(4, 'irfan geo', 'xtkro3', 'mengerjakan tugas'),
(5, 'vian setiawan', 'xtei1', 'meminjam buku'),
(6, 'wengki firseto', 'xtei2', 'mengerjakan tugas'),
(7, 'farhan yanuar', 'xtbsm1', 'membaca buku'),
(8, 'fahriyan ', 'xtbsm3', 'membaca buku'),
(9, 'rezaldi', 'xtkro2', 'meminjam buku'),
(10, 'lukman hakim', 'xtbo', 'mengerjakan tugas'),
(11, 'ilham sanjaya', 'xbkp', 'meminjam buku'),
(12, 'robi agus', 'xtei1', 'meminjam buku mapel kelas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pustakawan`
--

CREATE TABLE `pustakawan` (
  `nip` int(18) NOT NULL,
  `nama_pustakawan` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pustakawan`
--

INSERT INTO `pustakawan` (`nip`, `nama_pustakawan`, `username`, `password`) VALUES
(32253, 'dewi kumala', 'dewi', '$2y$10$v096/KLupl2Q28gOXPlwMeo6QmxKqk6nDll3DE6wSCM'),
(52533, 'luluk dewi', 'luluk', '$2y$10$/qofRTqIi9zR3OLakTRv8uA7MDy65KJQDh99fjhaBOo'),
(323534, 'anwar husen', 'anwar', '$2y$10$cVrgZid52ywOKK4/x/r0v.IHGut7jMpWeUidn0ZU72y');

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
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `delegasi`, `kepentingan`) VALUES
(1, 'vika ayuni', 'universitas jember', 'wawancara '),
(2, 'umam ahmad', 'universitas jember', 'wawancara'),
(3, 'rafi anto', 'sma 1 bondowoso', 'membaca buku referensi'),
(4, 'burhan hakim', 'sma 1 bondowoso', 'membaca buku referensi'),
(5, 'agus herman', 'politeknik negeri jember', 'observasi alur peminjaman perpustakaan'),
(6, 'niken mersita', 'politeknik negeri jember', 'observasi alur peminjaman perpustakaan'),
(7, 'budi cahyanto', 'universitas banyuwangi', 'observasi sistem informasi perpustakaan'),
(8, 'galeh iimron', 'universitas banyuwangi', 'observasi sistem informasi perpustakaan'),
(9, 'desti tiara', 'perusahaan gramedia ', 'pengecekan kelengkapan buku sekolah'),
(10, 'rudi hartono', 'perusahaan senyum media', 'menawarkan buku edukasi');

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
  ADD KEY `kode_buku_literasi` (`kode_buku_literasi`) USING BTREE,
  ADD KEY `nis` (`nis`) USING BTREE;

--
-- Indeks untuk tabel `peminjaman_buku_mapel`
--
ALTER TABLE `peminjaman_buku_mapel`
  ADD PRIMARY KEY (`id_pinjam_buku_mapel`),
  ADD KEY `id_judul_buku_mapel` (`id_judul_buku_mapel`) USING BTREE,
  ADD KEY `kode_kelas` (`kode_kelas`) USING BTREE,
  ADD KEY `kode_kelas_2` (`kode_kelas`),
  ADD KEY `id_judul_buku_mapel_2` (`id_judul_buku_mapel`);

--
-- Indeks untuk tabel `peminjaman_buku_tahunan`
--
ALTER TABLE `peminjaman_buku_tahunan`
  ADD PRIMARY KEY (`id_pinjam_buku_tahunan`),
  ADD KEY `id_judul_buku_tahunan` (`id_judul_buku_tahunan`) USING BTREE,
  ADD KEY `nis` (`nis`) USING BTREE,
  ADD KEY `id_judul_buku_tahunan_2` (`id_judul_buku_tahunan`),
  ADD KEY `nis_2` (`nis`),
  ADD KEY `id_judul_buku_tahunan_3` (`id_judul_buku_tahunan`);

--
-- Indeks untuk tabel `pengembalian_buku_literasi`
--
ALTER TABLE `pengembalian_buku_literasi`
  ADD PRIMARY KEY (`id_kembali_literasi`),
  ADD UNIQUE KEY `id_pinjam_buku_literasi` (`id_pinjam_buku_literasi`),
  ADD KEY `id_pinjam_buku_literasi_2` (`id_pinjam_buku_literasi`);

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
  ADD PRIMARY KEY (`id_pengunjung`),
  ADD KEY `kode_kelas` (`kode_kelas`) USING BTREE;

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
-- AUTO_INCREMENT untuk tabel `peminjaman_buku_tahunan`
--
ALTER TABLE `peminjaman_buku_tahunan`
  MODIFY `id_pinjam_buku_tahunan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
  MODIFY `id_pengunjung` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman_buku_literasi`
--
ALTER TABLE `peminjaman_buku_literasi`
  ADD CONSTRAINT `peminjaman_buku_literasi_ibfk_1` FOREIGN KEY (`kode_buku_literasi`) REFERENCES `buku_literasi_umum` (`kode_buku_literasi`),
  ADD CONSTRAINT `peminjaman_buku_literasi_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `member_perpus` (`nis`);

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
  ADD CONSTRAINT `peminjaman_buku_tahunan_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `member_perpus` (`nis`),
  ADD CONSTRAINT `peminjaman_buku_tahunan_ibfk_3` FOREIGN KEY (`id_judul_buku_tahunan`) REFERENCES `buku_tahunan_siswa` (`id_judul_buku_tahunan`);

--
-- Ketidakleluasaan untuk tabel `pengembalian_buku_literasi`
--
ALTER TABLE `pengembalian_buku_literasi`
  ADD CONSTRAINT `pengembalian_buku_literasi_ibfk_1` FOREIGN KEY (`id_pinjam_buku_literasi`) REFERENCES `peminjaman_buku_literasi` (`id_pinjam_buku_literasi`);

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

--
-- Ketidakleluasaan untuk tabel `pengunjung_siswa`
--
ALTER TABLE `pengunjung_siswa`
  ADD CONSTRAINT `pengunjung_siswa_ibfk_1` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
