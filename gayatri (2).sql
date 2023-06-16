-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 07:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gayatri`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(20) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `role`) VALUES
('siswa', 'siswa123', 'murid'),
('izul', 'izul123', 'admin'),
('yazid', 'yazid123', 'murid'),
('Surya', 'surya123', 'murid'),
('Dede', 'dede123', 'murid'),
('admin', 'admin', 'admin'),
('Gosal', 'gosal123', 'siswa'),
('jojo', 'jojo123', 'siswa'),
('hasan', 'hasan123', 'siswa'),
('alamsyah', 'alam123', 'siswa'),
('yuan', 'yuan123', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `form_pendaftaran`
--

CREATE TABLE `form_pendaftaran` (
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `nama_program` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_pendaftaran`
--

INSERT INTO `form_pendaftaran` (`nama_lengkap`, `jenis_kelamin`, `Email`, `nomor_telepon`, `nama_program`) VALUES
('Mohammad Hasan', 'Laki-laki', 'tes@gmail.com', '212', 'Intensif PTN'),
('Moka', 'Laki-laki', 'moka@gmail.com', '089765356', 'SMA Reguler'),
('Rizal', 'Laki-laki', 'rizal@gmail.com', '0854231', 'SMA Reguler'),
('Nail', 'Laki-laki', 'nail@gmail.com', '086533', 'SD Reguler'),
('Fariz', 'Laki-laki', 'fariz@gmail.com', '087652411', 'OSN'),
('Nabila Putri', 'Perempuan', 'nbilaptri@gmail.com', '082227452782', 'OSN'),
('Ni Made Berliana', 'Perempuan', 'madebear@gmail.com', '08342311234', 'SMP Reguler'),
('Yuni s', 'Perempuan', 'yunyun@gmail.com', '085423175653', 'SMA Reguler'),
('Jojo jeje', 'Laki-laki', 'jojo@gmail.com', '097878627', 'Intensif PTN'),
('Hasan tajuk', 'Laki-laki', 'hasantajuk@gmail.com', '097654356', 'SMA Reguler'),
('Alamsyah sp', 'Laki-laki', 'alamsyah@gmail.com', '087654765', 'OSN'),
('yuan setiawan', 'Laki-laki', 'yuan@gmail.com', '087657997', 'Intensif PTN');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `nama_program` varchar(20) NOT NULL,
  `Hari` varchar(45) DEFAULT NULL,
  `Jam` varchar(45) DEFAULT NULL,
  `Harga` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`nama_program`, `Hari`, `Jam`, `Harga`) VALUES
('SD Reguler', 'Senin', '10:00-12:00', 1000000),
('SMP Reguler', 'Selasa', '13:00-15:00', 1200000),
('SMA Reguler', 'Rabu', '16:00-18:00', 1300000),
('Intensif PTN', 'Kamis', '09:00-11:00', 1500000),
('OSK', 'Jumat', '14:00-16:00', 2000000),
('OSN', 'Sabtu', '08:00-10:00', 2300000),
('Kedinasan', 'Minggu', '11.00-13.00', 3000000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
