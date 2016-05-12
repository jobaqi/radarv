-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 12 mei 2016 om 08:34
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pvi`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `study_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_class_study1_idx` (`study_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contractrulings`
--

CREATE TABLE IF NOT EXISTS `contractrulings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hours` int(11) NOT NULL,
  `contract_id` int(11) NOT NULL,
  `rulings_id` int(11) NOT NULL,
  `calculated_hours` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contractRulings_contract1_idx` (`contract_id`),
  KEY `fk_contractRulings_rulings1_idx` (`rulings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contracts`
--

CREATE TABLE IF NOT EXISTS `contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_hours_WTF` float NOT NULL,
  `weeks_available` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `contracts`
--

INSERT INTO `contracts` (`id`, `total_hours_WTF`, `weeks_available`) VALUES
(4, 0.5, 20);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employeeclasssubjects`
--

CREATE TABLE IF NOT EXISTS `employeeclasssubjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `percentage_preparation` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employeeClassSubject_subject1_idx` (`subject_id`),
  KEY `fk_employeeClassSubject_class1_idx` (`class_id`),
  KEY `fk_employeeClassSubject_Employee1_idx` (`Employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Peoplesoft_nummer` int(12) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `function_id` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Employee_function_idx` (`function_id`),
  KEY `fk_Employee_contract1_idx` (`contract_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `employees`
--

INSERT INTO `employees` (`id`, `Peoplesoft_nummer`, `first_name`, `last_name`, `date_of_birth`, `function_id`, `contract_id`, `deleted_at`) VALUES
(3, 0, 'Vinod', 'Peonai', '2016-04-04', 1, 4, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employeetasks`
--

CREATE TABLE IF NOT EXISTS `employeetasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employeeTask_Employee1_idx` (`Employee_id`),
  KEY `fk_employeeTask_task1_idx` (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `functions`
--

CREATE TABLE IF NOT EXISTS `functions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `scale` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `functions`
--

INSERT INTO `functions` (`id`, `name`, `scale`) VALUES
(1, 'Leraar', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `quarters`
--

CREATE TABLE IF NOT EXISTS `quarters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rulings`
--

CREATE TABLE IF NOT EXISTS `rulings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `formula` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `rulings`
--

INSERT INTO `rulings` (`id`, `name`, `formula`) VALUES
(1, 'Deskundigheidsbevordering', '$hours * $weken * (88)'),
(2, 'BAPU', '24');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studies`
--

CREATE TABLE IF NOT EXISTS `studies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subjectquarters`
--

CREATE TABLE IF NOT EXISTS `subjectquarters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weeks` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `quarter_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subjectQuarter_subject1_idx` (`subject_id`),
  KEY `fk_subjectQuarter_quarter1_idx` (`quarter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `hours` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taskquarters`
--

CREATE TABLE IF NOT EXISTS `taskquarters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `quarter_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_taskQuarter_task1_idx` (`task_id`),
  KEY `fk_taskQuarter_quarter1_idx` (`quarter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `hours` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `fk_class_study1` FOREIGN KEY (`study_id`) REFERENCES `studies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `contractrulings`
--
ALTER TABLE `contractrulings`
  ADD CONSTRAINT `fk_contractRulings_contract1` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contractRulings_rulings1` FOREIGN KEY (`rulings_id`) REFERENCES `rulings` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `employeeclasssubjects`
--
ALTER TABLE `employeeclasssubjects`
  ADD CONSTRAINT `fk_employeeClassSubject_class1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employeeClassSubject_Employee1` FOREIGN KEY (`Employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employeeClassSubject_subject1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_Employee_contract1` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Employee_function` FOREIGN KEY (`function_id`) REFERENCES `functions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `employeetasks`
--
ALTER TABLE `employeetasks`
  ADD CONSTRAINT `fk_employeeTask_Employee1` FOREIGN KEY (`Employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employeeTask_task1` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `subjectquarters`
--
ALTER TABLE `subjectquarters`
  ADD CONSTRAINT `fk_subjectQuarter_quarter1` FOREIGN KEY (`quarter_id`) REFERENCES `quarters` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_subjectQuarter_subject1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `taskquarters`
--
ALTER TABLE `taskquarters`
  ADD CONSTRAINT `fk_taskQuarter_quarter1` FOREIGN KEY (`quarter_id`) REFERENCES `quarters` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_taskQuarter_task1` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
