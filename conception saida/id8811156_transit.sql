-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 21 mai 2019 à 13:14
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `id8811156_transit`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `username`, `password`) VALUES
(1, 'saida', 'dhawadi', 'admin', 'aa123');

-- --------------------------------------------------------

--
-- Structure de la table `arrets`
--

CREATE TABLE `arrets` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `arrets`
--

INSERT INTO `arrets` (`id`, `nom`, `latitude`, `longitude`) VALUES
(1, 'Arrets CNRPS', '35.650198', '10.085030'),
(2, 'Arrets Mansoura2', '35.656351', '10.087686'),
(3, 'Arrets Mansoura1', '35.658748', '10.088716'),
(4, 'Arrets Ecole Mansoura', '35.661916', '10.090184');

-- --------------------------------------------------------

--
-- Structure de la table `arrets_chauffeurs`
--

CREATE TABLE `arrets_chauffeurs` (
  `id` int(11) NOT NULL,
  `id_arret` int(11) NOT NULL,
  `id_chauffeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `arrets_chauffeurs`
--

INSERT INTO `arrets_chauffeurs` (`id`, `id_arret`, `id_chauffeur`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `matricule` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bus`
--

INSERT INTO `bus` (`id`, `matricule`, `description`) VALUES
(3, 'B21212554', ' Bus 50 places mini test	');

-- --------------------------------------------------------

--
-- Structure de la table `chauffeurs`
--

CREATE TABLE `chauffeurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `numTel` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `chauffeurs`
--

INSERT INTO `chauffeurs` (`id`, `nom`, `prenom`, `identifiant`, `email`, `password`, `numTel`) VALUES
(2, 'Ben Khlifa', 'Salah', 'KSalah', 'salah@gmail.com', 'salah123', '52717722');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `identifiant` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `numTel` varchar(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `identifiant`, `email`, `password`, `numTel`) VALUES
(4, 'saida', 'Dhaouadi', 'saidadh', 'saidadhaouadi5@gmail.com', '25409639', '25409639'),
(5, 'saida', 'dhaouadi', '11399866', 'saidadhaouadi5@gmail.com', '1234s', '25409639'),
(6, 'jaweher', 'fatnassi', '11929488', 'jaweherfatnassi2017@gmail.com', 'jawaher123', '26149430');

-- --------------------------------------------------------

--
-- Structure de la table `participants_voyages`
--

CREATE TABLE `participants_voyages` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_voyage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `participants_voyages`
--

INSERT INTO `participants_voyages` (`id`, `id_client`, `id_voyage`) VALUES
(2, 6, 1),
(3, 6, 2),
(4, 5, 1),
(7, 4, 1),
(9, 5, 1),
(12, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_utilisateurs`
--

CREATE TABLE `type_utilisateurs` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_utilisateurs`
--

INSERT INTO `type_utilisateurs` (`id`, `type`) VALUES
(1, 'Admin'),
(2, 'Client'),
(3, 'Chauffeur');

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

CREATE TABLE `voyages` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `depart_latitude` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `depart_longitude` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `arriver_latitude` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `arriver_longitude` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_chauffeur` int(11) NOT NULL,
  `id_bus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `voyages`
--

INSERT INTO `voyages` (`id`, `titre`, `description`, `depart_latitude`, `depart_longitude`, `arriver_latitude`, `arriver_longitude`, `id_chauffeur`, `id_bus`) VALUES
(1, 'Rondonne Bizerte ', 'Rondonne Au Bizerte Description Description Description Description Description Description Description ', '35.671167', '10.100756', '37.284637', '9.872258', 1, 1),
(2, 'Rondonne Tozeur', 'Rondonne Tozeur Description Description Description Description Description Description Description ', '35.672535', '10.096818', '33.925307', '8.094033', 2, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `arrets`
--
ALTER TABLE `arrets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `arrets_chauffeurs`
--
ALTER TABLE `arrets_chauffeurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_arret` (`id_arret`),
  ADD KEY `id_chauffeur` (`id_chauffeur`);

--
-- Index pour la table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `participants_voyages`
--
ALTER TABLE `participants_voyages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_voyage` (`id_voyage`);

--
-- Index pour la table `type_utilisateurs`
--
ALTER TABLE `type_utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyages`
--
ALTER TABLE `voyages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `arrets`
--
ALTER TABLE `arrets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `arrets_chauffeurs`
--
ALTER TABLE `arrets_chauffeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `participants_voyages`
--
ALTER TABLE `participants_voyages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `type_utilisateurs`
--
ALTER TABLE `type_utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `arrets_chauffeurs`
--
ALTER TABLE `arrets_chauffeurs`
  ADD CONSTRAINT `arrets_chauffeurs_ibfk_1` FOREIGN KEY (`id_arret`) REFERENCES `arrets` (`id`),
  ADD CONSTRAINT `arrets_chauffeurs_ibfk_2` FOREIGN KEY (`id_chauffeur`) REFERENCES `chauffeurs` (`id`);

--
-- Contraintes pour la table `participants_voyages`
--
ALTER TABLE `participants_voyages`
  ADD CONSTRAINT `participants_voyages_ibfk_3` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `participants_voyages_ibfk_4` FOREIGN KEY (`id_voyage`) REFERENCES `voyages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
