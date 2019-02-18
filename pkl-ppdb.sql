-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 05:22 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pkl-ppdb`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `id_pendaftar`(`nomor` INT) RETURNS char(10) CHARSET latin1
BEGIN
DECLARE id CHAR(10);
DECLARE urut INT;

SET urut = IF(nomor IS NULL, 1, nomor + 1);
SET id = CONCAT ("PSB", LPAD(urut,7,0));

RETURN id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `id_pendaftar` char(10) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskel` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `jumlah_saudara` int(2) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `pndkk_ayah` varchar(30) NOT NULL,
  `pkrjn_ayah` varchar(30) NOT NULL,
  `pnghsln_ayah` double(10,2) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pndkk_ibu` varchar(30) NOT NULL,
  `pkrjn_ibu` varchar(30) NOT NULL,
  `pnghsln_ibu` double(10,2) NOT NULL,
  `no_hportu` varchar(15) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `pkrjn_wali` varchar(20) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_pendaftar`, `nisn`, `nama`, `jeniskel`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `anak_ke`, `jumlah_saudara`, `no_hp`, `nama_ayah`, `pndkk_ayah`, `pkrjn_ayah`, `pnghsln_ayah`, `nama_ibu`, `pndkk_ibu`, `pkrjn_ibu`, `pnghsln_ibu`, `no_hportu`, `nama_wali`, `pkrjn_wali`, `alamat_wali`) VALUES
('PSB0000002', '55555', 'ahmad', 'Laki-Laki', 'Bandung', '1997-07-16', 'Islam', 'Bandung', 3, 3, '0823123123', 'Dea Afrizal', 'D4', 'Wirausaha', 99999999.99, 'Afrizal', 'D3', 'TNI/Polri', 823123.00, '082323', '', '---', ''),
('PSB0000004', '323123231', 'Yopi Purnama', 'Laki-Laki', 'Bandung', '1997-01-06', 'Islam', 'Jl. Kopo', 2, 3, '08122220202', 'Cahyo', 'S1', 'PNS', 5000000.00, 'Wahyuni', 'S1', 'Ibu Rumah Tangga', 0.00, '082123213', '', '---', '');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE IF NOT EXISTS `calon` (
  `id_pendaftar` char(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `izasah` varchar(10) DEFAULT NULL,
  `skhun` varchar(10) DEFAULT NULL,
  `akte` varchar(10) DEFAULT NULL,
  `kartu_keluarga` varchar(10) NOT NULL,
  `biaya` double(10,2) DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_pendaftar`, `username`, `izasah`, `skhun`, `akte`, `kartu_keluarga`, `biaya`, `status`) VALUES
('PSB0000001', 'gegy', 'Belum Ada', 'Belum Ada', 'Belum Ada', 'Belum Ada', NULL, 'Belum Verifikasi'),
('PSB0000002', 'ahmad', 'Ada', 'Ada', 'Ada', 'Ada', 75000.00, 'Diterima'),
('PSB0000003', 'cahyo', 'Belum Ada', 'Belum Ada', 'Belum Ada', 'Belum Ada', NULL, 'Belum Verifikasi'),
('PSB0000004', 'yopi', 'Ada', 'Ada', 'Ada', 'Ada', 75000.00, 'Diterima');

--
-- Triggers `calon`
--
DELIMITER //
CREATE TRIGGER `id_pendaftar` BEFORE INSERT ON `calon`
 FOR EACH ROW BEGIN
DECLARE s VARCHAR(10);
DECLARE i INTEGER;
 
SET i = (SELECT SUBSTRING(id_pendaftar,4,7) AS nomor
FROM calon ORDER BY nomor DESC LIMIT 1);
 
SET s = (SELECT id_pendaftar(i));
 
IF(NEW.id_pendaftar IS NULL OR NEW.id_pendaftar= '')
THEN SET NEW.id_pendaftar =s;
END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_pendaftar` char(10) NOT NULL,
  `indo` int(3) NOT NULL,
  `mtk` int(3) NOT NULL,
  `inggris` int(3) NOT NULL,
  `ipa` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_pendaftar`, `indo`, `mtk`, `inggris`, `ipa`) VALUES
('PSB0000002', 95, 85, 100, 40),
('PSB0000004', 100, 80, 95, 80);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah_asal`
--

CREATE TABLE IF NOT EXISTS `sekolah_asal` (
  `id_pendaftar` char(10) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `status_sekolah` varchar(20) NOT NULL,
  `alamat_sekolah` varchar(30) NOT NULL,
  `tahun_lulus` varchar(5) NOT NULL,
  `no_izasah` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah_asal`
--

INSERT INTO `sekolah_asal` (`id_pendaftar`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `tahun_lulus`, `no_izasah`) VALUES
('PSB0000002', 'SMP 1 Pangandaran', 'Negeri', 'Pangandaran', '2015', '123123123'),
('PSB0000004', 'SMP 1 Bandung', 'Negeri', 'Bandung', '2012', '23123123123');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE IF NOT EXISTS `ujian` (
  `id_pendaftar` char(10) NOT NULL,
  `indo_ujian` int(3) NOT NULL,
  `mtk_ujian` int(3) NOT NULL,
  `ipa_ujian` int(3) NOT NULL,
  `inggris_ujian` int(3) NOT NULL,
  `rata` decimal(6,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id_pendaftar`, `indo_ujian`, `mtk_ujian`, `ipa_ujian`, `inggris_ujian`, `rata`) VALUES
('PSB0000002', 90, 55, 75, 80, '75.00'),
('PSB0000004', 75, 85, 85, 90, '83.75');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `tgl_daftar` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `hak_akses`, `tgl_daftar`) VALUES
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', ''),
('gegy', 'gegy@gmail.com', '807f57bace890fe7d5775ae0b63c7915', 'Siswa', '10/08/17 11:37pm'),
('ahmad', 'ahmad@gmail.com', '202cb962ac59075b964b07152d234b70', 'Siswa', '10/09/17 12:58pm'),
('cahyo', 'cahyo@gmail.com', '202cb962ac59075b964b07152d234b70', 'Siswa', '10/09/17 12:59pm'),
('yopi', 'yopi@gmail.com', '202cb962ac59075b964b07152d234b70', 'Siswa', '10/09/17 01:38pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
 ADD PRIMARY KEY (`nisn`), ADD UNIQUE KEY `id_pendaftar_2` (`id_pendaftar`), ADD UNIQUE KEY `nisn` (`nisn`), ADD KEY `id_pendaftar` (`id_pendaftar`), ADD KEY `id_pendaftar_3` (`id_pendaftar`), ADD KEY `id_pendaftar_4` (`id_pendaftar`), ADD KEY `id_pendaftar_5` (`id_pendaftar`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
 ADD PRIMARY KEY (`id_pendaftar`), ADD KEY `username` (`username`), ADD KEY `username_2` (`username`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD KEY `id_pendaftar` (`id_pendaftar`), ADD KEY `id_pendaftar_2` (`id_pendaftar`);

--
-- Indexes for table `sekolah_asal`
--
ALTER TABLE `sekolah_asal`
 ADD KEY `id_pendaftar` (`id_pendaftar`), ADD KEY `id_pendaftar_2` (`id_pendaftar`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
 ADD KEY `id_pendaftar` (`id_pendaftar`), ADD KEY `id_pendaftar_2` (`id_pendaftar`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
