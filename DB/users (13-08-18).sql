-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 08:27 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `phone`, `username`, `password`, `role`, `status`, `date_time`) VALUES
(198, 'admin', 'admin', 'admin@gmail.com', '', 'admin', 'admin', 'admin', 'active', '2018-08-06 14:19:31'),
(200, 'dsadasd', 'asdasd', 'asd@asd.com', '', '', '', '', '', '2018-08-06 14:30:06'),
(215, 'asdsa', 'dasda', 'asd@gmail.com', '', '', '', '', '', '2018-08-07 14:14:50'),
(224, 'dda', 'dsadas', 'asddasdsa@yahoo.com', '3456789023', '', '', 'user', '', '2018-08-13 23:27:50'),
(214, 'asdasaasasd', 'asdasd', 'sheik@gmail.com', '', '', '', '', '', '2018-08-07 14:14:30'),
(211, 'sreejith', 'k', 'sreeji1980@gmail.com', '', '', '', 'user', '', '2018-08-06 17:42:41'),
(220, 'sugi', 'suganya', 'sugatest11@gmail.com', '9994563904', '', '', 'user', '', '2018-08-13 22:37:56'),
(216, 'sugi', '.suganya', 'sugi.suganya80@gmail.com', '21213113123123', '', '', 'user', '', '2018-08-08 13:22:19'),
(199, 'sheik', 'abdullah', 'uka.sheikabdullah@gmail.com', '', '', '', '', '', '2018-08-06 14:29:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
