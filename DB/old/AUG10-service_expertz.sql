-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2018 at 05:15 PM
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
(1, 1, 1, 'ELECTRICIAN', '2018-08-10 16:16:51', NULL),
(2, 1, 1, 'PLUMBER', '2018-08-10 16:16:51', NULL),
(3, 1, 1, 'PEST CONTTROL', '2018-08-10 16:16:51', NULL),
(4, 1, 1, 'RO AND WATER PURIFIER REPAIR', '2018-08-10 16:16:51', NULL),
(5, 1, 1, 'AC REPAIR SERVICE', '2018-08-10 16:16:51', NULL),
(6, 1, 1, 'PAINTER', '2018-08-10 16:16:51', NULL),
(7, 1, 1, 'CARPENTER', '2018-08-10 16:16:51', NULL),
(8, 1, 1, 'BATHROOM CLEANING', '2018-08-10 16:16:51', NULL),
(9, 1, 1, 'REFRIGERATOR REPAIR', '2018-08-10 16:16:51', NULL),
(10, 1, 1, 'TELEVISION INSTALATION', '2018-08-10 16:16:51', NULL),
(11, 1, 1, 'MICROWAVE REPAIR', '2018-08-10 16:19:15', NULL),
(12, 1, 1, 'WASHING MACHINE REPAIR', '2018-08-10 16:19:15', NULL),
(13, 1, 1, 'LAPTOP AND COMPUTER REPAIR', '2018-08-10 16:19:15', NULL),
(14, 1, 1, 'ALUMINIUM WORK', '2018-08-10 16:19:15', NULL),
(15, 1, 1, 'BUILD AND RENOVATE', '2018-08-10 16:19:15', NULL),
(16, 1, 1, 'CARPETT CLEANING', '2018-08-10 16:19:15', NULL),
(17, 1, 1, 'CHIMMNEY REPAIR', '2018-08-10 16:19:15', NULL),
(18, 1, 1, 'DOG TRAINER', '2018-08-10 16:19:15', NULL),
(19, 1, 1, 'DRIVER ON CALL', '2018-08-10 16:19:15', NULL),
(20, 1, 1, 'FALSE CEILING AND POP', '2018-08-10 16:19:15', NULL),
(21, 1, 1, 'GARDENER', '2018-08-10 16:21:03', NULL),
(22, 1, 1, 'FURNITURE REPAIRE', '2018-08-10 16:21:03', NULL),
(23, 1, 1, 'GLASS WORK', '2018-08-10 16:21:03', NULL),
(24, 1, 1, 'HOME CLEANING', '2018-08-10 16:21:03', NULL),
(25, 1, 1, 'INTERION DESIGNERS', '2018-08-10 16:21:03', NULL),
(26, 1, 1, 'IORN WORK', '2018-08-10 16:21:03', NULL),
(27, 1, 1, 'KITCHEN CLEANING', '2018-08-10 16:21:03', NULL),
(28, 1, 1, 'MARBLE SCRUBING', '2018-08-10 16:21:03', NULL),
(29, 1, 1, 'MODULAR KITCHEN', '2018-08-10 16:21:03', NULL),
(30, 1, 1, 'SOFA CLEANING', '2018-08-10 16:21:03', NULL),
(31, 1, 1, 'TILE CLEANING', '2018-08-10 16:22:44', NULL),
(32, 1, 1, 'UTENSILES REPAIR', '2018-08-10 16:22:44', NULL),
(33, 1, 1, 'VASTHU CONSULTANT', '2018-08-10 16:22:44', NULL),
(34, 1, 1, 'WATER PROOFING', '2018-08-10 16:22:44', NULL),
(35, 1, 1, 'WATER TANK CLEANING', '2018-08-10 16:22:44', NULL),
(36, 1, 1, 'WOOD WORK', '2018-08-10 16:22:44', NULL),
(37, 1, 1, 'INVERTER REPAIR', '2018-08-10 16:22:44', NULL),
(38, 1, 1, 'CAR WHEEL BALANCING', '2018-08-10 16:22:44', NULL),
(39, 1, 1, 'CAR DRY CLEANING', '2018-08-10 16:22:44', NULL),
(40, 1, 1, 'CAR REPAIR', '2018-08-10 16:22:44', NULL),
(41, 1, 1, 'GEYCER REPAIR', '2018-08-10 16:23:46', NULL),
(42, 1, 1, 'DRY CLEANING & LAUNDRY', '2018-08-10 16:23:46', NULL),
(43, 1, 1, 'CURTAINS AND BLINDS', '2018-08-10 16:23:46', NULL),
(44, 1, 1, 'DECO LIGHTS', '2018-08-10 16:23:46', NULL),
(45, 1, 1, 'AIR TICKET BOOKING', '2018-08-10 16:23:46', NULL),
(46, 1, 1, 'PIGEON NET', '2018-08-10 16:23:46', NULL),
(47, 1, 2, 'FRENCH CLASSES', '2018-08-10 16:25:44', NULL),
(48, 1, 2, 'HOME TUTOR', '2018-08-10 16:25:44', NULL),
(49, 1, 2, 'MATTHS TEACHE', '2018-08-10 16:25:44', NULL),
(50, 1, 2, 'SCINCE TEACH', '2018-08-10 16:25:44', NULL),
(51, 1, 2, 'MUSIC CLASS', '2018-08-10 16:25:44', NULL),
(52, 1, 2, 'DANCE CLASS', '2018-08-10 16:25:54', NULL),
(53, 2, 3, 'PARTY MAKEUP', '2018-08-10 16:38:03', NULL),
(54, 2, 3, 'SPA AT HOME', '2018-08-10 16:38:03', NULL),
(55, 2, 3, 'DIETICIAN', '2018-08-10 16:38:03', NULL),
(56, 2, 3, 'YOGA TRAINER AT HOME', '2018-08-10 16:38:03', NULL),
(57, 2, 3, 'PHYSTO THERAPY AT HOME', '2018-08-10 16:38:03', NULL),
(58, 2, 3, 'SALON AT HOME', '2018-08-10 16:38:03', NULL),
(59, 2, 3, 'MEHANDI ARTIST', '2018-08-10 16:38:03', NULL),
(60, 2, 3, 'FITNES TRAINER', '2018-08-10 16:38:03', NULL),
(61, 2, 3, 'KARATE TRAINER', '2018-08-10 16:38:03', NULL),
(62, 2, 3, 'LAB TEST AT HOME', '2018-08-10 16:38:03', NULL),
(63, 2, 3, 'ZUMBA FITNESS CLASSES', '2018-08-10 16:38:33', NULL),
(64, 2, 3, 'NURSE FORM', '2018-08-10 16:38:33', NULL),
(65, 2, 3, 'MEDI EQUIPMENTS ON RENT', '2018-08-10 16:38:39', NULL),
(66, 2, 4, 'BIOMETRIC ATTENDANCE', '2018-08-10 16:55:07', NULL),
(67, 2, 4, 'CCTV CAMERA', '2018-08-10 16:55:07', NULL),
(68, 2, 4, 'CHARTED ACCOUNT', '2018-08-10 16:55:07', NULL),
(69, 2, 4, 'COMMERCIAL PEST CONTROL', '2018-08-10 16:55:07', NULL),
(70, 2, 4, 'COMPANY REGISTRATION', '2018-08-10 16:55:07', NULL),
(71, 2, 4, 'COMPUTER AMC', '2018-08-10 16:55:07', NULL),
(72, 2, 4, 'ELECTRONIC LOCK INSTALATION', '2018-08-10 16:55:07', NULL),
(73, 2, 4, 'FURNITURE RENAIR', '2018-08-10 16:55:07', NULL),
(74, 2, 4, 'PACKERS AND MOVERS', '2018-08-10 16:55:07', NULL),
(75, 2, 4, 'CIVIL LAWYER', '2018-08-10 16:55:07', NULL),
(76, 2, 4, 'DIGITAL MARKETING', '2018-08-10 16:55:07', NULL),
(77, 2, 4, 'PAN CARD', '2018-08-10 16:55:07', NULL),
(78, 2, 4, 'EMAIL MARKETING', '2018-08-10 16:55:07', NULL),
(79, 2, 4, 'GRAPHIC DESIGNER', '2018-08-10 16:55:07', NULL),
(80, 2, 4, 'MOBILE APP DEVELOPERS', '2018-08-10 16:55:07', NULL),
(81, 2, 4, 'WEB DEVELOPERS', '2018-08-10 16:55:07', NULL),
(82, 2, 4, 'LOGO DESIGNER', '2018-08-10 16:55:07', NULL),
(83, 2, 4, 'CRIMINAL LAWYER', '2018-08-10 16:55:07', NULL),
(84, 2, 4, 'MATRI MONAL DISPUTE LAWYER', '2018-08-10 16:55:07', NULL),
(85, 2, 4, 'INTELECTUL PROPERTY LAWYER', '2018-08-10 16:55:07', NULL),
(86, 2, 4, 'IT RETURN FILING', '2018-08-10 16:57:53', NULL),
(87, 2, 4, 'BOOK KEEPING', '2018-08-10 16:57:53', NULL),
(88, 2, 4, 'RUBER STAMPS', '2018-08-10 16:58:08', NULL),
(89, 2, 5, 'GENERAL INSURANCE', '2018-08-10 17:00:11', NULL),
(90, 2, 5, 'HEALTH INSURANCE', '2018-08-10 17:00:11', NULL),
(91, 2, 5, 'LIFE INSURANCE', '2018-08-10 17:00:11', NULL),
(92, 2, 5, 'VEHICLE INSURANCE', '2018-08-10 17:00:11', NULL),
(93, 2, 5, 'CREDIT CARD', '2018-08-10 17:00:11', NULL),
(94, 2, 5, 'HOME LOAN', '2018-08-10 17:00:34', NULL),
(95, 2, 5, 'LOAN AGAINST PROPERTY', '2018-08-10 17:00:34', NULL),
(96, 2, 5, 'PERSONAL LOAN', '2018-08-10 17:00:48', NULL),
(97, 2, 6, 'ASTROLOGER', '2018-08-10 17:02:43', NULL),
(98, 2, 6, 'BIRTHDAY PARTY PALANNER', '2018-08-10 17:02:43', NULL),
(99, 2, 6, 'BRIDAL MEHANDI ARTIST', '2018-08-10 17:02:43', NULL),
(100, 2, 6, 'CATERERS', '2018-08-10 17:02:43', NULL),
(101, 2, 6, 'DECORATORS', '2018-08-10 17:02:43', NULL),
(102, 2, 6, 'DJ', '2018-08-10 17:02:43', NULL),
(103, 2, 6, 'FLORISTS', '2018-08-10 17:02:43', NULL),
(104, 2, 6, 'LIVE MUSICIANS', '2018-08-10 17:02:43', NULL),
(105, 2, 6, 'PANDITT FOR POOTA', '2018-08-10 17:02:43', NULL),
(106, 2, 6, 'BEAUTICIAN', '2018-08-10 17:02:43', NULL),
(107, 2, 6, 'PHOTOGRAPHER', '2018-08-10 17:02:54', NULL),
(108, 2, 7, 'AC ON RENT', '2018-08-10 17:04:22', NULL),
(109, 2, 7, 'BUY AND SELL PROPERTY', '2018-08-10 17:04:22', NULL),
(110, 2, 7, 'RENT A HOME', '2018-08-10 17:04:22', NULL),
(111, 2, 7, 'FURNITURE ON RENT', '2018-08-10 17:04:22', NULL),
(112, 2, 7, 'OLD AC FOR PURCHASE AND SELL', '2018-08-10 17:04:22', NULL),
(113, 2, 7, 'REFRIGERATOR ON RENT', '2018-08-10 17:04:22', NULL),
(114, 2, 7, 'OLD PC FOR SELL PURCHASE AND RENT', '2018-08-10 17:04:22', NULL),
(115, 2, 7, 'MEDI EQUIPMENT ON RENT', '2018-08-10 17:04:22', NULL);

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
(1, '1', 'HOME REPAIRS', '2018-08-10 16:12:19'),
(2, '1', 'LESSONS AND HOBBIES', '2018-08-10 16:12:19'),
(3, '2', 'BEAUTY AND HEALTH', '2018-08-10 16:12:51'),
(4, '2', 'BUSINESS AND SRVICES', '2018-08-10 16:12:51'),
(5, '2', 'LOANS AND INSURANCE', '2018-08-10 16:13:24'),
(6, '2', 'EVENT', '2018-08-10 16:13:24'),
(7, '2', 'SALES AND PAURCHASE', '2018-08-10 16:13:37');

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
(3, 'Yanbytes', 'testing', '', '74859632', '', 'uka.sheikabdullah@gmail.com', '', '', '', '', '', '', '', '', '', 'HDFC', 'Technopark', 'sheik', '', 'testing', '10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', '', '', '', '', 'yan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', '', '', '', '', 'asd@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-08-08 23:52:43', '0000-00-00 00:00:00');

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
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
