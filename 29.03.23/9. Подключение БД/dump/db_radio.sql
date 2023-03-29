-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 14 2022 г., 11:27
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_radio`
--
CREATE DATABASE IF NOT EXISTS `db_radio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `db_radio`;

-- --------------------------------------------------------

--
-- Структура таблицы `radio`
--

DROP TABLE IF EXISTS `radio`;
CREATE TABLE `radio` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teaser` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Очистить таблицу перед добавлением данных `radio`
--

TRUNCATE TABLE `radio`;
--
-- Дамп данных таблицы `radio`
--

INSERT INTO `radio` (`id`, `name`, `format`, `description`, `teaser`, `site`, `note`) VALUES
(1, 'Русская Волна', 'Поп', 'Это самые настоящие хиты! Вы можете услышать треки неспокойных 90 годов, лихорадочных нулевых, а также самые современные песни. ', 'В эфире звучат популярные русские песни.', 'https://radiopotok.ru/radio/1543', NULL),
(2, 'Радио Звезда', 'Новости', 'Радио «Звезда» — информационно-музыкальный канал.', NULL, 'https://radiopotok.ru/radio/495', NULL),
(3, 'Наше Радио', 'Рок', ' «Наше Радио» начало работать в 1998 году. Радиостанция транслирует музыку в жанре «Русский Рок».', 'Постсоветский русский рок', 'https://radiopotok.ru/nashe-radio', NULL),
(4, 'Радио Ретро Хит', 'Ретро', 'Радио Ретро Хит — это композиции, которые глубоко вонзились в сердца всех, кто когда-то их услышал, и остались в них навсегда. Это песни, которые являются признанными символами целых эпох и десятилетий.', 'Радио Ретро Хит — это музыкальная машина времени!', 'https://radiopotok.ru/radio/1570', NULL),
(5, 'Радио ПИРАМИДА', 'Рок, поп, джаз, джаз-рок', 'Музыкальная радиостанция, формат Gold, хиты 90-х, 00-х, меньше 80-х и 70-х годов, возраст аудитории 35+, мужчины 60 % женщины 40%. иностранная музыка 70%, русская музыка 30%, направления: рок, поп, джаз, джаз-рок', 'Рок, поп, джаз, джаз-рок. Иностранная музыка 70%, русская музыка 30%', 'https://radiopotok.ru/radio/1793', NULL),
(6, 'Радио Орфей', 'Классика', 'Программы «Орфея» включают русскую и зарубежную классику, духовную музыку, фольклор и джаз, классическую оперетту.', 'Основную часть вещания радиостанции «Орфей» составляет классика - от академических жанров до авангарда, сочинения разных стран, эпох и стилей.', 'https://radiopotok.ru/radio/1365', NULL),
(7, 'ЗвукоКнига', 'Детское', '«ЗвукоКнига» — радиостанция для любителей литературы. В эфире звучат современные и классические произведения. Радиостанция родилась в 2002 году, но стабильно работать начала позднее: в 2014 году. ', NULL, 'https://radiopotok.ru/radio/1463', NULL),
(8, 'Радио Шансон', 'Шансон', 'Радио «Шансон» ведет вещание из Москвы на частоте 103,0 FM. Приоритетное направление – музыка в стиле шансон, бардовская песня и блатная песня. Подобная музыка традиционно пользуется в России большой популярностью, и по оценкам статистики, ежедневно слушателями Радио «Шансон» являются более миллиона человек как в России, так и в странах ближнего зарубежья. ', 'Шансон, бардовская и блатная песни', 'https://radiopotok.ru/radioshanson', NULL),
(9, 'HIP HOP RADIO', 'Рэп / Хип Хоп', 'Только хип-хоп – во всех проявлениях, без компромиссов и ограничений, круглые сутки!', NULL, 'https://radiopotok.ru/radio/1676', NULL),
(10, 'Radio Cafe', 'Для души', 'Radio Cafe - это коктейль из лучших ингредиентов: спокойных треков в стиле «lo-fi» и «easy listening», проверенных временем баллад и инструментальных шедевров, стильного r`n`b и легкой поп-музыки. ', 'В любом месте и в любое время, «Радио Кафе» помогает вам расслабиться и отдохнуть от суеты.', 'https://radiopotok.ru/radio/1601', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `radio`
--
ALTER TABLE `radio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `radio`
--
ALTER TABLE `radio`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
