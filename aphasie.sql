-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 25 Mars 2018 à 17:45
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `aphasie`
--
CREATE DATABASE IF NOT EXISTS `aphasie` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `aphasie`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(25) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`) VALUES
(1, 'lieux'),
(2, 'personnes'),
(3, 'objets'),
(4, 'actions');

-- --------------------------------------------------------

--
-- Structure de la table `objets`
--

CREATE TABLE `objets` (
  `id_objet` int(11) NOT NULL,
  `nom_objet` varchar(20) CHARACTER SET latin1 NOT NULL,
  `id_categorie` varchar(20) CHARACTER SET latin1 NOT NULL,
  `url_image` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `objets`
--

INSERT INTO `objets` (`id_objet`, `nom_objet`, `id_categorie`, `url_image`) VALUES
(19, 'Jean', '2', 'images/test.jpg'),
(18, 'Papa', '2', 'images/test.jpg'),
(17, 'Maman', '2', 'images/test.jpg'),
(16, 'Salon', '1', 'images/test.jpg'),
(15, 'Garage', '1', 'images/test.jpg'),
(14, 'Cuisine', '1', 'images/test.jpg'),
(13, 'Chambre', '1', 'images/test.jpg'),
(20, 'Claire', '2', 'images/test.jpg'),
(21, 'Voiture', '3', 'images/test.jpg'),
(23, 'Table', '3', 'images/test.jpg'),
(24, 'Glace', '3', 'images/test.jpg'),
(25, 'Lampe', '3', 'images/test.jpg'),
(27, 'Couvertures', '3', 'images/test.jpg'),
(29, 'Allumer', '4', 'images/test.jpg'),
(30, 'Mettre', '4', 'images/test.jpg'),
(31, 'Manger', '4', 'images/test.jpg'),
(39, 'Dormir', '4', 'images/IMG_0289.JPG');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `objets`
--
ALTER TABLE `objets`
  ADD PRIMARY KEY (`id_objet`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `objets`
--
ALTER TABLE `objets`
  MODIFY `id_objet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
