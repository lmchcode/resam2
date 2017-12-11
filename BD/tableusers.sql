-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Jeu 07 Décembre 2017 à 11:48
-- Version du serveur :  5.6.28
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `m2l_resa_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `usr_login` varchar(255) NOT NULL,
  `usr_psw` varchar(255) NOT NULL,
  `usr_sup` int(11) DEFAULT NULL,
  `usr_id` int(11) NOT NULL,
  `usr_nom` varchar(255) NOT NULL,
  `usr_prenom` varchar(255) NOT NULL,
  `usr_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT;
