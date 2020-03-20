-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
<<<<<<< HEAD
-- Généré le :  lun. 24 fév. 2020 à 14:09
=======
-- Généré le :  ven. 28 fév. 2020 à 10:42
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32
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
-- Base de données :  `athle`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Hors-stade', '2020-02-17 14:00:00', '2020-02-17 15:00:00'),
(2, 'Stade', '2020-02-17 11:00:00', '2020-02-17 14:00:00'),
(3, 'Cross', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
<<<<<<< HEAD
=======

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

DROP TABLE IF EXISTS `competition`;
CREATE TABLE IF NOT EXISTS `competition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competition`
--

INSERT INTO `competition` (`id`, `name`, `description`, `category_id`) VALUES
(8, 'Le 15/06/2006', 'Bonne compete', 2),
(7, 'le 10/11/1993', 'peut-être', 1),
(6, 'Le 08/11/1992', 'dezf(\'y', 3);
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`, `role_id`) VALUES
(1, 'administrateur', 'administrateur@gmail.com', '1111', 1),
(2, 'visiteur', 'visiteur@gmail.com', '1111', 2);

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

DROP TABLE IF EXISTS `resultats`;
CREATE TABLE IF NOT EXISTS `resultats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
<<<<<<< HEAD
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;
=======
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32

--
-- Déchargement des données de la table `resultats`
--

INSERT INTO `resultats` (`id`, `name`, `description`, `category_id`, `image`, `created`, `modified`) VALUES
<<<<<<< HEAD
(105, 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'xxxxxxxxxxxxx', 3, 'attention.png', '2020-02-17 15:14:45', '2020-02-17 14:14:45'),
(119, 'ddd', 'dddd', 1, 'run.jpg', '2020-02-24 11:39:47', '2020-02-24 10:39:47'),
(120, 'ccccccc', 'vvvvvvv', 1, 'meeting.jpg', '2020-02-24 11:39:53', '2020-02-24 10:39:53'),
(118, 'wwwwwwwwwwwwwwwwwwwwww', 'xxxxxxxxxxxxxxxxxxx', 2, 'meeting.jpg', '2020-02-24 10:45:29', '2020-02-24 09:45:29'),
(115, 'Samsung Galaxy', '11111', 1, 'run.jpg', '2020-02-18 13:52:51', '2020-02-18 12:52:51');
=======
(120, 'ccccccc', 'vvvvvvv', 1, 'meeting.jpg', '2020-02-24 11:39:53', '2020-02-24 10:39:53'),
(118, 'wwwwwwwwwwwwwwwwwwwwww', 'xxxxxxxxxxxxxxxxxxx', 1, 'athletic.jpg', '2020-02-24 10:45:29', '2020-02-24 09:45:29'),
(133, 'oui', 'non', 3, '', '2020-02-28 09:38:58', '2020-02-28 08:38:58');
>>>>>>> 6ff2c66c8784082f3756886a28c8c7fcf9a5cc32

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
