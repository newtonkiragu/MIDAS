-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 29, 2020 at 04:10 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iliad`
--

-- --------------------------------------------------------

--
-- Table structure for table `appform`
--

CREATE TABLE `appform` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` int(10) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Ethnicity` varchar(20) NOT NULL,
  `Institution` varchar(225) NOT NULL,
  `Course` varchar(225) NOT NULL,
  `goodConduct` varchar(225) NOT NULL,
  `applicationLetter` varchar(225) NOT NULL,
  `uploadedID` varchar(225) NOT NULL,
  `letterFromInstitute` varchar(225) NOT NULL,
  `insurance` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appform`
--

INSERT INTO `appform` (`id`, `username`, `email`, `phone`, `Gender`, `Ethnicity`, `Institution`, `Course`, `goodConduct`, `applicationLetter`, `uploadedID`, `letterFromInstitute`, `insurance`) VALUES
(27, '', '', 0, '', '', '', '', '5f48d2669d1731.20604655.docx', '', '', '', ''),
(28, '', '', 0, '', '', '', '', '', '5f48d26853d624.84805957.jpg', '', '', ''),
(29, '', '', 0, '', '', '', '', '', '', '5f48d269a5e311.28720422.docx', '', ''),
(30, '', '', 0, '', '', '', '', '', '', '', '5f48d26a9f6553.36369574.docx', ''),
(31, '', '', 0, '', '', '', '', '', '', '', '', ''),
(32, '', '', 0, '', '', '', '', '', '', '', '', '5f48d2c2d0cc50.60449240.docx'),
(33, '', '', 0, '', '', '', '', '', '', '', '', '5f48d2c66c7df3.42272030.docx'),
(34, '', '', 0, '', '', '', '', '', '', '', '', '5f48d2d74710e8.05416384.docx'),
(35, '', '', 0, '', '', '', '', '', '', '', '', '5f48d2efddc416.90145860.docx'),
(36, 'Nbase', 'Nbase@gmail.com', 724342139, 'Male', 'male', 'male', 'male', '', '', '', '', ''),
(37, 'root', 'karanunewton4@gmail.com', 714895623, 'male', 'nairobi', 'institution', 'course', '', '', '', '', ''),
(38, 'root', 'newtonkiragu@protonmail.ch', 714895623, 'male', 'kikuyu?', 'institution', 'course', '', '', '', '', ''),
(39, 'root', 'karanunewton4@gmail.com', 714895623, 'male', 'nairobi', 'institution', 'course', '', '', '', '', ''),
(40, 'root', 'karanunewton4@gmail.com', 714895623, 'male', 'nairobi', 'institution', 'course', '', '', '', '', ''),
(41, 'root', 'karanunewton4@gmail.com', 714895623, 'male', 'nairobi', 'institution', 'course', '', '', '', '', ''),
(42, 'root', 'karanunewton4@gmail.com', 714895623, 'male', 'nairobi', 'institution', 'course', '', '', '', '', ''),
(43, 'root', 'karanunewton4@gmail.com', 714895623, 'male', 'nairobi', 'institution', 'course', '5f4a7545cca873.29293308.pdf', '5f4a7545cc52e1.85225238.pdf', '5f4a7545cc77b8.39379710.pdf', '5f4a7545cc8929.28376315.pdf', '5f4a7545cc9915.77339816.pdf'),
(44, 'root', 'karanunewton4@gmail.com', 714895623, 'male', 'nairobi', 'institution', 'course', '5f4a777d8f2967.76022808.pdf', '5f4a777d8ef165.89789896.pdf', '5f4a777d8f0e12.55429671.pdf', '5f4a777d8f1885.88309397.pdf', '5f4a777d8f2125.25554113.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(2, 'Jim ', 'jim@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2020-07-21 06:41:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appform`
--
ALTER TABLE `appform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appform`
--
ALTER TABLE `appform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
