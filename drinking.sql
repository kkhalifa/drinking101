CREATE DATABASE IF NOT EXISTS drinking101;
GRANT ALL PRIVILEGES ON drinking101.* to 'drinking101'@'localhost' identified by 'drinking101';
USE drinking101;
DROP TABLE IF EXISTS `games`;
CREATE TABLE games (
  id int NOT NULL auto_increment,
  name VARCHAR(25),
  rules BLOB,
  description BLOB,
  PRIMARY KEY (id)
);
INSERT INTO games (name, rules, description) VALUES ('Beer Pong', 'shoot the balls into cup to win', 'a game with ping pong balls and cups');

DROP TABLE IF EXISTS `users`;
CREATE TABLE users (
  user_id int NOT NULL auto_increment,
  user_name VARCHAR(16),
  pass VARCHAR(16),
  PRIMARY KEY (user_id)
);
INSERT INTO users (user_name, pass) VALUES ('kyle', 'kyle');

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE homepage (
id INT NOT NULL AUTO_INCREMENT,
title VARCHAR(50) NOT NULL,
author VARCHAR(40) NOT NULL,
content BLOB NOT NULL,
PRIMARY KEY (id)
);
INSERT INTO homepage (title, author, content) VALUES ('first title', 'theteam', 'first content');
INSERT INTO homepage (title, author, content) VALUES ('second title', 'theteam', 'second content');

DROP TABLE IF EXISTS `tips`;
CREATE TABLE tips (
id INT NOT NULL AUTO_INCREMENT,
tip VARCHAR(100) NOT NULL,
benefit BLOB NOT NULL,
PRIMARY KEY (id)
);
INSERT INTO tips (tip, benefit) VALUES ('Do not drink and drive', 'Drinking and driving causes death');
INSERT INTO tips (tip, benefit) VALUES ('Drink in moderation', 'Drinking in moderation reduces risk of bad decisions');

DROP TABLE IF EXISTS `drinks`;
CREATE TABLE drinks (
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `drinksalcohol`;
CREATE TABLE drinksalcohol (
entry INT NOT NULL AUTO_INCREMENT,
drinkid INT NOT NULL,
aname VARCHAR(100) NOT NULL,
aamount VARCHAR(100) NOT NULL,
PRIMARY KEY (entry)
);

DROP TABLE IF EXISTS `drinksingredients`;
CREATE TABLE drinksingredients (
entry INT NOT NULL AUTO_INCREMENT,
drinkid INT NOT NULL,
iname VARCHAR(100) NOT NULL,
iamount VARCHAR(100) NOT NULL,
PRIMARY KEY (entry)
);
