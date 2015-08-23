CREATE  TABLE `types` (
  `id` INT NOT NULL auto_increment,
  `name` VARCHAR(70) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE  TABLE `surveys_types` (
  `id` INT NOT NULL auto_increment,
  `survey_id` INT NULL ,
  `type_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_surveys_types_1` (`type_id` ASC) ,
  INDEX `fk_surveys_types_2` (`survey_id` ASC) ,
  CONSTRAINT `fk_surveys_types_1`
    FOREIGN KEY (`type_id` )
    REFERENCES `db-pagina`.`types` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_surveys_types_2`
    FOREIGN KEY (`survey_id` )
    REFERENCES `db-pagina`.`surveys` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

    CREATE  TABLE `db-pagina`.`graduates_surveys` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `graduate_id` INT NULL ,
  `survey_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE(graduate_id,survey_id),
  INDEX `fk_graduates_surveys_1` (`graduate_id` ASC) ,
  INDEX `fk_graduates_surveys_2` (`survey_id` ASC) ,
  CONSTRAINT `fk_graduates_surveys_1`
    FOREIGN KEY (`graduate_id` )
    REFERENCES `db-pagina`.`graduates` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_graduates_surveys_2`
    FOREIGN KEY (`survey_id` )
    REFERENCES `db-pagina`.`surveys` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;