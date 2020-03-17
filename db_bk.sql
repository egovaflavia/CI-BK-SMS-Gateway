-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mar 2020 pada 21.28
-- Versi Server: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbingan_siswa`
--

CREATE TABLE IF NOT EXISTS `bimbingan_siswa` (
  `id_bimbingan` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `tg_bim` date NOT NULL,
  `permasalahan` varchar(100) NOT NULL,
  `penyelesaian` varchar(100) NOT NULL,
  `ket_bim` varchar(20) NOT NULL,
  `nip` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bimbingan_siswa`
--

INSERT INTO `bimbingan_siswa` (`id_bimbingan`, `nis`, `tg_bim`, `permasalahan`, `penyelesaian`, `ket_bim`, `nip`) VALUES
(9, 1308, '2020-03-18', 'Pacaran', 'Putus', 'Belum di Proses', 2147483647),
(10, 1308, '2020-03-18', 'Galau', 'Tidak ada', 'Belum di Proses', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` varchar(30) NOT NULL,
  `nm_guru` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nm_guru`, `jabatan`) VALUES
('2147483647', 'Winda Octriana, S.Pd.I', 'Guru Bimbingan Konseling'),
('242366', 'Sonya', 'Guru BK'),
('257778', 'Ardison Ismail, S.Pd', 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minat_bakat`
--

CREATE TABLE IF NOT EXISTS `minat_bakat` (
  `id_mb` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `tgl_mb` date NOT NULL,
  `minat` varchar(100) NOT NULL,
  `bakat` varchar(100) NOT NULL,
  `ket_mb` varchar(10) NOT NULL,
  `nip` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `minat_bakat`
--

INSERT INTO `minat_bakat` (`id_mb`, `nis`, `tgl_mb`, `minat`, `bakat`, `ket_mb`, `nip`) VALUES
(2, 0, '2020-03-02', 'Olahraga', 'Seni', 'Proses', 2147483647),
(3, 0, '2019-07-16', 'Kesenian', 'Numerik/Perhitungan', 'Proses', 12345678),
(4, 0, '2019-10-16', 'Kesehatan', 'Public Speaking', 'Proses', 12345678),
(6, 3386, '2019-10-14', 'Sepak Bola', 'Numerik/Perhitungan', 'Proses', 2147483647),
(7, 3405, '2019-10-14', 'Sepak Bola', 'Numerik/Perhitungan', 'Proses', 2147483647),
(8, 3469, '2019-10-16', 'Sepak Takraw', 'Musik/seni', 'Proses', 2147483647),
(9, 3407, '2019-10-16', 'Kesehatan', 'Analisis', 'Proses', 2147483647),
(10, 3387, '2019-10-16', 'Kesehatan', 'Public Speaking', 'Proses', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran_siswa`
--

CREATE TABLE IF NOT EXISTS `pelanggaran_siswa` (
  `id_pelanggaran` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `tgl_plg` date NOT NULL,
  `id_tatib` int(5) NOT NULL,
  `ket_plg` varchar(50) NOT NULL,
  `nip` int(20) NOT NULL,
  `sanksi` varchar(100) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggaran_siswa`
--

INSERT INTO `pelanggaran_siswa` (`id_pelanggaran`, `nis`, `tgl_plg`, `id_tatib`, `ket_plg`, `nip`, `sanksi`, `point`) VALUES
(4, 3477, '2019-07-29', 2, 'Proses', 2147483647, '', 5),
(5, 3406, '2019-07-29', 7, 'Proses', 2147483647, '', 5),
(11, 3387, '2019-08-05', 7, 'Proses', 2147483647, '', 5),
(13, 3458, '2019-07-26', 1, 'Proses', 2147483647, '', 5),
(15, 3459, '2020-03-12', 23, 'Proses', 2147483647, '', 75),
(16, 3407, '0000-00-00', 26, 'Proses', 2147483647, '', 100),
(17, 3461, '2020-03-03', 19, 'Proses', 2147483647, '', 30),
(18, 3406, '2020-03-04', 10, 'Proses', 2147483647, '', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(10) NOT NULL,
  `ta` varchar(10) NOT NULL,
  `nm_siswa` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jekel` varchar(2) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp_ortu` varchar(20) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `ta`, `nm_siswa`, `kelas`, `jekel`, `alamat`, `no_hp_ortu`, `point`) VALUES
(1308, '2019/2020', 'Egova Riva Gustino', 'XII', 'La', 'Padang', '0819629431', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tatatertib`
--

CREATE TABLE IF NOT EXISTS `tatatertib` (
  `id_tatib` int(5) NOT NULL,
  `tatib` varchar(100) NOT NULL,
  `b_poin` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tatatertib`
--

INSERT INTO `tatatertib` (`id_tatib`, `tatib`, `b_poin`) VALUES
(1, 'Terlambat masuk sekolah 15 menit setelah bel berbunyi', 5),
(2, 'Tidak mengikuti upcara bendera', 5),
(3, 'Izin keluar selama PBM berlangsung dan tidak kembali ke kelas', 5),
(4, 'Tidak masuk sekolah tanpa keterangan', 10),
(5, 'Meninggalkan kelas hingga PBM selesai', 30),
(6, 'Tidak masuk sekolah dengan memberikan keterangan palsu', 10),
(7, 'Tidak memakai atribut (topi dan dasi) saat upacara bendera', 5),
(8, 'Memakai pakaian seragam sekolah terlalu ketat', 20),
(9, 'Memakai pakaian seragam sekolah tidak rapi', 10),
(10, 'Mengeluarkan kata-kata tidak sopan kepada guru', 50),
(11, 'Berbuat asusila di lingkungan sekolah', 75),
(12, 'Mencuri peralatan sekolah', 50),
(13, 'Mencuri barang milik teman/siswa lain', 30),
(14, 'Membawa HP ke sekolah kecuali dalam keadaan tertentu', 20),
(15, 'Memainkan HP saat PBM berlangsung', 30),
(16, 'Keluar kelas tanpa izin guru', 10),
(17, 'Keluar lingkungan sekolah tanpa izin guru piket', 20),
(18, 'Mengotori atau mencoret-coret fasilitas sekolah', 20),
(19, 'Merusak fasilitas sekolah', 30),
(20, 'Membawa rokok ke dalam lingkungan sekolah', 25),
(21, 'Merokok di lingkungan sekolah', 30),
(22, 'Membawa buku, majalah porno dan lainnya kedalam lingkungan sekolah', 50),
(23, 'Melihat foto dan atau menonton video porno dan lainnya di lingkungan sekolah', 75),
(24, 'Membawa senjata tajam ke dalam lingkungan sekolah', 80),
(25, 'Membawa senjata tajam dengan sengaja untuk melukai seseorang', 100),
(26, 'Mabuk di dalam kelas dan lingkungan sekolah', 100),
(27, 'Membawa dan menggunakan obat-obatan terlarang dan minuman keras ke lingkungan sekolah', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`, `jabatan`) VALUES
(1, 'admin', 'admin', 'Winda Octriana, S.Pd', 'Guru BK'),
(16, '1308', '5e713a0b6e3e1', 'Egova Riva Gustino', 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimbingan_siswa`
--
ALTER TABLE `bimbingan_siswa`
  ADD PRIMARY KEY (`id_bimbingan`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  ADD PRIMARY KEY (`id_mb`);

--
-- Indexes for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tatatertib`
--
ALTER TABLE `tatatertib`
  ADD PRIMARY KEY (`id_tatib`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bimbingan_siswa`
--
ALTER TABLE `bimbingan_siswa`
  MODIFY `id_bimbingan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  MODIFY `id_mb` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tatatertib`
--
ALTER TABLE `tatatertib`
  MODIFY `id_tatib` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
