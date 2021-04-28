CREATE DATABASE myDb;
USE myDb;

CREATE TABLE `objets` (`name` varchar(40) NOT NULL ,`prix` INTEGER NOT NULL);
INSERT INTO
  `objets` (`name`,`prix`) 
VALUES
  ('cheval de bois', 45),
  ('siflet en bois', 10),
  ('dés en bois', 3) ;
