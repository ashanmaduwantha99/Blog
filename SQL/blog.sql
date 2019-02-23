-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 04:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `posttext_name` varchar(100) NOT NULL,
  `posttext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `username`, `posttext_name`, `posttext`) VALUES
(27, 'Ashan', 'test 2', 'test 2 '),
(29, 'Ashan', 'test 3.3', 'pppppppppppppppp'),
(30, 'Ashan', 'test 4', 'xxxxxxxxxxxxx'),
(32, 'Ashan', 'test 1.1 updated', '  test 1 post new updated'),
(33, 'Ashan', 'love', 'à¶œà·à¶½à·Šà·€à·“à¶½à· à·ƒà·à¶¸à¶¯à·˜ à¶”à¶¶à¶œà·š \r\nà¶šà·à¶½à·Šà¶¸à¶±à·Š à¶…à¶­à¶»à·š.....\r\n\r\nà¶…à¶´ à¶±à·™à¶­à·Š à¶œà·à¶§à·™à¶±à· à¶¸à·œà·„à·œà¶­à·š \r\nà¶”à¶¶ à¶¸à· à·ƒà¶­à·”à·€à¶ºà·’ à¶»à·„à·ƒà·š\r\nà¶‡à¶³à·š à·ƒà·’à¶­à·š à¶±à·’à·ƒà¶‚à·ƒà¶½à·š.....\r\n\r\nà¶»à¶Ÿà¶¯à·™à¶ºà·’ à¶”à¶¶ à¶¯à·™à·ƒà¶±à· à·€à¶¯à¶±à¶±à·Š\r\nà¶ºà·„à¶±à·š à¶­à¶±à·’à·€à·“....'),
(34, 'Ashan', 'final test', 'final test'),
(35, 'Ashan', 'Ashan', 'As');

-- --------------------------------------------------------

--
-- Table structure for table `post_image`
--

CREATE TABLE `post_image` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `post_name` varchar(100) NOT NULL,
  `post_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_image`
--

INSERT INTO `post_image` (`id`, `username`, `post_name`, `post_image`) VALUES
(6, 'Ashan', 's', '2281144-361968-fire-letter-s-isolated-on-black-background.jpg'),
(7, 'Ashan', 'love', '28471609_738728302982602_9194706958683010433_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post_text_and_image`
--

CREATE TABLE `post_text_and_image` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `post_name` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_text_and_image`
--

INSERT INTO `post_text_and_image` (`id`, `username`, `post_name`, `image_text`, `image`) VALUES
(26, 'Ashan', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'fire-graffiti-letter-A.jpg'),
(28, 'Ashan', 'qqq', 'sad', 'The_fiery_English_alphabet_picture_3538264.jpg'),
(29, 'Ashan', 'à¶…à·€à·ƒà·à¶±à¶ºà¶§ à¶´à·™à¶»', 'à¶…à·€à·ƒà·à¶±à¶ºà¶§ à¶´à·™à¶»\r\n\r\nà·ƒà·Šà·€à·à·ƒà¶±à·à¶½à¶º à·„à¶»à·„à· à¶´à·™à¶«à·„à·à¶½à·Šà¶½à¶§\r\nà¶´à·’à¶ºà¶¸à¶‚ à¶šà¶» à¶…à·€à·ƒà¶±\r\nà¶šà·…à·”à¶¸ à¶šà·…à·” à¶…à·€à¶šà·à·à¶ºà¶š \r\nà·ƒà·”à¶¯à·” à¶´à·à·„à· à·ƒà·’à¶­à·Šà¶­à¶¸à·Š à¶…à¶¯à·’à¶± à¶¯à·”à¶¸à·Š à¶»à·œà¶¯\r\n\r\nà¶±à·à·€à¶­à·’ à¶±à·à·€à¶­ à¶¸à¶‚ à¶¯à·™à·ƒà¶¸\r\nà¶¶à¶½à·à¶œà·™à¶± à¶‘à¶šà·€à¶»à¶šà·Š à¶¯à·™à·€à¶»à¶šà·Š à·€à·’à¶­à¶»\r\nà¶œà·à·„à·’ à¶œà·à·„à·’ à¶´à¶« à¶…à¶¯à·’à¶± à¶¸à·™à¶±à·Š à¶ºà¶½à·’à¶­à·Š\r\nà¶¸à·”à·ƒà·” à¶‹à¶±à· à¶­à·™à¶­ à¶…à·€à¶šà·à·à·™à¶§à¶¸\r\n\r\nà·†à·’à¶½à·Šà¶§à¶»à¶º à¶´à·„à·” à¶šà¶»à¶‚ à¶†à¶ºà·™à¶¸\r\nà¶´à·™à¶«à·„à·à¶½à·Šà¶½ à·„à·œà¶ºà¶‚ à¶ºà¶± à¶¯à·”à¶¸à·Š à¶»à·œà¶¯\r\nà¶­à·à·€à¶»à·”à¶«à· à¶»à¶­à·”à¶¸ à¶»à¶­à·” à¶´à·à¶§\r\nà¶´à¶§à¶š à·€à¶½ à¶šà·…à·” à¶´à·à¶§ à¶­à·€à¶»à¶œà·™à¶±\r\n\r\nà¶…à·€à·ƒà¶±à·Š à¶‹à¶œà·”à¶»à¶§à¶­à·Š à¶…à·€à·ƒà¶±\r\nà¶…à¶½à·” à¶¶à¶¯à·”à¶± à¶­à·”à¶½ à¶±à·’à·€à·™à¶¸à·’à¶±à·Š à¶¯à·à·€à·™à¶±\r\nà·†à·’à¶½à·Šà¶§à¶»à¶ºà¶šà·Š à·€à¶œà·™à¶ºà·’ à·„à¶»à·’à¶ºà¶§\r\nà¶¢à·“à·€à·’à¶­à¶º à¶”à·„à·š à¶´à·à·€à·™à¶±\r\n\r\n- à¶±à·à¶ à·’ -', '29511084_1655755634509136_8466175616171900928_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userimage`
--

