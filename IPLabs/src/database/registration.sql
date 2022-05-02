-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 02 2022 г., 15:20
-- Версия сервера: 5.7.33
-- Версия PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `registration`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) CHARACTER SET utf32 NOT NULL,
  `repass` varchar(32) CHARACTER SET utf8 NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `avatar` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `repass`, `type`, `avatar`, `avatar_name`) VALUES
(1, 'zeroAdmin', '39b5177e82858ecc5661a2077b58edc3', '39b5177e82858ecc5661a2077b58edc3', 0, '', '/IPLabs/uploads/avatars/f658cccfa4ed3709d7657025d3c8aed0.jpg'),
(9, 'altq33', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, '/IPLabs/uploads/avatars/b13c9537783a65b2cc4adf465ea05823.jpg'),
(15, 'defaultUser', '96e79218965eb72c92a549dd5a330112', '96e79218965eb72c92a549dd5a330112', 1, NULL, NULL),
(16, 'Shrek', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b', 1, NULL, '/IPLabs/uploads/avatars/60ab194b47c340f80d35a8f82601ea2c.jpg'),
(17, 'rst', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, '/IPLabs/uploads/avatars/5884c5e91ac85a5a190bc1ff689475b3.jpg'),
(18, 'Mirana', 'd66c231d9cbfa3149ee30ac79667e416', 'd66c231d9cbfa3149ee30ac79667e416', 1, NULL, '/IPLabs/uploads/avatars/d0880a05aa7c2735c54674a02302dd46.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
