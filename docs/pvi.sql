-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Gegenereerd op: 11 apr 2016 om 07:21
-- Serverversie: 5.6.28
-- PHP-versie: 5.5.31

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
-- Tabelstructuur voor tabel `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `study_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contractrulings`
--

CREATE TABLE `contractrulings` (
  `id` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `contract_id` int(11) NOT NULL,
  `rulings_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `total_hours_WTF` int(11) NOT NULL,
  `weeks_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employeeclasssubjects`
--

CREATE TABLE `employeeclasssubjects` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `percentage_preparation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `function_id` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employeetasks`
--

CREATE TABLE `employeetasks` (
  `id` int(11) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `functions`
--

CREATE TABLE `functions` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `scale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `quarters`
--

CREATE TABLE `quarters` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rulings`
--

CREATE TABLE `rulings` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studies`
--

CREATE TABLE `studies` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subjectquarters`
--

CREATE TABLE `subjectquarters` (
  `id` int(11) NOT NULL,
  `weeks` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `quarter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taskquarters`
--

CREATE TABLE `taskquarters` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `quarter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_class_study1_idx` (`study_id`);

--
-- Indexen voor tabel `contractrulings`
--
ALTER TABLE `contractrulings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_contractRulings_contract1_idx` (`contract_id`),
  ADD KEY `fk_contractRulings_rulings1_idx` (`rulings_id`);

--
-- Indexen voor tabel `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `employeeclasssubjects`
--
ALTER TABLE `employeeclasssubjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employeeClassSubject_subject1_idx` (`subject_id`),
  ADD KEY `fk_employeeClassSubject_class1_idx` (`class_id`),
  ADD KEY `fk_employeeClassSubject_Employee1_idx` (`Employee_id`);

--
-- Indexen voor tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Employee_function_idx` (`function_id`),
  ADD KEY `fk_Employee_contract1_idx` (`contract_id`);

--
-- Indexen voor tabel `employeetasks`
--
ALTER TABLE `employeetasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employeeTask_Employee1_idx` (`Employee_id`),
  ADD KEY `fk_employeeTask_task1_idx` (`task_id`);

--
-- Indexen voor tabel `functions`
--
ALTER TABLE `functions`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `quarters`
--
ALTER TABLE `quarters`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `rulings`
--
ALTER TABLE `rulings`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `subjectquarters`
--
ALTER TABLE `subjectquarters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_subjectQuarter_subject1_idx` (`subject_id`),
  ADD KEY `fk_subjectQuarter_quarter1_idx` (`quarter_id`);

--
-- Indexen voor tabel `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `taskquarters`
--
ALTER TABLE `taskquarters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_taskQuarter_task1_idx` (`task_id`),
  ADD KEY `fk_taskQuarter_quarter1_idx` (`quarter_id`);

--
-- Indexen voor tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `contractrulings`
--
ALTER TABLE `contractrulings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `employeeclasssubjects`
--
ALTER TABLE `employeeclasssubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `employeetasks`
--
ALTER TABLE `employeetasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `functions`
--
ALTER TABLE `functions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `quarters`
--
ALTER TABLE `quarters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `rulings`
--
ALTER TABLE `rulings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `subjectquarters`
--
ALTER TABLE `subjectquarters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `taskquarters`
--
ALTER TABLE `taskquarters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `fk_employeeClassSubject_Employee1` FOREIGN KEY (`Employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employeeClassSubject_class1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
