-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2019 pada 02.39
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
  `kode_buku_literasi` varchar(7) NOT NULL,
  `judul_buku_literasi` varchar(100) NOT NULL,
  `id_penerbit` int(5) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `id_rak` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `gambar_sampul` varchar(30) NOT NULL,
  `deskripsi_buku` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_literasi_umum`
--

INSERT INTO `buku_literasi_umum` (`kode_buku_literasi`, `judul_buku_literasi`, `id_penerbit`, `tahun_terbit`, `id_rak`, `id_kategori`, `gambar_sampul`, `deskripsi_buku`) VALUES
('ag2001', 'islam di asia tenggara', 7, 2000, 3, 3, 'islam_asia_tenggara.jpg', 'bagaimana dakwah yang terjadi untuk penyebaran islam khususnya di asia tenggara'),
('ag2002', 'sejarah arab sebelum islam', 7, 2001, 3, 3, 'sejarah_arab.jpg', 'geografi, iklim, karakteristik dan silsilah di tanah arab'),
('fi1001', 'filsafat umum akal dan hati sejak thales sampai capra', 2, 2002, 2, 2, 'filsafat_umum.jpg', 'belajar filsafat semenjak lahirnya thales sekitar abad ke-5 sampai abad 21'),
('fi1002', 'filsafat ilmu', 5, 2009, 2, 2, 'filsafat.jpg', 'ilmu filsafat yang diperbincangkan oleh ahli ahlinya'),
('is3001', 'BJ.Habibie si jenius', 5, 2011, 4, 4, 'habibie.jpg', 'kejeniusan seorang presiden ke 3 indonesia digambarkan dalam buku ini '),
('is3002', 'manusia dan pendidikan', 1, 1999, 4, 4, 'manusia_dan_pendidikan.jpg', 'suatu analisa psikologi dan pendidikan'),
('ku0001', 'hayati', 1, 2010, 1, 1, 'hayati.jpg', 'mempelajari makhluk hidup yang berupa tumbuhan dengan hubungannya dengan makhluk lain'),
('sg9001', 'ilmu kebumian dan antariksa', 8, 2002, 10, 10, 'ilmu_kebumian.jpg', 'membahas tentang keterkaitan antara bumi dan langit serta benda benda yang mendukungnya'),
('sg9002', 'agraria indonesia', 9, 2000, 10, 10, 'sejarah_agraria.jpg', 'terbentuknya wilayah agraria indonesia secara alamian'),
('sg9003', 'RPUL', 6, 2006, 10, 10, 'rpul.jpg', 'rangkuman pengetahuan umum lengkap beserta atlas dunia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_mapel_kelas`
--

