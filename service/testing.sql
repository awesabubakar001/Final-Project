-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 06:47 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_state_city`
--

CREATE TABLE IF NOT EXISTS `country_state_city` (
  `id` int(11) NOT NULL,
  `country` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_state_city`
--

INSERT INTO `country_state_city` (`id`, `country`, `state`, `city`) VALUES
(1, 'Westlands', 'Hands and Feet', 'signature hand'),
(2, 'Westlands', 'Hands and Feet', 'signature feet'),
(3, 'Westlands', 'Hands and Feet', 'reventon hand'),
(4, 'Westlands', 'Haircut', 'beskope cut'),
(5, 'Westlands', 'Haircut', 'gentlemans cut'),
(6, 'Westlands', 'Haircut', 'beard'),
(7, 'Westlands', 'Facials', 'mini facials'),
(8, 'Westlands', 'Facials', 'signature'),
(9, 'Westlands', 'Facials', 'steam facials'),
(10, 'Runda', 'facials', 'signature'),
(11, 'Runda', 'facials', 'steam facial'),
(12, 'Runda', 'haircut', 'ladies fresh cut'),
(13, 'Runda', 'haircut', 'line up'),
(14, 'Kitusuru', 'Facials', 'Mini facials'),
(15, 'Kitusuru', 'Facials', 'steam facial'),
(16, 'Kitusuru', 'facials', 'signature'),
(17, 'Kitusuru', 'facials', 'mini facial\r\n'),
(18, 'Westlands', 'Hands and Feet', 'reventon hand'),
(19, 'Westlands', 'Hands and Feet', 'signature hand'),
(20, 'Westlands', 'Hands and Feet', 'reventon feet'),
(21, 'Westlands', 'Hands and Feet', 'signature hand');

-- --------------------------------------------------------

--
-- Table structure for table `country_state_city_form_data`
--

CREATE TABLE IF NOT EXISTS `country_state_city_form_data` (
  `id` int(11) NOT NULL,
  `country` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_state_city_form_data`
--

INSERT INTO `country_state_city_form_data` (`id`, `country`, `state`, `city`) VALUES
(1, 'Westlands', 'Hands and Feet', 'Hands and Feet city,Rochester,New Rochelle'),
(2, 'Westlands', 'Hands and Feet', 'Hands and Feet city,Albany,New Rochelle'),
(3, 'Westlands', 'Hands and Feet', 'Buffalo,Albany,Yonkers'),
(4, 'Westlands', 'Hands and Feet', 'Hands and Feet city,Buffalo,Rochester,New Rochelle'),
(5, 'Runda', 'facials', 'Toronto,Ottawa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_state_city`
--
ALTER TABLE `country_state_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_state_city_form_data`
--
ALTER TABLE `country_state_city_form_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_state_city`
--
ALTER TABLE `country_state_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `country_state_city_form_data`
--
ALTER TABLE `country_state_city_form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
