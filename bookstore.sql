-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql102.epizy.com
-- Generation Time: May 21, 2022 at 10:38 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31768266_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookstore`
--

CREATE TABLE `bookstore` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookstore`
--

INSERT INTO `bookstore` (`id`, `name`, `price`, `author`, `img_path`) VALUES
(1, 'Moon Dance', '87', 'James R. Price', 'xbest_selling1.jpg'),
(2, 'Moon Dance', '67', 'J. R. Price', 'xbest_selling1.jpg.jpg'),
(3, 'Moon Dance', '67', 'J. R. Price', 'xbest_selling2.jpg'),
(4, 'Night Rain', '25', 'J. R. Watson', 'xbest_selling8.jpg'),
(5, 'Moon Dance', '67', 'J. R. Price', 'xbest_selling2.jpg'),
(6, 'Moon Dance', '67', 'J. R. Price', 'xbest_selling7.jpg'),
(7, 'Moon Dance', '45', 'Kylian Maddison', 'xbest_selling4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'James Rian', 'rianjames@gmail.com', '$2y$10$IYEwcVowxh2F/ofMYSDfe.FknE4u0NyyfAwWV1vSRZrfuqwCxIgc6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookstore`
--
ALTER TABLE `bookstore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookstore`
--
ALTER TABLE `bookstore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
