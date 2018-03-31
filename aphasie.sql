-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 29 Mars 2018 à 21:46
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
(19, 'Jean', '2', 'images/jean.jpg'),
(18, 'Papa', '2', 'images/papa.jpg'),
(17, 'Maman', '2', 'images/maman.jpg'),
(16, 'Salon', '1', 'images/salon.jpg'),
(15, 'Garage', '1', 'images/garage.jpg'),
(14, 'Cuisine', '1', 'images/cuisine.jpg'),
(13, 'Chambre', '1', 'images/chambre.jpg'),
(20, 'Claire', '2', 'images/claire.jpg'),
(21, 'Voiture', '3', 'images/voiture.jpg'),
(23, 'Table', '3', 'images/table.jpg'),
(24, 'Glace', '3', 'images/glace.jpg'),
(25, 'Lampe', '3', 'images/lampe.jpg'),
(27, 'Couvertures', '3', 'images/couver.jpg'),
(29, 'Allumer', '4', 'images/allumer.jpg'),
(30, 'Mettre', '4', 'images/mettre.png'),
(31, 'Manger', '4', 'images/manger.jpg'),
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
