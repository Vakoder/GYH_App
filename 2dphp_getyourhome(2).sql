-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 19 mars 2021 à 15:04
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `2dphp_getyourhome`
--
CREATE DATABASE IF NOT EXISTS `2dphp_getyourhome` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `2dphp_getyourhome`;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `code_postale` int(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `date_naissance`, `adresse`, `code_postale`, `ville`, `telephone`, `email`) VALUES
(1, 'Perrault', 'Vivianne', '1974-08-19', '88 rue du Gue Jacquet', 78400, 'CHATOU', '01.82.46.72.07', 'vivianne.perrault78@laposte.net'),
(2, 'Beaudry', 'Rémi', '1986-03-05', '65 cours Jean Jaures', 33300, 'BORDEAUX', '05.12.21.24.92', 'r.beaudry33@gmail.com'),
(3, 'Mazuret', 'Paul', '1979-02-04', '115 rue Petite Fusterie', 18000, 'Bourges', '02.84.62.68.17', 'mazuretp18000@hotmail.com'),
(4, 'Beausoleil', 'Eric', '1980-11-18', '75 Rue St Ferréol', 57070, 'METZ', '03.33.55.98.41', 'eric.beau.soleil@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `name`) VALUES
(1, 'justificatifs d\'identité'),
(2, 'justificatifs de situation familiale'),
(3, 'Justificatif de domicile'),
(4, 'Origine des apports personnels '),
(5, 'justificatifs de prêt immobilier'),
(6, 'Devis Travaux'),
(7, 'Plan de transformation du logement');

-- --------------------------------------------------------

--
-- Structure de la table `etapes`
--

DROP TABLE IF EXISTS `etapes`;
CREATE TABLE IF NOT EXISTS `etapes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etapes`
--

INSERT INTO `etapes` (`id`, `libelle`) VALUES
(1, 'Recherche de biens immobiliers'),
(2, 'Propositions des biens immobiliers'),
(3, 'Sélection biens immobiliers'),
(4, 'Planification des visites'),
(5, 'Choix clients'),
(6, 'En attente des documents client'),
(7, 'Vérifications des documents clients'),
(8, 'Remise des documents à l\'agence immobilière'),
(9, 'Mise en relation de l\'agence immobilière avec le client'),
(10, 'Facturation à l\'agence immobilière'),
(11, 'En attente du paiement de la facture'),
(12, 'Facture Payée');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `etat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `nom`, `date_debut`, `date_fin`, `client_id`, `etat_id`) VALUES
(1, 'Vivianne_perrault_1_78400_projet_000001', '2020-06-10', NULL, 1, 1),
(2, 'Remi_Beaudry_2_33300_projet_000002', '2020-08-16', NULL, 2, 3),
(3, 'Paul_Mazuret_3_18000_projet_000003', '2021-09-27', NULL, 3, 1),
(4, 'Eric_Beausoleil_4_57070_projet_000004', '2021-11-02', NULL, 4, 2),
(5, 'Paul_Mazuret_3_18000_projet_000004', '2021-01-04', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `projets_documents`
--

DROP TABLE IF EXISTS `projets_documents`;
CREATE TABLE IF NOT EXISTS `projets_documents` (
  `projets_id` int(11) NOT NULL,
  `documents_id` int(11) NOT NULL,
  PRIMARY KEY (`projets_id`,`documents_id`),
  KEY `IDX_E23726AF597A6CB7` (`projets_id`),
  KEY `IDX_E23726AF5F0F2752` (`documents_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets_documents`
--

INSERT INTO `projets_documents` (`projets_id`, `documents_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 5),
(1, 6),
(2, 1),
(2, 2),
(2, 3),
(2, 5),
(2, 6),
(2, 7),
(3, 1),
(3, 2),
(3, 3),
(3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `projets_etapes`
--

DROP TABLE IF EXISTS `projets_etapes`;
CREATE TABLE IF NOT EXISTS `projets_etapes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_projet` int(11) NOT NULL,
  `id_etape` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projets_etapes`
--

INSERT INTO `projets_etapes` (`id`, `id_projet`, `id_etape`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 2, 1),
(13, 2, 2),
(14, 2, 3),
(15, 2, 4),
(16, 2, 5),
(17, 2, 6),
(18, 2, 7),
(19, 2, 8),
(20, 2, 9),
(21, 2, 10),
(22, 2, 11),
(23, 2, 12),
(25, 3, 1),
(26, 3, 2),
(27, 3, 3),
(28, 3, 4),
(29, 3, 5),
(30, 3, 6),
(31, 3, 7),
(32, 4, 1),
(33, 4, 2),
(34, 4, 3),
(35, 4, 4),
(36, 4, 5),
(37, 4, 6),
(38, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `projets_etat`
--

DROP TABLE IF EXISTS `projets_etat`;
CREATE TABLE IF NOT EXISTS `projets_etat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projets_etat`
--

INSERT INTO `projets_etat` (`id`, `libelle`) VALUES
(1, 'En cours'),
(2, 'En attente réponse client'),
(3, 'Terminé');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
