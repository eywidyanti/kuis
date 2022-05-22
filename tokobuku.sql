-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 02:40 PM
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
-- Database: `tokobuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'eka', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `Pengarang` varchar(100) NOT NULL,
  `Penerbit` varchar(50) DEFAULT NULL,
  `Deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `Pengarang`, `Penerbit`, `Deskripsi`) VALUES
('s', 'TI', 'eka', 'widyanti', 'materi pembelajaran TI'),
('TI0000121', 'Buku Ajar Konsep Dasar Pemrograman Website Dengan PHP', 'Elgamara', 'Elga Media', 'Menyajikan informasi tentang konsep dasar pemrograman website menggunakan bahasa pemrograman PHP'),
('TI0000122', 'Aplikasi Website Profesional dengan PHP dan jQuery', 'Wardana S.Hut', 'Elex Media Komputindo', 'Menyampaikan informasi bagaimana membuat aplikasi webiste yang profesional, canggih, dan berkelas. Bahasa pemrograman yang digunakan adalah PHP yang merupakan bahasa utama pembuatan aplikasi website.'),
('TI0000123', 'Pemrograman Web dengan PHP dan MySQL', 'Achmad Solichin', 'Solichin Komputindo', 'Menyampaikan informasi bagaimana membuat aplikasi webiste yang profesional, canggih, dan berkelas. Bahasa pemrograman yang digunakan adalah PHP dan MySQL.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
