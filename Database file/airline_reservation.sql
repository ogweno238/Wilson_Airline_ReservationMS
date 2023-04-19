-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2021 at 08:24 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `airline_reservation`
--
CREATE DATABASE IF NOT EXISTS `airline_reservation` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `airline_reservation`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(20) NOT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `staff_id` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `pwd`, `staff_id`, `name`, `email`) VALUES
('admin', '1212', 'admin', 'Samuel Ouma', 'samouma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `airline_details`
--

CREATE TABLE IF NOT EXISTS `airline_details` (
  `airline_no` varchar(10) NOT NULL,
  `from_city` varchar(20) DEFAULT NULL,
  `to_city` varchar(20) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `seats_economy` int(5) DEFAULT NULL,
  `seats_airlineiness` int(5) DEFAULT NULL,
  `price_economy` int(10) DEFAULT NULL,
  `price_airlineiness` int(10) DEFAULT NULL,
  `tablet_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`airline_no`,`departure_date`),
  KEY `tablet_id` (`tablet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airline_details`
--

INSERT INTO `airline_details` (`airline_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_airlineiness`, `price_economy`, `price_airlineiness`, `tablet_id`) VALUES
('N-399', 'Kericho', 'Eldoret', '2020-02-26', '2020-02-27', '12:23:00', '03:43:00', 60, 60, 1500, 1000, '3'),
('N-401', 'Nairobi', 'Kericho', '2020-02-24', '2020-02-25', '10:00:00', '22:00:00', 38, 50, 1000, 800, '3'),
('N4013', 'KISUMU', 'ELDORET', '2020-02-24', '2020-02-25', '11:11:00', '23:11:00', -46, 92, 1500, 1000, '3');

-- --------------------------------------------------------

--
-- Table structure for table `airline_login`
--

CREATE TABLE IF NOT EXISTS `airline_login` (
  `customer_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_logindatetime` varchar(200) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airline_login`
--

INSERT INTO `airline_login` (`customer_id`, `password`, `last_logindatetime`) VALUES
('kerry', '1212', '2020-02-24 15:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` varchar(20) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL DEFAULT '',
  `phone_no` varchar(15) DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `password`, `name`, `email`, `phone_no`, `address`) VALUES
('kerry', '1212', 'kerry stacy', 'kerry@gmail.com', '83468364', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `frequent_traveler_details`
--

CREATE TABLE IF NOT EXISTS `frequent_traveler_details` (
  `frequent_traveler_no` varchar(20) NOT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `mileage` int(10) DEFAULT NULL,
  PRIMARY KEY (`frequent_traveler_no`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE IF NOT EXISTS `passengers` (
  `passenger_id` int(10) NOT NULL,
  `pnr` varchar(15) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `meal_choice` varchar(5) DEFAULT NULL,
  `frequent_flier_no` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`passenger_id`,`pnr`),
  KEY `pnr` (`pnr`),
  KEY `frequent_flier_no` (`frequent_flier_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`) VALUES
(1, '9221343', 'KERRY', 23, 'male', 'yes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE IF NOT EXISTS `payment_details` (
  `payment_id` varchar(20) NOT NULL,
  `pnr` varchar(15) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_amount` int(6) DEFAULT NULL,
  `payment_mode` varchar(15) DEFAULT NULL,
  `customer_id` varchar(200) NOT NULL,
  ` booking_status` varchar(200) NOT NULL,
  `airline_no` varchar(200) NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `pnr` (`pnr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`, `customer_id`, ` booking_status`, `airline_no`) VALUES
('103927612', '9221343', '2020-02-24', 1850, 'M-Pesa', 'kerry', '', 'N4013'),
('456066894', '3526306', '2020-02-24', 1850, 'M-Pesa', 'kerry', '', 'N4013'),
('494107055', '3526306', '2020-02-24', 1850, 'Cash', 'kerry', '', 'N4013');

--
-- Triggers `payment_details`
--
DROP TRIGGER IF EXISTS `update_ticket_after_payment`;
DELIMITER //
CREATE TRIGGER `update_ticket_after_payment` AFTER INSERT ON `payment_details`
 FOR EACH ROW UPDATE ticket_details
     SET booking_status='CONFIRMED', payment_id= NEW.payment_id
   WHERE pnr = NEW.pnr
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tablet_details`
--

CREATE TABLE IF NOT EXISTS `tablet_details` (
  `tablet_id` varchar(10) NOT NULL,
  `tablet_type` varchar(20) DEFAULT NULL,
  `total_capacity` int(5) DEFAULT NULL,
  `active` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`tablet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablet_details`
--

INSERT INTO `tablet_details` (`tablet_id`, `tablet_type`, `total_capacity`, `active`) VALUES
('3', 'Tablet', 30, 'Yes'),
('N401', 'Executive', 62, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE IF NOT EXISTS `ticket_details` (
  `pnr` varchar(15) NOT NULL,
  `date_of_reservation` date DEFAULT NULL,
  `airline_no` varchar(10) DEFAULT NULL,
  `journey_date` date DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `booking_status` varchar(20) DEFAULT NULL,
  `no_of_passengers` int(5) DEFAULT NULL,
  `lounge_access` varchar(5) DEFAULT NULL,
  `priority_checkin` varchar(5) DEFAULT NULL,
  `insurance` varchar(5) DEFAULT NULL,
  `payment_id` varchar(20) DEFAULT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pnr`),
  KEY `customer_id` (`customer_id`),
  KEY `journey_date` (`journey_date`),
  KEY `airline_no` (`airline_no`),
  KEY `airline_no_2` (`airline_no`,`journey_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
