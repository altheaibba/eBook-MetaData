-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 04:51 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment3`
--

-- --------------------------------------------------------

--
-- Table structure for table `ebook_metadata`
--

CREATE TABLE `ebook_metadata` (
  `id` int(11) NOT NULL,
  `creator` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `language` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook_metadata`
--

INSERT INTO `ebook_metadata` (`id`, `creator`, `title`, `type`, `identifier`, `date`, `language`, `description`) VALUES
(1, 'JK Rowling', 'Harry Potter', 'Fantasy Fiction; Mystery; Young Adult; Drama', '9788700631625', '1997-06-26', 'English (en-GB)', 'Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own.'),
(2, 'CS Lewis', 'Narnia', 'Fantasy; Childrens Literature', '9780020442806', '1950-10-16', 'English', 'Four kids travel through a wardrobe to the land of Narnia and learn of their destiny to free it with the guidance of a mystical lion.'),
(3, 'Suzanne Collins', 'The Hunger Games', 'Utopian and Dystopian Fiction', '9788492671212', '2008-09-14', 'English (en-US)', 'Katniss Everdeen voluntarily takes her sisters place in a televised competition where teenagers are randomly chosen to fight to the death.'),
(4, 'Rj Palacio', 'Wonder', 'Childrens Literature; Coming of Age', '0375869026', '2012-02-14', 'English', 'Auggie Pullman, a ten-year-old boy living in New York City, was born with a facial deformity that has made it difficult for him to make friends.'),
(5, 'Victor Hugo', 'Les Miserables', 'Epic Novel; Historical Fiction', '9781626865037', '1862-01-01', 'French', 'The convict Jean Valjean is released from a French prison after serving nineteen years for stealing a loaf of bread.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ebook_metadata`
--
ALTER TABLE `ebook_metadata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identifier` (`identifier`),
  ADD UNIQUE KEY `identifier_2` (`identifier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ebook_metadata`
--
ALTER TABLE `ebook_metadata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
