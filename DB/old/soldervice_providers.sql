-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2018 at 12:09 AM
-- Server version: 5.7.22
-- PHP Version: 5.6.36-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `service_providers`
--

CREATE TABLE `service_providers` (
  `spid` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `main_category_id` int(50) NOT NULL,
  `category_id` int(50) NOT NULL,
  `services_id` int(50) NOT NULL,
  `min_cost` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`spid`, `emp_id`, `vendor_id`, `main_category_id`, `category_id`, `services_id`, `min_cost`, `first_name`, `last_name`, `phone`, `email`, `image`, `created_at`) VALUES
(13, '', 0, 0, 0, 0, '', 'sdad', 'asd', '1111', '', '', '2018-08-08 23:57:59'),
(14, '11', 3, 0, 0, 0, '', '21', '21', '2142341', '', '', '2018-08-08 23:57:59'),
(15, '', 3, 0, 0, 0, '', 'asdasdasd', 'dasda', '1231231', '', '', '2018-08-08 23:57:59'),
(16, '', 3, 0, 0, 0, '', 'Sheik', 'Abdullah', '9961845598', '', '', '2018-08-08 23:57:59'),
(17, '120', 4, 0, 0, 0, '', 'sdad', 'asdad', '123232', '', '', '2018-08-08 23:57:59'),
(18, '1', 3, 2, 7, 12, '1000', 'Seriv', 'pro', '0099', '1she@ff,.com', '', '2018-08-11 16:05:22'),
(19, '11', 3, 1, 2, 2, '121', 'shei', 'abu', '9898', 'uka.sheikabdullah@gmail.com', '', '2018-08-11 20:30:09'),
(20, '55', 3, 1, 4, 5, '656', 'bb', 'bb', 'bb', 'bb', '', '2018-08-11 21:00:30'),
(21, '111', 3, 1, 1, 97, '111', '111', '1111', '111', '111', '', '2018-08-11 21:03:41'),
(23, 'qawsqaws', 3, 1, 3, 5, '121', 'qawe', 'qaws', 'qwsaq', 'wertg', 'image3.png', '2018-08-11 22:17:06'),
(24, 'imag', 3, 1, 4, 5, '11', 'image', 'image', 'imahe', 'image', 'image3.png', '2018-08-11 22:56:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`spid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
