CREATE TABLE `authors` (
	`id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
INSERT INTO `test`.`authors` (`name`) VALUES ('Иван Иванов');
INSERT INTO `test`.`authors` (`name`) VALUES ('Антон Шатунов');
