-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 10:30 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h33t_hentai`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `hentai_id` int(11) NOT NULL,
  `hentai_title` text NOT NULL,
  `hentai_year` year(4) NOT NULL,
  `hentai_quality` text NOT NULL,
  `hentai_cover` text NOT NULL,
  `hentai_group` text NOT NULL,
  `hentai_description` text NOT NULL,
  `hentai_studios` text NOT NULL,
  `hentai_tags` text NOT NULL,
  `hentai_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`hentai_id`, `hentai_title`, `hentai_year`, `hentai_quality`, `hentai_cover`, `hentai_group`, `hentai_description`, `hentai_studios`, `hentai_tags`, `hentai_file`) VALUES
(3, '[S02EP01] Kuroinu II The Animation', 2021, '480p', 'uis27g10q-612df5f7e49fe251974263.jpg', 'SakuraCircle', '- None yet -', 'PinkPineapple, Seven,', '- None yet -', 'Kuroinu II The Animation - 01 (English Sub) [Cen] [DVD] [480p] [SakuraCircle] [35C6846C].mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD UNIQUE KEY `index` (`hentai_title`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
