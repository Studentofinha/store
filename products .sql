-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2023 at 10:17 AM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `y99718geor_tutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_2`
--

CREATE TABLE `products_2` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products_2` (`id`, `image`, `title`, `price`, `description`, `category`, `meta_description`, `meta_keywords`) VALUES
(1, 'javascript.jpg', 'Learn JavaScript Quickly: A Complete Beginner’s Guide to Learning JavaScript', 15.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books', 'product description', 'product keywords'),
(2, 'node.jpg', 'Node.js: Novice to Ninja 1st Edition', 39.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books', 'product description', 'product keywords'),
(3, 'machine-learning.jpg', 'JavaScript from Beginner to Professional: Learn JavaScript quickly', 34.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books', 'product description', 'product keywords'),
(4, 'coding.jpg', 'Coding All-in-One For Dummies', 19.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'books', 'product description', 'product keywords'),
(5, 'star-wars.jpg', 'Star Wars Squadrons', 39.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games', 'product description', 'product keywords'),
(6, 'tank.jpg', 'M4 Tank Brigade', 14.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games', 'product description', 'product keywords'),
(7, 'farcry.jpg', 'Far Cry Primal - PC Standard Edition', 34.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games', 'product description', 'product keywords'),
(8, 'batlefield.jpg', 'Battlefield 3 [Download]', 49.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'games', 'product description', 'product keywords'),
(9, 'phone-1.jpg', 'SAMSUNG Galaxy S22 Ultra Cell Phone,', 1.136, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones', 'product description', 'product keywords'),
(10, 'phone-2.jpg', 'Apple iPhone 12 Pro, 512GB', 919.99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones', 'product description', 'product keywords'),
(11, 'phone-3.jpg', 'Moto G Power | 2021 | 3-Day battery', 160.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones', 'product description', 'product keywords'),
(12, 'phone-4.jpg', 'Moto G7 Plus | Unlocked | Made for US by Motorola', 201, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'phones', 'product description', 'product keywords'),
(13, 'mic-1.jpg', 'Rode PodMic Cardioid Dynamic Broadcast Microphone', 99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones', 'product description', 'product keywords'),
(14, 'mic-2.jpg', 'Audio-Technica AT2020 Cardioid', 99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones', 'product description', 'product keywords'),
(15, 'mic-3.jpg', 'Elgato Wave:3 - Premium Studio Quality USB ', 149.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones', 'product description', 'product keywords'),
(16, 'mic-4.jpg', 'Razer Seiren X USB Streaming Microphone: Professional Grade', 59, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'microphones', 'product description', 'product keywords'),
(17, 'tablet-1.jpg', 'SAMSUNG SM-T290NZKAXAR, Galaxy Tab A 8.0 32 GB', 99, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets', 'product description', 'product keywords'),
(18, 'tablet-2.jpg', 'Lectrus Tablet Customized Cover, Android 9.0', 119, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets', 'product description', 'product keywords'),
(19, 'tablet-3.jpg', '10 Inch Tablet and Tablet Case Bundle, Android 9.0 Tablet 2GB RAM', 149.95, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets', 'product description', 'product keywords'),
(20, 'tablet-4.jpg', 'Lenovo IdeaTab A2109 9-Inch 16 GB Tablet', 199, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eligendi quas eius quod.', 'tablets', 'product description', 'product keywords');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
