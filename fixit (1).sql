-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 08:00 PM
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
  `email` varchar(200) NOT NULL,
  `service_role` varchar(200) NOT NULL,
  `reg_token` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_on` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_token` varchar(200) NOT NULL,
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
  `profile_image` varchar(200) NOT NULL,
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

INSERT INTO `users` (`id`, `user_token`, `user_email`, `user_firstname`, `user_lastname`, `user_password`, `user_address`, `lga`, `state_of_residence`, `phone_number`, `phone_number_two`, `field_of_profession`, `description`, `service_role`, `role`, `profile_image`, `code`, `verified`, `status`, `last_login`, `updated_at`, `deleted_at`, `regester_at`) VALUES
(10, 'USER-eccbc87e4b5ce2fe28308fd9f2a7baf3', 'kenny4all40@yahoo.com', 'Ayen', 'kenny', '$2y$10$eryX4KZuc2Jh0IwHcM/cZ.3vB52uJBEn3RxC75szqPb55E6qfRlF2', '11', 'vdvdv', 'hshsh', '111', '111', 'jljk', 'jkjkssjsjsjs', 'service_employer', 'user', 'scr/profile-uploads/alora-griffiths-ltq_MruDgkc-unsplash.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'unverified', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-07-12 13:46:56'),
(11, 'USER-c4ca4238a0b923820dcc509a6f75849b', 'kenny4all40@yahoo.co', 'hhwhwh', 'kenny', '$2y$10$4V2r2tC40uUKUlmiXRisselhbAnz2sG4SKn2s6QBVUAY0X5P7CCnS', 'jsjsjsj', 'isksk', 'ksk1ik1', '11212', '212saxasx', 'dcdc', '                                jdsjksjkkjx                                                    ', 'service_employer', 'user', 'scr/profile-uploads/anastase-maragos-oNQ48mnAVcA-unsplash.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'unverified', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-07-12 14:05:14');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
