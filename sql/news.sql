-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 14 2020 г., 16:09
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newstest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `preview` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `preview`, `text`, `image`) VALUES
(1, 'Леброн Джеймс test 4', '2020-10-02 15:48:00', 'Леброн Джеймс в 4 раз в карьере признан MVP финала НБА', 'Баскетболист \"Лос-Анджелес Лейкерс\" Леброн Джеймс в 4 раз в карьере признан самым ценным игроком (MVP) финальной серии НБА, сообщается в официальном аккаунте ассоциации в Twitter.\r\n\"Лейкерс\" в воскресенье обыграли \"Майами Хит\" (106:93) в шестом матче серии и в 17-й раз в истории завоевали трофей. Джеймс записал себе в актив 28 очков, 14 подборов и 10 передач, оформив трипл-дабл. Средняя результативность 35-летнего форварда в финальной серии составила 29,8 очка, 11,8 подбора и 8,5 передачи.\r\nФорвард \"Лейкерс\" в четвертый раз стал MVP финала и обошел по этому показателю Мэджика Джонсона, Тима Данкана и Шакила ОНила. Чаще самым ценным игроком финальной серии признавался только Майкл Джордан (6 раз). Кроме того, Джеймс стал первым игроком в истории НБА. который признавался MVP финала в составе трех разных команд (\"Лейкерс\", \"Майами\", \"Кливленд Кавальерс\").\r\n', ''),
(2, 'Зеленский назвал условие для ухода с поста президента', '2020-10-12 00:00:00', 'Президент Украины Владимир Зеленский готов оставить пост президента Украины', 'Президент Украины Владимир Зеленский готов оставить пост президента Украины, если не сможет закончить войну на Донбассе. Об этом он заявил в программе ВВС HARDtalk.\r\n\r\n«Вы знаете, это не проблема для меня. Я сразу говорил, что я не цепляюсь ни за рейтинги, ни за власть. Если я не смогу закончить войну, значит нужно, чтобы пришел другой человек, который способен закончить эту трагическую историю между нашими странами (Украиной и Россией. — «Ведомости»)» — сказал Зеленский.\r\n\r\nЗеленский подчеркнул, что верит возможность заключения мирного соглашения с президентом России Владимиром Путиным, по которому, в частности, Крым вновь войдет в состав Украины. Однако для этого стране необходима помощь всего мира, отметил украинский лидер.\r\n\r\nВ сентябре 2014 г. трехсторонней контактной группой (уполномоченные России, Украины и ОБСЕ) были подписаны первые минские соглашения, окончившие активную часть боевых действий на юго-востоке Украины. Вторые минские соглашения остановили эскалацию конфликта в феврале 2015 г. в районе Дебальцево. Переговоры в рамках контактной группы идут до сих пор.', ''),
(33, 'new3', '2013-02-02 05:40:00', 'qweqw', ' sdfewrfsdefwsfefwffefwf efswf\r\newf\r\nfwef\r\nwefwef\r\nwef\r\nwewfwf\r\nwef\r\nfe', ''),
(34, 'fresh news', '2020-10-14 01:09:00', 'last news', 'ya ebal pora spatki', ''),
(35, 'news 5', '2004-01-17 12:12:00', 'qwrqwr', 'gbpkdfksdf sdkffdskf sdfkwek wer3 2 234 fa rew', ''),
(36, 'news 6', '1995-02-28 14:52:00', 'huevyi god', 'qweqweq\r\nqweqwe\r\nqa\r\nsda\r\n\r\nqwr\r\nqwr\r\n23\r\nr2r3rf\r\n32rfqw235qw2\r\ntgvw54\r\n43wdw', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
