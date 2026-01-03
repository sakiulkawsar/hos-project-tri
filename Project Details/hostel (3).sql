-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2026 at 06:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `role`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', '2024-01-31 20:31:45', '2024-01-01'),
(2, 'student', 'student@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2', '2025-12-13 04:23:48', '0000-00-00'),
(3, 'parents', 'parents@gmail.com', '1234', '3', '2025-12-13 04:24:01', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complainthistory`
--

CREATE TABLE `complainthistory` (
  `id` int(11) NOT NULL,
  `complaintid` int(11) DEFAULT NULL,
  `compalintStatus` varchar(255) DEFAULT NULL,
  `complaintRemark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complainthistory`
--

INSERT INTO `complainthistory` (`id`, `complaintid`, `compalintStatus`, `complaintRemark`, `postingDate`) VALUES
(1, 1, 'In Process', 'Electrician assigned.', '2025-01-14 11:11:12'),
(2, 1, 'Closed', 'Switch changed', '2025-01-14 11:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `ComplainNumber` bigint(12) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `complaintType` varchar(255) DEFAULT NULL,
  `complaintDetails` mediumtext DEFAULT NULL,
  `complaintDoc` varchar(255) DEFAULT NULL,
  `complaintStatus` varchar(255) DEFAULT NULL,
  `registrationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `ComplainNumber`, `userId`, `complaintType`, `complaintDetails`, `complaintDoc`, `complaintStatus`, `registrationDate`) VALUES
