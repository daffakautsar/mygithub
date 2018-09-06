-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 05:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assasins_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` tinyint(1) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `nama`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(9) NOT NULL,
  `stock` int(3) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama`, `description`, `price`, `stock`, `image`) VALUES
(1, 'Golder Jaguar Suit', 'Wakanda Vibranium', '790000', 5, 'product051.png'),
(2, 'Bleding Edge', 'Stark Industries', '47000000', 3, 'product01.png'),
(3, 'One Ring', 'Lord Of The Ring', '978980', 7, 'product023.png'),
(4, 'Terseract', 'Invinity stones', '97898000', 1, 'product041.png'),
(5, 'Strom Braker', 'Nidavellir Made', '980000', 10, 'product031.png'),
(7, 'Power Stone', 'Infinity Stone', '97898000', 1, 'product09.png'),
(8, 'Infinity Ring', 'Infinity Stone', '980000', 5, 'product07.png'),
(9, 'Ironman Iron Technology', 'Stark Industries', '2090000', 5, 'product08.png'),
(10, 'One Ring', 'Shadow Of Mordor', '999999', 1, 'product10.png'),
(11, 'Age Of Agamotto', 'Infinity Stones', '9789700', 5, 'product06.png'),
(12, 'Nano Spiderman', 'Stark Industries', '978980', 10, 'spiderman__iron_spider_avengers_infinity_war_png_by_gasa979-dc82f7i.png'),
(13, 'Ironman Hulk Buster', 'Stark Industries', '97898000', 3, 'Marvel-avengers-infinity-war-hulkbuster-sixth-scale-figure-hot-toys-silo-903473.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `group` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
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
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
