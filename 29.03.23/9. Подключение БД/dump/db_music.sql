-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2022 г., 10:19
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_music`
--
DROP DATABASE IF EXISTS `db_music`; 

CREATE DATABASE IF NOT EXISTS `db_music` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `db_music`;

-- --------------------------------------------------------

--
-- Структура таблицы `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `date` year(4) DEFAULT NULL,
  `path` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_team` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Очистить таблицу перед добавлением данных `album`
--

TRUNCATE TABLE `album`;
--
-- Дамп данных таблицы `album`
--

INSERT INTO `album` (`id_album`, `name`, `alias`, `country`, `content`, `date`, `path`, `note`, `id_team`) VALUES
(1, 'The Dark Side of the Moon', 'the-dark-side-of-the-moon', 'Великобритания', '', 1973, 'assets/albums/the-dark-side-of-the-moon.jpg', NULL, 2),
(2, 'Wish You Were Here', 'wish-you-were-here', 'Великобритания', '', 1975, 'assets/albums/wish-you-were-here.jpg', NULL, 2),
(3, 'Greatest Hits', 'greatest-hits', 'США', '', 1999, 'assets/albums/greatest-hits-pink-floyd.jpg', NULL, 2),
(4, 'Abbey Road', 'abbey-road', 'Великобритания', '', 1969, 'assets/albums/abbey-road.jpg', NULL, 3),
(5, 'A Hard Day\'s Night', 'a-hard-days-night', 'Великобритания', '', 1964, 'assets/albums/a-hard-days-night.jpg', NULL, 3),
(6, 'Back in Black', 'back-in-black', 'США', '', 1980, 'assets/albums/Back_in_Black.svg', NULL, 4),
(7, 'Highway to Hell', 'highway-to-hell', 'Австралия', '', 1979, 'assets/albums/highway-to-hell.jpg', NULL, 4),
(8, 'The Razors Edge', 'the-razors-edge', 'Австралия', '', 1990, 'assets/albums/the-razors-edge.jpg', NULL, 4),
(9, 'Let There Be Rock', 'let-there-be-rock', 'ФРГ', '', 1977, 'assets/albums/let-there-be-rock.jpg', NULL, 4),
(10, 'Rocks', 'rocks', 'Великобритания', '', 1982, 'assets/albums/rocks.jpg', NULL, 1),
(11, 'Strange Days', 'strange-days', 'США', '', 1967, 'assets/albums/strange-days.jpg', NULL, 0),
(12, 'L.A. Woman', 'la-woman', 'США', '', 1971, 'assets/albums/la-woman.jpg', NULL, 0),
(13, 'Greatest Hits', 'greatest-hits', 'США', '', 1978, 'assets/albums/greatest-hits-beatles.jpg', NULL, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Очистить таблицу перед добавлением данных `team`
--

TRUNCATE TABLE `team`;
--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id_team`, `name`, `alias`, `country`, `content`, `date`, `style`, `path`, `note`) VALUES
(1, 'Aerosmith', 'aerosmith', 'США', '', '1970', 'хард-рок', 'assets/teams/aerosmith.jpg', NULL),
(2, 'Pink Floyd', 'pink-floyd', 'Великобритания', '', '1965', 'психоделический-рок', 'assets/teams/pink-floyd.jpg', NULL),
(3, 'The Beatles', 'the-beatles', 'Великобритания', '', '1960', 'рок-н-ролл', 'assets/teams/beatles.jpg', NULL),
(4, 'AC/DC', 'ac-dc', 'Австралия', '', '1973', 'хард-блюз-рок', 'assets/teams/acdc.jpg', NULL),
(5, 'Scorpions', 'scorpions', 'ФРГ', '', '1965', 'хард-рок', 'assets/teams/scorpions_.jpg', NULL),
(6, 'Ленинград', 'ленинград', 'Россия', '', '1997', 'ска, фолк, панк', 'assets/teams/leningrad.jpg', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `track`
--

DROP TABLE IF EXISTS `track`;
CREATE TABLE `track` (
  `id_track` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_album` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Очистить таблицу перед добавлением данных `track`
--

TRUNCATE TABLE `track`;
--
-- Дамп данных таблицы `track`
--

INSERT INTO `track` (`id_track`, `name`, `note`, `id_album`) VALUES
(1, 'Back in the Saddle', '', 10),
(2, 'Last Child', '', 10),
(3, 'Rats in the Cellar', '', 10),
(4, 'Combination', '', 10),
(5, 'Sick As a Dog', '', 10),
(6, 'Come Together', '', 10),
(7, 'Get the Lead Out', '', 10),
(8, 'Lick and a Promise', '', 10),
(9, 'Home Tonight', '', 10),
(10, 'Come Together', '', 4),
(11, 'Something', '', 4),
(12, 'Maxwell\'s Silver Hammer', '', 4),
(13, 'Oh! Darling', '', 4),
(14, 'Octopus\'s Garden', '', 4),
(15, 'I Want You (She\'s So Heavy)', '', 4),
(16, 'Here Comes The Sun', '', 4),
(17, 'Because', '', 4),
(18, 'You Never Give Me Your Money', '', 4),
(19, 'Sun King', '', 4),
(20, 'Mean Mr Mustard', '', 4),
(21, 'Polythene Pam', '', 4),
(22, 'Shine On You Crazy Diamond (Part One)', '', 2),
(23, 'Welcome to the Machine', '', 2),
(24, 'Have a Cigar', '', 2),
(25, 'Wish You Were Here', '', 2),
(26, 'Shine On You Crazy Diamond (Part Two)', '', 2),
(27, 'Speak to Me', '', 1),
(28, 'Breathe (In the Air)', '', 1),
(29, 'On the Run', '', 1),
(30, 'Time', '', 1),
(31, 'The Great Gig in the Sky', '', 1),
(32, 'Money', '', 1),
(33, 'Us and Them', '', 1),
(34, 'Any Colour You Like', '', 1),
(35, 'Brain Damage', '', 1),
(36, 'Eclipse', '', 1),
(37, 'Hells Bells', '', 6),
(38, 'Shoot to Thrill', '', 6),
(39, 'What Do You Do for Money Honey', '', 6),
(40, 'Given the Dog a Bone', '', 6),
(41, 'Let Me Put My Love Into You', '', 6),
(42, 'Back in Black', '', 6),
(43, 'You Shook Me All Night Long', '', 6),
(44, 'Have a Drink on Me', '', 6),
(45, 'Shake a Leg', '', 6),
(46, 'Rock and Roll Ain\'t Noise Pollution', '', 6),
(47, 'Strange Days', '', 0),
(48, 'You\'re Lost Little Girl', '', 11),
(49, 'Love Me Two Times', '', 11),
(50, 'Unhappy Girl', '', 11),
(51, 'Horse Latitudes', '', 11),
(52, 'Moonlight Drive', '', 11),
(53, 'People Are Strange', '', 11),
(54, 'My Eyes Have Seen You', '', 11),
(55, 'I Can\'t See Your Face in My Mind', '', 11),
(56, 'When the Music\'s Over', '', 11);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `id_team` (`id_team`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Индексы таблицы `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id_track`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `track`
--
ALTER TABLE `track`
  MODIFY `id_track` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
