-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2024 at 12:00 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Table structure for table `doctors`
DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `specialty` varchar(50) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `doctors`
INSERT INTO `doctors` (`name`, `specialty`) VALUES
('Dr. Gabriel', 'Orthodontics'),
('Dr.Thomas', 'Oral surgery'),
('Dr. Emma', 'Pediatric dentistry');
('Dr. David', 'Prosthodontics');

-- Table structure for table `patients`
DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `patients`
INSERT INTO `patients` (`name`, `birthdate`) VALUES
('John Doe', '1990-05-15'),
('Alice Smith', '1975-12-10');
('Jane Doa', '1985-08-20'),
('Marc Fcb', '1998-04-22'),

-- Table structure for table `appointments`
DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `appointment_date` datetime NOT NULL,
  PRIMARY KEY (`appointment_id`),
  FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`doctor_id`),
  FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `appointments`
INSERT INTO `appointments` (`doctor_id`, `patient_id`, `appointment_date`) VALUES
(1, 1, '2024-02-15 09:00:00'),
(2, 2, '2024-02-16 10:30:00'),
(3, 3, '2024-02-17 14:15:00');
(4, 4, '2024-02-18 11:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
