-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 11:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baktify`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'metal', '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(2, 'dubstep', '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(3, 'band', '2023-01-07 14:14:07', '2023-01-07 14:14:07');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_01_05_093601_create_products_table', 1),
(4, '2023_01_05_103905_create_categories_table', 1),
(5, '2023_01_07_063409_create_carts_table', 1),
(6, '2023_01_07_150334_create_transactions_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `description`, `stock`, `category_id`, `price`, `created_at`, `updated_at`) VALUES
(1, NULL, 'tempore', 'Aut earum quo quibusdam hic eveniet id. Non fuga ea aliquam perferendis ut.', 20, 3, 8022, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(2, NULL, 'cum', 'Eum quis rerum exercitationem odit ut iusto. Aut et reiciendis atque ut laborum.', 51, 3, 7982, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(3, NULL, 'in', 'Sunt doloremque aut qui architecto nisi expedita voluptatem ex. Qui similique corrupti saepe quia consequatur molestiae. Temporibus excepturi officia dolore.', 68, 3, 8523, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(4, NULL, 'ea', 'Ut expedita veritatis ut et illo. Magni aspernatur blanditiis voluptatem eveniet consequatur vel. Ea qui vitae occaecati corrupti neque et doloribus.', 21, 2, 6722, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(5, NULL, 'asperiores', 'Quo ex aspernatur dolorem autem magni. Est autem minus consequatur rerum mollitia. Adipisci beatae suscipit consequuntur veritatis repudiandae facere ad quasi.', 39, 2, 7570, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(6, NULL, 'et', 'Dolores repudiandae dolorem minus voluptatem optio quo qui. Id ducimus dolorem voluptatem qui. Hic atque ratione consequuntur odio ut vel.', 12, 1, 9793, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(7, NULL, 'autem', 'Praesentium repudiandae nihil sed qui. Tempore expedita aliquid ipsum aut.', 49, 3, 9640, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(8, NULL, 'tempore', 'Et numquam molestias tempore nostrum voluptatem qui quo. Et iusto sit nulla vel consequatur repellendus dolorem. Placeat deleniti sit quis dolor quasi quisquam nostrum vitae.', 71, 1, 3682, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(9, NULL, 'accusantium', 'Vel aut odio veritatis eveniet similique et. Aperiam in repellendus temporibus omnis perferendis dolorem natus.', 13, 2, 8428, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(10, NULL, 'aut', 'Aut est ea sit quas velit eum. Ea officia recusandae illum impedit et iste sunt. Quas aut sed quos est possimus.', 35, 2, 5691, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(11, NULL, 'porro', 'Omnis est ut fuga. Ea voluptas sunt occaecati ipsum.', 24, 3, 2653, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(12, NULL, 'ut', 'Vero aut velit quis velit tempore eos adipisci. Quod quo illo vero et nostrum omnis praesentium.', 89, 3, 4571, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(13, NULL, 'ut', 'Ea dolores illo sed officiis non. Ea ab molestias consequatur et voluptatem. Qui culpa odit nihil nulla rerum consequatur saepe.', 45, 1, 6354, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(14, NULL, 'accusamus', 'Iure facere quibusdam deleniti enim veniam et fugit. Asperiores reiciendis eligendi molestiae inventore impedit. Vitae sed fuga id facere doloribus doloremque.', 84, 3, 3469, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(15, NULL, 'esse', 'Pariatur ut dignissimos corporis vero provident. Quasi accusantium sint culpa vero.', 91, 1, 7874, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(16, NULL, 'officiis', 'Quo doloribus expedita sapiente non totam quae. Incidunt impedit voluptatem magni odio laboriosam et.', 67, 2, 4506, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(17, NULL, 'et', 'Sequi sunt ad necessitatibus sunt est nam. Laudantium inventore esse numquam ab quibusdam deserunt. Et in quae hic facilis ad.', 4, 1, 6900, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(18, NULL, 'soluta', 'Velit porro dolores molestiae a rerum quibusdam. Dolorem dolor veritatis magni numquam.', 49, 1, 1493, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(19, NULL, 'quam', 'Rerum blanditiis cupiditate eaque non quisquam eveniet quis voluptates. Deserunt dolores ipsa quasi incidunt aut omnis quia fugit. Repellat et odio perferendis maiores aspernatur voluptatibus culpa.', 89, 2, 2713, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(20, NULL, 'mollitia', 'Eius nam illum ipsum sed aliquam laudantium atque. Dicta id et eum corporis excepturi.', 99, 2, 9399, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(21, NULL, 'possimus', 'Laboriosam et non aut eius et. Est officia maiores minus necessitatibus. Et a maxime nihil sit consequuntur.', 13, 2, 3129, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(22, NULL, 'illo', 'Et unde sed itaque et. Laudantium qui fugiat eaque eius. Quos repellendus impedit quas dolor illum dolorem ea reprehenderit.', 47, 2, 3418, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(23, NULL, 'totam', 'Qui unde ut est ut magnam dolore. Earum unde numquam ipsa consequuntur ipsum magni reprehenderit ducimus.', 65, 3, 8123, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(24, NULL, 'quod', 'Laboriosam labore vitae omnis suscipit eum magni. Ut et ullam quam rerum aperiam at. Saepe ut culpa aperiam nesciunt quas.', 98, 3, 2045, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(25, NULL, 'sint', 'Aut eum dolor et. Impedit repudiandae molestiae voluptatem illo fuga. Et unde non consequuntur iste doloribus.', 37, 3, 3708, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(26, NULL, 'iusto', 'Cumque asperiores nisi quia alias quod consequatur. Corrupti natus qui rerum est. Ex rem explicabo sunt minus.', 97, 3, 2486, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(27, NULL, 'repellat', 'Sed facere voluptatem at porro tenetur. Voluptatem porro non quasi hic et aperiam. Occaecati qui dolore aut aut voluptatem sunt temporibus minus.', 91, 3, 8547, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(28, NULL, 'velit', 'Reprehenderit qui impedit est corporis. Culpa vero magni vel minima qui saepe debitis iure. Rem soluta ut voluptatem distinctio.', 80, 1, 2588, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(29, NULL, 'praesentium', 'Sunt rerum voluptatem quam ad. Aspernatur corrupti asperiores sit harum laudantium aut sint.', 24, 2, 5655, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(30, NULL, 'numquam', 'Libero quia a aperiam rerum. Fugiat corrupti eos sed beatae quaerat quia. Aut deserunt veniam mollitia eos ipsum voluptas facilis.', 55, 3, 7497, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(31, NULL, 'ut', 'Quibusdam ab et est. Et aut quae temporibus enim facilis. Iure voluptas nulla fugiat et officia ipsum illum maxime.', 37, 1, 2450, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(32, NULL, 'repellat', 'Veritatis nihil necessitatibus aliquam rerum ut corrupti enim. Voluptatem accusamus recusandae aut quisquam ducimus aut eum iusto.', 48, 1, 1236, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(33, NULL, 'inventore', 'In quisquam ratione ea commodi vero nobis deleniti asperiores. Ut eaque ex quia et. Nesciunt aperiam ut blanditiis quia incidunt minus.', 83, 3, 5543, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(34, NULL, 'modi', 'Illo vel maxime dicta officiis et. Accusamus harum porro ipsa accusantium non aliquid ea.', 82, 1, 9041, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(35, NULL, 'rem', 'Consequatur perspiciatis tenetur nesciunt aut placeat. Libero vel quidem rem et voluptatem excepturi veritatis. Ut sit quo facere esse maxime praesentium accusantium.', 59, 3, 9189, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(36, NULL, 'consectetur', 'Neque impedit iure explicabo incidunt est qui. Cum et et occaecati ducimus.', 54, 3, 9967, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(37, NULL, 'amet', 'Fugiat veritatis dolor est porro voluptatibus. Corrupti voluptas quas asperiores blanditiis quos maxime.', 19, 3, 1616, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(38, NULL, 'est', 'Voluptate eligendi neque eveniet error et error sit. Vitae fugit magnam ut. Autem cupiditate reprehenderit quaerat a placeat qui facere.', 28, 2, 4548, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(39, NULL, 'et', 'Et et temporibus qui deleniti quo quis consectetur rerum. Pariatur eveniet omnis facere exercitationem sed veritatis veniam nihil. Quo et eius delectus distinctio excepturi ex sit.', 95, 1, 7167, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(40, NULL, 'sed', 'Quibusdam ipsam quia at. Nostrum eveniet blanditiis nemo suscipit nesciunt aperiam.', 1, 1, 1111, '2023-01-07 14:14:07', '2023-01-07 14:14:07'),
(41, 'product-images/1Os2ewflVEUzcpkUwGNGePDTXCPi3Zz67iQvQlYh.jpg', 'Nirvana', 'Nirvana adalah nama sebuah grup band dari Kota Aberdeen, Washington, Amerika Serikat, kemudian akhirnya mereka mendapatkan kesuksesan di Kota Seattle', 200, 1, 400000, '2023-01-07 15:19:11', '2023-01-07 15:19:11'),
(42, 'product-images/DK3UHkGdAC92fy8riObT3l6TUAXcbvieDkYaaaIG.jpg', 'Metalica', 'Metallica adalah sebuah grup musik heavy metal asal Amerika Serikat yang dibentuk di Los Angeles pada 1981 oleh James Hetfield dan Lars Ulrich.', 300, 1, 50000, '2023-01-07 15:20:00', '2023-01-07 15:20:00'),
(43, 'product-images/wRmtU7bQf3M7MRARmXr8ybiRZOhsHbG4uEnmd1cH.jpg', 'Bruno Mars', 'Peter Gene Hernandez, dikenal secara profesional sebagai Bruno Mars, adalah seorang penyanyi-penulis lagu, multi-instrumentalis, produser rekaman, dan penari berkebangsaan Amerika Serikat.', 200, 1, 70000, '2023-01-07 15:20:36', '2023-01-07 15:20:36'),
(44, NULL, 'Aeroa', 'Peter Gene Hernandez, dikenal secara profesional sebagai ArosMars, adalah seorang penyanyi-penulis lagu, multi-instrumentalis, produser rekaman, dan penari berkebangsaan Amerika Serikat.', 10, 1, 500000, '2023-01-07 15:21:28', '2023-01-07 15:21:28'),
(45, 'product-images/B9Ta2dgtmjQV6kweMaFbyTCCiktRPoTjdcid3bI4.jpg', 'Dignate', 'Peter Gene Hernandez, dikenal secara profesional sebagai Dignate, adalah seorang penyanyi-penulis lagu, multi-instrumentalis, produser rekaman, dan penari berkebangsaan Amerika Selatan.', 20, 2, 400000, '2023-01-07 15:22:06', '2023-01-07 15:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `grandtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `product_id`, `price`, `qty`, `subtotal`, `grandtotal`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 8022, 1, 8022, 17815, '2023-01-07 14:45:58', '2023-01-07 14:45:58'),
(4, 1, 6, 9793, 1, 9793, 17815, '2023-01-07 14:45:58', '2023-01-07 14:45:58'),
(5, 1, 6, 9793, 1, 9793, 9793, '2023-01-07 15:06:52', '2023-01-07 15:06:52'),
(6, 1, 3, 8523, 10, 85230, 85230, '2023-01-07 15:07:31', '2023-01-07 15:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `phone`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'member', 'member@member.com', '$2y$10$FRGgVvkqQAadee2NvJVh2eN5UQm0ZawdKPJYcdAXQGTRTvNjIOEcC', 'Cengkareng, Jakrarta, Indonesia', 12345678901, NULL, '2023-01-07 14:14:34', '2023-01-07 14:14:34', 0),
(2, 'admin', 'admin@admin.com', '$2y$10$dfbcR6GJwlP8Qi8pqIQnJ.X54ZvCuAjb2gqDVdCw7BE1xQ6so/tie', 'Cengkareng, Jakarta, Indonesia', 12345678901, NULL, '2023-01-07 15:17:44', '2023-01-07 15:17:44', 1),
(3, 'alvitto', 'alvittoag@pmm.me', '$2y$10$S4BlDonrF8Wdn.4vsXnlqeLPp1uPxdcNkgclIGjQ9ca9AyfFZ2rAe', 'Cikampek, Jawa Barat, Indonesia', 12345678901, NULL, '2023-01-07 15:18:25', '2023-01-07 15:18:25', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
