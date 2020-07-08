-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 01:56 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `post_registration_for_user`
--

CREATE TABLE `post_registration_for_user` (
  `id` int(11) NOT NULL,
  `reg_token` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_registration_for_user`
--

INSERT INTO `post_registration_for_user` (`id`, `reg_token`, `date`) VALUES
(1, 'd3eb9a9233e52948740d7eb8c3062d', '2020-07-09 01:31:04'),
(4, 'd3eb9a9233e52948740d7eb8c3062d14', '2020-07-09 01:51:23');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `post_registration_for_user`
--
ALTER TABLE `post_registration_for_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_registration_for_user`
--
ALTER TABLE `post_registration_for_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
