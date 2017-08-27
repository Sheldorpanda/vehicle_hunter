CREATE TABLE `brand` (
  `name` varchar(30) NOT NULL,
  `Companyname` varchar(30) NOT NULL,
  PRIMARY KEY (`name`),
  KEY `FKBrand772172` (`Companyname`),
  CONSTRAINT `FKBrand772172` FOREIGN KEY (`Companyname`) REFERENCES `company` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `buy` (
  `Buyerbuyer_id` int(10) NOT NULL,
  `Dealdeal_id` int(10) NOT NULL,
  PRIMARY KEY (`Buyerbuyer_id`,`Dealdeal_id`),
  KEY `FKbuy241354` (`Buyerbuyer_id`),
  KEY `FKbuy863676` (`Dealdeal_id`),
  CONSTRAINT `FKbuy241354` FOREIGN KEY (`Buyerbuyer_id`) REFERENCES `buyer` (`buyer_id`),
  CONSTRAINT `FKbuy863676` FOREIGN KEY (`Dealdeal_id`) REFERENCES `deal` (`deal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `buyer` (
  `buyer_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`buyer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `car` (
  `car_id` int(10) NOT NULL AUTO_INCREMENT,
  `price` float DEFAULT NULL,
  `body_type` varchar(10) DEFAULT NULL,
  `is_new` bit(1) DEFAULT NULL,
  `Inventoryinventory_id` int(10) NOT NULL,
  `Modelname` varchar(30) NOT NULL,
  `Dealdeal_id` int(10) NOT NULL,
  PRIMARY KEY (`car_id`),
  KEY `involve` (`Dealdeal_id`),
  KEY `FKCar748249` (`Inventoryinventory_id`),
  KEY `FKCar50340` (`Modelname`),
  CONSTRAINT `FKCar50340` FOREIGN KEY (`Modelname`) REFERENCES `model` (`name`),
  CONSTRAINT `FKCar748249` FOREIGN KEY (`Inventoryinventory_id`) REFERENCES `inventory` (`inventory_id`),
  CONSTRAINT `involve` FOREIGN KEY (`Dealdeal_id`) REFERENCES `deal` (`deal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `company` (
  `name` varchar(30) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `deal` (
  `deal_id` int(10) NOT NULL AUTO_INCREMENT,
  `dealer_id` int(10) DEFAULT NULL,
  `buyer_id` int(10) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`deal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `dealer` (
  `dealer_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `platform` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`dealer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `favorite` (
  `Carcar_id` int(10) NOT NULL,
  `Useruser_id` int(10) NOT NULL,
  PRIMARY KEY (`Carcar_id`,`Useruser_id`),
  KEY `FKfavorite326295` (`Carcar_id`),
  KEY `FKfavorite519718` (`Useruser_id`),
  CONSTRAINT `FKfavorite326295` FOREIGN KEY (`Carcar_id`) REFERENCES `car` (`car_id`),
  CONSTRAINT `FKfavorite519718` FOREIGN KEY (`Useruser_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `inventory` (
  `inventory_id` int(10) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`inventory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `model` (
  `name` varchar(30) NOT NULL,
  `max_price` float DEFAULT NULL,
  `min_price` float DEFAULT NULL,
  `Brandname` varchar(30) NOT NULL,
  PRIMARY KEY (`name`),
  KEY `FKModel786172` (`Brandname`),
  CONSTRAINT `FKModel786172` FOREIGN KEY (`Brandname`) REFERENCES `brand` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `option` (
  `option_id` int(10) NOT NULL AUTO_INCREMENT,
  `specification` varchar(300) DEFAULT NULL,
  `Carcar_id` int(10) NOT NULL,
  PRIMARY KEY (`option_id`),
  KEY `FKOption736784` (`Carcar_id`),
  CONSTRAINT `FKOption736784` FOREIGN KEY (`Carcar_id`) REFERENCES `car` (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `sell` (
  `Dealerdealer_id` int(10) NOT NULL,
  `Dealdeal_id` int(10) NOT NULL,
  PRIMARY KEY (`Dealerdealer_id`,`Dealdeal_id`),
  KEY `FKsell130544` (`Dealerdealer_id`),
  KEY `FKsell435117` (`Dealdeal_id`),
  CONSTRAINT `FKsell130544` FOREIGN KEY (`Dealerdealer_id`) REFERENCES `dealer` (`dealer_id`),
  CONSTRAINT `FKsell435117` FOREIGN KEY (`Dealdeal_id`) REFERENCES `deal` (`deal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(30) DEFAULT NULL,
  `register_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `warranty` (
  `expiration_date` varchar(30) DEFAULT NULL,
  `specification` varchar(300) DEFAULT NULL,
  `Carcar_id` int(10) NOT NULL,
  KEY `FKWarranty726898` (`Carcar_id`),
  CONSTRAINT `FKWarranty726898` FOREIGN KEY (`Carcar_id`) REFERENCES `car` (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
