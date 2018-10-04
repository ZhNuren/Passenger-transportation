-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 30 2018 г., 07:02
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_transport`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `Last_Name` varchar(15) NOT NULL,
  `First_Name` varchar(15) NOT NULL,
  `Login` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Telephone_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`Last_Name`, `First_Name`, `Login`, `Password`, `Telephone_number`) VALUES
('Muratbekuly', 'Arnat ', 'arnat@gmail.com', 'arnat', '7078896589'),
('Muratbekuly', 'Arnat ', 'arnats@gmail.com', 'qweq', '7078896589'),
('12312312', '12123', 'qwdqwdwwwwwwwwwwwwww', 'qwer', '7056659865'),
('Ualikhan', 'Madinur', 'umadinur@gmail.com', 'madinur', '7056659845'),
('Zhaksylyk', 'Nuren', 'zh.nuren@gmail.com', '1234', '7074549730');

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `id` int(3) NOT NULL,
  `user` varchar(30) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`id`, `user`, `comments`, `date`) VALUES
(1, 'arnat@gmail.com', 'Hey', '2018-01-30 11:33:59');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(1) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Place_ID` int(2) NOT NULL,
  `Seats` int(1) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`Order_ID`, `User`, `Place_ID`, `Seats`, `Date`) VALUES
(1, 'arnat@gmail.com', 3, 3, '2018-01-18'),
(2, 'arnat@gmail.com', 1, 4, '2018-01-12');

-- --------------------------------------------------------

--
-- Структура таблицы `travelplace`
--

CREATE TABLE `travelplace` (
  `Travel_ID` int(2) NOT NULL,
  `Place` varchar(15) NOT NULL,
  `Distance` int(4) NOT NULL,
  `Seat_Price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `travelplace`
--

INSERT INTO `travelplace` (`Travel_ID`, `Place`, `Distance`, `Seat_Price`) VALUES
(1, 'Aktobe', 1200, 8000),
(3, 'Almaty', 450, 3000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Login`);

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Travel_ID` (`Place_ID`),
  ADD KEY `User` (`User`);

--
-- Индексы таблицы `travelplace`
--
ALTER TABLE `travelplace`
  ADD PRIMARY KEY (`Travel_ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `travelplace`
--
ALTER TABLE `travelplace`
  MODIFY `Travel_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Place_ID`) REFERENCES `travelplace` (`Travel_ID`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`User`) REFERENCES `accounts` (`Login`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
