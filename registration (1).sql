-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 07:12 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(70) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `degree` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(45) NOT NULL,
  `cpassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `mobile`, `degree`, `email`, `password`, `cpassword`) VALUES
('DEEPANSHU SAXENA', '2232332232', 'Waterfie', 'deepan@gmail.com', '$2y$10$DGDJbtTwSahMEaaxX.sWVO4gxQr.yM4rBy67KQ', '$2y$10$9QlFIyMRz1oIy3zhDhKjzOcW.fl4jJ7px'),
('DEEPANSHU SAXENA', '2233223320', 'Waterfiel', 'deep002@gmail.com', '$2y$10$NfESMG4VS95.Fr07hQIUw.MYrBzUZT40.5YsCl', '$2y$10$Smo.QGHvt5QYXiyGlt/1yOviYPNmJ8BKF'),
('deepanshu saxena', '9034215667', 'btech', 'deepanshu@gmail.com', '$2y$10$zWl9PyODLqLflkl9EyAuV./5q4QZ4i/aM7a6mo', '$2y$10$xC3AiKbLMuCULn.RwWuYw.0MIuCH7iVtr'),
('deepanshu saxena', '9045123445', 'BTECH', 'deephu12@gmail.com', '$2y$10$m6IkJaFQ9XYSn9IDF7WPV.E8JSGvWPvNbJkimv', '$2y$10$lyJMn8EEB.lwDy3T7wh3Oe4v7xKY9G3/B'),
('DEEPANSHU SAXENA', '8476832779', 'BTECH', 'deepanshu1907@gmail.com', '$2y$10$PmmNbouU59vSLP.CQv6QvuCN6lKhU42ZEv9v3G', '$2y$10$pNqRyet.g7MDU92RAiBZhe12gy4TGRELY'),
('ax', '1234567890', 'case', 'deepanshu19072002@gmail.com', '$2y$10$kCiSLPcN7R5FOTK/4QkV2uLYIVwn15ZUUWzxny', '$2y$10$PvtHvGjpKQ6l2nX3bNAM2ub/5EArchMYu'),
('axe', '13113', 'ffvf', 'deepanshu2@gmail.com', '$2y$10$C8pKmYiWSglLFCZftKsccu0FQgR8tk.9Hdkpx0', '$2y$10$kVXgf5KEYQZ0C4XrWm83YOFmf584yJ4IB'),
('DEEPANSHU SAXENA', '8678678662', 'btech', 'deepanshu192002@gmail.com', '$2y$10$6pWbZvEd1k12tDLAvklp1uatY4KS3fdkMDAK/B', '$2y$10$FhnfpyMLERZKkEgeHpiqd.vd0YNplxJrR'),
('DEEPANSHU SAXENA', '8476832779', 'BTECH', 'deepanshu190720@gmail.com', '$2y$10$B2/G8CIfcZrTFSnUMj8ICOq7Bm.VaDOPISMzHi', '$2y$10$lgB8Bc7gksgCK956BrgrqeeP1QIBSmV58'),
('DEEPANSHU SAXENA', '8476832779', 'BTECH', 'deepanshu2002@gmail.com', '$2y$10$JsiPxn6PXrKSXuovkeFVjOIYMl//amjkO5MnVF', '$2y$10$2ie.LfXalYQEs/..rGIb2OZPqaEw9nzjZ'),
('DEEPANSHU SAXENA', '8476832779', 'BTECH', 'deepanshu1962@gmail.com', '$2y$10$DY9Q8xCJZkEBbO2Fcb2WvulO3KTDFlGIlPF/cl', '$2y$10$5sBns1mf8yqZj9S8E6gQ9O9jyqyMK1Oh.'),
('DEEPANSHU SAXENA', '8476832779', 'BTECH', 'deepanshu2000@gmail.com', '$2y$10$TkpkjDZ6V9wN5qdXxDLwKOXZupfk3ia.FsdQAq', '$2y$10$dO08/EmwgRxGQx1x4DeMAuqx0HVlvM3Tj'),
('Himanshu Saxena', '3245673222', 'BTECH', 'himanshu2002@gmail.com', '$2y$10$GxkJt/2KnVh5cBjUwW7vK.jkB2sNrBtltojJC6', '$2y$10$JP/BBL4M08Kft7J5n9hdvur2wf4II9XPZ'),
('SVKSv', '8476832779', 'BTECH', 'deepanshu2022@gmail.com', '$2y$10$KjDvkZmbtcuWco2/mLRU3eoUMUJ002XueGhcMh', '$2y$10$SJNpBS9hwReP76nzxsQ.ueqJklVJhue5k'),
('DEEPANSHU SAXENA', '1234567890', 'BTECH', 'deepanshu190722@gmail.com', '$2y$10$T2Xpn2T4YiZD.Afk/bo4v.WIus4mGFImnxh7KN', '$2y$10$e9ijvEhTBbLMXop3BMRr1uzmeZVWRKUkP'),
('Nisha Kumari', '4356782198', 'BSC', 'nisha2001@gmail.com', '$2y$10$HIVV0k75ugnklfezs9DnyePvfzfFPY0sCo374a', '$2y$10$VgHPku6fvBo6Vm/9fFH/meRQvPjRDIIkp'),
('DEEPANSHU SAXENA', '8475683277', 'BTECH', 'balajisvks22@gmail.com', 'harigarh123', 'harigarh123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
