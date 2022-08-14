-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 10:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `accountant_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `accountant_number` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `sex` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `googleplus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`accountant_id`, `name`, `accountant_number`, `birthday`, `sex`, `religion`, `blood_group`, `address`, `file_name`, `phone`, `email`, `password`, `facebook`, `twitter`, `googleplus`, `linkedin`, `qualification`, `marital_status`, `login_status`) VALUES
(4, 'Muhammad Haris Javed', 'f3e74c5a89', '2022-04-17', 'Male', 'islam', '0- updated', 'multan,punjab,pakistan', '', '03013806559', 'mharis.javed1996@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'facebook.com', 'Twitter.com', 'Googleplus.com', 'Linkedin.com', 'MCS', 'Married', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Haris Admin', 'admin@admin.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0);

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `alumni_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profession` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `g_year` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `club` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `interest` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumni_id`, `name`, `sex`, `phone`, `email`, `address`, `profession`, `marital_status`, `g_year`, `club`, `interest`) VALUES
(1, 'Muhammad Haris Javed', 'male', '03013806559', 'mharis.javed1996@gmail.com', 'multan,punjab,pakistan', 'developer', 'married', '2022-04-24', 'club', 'Reading book'),
(2, 'Muhammad Haris Javed', 'male', '03013806559', 'mharis.javed1995@gmail.com', 'multan,punjab,pakistan\r\n', 'Developer', 'single', '2022-04-24', 'club', 'Reading book');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_id` int(11) NOT NULL,
  `applicant_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `apply_date` longtext NOT NULL,
  `status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_id`, `applicant_name`, `vacancy_id`, `apply_date`, `status`) VALUES
(2, 'Haris Javed', 2, '1643997600', 'applied');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `award_id` int(11) NOT NULL,
  `award_code` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gift` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `amount` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`award_id`, `award_code`, `name`, `gift`, `amount`, `date`, `user_id`) VALUES
(2, 'f041e74', 'Muhammad Haris Javed', 'J. Branded Shoes', '20000', '2022-05-05', 'teacher-11');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `account_holder_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `account_number` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bank_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `branch` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `account_holder_name`, `account_number`, `bank_name`, `branch`) VALUES
(3, 'abc', 'abdsa', 'nadsndas', 'jdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `circular`
--

CREATE TABLE `circular` (
  `circular_id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `reference` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circular`
--

INSERT INTO `circular` (`circular_id`, `title`, `reference`, `content`, `date`) VALUES
(2, 'Circular title', '123456789', 'This is Muhammad Haris Javed', '2022-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
(0, '::1', 1657302159, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635373330323135393b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31313a2248617269732041646d696e223b),
(2, '::1', 1651415089, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635313431353038393b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b),
(3, '::1', 1651417619, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635313431373631393b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31313a2248617269732041646d696e223b),
(4, '::1', 1656156837, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363135363833373b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b),
(5, '::1', 1649592444, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634393539323434343b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31313a2248617269732041646d696e223b666c6173685f6d6573736167657c733a32333a2244617461205375636365737366756c6c79205361766564223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
(6, '::1', 1657302354, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635373330323135393b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31313a2248617269732041646d696e223b666c6173685f6d6573736167657c733a32353a22446174612055706461746564205375636365737366756c6c79223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
(7, '::1', 1650194406, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635303139343430363b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31313a2248617269732041646d696e223b),
(8, '::1', 1649707863, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634393730373836333b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31313a2248617269732041646d696e223b666c6173685f6d6573736167657c733a32353a2244617461205375636365737366756c6c792055706461746564223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
(9, '::1', 1656156376, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635363135363337363b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b),
(13, '::1', 1650638822, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635303633383832323b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b),
(37, '::1', 1650800152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635303830303135323b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31313a2248617269732041646d696e223b),
(53, '::1', 1651415594, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635313431353539343b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31313a2248617269732041646d696e223b),
(95, '::1', 1650750040, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635303734393832383b63757272656e745f6c616e67756167657c733a373a22656e676c697368223b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31313a2248617269732041646d696e223b);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_numeric` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `name`, `name_numeric`, `teacher_id`) VALUES
(2, 'Primary', '1', 11);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int(11) NOT NULL,
  `club_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `desc` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `desc`, `date`) VALUES
(2, 'this is club name', 'description', '2022-04-10'),
(3, 'this is club name', 'sa', '2022-04-10'),
(4, 'this is club name', 'This is description', '2022-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `name`, `department_code`) VALUES
(1, 'Teaching Staff', 558);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `name`, `department_id`) VALUES
(1, 'Mutlan', 1),
(2, 'Karachi', 1),
(3, 'Lahore', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `category` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `purpose` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `whom_to_meet` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_category`
--

