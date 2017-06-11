-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 12 2017 г., 00:31
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `regbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `login` varchar(20) NOT NULL,
  `realname` varchar(20) NOT NULL,
  `birthdate` int(10) unsigned NOT NULL,
  `country` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `realname`, `birthdate`, `country`, `password`) VALUES
(1, 'chigik-andrey@mail', 'admin', 'admin', 1106, 'France', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(4, 'abc@pop', 'lusya', 'pop', 1703, 'Poland', 'eac14c9c24c99fbec208ac4f10f908dd'),
(15, 'chigik-andrey@mail.ru', 'CHIZHIK', 'ANDREY', 2406, 'Ukraine', '403aa2dee620b0ef79f1511bed11a1df'),
(16, 'iroshka@mail.ru', 'Iriadka', 'Iren', 14907, 'Ukraine', '8e1f7f2fdcb312cda695fdef327dccdf'),
(9, 'Vladis@mail.ru', 'Vadusha', 'Vlad', 1309, 'Russia', '665bc340f8bf7f568bbdb291867120b5'),
(10, 'Iren@mail.com', 'Iriska', 'Irina', 1407, 'Ukraine', '94cc0780374352fa6bb3158548ae5ea2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
