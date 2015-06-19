-- MySQL dump 10.9
--
-- Host: localhost    Database: ajuntaments30_db
-- ------------------------------------------------------
-- Server version	4.1.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `configuracions`
--

DROP TABLE IF EXISTS `configuracions`;
CREATE TABLE `configuracions` (
  `id` int(11) NOT NULL auto_increment,
  `escut` varchar(50) character set latin1 default NULL,
  `nom` varchar(50) character set latin1 default NULL,
  `direccio` varchar(100) character set latin1 default NULL,
  `poblacio` varchar(50) character set latin1 default NULL,
  `codipostal` varchar(7) character set latin1 default NULL,
  `telefon` varchar(30) character set latin1 default NULL,
  `fax` varchar(30) character set latin1 default NULL,
  `email` varchar(60) character set latin1 default NULL,
  `twitter` varchar(100) character set latin1 default NULL,
  `facebook` varchar(100) character set latin1 default NULL,
  `googleplus` varchar(100) character set latin1 default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `configuracions`
--


/*!40000 ALTER TABLE `configuracions` DISABLE KEYS */;
LOCK TABLES `configuracions` WRITE;
INSERT INTO `configuracions` VALUES (1,NULL,'Ajuntament de<br />la Pobla de Benifassà','Carrer de la Pau 45','Alcantir','12000','964 222333','964 111 111','info@alcantir.es','XXX','XXX','XXX');
UNLOCK TABLES;
/*!40000 ALTER TABLE `configuracions` ENABLE KEYS */;

--
-- Table structure for table `contingut`
--

DROP TABLE IF EXISTS `contingut`;
CREATE TABLE `contingut` (
  `id` int(11) NOT NULL auto_increment,
  `tipo` varchar(15) character set latin1 default NULL,
  `titol` varchar(150) character set latin1 default NULL,
  `cos` text character set latin1,
  `imagen1` varchar(50) character set latin1 default NULL,
  `imagen2` varchar(50) character set latin1 default NULL,
  `imagen3` varchar(50) character set latin1 default NULL,
  `imagen4` varchar(50) character set latin1 default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `contingut`
--


/*!40000 ALTER TABLE `contingut` DISABLE KEYS */;
LOCK TABLES `contingut` WRITE;
INSERT INTO `contingut` VALUES (84,'Carrusel','La bufa la gamba','la bufa la gamba','085412170615slide1.jpg','','',''),(83,'Mensaje de avis','Ultimo aviso','en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un  en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha ','165312170615servicio-4.png','','',''),(82,'Servicio','TÃ­tulo 4','en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha ','235212170615servicio-4.png','','',''),(86,'Carrusel','Nuestro delegado se reune en Madrid sobre el IVI','delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi delegado en madrid sobre el ivi ','021913170615slide3.jpg','','',''),(80,'Servicio','TÃ­tulo 2','en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha ','425012170615servicio-2.png','','',''),(81,'Servicio','TÃ­tulo 3','en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha ','135212170615servicio-3.png','','',''),(85,'Carrusel','InauguraciÃ³n del edificion mÃ¡ximo guay','inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n inauguraciÃ³n ','531713170615slide2.jpg','','',''),(79,'Servicio','TÃ­tulo 1','en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha en un lugar de la mancha ','195012170615servicio-1.png','','',''),(87,'Carrusel','El tercer carrusel de pruebas para esta web 3.0','una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 una web 3.0 3.0 ','241913170615slide4.jpg','','',''),(88,'Noticia','Primera noticia en la web de Alcantir','Os recomendamos que no leÃ¡is mucho esta noticia ya que en redalidad se trata de una noticia de pruebas para esta web de los Ayuntamientos 3.0.\r\n\r\nOs recomendamos que no leÃ¡is mucho esta noticia ya que en redalidad se trata de una noticia de pruebas para esta web de los Ayuntamientos 3.0 \r\n\r\nOs recomendamos que no leÃ¡is mucho esta noticia ya que en redalidad se trata de una noticia de pruebas para esta web de los Ayuntamientos 3.0 \r\n\r\nOs recomendamos que no leÃ¡is mucho esta noticia ya que en redalidad se trata de una noticia de pruebas para esta web de los Ayuntamientos 3.0 ','072213170615','','',''),(89,'Mensaje del pie','Un mensaje del pie','Este es un mensaje para el pie de la pÃ¡gina, en Ã©l podemos publicar contenidos que no son necesariamente una noticia y, por supuesto, tampoco requieren la urgencia que requieren los avisos (los cuales se muestran en la parte superior). Vamos a ver quÃ© tal quedan.','083313170615','','',''),(98,'Noticia','Salomé li agrada fer webs municipals','Bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, ','243012190615','','',''),(93,'Noticia','Próxima carrera solidaria para hacer pruebas','Bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla, bla.','191518180615','','','');
UNLOCK TABLES;
/*!40000 ALTER TABLE `contingut` ENABLE KEYS */;

--
-- Table structure for table `pagines`
--

DROP TABLE IF EXISTS `pagines`;
CREATE TABLE `pagines` (
  `id` int(11) NOT NULL auto_increment,
  `titol` varchar(50) character set latin1 default NULL,
  `categoria` varchar(50) character set latin1 default NULL,
  `cos` text character set latin1,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pagines`
--


/*!40000 ALTER TABLE `pagines` DISABLE KEYS */;
LOCK TABLES `pagines` WRITE;
INSERT INTO `pagines` VALUES (12,'Pagina 1','Para los ciudadanos','x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x '),(13,'Pagina 2','Para los ciudadanos','x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x '),(14,'Pagina 3','Para los ciudadanos','x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x '),(15,'Pagina 4','Para los visitantes','x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x '),(16,'Pagina 5','Para los visitantes','x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x '),(17,'Pagina 6','Para los visitantes','x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x '),(18,'Pagina 7','Para las empresas','x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x '),(19,'Pagina 8','Para las empresas','x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x '),(20,'Pagina 9','Para las empresas','x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x ');
UNLOCK TABLES;
/*!40000 ALTER TABLE `pagines` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

