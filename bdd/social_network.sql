-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 30 jan. 2026 à 14:20
-- Version du serveur : 9.1.0
-- Version de PHP : 8.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `social_network`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `text` varchar(280) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `commentaires_user_id_foreign` (`user_id`),
  KEY `commentaires_post_id_foreign` (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `post_id`, `user_id`, `text`, `created_at`) VALUES
(2, 2, 3, 'Je te conseille Dark, excellente série !', '2026-01-20 11:10:00'),
(1, 1, 2, 'Bienvenue 😄', '2026-01-20 10:20:00'),
(3, 2, 5, 'Breaking Bad si tu ne l’as jamais vue 👌', '2026-01-20 11:15:00'),
(4, 3, 1, 'Le café est indispensable 😅', '2026-01-21 08:45:00'),
(5, 4, 1, 'Courage ! Le résultat en vaut la peine', '2026-01-21 15:00:00'),
(6, 5, 4, 'Ça donne envie de sortir prendre l’air !', '2026-01-22 16:30:00'),
(7, 1, 6, 'Clairement une bonne question 👍', '2026-01-24 11:40:00'),
(8, 2, 3, 'En ce moment beaucoup de JavaScript pour moi', '2026-01-24 11:50:00'),
(9, 3, 1, 'Exactement pareil 😄', '2026-01-24 14:25:00'),
(10, 1, 3, 'Clairement une bonne question 👍', '2026-01-24 11:40:00'),
(11, 2, 3, 'En ce moment beaucoup de JavaScript pour moi', '2026-01-24 11:50:00'),
(12, 3, 1, 'Exactement pareil 😄', '2026-01-24 14:25:00');

-- --------------------------------------------------------

--
-- Structure de la table `like`
--

DROP TABLE IF EXISTS `like`;
CREATE TABLE IF NOT EXISTS `like` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `like_post_id_foreign` (`post_id`),
  KEY `like_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `like`
--

INSERT INTO `like` (`id`, `post_id`, `user_id`) VALUES
(90, 3, 4),
(89, 3, 2),
(88, 3, 1),
(87, 2, 5),
(86, 2, 3),
(85, 2, 1),
(84, 1, 4),
(83, 1, 3),
(82, 1, 2),
(91, 4, 3),
(92, 4, 5),
(93, 5, 1),
(94, 5, 2),
(95, 5, 3),
(96, 6, 1),
(97, 6, 2),
(98, 6, 3),
(99, 6, 4),
(100, 6, 5),
(101, 1, 1),
(102, 1, 3),
(103, 2, 5),
(104, 2, 5),
(105, 3, 4),
(106, 3, 8),
(108, 9, 1),
(113, 8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `text` varchar(280) NOT NULL,
  `photo_url` varchar(280) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `text`, `photo_url`, `created_at`) VALUES
(8, 1, 'Quel langage vous utilisez le plus en ce moment ?', './upload/annika-gordon-cZISY8ai2iA-unsplash.jpg', '2026-01-24 11:30:00'),
(7, 6, 'Encore un petit test pour vérifier que tout tourne bien 🚀', './upload/radowan-nakif-rehan-cYyqhdbJ9TI-unsplash.jpg', '2026-01-24 10:00:00'),
(6, 1, 'Test de publication avec mon compte principal 👀', './upload/tom-gainor-KgwLcjXoXnA-unsplash.jpg', '2026-01-23 09:00:00'),
(5, 5, 'Balade en forêt ce week-end 🌲🍃', './upload/sergei-a--heLWtuAN3c-unsplash.jpg', '2026-01-22 16:10:00'),
(4, 4, 'Développement web toute la journée… mais ça avance 💻', './upload/ilya-pavlov-OqtafYT5kTw-unsplash.jpg', '2026-01-21 14:45:00'),
(3, 3, 'Petit café du matin ☕ Rien de mieux pour bien commencer la journée.', './upload/yosuke-ota-SzwJuxDxAEw-unsplash.jpg', '2026-01-21 08:30:00'),
(2, 2, 'Quelqu’un a des recommandations de séries à regarder ?', './upload/alin-surdu-j5GCqQM3eYA-unsplash.jpg', '2026-01-20 11:02:00'),
(1, 1, 'Première publication sur ce réseau 👋 Hâte de voir ce que ça donne !', './upload/chris-karidis-nnzkZNYWHaU-unsplash.jpg', '2026-01-20 10:15:00'),
(9, 3, 'Session code + musique = combo parfait 🎧', './upload/wes-hicks-MEL-jJnm7RQ-unsplash.jpg', '2026-01-24 14:15:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(280) NOT NULL,
  `pp` varchar(280) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `banniere_photo` varchar(280) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `pp`, `banniere_photo`) VALUES
(8, 'Nicolas', './upload/pexels-cottonbro-8090137.jpg', './upload/banner/banner8.jpg'),
(7, 'Manon', './upload/pexels-pixabay-38289.jpg', './upload/banner/banner7.jpg'),
(6, 'Lucas', './upload/pexels-mastercowley-1300402.jpg', './upload/banner/banner6.jpg'),
(5, 'Emma', './upload/pexels-itamar-osorio-385495642-33663843.jpg', './upload/banner/banner5.jpg'),
(4, 'David', './upload/pexels-italo-melo-881954-2379004.jpg', './upload/banner/banner4.jpg'),
(2, 'Baptiste', './upload/pexels-jonathan-collins-2084745810-29296883.jpg', './upload/banner/banner2.jpg'),
(3, 'Chloé', './upload/pexels-olly-733872.jpg', './upload/banner/banner3.jpg'),
(1, 'Alice', './upload/pexels-italo-melo-881954-2379004.jpg', './upload/banner/banner1.jpg'),
(16, 'adzaz', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
