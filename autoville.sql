-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2015 at 07:04 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoville`
--

-- --------------------------------------------------------

--
-- Table structure for table `advanced_search_content`
--

CREATE TABLE IF NOT EXISTS `advanced_search_content` (
  `advanced_search_content_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `added_by` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `body_type`
--

CREATE TABLE IF NOT EXISTS `body_type` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `body_type`
--

INSERT INTO `body_type` (`id`, `name`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'Hatchback', '1', '0', '2015-03-21 14:20:59', 3, NULL, NULL),
(2, 'Saloon', '1', '0', '2015-03-21 14:22:30', 3, NULL, NULL),
(3, 'Station wagon', '1', '0', '2015-03-21 14:24:22', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookmarked_vehicles`
--

CREATE TABLE IF NOT EXISTS `bookmarked_vehicles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `title`, `description`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'interface', 'interfaces are very attractive. i was highly motivated to refer this website because of their attractive interfaces', '1', '0', '2015-05-03 12:59:36', NULL, NULL, NULL),
(2, 'Service', 'Service was quite impressive. i could be able to find my dream car because of this web site', '1', '0', '2015-05-09 12:59:36', NULL, NULL, NULL),
(6, 'Regarding the service', 'It would be much better if you can give more features regarding vehicles. <br/>This also good. but it would be much better if there is a facility to see the locations of the vehicles', '1', '0', '2015-05-11 12:59:36', 0, NULL, NULL),
(7, 'Regarding Prices', 'The Prices are really high in this website. we can find vehicles for less amount of price than this.', '1', '0', '2015-05-11 12:59:36', NULL, NULL, NULL),
(8, 'tttttttttttttttttt', 'fvvvvvvvvvvvvvvvvvvv', '1', '0', '2015-05-12 07:01:34', 1, NULL, NULL),
(9, 'tttttttttttttttttt', 'fvvvvvvvvvvvvvvvvvvv', '1', '0', '2015-05-12 07:01:34', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `content_hcode` varchar(20) NOT NULL,
  `delete_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = deleted , 0  =  not deleted',
  `added_by` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`content_id`, `content_title`, `content`, `content_hcode`, `delete_status`, `added_by`, `added_date`, `updated_by`, `updated_date`) VALUES
(1, 'About Us', '<p>\n	&nbsp;</p>\n<p>\n	MonaruLanka is a fully Sri Lankan owned private sector organization that was born out of a deep passion for the nation, and bearing an affinity for the country&rsquo;s unique heritage and cultural diversity.11</p>\n<p>\n	Incorporated as a limited liability company in September 2011, MonaruLanka has achieved many of its initial targets and milestones and is currently at the 7th Stage of Civil Aviation Authority of Sri Lanka&rsquo;s Air Operator Certificate (AOC).</p>\n<p>\n	Long distance air travel should no more be considered a luxury that is enjoyed by a select few. Connecting people, families and businesses across continents, MonaruLanka&rsquo;s vision is to provide affordable air travel to everyone. It will be operated with the best of efficiencies while with the highest safety and cutting-edge operating standards of the industry, and the airline will initially be equipped with two Airbus A330-200 aircraft. Not least among its many aims will be to raise Sri Lanka&rsquo;s reach and standing in the global arena, assisting the country in its forward march towards prosperity.</p>\n<p>\n	MonaruLanka is managed by professionals with decades of airline experience who understand that the bottom-line which matters is really the happy and satisfied customer that is truly our guest.</p>\n<p>\n	With professionally trained staff who are fully passenger-focused, MonaruLanka will partner our guests in their unique journeys to make your trip the best possible experience.</p>\n<p>\n	<a href="/content_files/files/(certificate company).pdf" target="_blank">&gt;&gt; View Our Business Registration <br />\n	</a></p>\n', 'ABOUTUS', '0', 1, '2014-05-28 07:12:16', NULL, NULL),
(2, 'Destinations', '<div class="destination-page"> <strong>Commencing operations with initial services to&hellip;<br />\n  </strong>\n  <p>&nbsp; </p>\n  <p> <i class="fa  fa-plane"></i> Australia</p>\n  <p> <i class="fa  fa-plane"> </i> South Africa</p>\n  <p> <i class="fa  fa-plane"></i> China</p>\n</div>\n', 'DESTINATIONS', '0', 1, '2014-05-28 00:00:00', NULL, NULL),
(3, 'Rightside Snippet', '<div class="right-snipt">\n	<a href="/index.php/destinations"><img alt="" class="img-responsive" src="/content_files/images/destinations-btn.jpg" /></a></div>\n<!--<div class="right-snipt">\n	<a href="#"><img alt="" class="img-responsive" src="/content_files/images/destinations-btn(1).jpg" /></a></div>-->', 'RIGHTSIDESNIPPET', '0', 1, '2014-05-28 06:28:41', NULL, NULL),
(4, 'Welcome Message - Home Page', '<p style="text-align: justify;">\n	MonaruLanka is the first long range low-cost carrier from the Pearl of the Indian ocean, Sri Lanka, and the project of many professionals involved from various disciples. We are an entity geared to serve our guest in the most professional, warm and friendly manner. We at MonaruLanka, with the blessings of the governance of the country, welcome all onboard for an unforgettable journey via the most beautiful island of the Indian Ocean, SRI LANKA.</p>\n', 'WELCOMEHOMEPAGE', '0', 1, '2014-05-28 06:28:41', NULL, NULL),
(5, 'Welcome To Monaru Lanka', 'test welcoem inner page', 'WELCOMEINNERPAGE', '0', 1, '2014-05-28 07:12:16', NULL, NULL),
(6, 'Why Us', '<div class="row">\n	<div class="col-xs-2 text-right">\n		<img alt="" height="46" src="/content_files/images/email-ico.png" width="46" /></div>\n	<div class="col-xs-10">\n		<h3>\n			Sign up today!</h3>\n		<p>\n			Register your email with us and be the first to know about latest offers and promotions.</p>\n	</div>\n</div>\n', 'WHYUS', '0', 1, '2014-08-18 00:00:00', NULL, NULL),
(7, 'Careers', '<p>\n	We are a low cost , long range airline. We are in the process of forming our operational and administrative team. Currently we are recruiting for the below mentioned positionsif you are interested in an exciting and a rewarding career with dynamic and well managed, forward thinking airline,<br />\n	please attach c.v <br />\n	fill and submit the below form</p>\n<table border="0" cellpadding="3" cellspacing="0" width="100%">\n	<tbody>\n		<tr>\n			<td width="2%">\n				&nbsp;</td>\n			<td width="25%">\n				A330 Captains</td>\n			<td width="2%">\n				&nbsp;</td>\n			<td width="40%">\n				Occ Officers</td>\n			<td width="2%">\n				&nbsp;</td>\n			<td width="29%">\n				Station Officer</td>\n				\n				\n				\n				\n				\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				A330 F/Officers</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Engineering and Maint Quality Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Commercial Manager</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Operations Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				A330tre Pilot</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Finance Manager</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Safety And Quality Manger</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Flight Attendants (Male/Female)</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Executive Secretary</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Security Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Cabin Crew Managers</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Transport Manager</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Maintenance Director</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Aircraft Maintenance Engineer B1and B2(Trent/Ge)</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Human Resource Officers</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Maintenance Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Cargo Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Training Manager</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Mcc/Occ Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Cargo Officer</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Mcc Eng B1and B2</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Station Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n		</tr>\n	</tbody>\n</table>', 'CAREERS', '0', 0, '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`) VALUES
(2, 'Afghanistan'),
(5, 'Albania'),
(61, 'Algeria'),
(10, 'American Samoa'),
(1, 'Andorra'),
(7, 'Angola'),
(4, 'Anguilla'),
(8, 'Antarctica'),
(3, 'Antigua and Barbuda'),
(9, 'Argentina'),
(6, 'Armenia'),
(13, 'Aruba'),
(12, 'Australia'),
(11, 'Austria'),
(15, 'Azerbaijan'),
(31, 'Bahamas'),
(22, 'Bahrain'),
(18, 'Bangladesh'),
(17, 'Barbados'),
(35, 'Belarus'),
(19, 'Belgium'),
(36, 'Belize'),
(24, 'Benin'),
(26, 'Bermuda'),
(32, 'Bhutan'),
(28, 'Bolivia'),
(29, 'Bonaire'),
(16, 'Bosnia and Herzegovina'),
(34, 'Botswana'),
(33, 'Bouvet Island'),
(30, 'Brazil'),
(105, 'British Indian Ocean Territory'),
(239, 'British Virgin Islands'),
(27, 'Brunei'),
(21, 'Bulgaria'),
(20, 'Burkina Faso'),
(23, 'Burundi'),
(116, 'Cambodia'),
(46, 'Cameroon'),
(37, 'Canada'),
(51, 'Cape Verde'),
(123, 'Cayman Islands'),
(40, 'Central African Republic'),
(214, 'Chad'),
(45, 'Chile'),
(47, 'China'),
(53, 'Christmas Island'),
(38, 'Cocos [Keeling] Islands'),
(48, 'Colombia'),
(118, 'Comoros'),
(44, 'Cook Islands'),
(49, 'Costa Rica'),
(97, 'Croatia'),
(50, 'Cuba'),
(52, 'Curacao'),
(54, 'Cyprus'),
(55, 'Czech Republic'),
(39, 'Democratic Republic of the Congo'),
(58, 'Denmark'),
(57, 'Djibouti'),
(59, 'Dominica'),
(60, 'Dominican Republic'),
(220, 'East Timor'),
(62, 'Ecuador'),
(64, 'Egypt'),
(209, 'El Salvador'),
(87, 'Equatorial Guinea'),
(66, 'Eritrea'),
(63, 'Estonia'),
(68, 'Ethiopia'),
(71, 'Falkland Islands'),
(73, 'Faroe Islands'),
(70, 'Fiji'),
(69, 'Finland'),
(74, 'France'),
(79, 'French Guiana'),
(174, 'French Polynesia'),
(215, 'French Southern Territories'),
(75, 'Gabon'),
(84, 'Gambia'),
(78, 'Georgia'),
(56, 'Germany'),
(81, 'Ghana'),
(82, 'Gibraltar'),
(88, 'Greece'),
(83, 'Greenland'),
(77, 'Grenada'),
(86, 'Guadeloupe'),
(91, 'Guam'),
(90, 'Guatemala'),
(80, 'Guernsey'),
(85, 'Guinea'),
(92, 'Guinea-Bissau'),
(93, 'Guyana'),
(98, 'Haiti'),
(95, 'Heard Island and McDonald Islands'),
(96, 'Honduras'),
(94, 'Hong Kong'),
(99, 'Hungary'),
(108, 'Iceland'),
(104, 'India'),
(100, 'Indonesia'),
(107, 'Iran'),
(106, 'Iraq'),
(101, 'Ireland'),
(103, 'Isle of Man'),
(102, 'Israel'),
(109, 'Italy'),
(43, 'Ivory Coast'),
(111, 'Jamaica'),
(113, 'Japan'),
(110, 'Jersey'),
(112, 'Jordan'),
(124, 'Kazakhstan'),
(114, 'Kenya'),
(117, 'Kiribati'),
(245, 'Kosovo'),
(122, 'Kuwait'),
(115, 'Kyrgyzstan'),
(125, 'Laos'),
(134, 'Latvia'),
(126, 'Lebanon'),
(131, 'Lesotho'),
(130, 'Liberia'),
(135, 'Libya'),
(128, 'Liechtenstein'),
(132, 'Lithuania'),
(133, 'Luxembourg'),
(147, 'Macao'),
(143, 'Macedonia'),
(141, 'Madagascar'),
(155, 'Malawi'),
(157, 'Malaysia'),
(154, 'Maldives'),
(144, 'Mali'),
(152, 'Malta'),
(142, 'Marshall Islands'),
(149, 'Martinique'),
(150, 'Mauritania'),
(153, 'Mauritius'),
(247, 'Mayotte'),
(156, 'Mexico'),
(72, 'Micronesia'),
(138, 'Moldova'),
(137, 'Monaco'),
(146, 'Mongolia'),
(139, 'Montenegro'),
(151, 'Montserrat'),
(136, 'Morocco'),
(158, 'Mozambique'),
(145, 'Myanmar [Burma]'),
(159, 'Namibia'),
(168, 'Nauru'),
(167, 'Nepal'),
(165, 'Netherlands'),
(160, 'New Caledonia'),
(170, 'New Zealand'),
(164, 'Nicaragua'),
(161, 'Niger'),
(163, 'Nigeria'),
(169, 'Niue'),
(162, 'Norfolk Island'),
(120, 'North Korea'),
(148, 'Northern Mariana Islands'),
(166, 'Norway'),
(171, 'Oman'),
(177, 'Pakistan'),
(184, 'Palau'),
(182, 'Palestine'),
(172, 'Panama'),
(175, 'Papua New Guinea'),
(185, 'Paraguay'),
(173, 'Peru'),
(176, 'Philippines'),
(180, 'Pitcairn Islands'),
(178, 'Poland'),
(183, 'Portugal'),
(181, 'Puerto Rico'),
(186, 'Qatar'),
(41, 'Republic of the Congo'),
(187, 'Réunion'),
(188, 'Romania'),
(190, 'Russia'),
(191, 'Rwanda'),
(25, 'Saint Barthélemy'),
(198, 'Saint Helena'),
(119, 'Saint Kitts and Nevis'),
(127, 'Saint Lucia'),
(140, 'Saint Martin'),
(179, 'Saint Pierre and Miquelon'),
(237, 'Saint Vincent and the Grenadines'),
(244, 'Samoa'),
(203, 'San Marino'),
(208, 'São Tomé and Príncipe'),
(192, 'Saudi Arabia'),
(204, 'Senegal'),
(189, 'Serbia'),
(194, 'Seychelles'),
(202, 'Sierra Leone'),
(197, 'Singapore'),
(210, 'Sint Maarten'),
(201, 'Slovakia'),
(199, 'Slovenia'),
(193, 'Solomon Islands'),
(205, 'Somalia'),
(248, 'South Africa'),
(89, 'South Georgia and the South Sandwich Islands'),
(121, 'South Korea'),
(207, 'South Sudan'),
(67, 'Spain'),
(129, 'Sri Lanka'),
(195, 'Sudan'),
(206, 'Suriname'),
(200, 'Svalbard and Jan Mayen'),
(212, 'Swaziland'),
(196, 'Sweden'),
(42, 'Switzerland'),
(211, 'Syria'),
(227, 'Taiwan'),
(218, 'Tajikistan'),
(228, 'Tanzania'),
(217, 'Thailand'),
(216, 'Togo'),
(219, 'Tokelau'),
(223, 'Tonga'),
(225, 'Trinidad and Tobago'),
(222, 'Tunisia'),
(224, 'Turkey'),
(221, 'Turkmenistan'),
(213, 'Turks and Caicos Islands'),
(226, 'Tuvalu'),
(231, 'U.S. Minor Outlying Islands'),
(240, 'U.S. Virgin Islands'),
(230, 'Uganda'),
(229, 'Ukraine'),
(232, 'United Arab Emirates'),
(76, 'United Kingdom'),
(233, 'United States'),
(234, 'Uruguay'),
(235, 'Uzbekistan'),
(242, 'Vanuatu'),
(236, 'Vatican City'),
(238, 'Venezuela'),
(241, 'Vietnam'),
(243, 'Wallis and Futuna'),
(65, 'Western Sahara'),
(246, 'Yemen'),
(249, 'Zambia'),
(250, 'Zimbabwe'),
(14, 'Åland');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`) VALUES
(0, 'All'),
(1, 'Ampara'),
(2, 'Anuradhapura'),
(3, 'Badulla'),
(4, 'Batticaloa'),
(5, 'Colombo'),
(6, 'Galle'),
(7, 'Gampaha'),
(8, 'Hambantota'),
(9, 'Jaffna'),
(10, 'Kalutara'),
(11, 'Kandy'),
(12, 'Kegalle'),
(13, 'Kilinochchi'),
(14, 'Kurunegala'),
(15, 'Mannar'),
(16, 'Matale'),
(17, 'Matara'),
(18, 'Moneragala'),
(19, 'Mullaitivu'),
(20, 'Nuwara Eliya'),
(21, 'Polonnaruwa'),
(22, 'Puttalam'),
(23, 'Ratnapura'),
(24, 'Trincomalee'),
(25, 'Vavuniya');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'ABS', '1', '0', '2015-03-15 18:29:36', 1, '2015-03-15 18:29:36', 1),
(2, 'EDS', '1', '0', '2015-03-15 18:29:36', 1, '2015-03-15 18:29:36', 1),
(3, 'ESP', '1', '0', '2015-03-15 18:29:36', 1, '2015-03-15 18:29:36', 1),
(4, 'Air Conditioning', '1', '0', '2015-03-15 18:29:36', 1, '2015-03-15 18:29:36', 1),
(5, 'Panaromic roof', '1', '0', '2015-03-15 18:29:36', 1, '2015-03-15 18:29:36', 1),
(6, 'protection framework', '1', '0', '2015-03-15 18:29:36', 1, '2015-03-15 18:29:36', 1),
(7, 'Tow', '1', '0', '2015-03-15 18:29:36', 1, '2015-03-15 18:29:36', 1),
(8, 'Traction control', '1', '0', '2015-03-15 18:29:36', 1, '2015-03-15 18:29:36', 1),
(9, 'Steering wheel controls', '1', '0', '2015-03-15 18:29:36', 1, '2015-03-15 18:29:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fuel_type`
--

