-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2020 at 09:18 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixit_project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `user_id` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `user_id`, `name`, `slug`, `created_at`) VALUES
(1, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'Wed development', 'wed-development', '2020-09-29 19:11:54'),
(2, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'Writing Translation', 'writing-translation', '2020-09-29 19:45:43'),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'This is a test category', 'this-is-a-test-category', '2020-09-29 21:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `question` text NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `question`, `status`) VALUES
(1, 'Lorem Ipsoum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam voluptatum corporis, sequi at tenetur expedita ad itaque maxime laboriosam saepe quas earum vel nostrum qui amet, molestias libero. Dolores, repudiandae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci suscipit enim at nisi explicabo, est maiores possimus libero tempore fuga doloremque, odio esse atque odit, ea iste necessitatibus itaque fugiat.\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptatem molestias velit totam repellat! Consectetur, quae omnis explicabo ullam magnam praesentium exercitationem hic vitae qui totam necessitatibus impedit. Veniam, voluptate? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit dolorum quam ullam itaque ad voluptas similique aut delectus magnam magni? Dolore nostrum at sequi voluptate enim repellendus adipisci explicabo nobis.\r\n\r\n', 0),
(2, 'Lorem Epsom', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam voluptatum corporis, sequi at tenetur expedita ad itaque maxime laboriosam saepe quas earum vel nostrum qui amet, molestias libero. Dolores, repudiandae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci suscipit enim at nisi explicabo, est maiores possimus libero tempore fuga doloremque, odio esse atque odit, ea iste necessitatibus itaque fugiat.\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptatem molestias velit totam repellat! Consectetur, quae omnis explicabo ullam magnam praesentium exercitationem hic vitae qui totam necessitatibus impedit. Veniam, voluptate? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit dolorum quam ullam itaque ad voluptas similique aut delectus magnam magni? Dolore nostrum at sequi voluptate enim repellendus adipisci explicabo nobis.\r\n\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone_num` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `name`, `phone_num`, `email`, `status`) VALUES
(1, 'Ogundipe Olusegun', 2147483647, 'akin@gmail.com', 1),
(2, 'Ogundipe Olusegun', 0, 'akindeleseun@yahoo.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_registration_for_user`
--

CREATE TABLE `post_registration_for_user` (
  `id` int NOT NULL,
  `email` varchar(200) NOT NULL,
  `service_role` varchar(200) NOT NULL,
  `reg_token` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_on` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_registration_for_user`
--

INSERT INTO `post_registration_for_user` (`id`, `email`, `service_role`, `reg_token`, `date`, `delete_on`) VALUES
(10, 'Akintoyeolamide500@gmail.com', 'service_employer', 'e4da3b7fbbce2345d7772b0674a318d5', '2020-10-15 08:10:16', '10-15-2020'),
(11, 'akintoyeolamide30@yahoo.com', 'service_provider', 'e4da3b7fbbce2345d7772b0674a318d5', '2020-10-15 08:12:46', '10-15-2020');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `unique_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `unique_id`, `name`, `date_created`) VALUES
(1, 'erb2f3usbb41v2vs7m', 'admin', '2020-09-21 21:49:22'),
(2, 'swq2i3vsxb4hv8vs2e', 'user', '2020-09-21 21:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `id` int NOT NULL,
  `email_from` varchar(225) NOT NULL,
  `email_to` varchar(225) NOT NULL,
  `user_testimony` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `email_from`, `email_to`, `user_testimony`, `date`) VALUES
(1, 'kenny4all40@yahoo.com', 'akin@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus maxime iusto facere, omnis repudiandae eligendi perferendis. Quia asperiores hic nam nostrum cupiditate possimus enim ea quaerat sequi, accusantium veniam itaque.', '2020-10-14 00:00:00'),
(2, 'kenny4all40@yahoo.com', 'qret@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus maxime iusto facere, omnis repudiandae eligendi perferendis. Quia asperiores hic nam nostrum cupiditate possimus enim ea quaerat sequi, accusantium veniam itaque.', '2020-10-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_token` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role_id` int DEFAULT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_firstname` varchar(200) NOT NULL,
  `user_lastname` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `lga` varchar(200) NOT NULL,
  `state_of_residence` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `phone_number_two` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `service_role` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `profile_image` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `verified` varchar(200) NOT NULL,
  `status` int NOT NULL,
  `last_login` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL,
  `deleted_at` varchar(200) NOT NULL,
  `regester_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_token`, `role_id`, `user_email`, `user_firstname`, `user_lastname`, `user_password`, `user_address`, `lga`, `state_of_residence`, `phone_number`, `phone_number_two`, `description`, `service_role`, `profile_image`, `code`, `verified`, `status`, `last_login`, `updated_at`, `deleted_at`, `regester_at`) VALUES
(1, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 1, 'admin@gmail.com', 'Fixit', 'Admin', '$2y$10$FVy.UaoZpZZkBT0QB5kMXOq7cU.3VVb93msSNOCCtlobGsMGOgcwu', 'Lagos', '', '', '', '', '', '', '../scr/profile-uploads/anastase-maragos-oNQ48mnAVcA-unsplash.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'unverified', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-29 09:36:43'),
(2, '1679091c5a880faf6fb5e6087eb1b2dc', 2, 'user@gmail.com', 'User', 'One', '$2y$10$b/ZL5C5s.b1wbBvHr/kwSejkg/ooR12sP1YwdcYmVWQsnjmwJVaRi', 'lagos', 'lagos', 'lagos', '27398328283', '217378384838', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text       ', 'service_employer', 'scr/profile-uploads/alora-griffiths-ltq_MruDgkc-unsplash.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'unverified', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-29 10:06:27'),
(3, 'c4ca4238a0b923820dcc509a6f75849b', 2, 'info@sample.com', 'Ogundipe', 'Olusegun', '$2y$10$TmH9P2uu8v0HHI6D67Yq8OPkgKYDkEVx7kYunnWXzJA1Tu9JdK3aq', 'ueduieui', 'Ketu', 'Lagos', '09031985816', '8888888888', '                                                                            wwwerdsrf                                    ', 'service_employer', 'scr/profile-uploads/img.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'unverified', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-29 11:29:44'),
(4, 'a87ff679a2f3e71d9181a67b7542122c', 2, 'emmagist1994204@gmail.com', 'Segun', 'ola', '$2y$10$bsfg7QhLW1mTVkHaAPF8AurPS8zT7h94PeuhKS4BHMqkryB8B5zSG', 'emma1994204@gmail.com', 'Ketu', 'Lagos', '09031985818', '8888888888', '                                                       wweeerrttyuu                             ', 'service_provider', 'scr/profile-uploads/img.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'unverified', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-29 14:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `work_category`
--

CREATE TABLE `work_category` (
  `id` int NOT NULL,
  `user_token` varchar(200) NOT NULL,
  `category_slug` varchar(200) NOT NULL,
  `updated_at` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `work_category`
--

INSERT INTO `work_category` (`id`, `user_token`, `category_slug`, `updated_at`, `created_at`) VALUES
(1, '1679091c5a880faf6fb5e6087eb1b2dc', 'wed-development', NULL, '2020-10-16 18:33:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_registration_for_user`
--
ALTER TABLE `post_registration_for_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role-user` (`role_id`);

--
-- Indexes for table `work_category`
--
ALTER TABLE `work_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_registration_for_user`
--
ALTER TABLE `post_registration_for_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `work_category`
--
ALTER TABLE `work_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role-user` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
