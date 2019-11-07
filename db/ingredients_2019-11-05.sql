# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: ingredients
# Generation Time: 2019-11-05 16:34:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ingredients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ingredients`;

CREATE TABLE `ingredients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL DEFAULT '',
  `category` varchar(256) DEFAULT 'User-added',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;

INSERT INTO `ingredients` (`id`, `name`, `category`)
VALUES
	(1,'onions','Vegetables'),
	(2,'carrot','Vegetables'),
	(3,'pepper','Vegetables'),
	(4,'cabbage','Vegetables'),
	(5,'potato','Vegetables'),
	(6,'celery','Vegetables'),
	(7,'beef','Meat'),
	(8,'sausage','Meat'),
	(9,'chicken','Meat'),
	(10,'ketchup','Condiments'),
	(11,'pork','Meat'),
	(12,'mint','Condiments'),
	(13,'soy','Condiments'),
	(14,'turnip','Vegetables'),
	(15,'pizza','Carbohydrates'),
	(16,'olive','Vegetables'),
	(17,'bread','Carbohydrates'),
	(18,'tomato','Vegetables'),
	(19,'cheese','Dairy'),
	(20,'pasta','Carbohydrates'),
	(21,'ginger','Condiments'),
	(22,'lemon','Condiments'),
	(23,'honey','Condiments'),
	(24,'flour','Carbohydrates'),
	(25,'chocolate','Dairy'),
	(26,'beans','Vegetables');

/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
