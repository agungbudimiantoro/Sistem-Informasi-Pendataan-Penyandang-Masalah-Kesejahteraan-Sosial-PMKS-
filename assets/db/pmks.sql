-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 04:42 PM
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
  `faktor` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_pmks`
--

INSERT INTO `dt_pmks` (`id_dt_pmks`, `id_user`, `id_jns_pmks`, `id_subjek`, `id_subjek_kedua`, `faktor`, `tgl`) VALUES
(4, 7, 5, 5, 5, 'kurang kesadaran', '2022-06-02'),
(5, 7, 5, 6, 6, 'kurang kesadaran', '2022-06-02'),
(6, 7, 3, 7, 7, 'Ekonomi', '2022-06-02'),
(7, 7, 3, 9, 9, 'kurang kesadaran', '2022-06-02'),
(8, 7, 6, 10, 10, 'keterbatasan lapangan Kerja', '2022-06-02'),
(9, 7, 6, 11, 11, 'tidak punya keluarga ', '2022-06-02'),
(10, 7, 6, 12, 12, 'kejiwaan', '2022-06-02'),
(11, 7, 2, 13, 13, 'Ekploitasi', '2022-06-02'),
(12, 7, 2, 14, 14, 'kurang pendidikan', '2022-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `jns_pmks`
--

CREATE TABLE IF NOT EXISTS `jns_pmks` (
`id_jns_pmks` int(11) NOT NULL,
  `jns_pmks` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jns_pmks`
--

