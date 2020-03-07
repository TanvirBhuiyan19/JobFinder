-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 04:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs`
--

CREATE TABLE `applied_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`id`, `userId`, `jobId`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `userId`, `title`, `description`, `salary`, `location`, `country`, `created_at`, `updated_at`) VALUES
(1, '2', 'Team Lead / Senior Software Engineer', 'Vacancy\r\n02\r\n\r\nJob Responsibilities\r\nAnalysis, Coding , Problem solving and Team Leading.\r\nCandidate must take challenge to guide team.\r\nMust have ability to work alone and guide team and communicate with customer.\r\nMust have strong experience in RESTful web service development using Laravel/CodeIgniter\r\nMust be energetic and able to work under pressure, independently with fixed deadlines.\r\nCandidate must take challenge to work ERP and complex scalable web application\r\nEmployment Status\r\nFull-time\r\n\r\nEducational Requirements\r\nB.Sc in CSE\r\nSkills Required: CodeIgniter, jQuery, Laravel Framework, MySQL, PHP, REDIS, Vue.js\r\nExperience Requirements\r\n4 to 5 year(s)\r\nThe applicants should have experience in the following area(s):\r\nProgrammer/ Software Engineer, Software Development, Web Developer/ Web Designer\r\nThe applicants should have experience in the following business area(s):\r\nIT Enabled Service, Software Company\r\nAdditional Requirements\r\nBoth males and females are allowed to apply\r\nShould have experience to guide 10/12 software engineer.\r\nAbility to assign task to team and complete project on time.\r\nShould have minimum 3 year experience in Laravel/CodeIgniter\r\nShould Experience in Vue JS.\r\nClear concept about API, Preferred RESTful API development.\r\nThe applicants should have experience in the following area(s):\r\nAjax, HTML5 CSS3, Codeigniter, Laravel Framework, Lumen Framework, Develop API, Vue.js , jQuery\r\nExperience in Oracle will be considered as an added advantage.\r\nExperience in SRS writing will be considered as an added advantage.', '30000', 'Dhaka', 'Bangladesh', NULL, NULL),
(2, '2', 'Laravel Programmer', 'Vacancy\r\n04\r\n\r\nJob Context\r\nFull-Time and works 6 days a week\r\nJob Responsibilities\r\nMust have strong experience in RESTful web service development using laravel and vue.js\r\nVery good understanding of web site & web application development processes, from the layout/ user interface to relational database structures.\r\nDeep knowledge of PHP7 with OOP features with Laravel Framework.\r\nExperience on Payment gateway integration.\r\nDevelop external Web portals allowing users to input and retrieve accurate information.\r\nProvide application training/ explanation for Users.\r\nEnsure that you have experience on API Integration.\r\nShould have knowledge on Git & Version control.\r\nCandidate must be a team player and willing to teach and to learn.\r\nMaintain and enhance existing Web applications and all internal systems.\r\nPerform complete testing of Web applications.\r\nEmployment Status\r\nFull-time\r\n\r\nEducational Requirements\r\nBachelor of Science (BSc) in Computer Science & Engineering\r\nSkills Required: Ajax, AngularJS, CCC3, jeson, Laravel, Laravel and Vue.js, PHP (OOP)\r\nExperience Requirements\r\nAt least 2 year(s)\r\nThe applicants should have experience in the following area(s):\r\nAjax, API Development, HTML & CSS, HTML5 & CSS3, Laravel and Vue.js, Node js, ReactJS\r\nAdditional Requirements\r\nAge 23 to 35 years\r\nMust be energetic and able to work under pressure, independently with fixed deadlines.', NULL, 'Anywhere', 'Bangladesh', NULL, NULL);

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
(30, '2014_10_12_000000_create_users_table', 2),
(31, '2014_10_12_100000_create_password_resets_table', 2),
(32, '2019_11_24_032526_create_profiles_table', 2),
(33, '2019_11_24_033145_create_jobs_table', 2),
(34, '2020_03_06_203652_create_applied_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `userId`, `address`, `gender`, `dob`, `experience`, `bio`, `resume`, `avator`, `created_at`, `updated_at`) VALUES
(1, '1', 'Comilla,Bangladesh.', 'male', '1995-01-01', 'Switching, Routing', 'I am a Networking Engineer.', 'Tanvir_Bhuiyan_Resume.pdf', '15434311871108.jpg', '2020-03-07 02:40:01', '2020-03-07 02:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `companyName`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aminul', 'Islam', NULL, 'aminul@gmail.com', 0, NULL, '$2y$10$wTrdZYsj3XMUPgicz9UOeOsLYKcEMsmC1jHNUenHGd8bSi.m0iKN.', NULL, '2020-03-07 02:40:01', '2020-03-07 02:40:01'),
(2, 'Tanvir', 'Bhuiyan', 'Bhuiyan Software', 'tanvirbhuiyann@gmail.com', 1, NULL, '$2y$10$ddfTEJ9WyWGm9lN4H/u.MegubsqPC4YtFa3qcI3rb1GK3.PYMYei.', NULL, '2020-03-07 02:50:47', '2020-03-07 02:50:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
