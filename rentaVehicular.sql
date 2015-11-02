SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `renta` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

USE `renta`;

CREATE  TABLE IF NOT EXISTS `renta`.`Vehiculo` (
  `idVehiculo` INT(11) NOT NULL AUTO_INCREMENT,
  `Tipo` VARCHAR(20) NOT NULL ,
  `urlFoto` VARCHAR(100) NOT NULL ,
  `Marca` VARCHAR(10) NOT NULL ,
  `Capacidad` VARCHAR(2) NOT NULL ,
  `Precio` DOUBLE NOT NULL ,
  `Disponibilidad` TINYINT(1) NOT NULL ,
  `Color` VARCHAR(20) NOT NULL ,
  `Modelo` VARCHAR(4) NOT NULL ,
  `Placa` VARCHAR(6) NOT NULL ,
  `Kilometraje` DOUBLE NOT NULL ,
  PRIMARY KEY (`idVehiculo`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `renta`.`SolicitudRenta` (
  `idSolicitudRenta` INT(11) NOT NULL AUTO_INCREMENT,
  `Fecha` DATE NOT NULL ,
  `Hora` TIME NOT NULL ,
  `Kilometraje` DOUBLE NOT NULL ,
  `idVehiculo` INT(11) NOT NULL ,
  `idUsuario` INT(11) NOT NULL ,
  PRIMARY KEY (`idSolicitudRenta`) ,
  INDEX `fk_SolicitudRenta_Vehiculo_idx` (`idVehiculo` ASC) ,
  INDEX `fk_SolicitudRenta_Usuario1_idx` (`idUsuario` ASC) ,
  CONSTRAINT `fk_SolicitudRenta_Vehiculo`
    FOREIGN KEY (`idVehiculo` )
    REFERENCES `renta`.`Vehiculo` (`idVehiculo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SolicitudRenta_Usuario1`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `renta`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `renta`.`Usuario` (
  `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(80) NOT NULL ,
  `cedula` VARCHAR(11) NOT NULL ,
  `licenciaConduccion` VARCHAR(45) NOT NULL ,
  `telefono` VARCHAR(15) NOT NULL ,
  `direccion` VARCHAR(200) NOT NULL ,
  `email` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`idUsuario`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `renta`.`Login` (
  `idLogin` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(20) NOT NULL ,
  `contrasenia` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`idLogin`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `renta`.`DevolucionRenta` (
  `idDevolucionRenta` INT(11) NOT NULL AUTO_INCREMENT,
  `Fecha` DATE NOT NULL ,
  `Hora` TIME NOT NULL ,
  `Kilometraje` DOUBLE NOT NULL ,
  `estado` VARCHAR(45) NOT NULL ,
  `Observaciones` TEXT NULL DEFAULT NULL ,
  `idVehiculo` INT(11) NOT NULL ,
  `idUsuario` INT(11) NOT NULL ,
  PRIMARY KEY (`idDevolucionRenta`) ,
  INDEX `fk_DevolucionRenta_Vehiculo1_idx` (`idVehiculo` ASC) ,
  INDEX `fk_DevolucionRenta_Usuario1_idx` (`idUsuario` ASC) ,
  CONSTRAINT `fk_DevolucionRenta_Vehiculo1`
    FOREIGN KEY (`idVehiculo` )
    REFERENCES `renta`.`Vehiculo` (`idVehiculo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_DevolucionRenta_Usuario1`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `renta`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `renta`.`Bono` (
  `idBono` INT(11) NOT NULL AUTO_INCREMENT,
  `horasTotales` INT(11) NOT NULL ,
  `horasCanjeables` INT(11) NOT NULL ,
  `idUsuario` INT(11) NOT NULL ,
  PRIMARY KEY (`idBono`) ,
  INDEX `fk_Bono_Usuario1_idx` (`idUsuario` ASC) ,
  CONSTRAINT `fk_Bono_Usuario1`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `renta`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
