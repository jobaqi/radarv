-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 12 mei 2016 om 13:42
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

--
-- Gegevens worden geëxporteerd voor tabel `functie`
--

INSERT INTO `functies` (`id`, `naam`, `schaal`) VALUES
(1, 'Leraar in opleiding', NULL),
(2, 'onderwijsassistent', '5'),
(3, 'instructeur', '7'),
(4, 'begeleider', '9'),
(5, 'Docent LB', '10'),
(6, 'Senior Docent LC', '11'),
(7, 'Expert Docent LD', '12');

--
-- Gegevens worden geëxporteerd voor tabel `medewerker`
--

INSERT INTO `medewerkers` (`id`, `peopleSoftNummer`, `voornaam`, `achternaam`, `geboorteDatum`, `verwijderdOp`) VALUES
(1, 103848, 'Vinod', 'Poenai', '2016-05-03', NULL),
(2, 103849, 'Henk', 'Wieling', '2016-05-29', NULL),
(3, 101234, 'Bart', 'Allert', '2016-05-08', NULL),
(4, 101235, 'Quinten', 'van Domselaar', '2016-05-01', NULL);

--
-- Gegevens worden geëxporteerd voor tabel `contract`
--

INSERT INTO `contracten` (`id`, `wekenInzetbaar`, `aanstellingsOmvangWTF`, `functie_id`, `medewerker_id`) VALUES
(1, 40, 1, 4, 1),
(2, 20, 0.8, 3, 2);

--
-- Gegevens worden geëxporteerd voor tabel `regelingen`
--

INSERT INTO `regelingen` (`id`, `naam`, `urenEenWTFEenJaar`) VALUES
(1, 'ind. desk. bevordering', 59),
(2, 'BAPO', 24),
(3, 'Senioren', 28);

--
-- Gegevens worden geëxporteerd voor tabel `medewerkerregeling`
--

INSERT INTO `medewerkerregelingen` (`id`, `regelingen_id`, `medewerker_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 2, 3);

--
-- Gegevens worden geëxporteerd voor tabel `opleiding`
--

INSERT INTO `opleidingen` (`id`, `naam`) VALUES
(1, 'ApplicatieOntwikkelaar'),
(2, 'ICT Beheerder'),
(3, 'NetwerkBeheer'),
(4, 'Medewerker Beheer ICT');

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

--
-- Gegevens worden geëxporteerd voor tabel `taken`
--

INSERT INTO `taken` (`id`, `naam`) VALUES
(1, 'Kerndocent'),
(2, 'Natschool'),
(3, 'Info- ouder- opendag/avond'),
(4, 'Onderwijsontwikkeling');

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
-- Gegevens worden geëxporteerd voor tabel `takenmedewerker`
--

INSERT INTO `takenmedewerkers` (`id`, `startWeek`, `aantalWeken`, `urenOpWeekbasis`, `taken_id`, `medewerker_id`) VALUES
(2, 1, 40, 8, 1, 1);

--
-- Gegevens worden geëxporteerd voor tabel `onderwijstaak`
--

INSERT INTO `onderwijstaken` (`id`, `percentageVoorbereidingNazorg`, `aantalWeken`, `startWeek`, `aantalUrenPerWeek`, `medewerker_id`, `klassen_id`, `vakken_id`) VALUES
(1, 40, 20, 1, 2, 1, 1, 1),
(2, 40, 20, 21, 4, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
