-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 09 juil. 2023 à 16:33
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
-- Base de données : `datasender`
--

-- --------------------------------------------------------

--
-- Structure de la table `factures_achats`
--

CREATE TABLE `factures_achats` (
  `id_achat` int(11) NOT NULL,
  `intitule_achat` varchar(100) NOT NULL,
  `pu_achat` int(11) NOT NULL,
  `tva_achat` int(11) NOT NULL,
  `compte_achat` int(11) NOT NULL,
  `total_achat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `factures_achats`
--

INSERT INTO `factures_achats` (`id_achat`, `intitule_achat`, `pu_achat`, `tva_achat`, `compte_achat`, `total_achat`) VALUES
(28, 'Contrôle qualité', 135, 27, 602, 162),
(29, 'Vis', 30, 6, 607, 36);

-- --------------------------------------------------------

--
-- Structure de la table `factures_ventes`
--

CREATE TABLE `factures_ventes` (
  `id_vente` int(11) NOT NULL,
  `intitule_vente` varchar(100) NOT NULL,
  `pu_vente` int(11) NOT NULL,
  `tva_vente` int(11) NOT NULL,
  `compte_vente` int(11) NOT NULL,
  `total_vente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `factures_achats`
--
ALTER TABLE `factures_achats`
  ADD PRIMARY KEY (`id_achat`);

--
-- Index pour la table `factures_ventes`
--
ALTER TABLE `factures_ventes`
  ADD PRIMARY KEY (`id_vente`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `factures_achats`
--
ALTER TABLE `factures_achats`
  MODIFY `id_achat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `factures_ventes`
--
ALTER TABLE `factures_ventes`
  MODIFY `id_vente` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
