-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 06:34 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `Nama Tingkatan` varchar(50) NOT NULL,
  `Nama Sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`Nama Tingkatan`, `Nama Sekolah`) VALUES
('S1', 'UPN \"Veteran\" Jawa Timur - Informatika'),
('SD', 'SDK St. Theresia 1 Surabaya'),
('SMA', 'SMAN 9 Surabaya'),
('SMP', 'SMPK St. Vincentius Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `Nama Hobi` varchar(20) NOT NULL,
  `Deskripsi Hobi` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`Nama Hobi`, `Deskripsi Hobi`) VALUES
('Jogging', 'I know, you wouldn\'t believe it, but i really like to jog or simply have some walks in the dawn. You should try it! The air is so fresh!\r\n\r\n'),
('Reading', 'I really like to read since I can\'t remember. My top list is Filosofi Teras, The Subtle Art of Not Giving A F, Percy Jackson Series, and Dunia Sophie. But, my favorite writer all the time is Agatha Christie.\r\n\r\n'),
('Rebahan', 'I know, finally the thing that we all like... REBAHAN. This one is unquestionable.\r\n\r\n'),
('Swimming', 'I learn how to swim when i was in Second grade (i guess?) and until right now i just can do one style. Can you guess it? Yep Kodok Style :)\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `Nama Kontak` varchar(30) NOT NULL,
  `Deskripsi Kontak` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`Nama Kontak`, `Deskripsi Kontak`) VALUES
('Address', 'Jl. Donowati II No.29, Sukomanunggal, Kota SBY, Jawa Timur 60188\r\n\r\n'),
('Email', 'prasetyoanindya123@gmail.com\r\n\r\n'),
('Instagram', '@aninbawalah\r\n\r\n'),
('Telephone Number', '(+62) 895-3257-99200\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`Nama Tingkatan`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`Nama Hobi`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`Nama Kontak`(20));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
