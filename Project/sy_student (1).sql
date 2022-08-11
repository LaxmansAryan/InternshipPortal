-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 09:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sy_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_name` varchar(20) NOT NULL,
  `a_email` varchar(20) NOT NULL,
  `a_id` bigint(10) NOT NULL,
  `a_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_name`, `a_email`, `a_id`, `a_pass`) VALUES
('chitra bhole', 'chitra@gmail.com', 3220200100, 'chitra');

-- --------------------------------------------------------

--
-- Table structure for table `c_intern`
--

CREATE TABLE `c_intern` (
  `st_id` bigint(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_type` varchar(50) NOT NULL,
  `c_tech` varchar(50) NOT NULL,
  `c_role` varchar(50) NOT NULL,
  `c_duration` int(10) NOT NULL,
  `c_start` date NOT NULL,
  `c_end` date NOT NULL,
  `c_file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_intern`
--

INSERT INTO `c_intern` (`st_id`, `c_name`, `c_type`, `c_tech`, `c_role`, `c_duration`, `c_start`, `c_end`, `c_file`, `size`, `downloads`) VALUES
(2220200196, 'a', 'a', 'a', 'a', 3, '2000-01-01', '2000-04-01', 'TRY-compressed.pdf', 544944, 1);

-- --------------------------------------------------------

--
-- Table structure for table `o_intern`
--

CREATE TABLE `o_intern` (
  `st_id` bigint(10) NOT NULL,
  `o_name` varchar(50) NOT NULL,
  `o_domain` varchar(50) NOT NULL,
  `o_tech` varchar(50) NOT NULL,
  `o_duration` int(50) NOT NULL,
  `o_start` date NOT NULL,
  `o_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `o_intern`
--

INSERT INTO `o_intern` (`st_id`, `o_name`, `o_domain`, `o_tech`, `o_duration`, `o_start`, `o_end`) VALUES
(2220200195, 'a', 'b', 'kj', 5, '2000-01-01', '2000-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `intro`, `content`) VALUES
(12, 'leo', 'Leonardo di ser Piero da Vinci[b] (15 April 1452 – 2 May 1519) was an Italian polymath of the High Renaissance who was active as a painter, draughtsman, engineer, scientist, theorist, sculptor, and architect.', 'While his fame initially rested on his achievements as a painter, he also became known for his notebooks, in which he made drawings and notes on a variety of subjects, including anatomy, astronomy, botany, cartography, painting, and paleontology. Leonardo is widely regarded to have been a genius who epitomized the Renaissance humanist ideal,[4] and his collective works compose a contribution to later generations of artists matched only by that of his younger contemporary, Michelangelo.[3][4]\r\n\r\nBorn out of wedlock to a successful notary and a lower-class woman in, or near, Vinci, he was educated in Florence by the Italian painter and sculptor Andrea del Verrocchio. He began his career in the city, but then spent much time in the service of Ludovico Sforza in Milan. Later, he worked in Florence and Milan again, as well as briefly in Rome, all while attracting a large following of imitators and students. Upon the invitation of Francis I, he spent his last three years in France, where he died in 1519. Since his death, there has not been a time where his achievements, diverse interests, personal life, and empirical thinking have failed to incite interest and admiration,[3][4] making him a frequent namesake and subject in culture.\r\n\r\nLeonardo is identified as one of the greatest painters in the history of art and is often credited as the founder of the High Renaissance.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_name` varchar(10) NOT NULL,
  `st_middle` varchar(10) NOT NULL,
  `st_surname` varchar(10) NOT NULL,
  `st_email` varchar(20) NOT NULL,
  `st_class` varchar(10) NOT NULL,
  `st_div` varchar(10) NOT NULL,
  `st_roll` int(10) NOT NULL,
  `st_id` bigint(10) NOT NULL,
  `st_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_name`, `st_middle`, `st_surname`, `st_email`, `st_class`, `st_div`, `st_roll`, `st_id`, `st_pass`) VALUES
('Aryan', 'Santosh', 'Sawant', 'aryan.sawant@somaiya', 'TY', 'B', 27, 2220200195, 'L@xman7021'),
('sejal', 'santosh', 'sawant', 'sawantsejal41@gmail.', 'SY', 'A', 56, 2220200196, 'sejal'),
('Oshin', 'Santosh', 'Sawant', 'oshin.sawant13@gmail', 'SY', 'B', 12, 2220200197, 'osha'),
('Santosh', 'Govind', 'Sawant', 'santosh@gmail.com', 'SY', 'B', 1, 2220200198, 'santy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_intern`
--
ALTER TABLE `c_intern`
  ADD KEY `test2` (`st_id`);

--
-- Indexes for table `o_intern`
--
ALTER TABLE `o_intern`
  ADD KEY `test` (`st_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `c_intern`
--
ALTER TABLE `c_intern`
  ADD CONSTRAINT `test2` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`);

--
-- Constraints for table `o_intern`
--
ALTER TABLE `o_intern`
  ADD CONSTRAINT `test` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
