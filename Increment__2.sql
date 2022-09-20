-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 05:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wolves`
--
DROP DATABASE IF EXISTS `wolves`;
CREATE DATABASE IF NOT EXISTS `wolves` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wolves`;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE `donation` (
  `CustomerID` int(10) UNSIGNED NOT NULL,
  `SignatureID` int(10) UNSIGNED NOT NULL,
  `FoundationRepID` int(10) UNSIGNED NOT NULL,
  `PlushyID` int(10) UNSIGNED NOT NULL,
  `Contact` text DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Amount` decimal(12,2) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`CustomerID`, `SignatureID`, `FoundationRepID`, `PlushyID`, `Contact`, `Address`, `Amount`, `Date`) VALUES
(300, 1, 100, 200, 'animallover1996309@ymail.com', '6745 harlom road', '30.00', '2022-09-01'),
(301, 2, 101, 201, 'joycesmith97@gmail.com', '1707 bay st dr', '7.00', '2022-09-07'),
(302, 3, 102, 202, 'johnDoe@ymail.com', ' 1890 lime street', '56.00', '2022-09-22'),
(303, 4, 103, 203, 'joneDoe@gmail.com', ' 9990 capelive street', '14.00', '2018-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `foundationrep`
--

DROP TABLE IF EXISTS `foundationrep`;
CREATE TABLE `foundationrep` (
  `FoundationRepID` int(10) UNSIGNED NOT NULL,
  `SignatureID` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `Number` text DEFAULT NULL,
  `Location` varchar(20) DEFAULT NULL,
  `Establishment` varchar(50) DEFAULT NULL,
  `AvailableTime` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foundationrep`
--

INSERT INTO `foundationrep` (`FoundationRepID`, `SignatureID`, `FirstName`, `LastName`, `Number`, `Location`, `Establishment`, `AvailableTime`) VALUES
(100, 1, 'J. MICHAEL', 'CLINE', '(510) 703-9700', 'Connecticut', 'National Fish and Wildlife Foundation', '8am-9am'),
(101, 2, 'SYDNEY MCNIFF', 'JOHNSON', ' (415) 882-0374', ' Idaho and Washingto', 'National Fish and Wildlife Foundation', '8am-10am'),
(102, 3, 'Lisa ', 'Diekmann', ' (406) 848-2400 ', ' Wyoming-Idaho-Monta', 'YellowStone National Park', '9am-3pm'),
(103, 4, 'Phil ', 'Kushlan', ' (305) 669-0858 ', ' Miami and Stuart', 'Everglades National Park', '9am-3pm'),
(104, 5, 'Hon. Samuel ', ' Kuntai Ole Tunai E.', '(020) 268-8929/03 ', ' Kenya', 'Masai Mara National Park', '1pm-3pm'),
(105, 6, 'CHIEF CONSERVATOR ', ' FOREST', '91- (882)667-8883 ', ' Uttarakhand', 'Jim Corbett National Park', '7am-3pm'),
(106, 7, 'Chinese ', ' Government', '86- (10) 6225 -7807 ', ' Sichuan- Shaanxi an', 'Giant Panda National Park', '6am-3pm'),
(107, 8, 'Jeju Special ', 'Self-Governing Provi', ' 94-(1)-877130/877122 ', ' Jeju Islands', 'Hallasan National Park', '6am-3pm'),
(108, 9, 'Shigeru', 'Takada', '0(154) 65-6276', 'Eastern Hokkaido', 'Akan Mashu National P.', '6am-5pm');

-- --------------------------------------------------------

--
-- Table structure for table `plushyorder`
--

DROP TABLE IF EXISTS `plushyorder`;
CREATE TABLE `plushyorder` (
  `PlushyID` int(10) UNSIGNED NOT NULL,
  `WolfSpecies` text DEFAULT NULL,
  `OrderDate` date DEFAULT NULL,
  `ShippingDate` date DEFAULT NULL,
  `ArrivalDate` date DEFAULT NULL,
  `Size` text DEFAULT NULL,
  `FurQuality` text DEFAULT NULL,
  `Total` decimal(12,2) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plushyorder`
--

INSERT INTO `plushyorder` (`PlushyID`, `WolfSpecies`, `OrderDate`, `ShippingDate`, `ArrivalDate`, `Size`, `FurQuality`, `Total`, `Description`) VALUES
(200, 'Arctic Wolf', '2020-09-01', '2020-09-06', '2020-09-15', 'small', 'fluffy', '5.00', 'Happy to support wolves.'),
(201, 'Grey Wolf', '2020-10-01', '2020-10-09', '2020-09-30', ' micro-small', 'none-fluffy', '3.00', 'Wolves are so beautiful.'),
(202, 'Timber Wolf', '2022-09-07', '2022-09-14', '2022-09-29', ' Large', 'fluffy', '15.00', 'Thank you.'),
(203, 'Red Wolf', '2022-09-15', '2022-09-22', '2022-10-29', ' Medium', 'fluffy', '10.00', 'Thank you for the wolf.'),
(204, 'Ethiopian Wolf', '2022-11-01', '2022-11-11', '2022-11-17', ' Medium', 'fluffy', '10.00', 'Thank you for the wolf.'),
(205, 'Afrian Golden Wolf', '2022-09-08', '2022-09-15', '2022-09-28', ' Large', 'none-fluffy', '13.00', 'Thank you for the wolf.'),
(206, 'Japanese Wolf', '2022-08-01', '2022-08-17', '2022-08-25', ' Micro-small', 'fluffy', '5.00', 'Thank you for the wolf.'),
(207, 'Mongolian Wolf', '2019-09-01', '2019-09-17', '2019-09-30', ' small', 'none-fluffy', '4.00', 'Thank you for the wolf.'),
(208, 'Eurasian Wolf', '2017-09-06', '2017-09-20', '2017-10-04', ' large', 'fluffy', '15.00', 'Thank you for the wolf.'),
(209, 'Grey Wolf', '2022-09-07', '2022-09-14', '2022-09-30', 'small', 'fluffy', '5.00', ''),
(210, 'Mongolian Wolf', '2022-09-12', '2022-09-14', '2022-10-01', 'medium', 'fluffy', '15.00', 'Yeee!!! so excited.'),
(211, 'Eurasian Wolf', '2024-09-28', '2024-10-16', '2024-10-31', 'large', 'fluffy', '15.00', ''),
(213, 'ArcticWolf', '0000-00-00', '0000-00-00', '0000-00-00', 'micro-small', 'none-flufy', '0.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `signatures`
--

DROP TABLE IF EXISTS `signatures`;
CREATE TABLE `signatures` (
  `SignatureID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Sponsor` text DEFAULT NULL,
  `Region` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signatures`
--

INSERT INTO `signatures` (`SignatureID`, `Name`, `Sponsor`, `Region`) VALUES
(1, 'Alana Hurtmen', 'John Fo', 'USA'),
(2, 'Chloe Lee', 'Mia Daniel', 'Spain'),
(3, 'James Carter', 'Daniel Quawn', 'Russia'),
(4, ' Sarabi McNill', 'Dawn Showmen', 'Asia'),
(5, ' Jade Jackson', 'Joe Michelle', 'Britian'),
(6, ' Nicole James', 'Haley Joe', 'France'),
(7, ' Jesus Mchall', 'Bre Showmen', 'Asia'),
(8, ' Sonya Lee', 'Nia Jacobson', 'Canada'),
(9, 'Jaden James', 'James Adam', 'USA'),
(10, 'Vitalis James', 'Chloe Jone', 'USA'),
(12, 'Carlo Hamton', 'Josh Doe', 'France'),
(14, 'Levi Caten', 'black pink', 'England'),
(16, '', '', ''),
(17, 'Name is required', 'Sponsor is required', ''),
(18, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`CustomerID`),
  ADD KEY `FoundationRepID` (`FoundationRepID`),
  ADD KEY `donation_ibfk_3` (`PlushyID`),
  ADD KEY `donation_ibfk_1` (`SignatureID`);

--
-- Indexes for table `foundationrep`
--
ALTER TABLE `foundationrep`
  ADD PRIMARY KEY (`FoundationRepID`),
  ADD KEY `SignatureID` (`SignatureID`);

--
-- Indexes for table `plushyorder`
--
ALTER TABLE `plushyorder`
  ADD PRIMARY KEY (`PlushyID`);

--
-- Indexes for table `signatures`
--
ALTER TABLE `signatures`
  ADD PRIMARY KEY (`SignatureID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `CustomerID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT for table `foundationrep`
--
ALTER TABLE `foundationrep`
  MODIFY `FoundationRepID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `plushyorder`
--
ALTER TABLE `plushyorder`
  MODIFY `PlushyID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `signatures`
--
ALTER TABLE `signatures`
  MODIFY `SignatureID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`SignatureID`) REFERENCES `signatures` (`SignatureID`),
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`FoundationRepID`) REFERENCES `foundationrep` (`FoundationRepID`),
  ADD CONSTRAINT `donation_ibfk_3` FOREIGN KEY (`PlushyID`) REFERENCES `plushyorder` (`PlushyID`);

--
-- Constraints for table `foundationrep`
--
ALTER TABLE `foundationrep`
  ADD CONSTRAINT `foundationrep_ibfk_1` FOREIGN KEY (`SignatureID`) REFERENCES `signatures` (`SignatureID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
