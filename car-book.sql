DROP DATABASE if exists carBook;
CREATE DATABASE IF NOT EXISTS carBook;
GRANT ALL PRIVILEGES ON carBook.* to 'cbConnect'@'localhost' identified by 'cbConnect';
USE carBook;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneNum` char(12),
  `city` varchar(20),
  `locState` char(2),
  `vecType` char(1),
  `buy` boolean,
  `sell` boolean,
  `yrsOwn` int(2),
  `zipcode` int(5) NOT NULL,
  PRIMARY KEY (`id`)
  
)ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


INSERT INTO `users` (`id`, `username`, `password`, `firstName`, `lastName`, `email`,
	`phoneNum`, `city`, `locState`, `vecType`, `buy`, `sell`, `yrsOwn`, `zipcode`) VALUES
(1, 'ktyler', SHA('healthy'), 'Kevin', 'Tyler', 'celloguy009@yahoo.com', '757-331-4271', 'Richmond',
'VA', 'N', 'TRUE', 'FALSE', 4, 23173);



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
