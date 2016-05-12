-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema pvi
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pvi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pvi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `pvi` ;

-- -----------------------------------------------------
-- Table `pvi`.`Medewerker`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`Medewerker` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `PeopleSoftNummer` INT NULL,
  `Voornaam` VARCHAR(45) NULL,
  `Achternaam` VARCHAR(45) NULL,
  `GeboorteDatum` DATE NULL,
  `VerwijderdOp` DATE NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pvi`.`Functie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`Functie` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Naam` VARCHAR(45) NULL,
  `Schaal` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pvi`.`Contract`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`Contract` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `WekenInzetbaar` INT NULL,
  `AanstellingsOmvangWTF` FLOAT NULL,
  `Functie_id` INT NOT NULL,
  `Medewerker_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Contract_Functie1_idx` (`Functie_id` ASC),
  INDEX `fk_Contract_Medewerker1_idx` (`Medewerker_id` ASC),
  CONSTRAINT `fk_Contract_Functie1`
    FOREIGN KEY (`Functie_id`)
    REFERENCES `pvi`.`Functie` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contract_Medewerker1`
    FOREIGN KEY (`Medewerker_id`)
    REFERENCES `pvi`.`Medewerker` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pvi`.`Regelingen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`Regelingen` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Naam` VARCHAR(45) NULL,
  `Uren1WTF1Jaar` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pvi`.`MedewerkerRegeling`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`MedewerkerRegeling` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Regelingen_id` INT NOT NULL,
  `Medewerker_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_MedewerkerRegeling_Regelingen1_idx` (`Regelingen_id` ASC),
  INDEX `fk_MedewerkerRegeling_Medewerker1_idx` (`Medewerker_id` ASC),
  CONSTRAINT `fk_MedewerkerRegeling_Regelingen1`
    FOREIGN KEY (`Regelingen_id`)
    REFERENCES `pvi`.`Regelingen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MedewerkerRegeling_Medewerker1`
    FOREIGN KEY (`Medewerker_id`)
    REFERENCES `pvi`.`Medewerker` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pvi`.`Opleiding`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`Opleiding` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Naam` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pvi`.`Klassen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`Klassen` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Naam` VARCHAR(45) NULL,
  `Opleiding_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Klassen_Opleiding1_idx` (`Opleiding_id` ASC),
  CONSTRAINT `fk_Klassen_Opleiding1`
    FOREIGN KEY (`Opleiding_id`)
    REFERENCES `pvi`.`Opleiding` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pvi`.`Taken`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`Taken` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Naam` VARCHAR(45) NULL,
  `UrenOpWeekbasis` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pvi`.`takenMedewerker`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`takenMedewerker` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `StartWeek` INT NULL,
  `AantalWeken` INT NULL,
  `Taken_id` INT NOT NULL,
  `Medewerker_id` INT NOT NULL,
  INDEX `fk_takenMedewerker_Taken1_idx` (`Taken_id` ASC),
  INDEX `fk_takenMedewerker_Medewerker1_idx` (`Medewerker_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_takenMedewerker_Taken1`
    FOREIGN KEY (`Taken_id`)
    REFERENCES `pvi`.`Taken` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_takenMedewerker_Medewerker1`
    FOREIGN KEY (`Medewerker_id`)
    REFERENCES `pvi`.`Medewerker` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pvi`.`Vakken`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`Vakken` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Naam` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pvi`.`Onderwijstaak`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`Onderwijstaak` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `PercentageVoorbereidingNazorg` INT NULL,
  `AantalWeken` INT NULL,
  `StartWeek` INT NULL,
  `AantalUren` INT NULL,
  `Medewerker_id` INT NOT NULL,
  `Klassen_id` INT NOT NULL,
  `Vakken_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Onderwijstaak_Medewerker1_idx` (`Medewerker_id` ASC),
  INDEX `fk_Onderwijstaak_Klassen1_idx` (`Klassen_id` ASC),
  INDEX `fk_Onderwijstaak_Vakken1_idx` (`Vakken_id` ASC),
  CONSTRAINT `fk_Onderwijstaak_Medewerker1`
    FOREIGN KEY (`Medewerker_id`)
    REFERENCES `pvi`.`Medewerker` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Onderwijstaak_Klassen1`
    FOREIGN KEY (`Klassen_id`)
    REFERENCES `pvi`.`Klassen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Onderwijstaak_Vakken1`
    FOREIGN KEY (`Vakken_id`)
    REFERENCES `pvi`.`Vakken` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
