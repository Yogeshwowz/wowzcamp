-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2021 at 03:54 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oxeenxb4_mvp`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_industry`
--

CREATE TABLE `business_industry` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `heirarchy` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_industry`
--

INSERT INTO `business_industry` (`id`, `name`, `heirarchy`) VALUES
(1, 'Energy', 'Industry Sector'),
(2, 'Industrial', 'Industry Sector'),
(3, 'Finance', 'Industry Sector'),
(4, 'Healthcare', 'Industry Sector'),
(5, 'Technology', 'Industry Sector'),
(6, 'Building', 'Industry Sector'),
(7, 'Food & Beverage', 'Industry Sector'),
(8, 'Retail Shops', 'Industry Sector'),
(9, 'Education', 'Industry Sector'),
(10, 'Logistics', 'Industry Sector'),
(11, 'Media', 'Industry Sector'),
(12, 'Travel & Leisure', 'Industry Sector'),
(13, 'Textiles', 'Industry Sector'),
(14, 'Business Services', 'Industry Sector'),
(15, 'Electronic Equipment', 'Industry Sector'),
(16, 'Coal', 'Industry Sector'),
(17, 'Integrated Oil and Gas', 'Industry Sector'),
(18, 'Apparel Stores', 'Industry Sector'),
(19, 'Oil & Gas Exploration and Production', 'Industry Sector'),
(20, 'Freight & Logistics\"', 'Industry Sector');

-- --------------------------------------------------------

--
-- Table structure for table `company_sector`
--

CREATE TABLE `company_sector` (
  `cid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cname` varchar(225) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_sector`
--

