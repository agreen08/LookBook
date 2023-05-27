-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 27 2023 г., 19:54
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lookbook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book_desc`
--

CREATE TABLE `book_desc` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `title` text COLLATE utf8_estonian_ci NOT NULL,
  `author` text COLLATE utf8_estonian_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `description` text COLLATE utf8_estonian_ci NOT NULL,
  `aboutauthor` text COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Дамп данных таблицы `book_desc`
--

INSERT INTO `book_desc` (`id`, `category_id`, `img`, `title`, `author`, `price`, `description`, `aboutauthor`) VALUES
(6, 1, 'uploads/angeladavis.jpg', 'Angela Davis: An Autobiography', 'Angela Y. Davis', '23.99$', 'Angela Davis has been a political activist at the cutting edge of the Black Liberation, feminist, queer, and prison abolitionist movements for more than 50 years. First published and edited by Toni Morrison in 1974, An Autobiography is a powerful and commanding account of her early years in struggle. Davis describes her journey from a childhood on Dynamite Hill in Birmingham, Alabama, to one of the most significant political trials of the century: from her political activity in a New York high school to her work with the U.S. Communist Party, the Black Panther Party, and the Soledad Brothers.', ''),
(7, 1, 'uploads/fidelcastro.jpg', 'Fidel Castro: My Life: A Spoken Autobiography', 'Ignacio Ramonet, Fidel Castro', '18.99$', 'Fidel Castro was a dictatorial pariah to some and a hero and inspiration for many of the world\'s poor, defiantly charting an independent and revolutionary path for Cuba over nearly half a century. Numerous attempts were made to get Castro to tell his own story. But only in the twilight of his years was he prepared to set out the details of his remarkable biography for the world to read before his death in 2016. This book is nothing less than his living testament.', ''),
(8, 1, 'uploads/Stay True A Memoir.png', 'Stay True: A Memoir\r\n', 'Hua Hsu', '14.25$', 'NATIONAL BOOK CRITICS CIRCLE AWARD WINNER - A gripping memoir on friendship, grief, the search for self, and the solace that can be found through art, by the New Yorker staff writer Hua Hsu\r\n\"This book is exquisite and excruciating and I will be thinking about it for years and years to come.\" --Rachel Kushner, New York Times bestselling author of The Flamethrowers and The Mars Room', ''),
(9, 1, 'uploads/The Postcard.png', 'The Postcard', 'Anne Berest, Tina Kover', '26.00$', 'Anne Berest\'s The Postcard is among the most acclaimed and beloved French novels of recent years. Luminous and gripping to the very last page, it is an enthralling investigation into family secrets, a poignant tale of mothers and daughters, and a vivid portrait of twentieth-century Parisian intellectual and artistic life.', ''),
(10, 1, 'uploads/yellowface.jpg', 'Yellowface', 'R. F. Kuang', '23.55$', 'White lies. Dark humor. Deadly consequences...\r\nAuthors June Hayward and Athena Liu were supposed to be twin rising stars. But Athena\'s a literary darling. June Hayward is literally nobody. Who wants stories about basic white girls, June thinks.\r\nSo when June witnesses Athena\'s death in a freak accident, she acts on impulse: she steals Athena\'s just-finished masterpiece, an experimental novel about the unsung contributions of Chinese laborers during World War I.\r\nSo what if June edits Athena\'s novel and sends it to her agent as her own work?', ''),
(12, 2, 'uploads/grimms.jpg', 'Grimm\'s Complete Fairy Tales', 'Jacob Grimm, Wilhelm Grimm', '13.55$', 'They are the stories we\'ve known since we were children. Rapunzel. Hansel and Gretel. Cinderella. Sleeping Beauty. But the works originally collected by the Brothers Grimm in the early 1800s are not necessarily the versions we heard before bedtime. They\'re darker and often don\'t end very happily-but they\'re often far more interesting.\r\nThis elegant edition of Grimm\'s Complete Fairy Tales includes all our cherished favorites--Snow White, Rumpelstiltskin, Little Red Cap, and many more--in their original versions. With specially designed end papers, a genuine leather cover, and other enhancements, it\'s the perfect gift for anyone looking to build a complete home library.', ''),
(13, 2, 'uploads/ancestor.jpg', 'Ancestor Approved', 'Cynthia L. Smith', '11.99$', 'Edited by award-winning and bestselling author Cynthia Leitich Smith, this collection of intersecting stories by both new and veteran Native writers bursts with hope, joy, resilience, the strength of community, and Native pride.\r\nNative families from Nations across the continent gather at the Dance for Mother Earth Powwow in Ann Arbor, Michigan.\r\nIn a high school gym full of color and song, people dance, sell beadwork and books, and celebrate friendship and heritage. Young protagonists will meet relatives from faraway, mysterious strangers, and sometimes one another (plus one scrappy rez dog).', ''),
(15, 2, 'uploads/mindykim.jpg', 'Mindy Kim and the Fairy-Tale WeddingLyla Lee', 'Lyla Lee', '10.99$', 'Fresh Off the Boat meets Junie B. Jones in this adorable chapter book series following Mindy Kim, a young Asian American girl-in this seventh novel, Mindy\'s dad and Julie get married!\r\nIt\'s time for a big celebration in Mindy Kim\'s family: Dad and Julie are getting married! Mindy can\'t wait to be the flower girl, wear her new hanbok, and officially welcome Julie into the family.', ''),
(16, 2, 'uploads/princess.jpg', 'The Princess and the Unicorn\r\n', 'A. M. Luzzader', '10.99$', 'Come away to Wildflower Kingdom, a faraway fantasy land with princesses, unicorns, and even a dragon! Join eight-year-old Princess Olivia and six-year-old Princess Juniper, sisters who are always off to discover new adventures and important lessons.\r\nJuniper feels jealous when the queen says her older sister, Olivia, is big enough to ride the unicorns of Wildflower Kingdom all by herself. Juniper wants to ride by herself, too, and tries every trick she can think of to grow up fast. Can Juniper grow big and tall in just one afternoon?', ''),
(17, 2, 'uploads/The Rabbit Listened.png', 'The Rabbit Listened', 'Cori Doerrfeld', '10.99$', 'A moving and universal picture book about empathy and kindness, sure to soothe heartaches big and small--now a New York Times bestseller and a perfect gift for any special occasion', ''),
(18, 3, 'uploads/Black Wolf.png', 'Black Wolf', 'Kathleen Kent', '16.99$', 'A \"masterful\" and \"riveting\" thriller about a female CIA agent whose extraordinary facial recognition powers lead her into the dangerous heart of the Soviet Union--and the path of a killer who shouldn\'t exist (Joseph Finder, New York Times bestselling author).', ''),
(19, 3, 'uploads/wager.jpg', 'The Wager A Tale of Shipwreck, Mutiny and Murder', 'David Grann', '16.99$', 'On January 28, 1742, a ramshackle vessel of patched-together wood and cloth washed up on the coast of Brazil. Inside were thirty emaciated men, barely alive, and they had an extraordinary tale to tell. They were survivors of His Majesty\'s Ship the Wager, a British vessel that had left England in 1740 on a secret mission during an imperial war with Spain. While the Wager had been chasing a Spanish treasure-filled galleon known as \"the prize of all the oceans,\" it had wrecked on a desolate island off the coast of Patagonia. The men, after being marooned for months and facing starvation, built the flimsy craft and sailed for more than a hundred days, traversing nearly 3,000 miles of storm-wracked seas. They were greeted as heroes.\r\nBut then...', ''),
(20, 4, 'uploads/bigshadow.jpg', 'Big Shadow', 'Marta Balcewicz', '25.00$', 'In an unnamed town in the summer of 1998, Judy is an isolated and inexperienced teenager on the cusp of adulthood struggling to craft an identity for herself--especially as the artist she wants to be.\r\nThere is little help around her. Her only friends are increasingly obsessed with a cultish belief in a coming \"Big Shadow.\" Her mother is afraid of life and finds solace in TV shows. At her lowest point, Judy meets Maurice Blunt, a visiting summer poetry class professor who is a \"has-been\" fixture of the 1970s NYC punk music scene. Judy believes Maurice--a man more than twice her age desperately seeking lost adoration--is the ticket out of her current life. Soon, she begins taking secret weekend trips to visit him.', ''),
(21, 4, 'uploads/Crying in H Mart A Memoir.jpg', 'Crying in H Mart: A Memoir', 'Michelle Zauner', '24.99$', '#1 NEW YORK TIMES BESTSELLER - From the indie rock sensation known as Japanese Breakfast, an unforgettable memoir about family, food, grief, love, and growing up Korean American--\"in losing her mother and cooking to bring her back to life, Zauner became herself\" (NPR) - CELEBRATING OVER ONE YEAR ON THE NEW YORK TIMES BESTSELLER LIST', ''),
(22, 5, 'uploads/bird.jpg', 'The Bird Tattoo', 'Dunya Mikhail', '22.55$', 'Helen is a young Yazidi woman, living with her family in a mountain village in Sinjar, northern Iraq. One day she finds a local bird caught in a trap, and frees it, just as the trapper, Elias, returns. At first angry, he soon sees the error of his ways and vows never to keep a bird captive again.\r\nHelen and Elias fall deeply in love, marry and start a family in Sinjar. The village has seemed to stand apart from time, protected by the mountains and too small to attract much political notice. But their happy existence is suddenly shattered when Elias, a journalist, goes missing. A brutal organization is sweeping over the land, infiltrating even the remotest corners, its members cloaking their violence in religious devotion. Helen\'s search for her husband results in her own captivity and enslavement.', ''),
(23, 5, 'uploads/legends.jpg', 'Legends & Lattes: A Novel of High Fantasy and Low Stakes', 'Travis Baldree', '23.99$', 'After a lifetime of bounties and bloodshed, Viv is hanging up her sword for the last time.\r\nThe battle-weary orc aims to start fresh, opening the first ever coffee shop in the city of Thune. But old and new rivals stand in the way of success -- not to mention the fact that no one has the faintest idea what coffee actually is.\r\nIf Viv wants to put the blade behind her and make her plans a reality, she won\'t be able to go it alone.\r\nBut the true rewards of the uncharted path are the travelers you meet along the way. And whether drawn together by ancient magic, flaky pastry, or a freshly brewed cup, they may become partners, family, and something deeper than she ever could have dreamed.', '');

-- --------------------------------------------------------

--
-- Структура таблицы `book_details`
--

CREATE TABLE `book_details` (
  `id` int(11) NOT NULL,
  `desc_id` int(11) NOT NULL,
  `price` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `publisher` text COLLATE utf8_estonian_ci NOT NULL,
  `publish_date` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  `pages` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `language` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `genres` varchar(1000) COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `genres`) VALUES
(1, 'Autobiography'),
(2, 'For Children'),
(3, 'Adventures'),
(4, 'Psychology'),
(5, 'Fantasy');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book_desc`
--
ALTER TABLE `book_desc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desc_id` (`desc_id`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book_desc`
--
ALTER TABLE `book_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `book_details`
--
ALTER TABLE `book_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `book_desc`
--
ALTER TABLE `book_desc`
  ADD CONSTRAINT `book_desc_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `catalog` (`id`);

--
-- Ограничения внешнего ключа таблицы `book_details`
--
ALTER TABLE `book_details`
  ADD CONSTRAINT `book_details_ibfk_1` FOREIGN KEY (`desc_id`) REFERENCES `book_desc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
