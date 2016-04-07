-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema PVI
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema PVI
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `PVI` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `PVI` ;

-- -----------------------------------------------------
-- Table `PVI`.`functions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`functions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `scale` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`contracts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`contracts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `total_hours_WTF` INT NOT NULL,
  `weeks_available` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`Employees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`Employees` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(255) NOT NULL,
  `last_name` VARCHAR(255) NOT NULL,
  `date_of_birth` DATE NOT NULL,
  `function_id` INT NULL,
  `contract_id` INT NULL,
  `deleted_at` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Employee_function_idx` (`function_id` ASC),
  INDEX `fk_Employee_contract1_idx` (`contract_id` ASC),
  CONSTRAINT `fk_Employee_function`
    FOREIGN KEY (`function_id`)
    REFERENCES `PVI`.`functions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Employee_contract1`
    FOREIGN KEY (`contract_id`)
    REFERENCES `PVI`.`contracts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`rulings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`rulings` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`contractRulings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`contractRulings` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `hours` INT NOT NULL,
  `contract_id` INT NOT NULL,
  `rulings_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_contractRulings_contract1_idx` (`contract_id` ASC),
  INDEX `fk_contractRulings_rulings1_idx` (`rulings_id` ASC),
  CONSTRAINT `fk_contractRulings_contract1`
    FOREIGN KEY (`contract_id`)
    REFERENCES `PVI`.`contracts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contractRulings_rulings1`
    FOREIGN KEY (`rulings_id`)
    REFERENCES `PVI`.`rulings` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`tasks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`tasks` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `hours` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`employeeTasks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`employeeTasks` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Employee_id` INT NOT NULL,
  `task_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_employeeTask_Employee1_idx` (`Employee_id` ASC),
  INDEX `fk_employeeTask_task1_idx` (`task_id` ASC),
  CONSTRAINT `fk_employeeTask_Employee1`
    FOREIGN KEY (`Employee_id`)
    REFERENCES `PVI`.`Employees` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_employeeTask_task1`
    FOREIGN KEY (`task_id`)
    REFERENCES `PVI`.`tasks` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`subjects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`subjects` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `hours` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`studies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`studies` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`classes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`classes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `study_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_class_study1_idx` (`study_id` ASC),
  CONSTRAINT `fk_class_study1`
    FOREIGN KEY (`study_id`)
    REFERENCES `PVI`.`studies` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`employeeClassSubjects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`employeeClassSubjects` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `subject_id` INT NOT NULL,
  `class_id` INT NOT NULL,
  `Employee_id` INT NOT NULL,
  `percentage_preparation` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_employeeClassSubject_subject1_idx` (`subject_id` ASC),
  INDEX `fk_employeeClassSubject_class1_idx` (`class_id` ASC),
  INDEX `fk_employeeClassSubject_Employee1_idx` (`Employee_id` ASC),
  CONSTRAINT `fk_employeeClassSubject_subject1`
    FOREIGN KEY (`subject_id`)
    REFERENCES `PVI`.`subjects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_employeeClassSubject_class1`
    FOREIGN KEY (`class_id`)
    REFERENCES `PVI`.`classes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_employeeClassSubject_Employee1`
    FOREIGN KEY (`Employee_id`)
    REFERENCES `PVI`.`Employees` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`quarters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`quarters` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `start_date` DATE NOT NULL,
  `end_date` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`subjectQuarters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`subjectQuarters` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `weeks` INT NOT NULL,
  `subject_id` INT NOT NULL,
  `quarter_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_subjectQuarter_subject1_idx` (`subject_id` ASC),
  INDEX `fk_subjectQuarter_quarter1_idx` (`quarter_id` ASC),
  CONSTRAINT `fk_subjectQuarter_subject1`
    FOREIGN KEY (`subject_id`)
    REFERENCES `PVI`.`subjects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_subjectQuarter_quarter1`
    FOREIGN KEY (`quarter_id`)
    REFERENCES `PVI`.`quarters` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PVI`.`taskQuarters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PVI`.`taskQuarters` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `task_id` INT NOT NULL,
  `quarter_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_taskQuarter_task1_idx` (`task_id` ASC),
  INDEX `fk_taskQuarter_quarter1_idx` (`quarter_id` ASC),
  CONSTRAINT `fk_taskQuarter_task1`
    FOREIGN KEY (`task_id`)
    REFERENCES `PVI`.`tasks` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_taskQuarter_quarter1`
    FOREIGN KEY (`quarter_id`)
    REFERENCES `PVI`.`quarters` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
