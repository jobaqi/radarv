-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 06 jun 2016 om 12:29
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
-- Tabelstructuur voor tabel `contracten`
--

CREATE TABLE IF NOT EXISTS `contracten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wekenInzetbaar` int(11) DEFAULT NULL,
  `aanstellingsOmvangWTF` float DEFAULT NULL,
  `functie_id` int(11) NOT NULL,
  `medewerker_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contract_functie1_idx` (`functie_id`),
  KEY `fk_contract_fedewerker1_idx` (`medewerker_id`),
  KEY `medewerker_id` (`medewerker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `contracten`
--

INSERT INTO `contracten` (`id`, `wekenInzetbaar`, `aanstellingsOmvangWTF`, `functie_id`, `medewerker_id`, `created_at`, `updated_at`) VALUES
(5, 40, 1, 9, 7, '2016-06-02', '2016-06-02'),
(6, 40, 2, 8, 8, '2016-06-03', '2016-06-03');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `functies`
--

CREATE TABLE IF NOT EXISTS `functies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  `schaal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Gegevens worden geëxporteerd voor tabel `functies`
--

INSERT INTO `functies` (`id`, `naam`, `schaal`) VALUES
(8, 'Dictator', '17'),
(9, 'Deocent', '25');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klassen`
--

CREATE TABLE IF NOT EXISTS `klassen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  `opleiding_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_klassen_opleiding1_idx` (`opleiding_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Gegevens worden geëxporteerd voor tabel `klassen`
--

INSERT INTO `klassen` (`id`, `naam`, `opleiding_id`, `created_at`, `updated_at`) VALUES
(8, '4VAOQ3A', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'fjshdfsd', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'test', 5, '2016-06-03 13:27:21', '2016-06-03 13:27:21'),
(19, 'test', 5, '2016-06-03 13:28:11', '2016-06-03 13:28:11'),
(20, '5O78D', 6, '2016-06-03 13:36:57', '2016-06-03 13:36:57'),
(21, '4VAOW3A', 5, '2016-06-06 12:15:18', '2016-06-06 12:15:18');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerkerregelingen`
--

CREATE TABLE IF NOT EXISTS `medewerkerregelingen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regeling_id` int(11) NOT NULL,
  `medewerker_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medewerkerRegeling_regelingen1_idx` (`regeling_id`),
  KEY `fk_medewerkerRegeling_medewerker1_idx` (`medewerker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Gegevens worden geëxporteerd voor tabel `medewerkerregelingen`
--

INSERT INTO `medewerkerregelingen` (`id`, `regeling_id`, `medewerker_id`) VALUES
(7, 4, 7),
(8, 4, 8);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerkers`
--

CREATE TABLE IF NOT EXISTS `medewerkers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peopleSoftNummer` int(11) NOT NULL,
  `voornaam` varchar(45) NOT NULL,
  `achternaam` varchar(45) NOT NULL,
  `geboorteDatum` date NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Gegevens worden geëxporteerd voor tabel `medewerkers`
--

INSERT INTO `medewerkers` (`id`, `peopleSoftNummer`, `voornaam`, `achternaam`, `geboorteDatum`, `password`, `created_at`, `updated_at`) VALUES
(7, 1015454, 'Bart', 'Allertz', '2016-01-31', '$2y$12$AOTXLCmaBHHlYDwDPJkwkOyBcg26Gjche3x6Di87QMtK1qk6DyX12', '2016-06-02', '2016-06-02'),
(8, 10102665, 'eqwe', 'wqeqw', '2016-01-31', '$2y$12$JdNjObck/hNsH/YSLK6iFuyabU.qk7cLfC0VavGaByBEzc2on1gTO', '2016-06-03', '2016-06-03');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `onderwijstaken`
--

INSERT INTO `onderwijstaken` (`id`, `percentageVoorbereidingNazorg`, `aantalWeken`, `startWeek`, `aantalUrenPerWeek`, `medewerker_id`, `klassen_id`, `vakken_id`) VALUES
(3, 40, 20, 1, 20, 7, 8, 9);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opleidingen`
--

CREATE TABLE IF NOT EXISTS `opleidingen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `opleidingen`
--

INSERT INTO `opleidingen` (`id`, `naam`) VALUES
(5, 'Applicatie Ontwikkelaar'),
(6, 'Media developer');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `regelingen`
--

CREATE TABLE IF NOT EXISTS `regelingen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  `urenEenWTFEenJaar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `regelingen`
--

INSERT INTO `regelingen` (`id`, `naam`, `urenEenWTFEenJaar`) VALUES
(4, 'Bioloog', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taken`
--

CREATE TABLE IF NOT EXISTS `taken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `taken`
--

INSERT INTO `taken` (`id`, `naam`) VALUES
(5, 'Natschool'),
(6, 'Helpdesk');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `takenmedewerker`
--

CREATE TABLE IF NOT EXISTS `takenmedewerker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startWeek` int(11) DEFAULT NULL,
  `aantalWeken` int(11) DEFAULT NULL,
  `urenOpWeekbasis` int(11) DEFAULT NULL,
  `taken_id` int(11) NOT NULL,
  `medewerker_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_takenMedewerker_Taken1_idx` (`taken_id`),
  KEY `fk_takenMedewerker_Medewerker1_idx` (`medewerker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `takenmedewerker`
--

INSERT INTO `takenmedewerker` (`id`, `startWeek`, `aantalWeken`, `urenOpWeekbasis`, `taken_id`, `medewerker_id`) VALUES
(3, 1, 10, 20, 5, 7),
(4, 1, 30, 40, 5, 7);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vakken`
--

CREATE TABLE IF NOT EXISTS `vakken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  `vakCode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Gegevens worden geëxporteerd voor tabel `vakken`
--

INSERT INTO `vakken` (`id`, `naam`, `vakCode`) VALUES
(9, 'Applicatie', '5d4f5s4d5f4s');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `contracten`
--
ALTER TABLE `contracten`
  ADD CONSTRAINT `contracten_ibfk_1` FOREIGN KEY (`medewerker_id`) REFERENCES `medewerkers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_contract_functie1` FOREIGN KEY (`functie_id`) REFERENCES `functies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `klassen`
--
ALTER TABLE `klassen`
  ADD CONSTRAINT `fk_Klassen_Opleiding1` FOREIGN KEY (`opleiding_id`) REFERENCES `opleidingen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `medewerkerregelingen`
--
ALTER TABLE `medewerkerregelingen`
  ADD CONSTRAINT `fk_MedewerkerRegeling_Medewerker1` FOREIGN KEY (`medewerker_id`) REFERENCES `medewerkers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_MedewerkerRegeling_Regelingen1` FOREIGN KEY (`regeling_id`) REFERENCES `regelingen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `onderwijstaken`
--
ALTER TABLE `onderwijstaken`
  ADD CONSTRAINT `fk_Onderwijstaak_Klassen1` FOREIGN KEY (`klassen_id`) REFERENCES `klassen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Onderwijstaak_Medewerker1` FOREIGN KEY (`medewerker_id`) REFERENCES `medewerkers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Onderwijstaak_Vakken1` FOREIGN KEY (`vakken_id`) REFERENCES `vakken` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `takenmedewerker`
--
ALTER TABLE `takenmedewerker`
  ADD CONSTRAINT `fk_takenMedewerker_Medewerker1` FOREIGN KEY (`medewerker_id`) REFERENCES `medewerkers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_takenMedewerker_Taken1` FOREIGN KEY (`taken_id`) REFERENCES `taken` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
