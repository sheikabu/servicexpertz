-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2018 at 07:10 PM
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
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `sc_id` int(11) NOT NULL,
  `main_category_id` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imagess` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`sc_id`, `main_category_id`, `category`, `created_at`, `imagess`, `description`) VALUES
(1, '1', 'HOME REPAIRS', '2018-08-10 16:12:19', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(2, '1', 'LESSONS AND HOBBIES', '2018-08-10 16:12:19', '', 'Lorem Ipsum is simply dummy text of the printing a...'),
(3, '2', 'BEAUTY AND HEALTH', '2018-08-10 16:12:51', '', 'Lorem Ipsum is simply dummy text of the printing a...'),
(4, '2', 'BUSINESS AND SRVICES', '2018-08-10 16:12:51', '', 'Lorem Ipsum is simply dummy text of the printing a...'),
(5, '2', 'LOANS AND INSURANCE', '2018-08-10 16:13:24', '', 'Lorem Ipsum is simply dummy text of the printing a...'),
(6, '2', 'EVENT', '2018-08-10 16:13:24', '', 'Lorem Ipsum is simply dummy text of the printing a...'),
(7, '2', 'SALES AND PAURCHASE', '2018-08-10 16:13:37', '', 'Lorem Ipsum is simply dummy text of the printing a...1'),
(8, '2', 'nnnnnnnn', '2018-08-19 19:52:52', 'business-man-2356422_960_720.png', 'Lorem Ipsum is simply dummy text of the printing a...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`sc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
