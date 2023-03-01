-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 mars 2023 à 14:56
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
-- Base de données : `annonce_immobiliere`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `N_ann` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Prix` int(11) NOT NULL,
  `D_pub` date NOT NULL,
  `D_der_mdf` date NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Code_postal` varchar(50) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `N_cl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`N_ann`, `Title`, `Prix`, `D_pub`, `D_der_mdf`, `Categorie`, `Type`, `Adresse`, `Description`, `Code_postal`, `Ville`, `N_cl`) VALUES
(1, 'dohaa', 700, '2023-03-01', '2023-03-01', 'location', 'villa', 'mojamar hassani', 'the best immobilier ', '90000', 'tanger', 1),
(2, 'saada', 500, '2023-03-01', '2023-03-01', 'vente', 'maison', 'ain diabee', 'parfait maison et terrain', '50000', 'rabat', 1),
(3, 'narjis', 300, '2023-03-01', '2023-03-01', 'location', 'appartement', 'rmilat narjis', 'parfait location appartement', '90000', 'tanger', 1),
(4, 'mojamaa', 400, '2023-03-01', '2023-03-01', 'location', 'appartement', 'mojamar hassani', 'the best immobilier  ', '90000', 'tanger', 2);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `N_cl` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mot_pas` varchar(50) NOT NULL,
  `N_tele` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`N_cl`, `Nom`, `Prenom`, `Email`, `Mot_pas`, `N_tele`) VALUES
(1, 'yasine', 'saada', 'yasin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 678564321),
(2, 'jamal', 'bnisa', 'jamal@gmail.com', '25d55ad283aa400af464c76d713c07ad', 645321234);

-- --------------------------------------------------------

--
-- Structure de la table `galerie_images`
--

CREATE TABLE `galerie_images` (
  `N_img` int(11) NOT NULL,
  `Img_url` varchar(50) NOT NULL,
  `Img_type` varchar(50) NOT NULL,
  `N_ann` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `galerie_images`
--

INSERT INTO `galerie_images` (`N_img`, `Img_url`, `Img_type`, `N_ann`) VALUES
(1, 'uploads/download (2).jpg', '1', 1),
(2, 'uploads/download (1).jpg', '0', 1),
(3, 'uploads/download (2).jpg', '0', 1),
(4, 'uploads/images (2).jpg', '0', 1),
(5, 'uploads/images (3).jpg', '0', 1),
(6, 'uploads/download.jpg', '1', 2),
(7, 'uploads/download.jpg', '0', 2),
(8, 'uploads/images (1).jpg', '0', 2),
(9, 'uploads/images.jpg', '0', 2),
(10, 'uploads/images (2).jpg', '1', 3),
(11, 'uploads/download (2).jpg', '0', 3),
(12, 'uploads/download.jpg', '0', 3),
(13, 'uploads/images (1).jpg', '0', 3),
(14, 'uploads/images (3).jpg', '0', 3),
(15, 'uploads/images.jpg', '0', 3),
(16, 'uploads/download.jpg', '1', 4),
(17, 'uploads/download.jpg', '0', 4),
(18, 'uploads/images (1).jpg', '0', 4),
(19, 'uploads/images.jpg', '0', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`N_ann`),
  ADD KEY `N_cl` (`N_cl`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`N_cl`);

--
-- Index pour la table `galerie_images`
--
ALTER TABLE `galerie_images`
  ADD PRIMARY KEY (`N_img`),
  ADD KEY `N_ann` (`N_ann`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `N_ann` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `N_cl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `galerie_images`
--
ALTER TABLE `galerie_images`
  MODIFY `N_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`N_cl`) REFERENCES `client` (`N_cl`);

--
-- Contraintes pour la table `galerie_images`
--
ALTER TABLE `galerie_images`
  ADD CONSTRAINT `galerie_images_ibfk_1` FOREIGN KEY (`N_ann`) REFERENCES `annonce` (`N_ann`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
