DROP DATABASE IF EXISTS carBook;
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
  `vin` CHAR(17) NOT NULL,
  `year_made` CHAR(4),
  `make` VARCHAR(20),
  `model` VARCHAR(20),
  `mileage` VARCHAR(6),
  `price` DOUBLE,
  `color` VARCHAR(15),
  `transmission` VARCHAR(20),
  `description` VARCHAR(255),
  PRIMARY KEY (`vin`)

);

CREATE INDEX make ON cars (make);

INSERT INTO `cars` (`vin`, `year_made`, `make`, `model`, `mileage`, `price`, `color`, `transmission`, `description`) VALUES('15787844787786473', '1999', 'Ford', 'Mustang', '143259', 23000, 'White', '5 Speed Manual', 'fordmustang.jpg'), ('123456789AII5699D', '1997', 'Lincoln', 'Town Car', '80000', '5700', 'Black', 'Automatic', 'lincolntowncar.jpg'), ('987654321GHD3465K', '2002', 'Toyota', 'Camry', '48000', 4500, 'Red', 'Automatic',  'toyotacamry.jpg'), ('8485683248348569HH', '2008', 'Jeep', 'Grand Cherokee', '60000', 7500, 'Green', '5 Speed Manual', 'jeepgrandcherokee.jpg'), ('888AGHE23I456NN55', '2003', 'Pontiac', 'Grand Prix', '54000', '5800', 'Blue', 'Automatic', 'pontiacgrandprix.jpg'), ('5G33J576NW21CC5H7', '1996', 'Izuzu', 'Trooper', '215000', 2300, 'Gray', '5 Speed Manual', 'izuzutrooper.jpg');

CREATE TABLE IF NOT EXISTS `carOwnership` (
	`id` int(11) NOT NULL,
	`vin` CHAR(17) NOT NULL,
	CONSTRAINT `PK_carOwnership` PRIMARY KEY
	(
		`id`,
		`vin`
	),
	FOREIGN KEY (`id`) REFERENCES `users` (`id`),
	FOREIGN KEY (`vin`) REFERENCES `cars` (`vin`)
);
INSERT INTO `carOwnership`(`id`, `vin`) VALUES (1, '15787844787786473'), (1, '123456789AII5699D'), (1, '987654321GHD3465K'), (1,'8485683248348569HH'), (1, '888AGHE23I456NN55');

CREATE TABLE IF NOT EXISTS 'location' (
'zipcode' int(5) NOT NULL,
'city' varchar(20),
'locState' char(2),
FOREIGN KEY ('zipcode') REFERENCES 'users' ('zipcode')
);

INSERT INTO 'location' ('zipcode', 'city', 'locState') VALUES (23173, 'Richmond', 'VA');

CREATE TABLE IF NOT EXISTS 'carInfo' (
'make' VARCHAR(20),
'model' VARCHAR(20),
FOREIGN KEY ('model') REFERENCES 'cars' ('model')
);

INSERT INTO 'carInfo' ('make', 'model') VALUES ('Ford', 'Mustang'), ('Lincoln', 'Town Car'), ('Toyota', 'Camry'), ('Jeep', 'Grand Cherokee'), ('Pontiac', 'Grand Prix'), ('Izuzu', 'Trooper');

