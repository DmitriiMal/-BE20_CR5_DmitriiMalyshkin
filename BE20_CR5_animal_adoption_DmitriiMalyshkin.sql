-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2023 at 05:13 PM
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
-- Database: `BE20_CR5_animal_adoption_DmitriiMalyshkin`
--
CREATE DATABASE IF NOT EXISTS `BE20_CR5_animal_adoption_DmitriiMalyshkin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE20_CR5_animal_adoption_DmitriiMalyshkin`;

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` decimal(13,2) NOT NULL,
  `size` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `vaccinated` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `age`, `size`, `breed`, `vaccinated`, `location`, `status`, `picture`, `description`) VALUES
(1, 'Buddy', 3.00, 'large', 'Labrador Retriever', 'no', 'ExampleLocation', 'Adopted', '6561314656902.jpg', NULL),
(2, 'Charlie', 10.00, 'small', 'Beagle', 'yes', 'Park Zoo', 'Adopted', 'animal.png', NULL),
(3, 'Luna', 1.00, 'small', 'Poodle', 'Yes', 'City Shelter', 'Adopted', 'animal.png', NULL),
(4, 'Max', 4.00, 'large', 'Golden Retriever', 'yes', 'Country Farm', 'Adopted', '656134bbe0c8c.jpg', NULL),
(5, 'Misty', 8.00, 'Medium', 'Siamese', 'Yes', 'City Humane Society', 'Adopted', 'animal.png', NULL),
(6, 'Rocky', 9.00, 'Large', 'German Shepherd', 'no', 'Suburban Shelter', 'Adopted', 'animal.png', NULL),
(7, 'Coco', 3.00, 'Small', 'Chihuahua', 'Yes', 'Urban Pet Store', 'Adopted', 'animal.png', NULL),
(8, 'Simba', 2.00, 'Medium', 'Bengal', 'Yes', 'Safari Rescue', 'Adopted', 'animal.png', NULL),
(9, 'Daisy', 1.00, 'Small', 'Dachshund', 'Yes', 'Local Pet Shop', 'Available', 'animal.png', NULL),
(10, 'Thor', 8.00, 'Large', 'Siberian Husky', 'Yes', 'Arctic Rescue', 'Available', 'animal.png', NULL),
(25, 'Zoe', 2.00, 'medium', 'Maine Coon', 'yes', 'Countryside Shelter', 'Adopted', 'animal.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pet_adoption`
--

CREATE TABLE `pet_adoption` (
  `id` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_animal` int(11) NOT NULL,
  `adopt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_adoption`
--

INSERT INTO `pet_adoption` (`id`, `fk_user`, `fk_animal`, `adopt_date`) VALUES
(1, 9, 4, '2023-11-25'),
(2, 9, 1, '2023-11-25'),
(3, 9, 1, '2023-11-25'),
(4, 9, 1, '2023-11-25'),
(5, 9, 4, '2023-11-25'),
(6, 9, 7, '2023-11-25'),
(7, 9, 3, '2023-11-25'),
(8, 9, 8, '2023-11-25'),
(9, 9, 5, '2023-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` bigint(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'user',
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `pass`, `status`, `picture`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 123, 'admin', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'adm', 'avatar.png'),
(9, 'Dmitrii', 'Malyshkin', 'user@user.com', 1234123412, 'Vienna', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'user', '6561f6f34ed95.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_adoption`
--
ALTER TABLE `pet_adoption`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`fk_user`),
  ADD KEY `fk_animal` (`fk_animal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pet_adoption`
--
ALTER TABLE `pet_adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pet_adoption`
--
ALTER TABLE `pet_adoption`
  ADD CONSTRAINT `pet_adoption_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pet_adoption_ibfk_2` FOREIGN KEY (`fk_animal`) REFERENCES `animals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
