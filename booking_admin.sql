-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 05:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_user`
--

CREATE TABLE `ad_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad_user`
--

INSERT INTO `ad_user` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_username`, `user_password`) VALUES
(2, 'asif ahamed', '015122113213', 'asif@gmail.com', 'asif', '4297f44b13955235245b2497399d7a93'),
(3, 'Sonia Akter', '01636577854', 'sonia@gamil.com', 'sonia', 'd31cb1e2b7902e8e9b4d1793e94c38a0'),
(4, 'Akash ', '01521256445', 'akash@gmail.com', 'akash', '4297f44b13955235245b2497399d7a93');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(30) NOT NULL,
  `con_email` varchar(40) NOT NULL,
  `con_subject` varchar(100) NOT NULL,
  `con_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_name`, `con_email`, `con_subject`, `con_message`) VALUES
(2, 'test ss', 'akashvxc@gmail.com', 'Lorem Ipsum is simply dummy text of the printing.', 'nbnbvnbnb');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_book`
--

CREATE TABLE `ticket_book` (
  `ticket_id` int(11) NOT NULL,
  `ticket_arrive` date NOT NULL,
  `ticket_departure` date NOT NULL,
  `ticket_adults` int(11) NOT NULL,
  `ticket_children` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_book`
--

INSERT INTO `ticket_book` (`ticket_id`, `ticket_arrive`, `ticket_departure`, `ticket_adults`, `ticket_children`) VALUES
(1, '2001-01-12', '2001-02-12', 3, 4),
(2, '2022-03-12', '2022-03-20', 2, 3),
(3, '0000-00-00', '0000-00-00', 0, 0),
(4, '0000-00-00', '0000-00-00', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_user`
--
ALTER TABLE `ad_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `ticket_book`
--
ALTER TABLE `ticket_book`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_user`
--
ALTER TABLE `ad_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket_book`
--
ALTER TABLE `ticket_book`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
