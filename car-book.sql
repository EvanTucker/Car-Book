//Created by Evan Tucker

CREATE DATABASE IF NOT EXISTS session;
GRANT ALL PRIVILEGES ON session.* to 'assist'@'localhost' identified by 'assist';
USE session;

CREATE TABLE IF NOT EXISTS `users` (
  
);



CREATE TABLE IF NOT EXISTS `cars` (
  vin CHAR(17) NOT NULL,
  year_made CHAR(4),
  make VARCHAR(20),
  model VARCHAR(20),
  mileage VARCHAR(6),
  price DOUBLE,
  color VARCHAR(15),
  transmission VARCHAR(20),
  description BLOB,
  owner# CHAR(7),
  PRIMARY KEY (vin),
);
