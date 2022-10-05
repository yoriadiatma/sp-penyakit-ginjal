-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2017 at 02:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alele_ginjal`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailkonsul`
--

CREATE TABLE IF NOT EXISTS `detailkonsul` (
  `idkonsul` varchar(5) NOT NULL,
  `idgejala` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detailkonsul`
--

INSERT INTO `detailkonsul` (`idkonsul`, `idgejala`) VALUES
('1', 'G01'),
('1', 'G02'),
('2', 'G08'),
('2', 'G10'),
('3', 'G01'),
('3', 'G03'),
('3', 'G06'),
('3', 'G07'),
('3', 'G08'),
('3', 'G09');

-- --------------------------------------------------------

--
-- Table structure for table `tblgangguan`
--

CREATE TABLE IF NOT EXISTS `tblgangguan` (
  `idgangguan` varchar(5) NOT NULL,
  `namagangguan` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblgangguan`
--

INSERT INTO `tblgangguan` (`idgangguan`, `namagangguan`) VALUES
('P1', 'Ginjal');

-- --------------------------------------------------------

--
-- Table structure for table `tblgangguanterapi`
--

CREATE TABLE IF NOT EXISTS `tblgangguanterapi` (
`id` int(3) NOT NULL,
  `idgangguan` varchar(5) NOT NULL,
  `idterapi` varchar(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblgangguanterapi`
--

INSERT INTO `tblgangguanterapi` (`id`, `idgangguan`, `idterapi`) VALUES
(1, 'P1', 'S1'),
(2, 'P1', 'S2'),
(3, 'P1', 'S3'),
(4, 'P1', 'S4'),
(5, 'P1', 'S5');

-- --------------------------------------------------------

--
-- Table structure for table `tblgejala`
--

CREATE TABLE IF NOT EXISTS `tblgejala` (
  `idgejala` varchar(5) NOT NULL,
  `namagejala` varchar(150) NOT NULL,
  `persen` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblgejala`
--

INSERT INTO `tblgejala` (`idgejala`, `namagejala`, `persen`) VALUES
('G01', 'Terdapat pembengkakan pada mata atau kaki', 10),
('G02', 'Nyeri di pinggang sangat hebat', 30),
('G03', 'Urin berbuih', 10),
('G04', 'Kencing yang sedikit', 5),
('G05', 'Mengalami kencing merah atau kencing darah', 20),
('G06', 'Sering buang air kecil', 5),
('G07', 'Memiliki kulit kering dan gatal', 5),
('G08', 'Lemas dan tidak bertenaga', 3),
('G09', ' Nyeri Saat Berkemih', 10),
('G10', 'Sesak nafas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblgejalagangguan`
--

CREATE TABLE IF NOT EXISTS `tblgejalagangguan` (
`id` int(3) NOT NULL,
  `idgejala` varchar(5) NOT NULL,
  `idgangguan` varchar(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblgejalagangguan`
--

INSERT INTO `tblgejalagangguan` (`id`, `idgejala`, `idgangguan`) VALUES
(2, 'G02', 'P1'),
(3, 'G03', 'P1'),
(4, 'G04', 'P1'),
(5, 'G05', 'P1'),
(6, 'G06', 'P1'),
(7, 'G07', 'P1'),
(8, 'G08', 'P1'),
(9, 'G09', 'P1'),
(10, 'G10', 'P1'),
(11, 'G11', 'P1');

-- --------------------------------------------------------

--
-- Table structure for table `tblkonsultasi`
--

CREATE TABLE IF NOT EXISTS `tblkonsultasi` (
`id` int(5) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `id_pasien` varchar(9) NOT NULL,
  `id_gangguan` varchar(9) NOT NULL,
  `persen` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblkonsultasi`
--

INSERT INTO `tblkonsultasi` (`id`, `tgl`, `id_pasien`, `id_gangguan`, `persen`) VALUES
(1, '16/06/2016', 'kiki', 'P01', 40),
(3, '09/03/2017', 'dodi', 'P01', 43);

-- --------------------------------------------------------

--
-- Table structure for table `tblterapi`
--

CREATE TABLE IF NOT EXISTS `tblterapi` (
  `idterapi` varchar(5) NOT NULL,
  `keteranganterapi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblterapi`
--

INSERT INTO `tblterapi` (`idterapi`, `keteranganterapi`) VALUES
('S1', 'Penderita yang mengalami gagal ginjal harus menjalani cuci darah atau dialisis dengan mesin yang menggantikan fungsi ginjal.'),
('S2', 'Mengurangi makanan yang mengandung garam. garam adalah salah satu jenis makanan dengan kandungan natrium yang tinggi. Natrium yang tinggi bukan hanya bisa menyebabkan tekanan darah, namun juga akan memicu terjadinya proses pembentukan batu ginjal.'),
('S3', 'Operasi merupakan salah satu metode pengobatan yang efektif untuk penderita ginjal.'),
('S4', 'Menggunakan obat berbahan kimia, memang dapat membunuh sel kanker, dapat menghambat pertumbuhan sel tumor dan reproduksi, akan tetapi, penggunaan obat yang berbahan kimia juga dapat menurunkan kekebalan tubuh pasien, sel-sel jaringan yang normal menjadi rusak, sehingga banyak pasien kanker yang menjadi resisten terhadap pengobatan kemoterapi.'),
('S5', 'Alternatif Alami:<br><br>\r\n1.	Daun keji beling ditumbuk halus dan daun kumis kucing serta daun meniran dicabut dengan akarnya<br>\r\n    Caranya: Rebuslah semua bahan dengan air sebanyak 1 liter. Biarkan hingga air tinggal separuhnya. Kemudian saring, minumlah setiap hari secara teratur selamalima hari berturut turut.<br>\r\n2. Daun alpukat segar dan Air panas<br>\r\n   Caranya: Daun alpukat yang sudah dicuci bersih dimasukan ke dalam gelas, kemudian seduh dengan air panas. Minumlah ramuan tersebut 2 kali sehari dan ingat ramuan ini cuma sekali minum.<br>\r\n3.	Daun meniran, Daun ungu, Daun arbei,Daun duduk, Daun kumis kucing, Daun sendokan,Daun ngikilo.<br>\r\n    Caranya: Cuci bersih semua bahan, kemudian rebus sampai benar benar mendidih. Saring dan biarkan sampai airnya hangat. Minumlah ramuan ini secara teratur.<br>\r\n4.	Pucuk daun keji beling, Rambut jagung muda, Temulawak diiris tipis, Daun kumis kucing, Gula merah, Garam dapur<br>\r\n    Caranya: Rebus pucuk daun keji beling, temulawak,rambut jagung,  kumis kucing. Biarkan sampai mendidih. Kemudian tambahkan gula merah dan garam secukupnya. Setelah dingin minumlah 3 kali sehari secara rutin.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `umur` varchar(4) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama_lengkap`, `umur`, `jk`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '25', '', 'admin'),
('widya', '202cb962ac59075b964b07152d234b70', 'Widya', '22', 'Perempuan', 'user'),
('cici', '702e4946e6db9b7a74b921fe85e83f32', 'cici', '23', 'Perempuan', 'user'),
('kiki', '0d61130a6dd5eea85c2c5facfe1c15a7', 'kiki', '35', 'Laki-laki', 'user'),
('eko', 'e5ea9b6d71086dfef3a15f726abcc5bf', 'eko', '43', 'Laki-laki', 'user'),
('dodi', 'dc82a0e0107a31ba5d137a47ab09a26b', 'dodi', '35', 'Laki-laki', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblgangguan`
--
ALTER TABLE `tblgangguan`
 ADD PRIMARY KEY (`idgangguan`);

--
-- Indexes for table `tblgangguanterapi`
--
ALTER TABLE `tblgangguanterapi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblgejala`
--
ALTER TABLE `tblgejala`
 ADD PRIMARY KEY (`idgejala`);

--
-- Indexes for table `tblgejalagangguan`
--
ALTER TABLE `tblgejalagangguan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblkonsultasi`
--
ALTER TABLE `tblkonsultasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblterapi`
--
ALTER TABLE `tblterapi`
 ADD PRIMARY KEY (`idterapi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgangguanterapi`
--
ALTER TABLE `tblgangguanterapi`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tblgejalagangguan`
--
ALTER TABLE `tblgejalagangguan`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tblkonsultasi`
--
ALTER TABLE `tblkonsultasi`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
