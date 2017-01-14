-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 08:47 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petstore`
--
CREATE DATABASE IF NOT EXISTS `petstore` DEFAULT CHARACTER SET utf8 COLLATE utf8_slovenian_ci;
USE `petstore`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('testbelma', 'belma123');

-- --------------------------------------------------------

--
-- Table structure for table `kontaktinfo`
--

CREATE TABLE `kontaktinfo` (
  `username` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `message` text COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `kontaktinfo`
--

INSERT INTO `kontaktinfo` (`username`, `email`, `subject`, `message`) VALUES
('belmah95', 'belma_h_95@hotmail.com', 'Komentar1', 'evo prvi komentar, ajde ucitaj se pls'),
('rdowneyjr', 'rdowneyjr@mail.com', 'sarkasticni kom', 'meeh nako vala');

-- --------------------------------------------------------

--
-- Table structure for table `podaciologovanim`
--

CREATE TABLE `podaciologovanim` (
  `username` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `podaciologovanim`
--

INSERT INTO `podaciologovanim` (`username`, `password`) VALUES
('belmah95', 'belmah95'),
('rdowneyjr', 'rdowneyjr1');

-- --------------------------------------------------------

--
-- Table structure for table `produkti`
--

CREATE TABLE `produkti` (
  `id` int(200) NOT NULL,
  `opis` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `cijena` int(200) NOT NULL,
  `slika` varchar(100) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `produkti`
--

INSERT INTO `produkti` (`id`, `opis`, `cijena`, `slika`) VALUES
(1, 'slika knjiga', 50, 'knjiga.jpg'),
(2, 'slika belo', 1000, 'belo.png');

-- --------------------------------------------------------

--
-- Table structure for table `registrovanikorisnici`
--

CREATE TABLE `registrovanikorisnici` (
  `ime` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_slovenian_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `registrovanikorisnici`
--

INSERT INTO `registrovanikorisnici` (`ime`, `prezime`, `email`, `username`, `password`) VALUES
('Belma', 'Homarac', 'belma_h_95@hotmail.com', 'belmah95', 'belmah95'),
('Chris', 'Hemsworth', 'chemsworth@mail.com', 'chemsworth', 'chemsworth1'),
('Chris', 'Evans', 'chris@gmail.com', 'chrisEv1', 'chrisEv1'),
('Robert', 'Downey', 'robertdowneyjr@gmail.com', 'rdowney1', 'rdowney1'),
('Robert Downey', 'Junior', 'rdowneyjr@mail.com', 'rdowneyjr', 'rdowneyjr1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kontaktinfo`
--
ALTER TABLE `kontaktinfo`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `podaciologovanim`
--
ALTER TABLE `podaciologovanim`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `produkti`
--
ALTER TABLE `produkti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrovanikorisnici`
--
ALTER TABLE `registrovanikorisnici`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produkti`
--
ALTER TABLE `produkti`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kontaktinfo`
--
ALTER TABLE `kontaktinfo`
  ADD CONSTRAINT `kontaktinfo_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registrovanikorisnici` (`username`);

--
-- Constraints for table `podaciologovanim`
--
ALTER TABLE `podaciologovanim`
  ADD CONSTRAINT `podaciologovanim_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registrovanikorisnici` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
