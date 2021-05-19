-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 12:23 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsmkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_pendaftaran`
--

CREATE TABLE `form_pendaftaran` (
  `id_pendaftar` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `penghasilan` varchar(25) NOT NULL,
  `kepemilikan` varchar(25) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `anggota` varchar(3) NOT NULL,
  `kendaraan` varchar(15) NOT NULL,
  `kebutuhan` varchar(20) NOT NULL,
  `pembayaran` varchar(25) NOT NULL,
  `jarak` varchar(10) NOT NULL,
  `permohonan` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `sktm` varchar(100) NOT NULL,
  `tempat_tinggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_pendaftaran`
--

INSERT INTO `form_pendaftaran` (`id_pendaftar`, `nik`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `penghasilan`, `kepemilikan`, `kondisi`, `anggota`, `kendaraan`, `kebutuhan`, `pembayaran`, `jarak`, `permohonan`, `kk`, `sktm`, `tempat_tinggal`) VALUES
(12, '3172021307990011', 'Dhienny Aviya Miro', 'laki-laki', 'Jln enim no 140 ', '< Rp1.500.000', 'Milik Sendiri', 'Semi Permanent', '>5', 'Sepeda', 'Rp10.000 - Rp25.000', 'Rp100.000 - Rp200.000', '1 - 2KM', '', '', '', ''),
(13, '3172026904690069', 'Liza Yosefa', 'perempuan', 'Payakumbuh', '< Rp1.500.000', 'Bukan Milik Sendiri', 'Semi Permanent', '3', 'Tidak Punya', 'Rp10.000 - Rp25.000', 'Rp100.000 - Rp200.000', '1 - 2KM', '', '', '', ''),
(14, '3172021811050007', 'Dharvyn Aliyya Miro', 'laki-laki', 'Jln Gadang', 'Rp1.500.000 - Rp3.000.000', 'Kontrak', 'Semi Permanent', '5', 'Motor', 'Rp10.000 - Rp25.000', 'Rp100.000 - Rp200.000', '> 2KM', '', '', '', ''),
(16, '3172021205070022', 'Diana', 'perempuan', 'Piobang', '< Rp1.500.000', 'Kontrak', 'Permanent', '4', 'Tidak Punya', 'Rp25.001 - Rp40.000', '< Rp100.000', '1 - 2KM', '', '', '', ''),
(17, '3172021609120044', 'Diana ', 'perempuan', 'Jln Pepaya', '< Rp1.500.000', 'Kontrak', 'Non Permanent', '4', 'Tidak Punya', 'Rp25.001 - Rp40.000', '< Rp100.000', '> 2KM', '', '', '', ''),
(18, '3172022904690015', 'Yusma', 'perempuan', 'Jln Kebon Bawang', 'Rp1.500.000 - Rp3.000.000', 'Bukan Milik Sendiri', 'Semi Permanent', '4', 'Tidak Punya', 'Rp10.000 - Rp25.000', 'Rp200.001 - Rp300.000', '> 2KM', '', '', '', ''),
(19, '3172022108660023', 'Ivo Miro', 'laki-laki', 'Jln Bugis', 'Rp1.500.000 - Rp3.000.000', 'Kontrak', 'Semi Permanent', '5', 'Sepeda', 'Rp10.000 - Rp25.000', '< Rp100.000', '> 2KM', '', '', '', ''),
(20, '3172031405784407', 'Veri', 'perempuan', 'Jln Papua', 'Rp1.500.000 - Rp3.000.000', 'Milik Sendiri', 'Semi Permanent', '> 5', 'Tidak Punya', 'Rp10.000 - Rp25.000', 'Rp100.000 - Rp200.000', '> 2KM', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kd_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `bobot_kriteria` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kd_kriteria`, `nama_kriteria`, `bobot_kriteria`) VALUES
(14, 'C1', 'Penghasilan Orang Tua', '0.228'),
(15, 'C2', 'Kepemilikan Tempat Tinggal', '0.20'),
(16, 'C3', 'Kondisi Tempat Tinggal', '0.20'),
(17, 'C4', 'Anggota Keluarga Ditanggung', '0.086'),
(18, 'C5', 'Kepemilikan Kendaraan', '0.114'),
(19, 'C6', 'Kebutuhan Pokok', '0.057'),
(20, 'C7', 'Pembayaran Listrik & PDAM', '0.057'),
(21, 'C8', 'Jarak Rumah Ke Sekolah', '0.057');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'dhienny', 'dam123', '130799', 'admin'),
(2, 'dharvyn', 'dharvyn18', '181105', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `penghasilan` varchar(3) NOT NULL,
  `kepemilikan` varchar(3) NOT NULL,
  `kondisi` varchar(3) NOT NULL,
  `anggota` varchar(3) NOT NULL,
  `kendaraan` varchar(3) NOT NULL,
  `kebutuhan` varchar(3) NOT NULL,
  `pembayaran` varchar(3) NOT NULL,
  `jarak` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nik`, `nama_lengkap`, `jenis_kelamin`, `penghasilan`, `kepemilikan`, `kondisi`, `anggota`, `kendaraan`, `kebutuhan`, `pembayaran`, `jarak`) VALUES
(2, '3172021307990011', 'Dwinop', 'perempuan', '100', '100', '100', '100', '100', '100', '100', '100'),
(3, '3172021811050007', 'Dharvyn Aliyya Miro', 'laki-laki', '75', '50', '100', '100', '100', '100', '100', '100');

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `nama_subkriteria` varchar(30) NOT NULL,
  `bobot_subkriteria` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `id_kriteria`, `nama_kriteria`, `nama_subkriteria`, `bobot_subkriteria`) VALUES
(1, 0, 'Penghasilan Orang Tua', '< Rp.1.500.000', '100'),
(2, 0, 'Penghasilan Orang Tua', 'Rp.1.500.000 - Rp.3.000.000', '80'),
(3, 0, 'Penghasilan Orang Tua', 'Rp.3.000.001 - Rp.4.500.000', '40'),
(4, 0, 'Penghasilan Orang Tua', 'Rp.4.500.001 - Rp.5.500.000', '20'),
(5, 0, 'Penghasilan Orang Tua', '> Rp.5.500.000', '0'),
(6, 0, 'Kepemilikan Tempat Tinggal', 'Kontrak', '100'),
(7, 0, 'Kepemilikan Tempat Tinggal', 'Bukan Milik Sendiri', '75'),
(8, 0, 'Kepemilikan Tempat Tinggal', 'Milik Keluarga Besar', '50'),
(9, 0, 'Kepemilikan Tempat Tinggal', 'Milik Sendiri', '25'),
(10, 0, 'Kondisi Tempat Tinggal', 'Non Permanen', '100'),
(11, 0, 'Kondisi Tempat Tinggal', 'Semi Permanen', '60'),
(12, 0, 'Kondisi Tempat Tinggal', 'Permanen', '20'),
(13, 0, 'Anggota Keluarga Ditanggung', '> 5', '100'),
(14, 0, 'Anggota Keluarga Ditanggung', '5', '75'),
(15, 0, 'Anggota Keluarga Ditanggung', '4', '50'),
(16, 0, 'Anggota Keluarga Ditanggung', '3', '25'),
(17, 0, 'Kepemilikan Kendaraan', 'Tidak Punya', '100'),
(18, 0, 'Kepemilikan Kendaraan', 'Sepeda', '80'),
(19, 0, 'Kepemilikan Kendaraan', 'Motor', '40'),
(20, 0, 'Kepemilikan Kendaraan', 'Motor > 1', '0'),
(21, 0, 'Kebutuhan Pokok', 'Rp.10.000 - Rp.25.000', '100'),
(22, 0, 'Kebutuhan Pokok', 'Rp.25.001 - Rp.40.000', '75'),
(23, 0, 'Kebutuhan Pokok', 'Rp.40.001 - Rp.55.000', '50'),
(24, 0, 'Kebutuhan Pokok', '> Rp.55.000', '25'),
(25, 0, 'Pembayaran Listrik & PDAM', '< Rp.100.000', '100'),
(26, 0, 'Pembayaran Listrik & PDAM', 'Rp.100.000 - Rp.200.000', '75'),
(27, 0, 'Pembayaran Listrik & PDAM', 'Rp.200.001 - Rp.300.000', '50'),
(28, 0, 'Pembayaran Listrik & PDAM', '> Rp.300.000', '25'),
(29, 0, 'Jarak Rumah Ke Sekolah', '> 2 KM', '100'),
(30, 0, 'Jarak Rumah Ke Sekolah', '1  - 2 KM', '60'),
(31, 0, 'Jarak Rumah Ke Sekolah', '< 1 KM', '40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
