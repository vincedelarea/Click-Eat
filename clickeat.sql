-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 05:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clickeat`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

CREATE TABLE `user_acc` (
  `ID` int(10) UNSIGNED NOT NULL,
  `acc_type` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_acc`
--

INSERT INTO `user_acc` (`ID`, `acc_type`, `first_name`, `middle_name`, `last_name`, `birth_date`, `email`, `password`, `number`) VALUES
(1, 'user', 'qwe', 'qwe', 'qwe', '0000-00-00', 'qweqwe@qwe.com', 'f4542db9ba30f7958ae42c113dd87ad21fb2eddb', '123123'),
(2, 'admin', 'vince', 'lapidario', 'dela rea', '2012-08-08', 'admin@test.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '123123'),
(3, 'admin', 'Richard Dean', 'Saycon', 'Alforque', '2022-12-13', 'richard@admin.com', '320bca71fc381a4a025636043ca86e734e31cf8b', '123123'),
(4, 'admin', 'Moses', 'M', 'Limbo', '2022-12-08', 'moses@admin.com', '76c580f0e3e4c9061b71a0636aee421ebf678b6e', '123123'),
(5, 'admin', 'Alexander', 'TheGreat', 'Asis', '2022-12-01', 'alexander@admin.com', 'e46fc836cca3acec03944314d1457c2ae6c68ef3', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