CREATE TABLE `userimage` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userimage`
--

INSERT INTO `userimage` (`id`, `username`, `image`, `image_text`) VALUES
(2, 'Ashan', 'IMG_6362.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `tele_num` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'default-user.jpg',
  `image_text` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`, `fname`, `lname`, `email`, `address`, `job`, `tele_num`, `image`, `image_text`, `created_at`) VALUES
(1, 'test', '$2y$10$VHtBnEHfv/0Dr3ZrCJ9iL.zH5Msydcpz/MU0x2Zd8.07IgFJT9deK', 'Test', 'Test', 'testuser@gmail.com', 'Test', 'Test', '119', '0', '', '2018-03-28 11:44:12'),
(2, 'Ashan', '$2y$10$JmAcxwAuRV61QfdFkwmg3.IauIUz4jSbeZKAa0EFtxZ1Q4y95n95W', 'Ashan', 'Maduwantha', 'ashanmaduwantha99@gmail.com', 'Pokunuwita', 'Student of University of Ruhuna', '0342260161', 'fire-graffiti-letter-A.jpg', '', '2018-03-28 11:56:36'),
(8, 'Chamila', '$2y$10$1GR93u2CNVidn6HSFJOfZ.HsRkLfRilxZ23hUhblIisqEdpH9jKiO', 'Chamila', 'Jayasinghe', 'chamilagihan@gmail.com', 'Kandy', 'Stude of University of Ruhuna', '0717472329', 'IMG_6405.jpg', '', '2018-03-29 15:32:53'),
(9, 'a', '$2y$10$z04k/pVuTPnWJfYQvzfX8OmYmflS3H7QWC9S0ZtE.nf8wCX5siFh.', 'a', 'Maduwantha', 'ashanmaduwantha99@gmail.com', 'Shamali', 'a', '0771877307', 'default-user.jpg', '', '2018-03-29 15:36:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_image`
--
ALTER TABLE `post_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_text_and_image`
--
ALTER TABLE `post_text_and_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userimage`
--
ALTER TABLE `userimage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `post_image`
--
ALTER TABLE `post_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `post_text_and_image`
--
ALTER TABLE `post_text_and_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `userimage`
--
ALTER TABLE `userimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `userimage`
--
ALTER TABLE `userimage`
  ADD CONSTRAINT `userimage_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user_login` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
