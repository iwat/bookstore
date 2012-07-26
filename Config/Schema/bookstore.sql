-- Adminer 3.4.0 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `authors` (`id`, `name`) VALUES
(1,	'Mariano Iglesias'),
(2,	'Fabio Arciniegas'),
(3,	'Holly Lisle'),
(4,	'Philip R. Wallace'),
(5,	'Sherri Duskey Rinker'),
(6,	'Tom Lichtenheld'),
(7,	'Sandra Boynton'),
(8,	'Eric Carle'),
(9,	'Hervé Tullet'),
(10,	'Karen Katz'),
(11,	'Robert Munsch'),
(12,	'Sheila McGraw'),
(13,	'Leslie Patricelli'),
(15,	'Nancy Tillman'),
(16,	'Rod Campbell'),
(17,	'Shel Silverstein'),
(18,	'Mo Willems'),
(19,	'Roger Priddy'),
(20,	'Margaret Wise Brown'),
(21,	'Clement Hurd'),
(22,	'Dorothy Kunhardt'),
(23,	'Josie Bissett'),
(24,	'Kevan Atteberry'),
(25,	'Bill Martin Jr.'),
(26,	'Dr. Seuss'),
(27,	'Nina Laden');

DROP TABLE IF EXISTS `authors_books`;
CREATE TABLE `authors_books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `author_id_book_id` (`author_id`,`book_id`),
  KEY `author_id` (`author_id`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `authors_books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  CONSTRAINT `authors_books_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `authors_books` (`id`, `author_id`, `book_id`) VALUES
(1,	1,	1),
(2,	2,	14),
(3,	3,	15),
(4,	4,	22),
(5,	5,	26),
(6,	6,	26),
(7,	7,	27),
(10,	7,	30),
(29,	7,	45),
(8,	8,	28),
(27,	8,	44),
(9,	9,	29),
(18,	10,	37),
(12,	11,	32),
(13,	12,	32),
(16,	13,	35),
(11,	15,	31),
(14,	16,	33),
(15,	17,	34),
(20,	17,	39),
(17,	18,	36),
(24,	18,	42),
(19,	19,	38),
(21,	20,	40),
(22,	21,	40),
(23,	22,	41),
(25,	23,	43),
(26,	24,	43),
(28,	25,	44),
(44,	25,	48),
(30,	26,	46),
(45,	26,	48),
(31,	27,	47);

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publisher_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `released` date NOT NULL,
  `isbn13` varchar(13) NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `isbn13` (`isbn13`),
  KEY `publisher_id` (`publisher_id`),
  CONSTRAINT `books_ibfk_1` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `books` (`id`, `publisher_id`, `title`, `released`, `isbn13`, `price`) VALUES
(1,	1,	'CakePHP 1.3 Application Development Cookbook',	'2011-03-01',	'9781849511926',	630.00),
(14,	3,	'XML Developer\'s Guide',	'2002-07-15',	'9780072224573',	44.95),
(15,	4,	'Midnight Rain',	'2004-11-02',	'9780451411754',	5.95),
(22,	9,	'Paradox Lost: Images of the Quantum',	'1996-04-25',	'9780387946597',	6.95),
(26,	2,	'Goodnight, Goodnight Construction Site',	'2011-05-04',	'9780811877824',	10.19),
(27,	5,	'Moo Baa La La La',	'1982-11-30',	'9780671449018',	5.39),
(28,	6,	'The Very Hungry Caterpillar',	'1994-03-23',	'9780399226908',	7.91),
(29,	2,	'Press Here',	'2011-03-30',	'978-081187954',	10.87),
(30,	5,	'The Going-To-Bed Book',	'2000-09-01',	'9780671449025',	5.99),
(31,	7,	'On the Night You Were Born',	'2006-10-17',	'9780312346065',	11.05),
(32,	8,	'Love You Forever',	'1995-09-01',	'9780920668375',	5.95),
(33,	5,	'Dear Zoo: A Lift-the-Flap Book',	'2007-05-08',	'9781416947370',	6.29),
(34,	10,	'Where the Sidewalk Ends 30th Anniversary Edition: Poems and Drawings',	'2004-01-20',	'9780060572341',	11.71),
(35,	11,	'Potty (Leslie Patricelli board books)',	'2010-09-14',	'9780763644765',	6.99),
(36,	12,	'Don\'t Let the Pigeon Drive the Bus!',	'2003-04-01',	'9780786819881',	10.87),
(37,	5,	'Where Is Baby\'s Belly Button? A Lift-the-Flap Book',	'2011-05-04',	'9780689835605',	5.99),
(38,	13,	'First 100 Soft to Touch Words',	'2011-05-10',	'9780312510787',	5.98),
(39,	14,	'The Giving Tree',	'1964-10-07',	'9780060256654',	10.61),
(40,	15,	'Goodnight Moon',	'1991-08-02',	'9780694003617',	8.99),
(41,	16,	'Pat the Bunny (Touch and Feel Book)',	'2011-05-01',	'9780307120007',	9.99),
(42,	17,	'Knuffle Bunny: A Cautionary Tale',	'2004-12-07',	'9780786818709',	10.61),
(43,	18,	'Tickle Monster Laughter Kit',	'2009-09-30',	'9781932319835',	23.07),
(44,	19,	'Brown Bear, Brown Bear, What Do You See?',	'1996-09-15',	'9780805047905',	7.95),
(45,	5,	'Boynton\'s Greatest Hits: Volume 1 (Boynton Board Books)',	'1998-10-01',	'9780689823220',	13.44),
(46,	20,	'Dr. Seuss\'s ABC: An Amazing Alphabet Book!',	'1996-11-26',	'9780679882817',	4.99),
(47,	2,	'Peek-A Who?',	'2000-02-01',	'9780811826020',	6.95),
(48,	11,	'Test',	'2012-07-22',	'1111132434454',	31.00);

DROP TABLE IF EXISTS `publishers`;
CREATE TABLE `publishers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `publishers` (`id`, `name`) VALUES
(1,	'Packt Publishing'),
(2,	'Chronicle Books'),
(3,	'McGraw-Hill'),
(4,	'Onyx'),
(5,	'Little Simon'),
(6,	'Philomel'),
(7,	'Feiwel & Friends'),
(8,	'Firefly Books Ltd.'),
(9,	'Springer'),
(10,	'HarperCollins'),
(11,	'Candlewick'),
(12,	'Hyperion Press'),
(13,	'Priddy Books'),
(14,	'Harper & Row'),
(15,	'HarperFestival'),
(16,	'Golden Books'),
(17,	'Hyperion'),
(18,	'Compendium Inc'),
(19,	'Henry Holt and Co.'),
(20,	'Random House Books for Young Readers');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1,	'cakephp',	'49157b089b21e2a3593a3367d4c16e4f3afbe65a');

-- 2012-07-25 21:32:06
