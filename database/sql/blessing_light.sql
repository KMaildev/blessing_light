-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2023 at 12:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blessing_light`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `categorie_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `description`, `images`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'Departure Candidates Activites', NULL, 'https://recruitmentmyanmarsak.com/admin/uploads/files/1wpfkg042ca_idy.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/8r3wm4s7ey2tobf.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/e0fldk13inwrbj_.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/1wpfkg042ca_idy.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/8r3wm4s7ey2tobf.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/e0fldk13inwrbj_.jpg', '1', NULL, NULL),
(2, 'Departure Candidates Activites', NULL, 'https://recruitmentmyanmarsak.com/admin/uploads/files/1wpfkg042ca_idy.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/8r3wm4s7ey2tobf.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/e0fldk13inwrbj_.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/1wpfkg042ca_idy.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/8r3wm4s7ey2tobf.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/e0fldk13inwrbj_.jpg', '1', NULL, NULL),
(3, 'Departure Candidates Activites', NULL, 'https://recruitmentmyanmarsak.com/admin/uploads/files/1wpfkg042ca_idy.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/8r3wm4s7ey2tobf.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/e0fldk13inwrbj_.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/1wpfkg042ca_idy.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/8r3wm4s7ey2tobf.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/e0fldk13inwrbj_.jpg', '2', NULL, NULL),
(4, 'Departure Candidates Activites', NULL, 'https://recruitmentmyanmarsak.com/admin/uploads/files/1wpfkg042ca_idy.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/8r3wm4s7ey2tobf.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/e0fldk13inwrbj_.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/1wpfkg042ca_idy.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/8r3wm4s7ey2tobf.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/e0fldk13inwrbj_.jpg', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Thailand Candidates', NULL, NULL, NULL),
(2, 'Malaysia Candidates', NULL, NULL, NULL),
(3, 'Singapore Candidates', NULL, NULL, NULL),
(4, 'Japan Candidates', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submit_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `submit_date`, `created_at`, `updated_at`) VALUES
(1, 'af', 'asdf', 'asdf', 'asdf', 'adsf', '2023-07-28', '2023-07-28 14:33:50', '2023-07-28 14:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Thailand', NULL, NULL, NULL),
(2, 'Malaysia', NULL, NULL, NULL),
(3, 'Japan', NULL, NULL, NULL),
(4, 'Singapore', NULL, NULL, NULL),
(5, 'UAE', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `age` text DEFAULT NULL,
  `salary` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `submit_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text DEFAULT NULL,
  `type_of_company` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `job_category` text DEFAULT NULL,
  `age_limit` text DEFAULT NULL,
  `educational_requirement` text DEFAULT NULL,
  `working_experience_requirement` text DEFAULT NULL,
  `other_additional_requirement` text DEFAULT NULL,
  `estimate_salary_offer` text DEFAULT NULL,
  `other_allowance` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `interview_type` text DEFAULT NULL,
  `apply_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `company_name`, `type_of_company`, `location`, `website`, `phone`, `email`, `job_category`, `age_limit`, `educational_requirement`, `working_experience_requirement`, `other_additional_requirement`, `estimate_salary_offer`, `other_allowance`, `gender`, `interview_type`, `apply_date`, `created_at`, `updated_at`) VALUES
(1, 'adf', 'asdf', NULL, 'asdf', 'adf', 'asdf@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-28', '2023-07-28 15:30:48', '2023-07-28 15:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `qualification` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `work_experience` text DEFAULT NULL,
  `countrie_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `qualification`, `skills`, `work_experience`, `countrie_id`, `created_at`, `updated_at`) VALUES
(1, 'Software Engineer', ' Recruitment consultant roles are generally open to graduates regardless of degree\n                                        subject. Employers typically value drive, experience, skills and abilities as well\n                                        as\n                                        the determination to succeed over specific qualifications. Applying to an agency\n                                        that\n                                        specialises in a market or industry related to your degree subject, for example IT\n                                        or\n                                        engineering, may increase your chances.\n                                        <br><br>\n                                        Entry with an HND or foundation degree is possible. Entry without a degree is\n                                        possible\n                                        for those with relevant experience, skills and abilities.\n                                        <br>\n                                        Postgraduate study is not essential. You may find that relevant experience and\n                                        skills\n                                        are more useful.', '<ul>\n                                            <li>excellent interpersonal and communication skills;</li>\n                                            <li>sales and negotiation skills;</li>\n                                            <li>a goal-orientated approach to work;</li>\n                                            <li>the ability to handle multiple priorities;</li>\n                                            <li>problem-solving ability;</li>\n                                            <li>the ability to meet deadlines and targets;</li>\n                                            <li>ambition and the determination to succeed;</li>\n                                            <li>tenacity;</li>\n                                            <li>confidence and self-motivation;</li>\n                                            <li>time management and organisational skills;</li>\n                                            <li>team-working skills;</li>\n                                            <li>creativity.</li>\n                                        </ul>\n                                        <p>You must also enjoy working in a high-pressure environment and the responsibility\n                                            that comes with it.</p>', 'Work experience in sales, marketing or any customer-oriented role is useful for\n                                        starting\n                                        a career in the recruitment industry. Active membership of student societies may\n                                        also\n                                        help you provide evidence that you have the necessary skills.\n                                        <br>\n                                        Recruitment consultancies will often accept applications from those without\n                                        recruitment\n                                        industry experience as long as they demonstrate the right combination of skills and\n                                        personal qualities.', '1', NULL, NULL),
(2, 'Web Developer', ' Recruitment consultant roles are generally open to graduates regardless of degree\n                                        subject. Employers typically value drive, experience, skills and abilities as well\n                                        as\n                                        the determination to succeed over specific qualifications. Applying to an agency\n                                        that\n                                        specialises in a market or industry related to your degree subject, for example IT\n                                        or\n                                        engineering, may increase your chances.\n                                        <br><br>\n                                        Entry with an HND or foundation degree is possible. Entry without a degree is\n                                        possible\n                                        for those with relevant experience, skills and abilities.\n                                        <br>\n                                        Postgraduate study is not essential. You may find that relevant experience and\n                                        skills\n                                        are more useful.', '<ul>\n                                            <li>excellent interpersonal and communication skills;</li>\n                                            <li>sales and negotiation skills;</li>\n                                            <li>a goal-orientated approach to work;</li>\n                                            <li>the ability to handle multiple priorities;</li>\n                                            <li>problem-solving ability;</li>\n                                            <li>the ability to meet deadlines and targets;</li>\n                                            <li>ambition and the determination to succeed;</li>\n                                            <li>tenacity;</li>\n                                            <li>confidence and self-motivation;</li>\n                                            <li>time management and organisational skills;</li>\n                                            <li>team-working skills;</li>\n                                            <li>creativity.</li>\n                                        </ul>\n                                        <p>You must also enjoy working in a high-pressure environment and the responsibility\n                                            that comes with it.</p>', 'Work experience in sales, marketing or any customer-oriented role is useful for\n                                        starting\n                                        a career in the recruitment industry. Active membership of student societies may\n                                        also\n                                        help you provide evidence that you have the necessary skills.\n                                        <br>\n                                        Recruitment consultancies will often accept applications from those without\n                                        recruitment\n                                        industry experience as long as they demonstrate the right combination of skills and\n                                        personal qualities.', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_28_205621_create_contacts_table', 1),
(6, '2023_07_28_210638_create_categories_table', 2),
(7, '2023_07_28_210827_create_activities_table', 3),
(8, '2023_07_28_212810_create_countries_table', 4),
(9, '2023_07_28_213232_create_jobs_table', 5),
(10, '2023_07_28_214915_create_cvs_table', 6),
(11, '2023_07_28_215920_create_employers_table', 7),
(12, '2023_07_28_220216_create_teams_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `photo`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Mrs.Myo Zin Win', 'https://cdn.iconscout.com/icon/free/png-256/free-laptop-user-1-1179329.png?f=webp', 'Managing Director\r\n', NULL, NULL),
(2, 'Mr.Kyaw Thu\r\n', 'https://cdn.iconscout.com/icon/free/png-256/free-laptop-user-1-1179329.png?f=webp', 'Director', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
