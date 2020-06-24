SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `logSystem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `logSystem` ;

-- -----------------------------------------------------
-- Table `logSystem`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `logSystem`.`usuario` (
  `us_cod` INT NOT NULL AUTO_INCREMENT,
  `us_nome` VARCHAR(100) NOT NULL,
  `us_email` VARCHAR(100) NOT NULL,
  `us_sexo` VARCHAR(1) NOT NULL,
  `us_data` DATE NOT NULL,
  `us_hora` TIME NOT NULL,
  `us_ip` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`us_cod`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `logSystem`.`senha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `logSystem`.`senha` (
  `us_cod` INT NOT NULL,
  `us_senha` VARCHAR(50) NOT NULL,
  INDEX `fk_senha_usuario_idx` (`us_cod` ASC),
  PRIMARY KEY (`us_cod`),
  CONSTRAINT `fk_senha_usuario`
    FOREIGN KEY (`us_cod`)
    REFERENCES `logSystem`.`usuario` (`us_cod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
