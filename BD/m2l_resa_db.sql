-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 21 Novembre 2017 à 15:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `m2l_resa_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE IF NOT EXISTS `batiment` (
  `bat_id` int(11) NOT NULL AUTO_INCREMENT,
  `bat_nom` varchar(255) NOT NULL,
  `bat_del` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `batiment`
--

INSERT INTO `batiment` (`bat_id`, `bat_nom`, `bat_del`) VALUES
(1, 'Bâtiment A', 0),
(2, 'Bâtiment B', 0),
(3, 'Bâtiment C', 0),
(4, 'Bâtiment D', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie_salle`
--

CREATE TABLE IF NOT EXISTS `categorie_salle` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(255) NOT NULL,
  `cat_del` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorie_salle`
--

INSERT INTO `categorie_salle` (`cat_id`, `cat_nom`, `cat_del`) VALUES
(1, 'Réunions', 0),
(2, 'Amphithéâtre', 0),
(3, 'Restauration', 0),
(4, 'Convivialité ', 0);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_typ_id` int(11) NOT NULL,
  `per_nom` varchar(255) NOT NULL,
  `per_prenom` varchar(255) NOT NULL,
  `per_adresse` varchar(255) NOT NULL,
  `per_cp` varchar(20) NOT NULL,
  `per_ville` varchar(255) NOT NULL,
  `per_tel` varchar(255) NOT NULL,
  `per_email` varchar(255) NOT NULL,
  `per_club` varchar(255) NOT NULL,
  `per_login` varchar(255) NOT NULL,
  `per_passwd` varchar(255) NOT NULL,
  `per_active` int(11) NOT NULL DEFAULT '0',
  `per_del` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`per_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`per_id`, `per_typ_id`, `per_nom`, `per_prenom`, `per_adresse`, `per_cp`, `per_ville`, `per_tel`, `per_email`, `per_club`, `per_login`, `per_passwd`, `per_active`, `per_del`) VALUES
(1, 1, 'Tergal', 'Micheline', '20 Rue des Alouettes', '94850', 'Villejuif', '0501548545', 'micheline@efrei-bts.fr', 'Tennis', 'micheline', 'micheline', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_sal_id` int(11) NOT NULL,
  `res_per_id` int(11) NOT NULL,
  `res_date` date NOT NULL,
  `res_am_pm` int(11) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `sal_id` int(11) NOT NULL AUTO_INCREMENT,
  `sal_cat_id` int(11) NOT NULL,
  `sal_bat_id` int(11) NOT NULL,
  `sal_etage` varchar(255) NOT NULL,
  `sal_nom` varchar(255) NOT NULL,
  `sal_nb_place_min` int(11) NOT NULL,
  `sal_nb_place_max` int(11) NOT NULL,
  `sal_notes` varchar(255) NOT NULL,
  `sal_del` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`sal_id`, `sal_cat_id`, `sal_bat_id`, `sal_etage`, `sal_nom`, `sal_nb_place_min`, `sal_nb_place_max`, `sal_notes`, `sal_del`) VALUES
(1, 1, 1, 'RDC', 'Daum', 12, 50, 'Machine à café', 0),
(2, 1, 1, 'RDC', 'Gallé', 12, 50, '', 0),
(3, 1, 1, 'RDC', 'Baccarat ', 12, 50, '', 0),
(4, 1, 1, 'RDC', 'Corbin', 12, 50, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `type_personne`
--

CREATE TABLE IF NOT EXISTS `type_personne` (
  `typ_id` int(11) NOT NULL AUTO_INCREMENT,
  `typ_type` varchar(255) NOT NULL,
  `typ_del` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`typ_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `type_personne`
--

INSERT INTO `type_personne` (`typ_id`, `typ_type`, `typ_del`) VALUES
(1, 'Adhérent', 0),
(2, 'Personnel', 0),
(3, 'Visiteur', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