CREATE TABLE IF NOT EXISTS `fuel_type` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuel_type`
--

INSERT INTO `fuel_type` (`id`, `name`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(2, 'Petrol', '1', '0', '2015-03-21 14:27:56', 1, NULL, NULL),
(3, 'Diesel', '1', '0', '2015-03-21 14:28:07', 1, NULL, NULL),
(4, 'Hybrid', '1', '0', '2015-03-21 14:28:14', 1, NULL, NULL),
(5, 'Electric', '1', '0', '2015-03-21 14:28:21', 1, NULL, NULL),
(6, 'adc', '0', '1', '2015-03-22 08:14:43', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inqurie`
--

CREATE TABLE IF NOT EXISTS `inqurie` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `added_by` int(11) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE IF NOT EXISTS `manufacture` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `vehicle_type` enum('1','2','3') NOT NULL DEFAULT '1',
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`id`, `name`, `description`, `logo`, `vehicle_type`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'Toyota', '0', 'manufacture_logo1426963689-toyota logo.jpg', '1', '1', '0', '2015-03-21 14:17:47', 2, NULL, 1),
(2, 'BMW', '0', 'manufacture_logo1426963712-BMW.jpg', '1', '1', '0', '2015-03-21 14:18:09', 2, NULL, 1),
(3, 'Lamborghini ', '0', 'manufacture_logo1426963731-lamborghini_logo.png', '1', '1', '0', '2015-03-21 14:18:28', 2, NULL, 1),
(4, 'Ford', '0', 'manufacture_logo1426963740-Ford logo.jpg', '1', '1', '0', '2015-03-21 14:18:38', 2, NULL, 1),
(5, 'Mazda', '0', 'manufacture_logo1426963763-Mazda logo.jpg', '1', '1', '0', '2015-03-21 14:19:01', 2, NULL, 1),
(6, 'Nissan', '0', 'manufacture_logo1426963785-Nissan logo.jpg', '1', '1', '0', '2015-03-21 14:19:22', 2, NULL, 1),
(7, 'Suzuki', '0', 'manufacture_logo1426963805-suzuki.jpg', '1', '1', '0', '2015-03-21 14:19:42', 2, '2015-03-24 11:53:43', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `manufacturer_id`, `name`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(7, 2, 'M3 GTR', '1', '0', '2015-03-21 14:15:08', 2, '2015-03-25 12:18:15', 2),
(8, 4, 'Mustang GT', '1', '0', '2015-03-21 14:15:21', 2, '2015-03-25 12:19:02', 2),
(9, 3, 'Aventador', '1', '0', '2015-03-21 14:15:34', 2, '2015-03-24 11:53:23', 2),
(10, 5, 'RX-8', '1', '0', '2015-03-21 14:15:48', 2, '2015-03-25 12:18:45', 2),
(11, 6, 'Skyline', '1', '0', '2015-03-21 14:16:01', 2, '2015-03-24 11:53:14', 2),
(12, 7, 'Maruti', '1', '0', '2015-03-21 14:16:14', 2, '2015-03-24 11:53:32', 2),
(13, 7, 'Swift', '1', '0', '2015-03-21 14:16:25', 2, '2015-03-25 12:16:33', 2),
(14, 1, 'Corolla', '1', '0', '2015-03-21 14:16:34', 2, NULL, NULL),
(15, 1, 'Prius', '1', '0', '2015-03-21 14:16:46', 2, '2015-03-24 11:52:44', 2),
(16, 1, 'Vitz', '1', '0', '2015-03-21 14:16:57', 2, '2015-03-26 02:24:06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
  `privilege_code` int(11) NOT NULL,
  `privilege_master_code` int(11) NOT NULL,
  `privilege` varchar(100) NOT NULL,
  `privilege_description` varchar(1000) NOT NULL,
  `priviledge_code_HF` varchar(100) NOT NULL COMMENT 'Human Friendly Priviledge Code',
  `assign_for` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`privilege_code`, `privilege_master_code`, `privilege`, `privilege_description`, `priviledge_code_HF`, `assign_for`) VALUES
(11, 8, 'Add Advertisement', 'Add Advertisement', 'ADD_ADVERTISEMENT', '1'),
(12, 8, 'Edit Advertisement', 'Edit Advertisement', 'EDIT_ADVERTISEMENT', '1'),
(13, 8, 'Delete Advertisement', 'Delete Advertisement', 'DELETE_ADVERTISEMENT', '1'),
(15, 9, 'Edit Pages', 'Edit Pages', 'EDIT_PAGES', '1'),
(16, 9, 'View Pages', 'View Pages', 'VIEW_PAGES', '1'),
(18, 11, 'View Master Privileges', 'View Master Privileges', 'VIEW_MASTER_PRIVILEGES', '1'),
(19, 11, 'Add Master Privileges', 'Add Master Privileges', 'ADD_MASTER_PRIVILEGES', '1'),
(20, 11, 'Edit Master Privileges', 'Edit Master Privileges', 'EDIT_MASTER_PRIVILEGES', '1'),
(21, 11, 'Delete Master Privileges', 'Delete Master Privileges', 'DELETE_MASTER_PRIVILEGES', '1'),
(22, 11, 'View Privileges', 'View Privileges', 'VIEW_PRIVILEGES', '1'),
(23, 11, 'Add Privileges', 'Add Privileges', 'ADD_PRIVILEGES', '1'),
(24, 11, 'Edit Privileges', 'Edit Privileges', 'EDIT_PRIVILEGES', '1'),
(25, 11, 'Delete Privileges', 'Delete Privileges', 'DELETE_PRIVILEGES', '1');

-- --------------------------------------------------------

--
-- Table structure for table `privilege_master`
--

CREATE TABLE IF NOT EXISTS `privilege_master` (
  `privilege_master_code` int(11) NOT NULL,
  `master_privilege` varchar(100) NOT NULL,
  `master_privilege_description` varchar(1000) NOT NULL,
  `system_code` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilege_master`
--

INSERT INTO `privilege_master` (`privilege_master_code`, `master_privilege`, `master_privilege_description`, `system_code`) VALUES
(8, 'Manage Advertisements', 'Manage Advertisements', 'ADVERTISEMENT'),
(9, 'Manage Pages', 'Manage Pages', 'PAGES'),
(11, 'Manage Privileges', 'Manage Privileges', 'SETTINGS'),
(12, 'Manage Reviews', 'Manage Reviews', 'REVIEWS');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `reg_no` varchar(200) NOT NULL,
  `reg_date` date DEFAULT NULL,
  `year` int(6) NOT NULL,
  `reg_country` int(11) NOT NULL,
  `origin_country` int(11) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `description`, `user_id`, `vehicle_id`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'gggggggggggggggg', 1, 17, '1', '0', '2015-05-12 07:03:10', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `searched_vehicles`
--

CREATE TABLE IF NOT EXISTS `searched_vehicles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searched_vehicles`
--

INSERT INTO `searched_vehicles` (`id`, `user_id`, `vehicle_id`, `date`) VALUES
(70, 1, 4, '2015-07-17 13:37:18'),
(71, 1, 5, '2015-07-17 13:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

CREATE TABLE IF NOT EXISTS `transmission` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transmission`
--

INSERT INTO `transmission` (`id`, `name`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(54, 'Automatic', '1', '0', '2015-03-21 14:13:45', 2, NULL, NULL),
(55, 'Mannual', '1', '0', '2015-03-21 14:13:51', 2, NULL, NULL),
(56, 'Automated Manual', '1', '0', '2015-03-21 14:14:22', 2, NULL, NULL),
(57, 'Continuously Variable', '1', '0', '2015-03-21 14:14:39', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `name` varchar(300) NOT NULL,
  `user_name` varchar(300) NOT NULL,
  `user_type` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no_1` varchar(15) DEFAULT NULL,
  `contact_no_2` varchar(15) DEFAULT NULL,
  `profile_pic` varchar(500) DEFAULT NULL,
  `password` varchar(300) NOT NULL,
  `account_activation_code` varchar(500) DEFAULT NULL,
  `is_online` enum('1','0') NOT NULL DEFAULT '1' COMMENT 'Online =1,Offline=0',
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_by` int(11) DEFAULT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `title`, `name`, `user_name`, `user_type`, `email`, `address`, `contact_no_1`, `contact_no_2`, `profile_pic`, `password`, `account_activation_code`, `is_online`, `is_published`, `is_deleted`, `added_by`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, 'Mr', 'Robert Pattinson', 'admin', 1, 'tom@gmail.com', 'No 6,USA', '0772348892', '', 'avatar.png', '81dc9bdb52d04dc20036dbd8313ed055', '', '1', '1', '0', 0, '2015-03-21 18:29:36', '2015-08-17 05:38:44', 0),
(2, 'Ms', 'Gayathma Perera', 'gayathma', 1, 'gayathma3@gmail.com', 'No 6,Panadura', '0719234567', NULL, 'avatar.png', 'e10adc3949ba59abbe56e057f20f883e', '', '0', '1', '0', 0, '2015-08-24 06:21:03', NULL, 0),
(3, 'Ms', 'Nadeesha Perera', 'nadeesha', 3, 'niklakshaya@gmail.com', 'No 5,Angoda', '0716273829', NULL, 'avatar.png', '827548485795e8a0b2670d3981427ec2', '', '0', '1', '0', 0, '2015-08-24 06:21:38', NULL, 0),
(4, 'Ms', 'Ashani Dias', 'ashani', 3, 'ashanidiaz@gmail.com', 'No 7,Galle', '0756778234', NULL, 'avatar.png', 'aad619af8f7157a1d4d40cfbebf0de8e', '', '1', '1', '0', 0, '2015-08-24 06:22:07', NULL, 0),
(5, 'Ms', 'Ishani Pathinayake', 'ishani', 2, 'ishanipathinayake@gmail.com', 'No 9,Moratuwa', '0716728356', NULL, 'avatar.png', '8cb50fdc11cf40b2a2f0a5a78c7bfe8f', '', '0', '1', '0', 0, '2015-08-24 06:22:34', NULL, 0),
(6, 'Ms', 'Heshani Herath', 'heshani', 1, 'heshani7.herath@gmail.com', 'No 4,Rathmalana', '0719234567', NULL, 'avatar.png', 'f970e2767d0cfe75876ea857f92e319b', '', '0', '1', '0', 0, '2015-08-24 06:23:02', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_privileges`
--

CREATE TABLE IF NOT EXISTS `user_privileges` (
  `user_privilege_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `privilege_code` int(11) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_privileges`
--

INSERT INTO `user_privileges` (`user_privilege_code`, `user_id`, `privilege_code`, `added_date`) VALUES
(37, 1, 12, '2015-03-20 18:25:17'),
(38, 1, 13, '2015-03-20 18:25:17'),
(39, 1, 15, '2015-03-20 18:25:17'),
(40, 1, 16, '2015-03-20 18:25:17'),
(41, 1, 18, '2015-03-20 18:25:17'),
(42, 1, 19, '2015-03-20 18:25:17'),
(43, 1, 20, '2015-03-20 18:25:17'),
(44, 1, 21, '2015-03-20 18:25:17'),
(45, 1, 11, '2015-03-22 10:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL,
  `type` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Registered User');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_advertisements`
--

CREATE TABLE IF NOT EXISTS `vehicle_advertisements` (
  `id` int(11) NOT NULL,
  `vehicle_type` enum('1','2','3') NOT NULL DEFAULT '1',
  `transmission_id` int(11) NOT NULL,
  `year` int(5) NOT NULL,
  `fuel_type_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `body_type_id` int(11) NOT NULL,
  `doors` int(11) NOT NULL,
  `cilindrics` int(11) DEFAULT NULL,
  `colour` varchar(100) NOT NULL,
  `description` text,
  `chassis_no` varchar(200) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `kilometers` int(10) DEFAULT NULL,
  `sale_type` enum('Used','New','Reconditioned') NOT NULL DEFAULT 'New',
  `location_id` int(11) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_featured` enum('2','1','0') NOT NULL DEFAULT '0',
  `is_price_drop` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_advertisements`
--

INSERT INTO `vehicle_advertisements` (`id`, `vehicle_type`, `transmission_id`, `year`, `fuel_type_id`, `manufacture_id`, `model_id`, `body_type_id`, `doors`, `cilindrics`, `colour`, `description`, `chassis_no`, `price`, `kilometers`, `sale_type`, `location_id`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`, `is_featured`, `is_price_drop`) VALUES
(1, '1', 55, 2005, 3, 2, 7, 1, 4, NULL, 'White', 'The BMW M3 is a high-performance version of the BMW 3-Series\r\n', '3421', '250000.00', 23, 'Used', 5, '1', '0', '2015-03-21 14:51:03', 1, NULL, NULL, '1', '1'),
(2, '1', 55, 2006, 3, 1, 1, 2, 4, NULL, 'White', 'The Toyota Corolla is a line of subcompact and compact cars manufactured by Toyota.', '235', '345000.00', 12, 'New', 7, '1', '0', '2015-03-21 14:55:23', 1, '2015-05-12 00:42:40', 1, '2', '0'),
(3, '1', 55, 2008, 2, 4, 4, 3, 4, NULL, 'Red', 'The Ford Mustang is an American automobile manufactured by the Ford Motor Company. ', '654', '540000.00', 12, 'Used', 6, '1', '0', '2015-03-21 15:01:02', 1, '2015-05-12 00:37:30', 1, '1', '0'),
(4, '1', 54, 2013, 2, 5, 10, 1, 4, NULL, 'Red', 'The Mazda RX-8 was a sports car manufactured by Mazda', '546', '400000.00', 23, 'Used', 3, '1', '0', '2015-03-21 15:03:14', 1, NULL, NULL, '2', '0'),
(5, '1', 55, 2001, 2, 6, 11, 3, 4, NULL, 'Blue', 'The Nissan Skyline is a line of compact cars, sports cars and compact executive cars originally produced by the Prince Motor Company.', '43', '540200.00', 12, 'New', 5, '1', '0', '2015-03-21 15:05:37', 1, NULL, NULL, '2', '0'),
(6, '1', 55, 1996, 3, 7, 12, 1, 4, NULL, 'Blue', 'Maruti Suzuki  is an automobile manufacturer in India.', '542', '230000.00', 32, 'Used', 7, '1', '0', '2015-03-21 15:08:06', 1, NULL, NULL, '0', '0'),
(7, '1', 54, 2013, 4, 1, 15, 1, 4, NULL, 'Black', 'The Toyota Prius is a full hybrid electric mid-size hatchback, developed and manufactured by Toyota.', '432', '1000000.00', 42, 'New', 5, '1', '0', '2015-03-21 15:10:47', 1, NULL, NULL, '2', '0'),
(8, '1', 55, 2010, 3, 7, 13, 1, 4, NULL, 'Blue', 'The Suzuki Swift is a subcompact car produced by Suzuki in Japan since 2000', '32', '230300.00', 65, 'Used', 5, '1', '0', '2015-03-21 15:14:18', 1, NULL, NULL, '0', '1'),
(9, '1', 55, 2003, 3, 1, 16, 2, 4, NULL, 'White', 'The Toyota Vitz is a line of three- and five-door hatchback subcompact cars produced  by the Japanese automobile manufacturer Toyota', '54', '540000.00', 12, 'Used', 5, '1', '0', '2015-03-21 15:16:43', 1, NULL, NULL, '0', '0'),
(10, '1', 55, 1993, 2, 5, 10, 2, 4, NULL, 'Yellow', 'Mazda RX-8 yellow car', '434', '3005000.00', 23, 'Used', 5, '1', '0', '2015-03-26 02:04:01', 1, NULL, NULL, '0', '0'),
(11, '1', 54, 2004, 3, 4, 8, 1, 4, NULL, 'Purple', 'Ford Mustang GT purple', '874', '5000000.00', 200, 'Used', 7, '1', '0', '2015-03-26 02:12:04', 1, NULL, NULL, '0', '1'),
(12, '1', 55, 2003, 3, 4, 8, 1, 4, NULL, 'Blue', 'Ford Mustang GT blue', '234', '10000000.00', 56, 'New', 4, '1', '0', '2015-03-26 02:13:24', 1, NULL, NULL, '0', '0'),
(13, '1', 57, 2007, 3, 4, 8, 1, 4, NULL, 'Yellow', 'Ford Mustang GT yellow', '32', '3000000.00', 43, 'Used', 1, '1', '0', '2015-03-26 02:15:05', 1, NULL, NULL, '0', '0'),
(14, '1', 57, 2006, 2, 6, 11, 1, 4, NULL, 'Pink', 'Nissan Skyline pink', '43', '3000000.00', 34, 'New', 2, '1', '0', '2015-03-26 02:21:29', 1, NULL, NULL, '0', '0'),
(15, '1', 56, 2013, 3, 6, 11, 2, 4, NULL, 'Green', 'Nissan skyline green', '32', '4560000.00', 43, 'Used', 5, '1', '0', '2015-03-26 02:23:06', 1, NULL, NULL, '0', '0'),
(16, '1', 56, 2006, 3, 1, 16, 3, 4, NULL, 'Pink', 'Toyota vits pink', '32', '5030000.00', 43, 'Used', 5, '1', '0', '2015-03-26 02:25:01', 1, NULL, NULL, '0', '0'),
(17, '1', 56, 2011, 3, 1, 16, 3, 4, NULL, 'Green', 'Toyota vits green', '3242', '6703000.00', 424, 'Used', 5, '1', '0', '2015-03-26 02:25:59', 1, NULL, NULL, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_compare`
--

CREATE TABLE IF NOT EXISTS `vehicle_compare` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_compare`
--

INSERT INTO `vehicle_compare` (`id`, `user_id`, `vehicle_id`, `added_date`) VALUES
(30, 1, 12, '2015-07-17 13:31:29'),
(31, 1, 15, '2015-07-17 13:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_equipment`
--

CREATE TABLE IF NOT EXISTS `vehicle_equipment` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_equipment`
--

INSERT INTO `vehicle_equipment` (`id`, `vehicle_id`, `equipment_id`) VALUES
(1, 9, 4),
(2, 9, 9),
(3, 9, 8),
(4, 1, 4),
(5, 1, 6),
(6, 1, 9),
(7, 2, 4),
(8, 3, 9),
(9, 4, 9),
(10, 4, 7),
(11, 4, 8),
(12, 5, 4),
(13, 5, 6),
(14, 6, 4),
(15, 6, 9),
(16, 7, 4),
(17, 8, 4),
(18, 9, 4),
(19, 10, 6),
(20, 11, 1),
(21, 11, 4),
(23, 12, 4),
(24, 12, 5),
(25, 13, 4),
(26, 14, 4),
(27, 15, 4),
(28, 16, 4),
(30, 17, 1),
(32, 17, 4),
(33, 17, 5),
(34, 3, 9),
(35, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_images`
--

CREATE TABLE IF NOT EXISTS `vehicle_images` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `caption` varchar(500) DEFAULT NULL,
  `image_path` varchar(500) NOT NULL,
  `is_published` enum('1','0') DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_images`
--

INSERT INTO `vehicle_images` (`id`, `vehicle_id`, `caption`, `image_path`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 1, NULL, 'BMW M3 GTR.jpg', '1', '0', '2015-03-21 14:51:04', 2, NULL, NULL),
(2, 2, NULL, 'Toyota Corolla.jpg', '1', '0', '2015-03-21 18:29:36', 2, NULL, NULL),
(3, 3, NULL, 'Ford Mustang GT.jpg', '1', '0', '2015-03-21 15:01:02', 2, NULL, NULL),
(4, 4, NULL, 'Mazda RX-8.jpg', '1', '0', '2015-03-21 15:03:15', 2, NULL, NULL),
(5, 5, NULL, 'Nissan Skyline.jpg', '1', '0', '2015-03-21 15:05:37', 2, NULL, NULL),
(6, 6, NULL, 'Suzuki Maruti.jpg', '1', '0', '2015-03-21 15:08:07', 2, NULL, NULL),
(7, 7, NULL, 'toyota prius.jpg', '1', '0', '2015-03-21 15:10:47', 2, NULL, NULL),
(8, 8, NULL, 'Suzuki Swift.jpg', '1', '0', '2015-03-21 15:14:18', 2, NULL, NULL),
(9, 9, NULL, 'toyota vits.jpg', '1', '0', '2015-03-21 15:16:43', 2, NULL, NULL),
(10, 10, NULL, 'mazda yellow.jpg', '1', '0', '2015-03-26 02:04:01', 2, NULL, NULL),
(11, 11, NULL, 'ford mustang purple.jpg', '1', '0', '2015-03-26 02:12:05', 2, NULL, NULL),
(12, 12, NULL, 'ford mustang blue.jpg', '1', '0', '2015-03-26 02:13:24', 2, NULL, NULL),
(13, 13, NULL, 'ford mustang yellow.jpg', '1', '0', '2015-03-26 02:15:06', 2, NULL, NULL),
(14, 14, NULL, 'Nissan GT R pink.jpg', '1', '0', '2015-03-26 02:21:29', 2, NULL, NULL),
(15, 15, NULL, 'nissan skyline gtr green.jpg', '1', '0', '2015-03-26 02:23:06', 2, NULL, NULL),
(16, 16, NULL, 'toyota vits pink.jpg', '1', '0', '2015-03-26 02:25:01', 2, NULL, NULL),
(17, 17, NULL, 'toyota vits green.jpg', '1', '0', '2015-03-26 02:25:59', 2, NULL, NULL),
(18, 3, NULL, 'ford mustang yellow.jpg', '1', '0', '2015-05-12 00:37:30', 1, NULL, NULL),
(19, 2, NULL, 'ford mustang yellow.jpg', '1', '0', '2015-05-12 00:42:40', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_images_temp`
--

CREATE TABLE IF NOT EXISTS `vehicle_images_temp` (
  `id` int(11) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `is_published` enum('1','0') DEFAULT '1',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_news`
--

CREATE TABLE IF NOT EXISTS `vehicle_news` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `is_latest` enum('1','0') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_news`
--

INSERT INTO `vehicle_news` (`id`, `title`, `content`, `is_published`, `is_deleted`, `is_latest`, `added_date`, `added_by`, `updated_by`, `updated_date`) VALUES
(2, 'Latest Prius Version has arrived', 'Toyota has introduced there latest Prius version. It is Prius 2015 model. It has developed in order to get the highest performance of the Toyota Prius version\n<br/><br/>\n<img src="http://releasedateprice2016.com/wp-content/uploads/2015-Toyota-Prius-plug-in-hybrid-610x313.jpg">', '1', '0', '0', '2015-05-04 12:59:36', 1, 0, '2015-05-05 12:59:36'),
(3, 'Honda Civic', 'The Honda Civic is a line of compact cars manufactured by Honda. Originally a subcompact, the Civic has gone through several generational changes, become both larger and more upmarket. It currently slots between the Honda Fit and Honda Accord.\r\n\r\nThe first Civic was introduced in July 1972 as a two-door model,[1] followed by a three-door hatchback that September. With an 1169 cc transverse engine and front-wheel drive like the British Mini, the car provided good interior space despite overall small dimensions.[2] Initially gaining a reputation for being fuel-efficient, reliable, and environmentally friendly, later iterations have become known for performance and sportiness, especially the Civic Type R, Civic VTi, Civic GTi and Civic SiR/Si.[3][4]\r\n\r\nThe Civic has been repeatedly rebadged for international markets, and served as the basis for the Honda CR-X, the Honda CR-X del Sol, the Honda Concerto, the first generation Honda Prelude, the Honda Civic Shuttle (later to become the Honda Orthia), and the Honda CR-V.\r\n\r\nAs of 2006, a total of 16.5 million Civics had been sold worldwide. With 7.3 million bought in the United States,[5] it has been a top seller both there[6][7][8] and in Canada, where it had placed #1 for 14 years through 2012.[9]\r\n\r\nIn Japan, as customers increasingly shifted to minivans and compact cars like Honda Fit, production of non-hybrid Civic ended in August 2010 with production of Civic hybrid ended in December 2010 when it no longer complied with Japanese Government dimension regulations in the width category. However, production of Civic and Civic hybrid for export markets continued.[10]\r\n\r\nOn April 1, 2015, at the New York Auto Show Honda unveiled a completely redesigned Civic.[11] In 2014 Honda sold 326,000 Civics in the United States.[12] In 2014 the Civic was the best selling car in Canada.[13]', '1', '0', '0', NULL, 1, NULL, NULL),
(7, 'Toyota Allion New 2015 version has arrived.', 'The Toyota Allion and similar Toyota Premio are sedans sold in Japan since 2001 by Toyota. The sedans are as designated as compact cars by Japanese regulations concerning exterior dimensions and engine displacement. The Allion is exclusive to Japanese Toyota dealerships Toyota Store, while the Premio is exclusive to Toyopet Store locations. Both cars are related to the Toyota Avensis, which is exclusive to Toyota Netz locations.', '1', '0', '0', '2015-05-11 12:59:36', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `website_advertisements`
--

CREATE TABLE IF NOT EXISTS `website_advertisements` (
  `id` int(11) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL,
  `is_featured` enum('2','1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advanced_search_content`
--
ALTER TABLE `advanced_search_content`
  ADD PRIMARY KEY (`advanced_search_content_id`);

--
-- Indexes for table `body_type`
--
ALTER TABLE `body_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookmarked_vehicles`
--
ALTER TABLE `bookmarked_vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country` (`country`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel_type`
--
ALTER TABLE `fuel_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inqurie`
--
ALTER TABLE `inqurie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`privilege_code`),
  ADD KEY `lcs_privilege_ibfk_1` (`privilege_master_code`);

--
-- Indexes for table `privilege_master`
--
ALTER TABLE `privilege_master`
  ADD PRIMARY KEY (`privilege_master_code`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searched_vehicles`
--
ALTER TABLE `searched_vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transmission`
--
ALTER TABLE `transmission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_privileges`
--
ALTER TABLE `user_privileges`
  ADD PRIMARY KEY (`user_privilege_code`),
  ADD UNIQUE KEY `Employeeuser_Priviledge_Code` (`user_privilege_code`),
  ADD KEY `Employee_Code` (`user_id`),
  ADD KEY `Privilege_Code` (`privilege_code`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_advertisements`
--
ALTER TABLE `vehicle_advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_compare`
--
ALTER TABLE `vehicle_compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_equipment`
--
ALTER TABLE `vehicle_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_images`
--
ALTER TABLE `vehicle_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_images_temp`
--
ALTER TABLE `vehicle_images_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_news`
--
ALTER TABLE `vehicle_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_advertisements`
--
ALTER TABLE `website_advertisements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `body_type`
--
ALTER TABLE `body_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bookmarked_vehicles`
--
ALTER TABLE `bookmarked_vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fuel_type`
--
ALTER TABLE `fuel_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `inqurie`
--
ALTER TABLE `inqurie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `privilege_code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `privilege_master`
--
ALTER TABLE `privilege_master`
  MODIFY `privilege_master_code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `searched_vehicles`
--
ALTER TABLE `searched_vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `transmission`
--
ALTER TABLE `transmission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_privileges`
--
ALTER TABLE `user_privileges`
  MODIFY `user_privilege_code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicle_advertisements`
--
ALTER TABLE `vehicle_advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `vehicle_compare`
--
ALTER TABLE `vehicle_compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `vehicle_equipment`
--
ALTER TABLE `vehicle_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `vehicle_images`
--
ALTER TABLE `vehicle_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `vehicle_images_temp`
--
ALTER TABLE `vehicle_images_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_news`
--
ALTER TABLE `vehicle_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `website_advertisements`
--
ALTER TABLE `website_advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `privilege`
--
ALTER TABLE `privilege`
  ADD CONSTRAINT `privilege_ibfk_1` FOREIGN KEY (`privilege_master_code`) REFERENCES `privilege_master` (`privilege_master_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_privileges`
--
ALTER TABLE `user_privileges`
  ADD CONSTRAINT `user_privileges_ibfk_1` FOREIGN KEY (`privilege_code`) REFERENCES `privilege` (`privilege_code`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
