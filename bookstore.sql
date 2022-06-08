-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 01:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alfredmill_cart`
--

CREATE TABLE `alfredmill_cart` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookstore`
--

CREATE TABLE `bookstore` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookstore`
--

INSERT INTO `bookstore` (`id`, `name`, `price`, `quantity`, `category`, `author`, `about`, `img_path`) VALUES
(1, 'Moon Dance', '4', 0, '', 'James R. Price', '', 'xbest_selling2.jpg'),
(2, 'NightFall', '6', 0, '', 'R. Price', '', 'xbest_selling3.jpg'),
(3, 'All Around', '3', 0, '', 'J.Pierre', '', 'xbest_selling5.jpg'),
(4, 'Nightingales', '10', 10, 'sci-fi', 'Emerick J.', 'Will do!', 'xbest_selling4.jpg'),
(5, 'Rein Dimnished', '6', 10, 'sci-fi', 'Liene Simon', 'On a Good Day. On a Sunday. On a Tuesday. Within the week. Price of goods. Timers and Waiters.', 'xbest_selling7.jpg'),
(6, 'Alkin Teal', '7', 5, 'sci-fi', 'Oswald Irene', 'On a Good Day. On a Sunday. On a Tuesday. Within the week. Price of goods. Timers and Waiters. Singers and Dancers. Increase in the spate of prayers.', 'xbest_selling8.jpg'),
(7, 'Arise, Nigeria', '4', 0, 'sci-fi', 'Kylian M.', '', 'xbest_selling1.jpg'),
(8, 'Flings Teller', '2', 4, 'sci-fi', 'Alfred', 'Ii0MWGMg1R', 'xbest_selling6.jpg'),
(9, 'Will Brow', '3', 10, 'business', 'Bymouth', 'Magnus Danjuma', 'xbest_selling9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `millerdan_cart`
--

CREATE TABLE `millerdan_cart` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `millerdan_cart`
--

INSERT INTO `millerdan_cart` (`id`, `name`, `price`, `quantity`, `img_path`) VALUES
(1, 'NightFall', '6', 1, 'xbest_selling1.jpg'),
(2, 'Moon Dance', '4', 3, 'xbest_selling2.jpg'),
(3, 'All Around', '3', 1, 'xbest_selling5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `zip_code` varchar(11) NOT NULL,
  `_order` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`_order`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'James Rian', 'rianjames@gmail.com', '$2y$10$IYEwcVowxh2F/ofMYSDfe.FknE4u0NyyfAwWV1vSRZrfuqwCxIgc6'),
(2, 'Loma Daniel', 'lomadan@gmail.com', '$2y$10$wAxA/W0L4ijbFAFW/EfyDOgXk22njoWwnZlC/yuNWnjFFswtiFgTS'),
(3, 'Miller Dans', 'millerdan@gmail.com', '$2y$10$4KtpstbV1sk1k9qnxHm6ze/HOMNR8h.qdtRWhZePTHps2CyYPvIoS'),
(7, 'Alfred Mills', 'alfredmill@gmail.com', '$2y$10$Otq5BzkcgngcmApMQSDVG.g.LP6afahAZ2XQGjpHCWi/L63CaSty2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alfredmill_cart`
--
ALTER TABLE `alfredmill_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookstore`
--
ALTER TABLE `bookstore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `millerdan_cart`
--
ALTER TABLE `millerdan_cart`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alfredmill_cart`
--
ALTER TABLE `alfredmill_cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookstore`
--
ALTER TABLE `bookstore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `millerdan_cart`
--
ALTER TABLE `millerdan_cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
