-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 02:52 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
-- Table structure for table `chatbox`
--

CREATE TABLE `chatbox` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_token` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date_time` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `question` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `service_role` varchar(200) NOT NULL,
  `reg_token` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_on` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `email_from` varchar(225) NOT NULL,
  `email_to` varchar(225) NOT NULL,
  `user_testimony` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `user_token` varchar(200) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `user_token`, `role_id`, `user_email`, `user_firstname`, `user_lastname`, `user_password`, `user_address`, `lga`, `state_of_residence`, `phone_number`, `phone_number_two`, `field_of_profession`, `description`, `service_role`, `profile_image`, `code`, `verified`, `status`, `last_login`, `updated_at`, `deleted_at`, `regester_at`) VALUES
(12, 'c4ca4238a0b923820dcc509a6f75849b', 1, 'admin@gmail.com', 'Ayeni', 'Erons', '$2y$10$13F3oJIwhmapCxUEyTCuH.rUJ.X3T6m5EPlyDuhPI3TE3PjdaDiAe', 'Lagos', '', '', '', '', '', '', '', '../scr/profile-uploads/alora-griffiths-ltq_MruDgkc-unsplash.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'unverified', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-21 23:22:29'),
(13, 'a87ff679a2f3e71d9181a67b7542122c', 2, 'kenny4all@gmail.com', 'Bolu', 'Erons', '$2y$10$kkemxj0rK42JaqbyiwWSROUStYRwPOpukzVguQpUhjwb.Q75gT1zS', 'test@gmail.com', 'jcjfjffk', 'jdjfjfj', '1111111111', '1111111111', 'fkfkf', 'fkfkfk                            ', 'service_employer', 'scr/profile-uploads/alora-griffiths-ltq_MruDgkc-unsplash.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'unverified', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-21 23:59:38'),
(15, 'e4da3b7fbbce2345d7772b0674a318d5', 2, 'info@sample.com', 'Ogundipe', 'Olusegun', '$2y$10$3X38IJqYw7lw4lZaox.e0eGz40GbSFKTLBq/.CJ0vagJUKggNCx1C', 'info@sample.com', 'Ketu', 'Lagos', '09031985816', '8888888888', 'Website Developer', '                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ratione at corporis deleniti officia dolore commodi tempora excepturi beatae pariatur.', 'service_provider', 'scr/profile-uploads/img.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'unverified', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-10-13 20:01:23'),
(16, '1679091c5a880faf6fb5e6087eb1b2dc', 2, 'qret@gmail.com', 'Segun', 'ola', '$2y$10$anaOc5Co7e6Y/hq9zMeA/O9AkbFpWMT9JRsiPVQtNF9WSsxO7fzMq', 'qret@gmail.com', 'Ketu', 'Lagos', '09031985818', '8888888888', 'Designer', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ratione at corporis deleniti officia dolore commodi tempora excepturi beatae pariatur.                       ', 'service_employer', 'scr/profile-uploads/images (1).jpeg', '827ccb0eea8a706c4c34a16891f84e7b', 'unverified', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-10-13 20:38:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbox`
--
ALTER TABLE `chatbox`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbox`
--
ALTER TABLE `chatbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_registration_for_user`
--
ALTER TABLE `post_registration_for_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
