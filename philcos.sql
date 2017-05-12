-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 12 2017 г., 09:13
-- Версия сервера: 5.7.13-log
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `philcos`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `message` text NOT NULL,
  `admin_ok` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `surname`, `city`, `age`, `message`, `admin_ok`) VALUES
(2, 'Лада', 'Денс', 'Москва', 35, 'Мы с моим будущим мужем мечтали о шикарной свадьбе, а денег мало, но благодаря «филкос» мы не отказываем себе в желаемом! Спасибо, теперь-то я могу приобрести платье своей мечты!', 1),
(4, 'Юрий Михайлович', 'Панарин', 'Самара', 62, 'Дорогого стоит за один раз отправить заявку в несколько банков! Я воспользовался ФИЛКОСом, и не пожалел. Уже на следующий день поступило первое предложение. Получил нужную сумму, спасибо!', 0),
(5, 'Анна', 'Игумнова', 'Тверь', 46, 'Очень важно было быстро найти кредит! Крупная сумма нужна была срочно! Тратить время на поиск не пришлось! Все сделала ФИЛКОС!', 0),
(6, 'Константин', 'Фролов', 'Балашов', 35, 'Я воспользовался ФИЛКОСом, и не пожалел.', 0),
(7, 'Елена', 'Кулешова', 'Москва', 24, 'Спасибо компании ФИЛКОС, за помощь в поиске выгодного кредита. Я и не предполагала, что получу столько одобренных вариантов.', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
