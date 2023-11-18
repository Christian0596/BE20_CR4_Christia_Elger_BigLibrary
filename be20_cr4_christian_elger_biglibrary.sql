-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 11:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be20_cr4_christian_elger_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be20_cr4_christian_elger_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be20_cr4_christian_elger_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `isbn_code` varchar(20) NOT NULL,
  `short_description` text DEFAULT NULL,
  `type` enum('book','CD','DVD') NOT NULL,
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(100) DEFAULT NULL,
  `publisher_address` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `isbn_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
(13, 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/JohnWick_logo_bg.svg/220px-JohnWick_logo_bg.svg.png', '2258174751', 'Kurz nachdem die Frau von John Wick, einem sich im Ruhestand befindenden Auftragsmörder, an einer Krankheit stirbt, wird der Witwer von einer dreiköpfigen Gruppe bei sich zu Hause überfallen, wobei der Hund seiner verstorbenen Frau getötet und sein Auto gestohlen wird.', 'DVD', 'Chad Stahelski,', 'David David Leitch', 'John Wick', 'USA', '2014-01-01'),
(15, 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/JohnWick_logo_bg.svg/220px-JohnWick_logo_bg.svg.png', '2258174751', 'Wenige Tage nach dem Tod von Viggo Tarasov wird John Wick von Santino D Antonio aufgesucht, der ihm einst beim Ausstieg aus dem Milieu half und dafür von John eine Schuldmünze bekam.', 'DVD', 'Chad', 'Stahelski', 'John Wick: Chapter 2', 'USA', '2017-01-01'),
(17, 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/JohnWick_logo_bg.svg/220px-JohnWick_logo_bg.svg.png', '515151', 'John Wick konnte sich regenerieren und bringt aus Rache den Ältesten um. Die Hohe Kammer stellt daraufhin dem Marquis Vincent de Gramont sämtliche Freiheiten und Befugnisse aus, um John umzubringen.', 'DVD', 'Chad', 'Stahelski', 'John Wick: Kapitel 4', 'USA', '2023-01-01'),
(19, 'https://upload.wikimedia.org/wikipedia/en/6/6b/Harry_Potter_and_the_Philosopher%27s_Stone_Book_Cover.jpg', '0-7475-3269-9', 'Harry Potter und der Stein der Weisen (britischer Originaltitel: Harry Potter and the Philosopher’s Stone) ist der erste Band der siebenteiligen Harry-Potter-Romanreihe von Joanne K. Rowling.', 'DVD', 'Joanne K.', 'Rowling', 'Harry Potter and the Philosopher s Stone', 'London', '0000-00-00'),
(21, 'https://upload.wikimedia.org/wikipedia/en/thumb/5/5c/Harry_Potter_and_the_Chamber_of_Secrets.jpg/220px-Harry_Potter_and_the_Chamber_of_Secrets.jpg', '0-7475-3269-9', 'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series.', 'book', 'J.K', 'Rowling', 'Harry Potter and the Chamber of Secrets', 'Bloomsbury (UK)', '1998-07-02'),
(22, 'https://upload.wikimedia.org/wikipedia/en/thumb/a/a0/Harry_Potter_and_the_Prisoner_of_Azkaban.jpg/220px-Harry_Potter_and_the_Prisoner_of_Azkaban.jpg', '9780439136365', 'The third book in the Harry Potter series.', 'book', 'J.K.', 'Rowling', 'Harry Potter and the Prisoner of Azkaban', 'London', '1999-09-08'),
(23, 'https://upload.wikimedia.org/wikipedia/en/thumb/b/b6/Harry_Potter_and_the_Goblet_of_Fire_cover.png/220px-Harry_Potter_and_the_Goblet_of_Fire_cover.png', '9780439139601', 'The fourth book in the Harry Potter series.', 'book', 'J.K.', 'Rowling', 'Harry Potter and the Goblet of Fire', 'London', '2000-07-08'),
(24, 'https://upload.wikimedia.org/wikipedia/en/thumb/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg/220px-Harry_Potter_and_the_Order_of_the_Phoenix.jpg', '9780439358071', 'The fifth book in the Harry Potter series.', 'book', 'J.K.', 'Rowling', 'Harry Potter and the Order of the Phoenix', 'New York', '2003-06-21'),
(25, 'https://upload.wikimedia.org/wikipedia/en/thumb/b/b5/Harry_Potter_and_the_Half-Blood_Prince_cover.png/220px-Harry_Potter_and_the_Half-Blood_Prince_cover.png', '9780439785969', 'The sixth book in the Harry Potter series.', 'book', 'J.K.', 'Rowling', 'Harry Potter and the Half-Blood Prince', 'London', '2005-07-16'),
(26, 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/John_Wick_3.png/280px-John_Wick_3.png', '515151', 'Nachdem John Wick Santino D Antonio im Continental getötet hat, befindet er sich auf der Flucht durch New York.', 'DVD', 'Chad', 'Stahelski', 'John Wick: Chapter 3', 'USA', '2019-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
