-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Feb 2020 pada 16.02
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bimbingan_siswa`
--

INSERT INTO `bimbingan_siswa` (`id_bimbingan`, `nis`, `tg_bim`, `permasalahan`, `penyelesaian`, `ket_bim`, `nip`) VALUES
(1, 1124, '2020-02-19', 'Malas', 'Keluar', 'Proses', 123),
(3, 52, '1983-02-26', 'Nihil repellendus S', 'Nulla qui molestiae ', 'Error dolores labore', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` int(20) NOT NULL,
  `nm_guru` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `minat_bakat`
--

INSERT INTO `minat_bakat` (`id_mb`, `nis`, `tgl_mb`, `minat`, `bakat`, `ket_mb`, `nip`) VALUES
(1, 3465, '2020-02-17', 'OLahraga', 'Seni', 'Proses', 236),
(2, 0, '2016-09-26', 'Asperiores non et ip', 'Voluptatem blanditii', 'Tempora ne', 14),
(5, 82, '1991-06-01', 'Excepteur at reicien', 'Velit sunt soluta u', 'Consequatu', 85),
(6, 25, '2014-04-22', 'Qui ut repudiandae e', 'Ex consectetur dolor', 'Fugiat qui', 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran_siswa`
--

CREATE TABLE IF NOT EXISTS `pelanggaran_siswa` (
  `id_pelanggaran` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `tgl_plg` date NOT NULL,
  `id_tatib` int(5) NOT NULL,
  `poin` int(3) NOT NULL,
  `ket_plg` varchar(10) NOT NULL,
  `nip` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggaran_siswa`
--

INSERT INTO `pelanggaran_siswa` (`id_pelanggaran`, `nis`, `tgl_plg`, `id_tatib`, `poin`, `ket_plg`, `nip`) VALUES
(2, 99, '1985-02-14', 0, 98, 'Veniam sol', 50);

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
  `no_hp_ortu` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `ta`, `nm_siswa`, `kelas`, `jekel`, `alamat`, `no_hp_ortu`) VALUES
(55, 'Dolore ips', 'Commodo debitis aspe', 'sad', 'E', 'Dicta elit quam exc', 6),
(67, 'Dolorem au', 'Sint nihil a minima', 'Occaecat s', 'No', 'Necessitatibus magni', 21),
(87, 'Est pariat', 'Eum id optio assume', 'Culpa volu', 'Ve', 'Sunt perspiciatis ', 12),
(1123, '2020', 'Egova', '5', 'L', 'Padang', 819629431);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tatatertib`
--

CREATE TABLE IF NOT EXISTS `tatatertib` (
  `id_tatib` int(5) NOT NULL,
  `tatib` varchar(100) NOT NULL,
  `b_poin` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tatatertib`
--

INSERT INTO `tatatertib` (`id_tatib`, `tatib`, `b_poin`) VALUES
(1, 'Terlambat masuk sekolah 15 menit setelah bel berbunyi', 5),
(2, 'Tidak mengikuti upcara bendera', 5);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`, `jabatan`) VALUES
(1, 'admin', 'admin', 'Administrator', 'Guru BK'),
(2, 'Guru TI', 'Guru TI', 'Guru TI', 'Guru TI'),
(4, 'kigenuji', 'Proident lorem dolo', 'Reiciendis reprehend', 'Qui dolores lorem no'),
(5, 'wobequxas', 'Laboriosam nihil es', 'Esse ut voluptatem ', 'Tempore sequi quo l');

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
  MODIFY `id_bimbingan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  MODIFY `id_mb` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tatatertib`
--
ALTER TABLE `tatatertib`
  MODIFY `id_tatib` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
