-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 16 2021 г., 12:22
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `contacts1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_number` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserve_email` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mobile_number`, `home_number`, `email`, `reserve_email`) VALUES
(101, 'Иброхим', '+992935622211', '+992372289637', 'irgashev1200@gmail.com', 'irgashev1261@gmail.com'),
(102, 'Камолиддин', '+992987654321', '', 'kamoliddin@mail.ru', ''),
(103, 'Мехрубон', '+992963852741', '', 'mehrubon@mail.ru', 'mehrubon_1@mail.ru'),
(104, 'Икром', '+992951623847', '+992372285527', 'ikrom@gmail.com', ''),
(105, 'Бахром', '+99222558877', '+992372285526', 'bahrom@ya.ru', 'bahrom@gmail.com'),
(106, 'Мухаммад', '+992985647793', '+992372285525', 'muhammad@gmail.com', ''),
(107, 'Эрадж', '+992777888999', '+992372285525', 'eraj@gmail.com', 'eraj@ya.ru'),
(108, 'Марям', '+992102105108', '+992372285524', 'maryam@gmail.com', 'maryam@mail.ru'),
(109, 'Мавзуна', '+992001002003', '+992372285523', 'mavzuna@gmail.com', 'mavzuna_1@gmail.com'),
(110, 'Заррина', '+992888555222', '+992372285522', 'zarrina@gmail.com', 'zarrina_1@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
