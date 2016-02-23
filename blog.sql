-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Février 2016 à 17:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`) VALUES
(14, 'Saison 1', 'C''est la 1re année en fac de Alex Moran, Craig Shilo, et de Sammy Cacciatore. Alex est le nouveau quarterback (QB) remplaçant des Goats de Blue Mountain State, c''est un flemmard doublé d''un fêtard triplé d''un queutard. Craig est le nouveau running back des Goats il est déjà connu pour ses talents de sportif, il est en couple avec Denise Roy, une fille ultra-autoritaire mais surtout extrêmement manipulatrice et vénale. Thad Castle, linebacker est l''exentrique capitaine de l''équipe. Quant à Sammy c''est la nouvelle mascotte des Goats et le meilleur ami d''Alex. Dans cette saison, ils vont devoir survivre entre le bizutage, les cours (quand ils y vont), les examens truqués, le foot, les soirées alcoolisées, les drogues et les filles.', 1452516527),
(15, 'Saison 2', '2e année à BMS pour Alex et Sammy. Craig est parti à Georgia Tech et le QB titulaire des Goats a fini ses études. Alex est chargé de faire en sorte que le nouveau QB titulaire, Radon Randell se plaise à BMS, ce qui va lui attirer pas mal d''ennuis. Une autre nouvelle tête apparaît également en la personne de Mary-Jo, la sœur de Sammy qui va devenir Pom-Pom Girl et dont l''objectif est un jour de coucher avec Alex. Une nouvelle année avec toujours autant de fêtes, d''alcool, de drogues, et de filles.', 1452516540),
(18, 'Saison 3', '3e année à BMS pour Alex et Sammy. Radon s''est blessé pendant un match et a du partir. Alex devient alors le nouveau QB titulaire des Goats. Thad a du rester à BMS, suite à des ennuis avec la justice. Une nouvelle année avec toujours autant de fêtes, d''alcool, de drogue, et de filles.', 1454429640),
(22, 'BMS', 'BMS\r\nBMS', 1453813558);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `mdp`, `sid`) VALUES
(2, 'Sigma', 'Mitch', 'sigma@mitch.com', 'b2882c4cc48ae096d95e23b933930a2a', '298600154c74a982202fab98516e0105'),
(3, 'Lannoy', 'JP', 'jp.lannoy@nilsine.fr', 'c75e9f8bc5e174ca8a1be243159eab37', '298600154c74a982202fab98516e0105');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
