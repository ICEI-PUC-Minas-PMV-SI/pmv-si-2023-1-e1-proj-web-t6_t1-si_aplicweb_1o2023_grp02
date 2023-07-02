-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ong
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ong
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ong` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `ong` ;

-- -----------------------------------------------------
-- Table `ong`.`adotante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ong`.`adotante` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL DEFAULT NULL,
  `cpf` VARCHAR(20) NULL DEFAULT NULL,
  `telefone` VARCHAR(20) NULL DEFAULT NULL,
  `email` VARCHAR(100) NULL DEFAULT NULL,
  `endereco` VARCHAR(200) NULL DEFAULT NULL,
  `senha` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `ong`.`dadosong`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ong`.`dadosong` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL DEFAULT NULL,
  `descricao` VARCHAR(1000) NULL DEFAULT NULL,
  `telefone` VARCHAR(20) NULL DEFAULT NULL,
  `email` VARCHAR(100) NULL DEFAULT NULL,
  `endereco` VARCHAR(200) NULL DEFAULT NULL,
  `senha` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `ong`.`animal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ong`.`animal` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nomeAnimal` VARCHAR(100) NULL DEFAULT NULL,
  `especie` VARCHAR(50) NULL DEFAULT NULL,
  `sexo` VARCHAR(10) NULL DEFAULT NULL,
  `idade` INT NULL DEFAULT NULL,
  `descricaoAnimal` VARCHAR(1000) NULL DEFAULT NULL,
  `foto` VARCHAR(200) NULL DEFAULT NULL,
  `status` VARCHAR(20) NULL DEFAULT NULL,
  `ong_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `ong_id` (`ong_id` ASC) VISIBLE,
  CONSTRAINT `animal_ibfk_1`
    FOREIGN KEY (`ong_id`)
    REFERENCES `ong`.`dadosong` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `ong`.`adocao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ong`.`adocao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data_adocao` DATE NULL DEFAULT NULL,
  `data_devolucao` DATE NULL DEFAULT NULL,
  `adotante_id` INT NULL DEFAULT NULL,
  `animal_id` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `adotante_id` (`adotante_id` ASC) VISIBLE,
  INDEX `animal_id` (`animal_id` ASC) VISIBLE,
  CONSTRAINT `adocao_ibfk_1`
    FOREIGN KEY (`adotante_id`)
    REFERENCES `ong`.`adotante` (`id`),
  CONSTRAINT `adocao_ibfk_2`
    FOREIGN KEY (`animal_id`)
    REFERENCES `ong`.`animal` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
