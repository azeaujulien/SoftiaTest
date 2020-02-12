-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2020 at 08:52 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `softiaTest`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `convention_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `student_id`, `convention_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Bonjour Julien AZEAU,\r\n\r\nVous avez suivi 24 de formation chez FormationPlusModifié. \r\nPouvez-vous nous retourner ce mail avec la pièce jointe signée.\r\n\r\nCordialement, \r\nFormationPlus', '2020-02-12 19:47:10', '2020-02-12 19:47:10'),
(2, 2, 2, 'Bonjour Eric Zhang,\r\n\r\nVous avez suivi 48 de formation chez FormationPlus. \r\nPouvez-vous nous retourner ce mail avec la pièce jointe signée.\r\n\r\nCordialement, \r\nFormationPlus', '2020-02-12 19:47:16', '2020-02-12 19:47:16'),
(3, 3, 3, 'Bonjour Lise Baron,\r\n\r\nVous avez suivi 72 de formation chez FormationPlus. \r\nPouvez-vous nous retourner ce mail avec la pièce jointe signée.\r\n\r\nCordialement, \r\nFormationPlus', '2020-02-12 19:47:19', '2020-02-12 19:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `convention`
--

CREATE TABLE `convention` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbHours` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `convention`
--

INSERT INTO `convention` (`id`, `name`, `nbHours`, `created_at`, `updated_at`) VALUES
(1, 'Convention 24h', 24, '2020-02-12 19:45:04', '2020-02-12 19:45:04'),
(2, 'Convention 48h', 48, '2020-02-12 19:45:10', '2020-02-12 19:45:10'),
(3, 'Convention 72h', 72, '2020-02-12 19:45:17', '2020-02-12 19:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_02_11_180124_create_convention_table', 1),
(2, '2020_02_11_180434_create_student_table', 1),
(3, '2020_02_11_181023_create_certificate_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `convention_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `lastname`, `firstname`, `mail`, `convention_id`, `created_at`, `updated_at`) VALUES
(1, 'AZEAU', 'Julien', 'azeau_j@etna-alternance.net', 1, '2020-02-12 19:46:10', '2020-02-12 19:46:10'),
(2, 'Zhang', 'Eric', 'zhang_e@etna-alternance.net', 2, '2020-02-12 19:46:20', '2020-02-12 19:46:20'),
(3, 'Baron', 'Lise', 'baron_l@etna-alternance.net', 3, '2020-02-12 19:46:30', '2020-02-12 19:46:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `certificate_id_unique` (`id`),
  ADD KEY `certificate_student_id_foreign` (`student_id`),
  ADD KEY `certificate_convention_id_foreign` (`convention_id`);

--
-- Indexes for table `convention`
--
ALTER TABLE `convention`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `convention_id_unique` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id_unique` (`id`),
  ADD KEY `student_convention_id_foreign` (`convention_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `convention`
--
ALTER TABLE `convention`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `certificate_convention_id_foreign` FOREIGN KEY (`convention_id`) REFERENCES `convention` (`id`),
  ADD CONSTRAINT `certificate_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_convention_id_foreign` FOREIGN KEY (`convention_id`) REFERENCES `convention` (`id`);
