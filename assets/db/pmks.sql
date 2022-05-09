-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 07:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pmks`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_pmks`
--

CREATE TABLE IF NOT EXISTS `dt_pmks` (
`id_dt_pmks` int(2) NOT NULL,
  `id_user` int(2) NOT NULL,
  `id_jns_pmks` int(2) NOT NULL,
  `id_subjek` int(2) NOT NULL,
  `id_subjek_kedua` int(2) NOT NULL,
  `faktor` varchar(25) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jns_pmks`
--

CREATE TABLE IF NOT EXISTS `jns_pmks` (
`id_jns_pmks` int(11) NOT NULL,
  `jns_pmks` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jns_pmks`
--

INSERT INTO `jns_pmks` (`id_jns_pmks`, `jns_pmks`) VALUES
(2, 'das');

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE IF NOT EXISTS `subjek` (
`id_subjek` int(2) NOT NULL,
  `id_user` int(2) NOT NULL,
  `nm_lkp` varchar(40) NOT NULL,
  `nm_pgl` varchar(30) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `sts_tmp_tgl` varchar(20) NOT NULL,
  `akte` varchar(10) NOT NULL,
  `almt` text NOT NULL,
  `kecamatan` text NOT NULL,
  `cr_fisik` text NOT NULL,
  `wrn_rmbt` varchar(10) NOT NULL,
  `btk_rmbt` varchar(15) NOT NULL,
  `kmp_bcr` varchar(30) NOT NULL,
  `pmpln` varchar(15) NOT NULL,
  `aks_tbh` text NOT NULL,
  `bks_lk` text NOT NULL,
  `cct_tbh` text NOT NULL,
  `nm_ayah` varchar(30) NOT NULL,
  `nm_pgl_ayah` varchar(30) NOT NULL,
  `nm_pgl_ibu` varchar(30) NOT NULL,
  `nm_ibu` varchar(30) NOT NULL,
  `sts_ayah` varchar(15) NOT NULL,
  `sts_ibu` varchar(15) NOT NULL,
  `pkj_ayah` varchar(30) NOT NULL,
  `pkj_ibu` varchar(30) NOT NULL,
  `trhir_ktm_klg` text NOT NULL,
  `sts_sklh` varchar(15) NOT NULL,
  `als_pts_sklh` text NOT NULL,
  `niat_ljt_sklh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjek_kedua`
--

CREATE TABLE IF NOT EXISTS `subjek_kedua` (
`id_subjek_kedua` int(2) NOT NULL,
  `Id_subjek` int(2) NOT NULL,
  `rwt_pnykt` text NOT NULL,
  `pengobatan` varchar(35) NOT NULL,
  `sts_tdk` varchar(10) NOT NULL,
  `btk_tdk` text NOT NULL,
  `proses_tdk` text NOT NULL,
  `kpn_mjln` varchar(30) NOT NULL,
  `btk_kgt` varchar(20) NOT NULL,
  `als_mlk_kgt` text NOT NULL,
  `niat_brht` varchar(10) NOT NULL,
  `cr_brht` text NOT NULL,
  `dpt_kkrs_fm` varchar(10) NOT NULL,
  `btk_kkrs_fm` text NOT NULL,
  `org_mlk_kkrs` text NOT NULL,
  `dpt_kkrs_es` varchar(15) NOT NULL,
  `btk_kkrs_es` varchar(35) NOT NULL,
  `org_mlk_kkrs_es` text NOT NULL,
  `plprn_es` varchar(15) NOT NULL,
  `btk_proses` text NOT NULL,
  `nm_kms_npz` text NOT NULL,
  `dpt_npz` text NOT NULL,
  `als_mks_npz` text NOT NULL,
  `foto` varchar(30) NOT NULL,
  `sts_penertipan` int(11) NOT NULL,
  `sts_tndk` varchar(30) NOT NULL,
  `sts_jns_pmks` varchar(30) NOT NULL,
  `tgl_pendataan` date NOT NULL,
  `jam` time NOT NULL,
  `nm_ptgs` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek_kedua`
--

INSERT INTO `subjek_kedua` (`id_subjek_kedua`, `Id_subjek`, `rwt_pnykt`, `pengobatan`, `sts_tdk`, `btk_tdk`, `proses_tdk`, `kpn_mjln`, `btk_kgt`, `als_mlk_kgt`, `niat_brht`, `cr_brht`, `dpt_kkrs_fm`, `btk_kkrs_fm`, `org_mlk_kkrs`, `dpt_kkrs_es`, `btk_kkrs_es`, `org_mlk_kkrs_es`, `plprn_es`, `btk_proses`, `nm_kms_npz`, `dpt_npz`, `als_mks_npz`, `foto`, `sts_penertipan`, `sts_tndk`, `sts_jns_pmks`, `tgl_pendataan`, `jam`, `nm_ptgs`) VALUES
(1, 1, 'asd', 'dsa', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'dsa', 'asd', 'sda', 'sda', 'sda', 'sda', 'asd', 'sda', 'dsa', 'sda', 'dsa', 'sda', 123, 'asd', 'asd', '2022-05-10', '02:13:39', '');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE IF NOT EXISTS `tindakan` (
`id_tindakan` int(2) NOT NULL,
  `id_user` int(2) NOT NULL,
  `id_jns_pmks` int(2) NOT NULL,
  `id_subjek` int(2) NOT NULL,
  `id_subjek_kedua` int(2) NOT NULL,
  `id_dt_pmks` int(2) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `pnpt_tgl` varchar(40) NOT NULL,
  `ket` text NOT NULL,
  `tindakan` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(2) NOT NULL,
  `nm_user` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tlpon` varchar(15) NOT NULL,
  `almt` text NOT NULL,
  `jbtn` varchar(30) NOT NULL,
  `sts` varchar(15) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `tgl_lahir`, `jk`, `tlpon`, `almt`, `jbtn`, `sts`, `foto`, `username`, `pass`, `level`) VALUES
(6, 'sasuke', '2022-05-01', 'laki-laki', '123123', 'asd', 'kepala dinas', 'aktif', 'logo_12897.jpg', 'sasuke', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_pmks`
--
ALTER TABLE `dt_pmks`
 ADD PRIMARY KEY (`id_dt_pmks`);

--
-- Indexes for table `jns_pmks`
--
ALTER TABLE `jns_pmks`
 ADD PRIMARY KEY (`id_jns_pmks`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
 ADD PRIMARY KEY (`id_subjek`);

--
-- Indexes for table `subjek_kedua`
--
ALTER TABLE `subjek_kedua`
 ADD PRIMARY KEY (`id_subjek_kedua`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
 ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_pmks`
--
ALTER TABLE `dt_pmks`
MODIFY `id_dt_pmks` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jns_pmks`
--
ALTER TABLE `jns_pmks`
MODIFY `id_jns_pmks` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
MODIFY `id_subjek` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjek_kedua`
--
ALTER TABLE `subjek_kedua`
MODIFY `id_subjek_kedua` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
MODIFY `id_tindakan` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
