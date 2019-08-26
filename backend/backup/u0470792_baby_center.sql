-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2019 at 09:56 PM
-- Server version: 5.7.23-24
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u0470792_baby_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `name_of_promotion` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `old_price` int(11) NOT NULL,
  `cover` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `name_of_promotion`, `new_price`, `old_price`, `cover`) VALUES
(21, 'New arrivals', 'oaps ueuu', '420097', 90, '90'),
(22, 'New arrivals', 'oaps ueuu', 'sds', 0, 'adv_1.png'),
(23, 'New arrivals', 'oaps ueuu', 'sds', 0, 'adv_1.png'),
(24, 'New arrivals', 'oaps ueuu', 'sds', 0, 'adv_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `best_rated`
--

CREATE TABLE `best_rated` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `cover` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_rated`
--

INSERT INTO `best_rated` (`id`, `title`, `color`, `new_price`, `cover`) VALUES
(17, 'Baby 2', 'pink', '40', 'DKA_6111.JPG'),
(18, 'New arrivals 000', 'pink', '400', 'DKA_6048.JPG'),
(19, 'New arrivals 22', 'pink', '23', 'DKA_6050.JPG'),
(20, 'New arrivals 333', 'pink', '43', 'DKA_6021.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descpt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `descpt`) VALUES
(1, 'New arrivals', 'New arrivals'),
(2, 'Bathing and Changing', 'Bathing and Changing'),
(3, 'Beddings', 'Beddings'),
(4, 'Car seats and Carriers', 'Car seats and Carriers'),
(5, 'Clothing', 'Clothing'),
(6, 'Feeding', 'Feeding'),
(7, 'Gifts', 'gifts'),
(8, 'Nursery furniture', 'Nursery furniture'),
(9, 'Push chairs', 'Push chairs'),
(10, 'Toys', 'Toys');

-- --------------------------------------------------------

--
-- Table structure for table `dow`
--

CREATE TABLE `dow` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `color` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `old_price` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dow`
--

INSERT INTO `dow` (`id`, `title`, `descpt`, `color`, `size`, `new_price`, `old_price`, `quantity`, `available`, `discount`, `cover`) VALUES
(17, 'Baby 2', 'yuf', 'pink', '23*37', '40', '50', 50, 20, '20%', 'DKA_6111.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `cover` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id`, `title`, `color`, `new_price`, `cover`) VALUES
(17, 'Baby 2', 'pink', '40', 'DKA_6111.JPG'),
(18, 'New arrivals 000', 'pink', '400', 'DKA_6048.JPG'),
(19, 'New arrivals 22', 'pink', '23', 'DKA_6050.JPG'),
(20, 'New arrivals 333', 'pink', '43', 'DKA_6021.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `on_sales`
--

CREATE TABLE `on_sales` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `cover` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `on_sales`
--

INSERT INTO `on_sales` (`id`, `title`, `color`, `new_price`, `cover`) VALUES
(17, 'Baby 2', 'pink', '40', 'DKA_6111.JPG'),
(18, 'New arrivals 000', 'pink', '400', 'DKA_6048.JPG'),
(19, 'New arrivals 22', 'pink', '23', 'DKA_6050.JPG'),
(20, 'New arrivals 333', 'pink', '43', 'DKA_6021.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `color` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `new` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categ_id`, `title`, `descpt`, `color`, `size`, `quantity`, `available`, `discount`, `new`, `cover`) VALUES
(1, 2, 'soap', 'we', 'red', '23*37', 50, 20, '20%', 'new', 'IMG_0021.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'daniel', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_rated`
--
ALTER TABLE `best_rated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dow`
--
ALTER TABLE `dow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `on_sales`
--
ALTER TABLE `on_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `best_rated`
--
ALTER TABLE `best_rated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dow`
--
ALTER TABLE `dow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `on_sales`
--
ALTER TABLE `on_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
