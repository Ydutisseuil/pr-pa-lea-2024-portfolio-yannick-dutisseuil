-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 juin 2024 à 11:43
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `prepa-lea-2024-portfolio-yannick-dutisseuil`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `telephone`, `message`) VALUES
(1, 'dutisseuil', 'yannick@dudu', '0549625878', 'dfgqergzteh'),
(2, 'dutisseuil', 'yannick@dudu', '0549625878', 'fbqefdgbqebf'),
(3, 'dutisseuil', 'yannick@dudu', '0549625878', 'fbqefdgbqebf'),
(4, 'dutisseuil', 'yannick@dudu', '0549625878coucou', 'dgfZEz'),
(5, 'DUTISSEUIL', 'yannick@dudu', '0689887960', 'what'),
(6, '', '', '', ''),
(7, 'dutisseuil', 'yannick@dudu', '0549625878', 'bonjour la france'),
(8, 'DUTISSEUIL', 'yannick@dudu', '0689887960', 'meerci'),
(9, 'jojo', 'jojo@bob', '45645', 'hello jojo tu es mort'),
(10, 'dutisseuil', 'yannick@hhfy', '0549625878', 'coucou');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `titre` varchar(80) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `texte` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `photo`, `texte`) VALUES
(1, 'projet1', '../images/Capture-ecran1.jpg', ' Voici une liste audio en html stylisee et cree\r\n pour un projet sur le groupe Nirvana'),
(3, 'projet2', '../images/Capture-ecran2.jpg', 'voici une liste audio gerée avec une base de données en php sur le group Nirvana'),
(4, 'test', '', ''),
(16, 'coucou', 'dezefef', 'zedf'),
(21, 'test', '../images/Capture-ecran1', 'bonjour'),
(22, 'test', '../images/Capture-ecran1.jpg', 'bob');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
