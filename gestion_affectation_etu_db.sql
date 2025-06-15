-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 15 juin 2025 à 02:54
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
-- Base de données : `gestion_affectation_etu_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectations`
--

CREATE TABLE `affectations` (
  `id_affectation` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dateCreation` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_utilisateur` int(11) NOT NULL,
  `id_institut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `affectations`
--

INSERT INTO `affectations` (`id_affectation`, `titre`, `description`, `dateCreation`, `id_utilisateur`, `id_institut`) VALUES
(1, 'fgg', 'dfghjk', '2025-06-15 00:14:40', 1, 2),
(2, 'dfgh', 'dfghjk', '2025-06-15 00:28:46', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etudiantaffections`
--

CREATE TABLE `etudiantaffections` (
  `id_etu_af` int(11) NOT NULL,
  `dateAf` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `id_etudiant` int(11) NOT NULL,
  `id_affectation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiantaffections`
--

INSERT INTO `etudiantaffections` (`id_etu_af`, `dateAf`, `status`, `id_etudiant`, `id_affectation`) VALUES
(1, '2025-06-15 00:34:35', 0, 1, 2),
(2, '2025-06-15 00:35:35', 0, 2, 1),
(3, '2025-06-15 00:54:16', 0, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id_etudiant` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `id_filiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id_etudiant`, `nom`, `adresse`, `sexe`, `telephone`, `email`, `matricule`, `niveau`, `id_filiere`) VALUES
(1, 'cghj', 'fghj', 'fghj', 'fghj', 'fghj', 'fghjk', 'dfghj', 1),
(2, 'dfghjk', 'drfg', 'Homme', '567890', 'fgg@gg.as', '456gs', 'Licence 2', 2);

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

CREATE TABLE `filieres` (
  `id_filiere` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `filieres`
--

INSERT INTO `filieres` (`id_filiere`, `libelle`, `description`) VALUES
(1, 'fdg', 'dfghbjkl'),
(2, 'Info', 'informatique');

-- --------------------------------------------------------

--
-- Structure de la table `instituts`
--

CREATE TABLE `instituts` (
  `id_institut` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `instituts`
--

INSERT INTO `instituts` (`id_institut`, `nom`, `adresse`, `telephone`, `email`) VALUES
(1, 'gg', 'hh', '775552', 'tt@.g.uj'),
(2, 'op', 'op', '12334', 'tu@etu.sn');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `motDepasse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `username`, `nom`, `prenom`, `email`, `adresse`, `motDepasse`) VALUES
(1, 'titi', 'titi', 'titi', 'titi@gmail.com', 'titi', 'titi'),
(2, 'toto123', 'toto', 'toto', 'toto@gmail.com', 't123', 'toto'),
(3, 'fghjk', 'ghjkl', 'fghjk', 'gvhjk@g.c', 'gfhjk', 'fghj');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectations`
--
ALTER TABLE `affectations`
  ADD PRIMARY KEY (`id_affectation`),
  ADD KEY `fk_user_af` (`id_utilisateur`),
  ADD KEY `fk_institut` (`id_institut`);

--
-- Index pour la table `etudiantaffections`
--
ALTER TABLE `etudiantaffections`
  ADD PRIMARY KEY (`id_etu_af`),
  ADD KEY `fk_etudiant` (`id_etudiant`),
  ADD KEY `fk_affectation` (`id_affectation`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD KEY `fk_filiere` (`id_filiere`);

--
-- Index pour la table `filieres`
--
ALTER TABLE `filieres`
  ADD PRIMARY KEY (`id_filiere`);

--
-- Index pour la table `instituts`
--
ALTER TABLE `instituts`
  ADD PRIMARY KEY (`id_institut`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affectations`
--
ALTER TABLE `affectations`
  MODIFY `id_affectation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `etudiantaffections`
--
ALTER TABLE `etudiantaffections`
  MODIFY `id_etu_af` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `filieres`
--
ALTER TABLE `filieres`
  MODIFY `id_filiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `instituts`
--
ALTER TABLE `instituts`
  MODIFY `id_institut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `affectations`
--
ALTER TABLE `affectations`
  ADD CONSTRAINT `fk_institut` FOREIGN KEY (`id_institut`) REFERENCES `instituts` (`id_institut`),
  ADD CONSTRAINT `fk_user_af` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `etudiantaffections`
--
ALTER TABLE `etudiantaffections`
  ADD CONSTRAINT `fk_affectation` FOREIGN KEY (`id_affectation`) REFERENCES `affectations` (`id_affectation`),
  ADD CONSTRAINT `fk_etudiant` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiants` (`id_etudiant`);

--
-- Contraintes pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `fk_filiere` FOREIGN KEY (`id_filiere`) REFERENCES `filieres` (`id_filiere`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
