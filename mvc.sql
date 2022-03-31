-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 31 2022 г., 04:21
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abonents`
--

CREATE TABLE `abonents` (
  `id` int(11) NOT NULL,
  `surname` varchar(222) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `operator` varchar(222) CHARACTER SET utf8 NOT NULL,
  `date_of_bearth` date NOT NULL,
  `subvision` int(222) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `abonents`
--

INSERT INTO `abonents` (`id`, `surname`, `name`, `lastname`, `operator`, `date_of_bearth`, `subvision`, `room`) VALUES
(7, 's', 'n', 'l', 't', '2022-03-03', 2, 2),
(8, 'd', 'n', 'l', 't', '2022-03-03', 2, 2),
(9, 'surname', 'sbtg', 'mdntb', ' jchg', '2022-03-02', 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `operators`
--

CREATE TABLE `operators` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `number` int(11) NOT NULL,
  `headquarters` varchar(222) CHARACTER SET utf8 NOT NULL,
  `country` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`) VALUES
(1, '111111', '11111111111111111111111111111111111111111111111111111111111111111111111111111111111111'),
(2, '2222222222', '22222222222222222222222222222222222222222222222222222222222222222222222222222222222222'),
(3, '111111', '11111111111111111111111111111111111111111111111111111111111111111111111111111111111111'),
(4, '2222222222', '22222222222222222222222222222222222222222222222222222222222222222222222222222222222222');

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(222) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `type` varchar(222) NOT NULL,
  `subvision` varchar(222) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `type`, `subvision`) VALUES
(10, 'Add', '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `subvisions`
--

CREATE TABLE `subvisions` (
  `id` int(11) NOT NULL,
  `name` varchar(222) CHARACTER SET utf8 NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `subvisions`
--

INSERT INTO `subvisions` (`id`, `name`, `type`) VALUES
(17, 'Add', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `type_rooms`
--

CREATE TABLE `type_rooms` (
  `id` int(11) NOT NULL,
  `type` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `type_rooms`
--

INSERT INTO `type_rooms` (`id`, `type`) VALUES
(1, 'Audience'),
(2, 'Classroom'),
(3, 'Room service');

-- --------------------------------------------------------

--
-- Структура таблицы `type_subvisions`
--

CREATE TABLE `type_subvisions` (
  `id` int(11) NOT NULL,
  `type` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `type_subvisions`
--

INSERT INTO `type_subvisions` (`id`, `type`) VALUES
(1, 'Supply'),
(2, 'Accounting'),
(3, 'IT'),
(4, 'Security');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `is_admin`) VALUES
(17, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(18, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(19, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(20, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(22, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abonents`
--
ALTER TABLE `abonents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subvisions`
--
ALTER TABLE `subvisions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type_rooms`
--
ALTER TABLE `type_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type_subvisions`
--
ALTER TABLE `type_subvisions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abonents`
--
ALTER TABLE `abonents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `operators`
--
ALTER TABLE `operators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `subvisions`
--
ALTER TABLE `subvisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `type_rooms`
--
ALTER TABLE `type_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `type_subvisions`
--
ALTER TABLE `type_subvisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
