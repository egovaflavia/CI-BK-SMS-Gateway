-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Feb 2020 pada 15.01
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
  `nis` int(10) NOT NULL,
  `tg_bim` date NOT NULL,
  `permasalahan` varchar(100) NOT NULL,
  `penyelesaian` varchar(100) NOT NULL,
  `ket_bim` varchar(20) NOT NULL,
  `nip` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `nis` int(10) NOT NULL,
  `tgl_mb` date NOT NULL,
  `minat` varchar(100) NOT NULL,
  `bakat` varchar(100) NOT NULL,
  `ket_mb` varchar(10) NOT NULL,
  `nip` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran_siswa`
--

CREATE TABLE IF NOT EXISTS `pelanggaran_siswa` (
  `nis` int(10) NOT NULL,
  `tgl_plg` date NOT NULL,
  `id_tatib` int(5) NOT NULL,
  `poin` int(3) NOT NULL,
  `ket_plg` varchar(10) NOT NULL,
  `nip` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tatatertib`
--

CREATE TABLE IF NOT EXISTS `tatatertib` (
  `id_tatib` int(5) NOT NULL,
  `tatib` varchar(100) NOT NULL,
  `b_poin` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimbingan_siswa`
--
ALTER TABLE `bimbingan_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  ADD PRIMARY KEY (`nis`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