INSERT INTO `jns_pmks` (`id_jns_pmks`, `jns_pmks`) VALUES
(2, 'anak jalanan'),
(3, 'penyandang disabilitas non terlantar'),
(5, 'Anak yang memerlukan perllingdungan fungsi sosial'),
(6, 'lanjut usia terlantar');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`id_subjek`, `id_user`, `nm_lkp`, `nm_pgl`, `jk`, `tmpt_lahir`, `tgl_lahir`, `umur`, `sts_tmp_tgl`, `akte`, `almt`, `kecamatan`, `cr_fisik`, `wrn_rmbt`, `btk_rmbt`, `kmp_bcr`, `pmpln`, `aks_tbh`, `bks_lk`, `cct_tbh`, `nm_ayah`, `nm_pgl_ayah`, `nm_pgl_ibu`, `nm_ibu`, `sts_ayah`, `sts_ibu`, `pkj_ayah`, `pkj_ibu`, `trhir_ktm_klg`, `sts_sklh`, `als_pts_sklh`, `niat_ljt_sklh`) VALUES
(5, 7, 'Bintang Rizki Nugraha', 'Bintang', 'laki-laki', 'Lubuklinggau', '2015-10-19', 6, 'orang tua', 'ya', 'jl.kemayroran', 'lubuklinggau utara 1', 'tinggi, putih', 'hitam', 'lurus', 'lancar', 'terawat', 'tidak ada', 'tidak ada', 'kaki', 'indra', 'dra', 'sema', 'asma', 'sdh meninggal', 'masih hidup', 'petani', 'petani', '', 'belum pernah', 'a:1:{i:0;s:0:"";}', ''),
(6, 7, 'Akila Putri Mayang Sari', 'Kila', 'perempuan', 'Lubuklinggau', '2018-04-10', 4, 'orang tua', 'tidak', 'jl.raya', 'lubuklinggau utara 2', 'putih', 'hitam', 'keriting', 'krng lancar (terbata/bata)', 'terawat', 'tidak ada', 'tidak ada', 'tangan', 'Mayang', 'man', 'sari', 'Sari', 'masih hidup', 'masih hidup', 'petani', 'buruh', '', 'belum pernah', 'a:1:{i:0;s:0:"";}', ''),
(7, 7, 'Zahra Aprilia', 'Zahra', 'perempuan', 'Lubuklinggau', '2015-11-04', 6, 'orang tua', 'tidak', 'jl.Merak', 'lubuklinggau selatan 2', 'kulit selomateng', 'coklat', 'lurus', 'krng lancar (terbata/bata)', 'terawat', 'tidak ada', 'tidak ada', 'kaki', 'Bara', 'bara', 'lia', 'Lia', 'masih hidup', 'masih hidup', 'petani', 'buruh', '', 'belum pernah', 'a:1:{i:0;s:0:"";}', ''),
(9, 7, 'Seadam', 'adam', 'laki-laki', 'Durian Remuk', '1955-04-07', 67, 'saudara/keluarga', 'tidak tau', 'jl.Raya Jukung rt.007', 'lubuklinggau selatan 1', 'badan membungkung', 'putih', '', 'pasif', 'terawat', 'tidak ada', 'tidak ada', 'tidak ada', 'adam', 'madam', 'ida', 'ida', 'sdh meninggal', 'sdh meninggal', '', '', '', '', 'a:1:{i:0;s:0:"";}', ''),
(10, 7, 'zabir romli', 'zabir', 'laki-laki', 'Lubuklinggau', '1945-04-11', 77, 'tdk tetap', 'tidak', 'kel.nikan jaya rt.6', 'lubuklinggau timur 2', 'kulit kecoklatan', 'putih', 'lurus', 'pasif', 'tidak terawat', 'tidak ada', 'tidak ada', 'tidak ada', 'romli', 'romli', 'mus', 'musna', 'sdh meninggal', 'sdh meninggal', '', '', '', '', 'a:1:{i:0;s:0:"";}', ''),
(11, 7, 'Lastari', 'las', 'perempuan', 'Lubuklinggau', '1932-05-25', 94, 'tdk tetap', 'tidak', 'kel. siderejo rt10', 'lubuklinggau barat 2', '', 'putih', '', 'pasif', 'tidak terawat', 'tidak ada', 'tidak ada', 'tidak ada', 'tatar', '', '', 'tari', 'sdh meninggal', 'sdh meninggal', '', '', '', '', 'a:1:{i:0;s:0:"";}', ''),
(12, 7, 'saparudin', 'udin', 'laki-laki', 'Lubuklinggau', '1957-04-11', 75, 'tdk tetap', 'tidak tau', 'kel.muara enim rt.7', 'lubuklinggau barat 1', 'warna badan hitam', 'hitam', 'keriting', 'pasif', 'tidak terawat', 'tidak ada', 'tidak ada', 'tidak ada', 'sapar', '', '', 'tina', 'sdh meninggal', 'sdh meninggal', '', '', '', 'tidak', 'a:1:{i:0;s:0:"";}', ''),
(13, 7, 'Haji Muslim', 'Aji', 'laki-laki', 'Lubuklinggau', '2012-02-08', 10, 'orang tua', 'tidak tau', 'jl.kemayroran', 'lubuklinggau utara 2', 'tinggi, kurus', 'hitam', 'keriting', 'lancar', 'terawat', 'tidak ada', 'tidak ada', 'tidak ada', 'Pendi', 'pendi', 'tuti', 'Astuti', 'sdh meninggal', 'masih hidup', '', 'petani', '', 'ya', 'a:1:{i:0;s:0:"";}', ''),
(14, 7, 'Muksin Alatas', 'muksin', 'laki-laki', 'padang', '2006-04-15', 16, 'orang tua', 'tidak tau', 'jl.raya', 'lubuklinggau utara 1', 'tinggi, warna kulit putih', 'coklat', 'lurus', 'lancar', 'terawat', 'tangan', 'tidak ada', 'tidak ada', 'Ali Baba', 'Ali', 'ida', 'Subaida', 'masih hidup', 'masih hidup', 'petani', 'buruh', '', 'tidak', 'a:3:{i:0;s:13:"tdk ada biaya";i:1;s:12:"disuruh ortu";i:2;s:0:"";}', 'tidak');

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
  `foto` varchar(100) NOT NULL,
  `sts_penertipan` int(11) NOT NULL,
  `sts_tndk` varchar(30) NOT NULL,
  `sts_jns_pmks` varchar(30) NOT NULL,
  `tgl_pendataan` date NOT NULL,
  `jam` time NOT NULL,
  `nm_ptgs` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek_kedua`
--

INSERT INTO `subjek_kedua` (`id_subjek_kedua`, `id_subjek`, `rwt_pnykt`, `pengobatan`, `sts_tdk`, `btk_tdk`, `proses_tdk`, `kpn_mjln`, `btk_kgt`, `als_mlk_kgt`, `niat_brht`, `cr_brht`, `dpt_kkrs_fm`, `btk_kkrs_fm`, `org_mlk_kkrs`, `dpt_kkrs_es`, `btk_kkrs_es`, `org_mlk_kkrs_es`, `plprn_es`, `btk_proses`, `nm_kms_npz`, `dpt_npz`, `als_mks_npz`, `foto`, `sts_penertipan`, `sts_tndk`, `sts_jns_pmks`, `tgl_pendataan`, `jam`, `nm_ptgs`) VALUES
(5, 5, 'pembengkakan organ tubuh ', 'a:3:{i:0;s:16:"obat tradisional";i:1;s:11:"obat ringan";i:2;s:0:"";}', 'belum pern', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', '', '', '', '', 'ya', 'a:2:{i:0;s:7:"dipukul";i:1;s:0:"";}', 'a:2:{i:0;s:4:"ortu";i:1;s:0:"";}', '', 'a:0:{}', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'anak-terlantar-394x218_77328267.jpg', 1, 'sudah ditindak lanjuti', 'sudah ditetapkan', '2022-06-02', '16:52:00', 'Hepi Herawati'),
(6, 6, 'Kurang Gizi', 'a:2:{i:0;s:11:"obat ringan";i:1;s:0:"";}', 'belum pern', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', '', '', '', '', 'ya', 'a:2:{i:0;s:7:"dipukul";i:1;s:0:"";}', 'a:2:{i:0;s:8:"keluarga";i:1;s:0:"";}', '', 'a:0:{}', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'IMG_20220523_150649_2128552562.jpg', 1, 'sudah ditindak lanjuti', 'sudah ditetapkan', '2022-06-02', '16:54:00', 'Hepi Herawati'),
(7, 7, 'sakit kaki', 'a:2:{i:0;s:16:"obat tradisional";i:1;s:0:"";}', 'belum pern', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', '', '', '', '', 'tidak', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'tidak tau', 'a:0:{}', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'IDN-2018-Noorani-0123_35646168.jpg', 1, 'sudah ditindak lanjuti', 'sudah ditetapkan', '2022-06-02', '16:54:00', 'Hepi Herawati'),
(9, 9, 'demam', 'a:2:{i:0;s:11:"obat ringan";i:1;s:0:"";}', 'tidak', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', '', '', '', '', 'ya', 'a:2:{i:0;s:6:"dimaki";i:1;s:0:"";}', 'a:2:{i:0;s:8:"keluarga";i:1;s:0:"";}', '', 'a:0:{}', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'WhatsApp-Image-2020-11-15-at-21.40.21-e1605516288587_1877400718.jpeg', 1, 'sudah ditindak lanjuti', 'sudah ditetapkan', '2022-06-02', '16:58:00', 'Hepi Herawati'),
(10, 10, 'batuk', 'a:2:{i:0;s:14:"dibiarkan saja";i:1;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '6 bulan lalu', 'mengemis', 'mencari uang untuk makan', 'tidak tau', '', 'tidak', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'a:0:{}', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', '220px-Jakarta_slumlife64_776462505.JPG', 2, 'sudah ditindak lanjuti', 'sudah ditetapkan', '2022-06-02', '17:05:00', 'Hepi Herawati'),
(11, 11, 'sakit pinggang', 'a:2:{i:0;s:14:"dibiarkan saja";i:1;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '1 tahun lalu', 'mengemis', 'mencari uang untuk makan', 'tidak tau', '', 'tidak', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'tidak tau', 'a:0:{}', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'IMG_20220523_150848_1593833056.jpg', 2, 'sudah ditindak lanjuti', 'sudah ditetapkan', '2022-06-02', '17:19:00', 'Hepi Herawati'),
(12, 12, '', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'menggelandang', '', '', '', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'a:0:{}', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'IMG_20220523_150910_907308084.jpg', 1, 'sudah ditindak lanjuti', 'sudah ditetapkan', '2022-06-02', '17:26:00', 'Hepi Herawati'),
(13, 13, '', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '3 bulan lalu', 'mengamen', 'mencari uang', 'ya', '', 'ya', 'a:2:{i:0;s:7:"dipukul";i:1;s:0:"";}', 'a:2:{i:0;s:4:"ortu";i:1;s:0:"";}', '', 'a:0:{}', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'IMG_20220523_150624_1695584544.jpg', 1, 'peringatan', 'sudah ditetapkan', '2022-06-02', '17:34:00', 'Hepi Herawati'),
(14, 14, '', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '3 tahun lalu', 'mengamen', 'mencari uang', 'ya', '', 'tidak', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'a:0:{}', 'a:1:{i:0;s:0:"";}', '', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', '', 'IMG_20220523_150613_2106753457.jpg', 2, 'sudah ditindak lanjuti', 'sudah ditetapkan', '2022-06-02', '17:41:00', 'Hepi Herawati');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `id_user`, `id_jns_pmks`, `id_subjek`, `id_subjek_kedua`, `id_dt_pmks`, `nik`, `pnpt_tgl`, `ket`, `tindakan`, `tgl`) VALUES
(1, 7, 5, 5, 5, 4, '1673081009150000', 'orang tua', 'Peksos melakukan perdampingan terhadap anak', 'koordinasi dengan OPD terkait', '2022-06-02'),
(2, 7, 5, 6, 6, 5, '167302441018003', 'orang tua', 'anak mendapatkan perawatan khusus terkait gizi', 'pemenuhan Gizi', '2022-06-02'),
(3, 7, 3, 7, 7, 6, '16730261041500002', 'orang tua', 'Lumpuh', 'Diberikan Kursi Roda', '2022-06-02'),
(4, 7, 3, 9, 9, 7, '167303040755000001', 'keluarga', 'lumpuh', 'Diberikan Kursi Roda', '2022-06-02'),
(5, 7, 6, 10, 10, 8, '16730112708460001', 'LKS', 'pengerahan', 'diberikan bantuan', '2022-06-02'),
(6, 7, 6, 11, 11, 9, '16730265055320001', 'LKS', 'Pembinaan', 'diberikan perawatan', '2022-06-02'),
(7, 7, 6, 12, 12, 10, '1673020411570001', 'Rumah Sakit Jiwa', 'Peksos melakukan perdampingan terhadap lansia', 'koordinasi dengan OPD terkait', '2022-06-02'),
(8, 7, 2, 14, 14, 12, '1673020704060001', 'Rumah Singgah', 'pengarahan', 'diberikan bantuan', '2022-06-02');

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
  `jbtn` varchar(100) NOT NULL,
  `sts` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `tgl_lahir`, `jk`, `tlpon`, `almt`, `jbtn`, `sts`, `foto`, `username`, `pass`, `level`) VALUES
(6, 'Kahlan, S.Sos., M.Si', '2022-05-01', 'laki-laki', '085378654321', 'jl.yossudarso lubuklinggau barat 1', 'kepala dinas', 'aktif', 'IMG_20220523_144842_455497478.jpg', 'pimpinan', '123', 'pimpinan'),
(7, 'Hepi Herawati', '2022-05-17', 'perempuan', '097865432345', 'jl.patimurah mesat jaya', 'kasi subbid resos anak dan lanjut usia', 'aktif', 'IMG_20220523_144948_768746066.jpg', 'admin', '123', 'admin');

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
MODIFY `id_dt_pmks` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jns_pmks`
--
ALTER TABLE `jns_pmks`
MODIFY `id_jns_pmks` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
MODIFY `id_subjek` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `subjek_kedua`
--
ALTER TABLE `subjek_kedua`
MODIFY `id_subjek_kedua` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
MODIFY `id_tindakan` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
