-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 12:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kemu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `work_id` varchar(50) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `work_id`, `rank`, `username`, `password`, `created_at`) VALUES
(49, '103399', 'Chief Security Officer', 'Joab', '$2y$10$03VZK5afC0I10STnJauDPeW7GDpFuAtI1Swd7lhnBUIlT04MwsBji', '2024-02-28 01:52:30'),
(51, '103398', 'Assistant Chief Security Officer', 'Lucy', '$2y$10$pfaBvmFHzYGRZ3/xwnteGOsYezMmr4Sd3Kf8a2eOfB8B7Lmbv04r6', '2024-02-28 01:54:09'),
(52, '103397', 'Assistant Chief Security Officer', 'Dennis', '$2y$10$TvYfznW9TSFIqYtNGk.XpOydLwSCYGlquNswg8lc5z2AVEeo20Bbu', '2024-02-28 01:54:38'),
(60, '12344', 'Assistant Chief Security Officer', 'John', '$2y$10$Jll.suZJJsM7kUVmzQRhHeaMpntYZ.cHNY9uOwMTpvoQoGyF57NDO', '2024-03-02 15:29:35'),
(61, '212', 'Chief Security Officer', 'jo', '$2y$10$5O7LCJU1ufpeQY8AdWLfkucRJnQR7kCZaYIj2MXI1/ajScXvJnCDK', '2024-03-03 12:31:52'),
(63, '788', 'Assistant Chief Security Officer', 'jj', '$2y$10$RMHezbbJMClNAGo32t2/JeLi3d0cUmNAm2Sv6Zf75CdSFAjMgUWPK', '2024-03-03 12:51:10'),
(74, 'JFaith', 'Chief Security Officer', 'Jfaith', '$2y$10$VqwmYt6c2opcQ5ELJYLqVe06ibUXStk1yiBa67ZOlSuGZhKYvU95C', '2024-03-05 09:23:43'),
(75, '22344', 'Chief Security Officer', 'Faith', '$2y$10$QyAxaRyKXk0LqW0Z/tddiOGOt5RjuokXiuXzaScifeJ/qW9Mc1Ztm', '2024-03-05 09:27:27'),
(79, '1234', 'Assistant Chief Security Officer', 'Diana', '$2y$10$F1lqgjZ7FCvEB8Fh/buJLuPv3qRsnb8xginrEQYSOgB4OwxHNLHD2', '2024-03-14 08:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcement_id` int(11) NOT NULL,
  `announcement_content` text DEFAULT NULL,
  `announcement_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcement_id`, `announcement_content`, `announcement_date`, `file`) VALUES
