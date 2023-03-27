-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 10:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bio` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `bio`, `user_id`, `image`) VALUES
(5, 'Various authors', 'Used to credit creative works which are the result of a collaboration', 1, 'uploads/Assign-Multiple-Authors-to-a-Post-in-WordPress-1280x720.jpg'),
(6, 'Kim Dung', 'Kim Dung was a Chinese wuxia (\"martial arts and chivalry\") novelist and essayist who co-founded the Hong Kong daily newspaper Ming Pao in 1959 and served as its first editor-in-chief. He was Hong Kong\'s most famous writer,[5] and is named along with Gu Long and Liang Yusheng as the \"Three Legs of the Tripod of Wuxia\".', 1, 'uploads/kimdungtpo3_XDFQ.jpg'),
(7, 'Fujiko Fujio', 'Fujiko Fujio was a manga writing duo formed by Japanese manga artists Hiroshi Fujimoto and Motoo Abiko. They formed their partnership in 1951, and used the Fujiko Fujio name from 1954 until dissolution of the partnership in 1987, upon Fujimoto\'s illness.', 1, 'uploads/img_fujiko.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `image` varchar(1024) NOT NULL,
  `file` varchar(1024) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `slug` varchar(100) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `user_id`, `artist_id`, `image`, `file`, `category_id`, `date`, `slug`, `featured`, `views`) VALUES
(12, 'Alices Adventurespdf', 1, 5, 'uploads/9152299-M.jpg', 'uploads/alicesadventurespdf.pdf', 7, '2023-03-02 17:57:50', 'alices-adventurespdf', 0, 1),
(13, 'Cihm', 1, 5, 'uploads/10527843-M (1).jpg', 'uploads/cihm.pdf', 7, '2023-03-02 17:58:51', 'cihm', 0, 9),
(15, 'Little Woman', 1, 5, 'uploads/6795866-M.jpg', 'uploads/littlewomenormeg.pdf', 7, '2023-03-02 18:02:42', 'little-woman', 0, 7),
(16, 'Tieu ngao giang ho', 1, 6, 'uploads/tieu-ngao-giang-ho-pdf.jpg', 'uploads/TIEU-NGAO-GIANG-HO---Kim-Dung.pdf', 8, '2023-03-02 18:08:47', 'tieu-ngao-giang-ho', 0, 0),
(17, 'Thien long bat bo', 1, 6, 'uploads/thien-long-bat-bo-pdf.jpg', 'uploads/SachMoi.Net-thien-long-bat-bo-Kim-Dung.pdf', 8, '2023-03-02 18:10:12', 'thien-long-bat-bo', 0, 0),
(18, 'Than Dieu Hiep Lu', 1, 6, 'uploads/than-dieu-hiep-lu-pdf-105x168.jpg', 'uploads/Than-Dieu-Hiep-Lu---Kim-Dung.pdf', 8, '2023-03-02 18:11:20', 'than-dieu-hiep-lu', 0, 15),
(19, 'Cuoc Chien Vu Tru', 1, 7, 'uploads/53415999.jpg', 'uploads/CUOC CHIEN VU TRU.pdf', 9, '2023-03-02 18:20:18', 'cuoc-chien-vu-tru', 0, 20),
(20, 'Di Tim Mien Dat Moi', 1, 7, 'uploads/cqw1368460616.png', 'uploads/ĐI TÌM MIỀN ĐẤT MỚI.pdf', 9, '2023-03-02 18:21:14', 'di-tim-mien-dat-moi', 0, 37);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `disabled`) VALUES
(7, 'Classic Books', 1),
(8, 'Knight-errant', 1),
(9, 'Manga', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`user_id`, `book_id`) VALUES
(1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `date`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$ZgTVoWoO4VWLN5OXA57zsO3V8Dfhn3A3OQkDSVGVfUD.d5Dd8NaJO', 'admin', '2023-03-01 09:48:57'),
(6, 'Test', 'test@test.com', '$2y$10$4WqTrA41s5ig1J.dLk4Y/euut/8hr.R7TUsRxsagh99/sOCPdlI/2', 'user', '2023-03-10 07:52:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `date` (`date`),
  ADD KEY `title` (`title`),
  ADD KEY `slug` (`slug`),
  ADD KEY `featured` (`featured`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`user_id`,`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`),
  ADD KEY `date` (`date`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `reserve_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
