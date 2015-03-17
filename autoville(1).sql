-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2015 at 06:46 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autoville`
--

-- --------------------------------------------------------

--
-- Table structure for table `body_type`
--

CREATE TABLE IF NOT EXISTS `body_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `body_type`
--

INSERT INTO `body_type` (`id`, `name`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'czxcxcxc', '1', '1', '0000-00-00 00:00:00', 3, NULL, 0),
(2, 'ggf', '1', '0', '2015-03-13 12:15:45', 3, '2015-03-13 12:15:45', 1),
(3, 'fsdfsdfdfd', '1', '1', '2015-03-14 04:46:10', 3, '2015-03-14 04:46:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `content_hcode` varchar(20) NOT NULL,
  `delete_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = deleted , 0  =  not deleted',
  `added_by` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`content_id`, `content_title`, `content`, `content_hcode`, `delete_status`, `added_by`, `added_date`, `updated_by`, `updated_date`) VALUES
(1, 'About Us', '&nbsp;\n\n	MonaruLanka is a fully Sri Lankan owned private sector organization that was born out of a deep passion for the nation, and bearing an affinity for the country’s unique heritage and cultural diversity.11\n\n	Incorporated as a limited liability company in September 2011, MonaruLanka has achieved many of its initial targets and milestones and is currently at the 7th Stage of Civil Aviation Authority of Sri Lanka’s Air Operator Certificate (AOC).\n\n	Long distance air travel should no more be considered a luxury that is enjoyed by a select few. Connecting people, families and businesses across continents, MonaruLanka’s vision is to provide affordable air travel to everyone. It will be operated with the best of efficiencies while with the highest safety and cutting-edge operating standards of the industry, and the airline will initially be equipped with two Airbus A330-200 aircraft. Not least among its many aims will be to raise Sri Lanka’s reach and standing in the global arena, assisting the country in its forward march towards prosperity.\n\n	MonaruLanka is managed by professionals with decades of airline experience who understand that the bottom-line which matters is really the happy and satisfied customer that is truly our guest.\n\n	With professionally trained staff who are fully passenger-focused, MonaruLanka will partner our guests in their unique journeys to make your trip the best possible experience.\n<span>\n	<a rel="" target="_blank">&gt;&gt; View Our Business Registration<br>\n	</a></span>', 'ABOUTUS', '0', 1, '2014-05-28 07:12:16', NULL, NULL),
(2, 'Destinations', '<div> <span><b>Commencing operations with initial services to…</b><br><b>\n  </b></span><b>\n  &nbsp; \n  </b><span><b> </b><i></i><b> Australia</b></span><b>\n  </b><span><b> </b><i><b> </b></i><b> South Africa</b></span><b>\n  </b><span><b> </b><i></i><b> China</b></span>\n</div>', 'DESTINATIONS', '0', 1, '2014-05-28 00:00:00', NULL, NULL),
(3, 'Rightside Snippet', '<div class="right-snipt">\n	<a href="/index.php/destinations"><img alt="" class="img-responsive" src="/content_files/images/destinations-btn.jpg" /></a></div>\n<!--<div class="right-snipt">\n	<a href="#"><img alt="" class="img-responsive" src="/content_files/images/destinations-btn(1).jpg" /></a></div>-->', 'RIGHTSIDESNIPPET', '0', 1, '2014-05-28 06:28:41', NULL, NULL),
(4, 'Welcome Message - Home Page', '<p style="text-align: justify;">\n	MonaruLanka is the first long range low-cost carrier from the Pearl of the Indian ocean, Sri Lanka, and the project of many professionals involved from various disciples. We are an entity geared to serve our guest in the most professional, warm and friendly manner. We at MonaruLanka, with the blessings of the governance of the country, welcome all onboard for an unforgettable journey via the most beautiful island of the Indian Ocean, SRI LANKA.</p>\n', 'WELCOMEHOMEPAGE', '0', 1, '2014-05-28 06:28:41', NULL, NULL),
(5, 'Welcome To Monaru Lanka', 'test welcoem inner page', 'WELCOMEINNERPAGE', '0', 1, '2014-05-28 07:12:16', NULL, NULL),
(6, 'Footer Right', '<div class="row">\n	<div class="col-xs-2 text-right">\n		<img alt="" height="46" src="/content_files/images/email-ico.png" width="46" /></div>\n	<div class="col-xs-10">\n		<h3>\n			Sign up today!</h3>\n		<p>\n			Register your email with us and be the first to know about latest offers and promotions.</p>\n	</div>\n</div>\n', 'FOOTERROGHT', '0', 1, '2014-08-18 00:00:00', NULL, NULL),
(7, 'Careers', '<p>\n	We are a low cost , long range airline. We are in the process of forming our operational and administrative team. Currently we are recruiting for the below mentioned positionsif you are interested in an exciting and a rewarding career with dynamic and well managed, forward thinking airline,<br />\n	please attach c.v <br />\n	fill and submit the below form</p>\n<table border="0" cellpadding="3" cellspacing="0" width="100%">\n	<tbody>\n		<tr>\n			<td width="2%">\n				&nbsp;</td>\n			<td width="25%">\n				A330 Captains</td>\n			<td width="2%">\n				&nbsp;</td>\n			<td width="40%">\n				Occ Officers</td>\n			<td width="2%">\n				&nbsp;</td>\n			<td width="29%">\n				Station Officer</td>\n				\n				\n				\n				\n				\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				A330 F/Officers</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Engineering and Maint Quality Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Commercial Manager</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Operations Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				A330tre Pilot</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Finance Manager</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Safety And Quality Manger</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Flight Attendants (Male/Female)</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Executive Secretary</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Security Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Cabin Crew Managers</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Transport Manager</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Maintenance Director</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Aircraft Maintenance Engineer B1and B2(Trent/Ge)</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Human Resource Officers</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Maintenance Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Cargo Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Training Manager</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Mcc/Occ Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Cargo Officer</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				Mcc Eng B1and B2</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				Station Manager</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n		</tr>\n	</tbody>\n</table>', 'CAREERS', '0', 0, '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `country` (`country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=251 ;

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
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'ABS', '1', '0', '2015-03-15 18:30:00', 1, '2015-03-15 18:30:00', 1),
(2, 'EDS', '1', '0', '2015-03-15 18:30:00', 1, '2015-03-15 18:30:00', 1),
(3, 'ESP', '1', '0', '2015-03-15 18:30:00', 1, '2015-03-15 18:30:00', 1),
(4, 'Air Conditioning', '1', '0', '2015-03-15 18:30:00', 1, '2015-03-15 18:30:00', 1),
(5, 'Panaromic roof', '1', '0', '2015-03-15 18:30:00', 1, '2015-03-15 18:30:00', 1),
(6, 'protection framework', '1', '0', '2015-03-15 18:30:00', 1, '2015-03-15 18:30:00', 1),
(7, 'Tow', '1', '0', '2015-03-15 18:30:00', 1, '2015-03-15 18:30:00', 1),
(8, 'Traction control', '1', '0', '2015-03-15 18:30:00', 1, '2015-03-15 18:30:00', 1),
(9, 'Steering wheel controls', '1', '0', '2015-03-15 18:30:00', 1, '2015-03-15 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fabrication`
--

CREATE TABLE IF NOT EXISTS `fabrication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_type`
--

CREATE TABLE IF NOT EXISTS `fuel_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fuel_type`
--

INSERT INTO `fuel_type` (`id`, `name`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'xcvcv', '1', '0', '0000-00-00 00:00:00', NULL, NULL, NULL),
(2, 'bcbvbv', '1', '0', '2015-03-17 13:03:43', 1, '2015-03-17 13:05:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE IF NOT EXISTS `manufacture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`id`, `name`, `description`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'Toyota', '', '1', '0', '2015-03-13 03:37:10', 5, NULL, 1),
(2, 'Nissan', '', '1', '0', '2015-03-12 18:30:00', 5, NULL, 0),
(3, 'Honda', '', '1', '0', '2015-03-12 18:30:00', 5, NULL, 0),
(4, 'Suzuki', '', '1', '0', '2015-03-12 18:30:00', 5, NULL, 0),
(5, 'Ford', '', '1', '0', '2015-03-12 18:30:00', 5, NULL, 0),
(6, 'sdsadswwwwwwwwwwwwwwwwwww', '0', '0', '0', '2015-03-14 04:46:26', 1, '2015-03-17 13:00:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'Audi', '1', '0', '2015-03-13 03:28:54', 2, NULL, 1),
(2, 'BMW', '1', '0', '2015-03-13 03:46:10', 2, NULL, 0),
(3, 'Dodge', '1', '0', '2015-03-13 03:46:10', 2, NULL, 0),
(4, 'Honda', '1', '0', '2015-03-13 03:46:10', 2, NULL, 2),
(5, 'Jaguar', '1', '1', '2015-03-13 03:46:28', 2, NULL, 2),
(6, 'Chrysler', '1', '0', '2015-03-11 18:30:00', 2, NULL, 0),
(7, 'gfdgdfg', '1', '0', '2015-03-17 11:58:52', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `searched_vehicles`
--

CREATE TABLE IF NOT EXISTS `searched_vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

CREATE TABLE IF NOT EXISTS `transmission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `transmission`
--

INSERT INTO `transmission` (`id`, `name`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 'Automatic', '0', '0', '2015-03-13 02:38:00', 1, NULL, 1),
(2, 'Manual', '1', '0', '2015-03-13 02:54:55', 1, NULL, 1),
(3, 'Automated Manual', '1', '0', '2015-03-13 02:55:06', 1, NULL, 1),
(4, 'Continuously Variable', '1', '0', '2015-03-13 02:55:21', 1, NULL, 1),
(5, 'fdfdf', '1', '1', '2015-03-13 03:19:47', 1, NULL, 1),
(6, '0', '1', '1', '2015-03-13 03:27:02', 1, NULL, 1),
(7, 'sdsf', '0', '1', '2015-03-13 03:43:49', 1, NULL, 1),
(8, 'rewrwe', '1', '0', '2015-03-14 06:18:40', 1, NULL, 1),
(9, 'werer', '1', '0', '2015-03-14 06:18:45', 1, NULL, 1),
(10, 'rwere', '1', '0', '2015-03-14 06:18:49', 1, NULL, 1),
(11, 'rwerwer', '1', '0', '2015-03-14 06:18:53', 1, NULL, 1),
(12, 'adasd', '1', '0', '2015-03-14 06:19:50', 1, NULL, 1),
(13, 'asdasds', '1', '0', '2015-03-14 06:19:56', 1, NULL, 1),
(14, 'asdasadas', '1', '0', '2015-03-14 06:20:01', 1, NULL, 1),
(15, 'asdasd', '1', '0', '2015-03-14 06:20:06', 1, NULL, 1),
(16, 'adad', '1', '0', '2015-03-14 06:20:12', 1, NULL, 1),
(17, 'asdasd', '1', '0', '2015-03-14 06:20:25', 1, NULL, 1),
(18, '0', '1', '0', '2015-03-17 04:40:06', 1, NULL, NULL),
(19, '0', '1', '1', '2015-03-17 04:53:46', 1, NULL, NULL),
(20, '0', '1', '1', '2015-03-17 05:07:40', 1, NULL, NULL),
(21, 'cxcxc', '1', '0', '2015-03-17 11:14:22', 1, NULL, NULL),
(22, 'vcxvcv', '1', '0', '2015-03-17 11:14:43', 1, NULL, NULL),
(23, 'vcxvcv', '1', '0', '2015-03-17 11:15:09', 1, NULL, NULL),
(24, 'vcxvcv', '1', '0', '2015-03-17 11:15:45', 1, NULL, NULL),
(25, 'gdfgf', '1', '0', '2015-03-17 11:58:58', NULL, NULL, NULL),
(26, 'xzxzx', '1', '0', '2015-03-17 12:04:03', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `user_name` varchar(300) NOT NULL,
  `user_type` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no_1` varchar(15) DEFAULT NULL,
  `contact_no_2` varchar(15) DEFAULT NULL,
  `profile_pic` varchar(500) DEFAULT NULL,
  `password` varchar(300) NOT NULL,
  `account_activation_code` varchar(500) NOT NULL,
  `is_online` enum('1','0') NOT NULL DEFAULT '0' COMMENT 'Online =1,Offline=0',
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_by` int(11) DEFAULT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `title`, `name`, `user_name`, `user_type`, `email`, `address`, `contact_no_1`, `contact_no_2`, `profile_pic`, `password`, `account_activation_code`, `is_online`, `is_published`, `is_deleted`, `added_by`, `added_date`, `updated_date`, `updated_by`) VALUES
(1, 'Ms', 'Gayathma', 'gayathma', 1, '', NULL, NULL, NULL, NULL, 'c4961b067d274050e43e26beb9d7d19c', '', '1', '1', '0', 0, '0000-00-00 00:00:00', NULL, 0),
(2, 'Ms', 'Heshani', 'heshani@gmail.com', 1, '', NULL, NULL, NULL, NULL, '', '', '1', '1', '0', 0, '0000-00-00 00:00:00', NULL, 0),
(3, 'Ms', 'Nadeesha', 'heshani@gmail.com', 1, '', NULL, NULL, NULL, NULL, '', '', '1', '1', '0', 0, '0000-00-00 00:00:00', NULL, 0),
(4, 'Ms', 'Ashani', 'heshani@gmail.com', 3, '', NULL, NULL, NULL, NULL, '', '', '1', '1', '0', 0, '0000-00-00 00:00:00', NULL, 0),
(5, 'Ms', 'Ishani', 'heshani@gmail.com', 1, '', NULL, NULL, NULL, NULL, '', '', '1', '1', '0', 0, '0000-00-00 00:00:00', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transmission_id` int(11) NOT NULL,
  `year` int(5) NOT NULL,
  `fuel_type_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `body_type_id` int(11) NOT NULL,
  `doors` int(11) NOT NULL,
  `cilindrics` int(11) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `description` text,
  `chassis_no` varchar(200) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `is_published` enum('1','0') NOT NULL DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vehicle_advertisements`
--

INSERT INTO `vehicle_advertisements` (`id`, `transmission_id`, `year`, `fuel_type_id`, `manufacture_id`, `model_id`, `body_type_id`, `doors`, `cilindrics`, `colour`, `description`, `chassis_no`, `price`, `is_published`, `is_deleted`, `added_date`, `added_by`, `updated_date`, `updated_by`) VALUES
(1, 1, 32434, 1, 1, 1, 1, 1, 1, 'sdfdf', NULL, '535235', 0.00, '1', '0', '0000-00-00 00:00:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_equipment`
--

CREATE TABLE IF NOT EXISTS `vehicle_equipment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_images`
--

CREATE TABLE IF NOT EXISTS `vehicle_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `is_published` enum('1','0') DEFAULT '1',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
