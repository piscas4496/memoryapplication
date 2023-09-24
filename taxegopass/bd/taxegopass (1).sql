-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 05 sep. 2023 à 11:58
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `taxegopass`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresses`
--

CREATE TABLE `adresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pays` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quartier` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avenue` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adresses`
--

INSERT INTO `adresses` (`id`, `pays`, `province`, `ville`, `commune`, `quartier`, `avenue`, `numero`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'RDC', 'nordkivu', 'goma', 'karisimbi', 'virunga', 'b julien paluku', 194, '2023-07-09 20:41:23', '2023-07-09 20:41:23', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomsag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genreag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaissag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`id`, `nomsag`, `genreag`, `datenaissag`, `mobile`, `emailag`, `passwordag`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'piscas maronga', 'Masculin', '1997-04-04', '0850099243', 'piscasmaronga@gmail.com', '12345', '2023-07-07 18:09:38', '2023-07-08 04:22:46', NULL),
(2, 'jered anguandia', 'Masculin', '1997-05-02', '0970723425', 'jered@gmail.com', '1234', '2023-07-08 05:24:06', '2023-07-08 05:24:06', NULL),
(3, 'maleani', 'Masculin', '2000-01-12', '0972453267', 'maleani@gmail.com', '1234', '2023-07-27 14:41:17', '2023-07-27 14:41:17', NULL),
(4, 'Betos Balolage', 'Masculin', '2000-02-12', '097345627', 'betosebalolage@gmail.com', '1234', '2023-07-27 15:48:42', '2023-07-27 15:48:42', NULL),
(5, 'Esther ASHUZA', 'Feminin', '2002-10-10', '0970754323', 'ashuza@gmail.com', '1234', '2023-08-27 20:07:50', '2023-08-27 20:07:50', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `avions`
--

CREATE TABLE `avions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreplace` int(11) NOT NULL,
  `typeavion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_compagnie` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `avions`
--

INSERT INTO `avions` (`id`, `designation`, `nombreplace`, `typeavion`, `ref_compagnie`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Antonov 37', 700, 'Transport', 1, '2023-07-10 07:06:58', '2023-07-10 07:06:58', NULL),
(2, 'Air Congo', 500, 'transport', 1, '2023-09-03 22:00:00', '2023-09-04 06:00:00', NULL),
(3, 'Antonov 1', 500, 'transport', 1, '2023-09-03 22:00:00', '2023-09-04 06:00:00', NULL),
(4, 'Air Congo', 500, 'transport', 1, '2023-09-03 22:00:00', '2023-09-04 06:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `compagnies`
--

CREATE TABLE `compagnies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `compagnies`
--

INSERT INTO `compagnies` (`id`, `designation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CAA', '2023-07-10 07:10:09', '2023-07-10 07:10:09', NULL),
(2, 'SERVICE AIR', '2023-07-10 07:35:46', '2023-07-10 07:35:46', NULL),
(3, 'Congo Air ways', '2023-09-04 06:43:48', '2023-09-04 06:43:48', NULL),
(4, 'Goma Air', '2023-09-04 06:43:48', '2023-09-04 06:43:48', NULL),
(5, 'Ethipian', '2023-09-04 06:43:48', '2023-09-04 06:43:48', NULL),
(6, 'Kenya air', '2023-09-04 06:43:48', '2023-09-04 06:43:48', NULL),
(7, 'Rwanda Air', '2023-09-04 06:43:48', '2023-09-04 06:43:48', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_26_085045_create_agents_table', 1),
(6, '2023_06_26_105000_create_passagers_table', 1),
(7, '2023_06_26_113818_create_adresses_table', 1),
(8, '2023_06_26_130949_create_vols_table', 1),
(9, '2023_06_26_131105_create_avions_table', 1),
(10, '2023_06_26_131221_create_compagnies_table', 1),
(11, '2023_06_27_082646_create_paiements_table', 1),
(12, '2023_06_27_082714_create_type_frais_table', 1),
(13, '2023_07_07_113156_create_permission_tables', 1),
(14, '2023_07_07_113451_create_sessions_table', 1),
(15, '2023_07_07_113637_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `motif` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datepaiement` date NOT NULL,
  `ref_passager` bigint(20) UNSIGNED NOT NULL,
  `ref_agent` bigint(20) UNSIGNED NOT NULL,
  `ref_typefrais` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `paiements`
--

INSERT INTO `paiements` (`id`, `motif`, `datepaiement`, `ref_passager`, `ref_agent`, `ref_typefrais`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'INTERNATIONAL', '2022-04-04', 1, 1, 1, '2023-07-10 07:26:33', '2023-07-10 07:26:33', NULL),
(2, 'INTERNATIONNAL', '2023-07-27', 2, 2, 1, '2023-07-27 19:14:46', '2023-07-27 19:14:46', NULL),
(3, 'NATIONAL', '2023-08-10', 2, 3, 2, '2023-08-10 04:21:21', '2023-08-10 04:21:21', NULL),
(4, 'INTERNATIONAL', '2023-08-10', 5, 3, 1, '2023-08-10 04:29:53', '2023-08-10 04:29:53', NULL),
(5, 'NATIONAL', '2023-08-13', 4, 1, 2, '2023-08-13 10:40:44', '2023-08-13 10:40:44', NULL),
(6, 'INTERNATIONAL', '2023-08-13', 4, 4, 1, '2023-08-13 17:17:06', '2023-08-13 17:17:06', NULL),
(7, 'INTERNATIONAL', '2023-08-27', 2, 2, 1, '2023-08-27 19:57:08', '2023-08-27 19:57:08', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `passagers`
--

CREATE TABLE `passagers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomspass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genrepass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaisspass` date NOT NULL,
  `telephone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailpass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_adresse` bigint(20) UNSIGNED NOT NULL,
  `ref_vol` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `passagers`
--

INSERT INTO `passagers` (`id`, `nomspass`, `genrepass`, `datenaisspass`, `telephone`, `emailpass`, `ref_adresse`, `ref_vol`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PISCAS MARONGA', 'Masculin', '1996-04-04', '0970721245', 'piscasmaronga@gmail.com', 1, 2, '2023-07-10 06:57:48', '2023-07-10 06:57:48', NULL),
(2, 'EMANUEL KIHAMAMBUKA', 'Masculin', '2000-04-04', '0970721732', 'emanuelkihamba@gmail.com', 1, 1, '2023-07-10 06:57:49', '2023-07-10 06:57:49', NULL),
(3, 'BLAISE PASCOVICH', 'Masculin', '2023-08-10', '097673667376', 'pascovich@gmail.com', 1, 2, '2023-08-10 04:28:31', '2023-08-10 04:28:31', NULL),
(4, 'JERED ANGWANDIA', 'Masculin', '1997-05-07', '0829924335', 'jered@gmail.com', 1, 2, NULL, NULL, NULL),
(5, 'ALEX ALIMASI', 'Masculin', '1993-02-07', '09450007234', 'alimasialexandre@gmail.com', 1, 2, '2023-08-15 20:59:13', '2023-08-22 20:59:13', '2023-08-15 20:59:13'),
(6, 'PATIENCE DRANI', 'Feminin', '2001-08-02', '0820028288', 'patiencedrani@gmail.com', 1, 1, '2023-08-27 20:14:07', '2023-08-27 20:14:07', NULL),
(7, 'jgjgjjgjgjjg', 'Feminin', '2023-08-29', '0000000000000', 'pdppdpdp', 1, 2, '2023-08-28 20:16:27', '2023-08-28 20:16:27', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_frais`
--

CREATE TABLE `type_frais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `validite` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_frais`
--

INSERT INTO `type_frais` (`id`, `designation`, `prix`, `validite`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CACH', 50, '3MOIS', NULL, NULL, NULL),
(2, 'CHASH', 10, '2MOIS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE `vols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datedepart` date NOT NULL,
  `heuresortie` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_avion` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`id`, `designation`, `datedepart`, `heuresortie`, `destination`, `ref_avion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'GOMA-KINSHASA', '2023-07-02', '08:30', 'KINSHASA', 1, '2023-07-10 07:44:07', '2023-07-10 07:44:07', NULL),
(2, 'GOMA-ETHIOPIE', '2023-07-10', '15H00', 'Ethiopie', 1, '2023-07-10 07:49:39', '2023-07-10 07:49:39', NULL),
(3, 'GOMA-KINSHASA', '2023-07-25', '18h00', 'KINSHASA', 1, '2023-07-25 10:43:08', '2023-07-25 10:43:08', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresses`
--
ALTER TABLE `adresses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avions`
--
ALTER TABLE `avions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avions_ref_compagnie_foreign` (`ref_compagnie`);

--
-- Index pour la table `compagnies`
--
ALTER TABLE `compagnies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paiements_ref_passager_foreign` (`ref_passager`),
  ADD KEY `paiements_ref_agent_foreign` (`ref_agent`),
  ADD KEY `paiements_ref_typefrais_foreign` (`ref_typefrais`);

--
-- Index pour la table `passagers`
--
ALTER TABLE `passagers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `passagers_ref_adresse_foreign` (`ref_adresse`),
  ADD KEY `passagers_ref_vol_foreign` (`ref_vol`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Index pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `type_frais`
--
ALTER TABLE `type_frais`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `vols`
--
ALTER TABLE `vols`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vols_ref_avion_foreign` (`ref_avion`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresses`
--
ALTER TABLE `adresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `avions`
--
ALTER TABLE `avions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `compagnies`
--
ALTER TABLE `compagnies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `passagers`
--
ALTER TABLE `passagers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_frais`
--
ALTER TABLE `type_frais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vols`
--
ALTER TABLE `vols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
