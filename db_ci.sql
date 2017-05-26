-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 01:57 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `mobile`) VALUES
(1, 'Masud Alamna', 'm@sud.com.ph', 'ldsjfla lsdj lsdj flk1', 98798791),
(2, 'Sohel Alam', 'al@m.com', 'Dhaka,Bangladesh,BD', 9080),
(8, 'Salim', 'salim.hossain@ebizzsol.com', 'test', 1717552181),
(9, 'Syed Salim', 'salimhossain@gmail.com', 'Gulshan, Dhaka', 1717552181),
(10, 'Salim Hossain', 'salimhossain@gmail.com', 'Gazipur-1700, Dhaka, Bangladesh.', 1717552181),
(13, 'Galib', 'g@lib.com', 'Dhaka,Bangladesh', 987979),
(14, 'qweqwe123', 'asdwe@asd', 'qc', 9090990),
(19, 'sample123', '213@email.com', '123123', 0),
(20, 'rommel', 'rommel@email.com', '09992234412', 0),
(31, 'sad', 'sad', 'sadsad', 123123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
