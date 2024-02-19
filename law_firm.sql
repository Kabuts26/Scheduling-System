-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 10:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law_firm`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `law_office_id` int(11) NOT NULL,
  `law_office` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `fname`, `lname`, `date`, `time`, `law_office_id`, `law_office`, `status`) VALUES
(50, 'Joshua', 'Pascual', '2022-02-22', '08:00 AM', 2, 'Pascual Law Firm', 'pending'),
(51, 'Joshua', 'Pascual', '2022-02-22', '10:00 AM', 2, 'Pascual Law Firm', 'pending'),
(52, 'Joshua', 'Pascual', '2022-02-21', '08:00 AM', 3, 'Aguilera Law Firm', 'pending'),
(53, 'Joshua', 'Pascual', '2022-02-23', '08:00 AM', 2, 'Pascual Law Firm', 'pending'),
(54, 'Joshua', 'Pascual', '2022-02-25', '09:00 AM', 2, 'Pascual Law Firm', 'pending'),
(55, 'Joshua', 'Pascual', '2023-11-15', '09:00 AM', 2, 'Pascual Law Firm', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `atty`
--

CREATE TABLE `atty` (
  `atty_id` int(11) NOT NULL,
  `office_name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `law_school` varchar(255) NOT NULL,
  `year_graduated` varchar(255) NOT NULL,
  `office_address` varchar(255) NOT NULL,
  `school_address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `office_contact` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atty`
--

INSERT INTO `atty` (`atty_id`, `office_name`, `lname`, `fname`, `law_school`, `year_graduated`, `office_address`, `school_address`, `email`, `pass`, `gender`, `office_contact`, `contact_no`, `img`) VALUES
(2, 'Pascual Law Firm', 'Pascual', 'Joshua', 'University of Makati College of Law', '1996-2001', 'Sta. Cruz Laguna', 'Makaty City', 'joshua199215@gmail.com', '$2y$10$QrzHf7SNaROWhkkIRZdmr.Lr8lykY0XqQ/NF1Xgmf.qIkeKu/To7O', 'Male', '09101751481', '099911123127', 'img/'),
(3, 'Aguilera Law Firm', 'Aguilera', 'Erwin', 'University of Batangas College of Law', '1996-2001', 'P Guevara st. Sta. Cruz Laguna', 'Batangas City', 'aguileraerwin96@gmail.com', '$2y$10$ClgCeiiQ1hOPqTyr/Mex/uhxrDPKoHQPFp2QBWm2f4bqUNwBYByt.', 'Male', '0900099999', '099911123127', 'img/attya.png'),
(9, 'Coronado Law Firm', 'Coronado', 'John', 'Nagcarla Law School', '2002-2012', 'Nagcarlan Laguna', 'Nagcarlan Laguna', 'coronado@gmail.com', '$2y$10$gfqWzaovU6TdDTgmPBPf2ekValNu5mTWwhTdOixJZJbpM1NX4rwxC', 'Male', '09101751481', '09101751481', 'img/');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `middle_int` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `fname`, `lname`, `middle_int`, `contact_no`, `email`, `gender`, `password`, `age`, `address`, `img`) VALUES
(6, '', '', '', '', 'admin', '', '$2y$10$CRuRDH1anNk5ObZNF57/m.hJkG3Tx7mmfmw17eS4ST6h0zcBisby6', 0, '', ''),
(9, 'joshua', 'Pascual', 'B', '09101751481', 'jp_pascual_15@yahoo.com', 'Male', '$2y$10$1O1VpwMbPd411we18S./JOAURxsUMJ0n72R3clJ1d4r4ZzgEOg4zC', 29, 'Sta. Cruz Laguna', ''),
(10, 'Joshua', 'Pascual', 'E', '09101751481', 'cathlynnual@gmail.com', 'Male', '$2y$10$SjcMX.CZgll2d/PUt6Y7g.vnY7TARtEjOmpdQehglHCSIn4xsAR4i', 20, 'Sta. Cruz Laguna', 'img/atty1.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sender`, `receiver`, `message`, `id`) VALUES
('cathlynnual@gmail.com', '2', 'heow', 129),
('2', 'cathlynnual@gmail.com', 'bakit', 130);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atty`
--
ALTER TABLE `atty`
  ADD PRIMARY KEY (`atty_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `atty`
--
ALTER TABLE `atty`
  MODIFY `atty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