CREATE TABLE `buku_mapel_kelas` (
  `id_judul_buku_mapel` varchar(7) NOT NULL,
  `judul_buku_mapel` varchar(30) NOT NULL,
  `id_penerbit` int(5) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `untuk_kelas` varchar(5) NOT NULL,
  `gambar_sampul` varchar(30) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_mapel_kelas`
--

INSERT INTO `buku_mapel_kelas` (`id_judul_buku_mapel`, `judul_buku_mapel`, `id_penerbit`, `tahun_terbit`, `untuk_kelas`, `gambar_sampul`, `stok`) VALUES
('ag10', 'agama', 1, 2002, '10', 'agama10.jpg', 60),
('ag11', 'pendidikan agama islam', 1, 2004, '11', 'agama11.jpg', 55),
('big10', 'bahasa inggris', 1, 2000, '10', 'binggris10.jpg', 59),
('big11', 'bahasa inggris', 1, 2001, '11', 'binggris11.jpg', 56),
('big12', 'bahasa inggris', 1, 2003, '12', 'binggris12.jpg', 45),
('bin10', 'bahasa indonesia', 1, 2002, '10', 'bindo10.jpg', 61),
('kim10', 'kimia', 1, 2003, '10', 'kimia10.jpg', 60),
('kim11', 'kimia', 1, 2004, '11', 'kimia11.jpg', 63),
('mtk12', 'matematika', 1, 2001, '12', 'buku_mtk.jpg', 60),
('pkn12', 'pendidikan kewarganegaraan', 1, 2004, '12', 'bukupkn.jpg', 57);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tahunan_siswa`
--

CREATE TABLE `buku_tahunan_siswa` (
  `id_judul_buku_tahunan` varchar(7) NOT NULL,
  `judul_buku_tahunan` varchar(30) NOT NULL,
  `id_penerbit` int(5) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `untuk_kelas` varchar(5) NOT NULL,
  `gambar_sampul` varchar(15) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tahunan_siswa`
--

INSERT INTO `buku_tahunan_siswa` (`id_judul_buku_tahunan`, `judul_buku_tahunan`, `id_penerbit`, `tahun_terbit`, `untuk_kelas`, `gambar_sampul`, `stok`) VALUES
('fis10', 'fisika', 1, 2003, '10', 'fisika10.jpg', 350),
('fis12', 'fisika', 1, 2000, '12', 'fisika12.jpg', 345),
('mtk11', 'matematika', 1, 2006, '11', 'mtk11.jpg', 360),
('pdk10', 'prakarya dan kewirausahaan', 1, 2000, '10', 'prakarya10.jpg', 356),
('pdk11', 'prakarya dan kewirausahaan', 1, 2006, '11', 'prakarya11.jpg', 354),
('pdk12', 'prakarya dan kewirausahaan', 1, 2005, '12', 'prakarya12.jpg', 349),
('pkn10', 'pendidikan kewarganegaraan', 1, 2001, '10', 'pkn10.jpg', 360),
('pkn11', 'pendidikan kewarganegaraan', 1, 2009, '11', 'pkn11.jpg', 350),
('sbd10', 'seni budaya', 1, 2001, '10', 'senbud10.jpg', 357),
('sbd12', 'seni budaya', 1, 2002, '12', 'senbud12.jpg', 350);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'karya umum'),
(2, 'filsafat'),
(3, 'agama'),
(4, 'ilmu sosial'),
(5, 'bahasa'),
(6, 'sains'),
(7, 'teknologi'),
(8, 'seni, olahraga'),
(9, 'kesusastraan'),
(10, 'sejarah, geografi');

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
('xiitbo', 'teknik bodi otomotif', '12', 'tian amelia'),
('xitbo', 'teknik bodi otomotif', '11', 'sugeng efendi'),
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
('3465727271', 'mita alvia', '12', 'teknik bodi otomotif', '089263627272', 'jl. nangkaan', 'terkonfirmasi'),
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
  `kode_buku_literasi` varchar(7) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_hrs_kembali` date NOT NULL,
  `notifikasi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman_buku_literasi`
--

INSERT INTO `peminjaman_buku_literasi` (`id_pinjam_buku_literasi`, `kode_buku_literasi`, `nis`, `tanggal_peminjaman`, `tanggal_hrs_kembali`, `notifikasi`) VALUES
(104, 'ag2002', '3464218632', '2019-11-13', '2019-11-20', 'masa pinjam'),
(105, 'fi1001', '3464236227', '2019-11-12', '2019-11-19', 'masa pinjam'),
(106, 'fi1002', '3464298267', '2019-11-14', '2019-11-21', 'masa pinjam'),
(108, 'is3001', '3467276227', '2019-11-11', '2019-11-18', 'masa pinjam'),
(109, 'is3002', '3467276227', '2019-11-12', '2019-11-19', 'masa pinjam'),
(110, 'ag2001', '3464298267', '2019-11-01', '2019-11-07', 'masa tenggang'),
(111, 'is3002', '3629017465', '2019-11-10', '2019-11-17', 'masa pinjam'),
(112, 'ku0001', '3467276227', '2019-11-12', '2019-11-19', 'masa pinjam'),
(113, 'sg9001', '3467298282', '2019-11-01', '2019-11-07', 'masa tenggang'),
(114, 'sg9002', '3464298278', '2019-11-09', '2019-11-16', 'masa pinjam'),
(115, 'sg9003', '3465827267', '2019-11-08', '2019-11-15', 'masa pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_buku_mapel`
--

CREATE TABLE `peminjaman_buku_mapel` (
  `id_pinjam_buku_mapel` int(7) NOT NULL,
  `id_judul_buku_mapel` varchar(7) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `nama_peminjam` varchar(30) NOT NULL,
  `waktu_peminjaman` time NOT NULL,
  `banyak_buku` int(5) NOT NULL,
  `notifikasi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman_buku_mapel`
--

INSERT INTO `peminjaman_buku_mapel` (`id_pinjam_buku_mapel`, `id_judul_buku_mapel`, `kode_kelas`, `nama_peminjam`, `waktu_peminjaman`, `banyak_buku`, `notifikasi`) VALUES
(226, 'ag10', 'xbkp', 'andi arif', '02:00:00', 26, 'masa pinjam'),
(227, 'big10', 'xtei2', 'riko januar', '02:00:00', 23, 'masa pinjam'),
(244, 'big10', 'xtkro2', 'heryanto', '02:00:00', 25, 'masa pinjam'),
(245, 'bin10', 'xtbsm3', 'riki gilang', '02:00:00', 24, 'masa pinjam'),
(246, 'kim10', 'xtei1', 'irfan geo', '02:00:00', 26, 'masa pinjam'),
(247, 'bin10', 'xbkp', 'joko ahmad', '02:00:00', 24, 'masa pinjam'),
(248, 'ag10', 'xtkro3', 'gilang dirga', '02:00:00', 25, 'masa pinjam'),
(249, 'kim11', 'xitbo', 'farhan figo', '01:45:00', 23, 'masa pinjam'),
(250, 'kim10', 'xtkro1', 'tika putri', '02:00:00', 25, 'masa pinjam'),
(251, 'pkn12', 'xiitbo', 'bagas dwi', '01:45:00', 23, 'masa pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_buku_tahunan`
--

CREATE TABLE `peminjaman_buku_tahunan` (
  `id_pinjam_buku_tahunan` int(5) NOT NULL,
  `id_judul_buku_tahunan` varchar(7) NOT NULL,
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
(57, 'fis10', 'fis01', '3464218632', '2019-11-13', '2020-11-13', 'masa pinjam'),
(58, 'mtk11', 'mtk01', '3464236227', '2019-11-13', '2020-11-13', 'masa pinjam'),
(59, 'pdk10', 'pdk01', '3464298278', '2019-11-13', '2020-11-13', 'masa pinjam'),
(60, 'pdk11', 'pdk02', '3727347689', '2019-11-13', '2020-11-13', 'masa pinjam'),
(61, 'pdk12', 'pdk01', '3464218632', '2019-11-13', '2020-11-13', 'masa pinjam'),
(62, 'pkn10', 'pkn01', '3464298267', '2019-11-13', '2020-11-13', 'masa pinjam'),
(63, 'pkn11', 'pkn02', '3464298278', '2019-11-13', '2020-11-13', 'masa pinjam'),
(64, 'sbd10', 'sbd01', '3464298267', '2019-11-13', '2020-11-13', 'masa pinjam'),
(65, 'sbd12', 'sbd02', '3464298278', '2019-11-13', '2020-11-13', 'masa pinjam'),
(66, 'fis10', 'fis02', '3464298278', '2019-11-13', '2020-11-13', 'masa pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(5) NOT NULL,
  `nama_penerbit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(1, 'erlangga'),
(2, 'elexmedia komputindo'),
(3, 'andi publisher'),
(4, 'gagas media'),
(5, 'grasindo'),
(6, 'gramedia pustaka utama'),
(7, 'agro media '),
(8, 'mizan'),
(9, 'noura books'),
(10, 'tiga serangkai');

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

--
-- Dumping data untuk tabel `pengembalian_buku_literasi`
--

INSERT INTO `pengembalian_buku_literasi` (`id_kembali_literasi`, `id_pinjam_buku_literasi`, `tanggal_pengembalian`, `terlambat`, `denda`) VALUES
(1, 105, '2019-11-16', 0, '0'),
(2, 104, '2019-11-15', 0, '0'),
(5, 108, '2019-11-15', 0, '0'),
(6, 106, '2019-11-13', 0, '0'),
(7, 109, '2019-11-13', 0, '0'),
(8, 111, '2019-11-15', 0, '0'),
(9, 112, '2019-11-14', 0, '0'),
(10, 113, '2019-11-15', 0, '0'),
(11, 114, '2019-11-16', 0, '0'),
(12, 115, '2019-11-13', 0, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_buku_mapel`
--

CREATE TABLE `pengembalian_buku_mapel` (
  `id_kembali_mapel` int(5) NOT NULL,
  `id_pinjam_buku_mapel` int(5) NOT NULL,
  `nama_pengembali` varchar(30) NOT NULL,
  `banyak_buku_kembali` int(3) NOT NULL,
  `buku kurang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian_buku_mapel`
--

INSERT INTO `pengembalian_buku_mapel` (`id_kembali_mapel`, `id_pinjam_buku_mapel`, `nama_pengembali`, `banyak_buku_kembali`, `buku kurang`) VALUES
(1, 226, 'galeh dika', 26, 0),
(2, 227, 'riko ,januar', 23, 0),
(5, 244, 'heryanto', 25, 0),
(6, 245, 'riki gilang', 24, 0),
(7, 246, 'irfan geo', 26, 0),
(8, 247, 'joko ahmad', 24, 0),
(9, 248, 'gilang dirga', 25, 0),
(10, 249, 'farhan figo', 23, 0),
(11, 250, 'tika putri', 25, 0),
(12, 251, 'bagas dwi ', 23, 0);

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

--
-- Dumping data untuk tabel `pengembalian_buku_tahunan`
--

INSERT INTO `pengembalian_buku_tahunan` (`id_pengembalian_tahunan`, `id_pinjam_buku_tahunan`, `tanggal_pengembalian`, `terlambat`, `denda`) VALUES
(1, 57, '2020-06-18', 0, 0),
(2, 58, '2020-06-20', 0, 0),
(3, 60, '2020-06-17', 0, 0),
(4, 61, '2020-06-20', 0, 0),
(5, 59, '2020-06-18', 0, 0),
(6, 62, '2020-06-20', 0, 0),
(7, 64, '2020-06-18', 0, 0),
(8, 65, '2020-06-20', 0, 0),
(15, 63, '2020-06-18', 0, 0),
(16, 66, '2020-06-18', 0, 0);

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
(323534, 'anwar husen', 'anwar', '$2y$10$cVrgZid52ywOKK4/x/r0v.IHGut7jMpWeUidn0ZU72y'),
(6436456, 'hfhdf', 'sdgdfh', '$2y$10$7n3DuI9ERdELUhJrVz7qaemVZp7lo1LubEfy6Px.SCX');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(5) NOT NULL,
  `no_rak` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`id_rak`, `no_rak`) VALUES
(1, '0001'),
(2, '1001'),
(3, '2001'),
(4, '3001'),
(5, '4001'),
(6, '5001'),
(7, '6001'),
(8, '7001'),
(9, '8001'),
(10, '9001');

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
  ADD PRIMARY KEY (`kode_buku_literasi`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_rak` (`id_rak`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `buku_mapel_kelas`
--
ALTER TABLE `buku_mapel_kelas`
  ADD PRIMARY KEY (`id_judul_buku_mapel`),
  ADD KEY `id_penerbit` (`id_penerbit`);

--
-- Indeks untuk tabel `buku_tahunan_siswa`
--
ALTER TABLE `buku_tahunan_siswa`
  ADD PRIMARY KEY (`id_judul_buku_tahunan`),
  ADD KEY `id_penerbit` (`id_penerbit`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
  ADD KEY `kode_kelas` (`kode_kelas`) USING BTREE;

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
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

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
  ADD KEY `kode_kelas` (`kode_kelas`) USING BTREE,
  ADD KEY `kode_kelas_2` (`kode_kelas`),
  ADD KEY `kode_kelas_3` (`kode_kelas`);

--
-- Indeks untuk tabel `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_buku_literasi`
--
ALTER TABLE `peminjaman_buku_literasi`
  MODIFY `id_pinjam_buku_literasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_buku_mapel`
--
ALTER TABLE `peminjaman_buku_mapel`
  MODIFY `id_pinjam_buku_mapel` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_buku_tahunan`
--
ALTER TABLE `peminjaman_buku_tahunan`
  MODIFY `id_pinjam_buku_tahunan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_buku_literasi`
--
ALTER TABLE `pengembalian_buku_literasi`
  MODIFY `id_kembali_literasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_buku_mapel`
--
ALTER TABLE `pengembalian_buku_mapel`
  MODIFY `id_kembali_mapel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_buku_tahunan`
--
ALTER TABLE `pengembalian_buku_tahunan`
  MODIFY `id_pengembalian_tahunan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pengunjung_siswa`
--
ALTER TABLE `pengunjung_siswa`
  MODIFY `id_pengunjung` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT untuk tabel `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku_literasi_umum`
--
ALTER TABLE `buku_literasi_umum`
  ADD CONSTRAINT `buku_literasi_umum_ibfk_1` FOREIGN KEY (`id_rak`) REFERENCES `rak` (`id_rak`),
  ADD CONSTRAINT `buku_literasi_umum_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`),
  ADD CONSTRAINT `buku_literasi_umum_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `buku_mapel_kelas`
--
ALTER TABLE `buku_mapel_kelas`
  ADD CONSTRAINT `buku_mapel_kelas_ibfk_1` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`);

--
-- Ketidakleluasaan untuk tabel `buku_tahunan_siswa`
--
ALTER TABLE `buku_tahunan_siswa`
  ADD CONSTRAINT `buku_tahunan_siswa_ibfk_1` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`);

--
-- Ketidakleluasaan untuk tabel `peminjaman_buku_literasi`
--
ALTER TABLE `peminjaman_buku_literasi`
  ADD CONSTRAINT `peminjaman_buku_literasi_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `member_perpus` (`nis`),
  ADD CONSTRAINT `peminjaman_buku_literasi_ibfk_3` FOREIGN KEY (`kode_buku_literasi`) REFERENCES `buku_literasi_umum` (`kode_buku_literasi`);

--
-- Ketidakleluasaan untuk tabel `peminjaman_buku_mapel`
--
ALTER TABLE `peminjaman_buku_mapel`
  ADD CONSTRAINT `peminjaman_buku_mapel_ibfk_2` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`),
  ADD CONSTRAINT `peminjaman_buku_mapel_ibfk_3` FOREIGN KEY (`id_judul_buku_mapel`) REFERENCES `buku_mapel_kelas` (`id_judul_buku_mapel`);

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
