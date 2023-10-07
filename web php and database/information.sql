-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 07, 2023 at 05:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `information`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardetails`
--

CREATE TABLE `cardetails` (
  `id` int(50) NOT NULL,
  `user_id` int(40) NOT NULL,
  `make` varchar(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` int(20) NOT NULL,
  `mileage` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cardetails`
--

INSERT INTO `cardetails` (`id`, `user_id`, `make`, `model`, `year`, `mileage`, `location`, `price`) VALUES
(1, 11, '2000 ', 'bmw ', 2023, '20 ', 'kale ', '100 '),
(2, 11, '1 ', '2 ', 2023, '4 ', '5 ', '6 '),
(3, 11, '1999 ', 'mustang ', 2023, '20 ', 'kalimati ', '2000000 '),
(4, 11, '999 ', 'mustang ', 2026, '99 ', 'kkkk ', '99999 '),
(5, 11, '1999 ', 'ford ', 2023, '12 ', 'nepal ', '9000000 ');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `sno` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`sno`, `username`, `password`, `name`, `address`, `phonenumber`, `email`) VALUES
(1, 'k ', 'a746392aca68e8099139d2c8a6101160 ', 'jk ', 'kk ', 23232, 'kk@kk.k '),
(2, 'test ', 'ad5c0bbde4171327d382a3cb2a66207e ', 'test ', 'test ', 12345, 'test@gm.sd '),
(3, 'kale ', '4a28b0ad939acbb9eddfc42be170de3c ', 'haku ', 'kale ', 12345, 'kale@kale.com '),
(4, 'kale ', '4a28b0ad939acbb9eddfc42be170de3c ', 'haku ', 'kale ', 12345, 'kale@kale.com '),
(5, 'kale ', '4a28b0ad939acbb9eddfc42be170de3c ', 'haku ', 'kale ', 12345, 'kale@kale.com '),
(6, 'kale ', '4a28b0ad939acbb9eddfc42be170de3c ', 'haku ', 'kale ', 12345, 'kale@kale.com '),
(7, 'kale ', '4a28b0ad939acbb9eddfc42be170de3c ', 'haku ', 'kale ', 12345, 'kale@kale.com '),
(8, 'jpt ', 'fbdc7b890f5da5ecbcc926d0ae6d516d ', 'jpt ', 'jpt ', 2313123, 'jpt@jpt.jpt '),
(9, 'anmol ', '217276298c65915e4b00f299a8cffedc ', 'anmol ', 'baneshwor ', 12345, 'anmol@gmail.com '),
(10, 'anmol ', '217276298c65915e4b00f299a8cffedc ', 'anmol ', 'baneshwor ', 12345, 'anmol@gmail.com '),
(11, 'admin ', '7488e331b8b64e5794da3fa4eb10ad5d ', 'admin ', 'admin ', 12345, 'admin@admin.com '),
(12, 'testing ', '1ef6434eed5bf349ad5cf0cb20dee8d1 ', 'testing ', 'testing ', 12345, 'test@test.test '),
(13, 'testdata ', 'ef654c40ab4f1747fc699915d4f70902 ', 'testdata ', 'testing ', 12345, 'test@test.com ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardetails`
--
ALTER TABLE `cardetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cardetails_ibfk_1` (`user_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardetails`
--
ALTER TABLE `cardetails`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cardetails`
--
ALTER TABLE `cardetails`
  ADD CONSTRAINT `cardetails_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `information` (`sno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