CREATE TABLE `enquiry_category` (
  `enquiry_category_id` int(11) NOT NULL,
  `category` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `purpose` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `whom` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry_category`
--

INSERT INTO `enquiry_category` (`enquiry_category_id`, `category`, `purpose`, `whom`) VALUES
(2, 'this is category', 'this is purpose', 'this is whom');

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `expense_category_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostel_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hostel_number` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `sex` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `googleplus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `name`, `hostel_number`, `birthday`, `sex`, `religion`, `blood_group`, `file_name`, `address`, `phone`, `email`, `password`, `facebook`, `twitter`, `googleplus`, `linkedin`, `qualification`, `marital_status`, `login_status`) VALUES
(4, 'Muhammad Haris Javed', '57ba5272fd', '2022-04-18', 'Male', 'islam', '0-', 'Shahid_Bahadur_Resume.docx', 'multan,punjab,pakistan', '03013806559', 'mharis.javed1996@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'facebook.com', 'twitter.com', 'googleplus.com', 'linkedin.com', 'MCS', 'Single', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hrm`
--

CREATE TABLE `hrm` (
  `hrm_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hrm_number` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `sex` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `googleplus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hrm`
--

INSERT INTO `hrm` (`hrm_id`, `name`, `hrm_number`, `birthday`, `sex`, `religion`, `blood_group`, `address`, `phone`, `file_name`, `email`, `password`, `facebook`, `twitter`, `googleplus`, `linkedin`, `qualification`, `marital_status`, `login_status`) VALUES
(1, 'Muhammad Haris Javed ', 'bb2e396eea', '2022-04-22', 'Male', 'islam', '0-', 'multan,punjab,pakistan', '03013806559', 'E-Com-1.pptx', 'mharis.javed1996@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'facebook.com', 'google.com', 'google.com', 'google.com', 'Post Graduate', 'Married', 0);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `phrase_id` int(11) NOT NULL,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `leave_id` int(11) NOT NULL,
  `leave_code` longtext NOT NULL,
  `teacher_id` longtext NOT NULL,
  `start_date` longtext NOT NULL,
  `end_date` longtext NOT NULL,
  `reason` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`leave_id`, `leave_code`, `teacher_id`, `start_date`, `end_date`, `reason`, `status`) VALUES
(3, '1122', '11', '5-02-2022', '6-02-2022', 'Fever', '2'),
(4, '1122', '11', '5-02-2022', '6-02-2022', 'Fever', '2');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `librarian_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `librarian_number` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `sex` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `googleplus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`librarian_id`, `name`, `librarian_number`, `birthday`, `sex`, `religion`, `blood_group`, `address`, `phone`, `file_name`, `email`, `password`, `facebook`, `twitter`, `googleplus`, `linkedin`, `qualification`, `marital_status`, `login_status`) VALUES
(3, 'Muhammad Haris Javed', '913cb25513', '2022-04-12', 'Male', 'islam', '0- ', 'multan,punjab,pakistan\r\n', '03013806559', '', 'm.javed1996@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'facebook.com', 'twitter.com', 'googleplus.com', 'linkedin.com', 'Post Graduate', 'Married', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profession` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `name`, `email`, `password`, `phone`, `address`, `profession`) VALUES
(1, 'Muhammad Haris Javed', 'mharis.javed1996@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '03013806559', 'multan,punjab,pakistan', 'Developer update');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `expense_category_id` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `invoice_id` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `student_id` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `method` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `amount` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `discount` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'School Management System'),
(2, 'system_title', 'Sychool'),
(3, 'address', 'Multan , Punjab , Pakistan'),
(4, 'phone', '090078601'),
(6, 'currency', '$'),
(7, 'system_email', 'school@school.com'),
(11, 'language', ''),
(12, 'text_align', 'left-to-right'),
(16, 'skin_colour', 'purple'),
(21, 'session', '2019-2020'),
(22, 'footer', 'Developed by Optimum Linkup Computers. All Right Reserved (2019)'),
(116, 'paypal_email', 'mharis.javed1996@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `role` longtext COLLATE utf8_unicode_ci NOT NULL,
  `teacher_number` longtext COLLATE utf8_unicode_ci NOT NULL,
  `birthday` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext COLLATE utf8_unicode_ci NOT NULL,
  `googleplus` longtext COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `date_of_joining` longtext COLLATE utf8_unicode_ci NOT NULL,
  `joining_salary` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `date_of_leaving` longtext COLLATE utf8_unicode_ci NOT NULL,
  `bank_id` int(11) NOT NULL,
  `login_status` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `role`, `teacher_number`, `birthday`, `sex`, `religion`, `blood_group`, `address`, `phone`, `email`, `facebook`, `twitter`, `googleplus`, `linkedin`, `qualification`, `marital_status`, `file_name`, `password`, `department_id`, `designation_id`, `date_of_joining`, `joining_salary`, `status`, `date_of_leaving`, `bank_id`, `login_status`) VALUES
(11, 'Haris', '1', '85594aa', '1996-12-19', 'male', 'islam', '0-', 'multan,punjab,pakistan', '03013806559', 'parent@yahoo.com', 'facebook.com', 'Twitter.com', 'Googleplus.com', 'Linkedin.com upadted', 'MCS', 'Single', 'Haris [Exp] (1).pdf', '7c222fb2927d828af22f592134e8932480637c0d', 1, 2, '2022-01-05', '19998', 1, '2022-05-01', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `vacancy_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number_of_vacancies` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_date` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`vacancy_id`, `name`, `number_of_vacancies`, `last_date`) VALUES
(2, 'Laravel Developer', '5', '2022-05-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`accountant_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`award_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `circular`
--
ALTER TABLE `circular`
  ADD PRIMARY KEY (`circular_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `enquiry_category`
--
ALTER TABLE `enquiry_category`
  ADD PRIMARY KEY (`enquiry_category_id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`expense_category_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `hrm`
--
ALTER TABLE `hrm`
  ADD PRIMARY KEY (`hrm_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`phrase_id`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`librarian_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`vacancy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `accountant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `circular`
--
ALTER TABLE `circular`
  MODIFY `circular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry_category`
--
ALTER TABLE `enquiry_category`
  MODIFY `enquiry_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `expense_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hrm`
--
ALTER TABLE `hrm`
  MODIFY `hrm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `phrase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `librarian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
