CREATE DATABASE  IF NOT EXISTS `mvc2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mvc2`;
-- MySQL dump 10.13  Distrib 5.5.58, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: mvc2
-- ------------------------------------------------------
-- Server version	5.5.58-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `author` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Vòng 1/8 Champions League',': Khó cho người Anh','Bóng đá Anh có tới 5 đại diện góp mặt ở vòng 1/8 Champions League nhưng họ lại có nguy cơ chạm trán các đối thủ khó nhằn.\r\n\r\nỞ loạt trận hạ màn đêm qua, Liverpool đã dễ dàng tạo ra màn thảm sát Spartak Moscow với tỷ số 7-0. Chiến thắng của Lữ đoàn đỏ đã giúp bóng đá Anh thiết lập kỉ lục với tư cách quốc gia đầu tiên có 5 đại diện góp mặt ở vòng 1/8 Champions League.\r\n\r\n \r\n\r\nĐáng chú ý, trong 5 đội bóng tham dự vòng 1/8 của Anh, có tới 4 CLB giành ngôi đầu (Man Utd, Man City, Tottenham, Liverpool) và được xếp vào nhóm hạt giống số 1. Đội bóng duy nhất của đảo quốc Sương mù không lọt nhóm hạt giống số 1 là Chelsea, đội chỉ xếp thứ 2 bảng C do bị Atletico cầm chân ở trận hạ màn.\r\n\r\nTheo quy định của LĐBĐ châu Âu (UEFA), các đội thuộc cùng 1 quốc gia sẽ không gặp nhau ở vòng 1/8. Điều đó cũng đồng nghĩa CLB thuộc nhóm 1 của Anh (Man Utd, Man City, Tottenham, Liverpool) chỉ tránh được Chelsea và đối thủ cùng bảng đấu của mình ở vòng 1/8. Trong khi đó, ở nhóm 2 có khá nhiều đối thủ sừng sỏ như Bayern Munich, Juventus hay Nhà ĐKVĐ Real Madrid.\r\n\r\nVì vậy, dù nằm ở nhóm 1 nhưng Man Utd, Man City, Liverpool hay Tottenham không hoàn toàn dễ thở. Tương tự, Chelsea cũng có nguy cơ chạm trán PSG và Barcelona ở vòng 1/8. Lá thăm được xem là dễ nhất đối với The Blues là Besiktas, đội dẫn đầu bảng G.\r\n\r\n \r\n\r\nNguyên tắc bốc thăm của FIFA là các đội cùng bảng đấu, cùng nhóm hạt giống và cùng quốc gia không gặp nhau ở vòng 1/8. Theo nguyên tắc này, Barcelona hoàn toàn có thể tạo ra cặp đấu duyên nợ với Bayern Munich. Tương tự, PSG có thể sớm chạm trán Nhà ĐKVĐ Real Madrid.\r\n\r\nTheo lịch, lễ bốc thăm vòng 1/8 Champions League 2017-18 sẽ được tổ chức vào ngày thứ Hai tới (11/12) tại Nyon (Thụy Sỹ). Các trận lượt đi vòng 1/8 sẽ diễn ra vào các ngày 13, 14, 20 và 21/2/2018. Lượt về sẽ diễn ra vào ngày 6, 7, 13 và 14/3.','tranvietphu','2017-12-07 14:44:49','uploads/bongda'),(2,'1','1','1','tranvietphu','2017-12-07 15:00:01','uploads/apahce.png'),(3,'Góc nhìn','Bỏ danh hiệu QBV được chưa?','df','tranvietphu','2017-12-07 15:00:50','uploads/bongvang.jpg');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-08  8:09:11
