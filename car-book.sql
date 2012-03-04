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
  `owner#` CHAR(12),
  PRIMARY KEY (`vin`)

);

INSERT INTO `cars` (`vin`, `year_made`, `make`, `model`, `mileage`, `price`, `color`, `transmission`, `description`, `owner#`) VALUES('15787844787786473', '1999', 'Ford', 'Mustang', '143259', 23000, 'White', '5 Speed Manual', 'fordmustang.jpg', '757-331-4271'), ('123456789AII5699D', '1997', 'Lincoln', 'Town Car', '80000', '5700', 'Black', 'Automatic', 'lincolntowncar.jpg', '434-964-6743'), ('987654321GHD3465K', '2002', 'Toyota', 'Camry', '48000', 4500, 'Red', 'Automatic',  'toyotacamry.jpg', '540-344-6783'), ('8485683248348569HH', '2008', 'Jeep', 'Grand Cherokee', '60000', 7500, 'Green', '5 Speed Manual', 'jeepgrandcherokee.jpg', '709-888-3722'), ('888AGHE23I456NN55', '2003', 'Pontiac', 'Grand Prix', '54000', '5800', 'Blue', 'Automatic', 'pontiacgrandprix.jpg', '653-684-1124'), ('5G33J576NW21CC5H7', '1996', 'Izuzu', 'Trooper', '215000', 2300, 'Gray', '5 Speed Manual', 'izuzutrooper.jpg', '703-231-5821');
