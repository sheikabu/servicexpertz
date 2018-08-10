-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2018 at 09:45 AM
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
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vid` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `comany_address` varchar(500) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `telephone_no` varchar(100) NOT NULL,
  `fax_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web` varchar(255) NOT NULL,
  `name_representative` varchar(255) NOT NULL,
  `email_crepresentative` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `title_designation` varchar(255) NOT NULL,
  `direct_no` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `date_cestablished` varchar(255) NOT NULL,
  `cross_annual` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_address` varchar(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `staff_address` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vid`, `company_name`, `comany_address`, `pincode`, `telephone_no`, `fax_no`, `email`, `web`, `name_representative`, `email_crepresentative`, `pan_card`, `title_designation`, `direct_no`, `mobile_no`, `date_cestablished`, `cross_annual`, `bank_name`, `bank_address`, `staff_name`, `staff_address`, `skills`, `experience`, `created_at`, `updated_at`) VALUES
(3, '', '', '', '', '', 'uka.sheikabdullah@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', '', '', '', '', 'yan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', '', '', '', '', 'asd@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-08-08 23:52:43', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
