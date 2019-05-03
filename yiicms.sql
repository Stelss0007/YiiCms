-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 03 2019 г., 19:07
-- Версия сервера: 5.7.25
-- Версия PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yiicms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `configuration`
--

CREATE TABLE `configuration` (
  `id` int(11) NOT NULL,
  `module` varchar(100) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `configuration`
--

INSERT INTO `configuration` (`id`, `module`, `data`) VALUES
(1, 'main', 'N;'),
(2, 'theme', 'a:2:{s:11:\"test_field1\";s:10:\"test data1\";s:11:\"test_field2\";s:13:\"1231232423412\";}'),
(3, 'user', 'a:2:{s:16:\"user_test_field1\";s:34:\"test user data1 345345345 34634654\";s:16:\"user_test_field2\";s:28:\"test user data2 333 еуке\";}');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1521041502),
('m180314_153352_install', 1521045803),
('m180314_153353_install', 1541499487);

-- --------------------------------------------------------

--
-- Структура таблицы `module`
--

CREATE TABLE `module` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(400) NOT NULL,
  `systemName` varchar(400) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(400) NOT NULL,
  `version` varchar(20) NOT NULL,
  `author` varchar(255) NOT NULL,
  `active` tinyint(3) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text,
  `active` tinyint(4) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `version` varchar(20) DEFAULT NULL,
  `author` varchar(60) DEFAULT NULL,
  `updatedAt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `theme`
--

INSERT INTO `theme` (`id`, `name`, `description`, `active`, `title`, `version`, `author`, `updatedAt`) VALUES
(1, 'mytheme', 'My Test Theme', 1, 'MyTheme', '1.0.0.1', 'Ruslan Atamas', 1521045803),
(2, '31237777', '123213', 1, '1231', '1231', '12312133', 3123);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `accessToken` varchar(100) NOT NULL,
  `authKey` varchar(100) NOT NULL,
  `lastLoggedInAt` int(11) DEFAULT NULL,
  `createdAt` int(11) DEFAULT NULL,
  `updatedAt` int(11) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`, `active`, `group`, `accessToken`, `authKey`, `lastLoggedInAt`, `createdAt`, `updatedAt`, `createdBy`, `updatedBy`) VALUES
(1, 'admin@mail.com', 'admin', '$2y$13$4DsAL.EQcG9Sxh5LOhhp2Oyp5DkiPGpOXpFfTpG.M0Tq8JLPNILZ2', 1, 1, '', 'XlGXUTVAZEFOBKMZkUmv96axXvjcj7KM', NULL, 1541499487, 1547571319, 0, 0),
(2, 'ddd@ff.ru', NULL, '$2y$13$ZLnaUkX30E8F9px4.CEqrO5W4rP.PPsIvzEPePV1zlwXxHOgqhNeq', NULL, NULL, '-1UtGcOfvZnV6kj22HteabpWAG8TAW9m', 'LyyLL2KoG9bO2p8IGjz64srCBhinY6kH', NULL, 1551716597, 1551716597, NULL, NULL),
(3, 'ffff@fff.com', NULL, '$2y$13$KlUMjaT1yflywbpWqYMiZegMYbyMt62mKXX1WIM2w3f3epGAWoJ9m', NULL, NULL, 'VSmqvrLWpqLTOMu7D_WuZlWkEEBDQPo7', 'l4DiURxsAwhKkedVi8Utc6orG9P2cgWC', NULL, 1551779204, 1551779204, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `module_namespace` (`namespace`),
  ADD KEY `active` (`active`);

--
-- Индексы таблицы `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
