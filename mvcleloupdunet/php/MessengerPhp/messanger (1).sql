-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 17 jan. 2022 à 11:41
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
-- Base de données : `messanger`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(255) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 618512592, 1462813645, 'Messieurs'),
(2, 618512592, 1462813645, 'Hello fode'),
(3, 618512592, 1462813645, 'salut'),
(4, 30199095, 361841713, '{ hi}'),
(5, 30199095, 361841713, '{ bruno}'),
(6, 30199095, 361841713, '{ salut}'),
(7, 618512592, 361841713, '{ Hello}'),
(8, 618512592, 361841713, '{ Ah merci}'),
(9, 30199095, 361841713, '{ salut}'),
(10, 361841713, 361841713, '{ salut}'),
(11, 361841713, 361841713, '{ oui salut}'),
(12, 30199095, 361841713, '{ bien}'),
(13, 30199095, 361841713, '{ merci beaucoup}'),
(15, 30199095, 361841713, '{ salut}'),
(16, 30199095, 361841713, '{ salut}'),
(17, 30199095, 361841713, '{ oui bien}'),
(18, 30199095, 361841713, '{ et toi }'),
(19, 30199095, 361841713, '{ comment ça va}'),
(20, 30199095, 361841713, '{ ça va beaucoup}'),
(21, 30199095, 361841713, '{ ah }'),
(22, 30199095, 361841713, '{ ok}'),
(23, 30199095, 361841713, '{ ok}'),
(24, 30199095, 361841713, '{ oh ah ok }'),
(25, 618512592, 361841713, '{ bien}'),
(26, 618512592, 361841713, '{ ok}'),
(27, 30199095, 988395351, '{ salut}'),
(28, 30199095, 361841713, '{ ddd}'),
(29, 30199095, 361841713, '{ salut}'),
(30, 30199095, 361841713, '{ oui ça va}'),
(31, 30199095, 361841713, '{ bien bien}'),
(32, 30199095, 361841713, '{ oui}'),
(33, 30199095, 361841713, '{ non pas plus}'),
(34, 30199095, 361841713, '{ ah ok merci beacoup}'),
(35, 95494703, 1326719857, '{ salut}'),
(36, 95494703, 1326719857, '{ bonjour}'),
(37, 95494703, 1326719857, '{ comment ça va}');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(25, 95494703, 'Elhadj', 'Diawara', 'elhadjfode1@gmail.com', 'dddd', '1642102937dia.jpg', '{ Active now}'),
(26, 1326719857, 'Fode', 'Diawara', 'elhadjfode18@gmail.com', 'ddddd', '1642103001about-img.jpg', '{ Active now}'),
(27, 1457812441, 'Pascal', 'Léo', 'elhadjfode15@gmail.com', 'dddd', '1642415724dia.jpg', 'Active now');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
