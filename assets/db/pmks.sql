-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 09:44 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_pmks`
--

INSERT INTO `dt_pmks` (`id_dt_pmks`, `id_user`, `id_jns_pmks`, `id_subjek`, `id_subjek_kedua`, `faktor`, `tgl`) VALUES
(1, 6, 3, 5, 5, 'faktor', '2022-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `jns_pmks`
--

CREATE TABLE IF NOT EXISTS `jns_pmks` (
`id_jns_pmks` int(11) NOT NULL,
  `jns_pmks` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jns_pmks`
--

INSERT INTO `jns_pmks` (`id_jns_pmks`, `jns_pmks`) VALUES
(2, 'das'),
(3, 'jenis pmks');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`id_subjek`, `id_user`, `nm_lkp`, `nm_pgl`, `jk`, `tmpt_lahir`, `tgl_lahir`, `umur`, `sts_tmp_tgl`, `akte`, `almt`, `kecamatan`, `cr_fisik`, `wrn_rmbt`, `btk_rmbt`, `kmp_bcr`, `pmpln`, `aks_tbh`, `bks_lk`, `cct_tbh`, `nm_ayah`, `nm_pgl_ayah`, `nm_pgl_ibu`, `nm_ibu`, `sts_ayah`, `sts_ibu`, `pkj_ayah`, `pkj_ibu`, `trhir_ktm_klg`, `sts_sklh`, `als_pts_sklh`, `niat_ljt_sklh`) VALUES
(4, 6, 'agung budi miantoro', 'agung', 'perempuan', 'benkulu', '2022-05-11', 22, 'saudara/keluarga', 'ya', 'kengana2', 'lubuklinggau barat 1', 'hitam', 'hitam', 'Bentuk Rambut', 'lancar', 'terawat', 'badan', 'das', 'sda', 'purwanto', 'purwanto', 'rumiati', 'rumiati', 'masih hidup', 'sdh meninggal', 'tentara', 'irt', 'lainya, sbutkan kpan:', 'ya', 'a:3:{i:0;s:12:"disuruh ortu";i:1;s:0:"";i:2;s:17:"lainnyalainnyaasd";}', 'tidak'),
(5, 6, 'agung budi miantoro', 'agung', 'perempuan', 'benkulu', '2022-05-11', 22, 'saudara/keluarga', 'ya', 'kengana2', 'lubuklinggau barat 1', 'hitam', 'hitam', 'Bentuk Rambut', 'lancar', 'terawat', 'badan', 'das', 'sda', 'purwanto', 'purwanto', 'rumiati', 'rumiati', 'masih hidup', 'sdh meninggal', 'tentara', 'irt', 'lainya, sbutkan kpan:', 'ya', 'a:2:{i:0;s:12:"disuruh ortu";i:1;s:31:"lainnyalainnyalainnyalainnyaasd";}', 'tidak'),
(6, 6, 'asd', 'sad', 'perempuan', 'dsa', '2022-05-04', 23, 'saudara/keluarga', 'tidak', 'ads', 'lubuklinggau barat 2', 'sad', 'sda', 'asd', 'lancar', 'terawat', 'sda', 'tidak ada', 'sad', 'asd', 'das', 'asd', 'asd', 'sdh meninggal', 'masih hidup', 'asd', 'asd', 'a', '', 'a:3:{i:0;s:10:"sdh bkerja";i:1;s:7:"lainnya";i:2;s:8:"lainnyab";}', 'ya'),
(7, 6, 'asd', 'asd', 'laki-laki', 'asd', '2022-05-03', 13, 'saudara/keluarga', 'ya', 'asda', 'lubuklinggau barat 2', 'asd', 'asd', 'asd', 'lancar', 'tidak terawat', 'asd', 'asd', 'asd', 'adsasd', 'das', 'asd', 'das', '', 'masih hidup', 'asd', 'sda', 'a', 'belum pernah', 'a:3:{i:0;s:12:"disuruh ortu";i:1;s:7:"lainnya";i:2;s:1:"b";}', 'ya'),
(8, 6, 'asd', 'asd', 'laki-laki', 'asd', '2022-05-03', 13, 'saudara/keluarga', 'ya', 'asda', 'lubuklinggau barat 2', 'asd', 'asd', 'asd', 'lancar', 'tidak terawat', 'asd', 'asd', 'asd', 'adsasd', 'das', 'asd', 'das', '', 'masih hidup', 'asd', 'sda', 'a', 'belum pernah', 'a:3:{i:0;s:12:"disuruh ortu";i:1;s:0:"";i:2;s:1:"b";}', 'ya'),
(9, 6, 'Nm Lkp	', 'Nm Pgl	', 'laki-laki', 'Tmpt Lhr	', '2022-05-09', 12, 'tdk tetap', 'ya', 'Almt', 'lubuklinggau barat 1', 'Ciri-Ciri Fisik	', 'Warna Ramb', 'Bentuk Rambut	', 'krng lancar (terbata/bata)', 'tidak terawat', 'Aksesoris Ditubuh:', 'Bekas Luka Ditubuh:', 'Cacat Tubuh:', 'Nm Ayah	', 'Nm Pglan Ayah	', 'Nm Pglan Ibu	', 'Nm Ibu	', 'sdh meninggal', 'masih hidup', 'Pekerjaan Ayah	', 'Pekerjaan Ibu	', 'Bila Tidak Tinggal Bersama Orang Tua, Kapan Terakhir Kamu Pulang Atau Bertemu Dengan Orang Tua Mu:', 'belum pernah', 'a:3:{i:0;s:20:"jaraknya jauh pernah";i:1;s:0:"";i:2;s:101:"Bila Saudara/I Tidak Pernah Sekolah Atau Putus Sekolah, Apa Alasanya? (Jawaban Bisa Lebih Dari Satu):";}', 'tidak tau'),
(10, 6, 'agung budi miantoro', 'asd', 'laki-laki', 'asd', '2022-05-04', 23, 'kost', 'ya', 'ads', 'lubuklinggau barat 2', 'ads', 'das', 'ads', 'lancar', 'tidak terawat', 'asd', 'ads', 'asd', 'asd', 'dasasd', 'sad', 'asd', 'sdh meninggal', 'masih hidup', 'dsa', 'sad', '', '', 'a:1:{i:0;s:0:"";}', ''),
(11, 6, 'ads', 'agung', 'perempuan', 'Tmpt Lhr', '2022-05-11', 123, 'kost', 'ya', 'asd', 'lubuklinggau barat 2', 'asd', 'asd', 'asd', 'krng lancar (terbata/bata)', 'tidak terawat', 'ada di', 'asd', 'tidak ada', 'asd', 'das', 'das', 'sad', '', 'masih hidup', 'sda', 'sda', '', '', 'a:3:{i:0;s:10:"sdh bkerja";i:1;s:11:"dikeluarkan";i:2;s:3:"sda";}', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `subjek_kedua`
--

CREATE TABLE IF NOT EXISTS `subjek_kedua` (
`id_subjek_kedua` int(2) NOT NULL,
  `id_subjek` int(2) NOT NULL,
  `rwt_pnykt` text NOT NULL,
  `pengobatan` text NOT NULL,
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
  `btk_kkrs_es` text NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek_kedua`
--

INSERT INTO `subjek_kedua` (`id_subjek_kedua`, `id_subjek`, `rwt_pnykt`, `pengobatan`, `sts_tdk`, `btk_tdk`, `proses_tdk`, `kpn_mjln`, `btk_kgt`, `als_mlk_kgt`, `niat_brht`, `cr_brht`, `dpt_kkrs_fm`, `btk_kkrs_fm`, `org_mlk_kkrs`, `dpt_kkrs_es`, `btk_kkrs_es`, `org_mlk_kkrs_es`, `plprn_es`, `btk_proses`, `nm_kms_npz`, `dpt_npz`, `als_mks_npz`, `foto`, `sts_penertipan`, `sts_tndk`, `sts_jns_pmks`, `tgl_pendataan`, `jam`, `nm_ptgs`) VALUES
(4, 4, 'ads', 'a:3:{i:0;s:5:"pijat";i:1;s:9:"ke dokter";i:2;s:10:"lainnyadas";}', 'ya', 'a:3:{i:0;s:11:"perkelahian";i:1;s:9:"pemerasan";i:2;s:10:"lainnyaads";}', 'a:3:{i:0;s:8:"disidang";i:1;s:9:"dipenjara";i:2;s:0:"";}', 'asd', 'asd', 'asd', 'tidak', 'das', 'ya', 'a:3:{i:0;s:6:"dimaki";i:1;s:10:"diasingkan";i:2;s:10:"lainnyaasd";}', 'a:3:{i:0;s:5:"teman";i:1;s:6:"polisi";i:2;s:10:"lainnyaasd";}', 'tidak tau', 'a:2:{i:0;s:10:"pencabulan";i:1;s:6:"sodomi";}', 'a:2:{i:0;s:5:"pacar";i:1;s:10:"lainnyaasd";}', 'tidak tau', 'a:3:{i:0;s:9:"dipenjara";i:1;s:0:"";i:2;s:3:"ads";}', 'a:4:{i:0;s:11:"pil ekstasi";i:1;s:6:"ngelem";i:2;s:0:"";i:3;s:3:"asd";}', 'a:3:{i:0;s:13:"dikasih teman";i:1;s:0:"";i:2;s:3:"asd";}', 'asd', 'logo_11383.jpg', 0, 'tindak lanjuti', 'belum ditetapkan', '2022-05-26', '02:09:00', 'sasuke'),
(5, 5, 'ads', 'a:4:{i:0;s:5:"pijat";i:1;s:9:"ke dokter";i:2;s:7:"lainnya";i:3;s:17:"lainnyalainnyadas";}', 'ya', 'a:4:{i:0;s:11:"perkelahian";i:1;s:9:"pemerasan";i:2;s:7:"lainnya";i:3;s:17:"lainnyalainnyaads";}', 'a:3:{i:0;s:8:"disidang";i:1;s:9:"dipenjara";i:2;s:0:"";}', 'asd', 'asd', 'asd', 'tidak', 'das', 'tidak', 'a:4:{i:0;s:6:"dimaki";i:1;s:10:"diasingkan";i:2;s:7:"lainnya";i:3;s:3:"asd";}', 'a:4:{i:0;s:5:"teman";i:1;s:6:"polisi";i:2;s:7:"lainnya";i:3;s:17:"lainnyalainnyaasd";}', 'tidak tau', 'a:2:{i:0;s:10:"pencabulan";i:1;s:6:"sodomi";}', 'a:3:{i:0;s:5:"pacar";i:1;s:7:"lainnya";i:2;s:17:"lainnyalainnyaasd";}', 'tidak tau', 'a:3:{i:0;s:9:"dipenjara";i:1;s:0:"";i:2;s:3:"ads";}', 'a:4:{i:0;s:11:"pil ekstasi";i:1;s:6:"ngelem";i:2;s:0:"";i:3;s:3:"asd";}', 'a:3:{i:0;s:13:"dikasih teman";i:1;s:0:"";i:2;s:3:"asd";}', 'asd', 'logo_6245.jpg', 1, 'tindak lanjuti', 'belum ditetapkan', '2022-05-26', '02:09:00', 'sasuke'),
(6, 6, 'das', 'a:3:{i:0;s:9:"ke dokter";i:1;s:7:"lainnya";i:2;s:8:"lainnyac";}', '', 'a:2:{i:0;s:12:"penganiayaan";i:1;s:0:"";}', 'a:2:{i:0;s:7:"lainnya";i:1;s:8:"lainnyad";}', 'sda', 'asd', 'asd', 'ya', 'sda', 'tidak', 'a:2:{i:0;s:6:"dimaki";i:1;s:0:"";}', 'a:3:{i:0;s:8:"keluarga";i:1;s:5:"teman";i:2;s:0:"";}', 'tidak pernah', 'a:0:{}', 'a:3:{i:0;s:20:"anggota kluarga lain";i:1;s:8:"tetangga";i:2;s:0:"";}', 'tidak pernah', 'a:2:{i:0;s:7:"ditahan";i:1;s:0:"";}', 'a:3:{i:0;s:13:"minuman keras";i:1;s:11:"pil ekstasi";i:2;s:0:"";}', 'a:2:{i:0;s:13:"dikasih teman";i:1;s:0:"";}', 'asd', 'puskesmas_2332.jpg', 0, 'peringatan', '', '2022-05-20', '02:48:00', 'sasuke'),
(7, 7, 'asd', 'a:1:{i:0;s:8:"lainnyac";}', 'belum pern', 'a:2:{i:0;s:11:"pemerkosaan";i:1;s:8:"lainnyad";}', 'a:2:{i:0;s:7:"lainnya";i:1;s:10:"lainnyaasd";}', 'asdsa', 'mengemis', 'asd', 'tidak tau', 'asd', 'tidak', 'a:3:{i:0;s:6:"dimaki";i:1;s:10:"diasingkan";i:2;s:8:"lainnyae";}', 'a:3:{i:0;s:5:"teman";i:1;s:6:"polisi";i:2;s:8:"lainnyaf";}', 'tidak tau', 'a:1:{i:0;s:9:"pelecehan";}', 'a:3:{i:0;s:8:"tetangga";i:1;s:5:"teman";i:2;s:8:"lainnyag";}', 'tidak tau', 'a:2:{i:0;s:0:"";i:1;s:1:"h";}', 'a:2:{i:0;s:0:"";i:1;s:1:"i";}', 'a:2:{i:0;s:0:"";i:1;s:3:"sad";}', 'sad', 'puskesmas_16583.jpg', 0, 'peringatan', '', '2022-06-02', '00:10:00', 'sasuke'),
(8, 8, 'asd', 'a:2:{i:0;s:0:"";i:1;s:1:"c";}', 'belum pern', 'a:3:{i:0;s:11:"pemerkosaan";i:1;s:0:"";i:2;s:1:"d";}', 'a:2:{i:0;s:0:"";i:1;s:1:"e";}', 'asdsa', 'mengemis', 'asd', 'tidak tau', 'asd', 'tidak', 'a:4:{i:0;s:6:"dimaki";i:1;s:10:"diasingkan";i:2;s:0:"";i:3;s:1:"e";}', 'a:4:{i:0;s:5:"teman";i:1;s:6:"polisi";i:2;s:0:"";i:3;s:1:"f";}', 'tidak tau', 'a:1:{i:0;s:9:"pelecehan";}', 'a:4:{i:0;s:8:"tetangga";i:1;s:5:"teman";i:2;s:0:"";i:3;s:1:"g";}', 'tidak tau', 'a:2:{i:0;s:0:"";i:1;s:1:"j";}', 'a:2:{i:0;s:0:"";i:1;s:1:"k";}', 'a:2:{i:0;s:0:"";i:1;s:1:"f";}', 'sad', 'puskesmas_6465.jpg', 0, 'peringatan', '', '2022-06-02', '00:10:00', 'sasuke'),
(9, 9, 'Selama Tiga Bulan Terakhir, Jenis Penyakit Apa Saja Yang Pernah Diderita Saudara/I? (Bila Ada Sebutkan Jenis Penyakitnya):', 'a:3:{i:0;s:5:"pijat";i:1;s:0:"";i:2;s:42:"Pengobatan Saudara/I Yang Biasa Dilakukan:";}', 'belum pern', 'a:4:{i:0;s:12:"penganiayaan";i:1;s:10:"pencabulan";i:2;s:0:"";i:3;s:83:"Apakah Saudara/I Pernah Melakukan Tindakan Kekerasan Yang Dianggap Melanggar Hukum:";}', 'a:3:{i:0;s:9:"dipenjara";i:1;s:0:"";i:2;s:75:"Tindakan Yang Dilakukan Terhadap Saudara/I Yg Pernah Diproses Secara Hukum:";}', 'Sejak Kapan Saudara/I Melakuka', 'Bentuk Kegiatan Di J', 'apakah alasan saudara/i berada atau melakukan kegiatan dijalan? : ', 'tidak tau', 'Apakah Saudara/I Mmiliki Niat Utk Berhenti Mlkn Khtn Dijalan:', 'tidak', 'a:3:{i:0;s:6:"dimaki";i:1;s:0:"";i:2;s:46:"Apakah Saudara/I Pernah Mendapatkan Kekerasan:";}', 'a:3:{i:0;s:6:"preman";i:1;s:0:"";i:2;s:107:"Siapa Saja Orang-Orang Yang Pernah Melakukan Kekerasan Terhadap Saudara/I? (Jawaban Boleh Lebih Dari Satu):";}', 'tidak tau', 'a:1:{i:0;s:9:"pelecehan";}', 'a:4:{i:0;s:8:"tetangga";i:1;s:5:"teman";i:2;s:0:"";i:3;s:70:"Siapa (Saja) Orang Atau Pihak Yang Pernah Melakukan Kekerasan Seksual:";}', 'tidak tau', 'a:3:{i:0;s:9:"dipenjara";i:1;s:0:"";i:2;s:75:"Bila Pernah, Apakah Tindakan Terhadap Pelakunya? (Jawaban Boleh Dari Satu):";}', 'a:4:{i:0;s:6:"ngelem";i:1;s:9:"sabu-sabu";i:2;s:0:"";i:3;s:70:"Apakah Saudara/I Mengkonsumsi NAPZA ? (Jawaban Boleh Lebih Dari Satu):";}', 'a:3:{i:0;s:13:"dikasih teman";i:1;s:0:"";i:2;s:42:"Biasanya, Dari Barang Tersebut Didapatkan:";}', 'Apakah Alasan Saudara/I Mengkonsumsi NAPZA:', 'puskesmas_16102.jpg', 0, 'tindak lanjuti', '', '2022-05-26', '03:34:00', 'sasuke'),
(10, 10, 'dsa', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'asd', '', 'asd', 'ya', 'asd', 'ya', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'pernah', 'a:0:{}', 'a:1:{i:0;s:0:"";}', 'pernah', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'asd', 'puskesmas_26356.jpg', 0, 'peringatan', '', '2022-05-12', '04:38:00', 'sasuke'),
(11, 11, 'sad', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:2:{i:0;s:0:"";i:1;s:3:"sda";}', 'sad', '', 'asd', 'tidak tau', 'asd', 'ya', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'pernah', 'a:0:{}', 'a:1:{i:0;s:0:"";}', 'pernah', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:3:"ads";}', 'asd', 'puskesmas_6437.jpg', 0, 'peringatan', 'belum ditetapkan', '2022-05-19', '02:38:00', 'sasuke');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `id_user`, `id_jns_pmks`, `id_subjek`, `id_subjek_kedua`, `id_dt_pmks`, `nik`, `pnpt_tgl`, `ket`, `tindakan`, `tgl`) VALUES
(1, 6, 3, 4, 4, 1, '123123', 'asdsa', 'asdsda', 'adsasd', '2022-05-11'),
(2, 6, 3, 5, 5, 0, '213', 'tes', 'tes', 'tes', '2022-05-17'),
(3, 6, 3, 5, 5, 1, '213', 'tes', 'tes', 'tes', '2022-05-17');

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
MODIFY `id_dt_pmks` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jns_pmks`
--
ALTER TABLE `jns_pmks`
MODIFY `id_jns_pmks` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
MODIFY `id_subjek` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `subjek_kedua`
--
ALTER TABLE `subjek_kedua`
MODIFY `id_subjek_kedua` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
MODIFY `id_tindakan` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