INSERT INTO `company_sector` (`cid`, `user_id`, `cname`, `created_date`) VALUES
(1, 4, 'Industrial', '2021-02-26 14:45:10'),
(2, 4, 'Technology', '2021-02-26 14:45:10'),
(3, 6, 'Industrial', '2021-02-26 14:51:17'),
(4, 6, 'Technology', '2021-02-26 14:51:17'),
(5, 7, 'Energy', '2021-02-26 14:59:34'),
(6, 7, 'Technology', '2021-02-26 14:59:34'),
(7, 8, 'Industrial', '2021-02-26 15:02:14'),
(8, 8, 'Technology', '2021-02-26 15:02:14'),
(9, 9, 'Energy', '2021-02-26 15:04:34'),
(10, 9, 'Industrial', '2021-02-26 15:04:34'),
(11, 11, 'Finance', '2021-03-11 10:28:36'),
(12, 12, 'Energy', '2021-03-11 11:18:45'),
(13, 12, 'Food & Beverage', '2021-03-11 11:18:45'),
(14, 13, 'Travel & Leisure', '2021-03-11 11:28:49'),
(16, 18, 'Finance', '2021-03-18 10:33:07'),
(17, 26, 'Finance', '2021-04-01 14:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `industries_preference`
--

CREATE TABLE `industries_preference` (
  `ipid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ipname` varchar(225) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industries_preference`
--

INSERT INTO `industries_preference` (`ipid`, `user_id`, `ipname`, `created_date`) VALUES
(1, 4, 'Industrial', '2021-02-26 14:45:10'),
(2, 4, 'Technology', '2021-02-26 14:45:10'),
(3, 6, 'Industrial', '2021-02-26 14:51:17'),
(4, 6, 'Technology', '2021-02-26 14:51:17'),
(5, 7, 'Energy', '2021-02-26 14:59:34'),
(6, 7, 'Finance', '2021-02-26 14:59:34'),
(7, 8, 'Energy', '2021-02-26 15:02:14'),
(8, 8, 'Healthcare', '2021-02-26 15:02:14'),
(9, 9, 'Industrial', '2021-02-26 15:04:34'),
(10, 9, 'Finance', '2021-02-26 15:04:34'),
(11, 11, 'Technology', '2021-03-11 10:28:36'),
(12, 11, 'Education', '2021-03-11 10:28:36'),
(13, 12, 'Energy', '2021-03-11 11:18:45'),
(14, 12, 'Food & Beverage', '2021-03-11 11:18:45'),
(15, 13, 'Finance', '2021-03-11 11:28:49'),
(16, 13, 'Healthcare', '2021-03-11 11:28:49'),
(18, 18, 'Energy', '2021-03-18 10:33:07'),
(19, 26, 'Energy', '2021-04-01 14:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `pid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `official_email` varchar(255) DEFAULT NULL,
  `interested_in` varchar(255) DEFAULT NULL,
  `your_company` varchar(225) DEFAULT NULL,
  `field_1` varchar(255) DEFAULT NULL,
  `field_2` varchar(255) DEFAULT NULL,
  `field_3` varchar(255) DEFAULT NULL,
  `field_4` varchar(255) DEFAULT NULL,
  `field_5` varchar(255) DEFAULT NULL,
  `field_6` varchar(255) DEFAULT NULL,
  `field_7` varchar(255) DEFAULT NULL,
  `field_8` varchar(255) DEFAULT NULL,
  `field_9` varchar(255) DEFAULT NULL,
  `field_10` varchar(255) DEFAULT NULL,
  `field_11` varchar(255) DEFAULT NULL,
  `field_12` varchar(255) DEFAULT NULL,
  `field_13` varchar(255) DEFAULT NULL,
  `field_14` varchar(255) DEFAULT NULL,
  `field_15` varchar(255) DEFAULT NULL,
  `field_16` varchar(255) DEFAULT NULL,
  `user_plan` int(5) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `payable_post_transaction` int(5) DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  `tentative_selling` varchar(225) DEFAULT NULL,
  `reason_for_sale` text,
  `investmentto` varchar(225) DEFAULT NULL,
  `cpoints` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pid`, `user_id`, `company_name`, `company_logo`, `official_email`, `interested_in`, `your_company`, `field_1`, `field_2`, `field_3`, `field_4`, `field_5`, `field_6`, `field_7`, `field_8`, `field_9`, `field_10`, `field_11`, `field_12`, `field_13`, `field_14`, `field_15`, `field_16`, `user_plan`, `amount`, `payable_post_transaction`, `created_date`, `tentative_selling`, `reason_for_sale`, `investmentto`, `cpoints`) VALUES
(1, 1, 'oxeenit', NULL, 'harsh@gmail.com', '1', NULL, '1', NULL, '2012', 'a:2:{i:0;s:6:\"Energy\";i:1;s:10:\"Industrial\";}', 'Ambala', '5000', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '50000', '600000', '', '100', '17500000', 2, '20', 0, '2021-02-26 14:29:09', '8300000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, '10'),
(2, 2, 'Xsoft', NULL, 'shivali@gmail.com', '2', NULL, '1', NULL, '2017', 'a:2:{i:0;s:7:\"Finance\";i:1;s:10:\"Technology\";}', 'United State of India', '100', '2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '40000', '750000', '', '96', '8000000', 3, '30', 0, '2021-02-26 14:33:41', '1250000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, '15'),
(3, 3, 'oxeenit', NULL, 'namesh@gmail.com', '3', NULL, '3', NULL, '2017', 'a:2:{i:0;s:6:\"Energy\";i:1;s:8:\"Building\";}', 'Cannda', '900', '5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '96000', '1250000', '', '56', '93000000', 1, '10', 0, '2021-02-26 14:39:34', '560000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, '5'),
(4, 4, NULL, NULL, 'oxeenit', '1', 'Oxeenit', '1', 'a:2:{i:0;s:10:\"Industrial\";i:1;s:10:\"Technology\";}', 'United State of India', '8560', 'United State of India', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Team Lead', 'google.com', 'a:2:{i:0;s:10:\"Industrial\";i:1;s:10:\"Technology\";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '10', 0, '2021-02-26 14:42:50', NULL, NULL, '963201', '5'),
(5, 5, 'oxeenit', NULL, 'ramesh@gmail.com', '3', NULL, '1', NULL, '2018', 'a:2:{i:0;s:6:\"Energy\";i:1;s:7:\"Finance\";}', 'United State of India', '560', '2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '85200', '96320455', '', '85', '1000000052', 3, '30', 0, '2021-02-26 14:46:32', '963250', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, '15'),
(6, 6, NULL, NULL, 'sukhi@gmail.com', '1', 'oxeenit', '1', 'a:2:{i:0;s:10:\"Industrial\";i:1;s:10:\"Technology\";}', 'United State of India', '895', 'United State of India', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Designer', 'google.com', 'a:2:{i:0;s:10:\"Industrial\";i:1;s:10:\"Technology\";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '10', 0, '2021-02-26 14:49:31', NULL, NULL, '23000', '4'),
(7, 7, NULL, NULL, 'anuj@gmail.com', '2', 'softwiz', '8', 'a:2:{i:0;s:6:\"Energy\";i:1;s:7:\"Finance\";}', 'United State of India', '4520', 'United State of India', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Team Lead', 'google.com', 'a:2:{i:0;s:6:\"Energy\";i:1;s:10:\"Technology\";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '20', 0, '2021-02-26 14:57:54', NULL, NULL, '85221', '10'),
(8, 8, NULL, NULL, 'vipin@gmail.com', '1', 'Staplelogic', '3', 'a:2:{i:0;s:6:\"Energy\";i:1;s:10:\"Healthcare\";}', 'United State of India', '852', 'United State of India', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Project Manager', 'google.com', 'a:2:{i:0;s:10:\"Industrial\";i:1;s:10:\"Technology\";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '10', 0, '2021-02-26 15:00:43', NULL, NULL, '5656565', '5'),
(9, 9, NULL, NULL, 'arun@gmail.com', '1', 'oxeenit', '5', 'a:2:{i:0;s:10:\"Industrial\";i:1;s:7:\"Finance\";}', 'United State of India', '852', 'United State of India', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Team Lead', 'google.com', 'a:2:{i:0;s:6:\"Energy\";i:1;s:10:\"Industrial\";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '30', 0, '2021-02-26 15:03:20', NULL, NULL, '96332541', '15'),
(10, 10, 'oxeenit', NULL, 'harry@gmail.com', '1', NULL, '2', NULL, '2020', 'a:2:{i:0;s:6:\"Energy\";i:1;s:10:\"Technology\";}', 'United State of India', '963', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '56200', '963250', '', '52', '1258556565', 2, '20', 0, '2021-02-26 15:06:10', '85201555', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, '10'),
(11, 11, NULL, NULL, 'tester1@gmail.com', '1', 'testing pvt. lmt.', '1', 'a:2:{i:0;s:10:\"Technology\";i:1;s:9:\"Education\";}', 'Singapore, Australia and India', '10000000', 'singapore ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'CEO', 'tester.com', 'a:1:{i:0;s:7:\"Finance\";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-11 09:44:37', NULL, NULL, '100000000', NULL),
(12, 12, NULL, NULL, 'sallar@gmail.com', '1', 'Sallar pvt ltd', '1', 'a:2:{i:0;s:6:\"Energy\";i:1;s:15:\"Food & Beverage\";}', 'Singapore ', '10000', 'Hong Kong', 'Jobs fill your pockets, adventures fill your soul.', 'CEO', 'www.google.com', 'a:2:{i:0;s:6:\"Energy\";i:1;s:15:\"Food & Beverage\";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '20', 0, '2021-03-11 11:06:33', NULL, NULL, '1000000000000000', '10'),
(13, 13, NULL, NULL, 'Testseller@gmail.com', '1', 'Ozark Consulting', '1', 'a:2:{i:0;s:7:\"Finance\";i:1;s:10:\"Healthcare\";}', 'Singapore', '98574636282422', 'Hongkong', 'Live Young live free', 'President', 'N/A', 'a:1:{i:0;s:16:\"Travel & Leisure\";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '30', 0, '2021-03-11 11:07:06', NULL, NULL, '349357673539753', '15'),
(14, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-11 11:10:38', NULL, NULL, NULL, NULL),
(15, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-11 11:11:22', NULL, NULL, NULL, NULL),
(16, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-11 11:12:29', NULL, NULL, NULL, NULL),
(17, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-11 11:14:35', NULL, NULL, NULL, NULL),
(18, 18, NULL, NULL, 'D@gmail.com', '1', 'qwe pvt ltd', '3', 'a:1:{i:0;s:6:\"Energy\";}', 'Singapore ', '100000', 'Hong Kong', 'testing testing tesing', 'ceo', 'www.google.com', 'a:1:{i:0;s:7:\"Finance\";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '30', 0, '2021-03-18 10:27:38', NULL, NULL, '8795123654112', '15'),
(19, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-18 10:36:55', NULL, NULL, NULL, NULL),
(20, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-18 10:38:38', NULL, NULL, NULL, NULL),
(21, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-23 07:16:14', NULL, NULL, NULL, NULL),
(22, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-23 07:55:39', NULL, NULL, NULL, NULL),
(23, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-31 11:04:20', NULL, NULL, NULL, NULL),
(24, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-03-31 11:05:55', NULL, NULL, NULL, NULL),
(25, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-04-01 13:50:44', NULL, NULL, NULL, NULL),
(26, 26, NULL, NULL, 'test@test.test', '1', 'testtest LLC', '6', 'a:1:{i:0;s:6:\"Energy\";}', 'Singapore ', '10000000', 'Hong Kong', '63,000+ pre-screened businesses and investors from 900+ industries, 170+ countries, investment size from INR 10 lakh to 400 crore', 'CEO', 'www.testtest.test', 'a:1:{i:0;s:7:\"Finance\";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-04-01 14:44:15', NULL, NULL, '100000000000000088887979797', NULL),
(27, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2021-04-05 18:04:59', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_gallery_images_docs`
--

CREATE TABLE `profile_gallery_images_docs` (
  `pmid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_gallery_images_docs`
--

INSERT INTO `profile_gallery_images_docs` (`pmid`, `user_id`, `image`, `tag`, `type`, `created_date`) VALUES
(1, 12, 'gallery-887231948-1615461286.pdf', 'doc', 'buyer', '2021-03-11 11:14:46'),
(2, 12, 'gallery-73684088-1615461387.pdf', 'proof', NULL, '2021-03-11 11:16:27'),
(3, 13, 'gallery-759403957-1615462074.png', 'doc', 'buyer', '2021-03-11 11:27:54'),
(4, 13, 'gallery-1088068199-1615462117.docx', 'doc', 'buyer', '2021-03-11 11:28:37'),
(5, 18, 'gallery-1358715470-1616063517.pdf', 'doc', 'buyer', '2021-03-18 10:31:57'),
(6, 18, 'gallery-433885397-1616063546.pdf', 'proof', NULL, '2021-03-18 10:32:26'),
(7, 26, 'gallery-1445888618-1617288579.pdf', 'doc', 'buyer', '2021-04-01 14:49:39'),
(8, 26, 'gallery-2103150199-1617288600.pdf', 'proof', NULL, '2021-04-01 14:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `send_proposal`
--

CREATE TABLE `send_proposal` (
  `id` int(11) NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `message` varchar(225) DEFAULT NULL,
  `userstatus` varchar(25) DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'unread',
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `send_proposal`
--

INSERT INTO `send_proposal` (`id`, `from_id`, `to_id`, `message`, `userstatus`, `status`, `created_date`) VALUES
(1, 6, 2, NULL, NULL, 'unread', '2021-02-26 14:53:03'),
(2, 25, 10, NULL, NULL, 'unread', '2021-04-01 13:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `sid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `name` varchar(225) DEFAULT NULL,
  `mobilenumber` varchar(225) DEFAULT NULL,
  `location` varchar(225) DEFAULT NULL,
  `timezone` varchar(225) DEFAULT NULL,
  `companyname` varchar(225) DEFAULT NULL,
  `designation` varchar(225) DEFAULT NULL,
  `gstnumber` varchar(225) DEFAULT NULL,
  `address` text,
  `deallocations` varchar(225) DEFAULT NULL,
  `dealindustries` text,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`sid`, `uid`, `name`, `mobilenumber`, `location`, `timezone`, `companyname`, `designation`, `gstnumber`, `address`, `deallocations`, `dealindustries`, `created_date`) VALUES
(1, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'a:2:{i:0;s:10:\"Industrial\";i:1;s:7:\"Finance\";}', '2021-03-11 09:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` int(3) DEFAULT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `plain_password` varchar(150) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `country_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `first_name`, `last_name`, `gender`, `email`, `user_phone`, `password`, `plain_password`, `status`, `country_id`, `created_date`, `profile_image`, `created_by`) VALUES
(1, 1, 'Harsh', NULL, NULL, 'supper@admin.com', '9630001255', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 230, '2021-02-26 14:29:09', NULL, NULL),
(2, 3, 'Shivali Mehta', NULL, NULL, 'shivali@gmail.com', '9467807311', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 229, '2021-02-26 14:33:41', NULL, NULL),
(3, 3, 'Namesh Kumar', NULL, NULL, 'namesh@gmail.com', '9652314000', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 4, '2021-02-26 14:39:34', NULL, NULL),
(4, 2, 'Jeeta ', NULL, NULL, 'jeeta@gmail.com', '9999999999', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 2, '2021-02-26 14:42:50', NULL, NULL),
(5, 3, 'Ramesh', NULL, NULL, 'ramesh@gmail.com', '8956666666', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 47, '2021-02-26 14:46:32', NULL, NULL),
(6, 1, 'Sukhi', NULL, NULL, 'sukhi@gmail.com', '9467807311', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 4, '2021-02-26 14:49:31', NULL, NULL),
(7, 2, 'Anuj', NULL, NULL, 'anuj@gmail.com', '9898989898', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 28, '2021-02-26 14:57:54', NULL, NULL),
(8, 2, 'vipin', NULL, NULL, 'vipin@gmail.com', '9898989898', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 4, '2021-02-26 15:00:43', NULL, NULL),
(9, 2, 'Arun', NULL, NULL, 'arun@gmail.com', '8520015656', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 14, '2021-02-26 15:03:20', NULL, NULL),
(10, 3, 'Harry Potter', NULL, NULL, 'harry@gmail.com', '9898989898', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 1, '2021-02-26 15:06:10', NULL, NULL),
(11, 2, 'tester', NULL, NULL, 'tester1@gmail.com', '9000000000', '5a105e8b9d40e1329780d62ea2265d8a', 'test1', 1, 196, '2021-03-11 09:44:37', NULL, NULL),
(12, 2, 'Paras', NULL, NULL, 'sallar@gmail.com', '9779545526', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 1, 196, '2021-03-11 11:06:33', NULL, NULL),
(13, 2, 'Paras', NULL, NULL, '11march@seller.com', '8968900775', '0192023a7bbd73250516f069df18b500', 'admin123', 1, 3, '2021-03-11 11:07:06', NULL, NULL),
(14, 3, NULL, NULL, NULL, '11Harshmarch@gmail.com', NULL, '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 1, '2021-03-11 11:10:38', NULL, NULL),
(15, 3, NULL, NULL, NULL, 'testseller@gmail.com', NULL, '0192023a7bbd73250516f069df18b500', 'admin123', 1, 5, '2021-03-11 11:11:22', NULL, NULL),
(16, 3, NULL, NULL, NULL, '11Harshmarchseller@gmail.com', NULL, '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 2, '2021-03-11 11:12:29', NULL, NULL),
(17, 2, NULL, NULL, NULL, 'testbuyer@gmail.com', NULL, '0192023a7bbd73250516f069df18b500', 'admin123', 1, 8, '2021-03-11 11:14:35', NULL, NULL),
(18, 2, 'DS', NULL, NULL, 'D@gmail.com', '9876543210', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 1, 196, '2021-03-18 10:27:38', NULL, NULL),
(19, 3, NULL, NULL, NULL, 'buy@gmail.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', '1234', 1, 8, '2021-03-18 10:36:55', NULL, NULL),
(20, 2, NULL, NULL, NULL, 'by@gmail.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', '1234', 1, 13, '2021-03-18 10:38:38', NULL, NULL),
(21, 2, NULL, NULL, NULL, 'geogatedproject364@gmail.com', NULL, 'd0aabe9a362cb2712ee90e04810902f3', 'Hello123', 1, 231, '2021-03-23 07:16:14', NULL, NULL),
(22, 1, NULL, NULL, NULL, 'geogatedproject357@gmail.com', NULL, '1ff725debe9220a9956f63ee1f22df4c', '1032275619', 1, 2, '2021-03-23 07:55:39', NULL, NULL),
(23, 1, NULL, NULL, NULL, 'Ad@gmail.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', '1234', 1, 1, '2021-03-31 11:04:20', NULL, NULL),
(24, 3, NULL, NULL, NULL, 'add@gmail.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', '1234', 1, 4, '2021-03-31 11:05:55', NULL, NULL),
(25, 1, NULL, NULL, NULL, 'denielsingh@gmail.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', '1234', 1, 196, '2021-04-01 13:50:44', NULL, NULL),
(26, 2, 'testtest', NULL, NULL, 'testing@gmail.com', '7894561230', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 1, 196, '2021-04-01 14:44:15', NULL, NULL),
(27, 2, NULL, NULL, NULL, 'keshav@oxeenit.com', NULL, '2dd46631a4d9ac14cdde2b7ed24f8f66', 'admin@123/////', 1, 101, '2021-04-05 18:04:59', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_industry`
--
ALTER TABLE `business_industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_sector`
--
ALTER TABLE `company_sector`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries_preference`
--
ALTER TABLE `industries_preference`
  ADD PRIMARY KEY (`ipid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `profile_gallery_images_docs`
--
ALTER TABLE `profile_gallery_images_docs`
  ADD PRIMARY KEY (`pmid`);

--
-- Indexes for table `send_proposal`
--
ALTER TABLE `send_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_industry`
--
ALTER TABLE `business_industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `company_sector`
--
ALTER TABLE `company_sector`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `industries_preference`
--
ALTER TABLE `industries_preference`
  MODIFY `ipid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `profile_gallery_images_docs`
--
ALTER TABLE `profile_gallery_images_docs`
  MODIFY `pmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `send_proposal`
--
ALTER TABLE `send_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
