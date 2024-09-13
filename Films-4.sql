-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 13 sep. 2024 à 13:15
-- Version du serveur : 8.0.35
-- Version de PHP : 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Films`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int NOT NULL,
  `titre` varchar(200) NOT NULL,
  `realisateur` varchar(100) NOT NULL,
  `date` int NOT NULL,
  `img` varchar(250) NOT NULL,
  `duree` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `realisateur`, `date`, `img`, `duree`) VALUES
(1, 'Inception', 'Christopher Nolan', 2010, 'https://www.aceshowbiz.com/images/still/inception_poster19.jpg', 148),
(2, 'The Matrix', 'Lana Wachowski, Lilly Wachowski', 1999, 'https://image.tmdb.org/t/p/original/aOIuZAjPaRIE6CMzbazvcHuHXDc.jpg', 136),
(3, 'Interstellar', 'Christopher Nolan', 2014, 'https://image.tmdb.org/t/p/original/nCbkOyOMTEwlEV0LtCOvCnwEONA.jpg', 169),
(4, 'Pulp Fiction', 'Quentin Tarantino', 1994, 'https://image.tmdb.org/t/p/original/gSnbhR0vftfJ2U6KpGmR7WzZlVo.jpg', 154),
(5, 'The Shawshank Redemption', 'Frank Darabont', 1994, 'https://image.tmdb.org/t/p/original/q6y0Go1tsGEsmtFryDOJo3dEmqu.jpg', 142),
(6, 'Fight Club', 'David Fincher', 1999, 'https://cdn1.cinenode.com/movie_poster/83/full/fight-club-83423.jpg', 139),
(7, 'The Godfather', 'Francis Ford Coppola', 1972, 'https://product-image.juniqe-production.juniqe.com/media/catalog/product/seo-cache/x800/144/16/144-16-101P/Godfather-Aycan-Yilmaz-Affiche.jpg', 175),
(8, 'The Dark Knight', 'Christopher Nolan', 2008, 'https://payload.cargocollective.com/1/10/320683/10018575/cc_1200.JPG', 152),
(9, 'Forrest Gump', 'Robert Zemeckis', 1994, 'https://image.tmdb.org/t/p/original/8aBHdTp6MZ7RRE45maIYrEPo6IJ.jpg', 142),
(10, 'Gladiator', 'Ridley Scott', 2000, 'https://2.bp.blogspot.com/-6Zk3VfCi8qE/VE6llGrRa0I/AAAAAAAAB84/saRXZtZzeVg/s1600/b50401kxw24.jpg', 155);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `niveau` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `mdp`, `pseudo`, `niveau`) VALUES
(1, 'elena.martin@example.com', 'password123', 'LunaPhoenix', 1),
(2, 'jakob.reed@example.com', 'securepass', 'StarGazer88', 2),
(3, 'talia.wood@example.com', 'myP@ssw0rd!', 'DreamSeeker', 1),
(4, 'nathan.brook@example.com', '12345678', 'QuantumRider', 1),
(5, 'zara.ali@example.com', 'letmein!', 'EchoWhisperer', 2),
(6, 'milo.hart@example.com', 'ilovemovies', 'VortexChaser', 1),
(7, 'noa.johnson@example.com', 'password321', 'MysticVoyager', 1),
(8, 'iris.taylor@example.com', '1234abcd', 'NebulaDreamer', 2),
(9, 'leo.martinez@example.com', 'mypassword', 'SolarFlare', 1),
(10, 'fiona.smith@example.com', 'qwertyuiop', 'GalacticNomad', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
