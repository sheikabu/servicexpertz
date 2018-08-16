-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2018 at 07:07 PM
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
  `main_category_id` varchar(100) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `services_id` varchar(100) NOT NULL,
  `min_cost` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city_id` int(20) NOT NULL,
  `ts_id` int(20) NOT NULL,
  `pincode` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`spid`, `emp_id`, `vendor_id`, `main_category_id`, `category_id`, `services_id`, `min_cost`, `first_name`, `last_name`, `phone`, `email`, `city_id`, `ts_id`, `pincode`, `image`, `created_at`) VALUES
(16, '', 3, '0', '0', '0', '', 'Sheik', 'Abdullah', '9961845598', '', 0, 0, 0, '', '2018-08-08 23:57:59'),
(17, '120', 4, '0', '0', '0', '', 'sdad', 'asdad', '123232', '', 0, 0, 0, '', '2018-08-08 23:57:59'),
(18, '1', 3, '2', '7', '12', '1000', 'Seriv', 'pro', '0099', '1she@ff,.com', 0, 0, 0, '', '2018-08-11 16:05:22'),
(19, '11', 3, '1', '2', '2', '121', 'shei', 'abu', '9898', 'uka.sheikabdullah@gmail.com', 0, 0, 0, '', '2018-08-11 20:30:09'),
(32, 'asasA', 16, '1', '["4"]', '97', 'sas', 'sugi', 'suganya', '3456789023', 'sugatest1@gmail.com', 142, 2, 0, '9706739bf62f22a9ab237a26659c38bc.jpg', '2018-08-14 23:53:42'),
(33, '52', 6, '1', '', '14', '150', 'Testing', 'testing', 'test', 't', 494, 4, 695584, 'robo.jpg', '2018-08-15 11:31:14'),
(35, '41', 9, '["1"]', '["2"]', '["8"]', '1152', '444', '44', '4', '4', 142, 4, 4, 'robo.jpg', '2018-08-16 17:58:43');

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
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
