-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 12:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixit`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_firstname` varchar(200) NOT NULL,
  `user_lastname` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `lga` varchar(200) NOT NULL,
  `state_of_residence` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `phone_number_two` varchar(200) NOT NULL,
  `field_of_profession` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `service_role` enum('service_provider','service_employer') DEFAULT NULL,
  `role` enum('admin','user') DEFAULT NULL,
  `code` varchar(200) NOT NULL,
  `verified` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `regester_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `user_email`, `user_firstname`, `user_lastname`, `user_password`, `user_address`, `lga`, `state_of_residence`, `phone_number`, `phone_number_two`, `field_of_profession`, `description`, `service_role`, `role`, `code`, `verified`, `status`, `last_login`, `updated_at`, `deleted_at`, `regester_at`) VALUES
(3, 'd3eb9a9233e52948740d7eb8c3062d14', 'kenny4all40@gmail.com', 'Ayeni', 'ken', '$2y$10$.cD120pUoTlkR.UH71oId.Nc/i0BDEFKEQqpGZkLktmgAnp05Ru5S', 'kdfkdfkjfjk', 'kfdfkfjkfjk', 'jfjkfkjfjk', '111', '111', 'kdkdjkfdjk', 'kjfjkfjkfjk', 'service_provider', 'user', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-06-27 14:57:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
