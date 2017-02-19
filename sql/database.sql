-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`types` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`prodcuts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `price` VARCHAR(45) NULL,
  `types_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_prodcuts_types_idx` (`types_id` ASC),
  CONSTRAINT `fk_prodcuts_types`
    FOREIGN KEY (`types_id`)
    REFERENCES `mydb`.`types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`people`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`people` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `document` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `addres` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`operations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`operations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `num_operation` VARCHAR(45) NULL,
  `total_value` VARCHAR(45) NULL,
  `type_operations` CHAR NULL,
  `people_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_operations_people1_idx` (`people_id` ASC),
  CONSTRAINT `fk_operations_people1`
    FOREIGN KEY (`people_id`)
    REFERENCES `mydb`.`people` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`product_operations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`product_operations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `price` VARCHAR(45) NULL,
  `qtd` DECIMAL(5,2) NULL,
  `total_value` DECIMAL(5,2) NULL,
  `operations_id` INT NOT NULL,
  `prodcuts_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_product_operations_operations1_idx` (`operations_id` ASC),
  INDEX `fk_product_operations_prodcuts1_idx` (`prodcuts_id` ASC),
  CONSTRAINT `fk_product_operations_operations1`
    FOREIGN KEY (`operations_id`)
    REFERENCES `mydb`.`operations` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_operations_prodcuts1`
    FOREIGN KEY (`prodcuts_id`)
    REFERENCES `mydb`.`prodcuts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
