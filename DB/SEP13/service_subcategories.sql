-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 06:05 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_expertz`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_subcategories`
--

CREATE TABLE `service_subcategories` (
  `ssc_id` int(11) NOT NULL,
  `main_category_id` int(50) NOT NULL,
  `category_id` int(100) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `sub_category_image` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_subcategories`
--

INSERT INTO `service_subcategories` (`ssc_id`, `main_category_id`, `category_id`, `sub_category`, `sub_category_image`, `category_description`, `created_at`) VALUES
(1, 1, 1, 'jygJGkgk', 'g', 'jk', '2018-09-12 23:33:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_subcategories`
--
ALTER TABLE `service_subcategories`
  ADD PRIMARY KEY (`ssc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_subcategories`
--
ALTER TABLE `service_subcategories`
  MODIFY `ssc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
