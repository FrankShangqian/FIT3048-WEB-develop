-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 09:52 AM
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
-- Database: `team110`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `apartment_id` int(11) NOT NULL,
  `apartment_address` varchar(100) NOT NULL,
  `apartment_type` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`apartment_id`, `apartment_address`, `apartment_type`) VALUES
(1000, '161-8044 Imperdiet St.', '1B1B'),
(1001, '4253 Varius Rd.', '2B1B'),
(1002, 'P.O. Box 711, 2067 Consectetuer Road', 'Studio'),
(1003, '7655 Feugiat Rd.', '1B1B'),
(1004, '334-1986 Eu Avenue', '2B1B');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_photo` varchar(255) NOT NULL,
  `inspection_id` int(11) NOT NULL,
  `apartment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_photo`, `inspection_id`, `apartment_id`) VALUES
(0, 'Screenshot 2023-03-21 194823.png', 10000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `inspections`
--

CREATE TABLE `inspections` (
  `inspection_id` int(11) NOT NULL,
  `inspection_datetime` date NOT NULL,
  `inspection_description` varchar(1000) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `apartment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inspections`
--

INSERT INTO `inspections` (`inspection_id`, `inspection_datetime`, `inspection_description`, `user_id`, `apartment_id`) VALUES
(10000, '2023-07-18', 'sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis', 1, 1000),
(10001, '2022-12-27', 'lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies', 1, 1001),
(10002, '2023-01-22', 'pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus', 1, 1002),
(10003, '2022-07-09', 'a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque', 1, 1003),
(10004, '2023-09-09', 'egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus', 1, 1004);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_prefername` varchar(50) DEFAULT NULL,
  `user_phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(20) DEFAULT 'contractor',
  `user_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_prefername`, `user_phone`, `email`, `password`, `user_type`, `user_image`, `user_address`) VALUES
(1, 'after', 'apartment_id', '', '+61452580124', 'root@example.com', '$2y$10$CZPdURVLQjq4ft9WavMMoO2Otg2gToTgiDHuApIRKoiivMrqH.TBK', 'contractor', NULL, 'Unit 1202 6 St Kilda Rd'),
(18, 'after', 'apartment_id', '', '+61452580124', 'root1@example.com', '$2y$10$Ocyq7kgSwTvs2vePD1L5D.oqlqYLFSsXQRBsUi8s6YRG/agOP0r0y', 'admin', NULL, 'Unit 1202 6 St Kilda Rd'),
(19, 'adsfasdgagagg', 'Qin', '', '+61452580124', 'qr1403525394@outlook.com', '$2y$10$vA2tmBeZxM3oSlY83lI5UeVp22tguH/s7lyfUUQ0h5iJ1t56Y1nau', 'contractor', NULL, 'Unit 1202 6 St Kilda Rd'),
(20, 'Rui', 'Qin', '', '+61452580124', 'asdfasdf@outlook.com', '$2y$10$sTjXhh4sYE4lcIRoremHbu58xIr4Y0yAQ8.B8BuOrOFtedoszqqra', 'contractor', NULL, 'Unit 1202 6 St Kilda Rd'),
(25, 'after', 'apartment_id', '', '+61452580124', 'asdfasdfasads@outlook.com', '$2y$10$YtBRYhNr8D/19PZW61YCNufb8S1ruvZidmS4AM81I26Isgd2O5VRe', 'contractor', 'Screenshot 2023-03-21 194823.png', 'Unit 1202 6 St Kilda Rd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`apartment_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `image_inspection_fk` (`inspection_id`,`apartment_id`);

--
-- Indexes for table `inspections`
--
ALTER TABLE `inspections`
  ADD PRIMARY KEY (`inspection_id`),
  ADD KEY `inspection_apartment_fk` (`apartment_id`),
  ADD KEY `inspection_contractor_fk` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `apartment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `inspections`
--
ALTER TABLE `inspections`
  MODIFY `inspection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `image_inspection_fk` FOREIGN KEY (`inspection_id`) REFERENCES `inspections` (`inspection_id`) ON DELETE CASCADE;

--
-- Constraints for table `inspections`
--
ALTER TABLE `inspections`
  ADD CONSTRAINT `inspection_apartment_fk` FOREIGN KEY (`apartment_id`) REFERENCES `apartments` (`apartment_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inspection_contractor_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
