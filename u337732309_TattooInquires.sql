-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2023 at 05:10 PM
-- Server version: 10.5.17-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u337732309_TattooInquires`
--

-- --------------------------------------------------------

--
-- Table structure for table `formsubmission`
--

CREATE TABLE `formsubmission` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `placement` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `coverup` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `tattoo_size` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `font` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preferred_days` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preferred_time` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `specific_date` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comments` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `previous_client` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `placement` longblob DEFAULT NULL,
  `reference1` longblob DEFAULT NULL,
  `reference2` longblob DEFAULT NULL,
  `reference3` longblob DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



--
-- Indexes for table `formsubmission`
--
ALTER TABLE `formsubmission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageid`),
  ADD KEY `id` (`id`);



--
-- AUTO_INCREMENT for table `formsubmission`
--
ALTER TABLE `formsubmission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id`) REFERENCES `formsubmission` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
