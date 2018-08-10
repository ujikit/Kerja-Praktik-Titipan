-- MySQL dump 10.16  Distrib 10.1.32-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: perpus
-- ------------------------------------------------------
-- Server version	10.1.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anggota`
--

DROP TABLE IF EXISTS `anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anggota` (
  `kd_anggota` varchar(15) NOT NULL,
  `nama_anggota` varchar(45) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `stts` varchar(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota`
--

LOCK TABLES `anggota` WRITE;
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` VALUES ('1','mboh sopo iki','L',' ','1','aktif','1','2018-07-07 06:59:07','mboh','mboh',''),('3','haidar','L',' jogja','08122222222','nonaktif','bisa','2018-07-07 06:59:39','haidar','haidar',''),('545','222','L',' asaass','1231231','denda','qweqwe','2018-07-07 06:59:49','bakso','basko',''),('AGT1801140001','tobanga','P','mlipak','089765123','mampu','Jomblo','2018-01-14 08:24:47','','','');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku` (
  `kd_buku` varchar(15) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `kd_pengarang` varchar(15) NOT NULL,
  `kd_penerbit` varchar(15) NOT NULL,
  `kd_klasifikasi` varchar(15) NOT NULL,
  `thn_terbit` year(4) NOT NULL,
  `bahasa` varchar(30) NOT NULL,
  `edisi` varchar(40) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kd_rak` varchar(15) NOT NULL,
  PRIMARY KEY (`kd_buku`),
  KEY `kd_penerbit` (`kd_penerbit`),
  KEY `kd_pengarang` (`kd_pengarang`),
  KEY `kd_rak` (`kd_rak`),
  KEY `kd_klasifikasi` (`kd_klasifikasi`),
  CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kd_penerbit`) REFERENCES `penerbit` (`kd_penerbit`),
  CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`kd_pengarang`) REFERENCES `pengarang` (`kd_pengarang`),
  CONSTRAINT `buku_ibfk_3` FOREIGN KEY (`kd_rak`) REFERENCES `rak_buku` (`kd_rak`),
  CONSTRAINT `buku_ibfk_4` FOREIGN KEY (`kd_klasifikasi`) REFERENCES `klasifikasi` (`kd_klasifikasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES ('buk001','cerita rakyat','1','12','kl002',2012,'indonesia','1','08899666',3,'rak002'),('buk002','B indonesia','1','pen003','kl002',2012,'indonesia','1','08899666',3,'rak001'),('buk003','B ING','1','pen003','kl001',2009,'ING','1','08899666',8,'rak002'),('buk004','Matematika','1','d3123','kl001',2010,'indonesia','2','0888882',7,'rak002'),('buk005','Risalah  Rosull','1','d3123','kl002',2014,'indonesia','1','0886661',12,'rak002');
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `denda`
--

DROP TABLE IF EXISTS `denda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `denda` (
  `kd_denda` varchar(15) NOT NULL,
  `tgl_denda` date NOT NULL,
  `jumlah_denda` float NOT NULL,
  `stts` varchar(30) NOT NULL,
  `no_det_pinjam` varchar(15) NOT NULL,
  PRIMARY KEY (`kd_denda`),
  KEY `no_det_pinjam` (`no_det_pinjam`),
  CONSTRAINT `denda_ibfk_1` FOREIGN KEY (`no_det_pinjam`) REFERENCES `detail_pinjam` (`no_det_pinjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `denda`
--

LOCK TABLES `denda` WRITE;
/*!40000 ALTER TABLE `denda` DISABLE KEYS */;
/*!40000 ALTER TABLE `denda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_pinjam`
--

DROP TABLE IF EXISTS `detail_pinjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_pinjam` (
  `no_det_pinjam` varchar(15) NOT NULL,
  `no_pinjam` varchar(15) NOT NULL,
  `kd_buku` varchar(15) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `stts` varchar(40) NOT NULL,
  PRIMARY KEY (`no_det_pinjam`),
  KEY `no_pinjam` (`no_pinjam`),
  KEY `kd_buku` (`kd_buku`),
  CONSTRAINT `detail_pinjam_ibfk_1` FOREIGN KEY (`no_pinjam`) REFERENCES `pinjam` (`no_pinjam`),
  CONSTRAINT `detail_pinjam_ibfk_2` FOREIGN KEY (`kd_buku`) REFERENCES `buku` (`kd_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_pinjam`
--

LOCK TABLES `detail_pinjam` WRITE;
/*!40000 ALTER TABLE `detail_pinjam` DISABLE KEYS */;
INSERT INTO `detail_pinjam` VALUES ('1','PNJ000005','buk002','2018-07-04',2,''),('DPB000001','PNJ000012','buk001','0000-00-00',1,'Pinjam'),('DPB000002','PNJ000012','buk001','0000-00-00',2,'Pinjam'),('DPB000003','PNJ000012','buk004','0000-00-00',2,'Pinjam'),('DPB000004','PNJ000012','buk001','0000-00-00',1,'Pinjam'),('DPB000005','PNJ000012','buk004','0000-00-00',8,'Pinjam'),('DPB000006','PNJ000012','buk003','0000-00-00',1,'Pinjam'),('DPB000007','PNJ000012','buk002','0000-00-00',12,'Pinjam'),('DPB000008','PNJ000012','buk001','0000-00-00',23,'Pinjam'),('DPB000009','PNJ000013','buk002','0000-00-00',3,'Pinjam'),('DPB000010','PNJ000014','buk001','0000-00-00',1,'Pinjam'),('DPB000011','PNJ000016','buk003','0000-00-00',1,'Pinjam'),('DPB000012','PNJ000016','buk002','0000-00-00',1,'Pinjam'),('DPB000013','PNJ000018','buk002','0000-00-00',1,'Pinjam'),('DPB000014','PNJ000018','buk003','0000-00-00',1,'Pinjam'),('DPB000015','PNJ000019','buk003','0000-00-00',2,'Pinjam');
/*!40000 ALTER TABLE `detail_pinjam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `klasifikasi`
--

DROP TABLE IF EXISTS `klasifikasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klasifikasi` (
  `kd_klasifikasi` varchar(15) NOT NULL,
  `nama_klasifikasi` varchar(45) NOT NULL,
  PRIMARY KEY (`kd_klasifikasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klasifikasi`
--

LOCK TABLES `klasifikasi` WRITE;
/*!40000 ALTER TABLE `klasifikasi` DISABLE KEYS */;
INSERT INTO `klasifikasi` VALUES ('kl001','LKS'),('kl002','Novel'),('kl003','Kitab');
/*!40000 ALTER TABLE `klasifikasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penerbit`
--

DROP TABLE IF EXISTS `penerbit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penerbit` (
  `kd_penerbit` varchar(15) NOT NULL,
  `nama_penerbit` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `telp` varchar(13) NOT NULL,
  PRIMARY KEY (`kd_penerbit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerbit`
--

LOCK TABLES `penerbit` WRITE;
/*!40000 ALTER TABLE `penerbit` DISABLE KEYS */;
INSERT INTO `penerbit` VALUES ('12','2',' 3','333'),('d3123','erlanga','amin','333'),('pen001','erlanga','yogyakarta ','0888888888222'),('pen003','adi pati','jakarta ','0889876552627');
/*!40000 ALTER TABLE `penerbit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengarang`
--

DROP TABLE IF EXISTS `pengarang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengarang` (
  `kd_pengarang` varchar(15) NOT NULL,
  `nama_pengarang` varchar(15) NOT NULL,
  `jk` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_pengarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengarang`
--

LOCK TABLES `pengarang` WRITE;
/*!40000 ALTER TABLE `pengarang` DISABLE KEYS */;
INSERT INTO `pengarang` VALUES ('1','gapoonk','L'),('pgr03','panggar','L');
/*!40000 ALTER TABLE `pengarang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengembalian`
--

DROP TABLE IF EXISTS `pengembalian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengembalian` (
  `no_pengembalian` varchar(15) NOT NULL,
  `kd_petugas` varchar(15) NOT NULL,
  `kd_anggota` varchar(15) NOT NULL,
  `tgl_kembali` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_det_pinjam` varchar(15) NOT NULL,
  PRIMARY KEY (`no_pengembalian`),
  KEY `kd_anggota` (`kd_anggota`),
  KEY `kd_petugas` (`kd_petugas`),
  KEY `no_det_pinjam` (`no_det_pinjam`),
  CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`kd_anggota`) REFERENCES `anggota` (`kd_anggota`),
  CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`kd_petugas`) REFERENCES `petugas` (`kd_petugas`),
  CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`no_det_pinjam`) REFERENCES `detail_pinjam` (`no_det_pinjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengembalian`
--

LOCK TABLES `pengembalian` WRITE;
/*!40000 ALTER TABLE `pengembalian` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengembalian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petugas`
--

DROP TABLE IF EXISTS `petugas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petugas` (
  `kd_petugas` varchar(15) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `user_login` varchar(15) NOT NULL,
  `pwd_login` varchar(32) NOT NULL,
  `stts` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `hak_akses` enum('petugas','anggota') NOT NULL,
  PRIMARY KEY (`kd_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petugas`
--

LOCK TABLES `petugas` WRITE;
/*!40000 ALTER TABLE `petugas` DISABLE KEYS */;
INSERT INTO `petugas` VALUES ('1','ASIK COYYY','L',' jogja','08122222','asik','asik','pegawai','','petugas'),('Pet01','JARWO SUTEJO','L',' jogja','0812222121','jarwo','jarwo','petugas','','petugas');
/*!40000 ALTER TABLE `petugas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pinjam`
--

DROP TABLE IF EXISTS `pinjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pinjam` (
  `no_pinjam` varchar(15) NOT NULL,
  `kd_petugas` varchar(15) NOT NULL,
  `kd_anggota` varchar(15) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_harus_kembali` date NOT NULL,
  PRIMARY KEY (`no_pinjam`),
  KEY `kd_anggota` (`kd_anggota`),
  KEY `kd_petugas` (`kd_petugas`),
  CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`kd_anggota`) REFERENCES `anggota` (`kd_anggota`),
  CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`kd_petugas`) REFERENCES `petugas` (`kd_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pinjam`
--

LOCK TABLES `pinjam` WRITE;
/*!40000 ALTER TABLE `pinjam` DISABLE KEYS */;
INSERT INTO `pinjam` VALUES ('PNJ000001','Pet01','1','2018-07-21','2018-07-28'),('PNJ000002','Pet01','1','2018-07-21','2018-07-28'),('PNJ000003','Pet01','1','2018-07-21','2018-07-28'),('PNJ000005','Pet01','1','2018-07-21','2018-07-28'),('PNJ000006','Pet01','1','2018-07-21','2018-07-28'),('PNJ000007','Pet01','1','2018-07-21','2018-07-28'),('PNJ000012','Pet01','1','2018-07-21','2018-07-28'),('PNJ000013','Pet01','3','2018-07-23','2018-07-30'),('PNJ000014','Pet01','3','2018-08-03','2018-08-10'),('PNJ000015','Pet01','3','2018-07-24','2018-07-31'),('PNJ000016','Pet01','545','2018-07-24','2018-07-31'),('PNJ000017','Pet01','545','2018-07-24','2018-07-31'),('PNJ000018','Pet01','3','2018-08-07','2018-08-14'),('PNJ000019','Pet01','1','2018-08-07','2018-08-14'),('PNJ000020','Pet01','3','2018-08-07','2018-08-14'),('PNJ000021','Pet01','3','2018-08-07','2018-08-14'),('PNJ000022','Pet01','3','2018-08-07','2018-08-14');
/*!40000 ALTER TABLE `pinjam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rak_buku`
--

DROP TABLE IF EXISTS `rak_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rak_buku` (
  `kd_rak` varchar(45) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `nama_rak` varchar(15) NOT NULL,
  PRIMARY KEY (`kd_rak`),
  KEY `kd_buku` (`nama_rak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rak_buku`
--

LOCK TABLES `rak_buku` WRITE;
/*!40000 ALTER TABLE `rak_buku` DISABLE KEYS */;
INSERT INTO `rak_buku` VALUES ('rak001','1','anggrek'),('rak002','barat','A1');
/*!40000 ALTER TABLE `rak_buku` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-08  7:06:01
