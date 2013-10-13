# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.33)
# Database: bdf1013
# Generation Time: 2013-10-13 17:20:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table subject
# ------------------------------------------------------------

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `subjectId` int(11) NOT NULL AUTO_INCREMENT,
  `subjectname` varchar(11) NOT NULL,
  PRIMARY KEY (`subjectId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;

INSERT INTO `subject` (`subjectId`, `subjectname`)
VALUES
	(1,'Art'),
	(2,'Graphics'),
	(3,'Web'),
	(4,'Development'),
	(5,'Business');

/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `favoriteSubject` int(11) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`userId`, `firstname`, `lastname`, `username`, `password`, `favoriteSubject`)
VALUES
	(1,'Enok','Madrid','emadrid','pw123',1),
	(3,'Peter','Parker','spiderman','GwenStacy',3);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `videoId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `icon` varchar(20) NOT NULL DEFAULT '',
  `subjectId` int(11) DEFAULT NULL,
  PRIMARY KEY (`videoId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;

INSERT INTO `videos` (`videoId`, `title`, `icon`, `subjectId`)
VALUES
	(1,'Drawing Basics','drawing.jpg',1),
	(2,'Fundamentals of Painting','painting.jpg',1),
	(3,'Digital Painting Techniques','digital.jpg',1),
	(4,'Illustrations and Murals','airbrushing.jpg',1),
	(5,'Photoshop Basics','photoshop.jpg',2),
	(6,'Advanced Illustrator','illustrator.jpg',2),
	(7,'Flash Basics for Web','flash.jpg',2),
	(8,'Web Graphics with Fireworks ','fireworks.jpg',2),
	(9,'The Future of Web with HTML5','html5.jpg',3),
	(10,'Designing the Web with CSS3','css3.jpg',3),
	(11,'Responsive Design for Mobile','responsive.jpg',3),
	(12,'Animating with jQuery','jquery.jpg',3),
	(13,'The Javascript Language','javascript.jpg',4),
	(14,'PHP for Web Applications','php.jpg',4),
	(15,'The Python Language','python.jpg',4),
	(16,'The Ruby Language','ruby.jpg',4),
	(17,'How to Sell ','sell.jpg',5),
	(18,'How to Get the Right Clients ','clients.jpg',5),
	(19,'Become a Freelancing Ninja','freelance.jpg',5),
	(20,'Launch your Business Startup','startup.jpg',5);

/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
