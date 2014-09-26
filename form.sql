-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Вер 26 2014 р., 10:32
-- Версія сервера: 5.5.37-0ubuntu0.13.10.1
-- Версія PHP: 5.5.3-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `form`
--

-- --------------------------------------------------------

--
-- Структура таблиці `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_plus` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `information` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=100 ;

--
-- Дамп даних таблиці `data`
--

INSERT INTO `data` (`id`, `login`, `first_name`, `last_name`, `email`, `password`, `website`, `google_plus`, `information`, `photo`) VALUES
(70, 'nazarik', 'Nazar', 'n', 'nazar@i.ua', '123456', '', '', '', 'Ð¼ÐµÑ€ÐµÐ¶Ð°.jpg'),
(71, 'nazarik', '', 'n', 'nazar@i.ua', '2213', '', '', '', '767183700.png'),
(72, 'nazarik', '', 'n', 'nazar@i.ua', '1q2324', '', '', '', 'ukrbash.org_3053.jpg'),
(73, 'nazarik', 'n', 'n', 'nazar@i.ua', 'q2342', '', '', '', 'lybid.jpg'),
(74, 'nazarik', 'Nazar', '', 'nazar@i.ua', '32423', '', '', '', 'lybid.jpg'),
(75, 'nazarik', 'Nazar', '', 'nazar@i.ua', '2134', '', '', '', '767183700.png'),
(76, 'nazarik', 'Nazar', '', 'nazar@i.ua', '34535', '', '', '', '767136148.png'),
(77, 'nazarik', 'Nazar', '', 'nazar@i.ua', '23w435', '', '', '', 'lybid.jpg'),
(78, 'nazarik', 'Nazar', 'n', 'nazar@i.ua', '123412', '', '', '', ''),
(79, 'nazarik', 'Nazar', '', 'nazar@i.ua', '324234', '', '', '', ''),
(80, 'nazarik', 'Nazar', 'n', 'nazar@i.ua', '324325', '', '', '', ''),
(81, 'nazarik', 'Nazar', '', 'nazar@i.ua', 'w3e4325', '', '', '', 'lybid.jpg'),
(82, 'n', 'n', '', 'nazar@i.ua', '1qwewr', '', '', '', 'ukrbash.org_3053.jpg'),
(83, 'nazarik', 'Nazar', '', 'nazar@i.ua', '23435', '', '', '', ''),
(84, 'nazarik', 'Nazar', '', 'nazar@i.ua', '4e5435', '', '', '', 'ukrbash.org_3053.jpg'),
(85, 'nazarik', 'Nazar', '', 'nazar@i.ua', '345435', '', '', '', ''),
(86, 'nazarik', '', '', 'nazar@i.ua', '3243254', '', '', '', 'ukrbash.org_3053.jpg'),
(87, 'nazarik', 'Nazar', '', 'nazar@i.ua', '32435', '', '', '', 'ÑˆÐ¿Ð¾Ð»Ð°.png'),
(88, 'nazarik', '', '', 'nazar@i.ua', '4534542', '', '', '', '1509369.jpg'),
(89, 'nazarik', '', 'n', 'nazar@i.ua', 'nfdtysdf', '', '', '', 'Sankcii-google.gif'),
(90, 'nazarik', '', '', 'nazar@i.ua', 'rdegtsedrtg', '', '', '', 'ukrbash.org_2833.jpg'),
(91, 'nazarik', '', '', 'nazar@i.ua', 'dfsgdfg', '', '', '', 'DSC_0798.JPG'),
(92, 'nazarik', '', '', 'nazar@i.ua', 'nfghnbfg', '', '', '', 'DSC_0786.JPG'),
(93, 'nazarik', '', '', 'nazar@i.ua', 'ncgfhfg', '', '', '', 'DSC_0896.JPG'),
(94, 'nazarik', 'Nazar', 'Kovalenko', 'nazar@i.ua', '123456', '', '', '', ''),
(95, 'nazarik', 'Nazar', '', 'nazar@i.ua', '234234', '', '', '', '68930.jpg'),
(96, 'nazarik', 'Nazar', '', 'nazar@i.ua', '324234', '', '', '', ''),
(97, 'nazarik', 'Nazar', 'n', 'nazar@i.ua', '435345', '', '', '', ''),
(98, 'nazarik', 'Nazar', 'n', 'nazar@i.ua', 'nredgdfgs', '', '', '', ''),
(99, 'nazarik', 'Nazar', '', 'nazar@i.ua', 'ertsdfgdf', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
