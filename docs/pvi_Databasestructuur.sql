-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 13 mei 2016 om 12:13
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `pvi`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contracts`
--

CREATE TABLE IF NOT EXISTS `contracten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wekenInzetbaar` int(11) DEFAULT NULL,
  `aanstellingsOmvangWTF` float DEFAULT NULL,
  `functie_id` int(11) NOT NULL,
  `medewerker_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contract_functie1_idx` (`functie_id`),
  KEY `fk_contract_fedewerker1_idx` (`medewerker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `functies`
--

CREATE TABLE IF NOT EXISTS `functies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  `schaal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klassen`
--

CREATE TABLE IF NOT EXISTS `klassen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  `opleiding_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_klassen_opleiding1_idx` (`opleiding_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerkerregeling`
--

CREATE TABLE IF NOT EXISTS `medewerkerregelingen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regelingen_id` int(11) NOT NULL,
  `medewerker_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medewerkerRegeling_regelingen1_idx` (`regelingen_id`),
  KEY `fk_medewerkerRegeling_medewerker1_idx` (`medewerker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerkers`
--

CREATE TABLE IF NOT EXISTS `medewerkers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peopleSoftNummer` int(11) DEFAULT NULL,
  `voornaam` varchar(45) DEFAULT NULL,
  `achternaam` varchar(45) DEFAULT NULL,
  `geboorteDatum` date DEFAULT NULL,
  `verwijderdOp` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `onderwijstaken`
--

CREATE TABLE IF NOT EXISTS `onderwijstaken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `percentageVoorbereidingNazorg` int(11) DEFAULT NULL,
  `aantalWeken` int(11) DEFAULT NULL,
  `startWeek` int(11) DEFAULT NULL,
  `aantalUrenPerWeek` int(11) DEFAULT NULL,
  `medewerker_id` int(11) NOT NULL,
  `klassen_id` int(11) NOT NULL,
  `vakken_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_onderwijstaak_medewerker1_idx` (`medewerker_id`),
  KEY `fk_onderwijstaak_klassen1_idx` (`klassen_id`),
  KEY `fk_onderwijstaak_vakken1_idx` (`vakken_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opleidingen`
--

CREATE TABLE IF NOT EXISTS `opleidingen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `regelingen`
--

CREATE TABLE IF NOT EXISTS `regelingen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  `urenEenWTFEenJaar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taken`
--

CREATE TABLE IF NOT EXISTS `taken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `takenmedewerker`
--

CREATE TABLE IF NOT EXISTS `takenmedewerkers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startWeek` int(11) DEFAULT NULL,
  `aantalWeken` int(11) DEFAULT NULL,
  `urenOpWeekbasis` int(11) DEFAULT NULL,
  `taken_id` int(11) NOT NULL,
  `medewerker_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_takenMedewerker_Taken1_idx` (`taken_id`),
  KEY `fk_takenMedewerker_Medewerker1_idx` (`medewerker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vakken`
--

CREATE TABLE IF NOT EXISTS `vakken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `contracts`
--
ALTER TABLE `contracten`
  ADD CONSTRAINT `fk_contract_functie1` FOREIGN KEY (`functie_id`) REFERENCES `functies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contract_medewerker1` FOREIGN KEY (`medewerker_id`) REFERENCES `medewerkers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `klassen`
--
ALTER TABLE `klassen`
  ADD CONSTRAINT `fk_Klassen_Opleiding1` FOREIGN KEY (`Opleiding_id`) REFERENCES `opleidingen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `medewerkerregeling`
--
ALTER TABLE `medewerkerregelingen`
  ADD CONSTRAINT `fk_MedewerkerRegeling_Medewerker1` FOREIGN KEY (`Medewerker_id`) REFERENCES `medewerkers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_MedewerkerRegeling_Regelingen1` FOREIGN KEY (`Regelingen_id`) REFERENCES `regelingen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `onderwijstaken`
--
ALTER TABLE `onderwijstaken`
  ADD CONSTRAINT `fk_Onderwijstaak_Klassen1` FOREIGN KEY (`Klassen_id`) REFERENCES `klassen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Onderwijstaak_Medewerker1` FOREIGN KEY (`Medewerker_id`) REFERENCES `medewerkers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Onderwijstaak_Vakken1` FOREIGN KEY (`Vakken_id`) REFERENCES `vakken` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `takenmedewerker`
--
ALTER TABLE `takenmedewerkers`
  ADD CONSTRAINT `fk_takenMedewerker_Medewerker1` FOREIGN KEY (`Medewerker_id`) REFERENCES `medewerkers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_takenMedewerker_Taken1` FOREIGN KEY (`Taken_id`) REFERENCES `taken` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
