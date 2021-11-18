-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2015 at 02:15 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `idCountry` int(5) NOT NULL AUTO_INCREMENT,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`idCountry`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=251 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`idCountry`, `countryCode`, `countryName`) VALUES
(1, 'AD', 'Andorra'),
(2, 'AE', 'United Arab Emirates'),
(3, 'AF', 'Afghanistan'),
(4, 'AG', 'Antigua and Barbuda'),
(5, 'AI', 'Anguilla'),
(6, 'AL', 'Albania'),
(7, 'AM', 'Armenia'),
(8, 'AO', 'Angola'),
(9, 'AQ', 'Antarctica'),
(10, 'AR', 'Argentina'),
(11, 'AS', 'American Samoa'),
(12, 'AT', 'Austria'),
(13, 'AU', 'Australia'),
(14, 'AW', 'Aruba'),
(15, 'AX', 'Åland'),
(16, 'AZ', 'Azerbaijan'),
(17, 'BA', 'Bosnia and Herzegovina'),
(18, 'BB', 'Barbados'),
(19, 'BD', 'Bangladesh'),
(20, 'BE', 'Belgium'),
(21, 'BF', 'Burkina Faso'),
(22, 'BG', 'Bulgaria'),
(23, 'BH', 'Bahrain'),
(24, 'BI', 'Burundi'),
(25, 'BJ', 'Benin'),
(26, 'BL', 'Saint Barthélemy'),
(27, 'BM', 'Bermuda'),
(28, 'BN', 'Brunei'),
(29, 'BO', 'Bolivia'),
(30, 'BQ', 'Bonaire'),
(31, 'BR', 'Brazil'),
(32, 'BS', 'Bahamas'),
(33, 'BT', 'Bhutan'),
(34, 'BV', 'Bouvet Island'),
(35, 'BW', 'Botswana'),
(36, 'BY', 'Belarus'),
(37, 'BZ', 'Belize'),
(38, 'CA', 'Canada'),
(39, 'CC', 'Cocos [Keeling] Islands'),
(40, 'CD', 'Democratic Republic of the Congo'),
(41, 'CF', 'Central African Republic'),
(42, 'CG', 'Republic of the Congo'),
(43, 'CH', 'Switzerland'),
(44, 'CI', 'Ivory Coast'),
(45, 'CK', 'Cook Islands'),
(46, 'CL', 'Chile'),
(47, 'CM', 'Cameroon'),
(48, 'CN', 'China'),
(49, 'CO', 'Colombia'),
(50, 'CR', 'Costa Rica'),
(51, 'CU', 'Cuba'),
(52, 'CV', 'Cape Verde'),
(53, 'CW', 'Curacao'),
(54, 'CX', 'Christmas Island'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DE', 'Germany'),
(58, 'DJ', 'Djibouti'),
(59, 'DK', 'Denmark'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'Dominican Republic'),
(62, 'DZ', 'Algeria'),
(63, 'EC', 'Ecuador'),
(64, 'EE', 'Estonia'),
(65, 'EG', 'Egypt'),
(66, 'EH', 'Western Sahara'),
(67, 'ER', 'Eritrea'),
(68, 'ES', 'Spain'),
(69, 'ET', 'Ethiopia'),
(70, 'FI', 'Finland'),
(71, 'FJ', 'Fiji'),
(72, 'FK', 'Falkland Islands'),
(73, 'FM', 'Micronesia'),
(74, 'FO', 'Faroe Islands'),
(75, 'FR', 'France'),
(76, 'GA', 'Gabon'),
(77, 'GB', 'United Kingdom'),
(78, 'GD', 'Grenada'),
(79, 'GE', 'Georgia'),
(80, 'GF', 'French Guiana'),
(81, 'GG', 'Guernsey'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GL', 'Greenland'),
(85, 'GM', 'Gambia'),
(86, 'GN', 'Guinea'),
(87, 'GP', 'Guadeloupe'),
(88, 'GQ', 'Equatorial Guinea'),
(89, 'GR', 'Greece'),
(90, 'GS', 'South Georgia and the South Sandwich Islands'),
(91, 'GT', 'Guatemala'),
(92, 'GU', 'Guam'),
(93, 'GW', 'Guinea-Bissau'),
(94, 'GY', 'Guyana'),
(95, 'HK', 'Hong Kong'),
(96, 'HM', 'Heard Island and McDonald Islands'),
(97, 'HN', 'Honduras'),
(98, 'HR', 'Croatia'),
(99, 'HT', 'Haiti'),
(100, 'HU', 'Hungary'),
(101, 'ID', 'Indonesia'),
(102, 'IE', 'Ireland'),
(103, 'IL', 'Israel'),
(104, 'IM', 'Isle of Man'),
(105, 'IN', 'India'),
(106, 'IO', 'British Indian Ocean Territory'),
(107, 'IQ', 'Iraq'),
(108, 'IR', 'Iran'),
(109, 'IS', 'Iceland'),
(110, 'IT', 'Italy'),
(111, 'JE', 'Jersey'),
(112, 'JM', 'Jamaica'),
(113, 'JO', 'Jordan'),
(114, 'JP', 'Japan'),
(115, 'KE', 'Kenya'),
(116, 'KG', 'Kyrgyzstan'),
(117, 'KH', 'Cambodia'),
(118, 'KI', 'Kiribati'),
(119, 'KM', 'Comoros'),
(120, 'KN', 'Saint Kitts and Nevis'),
(121, 'KP', 'North Korea'),
(122, 'KR', 'South Korea'),
(123, 'KW', 'Kuwait'),
(124, 'KY', 'Cayman Islands'),
(125, 'KZ', 'Kazakhstan'),
(126, 'LA', 'Laos'),
(127, 'LB', 'Lebanon'),
(128, 'LC', 'Saint Lucia'),
(129, 'LI', 'Liechtenstein'),
(130, 'LK', 'Sri Lanka'),
(131, 'LR', 'Liberia'),
(132, 'LS', 'Lesotho'),
(133, 'LT', 'Lithuania'),
(134, 'LU', 'Luxembourg'),
(135, 'LV', 'Latvia'),
(136, 'LY', 'Libya'),
(137, 'MA', 'Morocco'),
(138, 'MC', 'Monaco'),
(139, 'MD', 'Moldova'),
(140, 'ME', 'Montenegro'),
(141, 'MF', 'Saint Martin'),
(142, 'MG', 'Madagascar'),
(143, 'MH', 'Marshall Islands'),
(144, 'MK', 'Macedonia'),
(145, 'ML', 'Mali'),
(146, 'MM', 'Myanmar [Burma]'),
(147, 'MN', 'Mongolia'),
(148, 'MO', 'Macao'),
(149, 'MP', 'Northern Mariana Islands'),
(150, 'MQ', 'Martinique'),
(151, 'MR', 'Mauritania'),
(152, 'MS', 'Montserrat'),
(153, 'MT', 'Malta'),
(154, 'MU', 'Mauritius'),
(155, 'MV', 'Maldives'),
(156, 'MW', 'Malawi'),
(157, 'MX', 'Mexico'),
(158, 'MY', 'Malaysia'),
(159, 'MZ', 'Mozambique'),
(160, 'NA', 'Namibia'),
(161, 'NC', 'New Caledonia'),
(162, 'NE', 'Niger'),
(163, 'NF', 'Norfolk Island'),
(164, 'NG', 'Nigeria'),
(165, 'NI', 'Nicaragua'),
(166, 'NL', 'Netherlands'),
(167, 'NO', 'Norway'),
(168, 'NP', 'Nepal'),
(169, 'NR', 'Nauru'),
(170, 'NU', 'Niue'),
(171, 'NZ', 'New Zealand'),
(172, 'OM', 'Oman'),
(173, 'PA', 'Panama'),
(174, 'PE', 'Peru'),
(175, 'PF', 'French Polynesia'),
(176, 'PG', 'Papua New Guinea'),
(177, 'PH', 'Philippines'),
(178, 'PK', 'Pakistan'),
(179, 'PL', 'Poland'),
(180, 'PM', 'Saint Pierre and Miquelon'),
(181, 'PN', 'Pitcairn Islands'),
(182, 'PR', 'Puerto Rico'),
(183, 'PS', 'Palestine'),
(184, 'PT', 'Portugal'),
(185, 'PW', 'Palau'),
(186, 'PY', 'Paraguay'),
(187, 'QA', 'Qatar'),
(188, 'RE', 'Réunion'),
(189, 'RO', 'Romania'),
(190, 'RS', 'Serbia'),
(191, 'RU', 'Russia'),
(192, 'RW', 'Rwanda'),
(193, 'SA', 'Saudi Arabia'),
(194, 'SB', 'Solomon Islands'),
(195, 'SC', 'Seychelles'),
(196, 'SD', 'Sudan'),
(197, 'SE', 'Sweden'),
(198, 'SG', 'Singapore'),
(199, 'SH', 'Saint Helena'),
(200, 'SI', 'Slovenia'),
(201, 'SJ', 'Svalbard and Jan Mayen'),
(202, 'SK', 'Slovakia'),
(203, 'SL', 'Sierra Leone'),
(204, 'SM', 'San Marino'),
(205, 'SN', 'Senegal'),
(206, 'SO', 'Somalia'),
(207, 'SR', 'Suriname'),
(208, 'SS', 'South Sudan'),
(209, 'ST', 'São Tomé and Príncipe'),
(210, 'SV', 'El Salvador'),
(211, 'SX', 'Sint Maarten'),
(212, 'SY', 'Syria'),
(213, 'SZ', 'Swaziland'),
(214, 'TC', 'Turks and Caicos Islands'),
(215, 'TD', 'Chad'),
(216, 'TF', 'French Southern Territories'),
(217, 'TG', 'Togo'),
(218, 'TH', 'Thailand'),
(219, 'TJ', 'Tajikistan'),
(220, 'TK', 'Tokelau'),
(221, 'TL', 'East Timor'),
(222, 'TM', 'Turkmenistan'),
(223, 'TN', 'Tunisia'),
(224, 'TO', 'Tonga'),
(225, 'TR', 'Turkey'),
(226, 'TT', 'Trinidad and Tobago'),
(227, 'TV', 'Tuvalu'),
(228, 'TW', 'Taiwan'),
(229, 'TZ', 'Tanzania'),
(230, 'UA', 'Ukraine'),
(231, 'UG', 'Uganda'),
(232, 'UM', 'U.S. Minor Outlying Islands'),
(233, 'US', 'United States'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VA', 'Vatican City'),
(237, 'VC', 'Saint Vincent and the Grenadines'),
(238, 'VE', 'Venezuela'),
(239, 'VG', 'British Virgin Islands'),
(240, 'VI', 'U.S. Virgin Islands'),
(241, 'VN', 'Vietnam'),
(242, 'VU', 'Vanuatu'),
(243, 'WF', 'Wallis and Futuna'),
(244, 'WS', 'Samoa'),
(245, 'XK', 'Kosovo'),
(246, 'YE', 'Yemen'),
(247, 'YT', 'Mayotte'),
(248, 'ZA', 'South Africa'),
(249, 'ZM', 'Zambia'),
(250, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(64) DEFAULT NULL,
  `currency_code` char(3) DEFAULT NULL,
  PRIMARY KEY (`currency_id`),
  KEY `idx_currency_name` (`currency_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=168 ;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `currency_name`, `currency_code`) VALUES
(1, 'Andorran Peseta', 'ADP'),
(2, 'United Arab Emirates Dirham', 'AED'),
(3, 'Afghanistan Afghani', 'AFA'),
(4, 'Albanian Lek', 'ALL'),
(5, 'Netherlands Antillian Guilder', 'ANG'),
(6, 'Angolan Kwanza', 'AOK'),
(7, 'Argentine Peso', 'ARS'),
(9, 'Australian Dollar', 'AUD'),
(10, 'Aruban Florin', 'AWG'),
(11, 'Barbados Dollar', 'BBD'),
(12, 'Bangladeshi Taka', 'BDT'),
(14, 'Bulgarian Lev', 'BGN'),
(15, 'Bahraini Dinar', 'BHD'),
(16, 'Burundi Franc', 'BIF'),
(17, 'Bermudian Dollar', 'BMD'),
(18, 'Brunei Dollar', 'BND'),
(19, 'Bolivian Boliviano', 'BOB'),
(20, 'Brazilian Real', 'BRL'),
(21, 'Bahamian Dollar', 'BSD'),
(22, 'Bhutan Ngultrum', 'BTN'),
(23, 'Burma Kyat', 'BUK'),
(24, 'Botswanian Pula', 'BWP'),
(25, 'Belize Dollar', 'BZD'),
(26, 'Canadian Dollar', 'CAD'),
(27, 'Swiss Franc', 'CHF'),
(28, 'Chilean Unidades de Fomento', 'CLF'),
(29, 'Chilean Peso', 'CLP'),
(30, 'Yuan (Chinese) Renminbi', 'CNY'),
(31, 'Colombian Peso', 'COP'),
(32, 'Costa Rican Colon', 'CRC'),
(33, 'Czech Republic Koruna', 'CZK'),
(34, 'Cuban Peso', 'CUP'),
(35, 'Cape Verde Escudo', 'CVE'),
(36, 'Cyprus Pound', 'CYP'),
(40, 'Danish Krone', 'DKK'),
(41, 'Dominican Peso', 'DOP'),
(42, 'Algerian Dinar', 'DZD'),
(43, 'Ecuador Sucre', 'ECS'),
(44, 'Egyptian Pound', 'EGP'),
(45, 'Estonian Kroon (EEK)', 'EEK'),
(46, 'Ethiopian Birr', 'ETB'),
(47, 'Euro', 'EUR'),
(49, 'Fiji Dollar', 'FJD'),
(50, 'Falkland Islands Pound', 'FKP'),
(52, 'British Pound', 'GBP'),
(53, 'Ghanaian Cedi', 'GHC'),
(54, 'Gibraltar Pound', 'GIP'),
(55, 'Gambian Dalasi', 'GMD'),
(56, 'Guinea Franc', 'GNF'),
(58, 'Guatemalan Quetzal', 'GTQ'),
(59, 'Guinea-Bissau Peso', 'GWP'),
(60, 'Guyanan Dollar', 'GYD'),
(61, 'Hong Kong Dollar', 'HKD'),
(62, 'Honduran Lempira', 'HNL'),
(63, 'Haitian Gourde', 'HTG'),
(64, 'Hungarian Forint', 'HUF'),
(65, 'Indonesian Rupiah', 'IDR'),
(66, 'Irish Punt', 'IEP'),
(67, 'Israeli Shekel', 'ILS'),
(68, 'Indian Rupee', 'INR'),
(69, 'Iraqi Dinar', 'IQD'),
(70, 'Iranian Rial', 'IRR'),
(73, 'Jamaican Dollar', 'JMD'),
(74, 'Jordanian Dinar', 'JOD'),
(75, 'Japanese Yen', 'JPY'),
(76, 'Kenyan Schilling', 'KES'),
(77, 'Kampuchean (Cambodian) Riel', 'KHR'),
(78, 'Comoros Franc', 'KMF'),
(79, 'North Korean Won', 'KPW'),
(80, '(South) Korean Won', 'KRW'),
(81, 'Kuwaiti Dinar', 'KWD'),
(82, 'Cayman Islands Dollar', 'KYD'),
(83, 'Lao Kip', 'LAK'),
(84, 'Lebanese Pound', 'LBP'),
(85, 'Sri Lanka Rupee', 'LKR'),
(86, 'Liberian Dollar', 'LRD'),
(87, 'Lesotho Loti', 'LSL'),
(89, 'Libyan Dinar', 'LYD'),
(90, 'Moroccan Dirham', 'MAD'),
(91, 'Malagasy Franc', 'MGF'),
(92, 'Mongolian Tugrik', 'MNT'),
(93, 'Macau Pataca', 'MOP'),
(94, 'Mauritanian Ouguiya', 'MRO'),
(95, 'Maltese Lira', 'MTL'),
(96, 'Mauritius Rupee', 'MUR'),
(97, 'Maldive Rufiyaa', 'MVR'),
(98, 'Malawi Kwacha', 'MWK'),
(99, 'Mexican Peso', 'MXP'),
(100, 'Malaysian Ringgit', 'MYR'),
(101, 'Mozambique Metical', 'MZM'),
(102, 'Namibian Dollar', 'NAD'),
(103, 'Nigerian Naira', 'NGN'),
(104, 'Nicaraguan Cordoba', 'NIO'),
(105, 'Norwegian Kroner', 'NOK'),
(106, 'Nepalese Rupee', 'NPR'),
(107, 'New Zealand Dollar', 'NZD'),
(108, 'Omani Rial', 'OMR'),
(109, 'Panamanian Balboa', 'PAB'),
(110, 'Peruvian Nuevo Sol', 'PEN'),
(111, 'Papua New Guinea Kina', 'PGK'),
(112, 'Philippine Peso', 'PHP'),
(113, 'Pakistan Rupee', 'PKR'),
(114, 'Polish Zloty', 'PLN'),
(116, 'Paraguay Guarani', 'PYG'),
(117, 'Qatari Rial', 'QAR'),
(118, 'Romanian Leu', 'RON'),
(119, 'Rwanda Franc', 'RWF'),
(120, 'Saudi Arabian Riyal', 'SAR'),
(121, 'Solomon Islands Dollar', 'SBD'),
(122, 'Seychelles Rupee', 'SCR'),
(123, 'Sudanese Pound', 'SDP'),
(124, 'Swedish Krona', 'SEK'),
(125, 'Singapore Dollar', 'SGD'),
(126, 'St. Helena Pound', 'SHP'),
(127, 'Sierra Leone Leone', 'SLL'),
(128, 'Somali Schilling', 'SOS'),
(129, 'Suriname Guilder', 'SRG'),
(130, 'Sao Tome and Principe Dobra', 'STD'),
(131, 'Russian Ruble', 'RUB'),
(132, 'El Salvador Colon', 'SVC'),
(133, 'Syrian Potmd', 'SYP'),
(134, 'Swaziland Lilangeni', 'SZL'),
(135, 'Thai Baht', 'THB'),
(136, 'Tunisian Dinar', 'TND'),
(137, 'Tongan Paanga', 'TOP'),
(138, 'East Timor Escudo', 'TPE'),
(139, 'Turkish Lira', 'TRY'),
(140, 'Trinidad and Tobago Dollar', 'TTD'),
(141, 'Taiwan Dollar', 'TWD'),
(142, 'Tanzanian Schilling', 'TZS'),
(143, 'Uganda Shilling', 'UGX'),
(144, 'US Dollar', 'USD'),
(145, 'Uruguayan Peso', 'UYU'),
(146, 'Venezualan Bolivar', 'VEF'),
(147, 'Vietnamese Dong', 'VND'),
(148, 'Vanuatu Vatu', 'VUV'),
(149, 'Samoan Tala', 'WST'),
(150, 'CommunautÃ© FinanciÃ¨re Africaine BEAC, Francs', 'XAF'),
(151, 'Silver, Ounces', 'XAG'),
(152, 'Gold, Ounces', 'XAU'),
(153, 'East Caribbean Dollar', 'XCD'),
(154, 'International Monetary Fund (IMF) Special Drawing Rights', 'XDR'),
(155, 'CommunautÃ© FinanciÃ¨re Africaine BCEAO - Francs', 'XOF'),
(156, 'Palladium Ounces', 'XPD'),
(157, 'Comptoirs FranÃ§ais du Pacifique Francs', 'XPF'),
(158, 'Platinum, Ounces', 'XPT'),
(159, 'Democratic Yemeni Dinar', 'YDD'),
(160, 'Yemeni Rial', 'YER'),
(161, 'New Yugoslavia Dinar', 'YUD'),
(162, 'South African Rand', 'ZAR'),
(163, 'Zambian Kwacha', 'ZMK'),
(164, 'Zaire Zaire', 'ZRZ'),
(165, 'Zimbabwe Dollar', 'ZWD'),
(166, 'Slovak Koruna', 'SKK'),
(167, 'Armenian Dram', 'AMD');

-- --------------------------------------------------------

--
-- Table structure for table `installer`
--

CREATE TABLE IF NOT EXISTS `installer` (
  `id` int(1) NOT NULL,
  `installer_flag` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `installer`
--

INSERT INTO `installer` (`id`, `installer_flag`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application_list`
--

CREATE TABLE IF NOT EXISTS `tbl_application_list` (
  `application_list_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(2) NOT NULL,
  `leave_category_id` int(2) NOT NULL,
  `reason` text NOT NULL,
  `leave_start_date` date NOT NULL,
  `leave_end_date` date NOT NULL,
  `application_status` int(2) NOT NULL DEFAULT '1' COMMENT '1=pending,2=accepted 3=rejected',
  `view_status` tinyint(1) NOT NULL DEFAULT '2',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1',
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`application_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `leave_category_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `attendance_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'status 1=present 0=absen and 3= onleave',
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_days`
--

CREATE TABLE IF NOT EXISTS `tbl_days` (
  `day_id` int(5) NOT NULL AUTO_INCREMENT,
  `day` varchar(100) NOT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_days`
--

INSERT INTO `tbl_days` (`day_id`, `day`) VALUES
(1, 'Saturday'),
(2, 'Sunday'),
(3, 'Monday'),
(4, 'Tuesday'),
(5, 'Wednesday'),
(6, 'Thursday'),
(7, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `department_id` int(5) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE IF NOT EXISTS `tbl_designations` (
  `designations_id` int(5) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `designations` varchar(100) NOT NULL,
  PRIMARY KEY (`designations_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `employee_id` int(5) NOT NULL AUTO_INCREMENT,
  `employment_id` varchar(200) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maratial_status` varchar(20) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `passport_number` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `photo_a_path` varchar(150) NOT NULL,
  `present_address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `country_id` int(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designations_id` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active, 2=blocked',
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`employee_id`, `employment_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `maratial_status`, `father_name`, `nationality`, `passport_number`, `photo`, `photo_a_path`, `present_address`, `city`, `country_id`, `mobile`, `phone`, `email`, `designations_id`, `joining_date`, `status`) VALUES
(1, '789878', 'Uthpal', 'Shovo', '1989-06-23', 'Male', 'Un-Married', 'Lob Chandra Saha', '19', '', 'img/uploads/account.png', '/var/www/html/hrm/img/uploads/account.png', 'House 41,Road 11,Nikunjo 2', 'Dhaka', 19, '019229449469', '', 'abc@gmail.com', 1, '2015-03-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_award`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_award` (
  `employee_award_id` int(11) NOT NULL AUTO_INCREMENT,
  `award_name` varchar(100) NOT NULL,
  `employee_id` int(2) NOT NULL,
  `gift_item` varchar(300) NOT NULL,
  `award_amount` int(5) NOT NULL,
  `award_date` varchar(10) NOT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=on 0=off',
  PRIMARY KEY (`employee_award_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_bank`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_bank` (
  `employee_bank_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(2) NOT NULL,
  `bank_name` varchar(300) NOT NULL,
  `branch_name` varchar(300) NOT NULL,
  `account_name` varchar(300) NOT NULL,
  `account_number` varchar(300) NOT NULL,
  PRIMARY KEY (`employee_bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_document`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_document` (
  `document_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(2) NOT NULL,
  `resume` varchar(300) DEFAULT NULL,
  `resume_path` varchar(300) DEFAULT NULL,
  `resume_filename` varchar(100) DEFAULT NULL,
  `offer_letter` varchar(300) DEFAULT NULL,
  `offer_letter_filename` varchar(200) DEFAULT NULL,
  `offer_letter_path` varchar(300) DEFAULT NULL,
  `joining_letter` varchar(300) DEFAULT NULL,
  `joining_letter_filename` varchar(200) DEFAULT NULL,
  `joining_letter_path` varchar(300) DEFAULT NULL,
  `contract_paper` varchar(300) DEFAULT NULL,
  `contract_paper_filename` varchar(200) DEFAULT NULL,
  `contract_paper_path` varchar(300) DEFAULT NULL,
  `id_proff` varchar(300) DEFAULT NULL,
  `id_proff_filename` varchar(200) DEFAULT NULL,
  `id_proff_path` varchar(300) DEFAULT NULL,
  `other_document` varchar(300) DEFAULT NULL,
  `other_document_filename` varchar(200) DEFAULT NULL,
  `other_document_path` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_login`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_login` (
  `employee_login_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `activate` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`employee_login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_employee_login`
--

INSERT INTO `tbl_employee_login` (`employee_login_id`, `employee_id`, `user_name`, `password`, `activate`) VALUES
(1, 1, 'employee', 'fedf1a2060f53e24589b7566202ed886dd4c5f5b31e73797c9d2a6dfdc2561ca97b34408f1268997f35cad96adf215838ffe258a15144349181b9c07da239e32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_payroll`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_payroll` (
  `payroll_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `basic_salary` int(11) NOT NULL,
  `house_rent_allowance` varchar(200) DEFAULT NULL,
  `medical_allowance` varchar(200) DEFAULT NULL,
  `special_allowance` varchar(200) DEFAULT NULL,
  `fuel_allowance` varchar(200) DEFAULT NULL,
  `phone_bill_allowance` varchar(200) DEFAULT NULL,
  `other_allowance` varchar(200) DEFAULT NULL,
  `tax_deduction` varchar(200) DEFAULT NULL,
  `provident_fund` varchar(200) DEFAULT NULL,
  `other_deduction` varchar(200) DEFAULT NULL,
  `employment_type` tinyint(1) NOT NULL COMMENT '1=provision, 2=permanent',
  PRIMARY KEY (`payroll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense`
--

CREATE TABLE IF NOT EXISTS `tbl_expense` (
  `expense_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(2) NOT NULL,
  `item_name` varchar(300) NOT NULL,
  `purchase_from` varchar(300) NOT NULL,
  `purchase_date` date NOT NULL,
  `amount` double NOT NULL,
  `bill_copy` varchar(300) DEFAULT NULL,
  `bill_copy_filename` text,
  `bill_copy_path` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form`
--

CREATE TABLE IF NOT EXISTS `tbl_form` (
  `form_id` int(11) NOT NULL AUTO_INCREMENT,
  `English` varchar(200) NOT NULL,
  `Spanish` longtext NOT NULL,
  `French` longtext NOT NULL,
  `Arabic` longtext NOT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_form`
--

INSERT INTO `tbl_form` (`form_id`, `English`, `Spanish`, `French`, `Arabic`) VALUES
(1, 'General Settings', '', '', ''),
(2, 'Set Working Days', '', '', ''),
(3, 'Add Holiday', '', '', ''),
(4, 'Add Leave Category', '', '', ''),
(5, 'Notification Settings', '', '', ''),
(6, 'Add Personal Event', '', '', ''),
(7, 'Language Settings', '', '', ''),
(8, 'Inbox', '', '', ''),
(9, 'Sent', '', '', ''),
(10, 'Add Department', '', '', ''),
(11, 'Department List', '', '', ''),
(12, 'Add Employee', '', '', ''),
(13, 'Employee List', '', '', ''),
(14, 'Add New Award to Employee', '', '', ''),
(15, 'Set Attendance', '', '', ''),
(16, 'Report', '', '', ''),
(17, 'List of All Applications', '', '', ''),
(18, 'Manage Salary Details', '', '', ''),
(19, 'List of Employees and Their Salaries', '', '', ''),
(20, 'Make Payment', '', '', ''),
(21, 'Generate Payslip', '', '', ''),
(22, 'Add Expense', '', '', ''),
(23, 'Create Notice', '', '', ''),
(24, 'List of All Notice', '', '', ''),
(25, 'Database Backup', '', '', ''),
(26, 'Compose New Message', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form_body`
--

CREATE TABLE IF NOT EXISTS `tbl_form_body` (
  `form_body_id` int(11) NOT NULL AUTO_INCREMENT,
  `form_id` int(5) NOT NULL,
  `English` varchar(100) NOT NULL,
  `Spanish` longtext NOT NULL,
  `French` longtext NOT NULL,
  `Arabic` longtext NOT NULL,
  PRIMARY KEY (`form_body_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `tbl_form_body`
--

INSERT INTO `tbl_form_body` (`form_body_id`, `form_id`, `English`, `Spanish`, `French`, `Arabic`) VALUES
(1, 1, 'Company Name', '', '', ''),
(2, 1, 'Logo', '', '', ''),
(3, 1, 'Email Address', '', '', ''),
(4, 1, 'Address', '', '', ''),
(5, 1, 'City', '', '', ''),
(6, 1, 'Country', '', '', ''),
(7, 1, 'Active Language', '', '', ''),
(8, 1, 'Phone', '', '', ''),
(9, 1, 'Mobile', '', '', ''),
(10, 1, 'Hotline', '', '', ''),
(11, 1, 'Fax', '', '', ''),
(12, 1, 'Website', '', '', ''),
(13, 1, 'Save', '', '', ''),
(14, 4, 'Leave Category', '', '', ''),
(15, 4, 'Leave Category List', '', '', ''),
(16, 4, '', '', '', ''),
(17, 5, 'Email', '', '', ''),
(18, 5, 'Notice Board', '', '', ''),
(19, 5, 'Leave Application', '', '', ''),
(20, 5, '', '', '', ''),
(21, 1, 'Update', '', '', ''),
(22, 6, 'Event List', '', '', ''),
(23, 7, 'Add New Language', '', '', ''),
(24, 8, 'Compose', '', '', ''),
(25, 10, 'Add Department', '', '', ''),
(26, 10, 'Add Designations', '', '', ''),
(27, 12, 'Personal Details', '', '', ''),
(28, 12, 'First Name', '', '', ''),
(29, 12, 'Last Name', '', '', ''),
(30, 12, 'Date of Birth', '', '', ''),
(31, 12, 'Gender ', '', '', ''),
(32, 12, 'Maratial Status', '', '', ''),
(33, 12, 'Father''s Name', '', '', ''),
(34, 12, 'Nationality ', '', '', ''),
(35, 12, 'Passport NO', '', '', ''),
(36, 12, 'Photo ', '', '', ''),
(37, 12, '', '', '', ''),
(38, 12, '', '', '', ''),
(39, 12, '', '', '', ''),
(40, 12, '', '', '', ''),
(41, 12, '', '', '', ''),
(42, 12, '', '', '', ''),
(43, 12, 'Contact Details', '', '', ''),
(44, 12, 'Present Address', '', '', ''),
(45, 12, 'Employee Documents', '', '', ''),
(46, 12, 'Resume', '', '', ''),
(47, 12, 'Offer Letter', '', '', ''),
(48, 12, 'Joining Letter', '', '', ''),
(49, 12, 'Contract Paper', '', '', ''),
(50, 12, 'ID Proff', '', '', ''),
(51, 12, 'Other Document ', '', '', ''),
(52, 12, 'Bank Information', '', '', ''),
(53, 12, 'Bank Name', '', '', ''),
(54, 12, 'Branch Name', '', '', ''),
(55, 12, 'Account Name', '', '', ''),
(56, 12, 'Account Number', '', '', ''),
(57, 12, 'Official Status', '', '', ''),
(58, 12, 'Employee ID', '', '', ''),
(59, 12, 'Designation', '', '', ''),
(60, 12, 'Joining Date', '', '', ''),
(61, 14, 'Select Designation', '', '', ''),
(62, 14, 'Employee ', '', '', ''),
(63, 14, 'Award Name / Title', '', '', ''),
(64, 14, 'Gift Item', '', '', ''),
(65, 14, 'Award Amount', '', '', ''),
(66, 14, 'Select Month', '', '', ''),
(67, 15, 'Select Day', '', '', ''),
(68, 15, 'Department', '', '', ''),
(69, 16, 'Department Name', '', '', ''),
(70, 16, 'Month & Year', '', '', ''),
(71, 20, 'Select Designation', '', '', ''),
(72, 20, 'Select Month', '', '', ''),
(73, 20, '', '', '', ''),
(74, 22, 'Item Name', '', '', ''),
(75, 22, 'Purchased From', '', '', ''),
(76, 22, 'Purchase Date', '', '', ''),
(77, 22, 'Amount Spent', '', '', ''),
(78, 22, 'Employee Name', '', '', ''),
(79, 22, 'Bill Copy', '', '', ''),
(80, 23, 'Publication Status', '', '', ''),
(81, 23, 'Title', '', '', ''),
(82, 23, 'Short Description', '', '', ''),
(83, 23, 'Long Description', '', '', ''),
(84, 23, '', '', '', ''),
(85, 23, '', '', '', ''),
(86, 6, 'Event Name', '', '', ''),
(87, 6, 'Start Date', '', '', ''),
(88, 6, 'End Date', '', '', ''),
(89, 7, 'List of Languages', '', '', ''),
(90, 14, 'Employees Who Received Awards', '', '', ''),
(91, 1, 'Search', '', '', ''),
(92, 1, 'GO', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gsettings`
--

CREATE TABLE IF NOT EXISTS `tbl_gsettings` (
  `id_gsettings` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `full_path` varchar(150) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `country_id` int(3) NOT NULL,
  `active_language` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `hotline` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `currency` varchar(200) NOT NULL,
  PRIMARY KEY (`id_gsettings`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_gsettings`
--

INSERT INTO `tbl_gsettings` (`id_gsettings`, `name`, `logo`, `full_path`, `email`, `address`, `city`, `country_id`, `active_language`, `phone`, `mobile`, `hotline`, `fax`, `website`, `currency`) VALUES
(1, 'HRMS V1.2', 'img/uploads/logo4.png', 'D:/xampp/htdocs/HRMS/img/uploads/logo4.png', 'admin@admin.com', 'Dhaka', '', 19, 'English', '', '01723611125', '', '', 'http://hrms.fratelloneit.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday`
--

CREATE TABLE IF NOT EXISTS `tbl_holiday` (
  `holiday_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`holiday_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE IF NOT EXISTS `tbl_inbox` (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `to` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` text,
  `attach_filename` text,
  `message_time` datetime NOT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=on 0=off',
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_category`
--

CREATE TABLE IF NOT EXISTS `tbl_leave_category` (
  `leave_category_id` int(2) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`leave_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `English` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL,
  `Spanish` longtext NOT NULL,
  `French` longtext NOT NULL,
  `Arabic` longtext NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `English`, `link`, `icon`, `parent`, `sort`, `Spanish`, `French`, `Arabic`) VALUES
(1, 'Dashboard', 'admin/dashboard', 'fa fa-dashboard', 0, 1, '', '', ''),
(2, 'Settings', '#', 'fa fa-cogs', 0, 2, '', '', ''),
(3, 'General Settings', 'admin/settings/general_settings', 'fa fa-dashboard', 2, 1, '', '', ''),
(4, 'Set Working Days', 'admin/settings/set_working_days', 'fa fa-calendar', 2, 2, '', '', ''),
(5, 'Holiday List', 'admin/settings/holiday_list', 'entypo-list', 2, 3, '', '', ''),
(6, 'Leave Category', 'admin/settings/leave_category', 'fa fa-dedent', 2, 4, '', '', ''),
(7, 'Notification Settings', 'admin/settings/notification_settings', 'fa fa-bell-o', 2, 5, '', '', ''),
(8, 'Department', '#', 'entypo-list-add', 0, 3, '', '', ''),
(9, 'Add Department', 'admin/department/add_department', 'entypo-list-add', 8, 1, '', '', ''),
(10, 'Department List', 'admin/department/department_list', 'entypo-list', 8, 2, '', '', ''),
(11, 'Employee', '#', 'fa fa-user', 0, 4, '', '', ''),
(12, 'Add Employee', 'admin/employee/add_employee', 'entypo-user-add', 11, 1, '', '', ''),
(13, 'Employee List', 'admin/employee/employee_list', 'entypo-users', 11, 2, '', '', ''),
(14, 'Employee Award', 'admin/employee/employee_award', 'fa fa-trophy', 11, 3, '', '', ''),
(15, 'Attendance', '#', 'fa fa-file-text', 0, 5, '', '', ''),
(16, 'Manage Attendance', 'admin/attendance/manage_attendance', 'fa fa-file-text-o', 15, 1, '', '', ''),
(17, 'Attendance Report', 'admin/attendance/attendance_report', 'fa fa-file-text', 15, 2, '', '', ''),
(18, 'Application List', 'admin/application_list', 'fa fa-rocket', 0, 6, '', '', ''),
(19, 'Payroll Management', '#', 'fa fa-usd', 0, 7, '', '', ''),
(20, 'Manage Salary Details', 'admin/payroll/manage_salary_details', 'fa fa-usd', 19, 1, '', '', ''),
(21, 'Employee Salary List', 'admin/payroll/employee_salary_list', 'entypo-users', 19, 2, '', '', ''),
(22, 'Make Payment', 'admin/payroll/make_payment', 'fa fa-tasks', 19, 3, '', '', ''),
(23, 'Generate Payslip', 'admin/payroll/generate_payslip', 'fa fa-list-ul', 19, 4, '', '', ''),
(24, 'Expense Management', '#', 'fa fa-money', 0, 8, '', '', ''),
(26, 'Add Expense', 'admin/expense/add_expense', 'fa fa-delicious', 24, 2, '', '', ''),
(27, 'Expense Report', 'admin/expense/expense_report', 'fa fa-file-o', 24, 3, '', '', ''),
(28, 'Notice Board', '#', 'fa fa-list-alt', 0, 9, '', '', ''),
(29, 'Add Notice', 'admin/notice/add_notice', 'entypo-docs', 28, 1, '', '', ''),
(30, 'Manage Notice', 'admin/notice/manage_notice', 'entypo-doc', 28, 2, '', '', ''),
(31, 'Mailbox', '#', 'fa fa-credit-card', 0, 3, '', '', ''),
(32, 'Inbox', 'admin/mailbox/inbox', 'fa fa-inbox', 31, 1, '', '', ''),
(33, 'Sent', 'admin/mailbox/sent', 'fa fa-paper-plane', 31, 2, '', '', ''),
(34, 'Personal Event', 'admin/settings/view_event', 'entypo-newspaper', 2, 6, '', '', ''),
(35, 'Language Settings', 'admin/settings/language_settings', 'fa fa-language', 2, 7, '', '', ''),
(36, 'Database Backup', 'admin/settings/database_backup', 'fa fa-database', 0, 20, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE IF NOT EXISTS `tbl_notice` (
  `notice_id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text,
  `employee_id` int(2) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL COMMENT '0 = unpublished, 1 = published',
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=on 0=off',
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_payment` (
  `salary_payment_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` int(2) NOT NULL,
  `basic_salary` int(11) NOT NULL,
  `house_rent_allowance` varchar(200) NOT NULL,
  `medical_allowance` varchar(200) NOT NULL,
  `special_allowance` varchar(200) NOT NULL,
  `fuel_allowance` varchar(200) NOT NULL,
  `phone_bill_allowance` varchar(200) NOT NULL,
  `other_allowance` varchar(200) NOT NULL,
  `tax_deduction` varchar(200) NOT NULL,
  `provident_fund` varchar(200) NOT NULL,
  `other_deduction` varchar(200) NOT NULL,
  `payment_for_month` varchar(100) NOT NULL,
  `award_amount` int(5) NOT NULL,
  `fine_deduction` varchar(200) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `comments` text,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`salary_payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payslip`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_payslip` (
  `payslip_id` int(5) NOT NULL AUTO_INCREMENT,
  `payslip_number` varchar(100) DEFAULT NULL,
  `salary_payment_id` int(5) NOT NULL,
  `payslip_generate_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`payslip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_send`
--

CREATE TABLE IF NOT EXISTS `tbl_send` (
  `send_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `to` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` varchar(500) DEFAULT NULL,
  `attach_filename` varchar(200) DEFAULT NULL,
  `message_time` datetime NOT NULL,
  PRIMARY KEY (`send_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `first_name`, `last_name`, `user_name`, `password`, `flag`) VALUES
(1, 'Iftekhar', 'Rana', 'admin', '55677fc54be3b674770b697114ce0730300da0f6783202e2d17d7191ba68ec97cab4b61d3470f298d0ca2435111c29b8d5ad63058b725916336fdab9584829f4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_working_days`
--

CREATE TABLE IF NOT EXISTS `tbl_working_days` (
  `working_days_id` int(11) NOT NULL AUTO_INCREMENT,
  `day_id` int(5) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  PRIMARY KEY (`working_days_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
