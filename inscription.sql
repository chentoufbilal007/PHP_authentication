-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 nov. 2021 à 12:24
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dar`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tele` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `CODE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `username`, `email`, `tele`, `password`, `CODE`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '[value-5]', NULL),
(2, '[value-2]', '[value-3]', '[value-4]', '[value-5]', NULL),
(23, '[value-2]', '[value-3]', '[value-4]', '[value-5]', NULL),
(2111, 'defefe', 'dfdfd@sfsd.cr', '46783920', 'a', NULL),
(8430, 'bilal', 'bbav41@gmail.com', '12345678', 'AZE', NULL),
(213313, '$username', '$email', '$tele', '$password', NULL),
(21111313, 'defefe', 'dfdfd@sfsd.cr', '46783920', '', NULL),
(48996615, 'ytre', 'bbav41@gmail.com', 'ytrez', 'AZE', NULL),
(275049028, 'ertyuiolm', 'galahddummer@gmail.com', '4352671', 'opm', NULL),
(487998664, 'dortmund', 'galahummer@gmail.com', '4352671890', 'azerty', NULL),
(512475996, 'hghh', 'sdfjsd@dhfjkds.sgdh', '123456', '12345', NULL),
(536028911, 'ertyuiolmt', 'galahdduyymmer@gmail.com', '435267122222', 'tyu', NULL),
(676275101, 'ertyuiolmtd', 'galahdduyymmefffr@gmail.com', '435267122222123222', 'aze', NULL),
(681107648, 'bilal12332', 'bbav41@gmail.com', 'ytrez', 'AZE', NULL),
(716603673, 'sdfghj,;', 'bbav41@gmail.com', '435267189012345678', 'AZE', NULL),
(716603674, 'sdfghj,djknekf,nge', 'bbav41ffff@gmail.com', '4352671890123456781234567890', 'PP', NULL),
(716603675, 'aqdsfghjk:<wxcvb', 'bbav41@gmail.com', '4352671890', 'AZE', NULL),
(716603676, 'yourname', 'hjjj@hj.com', '21345678', 'CV', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=716603677;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
