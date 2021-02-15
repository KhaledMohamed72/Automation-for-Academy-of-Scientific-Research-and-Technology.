-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2021 at 04:59 PM
-- Server version: 10.4.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u977396125_tico`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `cource_id` int(11) NOT NULL,
  `cource_name` text NOT NULL,
  `donor` text NOT NULL,
  `note` text NOT NULL,
  `image` text DEFAULT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'ايداع'),
(2, 'ممنوحة'),
(3, 'سقط بالملك العام');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `patent_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `comment` text NOT NULL,
  `com_date` text NOT NULL,
  `seen_status` int(1) NOT NULL,
  `seen_status_ceo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cources`
--

CREATE TABLE `cources` (
  `cource_id` int(11) NOT NULL,
  `cource_name` text NOT NULL,
  `donor` text NOT NULL,
  `note` text NOT NULL,
  `image` text DEFAULT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `date_fetch`
--

CREATE TABLE `date_fetch` (
  `date_id` int(11) NOT NULL,
  `from_date` text NOT NULL,
  `to_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `date_fetch`
--

INSERT INTO `date_fetch` (`date_id`, `from_date`, `to_date`) VALUES
(135, '1999-03-10', '2020-03-18'),
(136, '1999-03-10', '2020-03-18'),
(137, '1999-03-10', '2020-03-18'),
(138, '1990-03-20', '2020-03-25'),
(139, '1990-03-20', '2020-03-25'),
(140, '1990-03-20', '2020-03-25'),
(141, '1990-03-20', '2020-03-25'),
(142, '2020-03-17', '2020-03-30'),
(143, '2020-03-17', '2020-03-30'),
(144, '2020-03-17', '2020-03-30'),
(145, '1990-03-17', '2020-03-30'),
(146, '1990-03-17', '2020-03-30'),
(147, '1990-03-17', '2020-03-30'),
(148, '1990-03-04', '2020-03-03'),
(149, '1990-03-04', '2020-03-03'),
(150, '1990-03-04', '2020-03-03'),
(151, '2020-03-04', '2020-03-11'),
(152, '2020-03-04', '2020-03-11'),
(153, '2020-03-04', '2020-03-11'),
(154, '1992-03-05', '2020-03-11'),
(155, '1992-03-05', '2020-03-11'),
(156, '1992-03-05', '2020-03-11'),
(157, '1990-03-05', '2020-03-10'),
(158, '1990-03-05', '2020-03-10'),
(159, '1990-03-05', '2020-03-10'),
(160, '1996-03-05', '2020-03-11'),
(161, '1996-03-05', '2020-03-11'),
(162, '1996-03-05', '2020-03-11'),
(163, '1999-03-05', '2020-03-11'),
(164, '1999-03-05', '2020-03-11'),
(165, '1999-03-05', '2020-03-11'),
(166, '2020-03-12', '2020-03-11'),
(167, '2020-03-12', '2020-03-11'),
(168, '2020-03-12', '2020-03-11'),
(169, '2020-03-12', '2020-5-11'),
(170, '2020-03-12', '2020-5-11'),
(171, '2020-03-12', '2020-5-11'),
(172, '2020-03-12', '2020-05-11'),
(173, '2020-03-12', '2020-05-11'),
(174, '2020-03-12', '2020-05-11'),
(175, '2020-03-12', '2020-09-11'),
(176, '2020-03-12', '2020-09-11'),
(177, '2020-03-12', '2020-09-11'),
(178, '2020-03-12', '2020-09-04'),
(179, '2020-03-12', '2020-09-04'),
(180, '2020-03-12', '2020-09-04'),
(181, '2020-02-12', '2020-09-04'),
(182, '2020-02-12', '2020-09-04'),
(183, '2020-02-12', '2020-09-04'),
(184, '1999-03-04', '2020-03-02'),
(185, '1999-03-04', '2020-03-02'),
(186, '1999-03-04', '2020-03-02'),
(187, '1999-03-04', '2020-03-02'),
(188, '1999-03-04', '2020-03-02'),
(189, '1999-03-04', '2020-03-02'),
(190, '2020-03-05', '2020-03-09'),
(191, '2020-03-05', '2020-03-09'),
(192, '2020-03-05', '2020-03-09'),
(193, '2020-03-05', '2020-03-03'),
(194, '2020-03-05', '2020-03-03'),
(195, '2020-03-05', '2020-03-03'),
(196, '2020-03-11', '2020-03-04'),
(197, '2020-03-11', '2020-03-04'),
(198, '2020-03-11', '2020-03-04'),
(199, '2020-03-26', '2020-03-19'),
(200, '2020-03-26', '2020-03-19'),
(201, '2020-03-26', '2020-03-19'),
(202, '2020-03-06', '2020-03-02'),
(203, '2020-03-06', '2020-03-02'),
(204, '2020-03-06', '2020-03-02'),
(205, '2002', '2020'),
(206, '2002', '2020'),
(207, '2002', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `gico_report`
--

CREATE TABLE `gico_report` (
  `report_id` int(11) NOT NULL,
  `title_1` mediumtext DEFAULT NULL,
  `title_2` mediumtext DEFAULT NULL,
  `title_3` mediumtext DEFAULT NULL,
  `title_4` mediumtext DEFAULT NULL,
  `title_5` mediumtext DEFAULT NULL,
  `title_6` mediumtext DEFAULT NULL,
  `title_7` mediumtext DEFAULT NULL,
  `title_8` mediumtext DEFAULT NULL,
  `title_9` mediumtext DEFAULT NULL,
  `title_10` mediumtext DEFAULT NULL,
  `title_11` mediumtext DEFAULT NULL,
  `title_12` mediumtext DEFAULT NULL,
  `title_13` mediumtext DEFAULT NULL,
  `title_14` mediumtext DEFAULT NULL,
  `title_15` mediumtext DEFAULT NULL,
  `title_16` mediumtext DEFAULT NULL,
  `title_17` mediumtext DEFAULT NULL,
  `title_18` mediumtext DEFAULT NULL,
  `title_19` mediumtext DEFAULT NULL,
  `title_20` mediumtext DEFAULT NULL,
  `text_1` mediumtext DEFAULT NULL,
  `text_2` mediumtext DEFAULT NULL,
  `text_3` mediumtext DEFAULT NULL,
  `text_4` mediumtext DEFAULT NULL,
  `text_5` mediumtext DEFAULT NULL,
  `text_6` mediumtext DEFAULT NULL,
  `text_7` mediumtext DEFAULT NULL,
  `text_8` mediumtext DEFAULT NULL,
  `text_9` mediumtext DEFAULT NULL,
  `text_10` mediumtext DEFAULT NULL,
  `text_11` mediumtext DEFAULT NULL,
  `text_12` mediumtext DEFAULT NULL,
  `text_13` mediumtext DEFAULT NULL,
  `text_14` mediumtext DEFAULT NULL,
  `text_15` mediumtext DEFAULT NULL,
  `text_16` mediumtext DEFAULT NULL,
  `text_17` mediumtext DEFAULT NULL,
  `text_18` mediumtext DEFAULT NULL,
  `text_19` mediumtext DEFAULT NULL,
  `text_20` mediumtext DEFAULT NULL,
  `attach_1` mediumtext DEFAULT NULL,
  `attach_2` mediumtext DEFAULT NULL,
  `attach_3` mediumtext DEFAULT NULL,
  `attach_4` mediumtext DEFAULT NULL,
  `attach_5` mediumtext DEFAULT NULL,
  `attach_6` mediumtext DEFAULT NULL,
  `attach_7` mediumtext DEFAULT NULL,
  `attach_8` mediumtext DEFAULT NULL,
  `attach_9` mediumtext DEFAULT NULL,
  `attach_10` mediumtext DEFAULT NULL,
  `attach_11` mediumtext DEFAULT NULL,
  `attach_12` mediumtext DEFAULT NULL,
  `attach_13` mediumtext DEFAULT NULL,
  `attach_14` mediumtext DEFAULT NULL,
  `attach_15` mediumtext DEFAULT NULL,
  `attach_16` mediumtext DEFAULT NULL,
  `attach_17` mediumtext DEFAULT NULL,
  `attach_18` mediumtext DEFAULT NULL,
  `attach_19` mediumtext DEFAULT NULL,
  `attach_20` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gico_report`
--

INSERT INTO `gico_report` (`report_id`, `title_1`, `title_2`, `title_3`, `title_4`, `title_5`, `title_6`, `title_7`, `title_8`, `title_9`, `title_10`, `title_11`, `title_12`, `title_13`, `title_14`, `title_15`, `title_16`, `title_17`, `title_18`, `title_19`, `title_20`, `text_1`, `text_2`, `text_3`, `text_4`, `text_5`, `text_6`, `text_7`, `text_8`, `text_9`, `text_10`, `text_11`, `text_12`, `text_13`, `text_14`, `text_15`, `text_16`, `text_17`, `text_18`, `text_19`, `text_20`, `attach_1`, `attach_2`, `attach_3`, `attach_4`, `attach_5`, `attach_6`, `attach_7`, `attach_8`, `attach_9`, `attach_10`, `attach_11`, `attach_12`, `attach_13`, `attach_14`, `attach_15`, `attach_16`, `attach_17`, `attach_18`, `attach_19`, `attach_20`) VALUES
(1, 'Vel nulla hic enim q', 'Aliquid sit duis in', 'Reprehenderit aut p', 'Aut inventore fugiat', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Duis iure irure quo ', 'Aut quibusdam provid', 'Repudiandae cum natu', 'Perspiciatis vero i', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Capture.PNG', NULL, NULL, 'Receipt.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gico_users`
--

CREATE TABLE `gico_users` (
  `user_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gico_users`
--

INSERT INTO `gico_users` (`user_id`, `image`, `username`, `email`, `password`) VALUES
(1, 'posts_images/3f8f4414-4247-44a9-b1f3-a2e22d4a9fb7.jpg', 'gico', 'jepyw@mailinator.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `main_users`
--

CREATE TABLE `main_users` (
  `user_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_users`
--

INSERT INTO `main_users` (`user_id`, `image`, `username`, `email`, `password`) VALUES
(1, 'posts_images/download.png', 'ceo', 'asrt@asrt.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `patent_id` int(11) NOT NULL,
  `deposit_num` int(11) NOT NULL,
  `inventor_name` text NOT NULL,
  `invent_name` text NOT NULL,
  `des` text NOT NULL,
  `image` text DEFAULT NULL,
  `date` text NOT NULL,
  `status` text NOT NULL,
  `status_ceo` text NOT NULL,
  `category` text NOT NULL,
  `seen_status` int(1) NOT NULL DEFAULT 0,
  `seen_status_ceo` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `entity_name` text NOT NULL,
  `num_of_workers` int(11) NOT NULL,
  `name` text NOT NULL,
  `unit` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `patent_registered` int(11) NOT NULL,
  `patent_granted` int(11) NOT NULL,
  `patent_utility_granted` int(11) NOT NULL,
  `patent_granted_utitlty` int(11) NOT NULL,
  `num_visits` int(11) NOT NULL,
  `ch1` text NOT NULL,
  `problem_solved` text NOT NULL,
  `training_cources` text NOT NULL,
  `num_of_qualified` int(11) NOT NULL,
  `num_1` int(11) NOT NULL,
  `num_2` int(11) NOT NULL,
  `num_3` int(11) NOT NULL,
  `num_4` int(11) NOT NULL,
  `num_5` int(11) NOT NULL,
  `num_6` int(11) NOT NULL,
  `num_7` int(11) NOT NULL,
  `num_8` int(11) NOT NULL,
  `num_9` int(11) NOT NULL,
  `num_10` int(11) NOT NULL,
  `num_11` int(11) NOT NULL,
  `num_12` int(11) NOT NULL,
  `num_13` int(11) NOT NULL,
  `num_14` int(11) NOT NULL,
  `num_15` int(11) NOT NULL,
  `c_1` text NOT NULL,
  `c_2` text NOT NULL,
  `c_3` text NOT NULL,
  `c_4` text NOT NULL,
  `c_5` text NOT NULL,
  `c_6` text NOT NULL,
  `c_7` text NOT NULL,
  `c_8` text NOT NULL,
  `c_9` text NOT NULL,
  `c_10` text NOT NULL,
  `c_11` text NOT NULL,
  `c_12` text NOT NULL,
  `c_13` text NOT NULL,
  `c_14` text NOT NULL,
  `c_15` text NOT NULL,
  `image` text NOT NULL,
  `image3` text NOT NULL,
  `alternative` text NOT NULL,
  `policy` text NOT NULL,
  `activities` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `entity_name`, `num_of_workers`, `name`, `unit`, `email`, `phone`, `patent_registered`, `patent_granted`, `patent_utility_granted`, `patent_granted_utitlty`, `num_visits`, `ch1`, `problem_solved`, `training_cources`, `num_of_qualified`, `num_1`, `num_2`, `num_3`, `num_4`, `num_5`, `num_6`, `num_7`, `num_8`, `num_9`, `num_10`, `num_11`, `num_12`, `num_13`, `num_14`, `num_15`, `c_1`, `c_2`, `c_3`, `c_4`, `c_5`, `c_6`, `c_7`, `c_8`, `c_9`, `c_10`, `c_11`, `c_12`, `c_13`, `c_14`, `c_15`, `image`, `image3`, `alternative`, `policy`, `activities`) VALUES
(43, 'جامعة بنى سويف', 1, 'د/ مروه مدحت حسن ', 'TISC', '_medhat_85@hotmail.coMarwam', 1221761324, 7, 6, 0, 1, 52, 'ch1,ch2,ch3,ch7,ch8,ch9,ch11,ch15,', '- تطوير تركيبة جديدة لعلاج مرض الثعلبة والصلع الوراثي والهرموني وأنبات الشعر.\r\n- هلام الفلوفاسبانزوم عبر الجلد لعلاج التهاب المفاصل الروماتيدي.', '1.\r\n2.\r\n3.\r\n4.\r\n5.\r\n6.\r\n', 40, 80, 0, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'DL_101', 'sssssss', 'sdasd', 'sdasd', 'sdass', '', 'dsadasdasd', '', '', '', '', '', '', '', '', 'posts_images/Receipt.pdf', 'posts_images/Digitalization TICO.png', '', '- تم ارسال سياسة الملكية الفكرية فى خلال ال 6 اشهر الاولى من التعاقد  \r\n   رسمياً\r\n-  تم ارسال  3 كتيب سياسة الملكية الفكرية الخاصه بالجامعه  فى تقرير رقم (6).\r\n-  وتم توزيع (45) كتيب  على مجلس الجامعه بحضور رئيس الجامعه والنواب وعمداء الكليات بجلسته 170 لشهر ابريل 2019.\r\n- تم توزيع (105) كتيب سياسة الملكية الفكرية بمجالس النواب ( لشئون الطلاب والتعليم و شئون البيئة وخدمة المجتمع و الدرسات العليا والبحوث  بجميع الكليات.\r\n- تم توزيع 100 نسخه فى معرض القاهره الدولى السادس.', '-الاستمرار فى الاعلان عن معلومات فى شكل Post على صفحه التواصل الاجتماعى عن بعض قوانين او انواع الملكية الفكرية.\r\n-	نشر انواع الدورات عن بعد وبعد المواضيع الخاصه بقوانين الملكية الفكرية على جروب خاص بأعضاء هيئة التدريس والذى يضم تقريبا 3580 عضو هيئة تدريس وهيئة معاونه. \r\n-	رفع مكافأة الحصول على براءة اختراع على 25 الف جنيهاً.\r\n-	  الاجتماع مع اللجنه العلميه الجديدة لعام 2019/2020 بالكليات وتعريفهم بفرص المكتب وطرق تسجيل طلبات الايداع.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sub_main_users`
--

CREATE TABLE `sub_main_users` (
  `user_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_main_users`
--

INSERT INTO `sub_main_users` (`user_id`, `image`, `username`, `email`, `password`) VALUES
(1, 'posts_images/Beni-Suef_University_logo.png', 'mohab', 'khaled@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tisc_users`
--

CREATE TABLE `tisc_users` (
  `user_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tisc_users`
--

INSERT INTO `tisc_users` (`user_id`, `image`, `username`, `email`, `password`) VALUES
(1, 'posts_images/download (1).png', 'admin', 'marwa@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tto_report`
--

CREATE TABLE `tto_report` (
  `report_id` int(11) NOT NULL,
  `title_1` mediumtext DEFAULT NULL,
  `title_2` mediumtext DEFAULT NULL,
  `title_3` mediumtext DEFAULT NULL,
  `title_4` mediumtext DEFAULT NULL,
  `title_5` mediumtext DEFAULT NULL,
  `title_6` mediumtext DEFAULT NULL,
  `title_7` mediumtext DEFAULT NULL,
  `title_8` mediumtext DEFAULT NULL,
  `title_9` mediumtext DEFAULT NULL,
  `title_10` mediumtext DEFAULT NULL,
  `title_11` mediumtext DEFAULT NULL,
  `title_12` mediumtext DEFAULT NULL,
  `title_13` mediumtext DEFAULT NULL,
  `title_14` mediumtext DEFAULT NULL,
  `title_15` mediumtext DEFAULT NULL,
  `title_16` mediumtext DEFAULT NULL,
  `title_17` mediumtext DEFAULT NULL,
  `title_18` mediumtext DEFAULT NULL,
  `title_19` mediumtext DEFAULT NULL,
  `title_20` mediumtext DEFAULT NULL,
  `text_1` mediumtext DEFAULT NULL,
  `text_2` mediumtext DEFAULT NULL,
  `text_3` mediumtext DEFAULT NULL,
  `text_4` mediumtext DEFAULT NULL,
  `text_5` mediumtext DEFAULT NULL,
  `text_6` mediumtext DEFAULT NULL,
  `text_7` mediumtext DEFAULT NULL,
  `text_8` mediumtext DEFAULT NULL,
  `text_9` mediumtext DEFAULT NULL,
  `text_10` mediumtext DEFAULT NULL,
  `text_11` mediumtext DEFAULT NULL,
  `text_12` mediumtext DEFAULT NULL,
  `text_13` mediumtext DEFAULT NULL,
  `text_14` mediumtext DEFAULT NULL,
  `text_15` mediumtext DEFAULT NULL,
  `text_16` mediumtext DEFAULT NULL,
  `text_17` mediumtext DEFAULT NULL,
  `text_18` mediumtext DEFAULT NULL,
  `text_19` mediumtext DEFAULT NULL,
  `text_20` mediumtext DEFAULT NULL,
  `attach_1` mediumtext DEFAULT NULL,
  `attach_2` mediumtext DEFAULT NULL,
  `attach_3` mediumtext DEFAULT NULL,
  `attach_4` mediumtext DEFAULT NULL,
  `attach_5` mediumtext DEFAULT NULL,
  `attach_6` mediumtext DEFAULT NULL,
  `attach_7` mediumtext DEFAULT NULL,
  `attach_8` mediumtext DEFAULT NULL,
  `attach_9` mediumtext DEFAULT NULL,
  `attach_10` mediumtext DEFAULT NULL,
  `attach_11` mediumtext DEFAULT NULL,
  `attach_12` mediumtext DEFAULT NULL,
  `attach_13` mediumtext DEFAULT NULL,
  `attach_14` mediumtext DEFAULT NULL,
  `attach_15` mediumtext DEFAULT NULL,
  `attach_16` mediumtext DEFAULT NULL,
  `attach_17` mediumtext DEFAULT NULL,
  `attach_18` mediumtext DEFAULT NULL,
  `attach_19` mediumtext DEFAULT NULL,
  `attach_20` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tto_report`
--

INSERT INTO `tto_report` (`report_id`, `title_1`, `title_2`, `title_3`, `title_4`, `title_5`, `title_6`, `title_7`, `title_8`, `title_9`, `title_10`, `title_11`, `title_12`, `title_13`, `title_14`, `title_15`, `title_16`, `title_17`, `title_18`, `title_19`, `title_20`, `text_1`, `text_2`, `text_3`, `text_4`, `text_5`, `text_6`, `text_7`, `text_8`, `text_9`, `text_10`, `text_11`, `text_12`, `text_13`, `text_14`, `text_15`, `text_16`, `text_17`, `text_18`, `text_19`, `text_20`, `attach_1`, `attach_2`, `attach_3`, `attach_4`, `attach_5`, `attach_6`, `attach_7`, `attach_8`, `attach_9`, `attach_10`, `attach_11`, `attach_12`, `attach_13`, `attach_14`, `attach_15`, `attach_16`, `attach_17`, `attach_18`, `attach_19`, `attach_20`) VALUES
(1, 'الافكار التكنولوجية الجديدة ومدى الجاهزية التكنولوجية لها للوصول لمرحلة التسويق ', 'قاعدة بيانات بالجهات التصنيعية في النطاق الجغرافى للمكتب (مرفق)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1-  وحدة تحلية المياه (سبق الارسال) تقرير 5\r\n2- جهاز تدريبى وتنافسى للسباحين المكفوفين (سبق الارسال) تقرير 6\r\n\r\n', '-	قواعد البيانات للمصانع بمنطقة بياض العرب 2 (23 مصنع )\r\n-	بيان بالمصانع  المخصصة بمناطق الصناعات الثقيلة \r\n      بالمحافظة 1، 2، 3، 4/ 31  (25 مصنع )', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'تسجيلات رابعة.xls', 'Receipt.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tto_users`
--

CREATE TABLE `tto_users` (
  `user_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tto_users`
--

INSERT INTO `tto_users` (`user_id`, `image`, `username`, `email`, `password`) VALUES
(5, 'posts_images/khaled.jpg', 'tto', 'khaledgabriel50@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `updated_patents`
--

CREATE TABLE `updated_patents` (
  `patent_id` int(11) NOT NULL,
  `deposit_num` int(11) NOT NULL,
  `inventor_name` text NOT NULL,
  `invent_name` text NOT NULL,
  `des` text NOT NULL,
  `image` text NOT NULL,
  `date` text NOT NULL,
  `status` text NOT NULL,
  `status_ceo` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`cource_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cources`
--
ALTER TABLE `cources`
  ADD PRIMARY KEY (`cource_id`);

--
-- Indexes for table `date_fetch`
--
ALTER TABLE `date_fetch`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `gico_report`
--
ALTER TABLE `gico_report`
  ADD PRIMARY KEY (`report_id`) USING BTREE;

--
-- Indexes for table `gico_users`
--
ALTER TABLE `gico_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `main_users`
--
ALTER TABLE `main_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `patents`
--
ALTER TABLE `patents`
  ADD PRIMARY KEY (`patent_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `sub_main_users`
--
ALTER TABLE `sub_main_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tisc_users`
--
ALTER TABLE `tisc_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tto_report`
--
ALTER TABLE `tto_report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `tto_users`
--
ALTER TABLE `tto_users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
