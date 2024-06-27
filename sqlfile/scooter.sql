-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2024 at 03:33 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id22372249_rkcl_escooter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '12345', '2024-06-26 13:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `name` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `name`, `message`, `created_at`) VALUES
(1, 0, 'dsadas', 'sadasda', '2024-06-23 06:44:26'),
(2, 1, 'asdas', 'adas', '2024-06-23 06:44:32'),
(3, 1, 'lamaw', 'oo nga no', '2024-06-23 06:51:06'),
(5, 4, 'hey_12', 'omzig', '2024-06-23 06:51:36'),
(6, 0, 'Ma. Kyla A. Capanay', 'penge uno ', '2024-06-26 13:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
(1, 'test@gmail.com', 2, '22/06/2017', '25/06/2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 1, '2017-06-19 20:15:43'),
(2, 'test@gmail.com', 3, '30/06/2017', '02/07/2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 2, '2017-06-26 20:15:43'),
(3, 'test@gmail.com', 4, '02/07/2017', '07/07/2017', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ', 2, '2017-06-26 21:10:06'),
(4, 'christiandasdasdsad@gmail.com', 3, '14/02/2002', '16/02/2002', 'adada', 0, '2024-05-31 09:51:20'),
(5, 'christiandasdasdsad@gmail.com', 2, '14/06/2024', '16/06/2024', 'thank you', 1, '2024-06-14 08:46:19'),
(6, 'christian@gmail.com', 1, '20/06/2024', '21/06/2024', 'adsa', 1, '2024-06-20 07:29:59'),
(7, 'kylacapanay@gmail.com', 1, '27/06/2024', '28/06/2024', 'BGC', 1, '2024-06-26 13:18:47'),
(8, 'maiwatvincent@gmail.com', 1, '03/07/2024', '10/07/2024', 'hehe pahiram', 0, '2024-06-26 13:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Kemilng', '2017-06-18 16:24:34', '2024-06-10 13:44:25'),
(2, 'HX', '2017-06-18 16:24:50', '2024-06-10 15:32:14'),
(3, 'Kaabo', '2017-06-18 16:25:03', '2024-06-10 13:44:40'),
(4, 'Segway', '2017-06-18 16:25:13', '2024-06-10 13:44:51'),
(5, 'Tomini', '2017-06-18 16:25:24', '2024-06-10 13:45:00'),
(6, 'Niu', '2017-06-19 06:22:13', '2024-06-10 14:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Blk 74 lot 3 Kaluwalhatian Street																								', 'RKCL@gmail.com', '09569321078');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Harry Den', 'webhostingamigo@gmail.com', '2147483647', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-06-18 10:03:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <A href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</A>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>'),
(2, 'Privacy Policy', 'privacy', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'About Us ', 'aboutus', 'Welcome!Your go-to destination for convenient and eco-friendly e-scooter rentals. Our mission is to revolutionize urban mobility by providing a sustainable and fun alternative to traditional transportation. Founded with a vision to reduce traffic congestion and environmental impact, we offer a fleet of high-quality, easy-to-use e-scooters available for rent throughout the city.\r\n\r\nWe believe in making your journey as smooth and enjoyable as possible. Whether you\'re commuting to work, exploring the city, or simply running errands, our e-scooters provide a hassle-free and efficient way to get around. Our user-friendly mobile app allows you to find, unlock, and ride our e-scooters with ease, ensuring you have a seamless experience from start to finish.\r\n\r\nSafety and customer satisfaction are at the heart of what we do. Our e-scooters are regularly maintained and equipped with the latest safety features, so you can ride with confidence. Plus, our dedicated customer support team is always ready to assist you with any questions or concerns.\r\n\r\nJoin us in embracing the future of transportation. Rent an e-scooter today and enjoy the freedom to ride wherever your adventures take you.'),
(11, 'FAQs', 'faqs', '																														<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Address------Test &nbsp; &nbsp;dsfdsfds</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(1, 'anuj.lpu1@gmail.com', '2017-06-22 16:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(1, 'test@gmail.com', 'Test Test', '2017-06-18 07:44:31', 1),
(2, 'test@gmail.com', '\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilis', '2017-06-18 07:46:05', 1),
(3, 'christian@gmail.com', 'aight', '2024-06-20 07:44:01', 1),
(4, 'christian@gmail.com', 'again', '2024-06-20 07:46:32', 1),
(5, 'christian@gmail.com', 'adsa', '2024-06-20 07:48:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `RegDate`, `UpdationDate`) VALUES
(1, 'Harry Den', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2147483647', NULL, NULL, NULL, '2017-06-17 19:59:27', '2017-06-26 21:02:58'),
(2, 'AK', 'anuj@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '8285703354', NULL, NULL, NULL, '2017-06-17 20:00:49', '2017-06-26 21:03:09'),
(3, 'Mark K', 'webhostingamigo@gmail.com', 'f09df7868d52e12bba658982dbd79821', '09999857868', '03/02/1990', 'PKL', 'PKL', '2017-06-17 20:01:43', '2017-06-17 21:07:41'),
(4, 'Tom K', 'test@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '9999857868', '', 'PKL', 'XYZ', '2017-06-17 20:03:36', '2017-06-26 19:18:14'),
(5, 'Christian Mendoza', 'christian@gmail.com', '202cb962ac59075b964b07152d234b70', '0956938888', '14/12/2002', 'BLk 74 lot 3', 'Pasig', '2024-05-31 09:49:40', '2024-06-20 07:41:34'),
(6, 'Rey Baylon ', 'imaqtrey2017@gmail.com', '79e50d388d07b6cc073ae684bf61131c', '9397278434', NULL, NULL, NULL, '2024-06-26 13:13:50', NULL),
(7, 'Rey Baylon ', 'imaqtrey2017@gmail.com', '79e50d388d07b6cc073ae684bf61131c', '9397278434', NULL, NULL, NULL, '2024-06-26 13:13:50', NULL),
(8, 'Ma. Kyla A. Capanay', 'kylacapanay@gmail.com', 'd55199e87381d21d1cfa78feccc465de', '9234177984', NULL, NULL, NULL, '2024-06-26 13:14:39', NULL),
(9, 'Vincent', 'maiwatvincent@gmail.com', 'c02c7b970ec2b5dcf09d006e629d0975', '9693827360', NULL, NULL, NULL, '2024-06-26 13:20:06', NULL),
(10, 'chan', 'chan@gmail.com', '202cb962ac59075b964b07152d234b70', '9215606459', NULL, NULL, NULL, '2024-06-26 13:22:55', NULL),
(11, 'Seya Capanay', 'seyacapanay@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '9911018453', NULL, NULL, NULL, '2024-06-26 13:33:00', NULL),
(12, 'RKCL', 'RKCL@gmail.com', 'dba69bb81b71650966af3f1d9beb8f63', '999345421', NULL, NULL, NULL, '2024-06-27 15:15:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `RegDate`, `UpdationDate`) VALUES
(1, 'Lightweight', 1, 'Foldable Scooter\n\nDimensions: 925 x 1060 x 135mm\nWeight: 8kg\nFrame Material: Aluminum Alloy\nWheel Size: 8 Inches\nRated Power of Motor: 180W\nMax Speed: 18km/h\nMileage: 5-10km\nMax Gradient: 5\nIngress Protection: IP54\nBattery Capacity: 25.2V, 2600mAh\nCharger: 25.2V, 1A\nCharging Time: About 2.5h\nMax Load: 100kg\nOperating Temperature: 0-25', 100, 'Electric', 2021, 1, 'hehe.jpg', 'scootergar5.jpg', 'scootergar6.jpg', 'scootergar7.jpg', 'scootergar8.jpg', '2017-06-19 11:46:23', '2024-06-14 08:36:24'),
(2, 'X7 E-SCOOTER', 2, 'Max supported weight: 100kg\nMax speed: 32k/ph.\nMax distance: 25km.', 150, 'Electric', 2023, 1, 'x7to2.jpg', 'scootergar10.jpg', 'scootergar11.jpg', 'scootergar12.jpg', 'scootergar13.jpg', '2017-06-19 16:16:17', '2024-06-23 07:40:29'),
(3, 'Wolf King Gt', 3, '2000W x2\nDual Motors\n\n180 Km\nMax. Range\n\n72V 35AH\nBattery Capacity\n\n100+ Km/h\nMax Speed\n\n50 Degrees\nClimbing Angle', 175, 'Electric', 2024, 1, 'scootergar14.jpg', 'scootergar15.jpg', 'scootergar16.jpg', 'scootergar17.jpg', 'scootergar18.jpg', '2017-06-19 16:18:20', '2024-06-10 15:06:56'),
(4, 'Ninebot KickScooter', 4, '18.6 mph\nMax Speed\n220 lbs\nMax Weight\n28 mile\nRange\nDual\nBatteries', 125, 'Electric', 2023, 1, 'scootergar22.jpg', 'scootergar19.jpg', 'scootergar20.jpg', 'scootergar21.jpg', 'scootergar23.jpg', '2017-06-19 16:18:43', '2024-06-10 15:07:06'),
(5, 'H10 E-Scooter', 5, 'The Tomini H10 is a high-powered, dual-motor e-scooter perfectly capable off-road as well as for inner-city commuting. Advanced 4 spring front shock absorption and a rear central spring facilitate comfort and stability for confident everyday use.', 200, 'Electric', 2023, 1, 'tominito2.jpg', 'scootergar25.jpg', 'scootergar26.jpg', 'scootergar27.jpg', 'scootergar28.jpg', '2017-06-20 17:57:09', '2024-06-23 07:41:46'),
(6, 'KQI AIR ELECTRIC KICK SCOOTER', 6, 'Range\nUp to 50km (31mi.)\n\nTop Speed\n32km/h (20 mph)\n\nApp-Connected\nBluetooth Connectivity:\n\n- Riding Mode\n\n- Smart Unlock\n\n- Rider Statistics\n\n- OTA (over-the-air) Updates\n\nBattery\nNIU ENERGY® Lithium Battery 451.2WH (48V9.4Ah)\n\nCharging Time\nUp to 5 Hours\n\nClimbing Ability\n20% Grade\n\nPower\n350W Rated / 700W Peak\n\nRiding Modes\n5 modes: E-Save / Sport / Dynamic / Pedestrian / Cruise Control\n\nTubeless Puncture Proof Tires\n241mm x 58mm (9.5in x 2.3in)\n\nFrame\nCarbon fiber frame\n\nLighting\nFront and rear LED\n\nBraking System\nFront Disc Brake + Regenerative Braking\n\nWaterproof\nIP55', 180, 'Electric', 2022, 1, 'scootergar29.jpg', 'scootergar30.jpg', 'scootergar31.jpg', 'scootergar32.jpg', 'scootergar33.jpg', '2017-06-20 17:57:09', '2024-06-10 15:07:19'),
(7, 'KQi3 Max Electric Kick Scooter', 6, '\nRange up to 40.4 miles\n\n\nTop speed 20+mph\n\nKQi3 MAX is set to a maximum speed of 20mph by default to comply with traffic regulations. However if you are riding on private property, you can unlock speeds up to 23.6mph in the app.\n\n\n25% hill grade climbing ability\n\n\n25% wider handlebars (47.3’’H × 21.3’’W)\n\n13% wider deck (6.7W’’ × 22.4’’L)\n\n30% fatter wheels (2.5’’) than other adult kick scooters\n\n\n9.5\" rubber self-healing tubeless tires with excellent shock absorption\n\n\nTriple-Braking & rear disc brake and rear electric brake\n\n\nHigh-powered Halo headlight, braking lights and side', 190, 'Electric', 2024, 1, 'scootergar34.2.jpg', 'scootergar35.jpg', 'scootergar36.jpg', 'scootergar37.jpg', 'scootergar38.jpg', '2017-06-20 17:57:09', '2024-06-23 07:50:27'),
(8, 'Ninebot KickScooter D28', 4, '15.5 mph Max. Speed\r\nMiles Range\r\n17.4 Miles Range\r\nTires\r\n10-inch Pneumatic Tires\r\nBrake\r\n2 brakes: electronic front brake; rear drum brake\r\nLight\r\n2.1 W Built in-front LED Light\r\nBrake and Rear Lights\r\nHeight\r\nFront, side and rear\r\nE-MARK reflectors\r\nRiding Modes\r\nEasy Charging\r\nUp to 5 hours\r\n44 - 165 (20-75 kg) Payload\r\n265 Max Payload', 170, 'Electric', 2021, 1, 'scootergar39.2.jpg', 'scootergar40.jpg', 'scootergar41.jpg', 'scootergar42.jpg', 'scootergar43.jpg', '2017-06-19 16:18:43', '2024-06-23 07:51:46'),
(9, 'Mantis X', 3, 'Model	Mantis Dual Plus\nMileage (km)	up to 70\nMax. speed (km/h)	60-65\nNominal motor power (W)	2 x 1000\nMax. climbing	up to 40°\nBattery	Li-ion 60V/18.2 Ah\nCharging time (h)	up to 9\nScooter weight (kg) 	30 \nMaximum loading (kg)	up to 140\nSuspension	Front and rear\nBrake system 	Front and rear fully hydraulic disk brakes + EABS\nFolded (L/W/H), mm	1 267 x 560 x 1 230\nUnfolded (L/W/H), mm	1 267 x 560 x 480\nTires size (inch)	10.0\"? 3.0\"\nTires type 	Pneumatic\nFront lights	LED\nRear lights\nWarranty (months)	24\nWarranty electric parts (months)	12\nCertificates	IPX 5, CE, FCC', 200, 'Electric', 2023, 1, 'scootergar44.2.jpg', 'scootergar45.jpg', 'scootergar46.jpg', 'scootergar47.jpg', 'scootergar48.jpg', '2017-06-19 16:18:20', '2024-06-23 07:52:47'),
(10, 'X10 E-SCOOTER', 2, 'Dual Motor Scooter: X10 Electric Scooter equipped with Dual-drive motors up to 2400W, fast speed to 32 mph / 50 kph.\r\n\r\n48V 18.2 AH Swappable, X10 scooter battery is easy to remove and recharge.\r\n\r\nLong range electric scooter off road, X10 all terrain scooter up to 60 Miles on one charge.\r\n\r\n11 inch Semi Off-Road Vacuum Tire, safety braking system: Electric Brake/ Disc Brake/ Foot Brake.\r\n\r\nFull Suspension: X10 E-Scooter front & rear suspension can greatly absorb the bumps and keep your riding safer and stable even on rough terrains.\r\n\r\nOne-piece Casting Frame: Dynamic, modern structure meets aesthetic standard of most consumers.\r\n\r\nTough aluminum-magnesium alloy welding makes X10 Off Road Electric Scooter lightweight and durable.\r\n\r\nSpacious Deck: 20 cm (8inch), X10 Pro Scooter is equipped with a wider and anti-slip stand deck for larger feet support.\r\n\r\nFoldable – Easy to fold up and portable scooters, one click folding and easily be stored into the trunk of a car.', 210, 'Electric', 2022, 1, 'scootergar49.jpg', 'scootergar50.jpg', 'scootergar51.jpg', 'scootergar52.jpg', 'scootergar53.jpg', '2017-06-19 16:16:17', '2024-06-10 15:37:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
