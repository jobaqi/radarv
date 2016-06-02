-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema pvi
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pvi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pvi` DEFAULT CHARACTER SET latin1 ;
-- -----------------------------------------------------
-- Schema new_schema1
-- -----------------------------------------------------
USE `pvi` ;

-- -----------------------------------------------------
-- Table `pvi`.`medewerkers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`medewerkers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `peopleSoftNummer` INT(11) NOT NULL,
  `voornaam` VARCHAR(45) NOT NULL,
  `achternaam` VARCHAR(45) NOT NULL,
  `geboorteDatum` DATE NOT NULL,
  `password` VARCHAR(60) NOT NULL,
  `created_at` DATE NOT NULL,
  `updated_at` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pvi`.`functies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`functies` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL DEFAULT NULL,
  `schaal` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pvi`.`contracten`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`contracten` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `wekenInzetbaar` INT(11) NULL DEFAULT NULL,
  `aanstellingsOmvangWTF` FLOAT NULL DEFAULT NULL,
  `functie_id` INT(11) NOT NULL,
  `medewerker_id` INT(11) NOT NULL,
  `created_at` DATE NOT NULL,
  `updated_at` DATE NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_contract_functie1_idx` (`functie_id` ASC),
  INDEX `fk_contract_fedewerker1_idx` (`medewerker_id` ASC),
  INDEX `medewerker_id` (`medewerker_id` ASC),
  CONSTRAINT `contracten_ibfk_1`
    FOREIGN KEY (`medewerker_id`)
    REFERENCES `pvi`.`medewerkers` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_contract_functie1`
    FOREIGN KEY (`functie_id`)
    REFERENCES `pvi`.`functies` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pvi`.`opleidingen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`opleidingen` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pvi`.`klassen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`klassen` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL DEFAULT NULL,
  `opleiding_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_klassen_opleiding1_idx` (`opleiding_id` ASC),
  CONSTRAINT `fk_Klassen_Opleiding1`
    FOREIGN KEY (`opleiding_id`)
    REFERENCES `pvi`.`opleidingen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pvi`.`regelingen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`regelingen` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL DEFAULT NULL,
  `urenEenWTFEenJaar` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pvi`.`medewerkerregelingen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`medewerkerregelingen` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `regeling_id` INT(11) NOT NULL,
  `medewerker_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_medewerkerRegeling_regelingen1_idx` (`regeling_id` ASC),
  INDEX `fk_medewerkerRegeling_medewerker1_idx` (`medewerker_id` ASC),
  CONSTRAINT `fk_MedewerkerRegeling_Medewerker1`
    FOREIGN KEY (`medewerker_id`)
    REFERENCES `pvi`.`medewerkers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MedewerkerRegeling_Regelingen1`
    FOREIGN KEY (`regeling_id`)
    REFERENCES `pvi`.`regelingen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pvi`.`vakken`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`vakken` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pvi`.`onderwijstaken`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`onderwijstaken` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `percentageVoorbereidingNazorg` INT(11) NULL DEFAULT NULL,
  `aantalWeken` INT(11) NULL DEFAULT NULL,
  `startWeek` INT(11) NULL DEFAULT NULL,
  `aantalUrenPerWeek` INT(11) NULL DEFAULT NULL,
  `medewerker_id` INT(11) NOT NULL,
  `klassen_id` INT(11) NOT NULL,
  `vakken_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_onderwijstaak_medewerker1_idx` (`medewerker_id` ASC),
  INDEX `fk_onderwijstaak_klassen1_idx` (`klassen_id` ASC),
  INDEX `fk_onderwijstaak_vakken1_idx` (`vakken_id` ASC),
  CONSTRAINT `fk_Onderwijstaak_Klassen1`
    FOREIGN KEY (`klassen_id`)
    REFERENCES `pvi`.`klassen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Onderwijstaak_Medewerker1`
    FOREIGN KEY (`medewerker_id`)
    REFERENCES `pvi`.`medewerkers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Onderwijstaak_Vakken1`
    FOREIGN KEY (`vakken_id`)
    REFERENCES `pvi`.`vakken` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pvi`.`taken`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`taken` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pvi`.`takenmedewerkers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pvi`.`takenmedewerkers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `startWeek` INT(11) NULL DEFAULT NULL,
  `aantalWeken` INT(11) NULL DEFAULT NULL,
  `urenOpWeekbasis` INT(11) NULL DEFAULT NULL,
  `taken_id` INT(11) NOT NULL,
  `medewerker_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_takenMedewerker_Taken1_idx` (`taken_id` ASC),
  INDEX `fk_takenMedewerker_Medewerker1_idx` (`medewerker_id` ASC),
  CONSTRAINT `fk_takenMedewerker_Medewerker1`
    FOREIGN KEY (`medewerker_id`)
    REFERENCES `pvi`.`medewerkers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_takenMedewerker_Taken1`
    FOREIGN KEY (`taken_id`)
    REFERENCES `pvi`.`taken` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
