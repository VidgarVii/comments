# comments
Страница написания комментов. (php/sql)
Тестовое задание для Cetera

===============================================
SQL

CREATE TABLE `category` (
  `id` INT(20) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30),
  PRIMARY KEY  (`id`)
);

CREATE TABLE `comment` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30),
  `email` VARCHAR(20),
  `category` INT,
  `comment` TEXT(225),
  `time` DATETIME,
  PRIMARY KEY  (`id`)
);


ALTER TABLE `comment` ADD CONSTRAINT `comment_fk1` FOREIGN KEY (`category`) REFERENCES category(`id`);
