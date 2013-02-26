CREATE DATABASE IF NOT EXISTS drinking101;
GRANT ALL PRIVILEGES ON drinking101.* to 'drinking101'@'localhost' identified by 'drinking101';
USE drinking101;
CREATE TABLE IF NOT EXISTS games (
  id int NOT NULL auto_increment,
  name VARCHAR(25),
  rules BLOB,
  description BLOB,
  PRIMARY KEY (id)
);
INSERT INTO games (name, rules, description) VALUES ('Beer Pong', 'shoot the balls into cup to win', 'a game with ping pong balls and cups');

CREATE TABLE IF NOT EXISTS users (
  user_id int NOT NULL auto_increment,
  user_name VARCHAR(16),
  pass VARCHAR(16),
  PRIMARY KEY (user_id)
);
INSERT INTO users (user_name, pass) VALUES ('kyle', 'kyle');
