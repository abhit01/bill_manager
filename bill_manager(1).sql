-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 07:55 AM
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
-- Database: `bill_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`email`) VALUES
('arluvsv2@gmail.com'),
('pranav@hotmail.com'),
('msabdjht@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_fetch`
--

CREATE TABLE `contact_fetch` (
  `name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_fetch`
--

INSERT INTO `contact_fetch` (`name`, `email`, `comments`) VALUES
('sc', 'aa@gmail.com', 'zdcv'),
('Pranav', 'pranav@hot.com', 'asudgyuwevfjbkwef');

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE `customer_register` (
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_register`
--

INSERT INTO `customer_register` (`firstname`, `lastname`, `email`, `username`, `password`, `contact`, `address`, `city`, `state`) VALUES
('Abhit', 'Raj', 'arluvsv2@gm', 'abhit06', '1234', '9955', 'qq', 'qq', 'qwq'),
('pranav', 'tiwary', 'pptp@gmail.', 'pranav', 'qwerty', '99', '98', '8', '8'),
('pranav', 'tiwary', 'pptp@gmail.', 'pranav', 'qwerty', '99', '98', '8', '8');

-- --------------------------------------------------------

--
-- Table structure for table `login_customer`
--

CREATE TABLE `login_customer` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_customer`
--

INSERT INTO `login_customer` (`username`, `password`, `type`) VALUES
('abhit06', '1234', 'cutomer'),
('pranav', 'qwerty', 'cutomer'),
('pranav', 'qwerty', 'cutomer');

-- --------------------------------------------------------

--
-- Table structure for table `login_seller`
--

CREATE TABLE `login_seller` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_seller`
--

INSERT INTO `login_seller` (`username`, `password`, `type`) VALUES
('qq', '11', 'seller'),
('abhit06', '1234', 'seller');

-- --------------------------------------------------------

--
-- Table structure for table `new_customer`
--

CREATE TABLE `new_customer` (
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_customer`
--

INSERT INTO `new_customer` (`firstname`, `lastname`, `email`, `contact`, `address`) VALUES
('asdfg', 'qweert', 'addy.thaku', '996655', '1123asd'),
('asdfg', 'qweert', 'addy.thakur99@gmail.com', '996655', '1123asd'),
('aa', 'aa', 'arluvsv2@gmail.com', '2213', '22'),
('aa', 'a', 'arluvsv2@gmail.com', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `username`, `quantity`, `date`) VALUES
(4, 'abhit', '12', '1112-12-12'),
(5, 'qwer', '122', '1111-12-31'),
(6, 'qwwa', '1', '0012-12-12'),
(7, 'aass', '22', '1111-12-12'),
(8, 'qwq', '11', '2019-12-29'),
(9, 'pranav', '20', '2019-12-30'),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, 'pranav', '21', '2019-12-16'),
(15, 'pranav', '11', '2019-12-30'),
(16, 'pranav', '2', '2019-12-24'),
(17, '', '', ''),
(18, '', '', ''),
(19, 'pranav', '12', '2019-12-04'),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, 'pranav', '122', '2019-12-11'),
(25, '', '', ''),
(26, '', '', ''),
(27, '', '', ''),
(28, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `seller_register`
--

CREATE TABLE `seller_register` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `business` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_register`
--

INSERT INTO `seller_register` (`firstname`, `lastname`, `email`, `username`, `password`, `business`, `contact`, `address`, `city`, `state`) VALUES
('Abhit', 'Raj', 'arluvsv2@g', 'abhit06', '1234', 'q', 'q', 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `status_login`
--

CREATE TABLE `status_login` (
  `username` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_login`
--

INSERT INTO `status_login` (`username`, `status`, `type`) VALUES
('abhit06', 'no', 'seller'),
('abhit06', 'no', 'seller'),
('abhit06', 'no', 'seller'),
('abhit06', 'no', 'seller'),
('abhit06', 'no', 'seller'),
('abhit06', 'no', 'seller'),
('abhit06', 'no', 'seller'),
('abhit06', 'no', 'seller'),
('abhit06', 'no', 'seller'),
('abhit06', 'yes', 'seller'),
('abhit06', 'yes', 'seller');

-- --------------------------------------------------------

--
-- Table structure for table `status_login_customer`
--

CREATE TABLE `status_login_customer` (
  `username` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_login_customer`
--

INSERT INTO `status_login_customer` (`username`, `status`, `type`) VALUES
('abhit06', 'no', 'customer'),
('abhit06', 'no', 'customer'),
('abhit06', 'no', 'customer'),
('pranav', 'no', 'customer'),
('abhit06', 'no', 'customer'),
('pranav', 'no', 'customer'),
('pranav', 'no', 'customer'),
('pranav', 'no', 'customer'),
('pranav', 'yes', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
