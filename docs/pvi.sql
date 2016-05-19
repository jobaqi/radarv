-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 mei 2016 om 11:10
-- Serverversie: 10.1.13-MariaDB
-- PHP-versie: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pvi`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contracten`
--

CREATE TABLE `contracten` (
  `id` int(11) NOT NULL,
  `wekenInzetbaar` int(11) DEFAULT NULL,
  `aanstellingsOmvangWTF` float DEFAULT NULL,
  `functie_id` int(11) NOT NULL,
  `medewerker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `contracten`
--

INSERT INTO `contracten` (`id`, `wekenInzetbaar`, `aanstellingsOmvangWTF`, `functie_id`, `medewerker_id`) VALUES
(1, 40, 1, 4, 1),
(2, 20, 0.8, 3, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `functies`
--

CREATE TABLE `functies` (
  `id` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL,
  `schaal` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `functies`
--

INSERT INTO `functies` (`id`, `naam`, `schaal`) VALUES
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

CREATE TABLE `klassen` (
  `id` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL,
  `opleiding_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `klassen`
--

INSERT INTO `klassen` (`id`, `naam`, `opleiding_id`) VALUES
(1, '4VAOW1A', 1),
(2, '4VAOW3A', 1),
(3, '4VMDR3A', 1),
(4, '4VIBH2A', 2),
(5, '4VIBH3A', 2),
(6, '4VMBI1A', 4),
(7, '4VMBI1B', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerkerregelingen`
--

CREATE TABLE `medewerkerregelingen` (
  `id` int(11) NOT NULL,
  `regeling_id` int(11) NOT NULL,
  `medewerker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `medewerkerregelingen`
--

INSERT INTO `medewerkerregelingen` (`id`, `regeling_id`, `medewerker_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 2, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerkers`
--

CREATE TABLE `medewerkers` (
  `id` int(11) NOT NULL,
  `peopleSoftNummer` int(11) DEFAULT NULL,
  `voornaam` varchar(45) DEFAULT NULL,
  `achternaam` varchar(45) DEFAULT NULL,
  `geboorteDatum` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `medewerkers`
--

INSERT INTO `medewerkers` (`id`, `peopleSoftNummer`, `voornaam`, `achternaam`, `geboorteDatum`, `deleted_at`) VALUES
(1, 103848, 'Vinod', 'Poenai', '2016-05-03', NULL),
(2, 103849, 'Henk', 'Wieling', '2016-05-29', NULL),
(3, 101234, 'Bart', 'Allert', '2016-05-08', NULL),
(4, 101235, 'Quinten', 'van Domselaar', '2016-05-01', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `onderwijstaken`
--

CREATE TABLE `onderwijstaken` (
  `id` int(11) NOT NULL,
  `percentageVoorbereidingNazorg` int(11) DEFAULT NULL,
  `aantalWeken` int(11) DEFAULT NULL,
  `startWeek` int(11) DEFAULT NULL,
  `aantalUrenPerWeek` int(11) DEFAULT NULL,
  `medewerker_id` int(11) NOT NULL,
  `klassen_id` int(11) NOT NULL,
  `vakken_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `onderwijstaken`
--

INSERT INTO `onderwijstaken` (`id`, `percentageVoorbereidingNazorg`, `aantalWeken`, `startWeek`, `aantalUrenPerWeek`, `medewerker_id`, `klassen_id`, `vakken_id`) VALUES
(1, 40, 20, 1, 2, 1, 1, 1),
(2, 40, 20, 21, 4, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opleidingen`
--

CREATE TABLE `opleidingen` (
  `id` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `opleidingen`
--

INSERT INTO `opleidingen` (`id`, `naam`) VALUES
(1, 'ApplicatieOntwikkelaar'),
(2, 'ICT Beheerder'),
(3, 'NetwerkBeheer'),
(4, 'Medewerker Beheer ICT');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `regelingen`
--

CREATE TABLE `regelingen` (
  `id` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL,
  `urenEenWTFEenJaar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `regelingen`
--

INSERT INTO `regelingen` (`id`, `naam`, `urenEenWTFEenJaar`) VALUES
(1, 'ind. desk. bevordering', 59),
(2, 'BAPO', 24),
(3, 'Senioren', 28);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taken`
--

CREATE TABLE `taken` (
  `id` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `taken`
--

INSERT INTO `taken` (`id`, `naam`) VALUES
(1, 'Kerndocent'),
(2, 'Natschool'),
(3, 'Info- ouder- opendag/avond'),
(4, 'Onderwijsontwikkeling');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `takenmedewerkers`
--

CREATE TABLE `takenmedewerkers` (
  `id` int(11) NOT NULL,
  `startWeek` int(11) DEFAULT NULL,
  `aantalWeken` int(11) DEFAULT NULL,
  `urenOpWeekbasis` int(11) DEFAULT NULL,
  `taken_id` int(11) NOT NULL,
  `medewerker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `takenmedewerkers`
--

INSERT INTO `takenmedewerkers` (`id`, `startWeek`, `aantalWeken`, `urenOpWeekbasis`, `taken_id`, `medewerker_id`) VALUES
(2, 1, 40, 8, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vakken`
--

CREATE TABLE `vakken` (
  `id` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `vakken`
--

INSERT INTO `vakken` (`id`, `naam`) VALUES
(1, 'Database'),
(2, 'Javascript'),
(3, 'C#'),
(4, 'UML'),
(5, 'Server 2012'),
(6, 'ITIL'),
(7, 'Hardware'),
(8, 'Helpdesk met Topdesk');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contracten`
--
ALTER TABLE `contracten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_contract_functie1_idx` (`functie_id`),
  ADD KEY `fk_contract_fedewerker1_idx` (`medewerker_id`),
  ADD KEY `medewerker_id` (`medewerker_id`);

--
-- Indexen voor tabel `functies`
--
ALTER TABLE `functies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `klassen`
--
ALTER TABLE `klassen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_klassen_opleiding1_idx` (`opleiding_id`);

--
-- Indexen voor tabel `medewerkerregelingen`
--
ALTER TABLE `medewerkerregelingen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_medewerkerRegeling_regelingen1_idx` (`regeling_id`),
  ADD KEY `fk_medewerkerRegeling_medewerker1_idx` (`medewerker_id`);

--
-- Indexen voor tabel `medewerkers`
--
ALTER TABLE `medewerkers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `onderwijstaken`
--
ALTER TABLE `onderwijstaken`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_onderwijstaak_medewerker1_idx` (`medewerker_id`),
  ADD KEY `fk_onderwijstaak_klassen1_idx` (`klassen_id`),
  ADD KEY `fk_onderwijstaak_vakken1_idx` (`vakken_id`);

--
-- Indexen voor tabel `opleidingen`
--
ALTER TABLE `opleidingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `regelingen`
--
ALTER TABLE `regelingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `taken`
--
ALTER TABLE `taken`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `takenmedewerkers`
--
ALTER TABLE `takenmedewerkers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_takenMedewerker_Taken1_idx` (`taken_id`),
  ADD KEY `fk_takenMedewerker_Medewerker1_idx` (`medewerker_id`);

--
-- Indexen voor tabel `vakken`
--
ALTER TABLE `vakken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contracten`
--
ALTER TABLE `contracten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `functies`
--
ALTER TABLE `functies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT voor een tabel `klassen`
--
ALTER TABLE `klassen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT voor een tabel `medewerkerregelingen`
--
ALTER TABLE `medewerkerregelingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `medewerkers`
--
ALTER TABLE `medewerkers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `onderwijstaken`
--
ALTER TABLE `onderwijstaken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `opleidingen`
--
ALTER TABLE `opleidingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `regelingen`
--
ALTER TABLE `regelingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `taken`
--
ALTER TABLE `taken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `takenmedewerkers`
--
ALTER TABLE `takenmedewerkers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `vakken`
--
ALTER TABLE `vakken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
-- Beperkingen voor tabel `takenmedewerkers`
--
ALTER TABLE `takenmedewerkers`
  ADD CONSTRAINT `fk_takenMedewerker_Medewerker1` FOREIGN KEY (`medewerker_id`) REFERENCES `medewerkers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_takenMedewerker_Taken1` FOREIGN KEY (`taken_id`) REFERENCES `taken` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
