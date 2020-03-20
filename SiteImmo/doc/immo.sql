-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 13 mars 2020 à 07:19
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
  `map_id` int(11) NOT NULL,
  `media_id` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `biensimmo_map_id` (`map_id`) USING BTREE,
  KEY `biensimmo_category_id` (`category_id`) USING BTREE,
  KEY `media_id` (`media_id`)
) ENGINE=MyISAM AUTO_INCREMENT=423 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `biensimmo`
--

INSERT INTO `biensimmo` (`id`, `name`, `adresse`, `description`, `category_id`, `map_id`, `media_id`) VALUES
(5, 'Appartement neuf', 'Rue voltaire, Vimy', 'Appartement de 80m2 au prix de 100 000€', 1, 1, '1'),
(6, 'Belle Villa', 'Rue de la murène, Hénin-beaumont', 'Maison de 120m2', 2, 2, '2'),
(408, 'Maison plein centre', 'Rue du maréchal, Lievin', 'Maison de 80m2', 2, 40, '37'),
(409, 'Appartement rénové', 'Rue voltaire, Vimy', 'Appartement de 65m2', 1, 41, '38'),
(410, 'Belle Maison, beau jardin', 'Rue elsa triolet, Oignies', 'Maison rénovée  de 85m2', 2, 42, '39'),
(411, 'Appartement en bordure de ville', 'Rue des peupliers, Arras', 'Appartement 3 pièces', 1, 43, '40');

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
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `map`
--

INSERT INTO `map` (`id`, `latitude`, `longitude`) VALUES
(1, '50.37243', '2.81034'),
(2, '50.414600372314', '2.9629738330841'),
(41, '50.37243', '2.81034'),
(40, '50.423183441162', '2.7715952396392'),
(42, '50.420391082763', '2.8636655807495'),
(43, '50.291048', '2.7772211');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photos` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `photos`) VALUES
(1, 'Appart.jpg'),
(2, 'M2.jpg'),
(37, 'House.jpg'),
(38, 'Build.jpg'),
(39, 'House2.jpg'),
(40, 'Build2.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
