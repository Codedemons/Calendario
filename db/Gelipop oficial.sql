-- MySQL Script generated by MySQL Workbench
-- Thu Nov 16 00:25:14 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Gelipop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Gelipop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Gelipop` DEFAULT CHARACTER SET utf8 ;
USE `Gelipop` ;

-- -----------------------------------------------------
-- Table `Gelipop`.`Eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Gelipop`.`Eventos` (
  `idEventos` INT NOT NULL,
  `Nombre` VARCHAR(60) NULL,
  `Color` VARCHAR(45) NULL,
  `Fecha_Inicio` VARCHAR(45) NULL,
  `Fecha_Fin` VARCHAR(45) NULL,
  PRIMARY KEY (`idEventos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Gelipop`.`T_Eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Gelipop`.`T_Eventos` (
  `idEventos` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(80) NULL,
  `Fecha` DATE NULL,
  `Time` TIME NULL,
  `Precio` DECIMAL(10,2) NULL,
  `Color` VARCHAR(20) NULL,
  PRIMARY KEY (`idEventos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Gelipop`.`T_Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Gelipop`.`T_Categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idCategoria`));


-- -----------------------------------------------------
-- Table `Gelipop`.`T_Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Gelipop`.`T_Usuarios` (
  `username` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(255) NOT NULL,
  `Categoria` INT NOT NULL,
  PRIMARY KEY (`username`, `Categoria`),
  CONSTRAINT `fk_T_Usuarios_T_Categoria`
    FOREIGN KEY (`Categoria`)
    REFERENCES `Gelipop`.`T_Categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `Gelipop`.`T_Productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Gelipop`.`T_Productos` (
  `idProductos` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(255) NULL,
  `Precio` DECIMAL(10,2) NULL,
  `image` LONGBLOB NULL,
  `Stock` INT NULL,
  PRIMARY KEY (`idProductos`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `Gelipop`.`eventoscalendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(250) DEFAULT NULL,
  `color_evento` varchar(20) DEFAULT NULL,
  `fecha_inicio` varchar(20) DEFAULT NULL,
  `fecha_fin` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
