-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 04:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
-- Table structure for table `t_dosen`
--

CREATE TABLE `t_dosen` (
  `dosenid` int(15) NOT NULL,
  `namadosen` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `handphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dosen`
--

INSERT INTO `t_dosen` (`dosenid`, `namadosen`, `alamat`, `handphone`) VALUES
(1, 'Sapri', 'Jl. Hang Tuah', '087654637281'),
(4, 'Udin', 'Jl. Sudirman', '081234567890'),
(5, 'Azis', 'Jl. Merdeka', '082198765432'),
(6, 'Susi', 'Jl. Cempaka', '081323456781');

-- --------------------------------------------------------

--
-- Table structure for table `t_juduljadwaldetail`
--

CREATE TABLE `t_juduljadwaldetail` (
  `idx` varchar(10) NOT NULL,
  `jadwalid` varchar(10) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `nilaipenguji1` double(2,2) NOT NULL,
  `nilaipenguji2` double(2,2) NOT NULL,
  `nilaipenguji3` double(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_judul_jadwal`
--

CREATE TABLE `t_judul_jadwal` (
  `jadwalid` int(11) NOT NULL,
  `idprodi` varchar(10) NOT NULL,
  `tahunak` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nim` varchar(8) NOT NULL,
  `nim2` varchar(8) NOT NULL,
  `nim3` varchar(8) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tempatpenelitian` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL,
  `dosenidpembimbing` int(15) NOT NULL,
  `uploadfile` varchar(100) NOT NULL,
  `tanggalujian` date NOT NULL,
  `jammulai` varchar(5) NOT NULL,
  `jamselesai` varchar(5) NOT NULL,
  `dosenidpenguji1` varchar(15) NOT NULL,
  `dosenidpenguji2` varchar(15) NOT NULL,
  `dosenidpenguji3` varchar(20) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_judul_jadwal`
--

INSERT INTO `t_judul_jadwal` (`jadwalid`, `idprodi`, `tahunak`, `tanggal`, `nim`, `nim2`, `nim3`, `judul`, `tempatpenelitian`, `status`, `dosenidpembimbing`, `uploadfile`, `tanggalujian`, `jammulai`, `jamselesai`, `dosenidpenguji1`, `dosenidpenguji2`, `dosenidpenguji3`, `userid`) VALUES
(2, 'TS2018', '2018', '2019-11-23', '18062012', '', '', 'Belajar', 'Jakarta', 'Proses', 1, '2516-Article Text-5422-1-10-20190430.pdf', '2019-11-25', '11.00', '12.00', '4', '6', '5', 1),
(3, 'TI2018', '2018', '2019-11-24', '11231144', '11223344', '44556677', 'Jutaan Orang Tidak Menyadari', 'Youtube', 'Proses', 1, '61122447750-1554474968.pdf', '2019-11-25', '10.00', '11.00', '4', '5', '6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `idmhs` int(11) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `namamhs` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `idprodi` varchar(25) NOT NULL,
  `handphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`idmhs`, `nim`, `namamhs`, `alamat`, `idprodi`, `handphone`) VALUES
(1, '18062012', 'Rizky Wahyu Syahputra', 'Jl. Bintang', 'TI2018', '081319786540'),
(4, '11231144', 'Boy Santoso', 'Jl. Segan Sari', 'TS2018', '082312345678'),
(5, '11223344', 'Ari Lasso', 'Jl. Melur', 'TI2018', '082143658712'),
(6, '44556677', 'Citra Santi', 'Jl. Kemayoran', 'TI2018', '083143221134');

-- --------------------------------------------------------

--
-- Table structure for table `t_prodi`
--

CREATE TABLE `t_prodi` (
  `idprodi` varchar(10) NOT NULL,
  `namaprodi` varchar(35) NOT NULL,
  `pejabat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_prodi`
--

INSERT INTO `t_prodi` (`idprodi`, `namaprodi`, `pejabat`) VALUES
('TI2018', 'Teknik Informatika Angkatan 2018', 'Suparjo, S.Kom., M.kom'),
('TS2018', 'Teknik Sipil Angkatan 2018', 'Budi Santoso, M.Ts');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `userid` int(10) NOT NULL,
  `namauser` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`userid`, `namauser`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'bos', '15fc4a53992beba40ae91e5244e79dff', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`dosenid`);

--
-- Indexes for table `t_juduljadwaldetail`
--
ALTER TABLE `t_juduljadwaldetail`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `t_judul_jadwal`
--
ALTER TABLE `t_judul_jadwal`
  ADD PRIMARY KEY (`jadwalid`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`idmhs`);

--
-- Indexes for table `t_prodi`
--
ALTER TABLE `t_prodi`
  ADD PRIMARY KEY (`idprodi`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_dosen`
--
ALTER TABLE `t_dosen`
  MODIFY `dosenid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_judul_jadwal`
--
ALTER TABLE `t_judul_jadwal`
  MODIFY `jadwalid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  MODIFY `idmhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
