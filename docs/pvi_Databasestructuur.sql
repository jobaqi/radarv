-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 13 mei 2016 om 09:38
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
-- Tabelstructuur voor tabel `contract`
--

CREATE TABLE IF NOT EXISTS `contract` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `WekenInzetbaar` int(11) DEFAULT NULL,
  `AanstellingsOmvangWTF` float DEFAULT NULL,
  `Functie_id` int(11) NOT NULL,
  `Medewerker_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Contract_Functie1_idx` (`Functie_id`),
  KEY `fk_Contract_Medewerker1_idx` (`Medewerker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `contract`
--

INSERT INTO `contract` (`id`, `WekenInzetbaar`, `AanstellingsOmvangWTF`, `Functie_id`, `Medewerker_id`) VALUES
(1, 40, 1, 4, 1),
(2, 20, 0.8, 3, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `functie`
--

CREATE TABLE IF NOT EXISTS `functie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  `Schaal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Gegevens worden geëxporteerd voor tabel `functie`
--

INSERT INTO `functie` (`id`, `Naam`, `Schaal`) VALUES
(1, 'Leraar in opleiding', NULL),
(2, 'onderwijsassistent', '5'),
(3, 'instructeur', '7'),
(4, 'begeleider', '9'),
(5, 'Docent LB', '10'),
(6, 'Senior Docent LC', '11'),
(7, 'Expert Docent LD', '12');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klassen`
--

CREATE TABLE IF NOT EXISTS `klassen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  `Opleiding_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Klassen_Opleiding1_idx` (`Opleiding_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Gegevens worden geëxporteerd voor tabel `klassen`
--

INSERT INTO `klassen` (`id`, `Naam`, `Opleiding_id`) VALUES
(1, '4VAOW1A', 1),
(2, '4VAOW3A', 1),
(3, '4VMDR3A', 1),
(4, '4VIBH2A', 2),
(5, '4VIBH3A', 2),
(6, '4VMBI1A', 4),
(7, '4VMBI1B', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerker`
--

CREATE TABLE IF NOT EXISTS `medewerker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PeopleSoftNummer` int(11) DEFAULT NULL,
  `Voornaam` varchar(45) DEFAULT NULL,
  `Achternaam` varchar(45) DEFAULT NULL,
  `GeboorteDatum` date DEFAULT NULL,
  `VerwijderdOp` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `medewerker`
--

INSERT INTO `medewerker` (`id`, `PeopleSoftNummer`, `Voornaam`, `Achternaam`, `GeboorteDatum`, `VerwijderdOp`) VALUES
(1, 103848, 'Vinod', 'Poenai', '2016-05-03', NULL),
(2, 103849, 'Henk', 'Wieling', '2016-05-29', NULL),
(3, 101234, 'Bart', 'Allert', '2016-05-08', NULL),
(4, 101235, 'Quinten', 'van Domselaar', '2016-05-01', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerkerregeling`
--

CREATE TABLE IF NOT EXISTS `medewerkerregeling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Regelingen_id` int(11) NOT NULL,
  `Medewerker_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_MedewerkerRegeling_Regelingen1_idx` (`Regelingen_id`),
  KEY `fk_MedewerkerRegeling_Medewerker1_idx` (`Medewerker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `medewerkerregeling`
--

INSERT INTO `medewerkerregeling` (`id`, `Regelingen_id`, `Medewerker_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 2, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `onderwijstaak`
--

CREATE TABLE IF NOT EXISTS `onderwijstaak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PercentageVoorbereidingNazorg` int(11) DEFAULT NULL,
  `AantalWeken` int(11) DEFAULT NULL,
  `StartWeek` int(11) DEFAULT NULL,
  `AantalUrenPerWeek` int(11) DEFAULT NULL,
  `Medewerker_id` int(11) NOT NULL,
  `Klassen_id` int(11) NOT NULL,
  `Vakken_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Onderwijstaak_Medewerker1_idx` (`Medewerker_id`),
  KEY `fk_Onderwijstaak_Klassen1_idx` (`Klassen_id`),
  KEY `fk_Onderwijstaak_Vakken1_idx` (`Vakken_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `onderwijstaak`
--

INSERT INTO `onderwijstaak` (`id`, `PercentageVoorbereidingNazorg`, `AantalWeken`, `StartWeek`, `AantalUrenPerWeek`, `Medewerker_id`, `Klassen_id`, `Vakken_id`) VALUES
(1, 40, 20, 1, 2, 1, 1, 1),
(2, 40, 20, 21, 4, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opleiding`
--

CREATE TABLE IF NOT EXISTS `opleiding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `opleiding`
--

INSERT INTO `opleiding` (`id`, `Naam`) VALUES
(1, 'ApplicatieOntwikkelaar'),
(2, 'ICT Beheerder'),
(3, 'NetwerkBeheer'),
(4, 'Medewerker Beheer ICT');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `regelingen`
--

CREATE TABLE IF NOT EXISTS `regelingen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  `Uren1WTF1Jaar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `regelingen`
--

INSERT INTO `regelingen` (`id`, `Naam`, `Uren1WTF1Jaar`) VALUES
(1, 'ind. desk. bevordering', 59),
(2, 'BAPO', 24),
(3, 'Senioren', 28);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taken`
--

CREATE TABLE IF NOT EXISTS `taken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `taken`
--

INSERT INTO `taken` (`id`, `Naam`) VALUES
(1, 'Kerndocent'),
(2, 'Natschool'),
(3, 'Info- ouder- opendag/avond'),
(4, 'Onderwijsontwikkeling');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `takenmedewerker`
--

CREATE TABLE IF NOT EXISTS `takenmedewerker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StartWeek` int(11) DEFAULT NULL,
  `AantalWeken` int(11) DEFAULT NULL,
  `UrenOpWeekbasis` int(11) DEFAULT NULL,
  `Taken_id` int(11) NOT NULL,
  `Medewerker_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_takenMedewerker_Taken1_idx` (`Taken_id`),
  KEY `fk_takenMedewerker_Medewerker1_idx` (`Medewerker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `takenmedewerker`
--

INSERT INTO `takenmedewerker` (`id`, `StartWeek`, `AantalWeken`, `UrenOpWeekbasis`, `Taken_id`, `Medewerker_id`) VALUES
(2, 1, 40, 8, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vakken`
--

CREATE TABLE IF NOT EXISTS `vakken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Gegevens worden geëxporteerd voor tabel `vakken`
--

INSERT INTO `vakken` (`id`, `Naam`) VALUES
(1, 'Database'),
(2, 'Javascript'),
(3, 'C#'),
(4, 'UML'),
(5, 'Server 2012'),
(6, 'ITIL'),
(7, 'Hardware'),
(8, 'Helpdesk met Topdesk');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `fk_Contract_Functie1` FOREIGN KEY (`Functie_id`) REFERENCES `functie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contract_Medewerker1` FOREIGN KEY (`Medewerker_id`) REFERENCES `medewerker` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `klassen`
--
ALTER TABLE `klassen`
  ADD CONSTRAINT `fk_Klassen_Opleiding1` FOREIGN KEY (`Opleiding_id`) REFERENCES `opleiding` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `medewerkerregeling`
--
ALTER TABLE `medewerkerregeling`
  ADD CONSTRAINT `fk_MedewerkerRegeling_Medewerker1` FOREIGN KEY (`Medewerker_id`) REFERENCES `medewerker` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_MedewerkerRegeling_Regelingen1` FOREIGN KEY (`Regelingen_id`) REFERENCES `regelingen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `onderwijstaak`
--
ALTER TABLE `onderwijstaak`
  ADD CONSTRAINT `fk_Onderwijstaak_Klassen1` FOREIGN KEY (`Klassen_id`) REFERENCES `klassen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Onderwijstaak_Medewerker1` FOREIGN KEY (`Medewerker_id`) REFERENCES `medewerker` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Onderwijstaak_Vakken1` FOREIGN KEY (`Vakken_id`) REFERENCES `vakken` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `takenmedewerker`
--
ALTER TABLE `takenmedewerker`
  ADD CONSTRAINT `fk_takenMedewerker_Medewerker1` FOREIGN KEY (`Medewerker_id`) REFERENCES `medewerker` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_takenMedewerker_Taken1` FOREIGN KEY (`Taken_id`) REFERENCES `taken` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
