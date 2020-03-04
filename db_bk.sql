-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mar 2020 pada 11.49
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bimbingan_siswa`
--

INSERT INTO `bimbingan_siswa` (`id_bimbingan`, `nis`, `tg_bim`, `permasalahan`, `penyelesaian`, `ket_bim`, `nip`) VALUES
(1, 3386, '2020-03-04', 'Putus', 'Nyambung', 'Belum di Proses', 2147483647),
(2, 3406, '2020-03-02', 'Masalah Keluarga', 'Pemanggilan Orangtua', 'Belum di Proses', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` int(20) NOT NULL,
  `nm_guru` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nm_guru`, `jabatan`) VALUES
(2147483647, 'Ardison Ismail, S.Pd', 'Kepala Sekolah');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `minat_bakat`
--

INSERT INTO `minat_bakat` (`id_mb`, `nis`, `tgl_mb`, `minat`, `bakat`, `ket_mb`, `nip`) VALUES
(2, 3386, '2020-03-02', 'Olahraga', 'Seni', 'Belum di P', 2147483647);

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
  `point` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggaran_siswa`
--

INSERT INTO `pelanggaran_siswa` (`id_pelanggaran`, `nis`, `tgl_plg`, `id_tatib`, `ket_plg`, `nip`, `point`) VALUES
(1, 3405, '2020-03-02', 1, 'Proses', 2147483647, 5);

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
(3386, '2019/2020', 'Apit Syaifa', 'VIII.1', 'L', 'Pariangan', '2147483647', 95),
(3387, '2019/2020', 'Aurel Titania', 'IX', 'P', 'Sikaladi', '2147483647', 95),
(3405, '2019/2020', 'Rizky Boy', 'VIII.2', 'L', 'Guguk', '2147483647', 95),
(3406, '2019/2020', 'Roy Imanda', 'IX', 'L', 'Sikaladi', '2147483647', 100),
(3411, '2019/2020', 'Yulia Anisa', 'IX', 'P', 'Sikaladi', '2147483647', 70),
(3416, '2019/2020', 'Ade Latifah Hanum', 'VIII.2', 'P', 'Sikaladi', '2147483647', 100),
(3421, '2019/2020', 'Aza Khairunnisa', 'VIII.2', 'P', 'Pariangan', '2147483647', 100),
(3450, '2019/2020', 'Refiqra Dwi Akila', 'VIII.1', 'P', 'Sikaladi', '2147483647', 100),
(3465, '2019/2020', 'Cici Puspita Jp Gulo', 'VII', 'P', 'Sikaladi', '2147483647', 100),
(3477, '2019/2020', 'Zahratul Aini', 'VII', 'P', 'Sikaladi', '2147483647', 100);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`, `jabatan`) VALUES
(1, 'ardisonismail', 'ardison123', 'Ardison Ismail, S.Pd', 'Kepala Sekolah'),
(2, 'windaoctriana', 'winda123', 'Winda Octriana, S.Pd', 'Guru'),
(3, 'admin', 'admin', 'Roy Imanda', 'Siswa');

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
  MODIFY `id_bimbingan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  MODIFY `id_mb` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tatatertib`
--
ALTER TABLE `tatatertib`
  MODIFY `id_tatib` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
