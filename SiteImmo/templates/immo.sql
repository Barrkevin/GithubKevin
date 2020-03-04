-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 04 mars 2020 à 15:09
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `biensimmo`
--

DROP TABLE IF EXISTS `biensimmo`;
CREATE TABLE IF NOT EXISTS `biensimmo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adresse` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `map_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_biensimmo_map_idx` (`map_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=401 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `biensimmo`
--

INSERT INTO `biensimmo` (`id`, `name`, `adresse`, `description`, `category_id`, `image`, `map_id`) VALUES
(5, 'Villa de Sallaumines', 'Rue des Lilas', 'Jardin de 80m2, garage carrelé', 1, 'slide1.jpg', 1),
(6, 'Domaine de Vimy', 'Rue des Faubourg', 'Belle maison plein pieds, au bord de la forêt domaniale de Vimy.', 1, 'm3.jpg', 2),
(11, 'Huawei Y300', 'yhjtjuy', 'rrr', 1, 'm5.jpg', 12);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Appartement'),
(2, 'Maison');

-- --------------------------------------------------------

--
-- Structure de la table `map`
--

DROP TABLE IF EXISTS `map`;
CREATE TABLE IF NOT EXISTS `map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `longitude` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `map`
--

INSERT INTO `map` (`id`, `latitude`, `longitude`) VALUES
(1, 'test', 'test'),
(2, '50.414600372314', '2.9629738330841'),
(13, 'test', 'test'),
(11, '1111', '2222'),
(12, 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `motdepasse` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`, `role_id`) VALUES
(1, 'Administrateur', 'administrateur@gmail.com', '1111', 1),
(19, 'Visiteur', 'visiteur@gmail.com', '1111', 2);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `nom`) VALUES
(1, 'administrateur'),
(2, 'visiteur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
