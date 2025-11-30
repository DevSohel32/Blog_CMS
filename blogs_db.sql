-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2025 at 07:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`) VALUES
(1, 'Tech', 'tech', '2025-11-30 00:16:59'),
(2, 'Lifestyle', 'lifestyle', '2025-11-30 00:16:59'),
(3, 'Travel', 'travel', '2025-11-30 00:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `post_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('approved','pending','spam') COLLATE utf8mb4_unicode_ci DEFAULT 'approved',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_read` tinyint DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `author_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('draft','pending','published') COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `views` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int NOT NULL,
  `post_id` int DEFAULT NULL,
  `tag_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_views`
--

CREATE TABLE `post_views` (
  `id` int NOT NULL,
  `post_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `ip_address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saved_posts`
--

CREATE TABLE `saved_posts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','author','admin') COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `social_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','suspended') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`, `avatar`, `bio`, `social_facebook`, `social_twitter`, `social_instagram`, `status`, `created_at`) VALUES
(2, 'Damon Vang', NULL, 'tywil@mailinator.com', '$2y$12$31xN05OmKjN0sYsy9fCU5uSNKD2QhwEhLvyvgy/ouiu5u5vDMF1dG', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 15:50:58'),
(3, 'Olga Henson', NULL, 'fecewy@mailinator.com', '$2y$12$xl5gU/NfMc2HoolpDSBeBehHUECvbwQI1gQLhiONlsXVE9y1XCLaa', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 15:54:37'),
(4, 'Kevin Nixon', NULL, 'fogigaq@mailinator.com', '$2y$12$KwACrGk6fuqSyCOZPVnDQOk0GUPVDNEyYJjhzwRBDZ9/CFXx7uneC', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:02:30'),
(5, 'Christian Daniels', NULL, 'rawaw@mailinator.com', '$2y$12$JQIAAC0wtJLILqZXqEXF1.lTW3X.zAQLpBB7tUSDyOONnPt0WC0w.', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:03:53'),
(6, 'Lynn Hardin', NULL, 'cati@mailinator.com', '$2y$12$8ux1DIr2usWNXVVWLZfR7uB3m4AwZxxa13Y8xfL8eEQ9tADxSehdC', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:05:57'),
(7, 'Alice Coleman', NULL, 'lasibon@mailinator.com', '$2y$12$XE6DcjnFarlcdHTF.6SRPOqhKtY6LR1MgGgBdEVgzJTjpuTRC1HH6', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:06:25'),
(8, 'Virginia Puckett', NULL, 'dozulow@mailinator.com', '$2y$12$t.wx6qTpe8N6SzaoNeLk1.lxuLcweq6uU/AHxF.wGtRU9qMo31skG', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:08:15'),
(9, 'Kylynn Bowen', NULL, 'rawowucok@mailinator.com', '$2y$12$Ind8.vJ7I4sBk6dednM52ud4csQXPRUGzP6rR538.E4VELtXPAS8.', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:09:40'),
(10, 'Rhona Wiggins', NULL, 'naqeb@mailinator.com', '$2y$12$obo/YMEYuoh6yHwc5377FOOUwahY1xfYhR.w4o/sia1mO5uaGDsJK', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:09:58'),
(11, 'Davis Buckley', NULL, 'gupiz@mailinator.com', '$2y$12$HaXvuvwJo2TotEaZDVETZeB/P8AuxjuiONdmAeqG2IXxwZMSYIAMC', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:13:24'),
(12, 'Leandra Lawrence', NULL, 'rewugiro@mailinator.com', '$2y$12$UR3LO.FDqOQDOHb5hMZcL.HZV/mvr2sQJGQYRLGB43/vQ03tucXo.', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:20:02'),
(13, 'Suki Puckett', NULL, 'hukomig@mailinator.com', '$2y$12$K8vlbBgUpuJAC2y.LCDsDeKPE5POdWY560oF2hN4vcMYT5nO41x52', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:21:29'),
(14, 'Quon Erickson', NULL, 'rypaj@mailinator.com', '$2y$12$u6I72HNqJL6iztwfJbmhD.V4goRHgtxE9sZ4Zisrw1SVjne1uHob.', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:22:53'),
(15, 'Xander Downs', NULL, 'zazuqul@mailinator.com', '$2y$12$kUwsMPsJ6hjIjnCSpy8v2uk8wi6B/mazVdCj6yJjh.3.Eq5/xdsFy', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:36:27'),
(16, 'sujauddoula352', NULL, 'qygykif@mailinator.com', '$2y$12$rcjoDK6ZlPIZTIdwdaleg.2rO8osJypdTzRw/NVbhix82k1MtU7nO', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:36:53'),
(17, 'suja', NULL, 'wybyhu@mailinator.com', '$2y$12$SNbNaYpvx.OFssbA3IeKPuF/9puZvRYMK1ROt2GAQp6zP56No.FA.', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 16:37:04'),
(18, 'Hadassah Buchanan', NULL, 'poderepi@mailinator.com', '$2y$12$sxvxIYeuXrYEQRe1jwNHWO3KAOE/MjvD5nO4A4woVhwoRxdQpZofG', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 17:27:12'),
(19, 'Joshua Cote', NULL, 'qavuze@mailinator.com', '$2y$12$jmi5Rzrvjb8gRDmW/T9X8OygvDzVUv6Jz73T3fW.4kiuuF73gMzz6', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 17:28:01'),
(20, 'Fleur Mercado', NULL, 'qeryx@mailinator.com', '$2y$12$R4Qc.cVZCqdkYRJYAXHomeKNzD6dOp2qA3dVfmEPu0vgapqgdH.mO', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 17:59:37'),
(21, 'Judah Rosa', NULL, 'bymubyzezy@mailinator.com', '$2y$12$etSvL/AJkJvJUs87cNGgKu5KzvLwtWA/43ee6h0W3xsSK3fCjWDFO', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 19:57:30'),
(22, 'Justina Patrick', NULL, 'redotadek@mailinator.com', '$2y$12$kVev.z.OELhIWAd8WmvYD.GCO7VncMj.5sL.yoFK7xgFnOgAoSmxi', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 19:57:47'),
(23, 'Hope Sparks', NULL, 'qigukep@mailinator.com', '$2y$12$usEOuXdugqnCh2juJPOTeeAuq4XxUZiqwtlsKcWs7CmDrQHWdFC8S', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 23:24:47'),
(24, 'Ezra Mueller', NULL, 'hekime@mailinator.com', '$2y$12$kpCNXFc/AhpeUcjTxW2iC.CYHxfAQkFr.6Xfjrg9p4JTI6hd1QtRG', 'user', NULL, NULL, NULL, NULL, NULL, 'active', '2025-11-29 23:30:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `post_views`
--
ALTER TABLE `post_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `saved_posts`
--
ALTER TABLE `saved_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_views`
--
ALTER TABLE `post_views`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saved_posts`
--
ALTER TABLE `saved_posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_views`
--
ALTER TABLE `post_views`
  ADD CONSTRAINT `post_views_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `saved_posts`
--
ALTER TABLE `saved_posts`
  ADD CONSTRAINT `saved_posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `saved_posts_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
