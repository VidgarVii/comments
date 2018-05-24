# comments
Страница написания комментов. (php/sql)
Тестовое задание для Cetera

===============================================
SQL

CREATE TABLE `category` (
  `name` VARCHAR(20) NOT NULL,
  PRIMARY KEY  (`name`)
);

CREATE TABLE `comments` (
  `name` VARCHAR(30),
  `email` VARCHAR(20),
  `category` VARCHAR(20),
  `comment` TEXT(500)
);


ALTER TABLE `comments` ADD CONSTRAINT `comments_fk1` FOREIGN KEY (`category`) REFERENCES category(`name`);
