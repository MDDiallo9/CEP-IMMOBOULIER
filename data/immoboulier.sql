-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 nov. 2023 à 16:45
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `immoboulier`
--
CREATE DATABASE IF NOT EXISTS `immoboulier` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `immoboulier`;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL,
  `image` varchar(150) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `prix` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `pieces` int(11) NOT NULL,
  `energie` varchar(2) NOT NULL,
  `pollution` varchar(2) NOT NULL,
  `cree_le` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifie_le` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `description`, `image`, `type`, `prix`, `surface`, `pieces`, `energie`, `pollution`, `cree_le`, `modifie_le`) VALUES
(1, 'Appartement meublé à louer Pontoise', 'PONTOISE LES MARADAS ORANGE - à 15mins à pied de la gare de Cergy Préfecture. Appartement de type F4, situé au 2ème étage sans ascenseur, entièrement meublé et en très bon état, comprenant: un séjour,', '1.jpeg', 0, 1300, 63, 4, 'D', 'C', '2023-11-17 08:26:52', NULL),
(2, 'Maison &agrave; vendre Saint-Ouen', 'Quartier DEBAIN, a proximit&eacute; des commerces des &eacute;coles et du m&eacute;tro (Porte de Clignancourt).Cette maison se situe d&#039;une all&eacute;e privative &agrave; l&#039;abri des regards, l&#039;acc&egrave;s se fait part un jardin de 33m&sup2; e', '3.jpg', 1, 560000, 95, 4, 'A', 'B', '2023-11-17 09:29:45', '2023-11-17 12:07:15'),
(3, 'Appartement à vendre Tour Rubis', 'PLACE D\' ITALIE :  TOUR RUBIS : à proximité immédiate du centre commercial ITALIE II :  \r\n\r\nCoup de cœur assuré pour ce bel appartement de 2 pièces d\'une superficie de 57 M2 Carrez. ', '3.jpg', 1, 475000, 57, 2, 'C', 'B', '2023-11-17 09:31:35', NULL),
(4, ' Appartement Issy-les-Moulineaux ', 'Issy Les Moulineaux 92130 - Corentin Celton/Parc Jean Paul II - Insoupçonnable, situé à l\'arrière d\'une petite copropriété, cet agréable appartement comme une maison, dispose d\'un lumineux séjour-véra', '4.jpg', 1, 830000, 83, 4, 'C', 'C', '2023-11-17 09:50:27', NULL),
(7, 'Une maison en Californie', '1531 Escalero Rd, Santa Rosa, CA 95409', '2df0aff75f80990b29e9e05e27754e4b-uncropped_scaled_within_1536_1152.webp', 1, 1500000, 200, 4, 'A', 'A', '2023-11-17 14:06:27', '2023-11-17 14:13:01'),
(9, 'Une villa au Diamant (Martinique)', 'Newly built, this luxury villa offers a magnificent view of the Diamond Rock, a private swimming pool with a sunken beach and sunbathing in the water, and beach access at certain times of the year.', '1634168333f64a9c90d86a9b9d3019ab7ba7f83869.jpg', 0, 5000, 150, 4, 'A', 'B', '2023-11-17 15:25:57', NULL),
(10, 'Une autre maison en Californie', 'Une maison trouv&eacute;e sur Zillow', 'e9eef10fcf9d5516483c5a0fffcaea82-cc_ft_768.webp', 0, 2300, 120, 4, 'C', 'B', '2023-11-17 15:27:48', NULL),
(11, 'Studio &agrave; vendre', 'Paris VIe - ODEON Rue Danton   Dans un bel immeuble en pierre de taille, au sixi&egrave;me et dernier &eacute;tage (ascenseur vot&eacute; et pay&eacute;), un appartement de deux pi&egrave;ces d&#039;une surface de 29.92 m&sup2; Loi Carrez', '1gw8yanhs6gh947fsjtss7hm5e0zf5qpidvedrntf.webp', 1, 600000, 30, 2, 'E', 'D', '2023-11-17 15:40:18', NULL),
(12, 'Appartement &agrave; vendre', 'Situ&eacute; au deuxi&egrave;me &eacute;tage avec ascenseur d&#039;un immeuble de bon standing', '0v1tnpcgbvs0zefsqh95cmki4clyjuha631f357s1.webp', 1, 525000, 70, 3, 'B', 'B', '2023-11-17 15:41:12', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
