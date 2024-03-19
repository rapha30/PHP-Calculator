-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 11:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calculadora`
--

-- --------------------------------------------------------

--
-- Table structure for table `operacoes`
--

CREATE TABLE `operacoes` (
  `id` int(11) NOT NULL,
  `num1` decimal(10,2) DEFAULT NULL,
  `num2` decimal(10,2) DEFAULT NULL,
  `operacao` varchar(10) DEFAULT NULL,
  `resultado` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `operacoes`
--

INSERT INTO `operacoes` (`id`, `num1`, `num2`, `operacao`, `resultado`) VALUES
(1, 1.00, 2.00, 'adição', 3.00),
(2, 1.00, 1.00, 'adição', 2.00),
(3, 15234523.00, 99999999.99, 'multiplica', 99999999.99),
(4, 21.00, 2.00, 'adição', 23.00),
(5, 298.00, 2345.00, 'divisão', 0.13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `operacoes`
--
ALTER TABLE `operacoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `operacoes`
--
ALTER TABLE `operacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
