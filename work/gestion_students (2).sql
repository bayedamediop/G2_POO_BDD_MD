-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 28 juin 2020 à 19:44
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_students`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `numero_chambre` varchar(255) COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id`, `numero_chambre`) VALUES
(1, 'AA-NN1'),
(2, 'AA-NN2'),
(3, 'AA-NN3'),
(4, 'AA-NN4'),
(5, 'AA-NN5'),
(6, 'AA-NN6'),
(7, 'NN_BB7'),
(8, ' efg '),
(9, ' efg '),
(10, '  '),
(11, '  '),
(12, '  '),
(13, ' rsdffg '),
(14, ' rsdffg '),
(15, ' rsdffg '),
(16, ' rsdffg '),
(17, ' rsdffg '),
(18, ' rsdffg '),
(19, ' rsdffg '),
(20, ' rsdffg ');

-- --------------------------------------------------------

--
-- Structure de la table `gérant`
--

CREATE TABLE `gérant` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `Identifiant` varchar(50) NOT NULL,
  `mot de passe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `type_user` varchar(50) NOT NULL,
  `prix_bourse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `matricule`, `prenom`, `nom`, `telephone`, `Email`, `dateNaissance`, `type_user`, `prix_bourse`) VALUES
(1, ' 2020DINE1', ' diop ', 'fatou senne', 2147483647, 'fatousenne@gmail.com', '2020-06-18', 'boursier', 2000),
(2, ' 2020DIDY2', ' diop ', 'amddy', 76545999, 'User32@gmail.com', '2016-10-28', 'boursier', 2000),
(3, ' 2020DIOU3', ' diop ', 'modou', 76545999, 'User32@gmail.com', '2020-06-13', 'nonboursier', 0),
(4, ' 2020DIRA3 ', ' DIOUF ', 'alioune badara', 2147483647, 'MANIAWESEYE@GMAIL.COM', '2020-06-26', 'nonboursier', 0),
(10, ' 2020MBOU10 ', ' mbaye ', 'mamadou', 2147483647, 'MANIAWESEYE@GMAIL.COM', '2020-06-22', 'boursier', 2000),
(11, ' 2020WALA11 ', ' wane ', 'baila', 76545999, 'douwane1823@gmail.com', '0000-00-00', 'nonboursier', 0),
(14, ' 202012 ', '  ', '', 0, '', '0000-00-00', '', 0),
(15, ' 202015 ', '  ', '', 0, '', '0000-00-00', '', 0),
(16, ' 202016 ', '  ', '', 0, '', '0000-00-00', '', 0),
(17, ' 202017 ', '  ', '', 0, '', '0000-00-00', '', 0),
(18, ' 202018 ', '  ', '', 0, '', '0000-00-00', '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gérant`
--
ALTER TABLE `gérant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `gérant`
--
ALTER TABLE `gérant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
