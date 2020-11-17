-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 16 oct. 2020 à 08:48
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ntmg`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `desti1` varchar(255) NOT NULL,
  `desti2` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `mdp`, `email`, `nom`, `prenom`, `ville`, `desti1`, `desti2`, `pseudo`) VALUES
(1, 'azerty', 'tester@gmail.com', 'One', 'Tester', 'Paris', 'Paris', 'Toulouse', 'Tester'),
(2, 'azerty', 'tester2@hotmail.fr', 'Two', 'Tester', 'Paris', '', '', 'Tester 2'),
(3, 'azerty', 'tester3@hotmail.fr', 'Three', 'Tester', 'Paris', '', '', 'testertrois');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
