-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 07:53 PM
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
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vid` int(11) NOT NULL,
  `Company_Name` varchar(255) NOT NULL,
  `Comany_Address` varchar(500) NOT NULL,
  `Pincode` varchar(255) NOT NULL,
  `Telephone_No` varchar(100) NOT NULL,
  `Fax_No` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Web` varchar(255) NOT NULL,
  `Name_CRepresentative` varchar(255) NOT NULL,
  `Email_CRepresentative` varchar(255) NOT NULL,
  `Pan_Card` varchar(255) NOT NULL,
  `Title_Designation` varchar(255) NOT NULL,
  `Direct_No` varchar(255) NOT NULL,
  `Mobile_No` varchar(255) NOT NULL,
  `Date_CEstablished` varchar(255) NOT NULL,
  `Gross_Annual` varchar(255) NOT NULL,
  `Bank_Name` varchar(255) NOT NULL,
  `Bank_Address` varchar(255) NOT NULL,
  `Staff_Name` varchar(255) NOT NULL,
  `Staff_Address` varchar(255) NOT NULL,
  `Skills` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vid`, `Company_Name`, `Comany_Address`, `Pincode`, `Telephone_No`, `Fax_No`, `Email`, `Web`, `Name_CRepresentative`, `Email_CRepresentative`, `Pan_Card`, `Title_Designation`, `Direct_No`, `Mobile_No`, `Date_CEstablished`, `Gross_Annual`, `Bank_Name`, `Bank_Address`, `Staff_Name`, `Staff_Address`, `Skills`, `Experience`, `created_at`, `updated_at`) VALUES
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
