-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2018 at 08:38 PM
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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `main_category_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `services` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `main_category_id`, `category_id`, `services`, `created_at`, `updated_at`) VALUES
(2, 2, 6, 'Hardware12345', '2018-08-08 23:55:52', 'CURRENT_TIMESTAMP');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `sc_id` int(11) NOT NULL,
  `main_category_id` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`sc_id`, `main_category_id`, `category`, `created_at`) VALUES
(1, '1', 'Computer Repair', '2018-08-08 23:55:27'),
(2, '', 'ssfs', '2018-08-08 23:55:27'),
(3, '2', 'aasdasd', '2018-08-08 23:55:27'),
(4, '1', 'resr', '2018-08-08 23:55:27'),
(5, '2', 'rest1', '2018-08-08 23:55:27'),
(6, '1', 'comer12', '2018-08-08 23:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `service_main_categories`
--

CREATE TABLE `service_main_categories` (
  `smc_id` int(11) NOT NULL,
  `main_category` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_main_categories`
--

INSERT INTO `service_main_categories` (`smc_id`, `main_category`, `created_at`) VALUES
(1, 'Residential', '2018-08-08 23:54:46'),
(2, 'Commercial', '2018-08-08 23:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `service_providers`
--

CREATE TABLE `service_providers` (
  `spid` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`spid`, `emp_id`, `vendor_id`, `first_name`, `last_name`, `phone`, `created_at`) VALUES
(13, '', 0, 'sdad', 'asd', '1111', '2018-08-08 23:57:59'),
(14, '11', 3, '21', '21', '2142341', '2018-08-08 23:57:59'),
(15, '', 3, 'asdasdasd', 'dasda', '1231231', '2018-08-08 23:57:59'),
(16, '', 3, 'Sheik', 'Abdullah', '9961845598', '2018-08-08 23:57:59'),
(17, '120', 4, 'sdad', 'asdad', '123232', '2018-08-08 23:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `username`, `password`, `role`, `status`, `date_time`) VALUES
(216, '', '', '', '', '', 'user', '', '2018-08-08 13:22:19'),
(208, '22', '22', '22@gmail.com', '', '', 'user', '', '2018-08-06 14:59:04'),
(198, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin', 'active', '2018-08-06 14:19:31'),
(200, 'dsadasd', 'asdasd', 'asd@asd.com', '', '', '', '', '2018-08-06 14:30:06'),
(215, 'asdsa', 'dasda', 'asd@gmail.com', '', '', '', '', '2018-08-07 14:14:50'),
(214, 'asdasaasasd', 'asdasd', 'sheik@gmail.com', '', '', '', '', '2018-08-07 14:14:30'),
(211, 'sreejith', 'k', 'sreeji1980@gmail.com', '', '', 'user', '', '2018-08-06 17:42:41'),
(199, 'sheik', 'abdullah', 'uka.sheikabdullah@gmail.com', '', '', '', '', '2018-08-06 14:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vid` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vid`, `first_name`, `last_name`, `email`, `created_at`, `updated_at`) VALUES
(3, 'vendor', 'vendor', 'uka.sheikabdullah@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'yan', 'bytes', 'yan@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'asdasd', 'asd', 'asd@gmail.com', '2018-08-08 23:52:43', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `service_main_categories`
--
ALTER TABLE `service_main_categories`
  ADD PRIMARY KEY (`smc_id`);

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`userid`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service_main_categories`
--
ALTER TABLE `service_main_categories`
  MODIFY `smc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
