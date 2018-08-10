-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jul 2018 pada 15.51
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `nohp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `email`, `nohp`) VALUES
(1, 'novega', 'admin', 'admin', 'email@gmail.com', 273455621);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'instalasi'),
(2, 'servis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pendaftaran`
--

CREATE TABLE `detail_pendaftaran` (
  `id_detail_pendaftaran` int(11) NOT NULL,
  `id_pkl` int(11) NOT NULL,
  `id_disposisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pendaftaran`
--

INSERT INTO `detail_pendaftaran` (`id_detail_pendaftaran`, `id_pkl`, `id_disposisi`) VALUES
(1, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `id_pembimbing` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nmpem_sekolah` varchar(50) NOT NULL,
  `nohp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `id_jurusan`, `id_bidang`, `id_pembimbing`, `nim`, `nmpem_sekolah`, `nohp`) VALUES
(2, 2, 2, 2, '002', 'test', 0),
(3, 1, 2, 2, '004', '', 0),
(4, 2, 2, 2, '999', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id_info` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`id_info`, `judul`, `gambar`, `deskripsi`, `tgl`) VALUES
('1', 'test', 'Desert.jpg', 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', '0000-00-00 00:00:00'),
('2', 'bebas', 'Penguins.jpg', 'bebasbebasbebasbebasbebasbebasbebasbebasbebasbebasbebasbebas', '0000-00-00 00:00:00'),
('3', 'kambing', 'Koala.jpg', 'kambingkambingkambingkambingkambingkambingkambingkambingkambingkambing', '2018-07-26 16:26:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'TKJ'),
(2, 'Multimedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `komentar` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing`
--

CREATE TABLE `pembimbing` (
  `id_pembimbing` int(11) NOT NULL,
  `nama_pembimbing` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembimbing`
--

INSERT INTO `pembimbing` (`id_pembimbing`, `nama_pembimbing`) VALUES
(1, 'Agan'),
(2, 'novega');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pkl` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `sekolah` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `status_sekarang` varchar(20) NOT NULL,
  `nohp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pkl`, `id_konsultasi`, `nim`, `nama`, `jenis_kel`, `sekolah`, `email`, `photo`, `tempat_lahir`, `tgl_lahir`, `alamat`, `status_sekarang`, `nohp`) VALUES
(1, 0, '001', 'vega', 'L', 'SMK', 'vega@example.com', '2-4-3.png', 'bebas', '1996-11-20', 'bebas', 'bebas', 2147483647),
(2, 0, '002', 'TEST', 'L', 'SMK', 'test@gmail.com', '2-4-3.png', 'bebas', '2018-07-10', 'asdasd', 'sdfsfs', 2147483647),
(3, 0, '004', 'bro', 'L', 'SMK', 'bebas@gmail.com', 'dsds.png', 'FXFD', '2018-07-10', 'hjhkh', 'ghfgfj', 7698797),
(7, 0, '003', 'CHOIRUL', 'L', 'SMK N 1 Kota Serang', 'novega@gmail.com', 'Koala.jpg', 'banyumas', '2018-07-26', 'sdfs', 'adrafasd', 182913),
(8, 0, '999', 'test', 'P', 'SMK', 'test@gmail.com', 'Koala.jpg', 'FXFD', '2018-07-10', 'asda', 'asda', 322413141),
(9, 0, '1221', 'bro', 'L', 'SMK', 'bebas@gmail.com', 'Koala.jpg', 'bebas', '2018-07-24', 'dfsdfs', 'sdfsf', 456456454);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewdetailpendaftaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `viewdetailpendaftaran` (
);

-- --------------------------------------------------------

--
-- Struktur untuk view `viewdetailpendaftaran`
--
DROP TABLE IF EXISTS `viewdetailpendaftaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewdetailpendaftaran`  AS  select `detail_pendaftaran`.`id_detail_pendaftaran` AS `id_detail_pendaftaran`,`pendaftaran`.`nim` AS `nim`,`pendaftaran`.`nama` AS `nama`,`pendaftaran`.`jenis_kel` AS `jenis_kel`,`pendaftaran`.`sekolah` AS `sekolah`,`pendaftaran`.`photo` AS `photo`,`pendaftaran`.`tempat_lahir` AS `tempat_lahir`,`pendaftaran`.`tgl_lahir` AS `tgl_lahir`,`jurusan`.`nama_jurusan` AS `nama_jurusan`,`pembimbing`.`nama_pembimbing` AS `nama_pembimbing`,`bidang`.`nama_bidang` AS `nama_bidang`,`detail_pendaftaran`.`status` AS `status` from (((((`detail_pendaftaran` join `pendaftaran`) join `disposisi`) join `jurusan`) join `pembimbing`) join `bidang`) where ((`detail_pendaftaran`.`id_pkl` = `pendaftaran`.`id_pkl`) and (`detail_pendaftaran`.`id_disposisi` = `disposisi`.`id_disposisi`) and (`disposisi`.`id_jurusan` = `jurusan`.`id_jurusan`) and (`disposisi`.`id_bidang` = `bidang`.`id_bidang`) and (`disposisi`.`id_pembimbing` = `pembimbing`.`id_pembimbing`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  ADD PRIMARY KEY (`id_detail_pendaftaran`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `pembimbing`
--
ALTER TABLE `pembimbing`
  ADD PRIMARY KEY (`id_pembimbing`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pkl`),
  ADD KEY `id_konsultasi` (`id_konsultasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  MODIFY `id_detail_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembimbing`
--
ALTER TABLE `pembimbing`
  MODIFY `id_pembimbing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
