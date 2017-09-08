-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 05:21 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlmnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `currentlogin` int(11) DEFAULT NULL,
  `lastlogin` int(11) DEFAULT NULL,
  `website_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `website_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `currentlogin`, `lastlogin`, `website_name`, `website_url`, `phone`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'MLM@gmail.com', 1504201753, 1504710083, 'MLM', '', '9597465896');

-- --------------------------------------------------------

--
-- Table structure for table `admin_session`
--

CREATE TABLE `admin_session` (
  `admin_id` int(11) NOT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_info`
--

CREATE TABLE `bonus_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `child_name` varchar(100) NOT NULL,
  `bonus_name` enum('SB','PB','DB') NOT NULL,
  `bonus_amount` decimal(10,4) NOT NULL,
  `added_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bonus_info`
--

INSERT INTO `bonus_info` (`id`, `user_id`, `child_name`, `bonus_name`, `bonus_amount`, `added_date`) VALUES
(1, 1, 'aravind', 'SB', '0.0500', 1504218271),
(2, 1, 'vignest', 'SB', '0.0500', 1504218271),
(3, 1, 'vignest,aravind', 'PB', '0.1000', 1504218271),
(4, 39, 'manoj', 'SB', '0.0500', 1504218271),
(5, 1, 'manoj', 'SB', '0.0500', 1504218271);

-- --------------------------------------------------------

--
-- Table structure for table `crypto_payments`
--

CREATE TABLE `crypto_payments` (
  `paymentID` int(11) UNSIGNED NOT NULL,
  `boxID` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `boxType` enum('paymentbox','captchabox') NOT NULL,
  `orderID` varchar(50) NOT NULL DEFAULT '',
  `userID` varchar(50) NOT NULL DEFAULT '',
  `countryID` varchar(3) NOT NULL DEFAULT '',
  `coinLabel` varchar(6) NOT NULL DEFAULT '',
  `amount` double(20,8) NOT NULL DEFAULT '0.00000000',
  `amountUSD` double(20,8) NOT NULL DEFAULT '0.00000000',
  `unrecognised` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `addr` varchar(34) NOT NULL DEFAULT '',
  `txID` char(64) NOT NULL DEFAULT '',
  `txDate` datetime DEFAULT NULL,
  `txConfirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `txCheckDate` datetime DEFAULT NULL,
  `processed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `processedDate` datetime DEFAULT NULL,
  `recordCreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `crypto_payments`
--

INSERT INTO `crypto_payments` (`paymentID`, `boxID`, `boxType`, `orderID`, `userID`, `countryID`, `coinLabel`, `amount`, `amountUSD`, `unrecognised`, `addr`, `txID`, `txDate`, `txConfirmed`, `txCheckDate`, `processed`, `processedDate`, `recordCreated`) VALUES
(1, 0, '', '', '', '', '', 0.00000000, 0.00000000, 0, '', '', NULL, 0, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `parent`) VALUES
(1, 'Tamil nadu', 0),
(2, 'Kerala', 0),
(5, 'Ernakulam', 2),
(6, 'Kannur', 2),
(7, 'Karnataka', 0),
(8, 'West Bengal', 0),
(9, 'Ariyalur', 1),
(10, 'Chennai', 1),
(11, 'Coimbatore', 1),
(12, 'Cuddalore', 1),
(13, 'Dharmapuri', 1),
(14, 'Dindigul', 1),
(15, 'Erode', 1),
(16, 'Kanchipuram', 1),
(17, 'Kanyakumari', 1),
(18, 'Karur', 1),
(19, 'Krishnagiri', 1),
(20, 'Madurai', 1),
(21, 'Nagapattinam', 1),
(22, 'Namakkal', 1),
(23, 'Nilgiris', 1),
(24, 'Perambalur', 1),
(25, 'Pudukkottai', 1),
(26, 'Ramanathapuram', 1),
(27, 'Salem', 1),
(28, 'Sivaganga', 1),
(29, 'Thanjavur', 1),
(30, 'Theni', 1),
(31, 'Thoothukudi (Tuticorin)', 1),
(32, 'Tiruchirappalli', 1),
(33, 'Tirunelveli', 1),
(34, 'Tiruppur', 1),
(35, 'Tiruvallur', 1),
(36, 'Tiruvannamalai', 1),
(37, 'Tiruvarur', 1),
(38, 'Vellore', 1),
(39, 'Viluppuram', 1),
(40, 'Virudhunagar', 1),
(42, 'Sivagangai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `added_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `user_id`, `otp`, `added_date`) VALUES
(30, 1, 26531, 1504710908);

-- --------------------------------------------------------

--
-- Table structure for table `parent_child_linkage`
--

CREATE TABLE `parent_child_linkage` (
  `ID` int(11) NOT NULL,
  `PARENT_ID` int(11) NOT NULL,
  `CHILD_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `LEG` varchar(100) NOT NULL,
  `sponser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_child_linkage`
--

INSERT INTO `parent_child_linkage` (`ID`, `PARENT_ID`, `CHILD_ID`, `USER_ID`, `LEG`, `sponser_id`) VALUES
(1570, 1, 10, 1, 'RIGHT', 1),
(1571, 1, 39, 1, 'LEFT', 1),
(1572, 10, 26, 1, 'RIGHT', 10),
(1573, 39, 13, 1, 'LEFT', 39);

-- --------------------------------------------------------

--
-- Table structure for table `plan_info`
--

CREATE TABLE `plan_info` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `min` decimal(10,2) NOT NULL,
  `max` decimal(10,2) NOT NULL,
  `profit_term` int(11) NOT NULL,
  `sponsor_bonus` int(11) NOT NULL,
  `paring_bonus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_info`
--

INSERT INTO `plan_info` (`plan_id`, `plan_name`, `min`, `max`, `profit_term`, `sponsor_bonus`, `paring_bonus`) VALUES
(1, 'SILVER', '0.05', '4.90', 100, 5, 10),
(2, 'GOLD', '5.00', '19.90', 100, 10, 10),
(3, 'PLATINUM', '20.00', '0.00', 100, 15, 10);

-- --------------------------------------------------------

--
-- Table structure for table `profile_info`
--

CREATE TABLE `profile_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `required_placement` enum('LEFT','RIGHT') NOT NULL,
  `added_date` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `Total_Amount` decimal(10,4) NOT NULL,
  `deposit_amount` decimal(10,3) NOT NULL,
  `left_deposit_amount` decimal(10,5) NOT NULL,
  `right_deposit_amount` decimal(10,5) NOT NULL,
  `deposit_date` int(11) NOT NULL,
  `account_status` tinyint(1) NOT NULL,
  `total_profit` decimal(10,0) NOT NULL,
  `days_of_profit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_info`
--

INSERT INTO `profile_info` (`id`, `user_id`, `fname`, `gender`, `dob`, `passport`, `phone`, `email`, `nationality`, `address`, `street`, `city`, `postal_code`, `required_placement`, `added_date`, `plan_id`, `Total_Amount`, `deposit_amount`, `left_deposit_amount`, `right_deposit_amount`, `deposit_date`, `account_status`, `total_profit`, `days_of_profit`) VALUES
(1, 1, 'ram', 'Male', '', '', '', 'ram@gmail.com', 'INDIA', '', '', 'coimbatore', 0, 'LEFT', 1504679537, 1, '9.3998', '0.050', '9.90000', '4.00000', 1504575524, 1, '0', ''),
(2, 2, 'rajesh', '', '', '', '', 'rames@gmail.cads', '', '', '', '', 0, 'LEFT', 1504211874, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(3, 3, 'ranjith', '', '', '', '', 'ranjith@gmail.com', '', '', '', '', 0, 'LEFT', 1504218271, 3, '12.5000', '20.000', '0.00000', '0.00000', 1504223721, 1, '0', ''),
(4, 4, 'aravind', '', '', '', '', 'aravind@gmail.com', '', '', '', '', 0, 'LEFT', 1504218340, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(5, 5, 'aravind', '', '', '', '', 'aravind@gmail.com', '', '', '', '', 0, 'LEFT', 1504218389, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(6, 6, 'aravind', '', '', '', '', 'aravind@gmail.com', '', '', '', '', 0, 'LEFT', 1504218523, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(7, 7, 'aravind', '', '', '', '', 'aravind@gmail.com', '', '', '', '', 0, 'LEFT', 1504218533, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(8, 8, 'aravind', '', '', '', '', 'aravind@gmail.com', '', '', '', '', 0, 'LEFT', 1504218611, 0, '0.0000', '1.000', '0.00000', '0.00000', 0, 1, '0', ''),
(9, 9, 'dd', '', '', '', '', 'dd@gmail.com', '', '', '', '', 0, 'LEFT', 1504218626, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(10, 10, 'dd', '', '', '', '', 'dd@gmail.com', '', '', '', '', 0, 'LEFT', 1504218645, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(11, 11, 'aravind', '', '', '', '', 'aravind@gmail.com', '', '', '', '', 0, 'LEFT', 1504218834, 2, '1.0000', '5.000', '0.00000', '0.00000', 0, 1, '0', ''),
(12, 12, 'soundar', '', '', '', '', 'soundar@gmail.com', '', '', '', '', 0, 'LEFT', 1504265945, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(13, 13, 'mano', '', '', '', '', 'ramesh@gmail.com', '', '', '', '', 0, 'LEFT', 1504266033, 2, '0.0000', '5.000', '0.00000', '0.00000', 1504266129, 1, '0', ''),
(38, 38, 'fads', '', '', '', '', 'ww@gmial.omc', '', '', '', '', 0, 'LEFT', 1504272805, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(39, 39, 'vicky', '', '', '', '', 'vic@gmail.com', '', '', '', '', 0, 'LEFT', 1504274070, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(40, 40, 'arunkumar', '', '', '', '', 'aarun312@gmail.com', '', '', '', '', 0, 'LEFT', 1504342462, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 1, '0', ''),
(50, 50, 'arunkumar', '', '', '', '', 'arun121@fa.oco', '', '', '', '', 0, 'LEFT', 1504504257, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(51, 51, 'asdasd', '', '', '', '', 'aarun312@gmail1.com', '', '', '', '', 0, 'LEFT', 1504508865, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(52, 52, 'asdf', '', '', '', '', 'asdf@adsf.adsf', '', '', '', '', 0, 'LEFT', 1504615267, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(53, 53, 'sadfasdf', '', '', '', '', 'asdf@addsf.asdf', '', '', '', '', 0, 'LEFT', 1504616987, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(54, 54, 'sdf', '', '', '', '', 'sdf@adf.asdf', '', '', '', '', 0, 'LEFT', 1504617901, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(55, 55, 'sdf', '', '', '', '', 'sdf@adf.asdf', '', '', '', '', 0, 'LEFT', 1504617909, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(56, 56, 'sdf', '', '', '', '', 'sdf@adf.asdf', '', '', '', '', 0, 'LEFT', 1504617966, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(57, 57, 'sdf', '', '', '', '', 'sdf@adf.asdf', '', '', '', '', 0, 'LEFT', 1504617990, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(58, 58, 'soundar', '', '', '', '', 'soundear@gmail.com', '', '', '', '', 0, 'LEFT', 1504618017, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(59, 59, 'soundar', '', '', '', '', 'soundear@gmail.com', '', '', '', '', 0, 'LEFT', 1504618033, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(60, 60, 'soundar', '', '', '', '', 'soundear@gmail.com', '', '', '', '', 0, 'LEFT', 1504619167, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(61, 61, 'fff', '', '', '', '', 'sadfasdfsadfsad@afsa', '', '', '', '', 0, 'LEFT', 1504619183, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(62, 62, 'raejsh', '', '', '', '', 'ram@osipa.com', '', '', '', '', 0, 'LEFT', 1504623482, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(63, 63, 'asdfasdfsadf', '', '', '', '', 'sadf@asdf.adsf', '', '', '', '', 0, 'LEFT', 1504623836, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(64, 64, 'fffff', '', '', '', '', 'sadfsadf@asdfsadf.ds', '', '', '', '', 0, 'LEFT', 1504624169, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(65, 65, 'TESST', '', '', '', '', 'test@gmail.com', '', '', '', '', 0, 'LEFT', 1504677193, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(66, 66, '', '', '', '', '', '', '', '', '', '', 0, 'LEFT', 1504699441, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(67, 67, '', '', '', '', '', '', '', '', '', '', 0, 'LEFT', 1504699564, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(68, 68, '', '', '', '', '', '', '', '', '', '', 0, 'LEFT', 1504699619, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(69, 69, '', '', '', '', '', '', '', '', '', '', 0, 'LEFT', 1504699629, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(70, 70, '', '', '', '', '', '', '', '', '', '', 0, 'LEFT', 1504700598, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(71, 71, '', '', '', '', '', '', '', '', '', '', 0, 'LEFT', 1504700853, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(72, 72, '', '', '', '', '', '', '', '', '', '', 0, 'LEFT', 1504700854, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(73, 73, '', '', '', '', '', '', '', '', '', '', 0, 'LEFT', 1504700856, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(74, 74, '', '', '', '', '', '', '', '', '', '', 0, 'LEFT', 1504700880, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', ''),
(75, 75, 'sadfsdf', '', '', '', '', 'adsfas@asfas.dsafads', '', '', '', '', 0, 'LEFT', 1504700921, 0, '0.0000', '0.000', '0.00000', '0.00000', 0, 0, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE `relations` (
  `id` int(25) NOT NULL,
  `sponser_id` varchar(100) NOT NULL,
  `parent_id` int(25) NOT NULL,
  `child_id` int(25) NOT NULL,
  `placement` enum('LEFT','RIGHT') NOT NULL,
  `status` tinyint(1) NOT NULL,
  `sync` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relations`
--

INSERT INTO `relations` (`id`, `sponser_id`, `parent_id`, `child_id`, `placement`, `status`, `sync`) VALUES
(1, '3', 3, 8, 'RIGHT', 1, 0),
(2, '1', 1, 10, 'RIGHT', 1, 0),
(3, '3', 3, 11, 'LEFT', 1, 0),
(4, '39', 39, 13, 'LEFT', 1, 0),
(5, '1', 1, 39, 'LEFT', 1, 0),
(6, '11', 11, 42, 'LEFT', 1, 0),
(7, '10', 10, 26, 'RIGHT', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `desired_username` varchar(50) NOT NULL,
  `your_fullname` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `define_password` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `sponsor` varchar(100) NOT NULL,
  `placement_id` varchar(50) NOT NULL,
  `placement` enum('LEFT','RIGHT','') NOT NULL,
  `bitcoin_address` varchar(100) NOT NULL,
  `bitcoin_type` varchar(100) NOT NULL,
  `added_date` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `verified_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `desired_username`, `your_fullname`, `mobile`, `define_password`, `email_address`, `sponsor`, `placement_id`, `placement`, `bitcoin_address`, `bitcoin_type`, `added_date`, `status`, `verified_status`) VALUES
(1, 'ramesh', 'ramesh.k', 9597436930, '6743b206a69c5959fd1e47098ff64102', 'ram@gmail.com', '', 'test', '', 'blockchain', 'luno', 1504205820, 0, '1'),
(2, 'raj', 'rajesh', 9859785454, '897987987', 'rames@gmail.cads', '', 'radf', '', 'radrads', '', 1504211874, 1, '1'),
(3, 'ranjith', 'ranjith', 9566874522, '123123', 'ranjith@gmail.com', '', '12345', 'LEFT', 'test', '', 1504218270, 1, '1'),
(9, 'dd', 'dd', 0, 'admin', 'dd@gmail.com', '', 'dd', 'LEFT', 'asdf', '', 1504218626, 1, '1'),
(10, 'aravind', 'aravind', 123123, '12', 'aravind@gmail.com', 'ranjith', '12345', 'RIGHT', 'test', '', 1504218834, 1, '1'),
(12, 'soundar', 'soundar', 9655454784, '123', 'soundar@gmail.com', '', '123', 'LEFT', '123', '', 1504265945, 1, '1'),
(13, 'manoj', 'mano', 965541722, '123', 'ramesh@gmail.com', 'soundar', '1243', 'LEFT', '123', '', 1504266033, 1, '1'),
(26, 'Arun', 'arunkumar', 97459778949, '6743b206a69c5959fd1e47098ff64102', 'aarun312@gmail.com', '', 'arun7393', 'LEFT', '12', '', 1504342462, 1, '1'),
(39, 'vignest', 'vicky', 9655874455, '987', 'vic@gmail.com', 'ramesh', '987', 'LEFT', '987', '', 1504274070, 1, '1'),
(41, 'Arun12', 'asdasd', 99897977, 'asdasda', 'aarun31276@gmail.com', '', 'arun7676', 'RIGHT', '135', '', 1504342738, 1, '1'),
(52, 'soundardasf', 'asdf', 342, '8d0c8f9d1a9539021fda006427b993b9', 'asdf@adsf.adsf', '', '', '', 'asdf', '', 1504615267, 0, '1'),
(53, 'adfasdf', 'sadfasdf', 34, '63d0cea9d550e495fde1b81310951bd7', 'asdf@addsf.asdf', '', '', '', 'asdf', '', 1504616986, 0, '1'),
(54, 'df', 'sdf', 3, 'b41f1d6cd8d2004749a912ba75d88f18', 'sdf@adf.asdf', '', '', '', 'sadf', '', 1504617901, 0, '1'),
(55, 'df', 'sdf', 3, 'b41f1d6cd8d2004749a912ba75d88f18', 'sdf@adf.asdf', '', '', '', 'sadf', '', 1504617909, 0, '1'),
(62, 'rajeshss', 'raejsh', 98798798, '14c133708851cf00ecb21f38950370fe', 'ram@osipa.com', '', '', '', 'adsfasdf', '', 1504623482, 0, '1'),
(63, 'asdfsadfsadfasdfa', 'asdfasdfsadf', 32423423, '5953e1ebb5a153af93da61ea433889d0', 'sadf@asdf.adsf', '', '', '', 'sadfasdf', '', 1504623836, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE `user_session` (
  `user_id` int(11) NOT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_session`
--

INSERT INTO `user_session` (`user_id`, `hash`, `timestamp`) VALUES
(4, NULL, 1504226877),
(12, NULL, 1504265955),
(1, NULL, 1504710255);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `added_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`id`, `user_id`, `type`, `description`, `amount`, `status`, `added_date`) VALUES
(1, 1, 'blockchain', 'Amount Withdrawal', '0.10006', 'success', 1504693811),
(2, 1, 'blockchain', 'Amount Withdrawal', '0.10007', 'success', 1504695158),
(3, 1, 'luno', 'Amount Withdrawal', '0.1', 'success', 1504710926);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_session`
--
ALTER TABLE `admin_session`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bonus_info`
--
ALTER TABLE `bonus_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  ADD PRIMARY KEY (`paymentID`),
  ADD UNIQUE KEY `key3` (`boxID`,`orderID`,`userID`,`txID`,`amount`,`addr`),
  ADD KEY `boxID` (`boxID`),
  ADD KEY `boxType` (`boxType`),
  ADD KEY `userID` (`userID`),
  ADD KEY `countryID` (`countryID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `amount` (`amount`),
  ADD KEY `amountUSD` (`amountUSD`),
  ADD KEY `coinLabel` (`coinLabel`),
  ADD KEY `unrecognised` (`unrecognised`),
  ADD KEY `addr` (`addr`),
  ADD KEY `txID` (`txID`),
  ADD KEY `txDate` (`txDate`),
  ADD KEY `txConfirmed` (`txConfirmed`),
  ADD KEY `txCheckDate` (`txCheckDate`),
  ADD KEY `processed` (`processed`),
  ADD KEY `processedDate` (`processedDate`),
  ADD KEY `recordCreated` (`recordCreated`),
  ADD KEY `key1` (`boxID`,`orderID`),
  ADD KEY `key2` (`boxID`,`orderID`,`userID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_child_linkage`
--
ALTER TABLE `parent_child_linkage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `plan_info`
--
ALTER TABLE `plan_info`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `profile_info`
--
ALTER TABLE `profile_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_session`
--
ALTER TABLE `user_session`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
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
-- AUTO_INCREMENT for table `admin_session`
--
ALTER TABLE `admin_session`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bonus_info`
--
ALTER TABLE `bonus_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  MODIFY `paymentID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `parent_child_linkage`
--
ALTER TABLE `parent_child_linkage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1574;
--
-- AUTO_INCREMENT for table `plan_info`
--
ALTER TABLE `plan_info`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profile_info`
--
ALTER TABLE `profile_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `user_session`
--
ALTER TABLE `user_session`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