(1, 389685413, 5, 'Electrical', 'Switch not working.', NULL, 'Closed', '2025-01-14 11:10:24'),
(2, 0, NULL, '0', '0', NULL, NULL, '2025-12-19 14:51:32'),
(3, 1, 1, 'computer', 'not working', NULL, NULL, '2025-12-19 14:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `course_sn` varchar(255) DEFAULT NULL,
  `course_fn` varchar(255) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(1, 'B10992', 'B.Tech', 'Bachelor  of Technology', '2025-01-01 19:31:42'),
(2, 'BCOM1453', 'B.Com', 'Bachelor Of commerce ', '2025-01-01 19:31:42'),
(3, 'BSC12', 'BSC', 'Bachelor  of Science', '2025-01-01 19:31:42'),
(4, 'BC36356', 'BCA', 'Bachelor Of Computer Application', '2025-01-01 19:31:42'),
(5, 'MCA565', 'MCA', 'Master of Computer Application', '2025-01-01 19:31:42'),
(6, 'MBA75', 'MBA', 'Master of Business Administration', '2025-01-01 19:31:42'),
(7, 'BE765', 'BE', 'Bachelor of Engineering', '2025-01-01 19:31:42'),
(9, '123', 'BSC', 'Computer science and engineering', '2025-12-13 16:58:09'),
(10, 'Saepe at corrupti t', 'Aspernatur elit pro', 'Aut aut necessitatib', '2025-12-20 02:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `AccessibilityWarden` varchar(255) DEFAULT NULL,
  `AccessibilityMember` varchar(255) DEFAULT NULL,
  `RedressalProblem` varchar(255) DEFAULT NULL,
  `Room` varchar(255) DEFAULT NULL,
  `Mess` varchar(255) DEFAULT NULL,
  `HostelSurroundings` varchar(255) DEFAULT NULL,
  `OverallRating` varchar(255) DEFAULT NULL,
  `FeedbackMessage` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `postinDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `AccessibilityWarden`, `AccessibilityMember`, `RedressalProblem`, `Room`, `Mess`, `HostelSurroundings`, `OverallRating`, `FeedbackMessage`, `userId`, `postinDate`) VALUES
(1, 'Very Good', 'Very Good', 'Excellent', 'Very Good', 'Excellent', 'Average', 'Good', 'NA', 5, '2025-01-14 11:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `font`
--

CREATE TABLE `font` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `font`
--

INSERT INTO `font` (`id`, `name`, `email`, `message`) VALUES
(1, 'Velma Owens', 'ninexym@mailinator.com', 'Perspiciatis minima');

-- --------------------------------------------------------

--
-- Table structure for table `mill`
--

CREATE TABLE `mill` (
  `id` int(11) NOT NULL,
  `brackfast` int(100) NOT NULL,
  `lunch` int(50) NOT NULL,
  `dinner` int(15) NOT NULL,
  `tmeal` int(11) NOT NULL,
  `tomeal` int(11) NOT NULL,
  `registration_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mill`
--

INSERT INTO `mill` (`id`, `brackfast`, `lunch`, `dinner`, `tmeal`, `tomeal`, `registration_id`) VALUES
(6, 0, 0, 1, 0, 0, 2),
(27, 1, 3, 1, 5, 5, 4),
(28, 1, 1, 1, 3, 3, 5),
(29, 1, 1, 1, 3, 3, 7),
(33, 1, 0, 1, 3, 3, 6),
(34, 1, 0, 6, 11, 14, 8),
(35, 1, 1, 1, 3, 17, 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`) VALUES
(1, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', 'Pending', 'SSLCZ_TEST_6951764487423', 'BDT'),
(2, 'John Doe', 'you@example.com', '01711xxxxxx', 1200, 'Dhaka', 'Pending', 'SSLCZ_TEST_695176605ee69', 'BDT'),
(3, 'John Doe', 'you@example.com', '01711xxxxxx', 1200, 'Dhaka', 'Pending', 'SSLCZ_TEST_695176bbce6f3', 'BDT');

-- --------------------------------------------------------

--
-- Table structure for table `pament`
--

CREATE TABLE `pament` (
  `id` int(11) NOT NULL,
  `tmeal` varchar(50) NOT NULL,
  `due` varchar(20) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `tamount` int(20) NOT NULL,
  `registration_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pament`
--

INSERT INTO `pament` (`id`, `tmeal`, `due`, `amount`, `tamount`, `registration_id`) VALUES
(16, '20', '400', '200', 200, NULL),
(17, '20', '500', '50', 1500, NULL),
(18, '40', '500', '40', 2100, NULL),
(19, '30', '400', '40', 1600, NULL),
(21, '40', '500', '40', 40, NULL),
(22, '40', '500', '40', 2100, NULL),
(23, '233', '332', '2500', 33, NULL),
(24, '50', '2000', '40', 4000, NULL),
(25, '50', '400', '60', 3400, NULL),
(26, '50', '2000', '20', 3000, NULL),
(27, '40', '300', '20', 1100, NULL),
(28, '40', '300', '30', 1500, NULL),
(29, '50', '300', '3000', 150300, 6),
(30, '50', '50', '50', 2550, 8);

--
-- Triggers `pament`
--
DELIMITER $$
CREATE TRIGGER `trg_update_mill_tmeal` AFTER UPDATE ON `pament` FOR EACH ROW BEGIN
    IF OLD.tmeal <> NEW.tmeal THEN
        UPDATE mill
        SET tmeal = NEW.tmeal
        WHERE name = NEW.name;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) DEFAULT NULL,
  `seater` int(11) DEFAULT NULL,
  `feespm` int(11) DEFAULT NULL,
  `foodstatus` int(11) DEFAULT NULL,
  `stayfrom` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `course` varchar(500) DEFAULT NULL,
  `regno` int(11) DEFAULT NULL,
  `firstName` varchar(500) DEFAULT NULL,
  `middleName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `emailid` varchar(500) DEFAULT NULL,
  `egycontactno` bigint(11) DEFAULT NULL,
  `guardianName` varchar(500) DEFAULT NULL,
  `guardianRelation` varchar(500) DEFAULT NULL,
  `guardianContactno` bigint(11) DEFAULT NULL,
  `corresAddress` varchar(500) DEFAULT NULL,
  `corresCIty` varchar(500) DEFAULT NULL,
  `corresState` varchar(500) DEFAULT NULL,
  `corresPincode` int(11) DEFAULT NULL,
  `pmntAddress` varchar(500) DEFAULT NULL,
  `pmntCity` varchar(500) DEFAULT NULL,
  `pmnatetState` varchar(500) DEFAULT NULL,
  `pmntPincode` int(11) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `course`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(2, 100, 5, 8000, 1, '2025-01-06', 6, 'Bachelor  of Technology', 10806121, 'Anuj', '', 'kumar', 'male', 1234567890, 'ak@gmail.com', 1236547890, 'ABC', 'XYZ', 98756320000, 'ABC 12345 XYZ Street', 'New Delhi', 'Delhi (NCT)', 110001, 'ABC 12345 XYZ Street', 'New Delhi', 'Delhi (NCT)', 110001, '2025-01-03 14:58:26', NULL),
(3, 200, 2, 6000, 1, '2025-01-10', 12, 'Bachelor  of Science', 108061233, 'John', '', 'Doe', 'male', 1425362514, 'hohn@gmail.com', 456312058, 'Alex Doe', 'father', 1234567890, '123 Xyz apartment ', 'New Delhi', 'Delhi (NCT)', 110001, '123 Xyz apartment ', 'New Delhi', 'Delhi (NCT)', 110001, '2025-01-03 14:58:26', NULL),
(4, 200, 2, 6000, 0, '2025-01-08', 9, 'Bachelor Of commerce ', 10806121, 'Anuj', '', 'kumar', 'male', 1234567890, 'test@gmail.com', 546456546, 'ytrrtyrt', 'yrtyrty', 46456456, 'ttyrytryr', 'yrty', 'Andhra Pradesh', 123123, 'ttyrytryr', 'yrty', 'Andhra Pradesh', 123123, '2025-01-03 14:58:26', NULL),
(5, 100, 5, 8000, 1, '2025-01-15', 3, 'Bachelor  of Technology', 14563213, 'John', '', 'Matthew ', 'male', 8956237845, 'john@gmail.com', 7845123698, 'Mrs. Jacob Mattew', 'Uncle', 5623894178, 'H-899, Gauri Apartment', 'Kanpur', 'Uttar Pradesh', 551007, 'H-899, Gauri Apartment', 'Kanpur', 'Uttar Pradesh', 551007, '2025-01-03 14:58:26', NULL),
(6, 132, 5, 2000, 1, '2025-01-15', 12, 'Bachelor  of Technology', 14563213, 'Amit', 'kumar', 'Singh', 'male', 9632587412, 'amit123@gmail.com', 8563145621, 'Ram Kumar Singh', 'Father', 4563245631, 'Hno 181/1 Mayur Vihar ', 'New Delhi', 'Delhi (NCT)', 110092, 'Hno 181/1 Mayur Vihar ', 'New Delhi', 'Delhi (NCT)', 110092, '2025-01-03 14:58:26', NULL),
(7, 122, 0, 0, 0, '2021-12-24', 5, 'Master of Business Administration', 0, 'Hilda Mcdowell', 'Kirk Zamora', 'Tara Levy', 'male', 0, 'fazedagogo@mailinator.com', 0, 'Vera Chang', 'Lorem proident haru', 0, 'Est sunt harum veli', 'Est ipsam amet und', 'Mizoram', 0, 'Delectus sit dolori', 'Distinctio Rerum qu', 'Daman and Diu (UT)', 0, '2025-12-13 11:50:35', NULL),
(8, 201, 2, 6000, 0, '1998-10-23', 3, 'Bachelor  of Science', 0, 'Cecilia Gates', 'Hannah Jennings', 'William Schneider', 'female', 0, 'kudalecux@mailinator.com', 0, 'Herrod Melton', 'Esse ea omnis ex cum', 0, 'Ea nisi vero sequi e', 'Anim velit aut ut q', 'Tripura', 0, 'Est porro qui blandi', 'Illo vel maiores lab', 'Assam', 0, '2025-12-17 17:12:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`) VALUES
(1, 0, 100, 0, '2025-01-01 22:45:43'),
(2, 2, 201, 6000, '2025-01-01 22:45:43'),
(3, 2, 200, 6000, '2025-01-01 22:45:43'),
(4, 3, 112, 4000, '2025-01-01 22:45:43'),
(6, 3, 145, 3000, '2025-01-01 22:45:43'),
(7, 1, 122, 7000, '2025-12-09 14:48:45'),
(13, 2, 0, 5000, '2025-12-20 02:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(1, 5, 'john@gmail.com', 0x3132372e302e302e31, '', '', '2025-01-14 11:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contactNo` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) DEFAULT NULL,
  `passUdateDate` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(3, '10806121', 'Anuj', '', 'kumar', 'male', 1234567890, 'test@gmail.com', 'Test@123', '2025-01-02 14:56:18', NULL, NULL),
(4, '108061233', 'John', '', 'Doe', 'male', 1425362514, 'hohn@gmail.com', 'Test@123', '2025-01-02 14:56:18', NULL, NULL),
(5, 'BE123', 'John', '', 'Matthew ', 'male', 8956237845, 'john@gmail.com', '123', '2025-01-02 14:56:18', NULL, NULL),
(6, '14563213', 'Amit', 'kumar', 'Singh', 'male', 9632587412, 'amit123@gmail.com', 'Test@123', '2025-01-02 14:56:18', '17-04-2024 05:12:02', NULL),
(7, 'Non ut qui dolore cu', 'Hilda Mcdowell', 'Kirk Zamora', 'Tara Levy', 'male', 0, 'fazedagogo@mailinator.com', 'Explicabo Quibusdam', '2025-12-13 11:50:35', NULL, NULL),
(8, 'Non id amet dolore', 'Cecilia Gates', 'Hannah Jennings', 'William Schneider', 'female', 0, 'kudalecux@mailinator.com', 'Dolore qui non sequi', '2025-12-17 17:12:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `details`) VALUES
(1, 'ff', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `users_request`
--

CREATE TABLE `users_request` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `status` enum('pending','accepted','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_request`
--

INSERT INTO `users_request` (`id`, `name`, `email`, `mobile`, `comment`, `status`) VALUES
(3, 'sakiul', 'user4@example.com', '12354', 'grdjlfgh;lvcgfg', 'accepted'),
(5, 'Rana Mays', 'vyxoj@mailinator.com', 'Explicabo Minima no', 'Non unde natus est a', 'accepted'),
(6, 'Buckminster Slater', 'qofuwo@mailinator.com', 'Aspernatur et maiore', 'Cillum culpa dolore ', 'accepted'),
(7, 'Whilemina Stokes', 'korizire@mailinator.com', '2345798996', 'Quasi ut odit tenetu', 'accepted'),
(8, 'TaShya Wells', 'meja@mailinator.com', '45476665', 'Placeat voluptatem ', 'accepted'),
(9, 'Charissa Santos', 'cufytu@mailinator.com', '578556', 'Fuga Ipsum adipisc', 'rejected'),
(10, 'Charissa Santos', 'cufytu@mailinator.com', '5785566', 'Fuga Ipsum adipisc', 'accepted'),
(11, 'Charissa Santos', 'cufytu@mailinator.com', '5785566', 'Fuga Ipsum adipisc', 'accepted');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_student_meal_summary`
-- (See below for the actual view)
--
CREATE TABLE `vw_student_meal_summary` (
`student_id` int(11)
,`firstName` varchar(500)
,`lastName` varchar(500)
,`roomno` int(11)
,`brackfast` int(100)
,`lunch` int(50)
,`dinner` int(15)
,`total_meal` bigint(67)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_student_payment_summary`
-- (See below for the actual view)
--
CREATE TABLE `vw_student_payment_summary` (
`student_id` int(11)
,`firstName` varchar(500)
,`lastName` varchar(500)
,`roomno` int(11)
,`paid_meal` varchar(50)
,`due` varchar(20)
,`amount` varchar(50)
,`total_amount` int(20)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_student_meal_summary`
--
DROP TABLE IF EXISTS `vw_student_meal_summary`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_student_meal_summary`  AS SELECT `r`.`id` AS `student_id`, `r`.`firstName` AS `firstName`, `r`.`lastName` AS `lastName`, `r`.`roomno` AS `roomno`, ifnull(`m`.`brackfast`,0) AS `brackfast`, ifnull(`m`.`lunch`,0) AS `lunch`, ifnull(`m`.`dinner`,0) AS `dinner`, ifnull(`m`.`brackfast`,0) + ifnull(`m`.`lunch`,0) + ifnull(`m`.`dinner`,0) AS `total_meal` FROM (`registration` `r` left join `mill` `m` on(`r`.`id` = `m`.`registration_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_student_payment_summary`
--
DROP TABLE IF EXISTS `vw_student_payment_summary`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_student_payment_summary`  AS SELECT `r`.`id` AS `student_id`, `r`.`firstName` AS `firstName`, `r`.`lastName` AS `lastName`, `r`.`roomno` AS `roomno`, ifnull(`p`.`tmeal`,0) AS `paid_meal`, ifnull(`p`.`due`,0) AS `due`, ifnull(`p`.`amount`,0) AS `amount`, ifnull(`p`.`tamount`,0) AS `total_amount` FROM (`registration` `r` left join `pament` `p` on(`r`.`id` = `p`.`registration_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complainthistory`
--
ALTER TABLE `complainthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `font`
--
ALTER TABLE `font`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mill`
--
ALTER TABLE `mill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mill_registration` (`registration_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pament`
--
ALTER TABLE `pament`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pament_registration` (`registration_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_no` (`room_no`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_request`
--
ALTER TABLE `users_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complainthistory`
--
ALTER TABLE `complainthistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `font`
--
ALTER TABLE `font`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mill`
--
ALTER TABLE `mill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pament`
--
ALTER TABLE `pament`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_request`
--
ALTER TABLE `users_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mill`
--
ALTER TABLE `mill`
  ADD CONSTRAINT `fk_mill_registration` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pament`
--
ALTER TABLE `pament`
  ADD CONSTRAINT `fk_pament_registration` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