(1, 'good morning\r\n', '2024-03-13 13:19:38', ''),
(2, 'Hello', '2024-03-13 13:21:43', ''),
(3, 'Hello', '2024-03-13 13:22:20', ''),
(4, 'Kinuthia', '2024-03-13 14:07:37', ''),
(5, 'hellow', '2024-03-13 14:19:33', ''),
(6, 'hellow', '2024-03-13 14:24:33', ''),
(7, 'hellow', '2024-03-13 14:24:38', ''),
(8, 'hi too', '2024-03-13 14:36:15', ''),
(9, 'hi too Readdd', '2024-03-13 14:37:01', ''),
(10, 'hi too Readdd', '2024-03-13 14:37:06', ''),
(11, 'Free', '2024-03-13 14:41:05', ''),
(12, 'Tommorow there ....', '2024-03-13 14:43:21', ''),
(13, 'hi', '2024-03-13 14:57:14', ''),
(14, 'hi\r\n', '2024-03-13 19:38:26', ''),
(15, 'hi\r\ngood girl', '2024-03-13 19:38:45', ''),
(16, 'hi\r\ngood girl', '2024-03-13 19:38:50', ''),
(17, 'Joab Wafula I s coming', '2024-03-13 20:23:08', ''),
(18, 'Ayeeh', '2024-03-13 20:48:29', ''),
(19, '', '2024-03-13 21:20:24', ''),
(20, 'hi girl', '2024-03-13 21:24:21', ''),
(21, 'Joabjob is a Developer', '2024-03-13 21:26:29', ''),
(22, 'Joabjob is a Developer', '2024-03-13 21:31:05', ''),
(23, 'hi', '2024-03-13 21:32:08', ''),
(24, 'baby', '2024-03-13 21:32:27', ''),
(25, 'hi', '2024-03-13 21:43:10', ''),
(26, 'hi', '2024-03-13 21:43:15', ''),
(27, 'hi', '2024-03-13 21:43:22', ''),
(28, 'good', '2024-03-13 21:44:47', ''),
(29, 'hello', '2024-03-13 21:45:44', ''),
(30, 'gel', '2024-03-13 21:48:54', ''),
(31, 'gel', '2024-03-13 21:49:00', ''),
(32, 'ALL are welcomed', '2024-03-13 21:49:40', ''),
(33, 'Fine', '2024-03-13 21:56:15', ''),
(34, 'Lucy is happy', '2024-03-13 22:45:56', ''),
(35, 'hello', '2024-03-14 08:08:06', ''),
(36, 'i need security', '2024-03-14 08:08:32', ''),
(37, 'Hacknight ', '2024-03-15 10:35:25', 'CAT 1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE `incidents` (
  `id` int(11) NOT NULL,
  `locationn` varchar(255) NOT NULL,
  `uploaderName` varchar(255) DEFAULT NULL,
  `uploadVideoPath` varchar(255) DEFAULT NULL,
  `uploadImagePath` varchar(255) DEFAULT NULL,
  `idate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`id`, `locationn`, `uploaderName`, `uploadVideoPath`, `uploadImagePath`, `idate`) VALUES
(97, 'ECA', 'joan', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10.jpg', '2024-02-22 16:36:50'),
(98, 'Theatre 3', 'Joab', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10.jpg', '2024-02-23 12:27:41'),
(99, 'TB 09', 'Janeffer Kamau', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/omri.jpg', '2024-02-23 12:30:03'),
(100, 'Hostel B', 'Lucy ', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-23 12:31:04'),
(101, 'TB 17', 'Peter Mumanyi', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-23 12:32:56'),
(102, 'MPH', 'Kevin Njoroge', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10.jpg', '2024-02-23 12:34:30'),
(103, 'Field A', 'William Ruto', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/j.jpg', '2024-02-23 12:36:06'),
(104, 'Gate C', 'Peter Njoroge', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-23 12:37:15'),
(105, 'TB 05', 'Godfrey Wafula', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10.jpg', '2024-02-23 12:39:03'),
(106, 'Titus Mwambu', 'Faith', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-23 12:40:46'),
(107, 'G-Square', 'Maggy', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-23 22:43:11'),
(108, 'Theatre 1', 'Lucy Machee', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-23 23:47:23'),
(109, 'TB 01', 'Brian Choge', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/j.jpg', '2024-02-24 11:02:25'),
(110, 'ECA', 'huhijo', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-26 23:02:18'),
(111, 'ECA', 'joan', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-26 23:10:47'),
(112, 'ECA', 'christine', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10.jpg', '2024-02-26 23:43:19'),
(113, 'ECA', 'christine', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-27 07:34:06'),
(114, 'TB 09', 'LucyJoab', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-27 15:30:24'),
(115, 'TB 09', 'gjhkj', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/j.jpg', '2024-02-27 15:47:04'),
(116, 'ECA', 'joan', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10.jpg', '2024-02-27 17:40:03'),
(117, 'TB 09', 'Lucy', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-02-28 20:26:10'),
(118, 'ECA', 'joan', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10.jpg', '2024-03-02 16:28:07'),
(119, 'TB10', 'Joab Wafula', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10.jpg', '2024-03-04 11:23:12'),
(120, 'ECA', 'christine', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-03-04 12:20:26'),
(121, 'ECA', 'joan', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/jmtech.jpg', '2024-03-04 15:51:43'),
(122, 'TB 09', 'christine', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/omri.jpg', '2024-03-05 08:44:20'),
(123, 'hah', 'jane', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/jmtech.jpg', '2024-03-05 10:49:02'),
(124, 'TB 09', 'christine', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/jmtech.jpg', '2024-03-10 19:13:23'),
(125, 'TB028', 'Jerry', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-03-12 07:44:34'),
(126, 'theatre', 'joab', '', '', ''),
(127, 'ECA', 'joan', '', '', '2024-03-12 07:53:06'),
(128, 'ECA 08', 'Humfrey', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/photo_2024-02-05_17-40-10 (2).jpg', '2024-03-12 07:54:06'),
(129, 'ECA 09', 'Joab Wafula', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/jmtech.jpg', '2024-03-13 23:31:14'),
(130, 'TB 09', 'diana', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/omri.jpg', '2024-03-14 08:56:27'),
(131, 'TB 09', 'christine', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/jmtech.jpg', '2024-03-14 09:03:11'),
(132, 'ECA', 'Joabjob', 'videos/WhatsApp Video 2024-02-03 at 00.44.47_c9b81e12.mp4', 'images/jmtech.jpg', '2024-03-14 21:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `admin_response` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `admin_response`, `created_at`) VALUES
(1, 'Joab Wafula Mongoma', 'wafulajoab98@gmail.com', 'hi', 'hi too', '2024-02-26 16:44:22'),
(2, 'joab', 'j@gmail.com', 'hello sir', 'kwenda uko', '2024-02-26 17:01:38'),
(3, 'Joab Wafula Mongoma', 'wafulajoab98@gmail.com', 'hello security in our hostel is wanting please pass the relevant guards to come and help us', 'okay noted', '2024-02-26 19:30:49'),
(4, 'Joab Wafula Mongoma', 'wafulajoab98@gmail.com', 'hi', '', '2024-02-27 06:34:40'),
(5, 'Joab Wafula Mongoma', 'wafulajoab98@gmail.com', 'jhfgjhkjn', '', '2024-02-27 14:47:34'),
(6, 'Joab Wafula Mongoma', 'wafula@gmail.com', 'hi', '', '2024-02-27 16:40:43'),
(7, 'Joab Wafula Mongoma', 'wafula@gmail.com', 'Hello am Joab\r\n', '', '2024-02-28 14:01:57'),
(8, 'wafula joab', 'j@gmail.com', 'Hi Its Lucy wa Joab', '', '2024-02-28 19:27:06'),
(9, 'Joab Wafula Mongoma', 'wafula@gmail.com', 'Hi, there is an issue at ECA ', 'okay i will come', '2024-03-02 14:44:50'),
(10, 'Sylver', 'j@gmail.com', 'hi i need a job', 'okay its available', '2024-03-02 14:52:23'),
(11, 'Joab Wafula Mongoma', 'wafulajoab98@gmail.com', 'hi', 'Niko sherehe', '2024-03-02 15:28:25'),
(12, 'Joab Wafula Mongoma', 'wafulajoab98@gmail.com', 'hyiiu', 'hi', '2024-03-04 14:53:34'),
(13, 'Joab Wafula Mongoma', 'wafula@gmail.com', 'Good morning sir', '', '2024-03-05 07:45:16'),
(14, 'Joab Wafula Mongoma', 'wa@gmail.com', 'hello', '', '2024-03-05 09:49:38'),
(15, 'Joab Wafula Mongoma', 'wafulajoab98@gmail.com', 'hello am joan', 'nimekusikia', '2024-03-05 10:13:36'),
(16, 'Joab Wafula Mongoma', 'wafulajoab98@gmail.com', 'hello', '', '2024-03-10 09:27:56'),
(17, 'Joab Wafula Mongoma', 'wafula@gmail.com', 'hello Can be helped', 'yess', '2024-03-10 18:14:36'),
(18, 'Diana', 'wafulajoab98@gmail.com', 'I want to have some information about security measures', '', '2024-03-14 07:58:45'),
(19, 'collo', 'wafula@gmail.com', 'i need security', 'okayyyy', '2024-03-14 08:04:27'),
(20, 'Joab Wafula Mongoma', 'wafulajoab98@gmail.com', 'Hello', '', '2024-03-14 20:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone_number`, `campus`, `password`, `registration_time`) VALUES
(3, 'denoste', '07653553', 'meru', 'zxcvb', '2024-02-26 18:50:18'),
(5, 'lucy', '0976', 'Nairobi', '34', '2024-02-26 18:53:07'),
(6, 'Ken', '56', 'meru', '3', '2024-02-26 18:55:59'),
(8, 'Joab', '079324567', 'Meru', 'zxcvb', '2024-02-27 01:38:29'),
(21, 'JoabJob', '07352665', 'Nairobi', 'zxcvb', '2024-02-28 22:31:42'),
(22, 'Kenn', '083756367', 'Nairobi', '12345', '2024-03-02 17:42:01'),
(23, 'Johnk', '0763555353', 'Nairobi', '12345', '2024-03-02 18:30:40'),
(24, 'aass', '11', 'zxxz', 'sasas', '2024-03-03 16:38:21'),
(25, '1111', 'aaadad', 'adadad', 'aadaad', '2024-03-03 16:38:37'),
(26, 'adad', 'adadad', 'adadad', 'aadad', '2024-03-03 16:38:53'),
(27, 'adadad', 'aadad', 'adada', 'adadad', '2024-03-03 16:39:08'),
(28, '11', '113', 'ddd', 'adad', '2024-03-03 16:39:26'),
(29, 'ghfhj', '3456789', 'xvfgjhk.l/', 'fdsddfghjk', '2024-03-03 16:39:47'),
(30, 'fdghjkl;', 'fdghjkl', 'fdghjkl', '345678', '2024-03-03 16:40:04'),
(31, 'sdfsdfsdfdfss', 'ssdfdsds', 'sfsfdsd', 'ssfsfddd', '2024-03-03 16:40:21'),
(40, 'nhjghfgdfgfhjk', ',nvbcxcgchv', '987654', 'nmbnvbcvxcbvnbn', '2024-03-03 16:43:43'),
(41, '324567', '345678', 'ghfdsfghjkjl', 'qwertyui', '2024-03-03 16:44:03'),
(42, 'Eliud Kipchoge', '0735353533', 'Meru', 'zxcvb', '2024-03-04 11:32:31'),
(43, 'Kelvin Cheptoo', '12345', 'Nairobi', 'zxcvb', '2024-03-04 12:08:27'),
(46, 'j', '9', 'jk', 'm', '2024-03-05 12:44:55'),
(47, 'qw', '11', '11', 'qq', '2024-03-05 13:56:39'),
(48, 'Domie', '0798345543', 'Nairobi', 'zxcvbn', '2024-03-10 20:04:09'),
(49, 'Dennomigz', '0789645234', 'Mombasa', 'zxcvbn', '2024-03-10 20:14:29'),
(50, 'Dennomigz', '0789645234', 'Mombasa', 'zxcvbn', '2024-03-10 20:15:46'),
(51, 'Faith', '0789635273', 'Nairobi', 'zxcvbn', '2024-03-10 20:16:20'),
(52, 'Emmy Koskei', '0767543234', 'Nairobi', 'zxcvbn', '2024-03-10 20:20:49'),
(53, 'Wamboo', '079876', 'Meru', 'zxcvbn', '2024-03-10 20:57:14'),
(54, 'Alex', '0765345876', 'Mombasa', 'zxcvbn', '2024-03-10 22:40:32'),
(55, 'Devie', '072345654', 'Mombasa', 'zxcvbn', '2024-03-10 22:47:10'),
(56, 'Michael', '0723456876', 'Mombasa', 'zxcvbn', '2024-03-11 09:27:04'),
(57, 'Mike', '0786234543', 'Mombasa', 'zxcvbn', '2024-03-11 13:30:29'),
(58, 'Faith001', '0789654234', 'Mombasa', 'zxc', '2024-03-11 13:41:53'),
(59, 'Velma K', '0798234567', 'Mombasa', 'zxcvbn', '2024-03-11 13:51:50'),
(60, 'Jerry', '0798345432', 'Nairobi', 'zxcvbn', '2024-03-12 09:42:05'),
(61, 'Joooo', '072987678', 'Nairobi', 'zxcvbn', '2024-03-13 11:13:04'),
(62, 'Samuel ', '0767567987', 'Nairobi', 'zxcvbn', '2024-03-14 01:24:35'),
(63, 'Diana moraa', '0114141772', 'Meru', 'Dian001', '2024-03-14 10:52:04'),
(64, 'Diana', '0786543566', 'Nairobi', 'zxcvbn', '2024-03-14 10:53:53'),
(65, 'Collo', '072353633', 'Meru', 'zxcvbn', '2024-03-14 11:01:45'),
(66, 'Joooo', '0786456543', 'Nairobi', 'zxcvb', '2024-03-14 11:06:15'),
(67, 'Dan', '072635474', 'Mombasa', 'zxcvbn', '2024-03-14 11:30:55'),
(68, 'Joabjob', '0789654345', 'Nairobi', 'zxcvbn', '2024-03-14 23:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `idno` int(20) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `purpose` text NOT NULL,
  `registration_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `username`, `idno`, `phone_number`, `purpose`, `registration_time`) VALUES
(47, 'Kennedy Kaliff', 2312344, 78645321, 'working', '2024-02-23 07:15:47.000000'),
(48, 'Joab Wafula Mongoma', 567647, 745654345, 'Freshers night', '2024-02-23 10:31:08.000000'),
(49, 'Lucy Wangari Kamau', 2736747, 73546355, 'working', '2024-02-23 11:41:33.000000'),
(50, 'Peter Mwanu', 84387646, 763535452, 'Job', '2024-02-23 11:42:07.000000'),
(51, 'Faith Chepkoech', 13123233, 76253452, 'Working', '2024-02-23 11:42:42.000000'),
(52, 'Dennis Maish', 8376767, 746436564, 'To visit the finance office', '2024-02-23 11:43:46.000000'),
(53, 'Hamfrey Kirimu Nyongesa', 6637367, 732566553, 'Fact finding', '2024-02-23 11:44:47.000000'),
(54, 'Eliud Kipchoge', 3456356, 735625365, 'Freshers Night', '2024-02-23 11:45:58.000000'),
(55, 'John Mucheru', 8732655, 73545535, 'Job', '2024-02-23 11:46:56.000000'),
(56, 'Ken Mucheru', 233232344, 73645366, 'Job', '2024-02-23 11:47:52.000000'),
(57, 'Daniel Gathimba', 876255, 75342412, 'work', '2024-02-23 13:47:04.000000'),
(58, 'brendah', 243433, 78654445, 'Digging', '2024-02-23 14:20:41.000000'),
(59, 'Lucy Wangari Kinoi', 67755, 7564346, 'Working', '2024-02-23 18:41:41.000000'),
(60, 'Margret Mameru', 1234111, 73644563, 'Cleaning', '2024-02-23 21:42:12.000000'),
(61, 'Gladys Mwanzi', 6465455, 745365235, 'Studies', '2024-02-23 21:53:15.000000'),
(62, 'Dorothy Maingi', 1234321, 76534243, 'Work', '2024-02-23 22:43:25.000000'),
(63, 'Albert Nyongesa', 78223333, 723344343, 'Plumbing', '2024-02-24 10:01:20.000000'),
(64, 'kunn', 8999, 975556, 'work', '2024-02-27 06:33:26.000000'),
(65, 'Benedict Wambui', 12345, 7345526, 'Plumbinhhh', '2024-02-27 13:42:20.000000'),
(66, 'kik', 5678, 765678, 'nbghjk', '2024-02-27 14:46:27.000000'),
(67, 'Joab', 676766, 8787657, 'plumbing', '2024-02-27 16:39:11.000000'),
(68, 'Halima Kesh', 2334343, 74444334, 'working', '2024-02-28 19:23:10.000000'),
(69, 'Lucy Joab ', 12345, 2147483647, 'To visit Finance office', '2024-02-28 19:24:08.000000'),
(70, 'esrdgfsasdfg', 324532124, 43535454, 'cxcxvxcvx', '2024-02-28 19:24:44.000000'),
(71, 'Sylvester', 23455, 97265465, 'Job', '2024-03-02 14:51:16.000000'),
(72, 'John', 1212112, 11221, 'work', '2024-03-02 15:27:29.000000'),
(73, 'Hildah Mukabali', 12345, 743434, 'plumbing', '2024-03-04 08:48:52.000000'),
(74, 'kemm', 1234, 1222, 'sdsd', '2024-03-04 09:39:09.000000'),
(75, 'kamau', 11212, 1222222222, 'plumbind', '2024-03-04 09:41:04.000000'),
(76, '56ajah', 0, 67667, 'akljakj', '2024-03-04 09:41:38.000000'),
(77, '56ajah', 0, 67667, 'akljakj', '2024-03-04 09:42:18.000000'),
(78, 'denno', 34567, 87654, 'study', '2024-03-04 14:50:28.000000'),
(79, 'denno', 34567, 87654, 'study', '2024-03-04 14:50:53.000000'),
(80, 'fgh', 0, 5665, 'vbbbv', '2024-03-04 16:23:07.000000'),
(81, 'j', 11, 111, 'job', '2024-03-04 17:54:01.000000'),
(82, 'j', 11, 111, 'job', '2024-03-04 17:56:38.000000'),
(83, 'Lucy Wangari', 1232323, 71542442, 'working', '2024-03-05 04:16:24.000000'),
(84, 'Faith Joab', 111, 211, 'Working', '2024-03-05 07:43:23.000000'),
(85, 'bn', 98, 9, 'lk', '2024-03-05 09:47:37.000000'),
(86, 'kjkj', 9, 9, 'llp', '2024-03-05 11:18:41.000000'),
(87, 'Elikanah Elii', 454555, 76543212, 'Working', '2024-03-08 05:38:49.000000'),
(88, 'Faithk', 345676, 765456876, 'Studies', '2024-03-10 17:23:19.000000'),
(89, 'Alvin Wafula', 3211123, 767332333, 'Studies', '2024-03-10 17:53:59.000000'),
(90, 'Kinuthia Kamau', 2345655, 745678987, 'working', '2024-03-10 18:12:27.000000'),
(91, 'michael', 456, 987654, 'studies', '2024-03-11 06:27:40.000000'),
(92, 'Jerry K ', 98384, 798234321, 'plumbing', '2024-03-12 06:43:24.000000'),
(93, 'Samuel Kamau', 345432, 76545633, 'Visitation', '2024-03-13 22:27:18.000000'),
(94, 'Diana', 43123, 736563478, 'Study', '2024-03-14 07:55:01.000000'),
(95, 'clement', 876543456, 75678945, 'work', '2024-03-14 08:02:30.000000'),
(96, 'Joabjob', 4567, 789765345, 'studies', '2024-03-14 20:33:06.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `incidents`
--
ALTER TABLE `incidents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
