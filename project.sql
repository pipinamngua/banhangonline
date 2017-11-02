-- MySQL dump 10.16  Distrib 10.1.24-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	10.1.24-MariaDB

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Điện thoại',NULL,NULL),(2,'Laptop',NULL,NULL),(3,'Tivi',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configs_laptops`
--

DROP TABLE IF EXISTS `configs_laptops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configs_laptops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `processor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operating_system` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_drive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_battery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ports` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slots` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs_laptops`
--

LOCK TABLES `configs_laptops` WRITE;
/*!40000 ALTER TABLE `configs_laptops` DISABLE KEYS */;
INSERT INTO `configs_laptops` VALUES (1,5,'7th Generation Intel® Core™ i7-7700HQ Quad Core (6MB Cache, up to 3.8 GHz)','Windows® 10 Home Plus Single Language (EM) India Premium Partner Program English','8GB, DDR4, 2400MHz ; up to 32GB (additional memory sold separately)','1TB 5400 rpm Hybrid Hard Drive with 8GB Cache','NVIDIA® GeForce® GTX 1050 Ti with 4GB GDDR5 graphics memory','15.6-inch FHD (1920 x 1080)Anti-Glare LED-Backlit Display','74 Whr, 6-Cell Battery (Integrated)','1Yr Premium Support: Onsite Service-Retail','1 HDMI 2.0,\r\n3 USB 3.0 including 1 with PowerShare','1 Noble lock slot,\r\n1 2-in-1 SD (UHS50) / MMC,\r\n1 RJ-45,\r\n1 Headphone/Mic','2017-10-15 17:00:00','2017-10-15 17:00:00'),(2,24,'7th Generation Intel® Core™ i5-7200U Processor (3MB Cache, up to 3.1 GHz)','Windows® 10 Home Plus Single Language (EM) India Premium Partner Program English','8GB, 2400MHz, DDR4, up to 16GB (additional memory sold separately)','2TB 5400 RPM SATA Hard Drive','AMD Radeon™ R7 M445 Graphics with 4G GDDR5 Graphics Memory','15.6-inch FHD (1920 x 1080) Anti-glare LED-Backlit Display','42WHr, 3-Cell Battery (Integrated)','1Yr Ltd Hardware Warranty, InHome Service after Remote Diagnosis-Retail','1 HDMI v1.4a\r\n2 USB 3.0\r\n1 USB 2.0\r\n1 Noble lock slot\r\n10/100 RJ-45 Ethernet Network\r\n\r\nMedia Card Reader\r\n1 SD card (SD, SDHC, SDXC)','1 Noble lock slot,\r\n1 2-in-1 SD (UHS50) / MMC,\r\n1 ...',NULL,NULL),(3,25,'7th Generation Intel® Core™ i5-7200U Processor (3M Cache, up to 3.1 GHz)','Windows® 10 Home Plus Single Language (EM) India Premium Partner Program English','8GB LPDDR3 1866MHz','256GB PCIe Solid State Drive','Intel® HD Graphics 620','13.3” FHD AG (1920 x 1080) InfinityEdge display, Silver','60WHr Integrated Battery','1Yr Premium Support: Onsite Service W/Accidental Damage -Retail','Ports\r\n2 USB 3.0 - 1 w/PowerShare\r\n1 SD card reader (SD, SDHC, SDXC)\r\n1 Headset jack \r\n1 Noble lock slot\r\n1 Thunderbolt™ 3 (2 lanes of PCI Express Gen 3) supports: Power in / charging, PowerShare, Thunderbolt 3 (40Gbps bi-directional), USB 3.1 Gen 2 (10Gb','Dual Channel LPDDR3 SDRAM (On Board)',NULL,NULL),(4,26,'8th Generation Intel® Core™ i5-8250U Processor (6M Cache, up to 3.4 GHz)','Windows® 10 Home Plus Single Language (EM) India Premium Partner Program English','8GB LPDDR3 1866MHz','256GB PCIe Solid State Drive','Intel® UHD Graphics','13.3” FHD AG (1920 x 1080) InfinityEdge display, Silver machined aluminum','60WHr Integrated Battery','1Yr Premium Support:Onsite Service W/Accidental Damage-Retail','Ports\r\n2 USB 3.0 - 1 w/PowerShare\r\n1 SD card reader (SD, SDHC, SDXC)\r\n1 Headset jack \r\n1 Noble lock slot\r\n1 Thunderbolt™ 3 (2 lanes of PCI Express Gen 3) supports: Power in / charging, PowerShare, Thunderbolt 3 (40Gbps bi-directional), USB 3.1 Gen 2 (10Gb','Dual Channel LPDDR3 SDRAM (On Board)',NULL,NULL),(5,27,'7th Generation Intel® Core™ i7-7700HQ Quad Core (6MB Cache, up to 3.8 GHz)','Windows® 10 Home Plus Single Language (EM) India Premium Partner Program English','8GB, DDR4, 2400MHz ; up to 32GB (additional memory sold separately)','1TB 5400 rpm Hybrid Hard Drive with 8GB Cache','NVIDIA® GeForce® GTX 1050 Ti with 4GB GDDR5 graphics memory','15.6-inch FHD (1920 x 1080)Anti-Glare LED-Backlit Display','74 Whr, 6-Cell Battery (Integrated)','1Yr Ltd Hardware Warranty, InHome Service after Remote Diagnosis-Retail','1 HDMI 2.0\r\n3 USB 3.0 including 1 with PowerShare','1 Noble lock slot,\r\n1 2-in-1 SD (UHS50) / MMC,\r\n1 ...',NULL,NULL),(6,28,'7th Generation Intel® Core™ i5-7200U Processor (3MB Cache, up to 3.1 GHz)','Windows® 10 Home Plus Single Language (EM) India Premium Partner Program English','8GB, 2400MHz, DDR4, up to 16GB (additional memory sold separately)','2TB 5400 RPM SATA Hard Drive','AMD Radeon™ R7 M445 Graphics with 4G GDDR5 Graphics Memory','15.6-inch FHD (1920 x 1080) Anti-glare LED-Backlit Display','42WHr, 3-Cell Battery (Integrated)','1Yr Ltd Hardware Warranty, InHome Service after Remote Diagnosis-Retail','1 HDMI v1.4a\r\n2 USB 3.0\r\n1 USB 2.0\r\n1 Noble lock slot\r\n10/100 RJ-45 Ethernet Network\r\n\r\nMedia Card Reader\r\n1 SD card (SD, SDHC, SDXC)','1 Noble lock slot,\r\n1 2-in-1 SD (UHS50) / MMC,\r\n1 ...',NULL,NULL);
/*!40000 ALTER TABLE `configs_laptops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configs_phones`
--

DROP TABLE IF EXISTS `configs_phones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configs_phones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty_period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network_connections` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tablet_connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operating_system_version` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim_slots` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram_memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expandable_memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_features` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `storage_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen_resolution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `core` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs_phones`
--

LOCK TABLES `configs_phones` WRITE;
/*!40000 ALTER TABLE `configs_phones` DISABLE KEYS */;
INSERT INTO `configs_phones` VALUES (1,1,'New','12 months','2G - GPRS','Smart Connector','White','6.5','Apple Iphone 7','iOS 9','Single','8GB','15.8 x 7.8 x 0.7','No','Touchscreen','128GB','1080 x 1920','LED-backlit IPS LCD','4','	0.188','2017-10-16 03:17:22','2017-10-16 03:17:22'),(3,18,'New','6 months','3G - GPRS','Smart Connector','Black','6.5','Apple Iphone 7','iOS 10','Single','8GB','16 x 7.9 x 0.7','No','Touchscreen','128GB','1080 x 1920','LED-backlit IPS LCD','4','0.2',NULL,NULL),(4,19,'New','6 months','2G - GPRS','Smart Connector','Pink','6.5','Apple Iphone 6','iOS 9','Single','4GB','15 x 7.9 x 0.5','Yes','Touchscreen','64GB','1080 x 1820','LED-backlit IPS LCD','3.5','0.2',NULL,NULL),(5,20,'New','12 months','3G - GPRS','Smart Connector','Gold','6.5','Apple Iphone 6','iOS 10','Single','16GB','15 x 7.9 x 0.5','Yes','Touchscreen','64GB','1080 x 1820','LED-backlit IPS LCD','3.5','0.2',NULL,NULL),(6,21,'New','6 months','2G - GPRS','Smart Connector','Black','5.5','Apple Iphone 6S','iOS 10','Single','4GB','14 x 7.9 x 0.5','Yes','Touchscreen','64GB','1080 x 1700','LED-backlit IPS LCD','3.5','0.2',NULL,NULL),(7,22,'New','12 months','2G - GPRS','Smart Connector','Red','6.5','Apple Iphone 7','iOS 10','Single','32GB','15.8 x 7.8 x 0.7','Yes','Touchscreen','64GB','1080 x 1920','LED-backlit IPS LCD','3.5','0.2',NULL,NULL),(8,23,'New','12 months','3G - GPRS','Smart Connector','Black','6.5','Apple Iphone 6','iOS 9','Single','4GB','15 x 7.9 x 0.5','Yes','Touchscreen','64GB','1080 x 1920','LED-backlit IPS LCD','3.5','0.2',NULL,NULL);
/*!40000 ALTER TABLE `configs_phones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configs_tivis`
--

DROP TABLE IF EXISTS `configs_tivis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configs_tivis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `screen_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resolution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi_built_in` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_browser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speaker_system` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hdmi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs_tivis`
--

LOCK TABLES `configs_tivis` WRITE;
/*!40000 ALTER TABLE `configs_tivis` DISABLE KEYS */;
INSERT INTO `configs_tivis` VALUES (1,6,'65\" (164cm)','3840 x 2160','Quad-Core','Yes','Yes','3 way 8 speaker (4 x Tweeters, 2 x Mid-range, 2 x Woofers)','Yes','Yes','33.5kg','1 Year Warranty - Parts and Labour','2017-10-15 17:00:00','2017-10-15 17:00:00'),(3,16,'55\" (138cm)','3840 x 2160','Quad-Core','Yes (802.11ac)','Yes','2 way 4 speaker (2 x High-Mid-range, 2 x Woofers)','Yes','Yes','19.2kg','1 Year Warranty - Parts and Labour',NULL,NULL),(4,17,'77 (195cm)','3840 x 2160','Quad-Core','	Yes (802.11ac)','Yes','3 way 8 speaker (4 x Tweeters, 2 x Mid-range, 2 x Woofers)','Yes','Yes','	Panel: 12.3kg Soundbar: 13.1kgWall Bracket: 5.0kg','1 Year Warranty - Parts and Labour',NULL,NULL);
/*!40000 ALTER TABLE `configs_tivis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,0,'admin','admin@gmail.com','0123456789','abcdefg',0,'2017-10-12 20:15:24','2017-10-16 22:39:05'),(2,0,'DucA','DucA@gmail.com','987654321','...........',1,'2017-10-12 20:25:46','2017-10-12 20:31:33'),(3,0,'user2','user2@gmail.com','35423132741534','test',0,'2017-10-15 23:31:09','2017-10-15 23:31:09'),(4,0,'Hoang Minh Duc','admin@gmail.com','0123456789','processed',1,'2017-10-16 00:26:58','2017-10-16 00:26:58');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_id`
--

DROP TABLE IF EXISTS `group_id`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_id` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_id`
--

LOCK TABLES `group_id` WRITE;
/*!40000 ALTER TABLE `group_id` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_id` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'iphone-7.jpg',1,NULL,NULL),(2,'laptop-dell-vostro.jpg',1,NULL,NULL),(3,'Tivi-Toshiba-32-inch.jpg',1,NULL,NULL),(4,'iPhone 7 32GB (Vàng Hồng).jpg',4,NULL,NULL),(5,'iPhone 7 256GB (Đen bóng).jpg',5,NULL,NULL),(6,'iphone_7.jpg',6,NULL,NULL),(7,'iPhone 7 32GB (Vàng Hồng).jpg',7,NULL,NULL),(8,'iPhone 7 256GB (Đen bóng).jpg',8,NULL,NULL),(9,'iphone_7.jpg',9,NULL,NULL),(10,'Internet Tivi LED Sony 32inch HD - Model KDL-32W600D.jpg',10,NULL,NULL),(11,'Tivi LED Darling 32inch HD - Model 32HD955T2 (Đen).jpg',11,NULL,NULL),(12,'Smart Tivi LED LG 43inch 4K UHD - Model 43UH610T (Đen).jpg',12,NULL,NULL);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_send` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (63,'unknown','unknown@gmail.com','xin chao','d41d8cd98f00b204e9800998ecf8427ead921d60486366258809553a3db49a4a',0,'2017-11-02','2017-11-02 00:52:57','2017-11-02 00:52:57'),(64,'unknown','unknown@gmail.com','hello','d41d8cd98f00b204e9800998ecf8427ead921d60486366258809553a3db49a4a',0,'2017-11-02','2017-11-02 00:53:26','2017-11-02 00:53:26');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_09_23_071239_create_products_table',2),(4,'2017_09_23_071634_create_categories_table',3),(5,'2017_09_23_071930_create_images_table',4),(6,'2017_09_23_072120_create_order_details_table',5),(7,'2017_09_23_072340_create_orders_table',6),(8,'2017_09_23_073006_add_column_group_id_to_table_users',7),(9,'2017_09_23_073147_create_group_id_table',8),(10,'2017_09_23_073813_create_slides_table',9),(11,'2017_09_23_074008_create_news_table',10),(13,'2017_09_23_074102_create_reviews_table',11),(14,'2017_09_23_080754_add_column_id_cauhinh_to_products',12),(15,'2017_09_24_051228_create_suggest_products',13),(16,'2017_09_26_092048_change_column_table_image',14),(17,'2017_09_26_092857_drop_coumlum_id_image_table_products',15),(18,'2017_09_26_120207_change_column_table_categories',16),(19,'2017_09_26_121928_change_column_table_images',17),(20,'2017_09_26_122123_change_column_table_news',18),(21,'2017_09_26_122408_change_comlumn_table_order_detais',19),(22,'2017_09_26_122722_change_column_table_products',19),(23,'2017_09_26_125113_insert_column_table_products',20),(24,'2017_09_27_030651_dropcolumn_price_discount_table_products',21),(25,'2017_09_27_163430_add_column_to_table_users',22),(27,'2017_09_28_124544_add_column_status_to_reviews_table',23),(28,'2017_10_01_120710_add_comlumn_status_table_reviews',24),(30,'2017_10_13_020740_update_column_reviews',25),(33,'2017_10_13_022022_create_table_contact',26),(34,'2017_10_14_080958_add_column_avatar_and_gender_to_table_users',27),(36,'2017_10_15_033613_add_column_link_into_products_table',28),(37,'2017_10_15_084703_add_user_id_into_orders_table',29),(38,'2017_10_15_132656_add_column_product_name_into_order_details',30),(47,'2017_10_16_062753_add_column_user_id_into_contacts',31),(49,'2017_10_16_080608_create_table_configs_phones',32),(51,'2017_10_16_104555_create_table_configs_laptop',33),(53,'2017_10_16_113650_create_table_configs_tivi',34),(55,'2017_10_16_120750_create_table_configs_camera',35),(56,'2017_10_18_134826_add_column_product_id_to_review',36),(57,'2017_10_19_152825_delete_column_status_in_review',37),(58,'2017_10_30_074159_create_table_chats',38),(59,'2017_10_30_134303_create_table_messages',39),(60,'2017_10_31_003348_add_column_email_into_messages_table',40);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,1,1,'Iphone 7',1,7000000.00,NULL,NULL),(2,1,5,'Laptop Dell ',2,30000000.00,NULL,NULL),(3,1,6,'Tivi Toshiba 32',1,20000000.00,NULL,NULL),(4,2,25,'New XPS 13 Laptop',5,20000000.00,'2017-10-03 10:15:13','2017-10-03 10:15:13'),(15,14,28,'Dell XP 13',1,41000000.00,'2017-10-24 01:18:33','2017-10-24 01:18:33'),(16,14,27,'Dell Inspiron 15 7567',1,50000000.00,'2017-10-24 01:18:33','2017-10-24 01:18:33'),(17,14,17,'Smart Tivi LED LG 43inch 4K UHD - Model 43UH610T (Đen)',1,40000000.00,'2017-10-24 01:18:33','2017-10-24 01:18:33'),(18,17,28,'Dell XP 13',1,41000000.00,'2017-10-24 02:17:28','2017-10-24 02:17:28'),(19,18,28,'Dell XP 13',1,41000000.00,'2017-10-24 02:18:24','2017-10-24 02:18:24'),(20,18,27,'Dell Inspiron 15 7567',2,100000000.00,'2017-10-24 02:18:24','2017-10-24 02:18:24');
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_order` date NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'Nguyễn Minh Hoàng','01675460285','quynh4589@gmail.com','Đông Ngạc, Bắc Từ Liêm, Hà Nội','2017-10-11','Tiền mặt',42000000,'Delivering',8,'2017-10-01 03:33:10','2017-10-18 20:46:45'),(2,'Hoang Minh Duc','0971410197','duchoang11097@gmail.com','Đông Ngạc, Từ Liêm, Hà Nội','2017-10-10','Tiền mặt',60000000,'Deliveried',9,'2017-10-16 01:28:24','2017-10-17 21:09:53'),(14,'Hoàng Minh Đức','0123456789','duchoang11097@gmail.com','Nhật Tảo , Bắc Từ Liêm , Hà Nội','2017-10-24','Tiền mặt',131000000,'Delivering',9,'2017-10-24 01:18:33','2017-10-24 01:18:33'),(15,'Nguyễn thị Ngọc Quỳnh','dkjcbjkd','suahsh@gmail.com','kdjckjdj','2017-10-24','Tiền mặt',223000000,'Delivering',0,'2017-10-24 02:09:08','2017-10-24 02:09:08'),(16,'quynh','kjsacjkd','quynh4589@gmail.com','quynh4589@gmail.com','2017-10-24','Tiền mặt',223000000,'Delivering',0,'2017-10-24 02:16:01','2017-10-24 02:16:01'),(17,'Nguyễn Minh Hoàng','01675460285','quynh4589@gmail.com','Đông Ngạc, Bắc Từ Liêm, Hà Nội','2017-10-24','Tiền mặt',141000000,'Delivering',8,'2017-10-24 02:17:28','2017-10-24 02:17:28'),(18,'Nguyễn Minh Hoàng','01675460285','quynh4589@gmail.com','Đông Ngạc, Bắc Từ Liêm, Hà Nội','2017-10-24','Tiền mặt',141000000,'Delivering',8,'2017-10-24 02:18:24','2017-10-24 02:18:24');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('admin@gmail.com','$2y$10$qKN4MW8I0nCD.1NFDCE9lOxNzPgM9a3YbSe5ClBRqNMSJ4OFRfan2','2017-10-14 07:20:09'),('duchoang11097@gmail.com','$2y$10$qpTllwJgpOzctAznfAWXC.dfdOKAZ8GPgIOyHcBaU7JnrKsEHVZ5C','2017-10-19 03:30:39');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) DEFAULT NULL,
  `discount` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `config_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Iphone 7','iphone-7',7000000.00,10,100,'Không còn jack cắm tai nghe truyền thống, thay vào đó tai tai nghe EarPod không dây hoặc kết nối thông quan đầu cắm Lightning. Dung lượng bộ nhớ được tăng đáng kể, bạn có thể sở hữu phiên bản lên đến 256GB. Ngoài những màu sắc quen thuộc, Apple đã giới thiệu đến người dùng phiên bản màu đen bóng (Jet Black) cực kỳ ấn tượng. Trọng lượng máy nhẹ hơn và màn hình sáng hơn cũng là một điểm đáng chú ý. Nhờ bỏ đi jack cắm tai nghe Apple đã có thể trang bị hệ thống loa kép với âm thanh stereo cực kỳ sống động. Apple đã loại bỏ nút Home vật lý thay bằng nút cảm ứng với công nghệ cảm ứng lực Force Touch độc đáo. Cuối cùng là pin “khủng” hơn, bộ xử lý mạnh hơn cũng như camera tốt hơn hỗ trợ quay video 4K.','',0,'iphone-7.jpg',1,1,NULL,NULL),(5,'Dell 70087069','dell-70087069',15000000.00,0,100,'Laptop Dell Vostro 3559với màn mình to 15.6 inch thoải mái và chip Core i5 là một lựa chọn tốt cho bạn ở mức giá phổ thông.\n			Cấu hình đáp ứng đầy đủ nhu cầu\n			Dell Vostro 3559 được trang bị chíp core i5 lõi kép đời mới nhất Skylake 2016 (có năng lực vận hành cao hơn 30% so với đời 4, rất phù hợp cho những bạn thích cập nhật công nghệ), cùng khả năng tự động ép xung từ 2,2Ghz lên 2,8Ghz nhờ công nghệ Turbo Boost, bởi vậy laptop bạn cũng bền hơn trước.\n			Bạn cũng có thể chạy nhiều tác vụ một lúc, mở nhiều tab trên trình duyệt nhờ dung lượng Ram lớn 4GB với công nghệ chạy đa nhiệm DDR3 và hoàn toàn yên tâm bởi ổ cứng khá 500GB để lưu trữ nhiều tài liệu hơn, đủ chứa hình ảnh cá nhân, video hay ứng dụng.\n			Bạn dễ dàng kết nối từ laptop tới máy chiếu nhờ cổng VGA tiện ích. Bạn cũng có được sự linh động cực lớn khi phải sử dụng pin bởi thời gian cho phép bạn dùng mà không cần điện đến 4 tiếng khi lướt web, gõ văn bản.',NULL,0,'laptop-dell-vostro.jpg',2,2,NULL,NULL),(6,'Toshiba 32 inch 32L3750','toshiba-32-inch-32l3750',20000000.00,20,100,'Toshiba L3750VN là thế hệ tivi mới thuộc series L37 của Toshiba hướng đến thiết kế tối giản nhưng cao cấp và sang trọng. Tivi Toshiba L3750VN cho phép người dùng tận hưởng cảm xúc một cách trọn vẹn với công nghệ hình ảnh Essential PQ giúp tái tạo màu sắc rực rỡ, độ sáng hoàn hảo, độ tương phản chính xác cùng với khả năng tái hiện những hình ảnh chuyển động sắc nét. Bên cạnh đó, người xem sẽ được trải nghiệm chất lượng âm thanh trung thực nhất, nhờ vào hệ thống loa được thiết kế mới, kết hợp công nghệ âm thanh vòm DTS TruSurround mang đến trải nghiệm âm thanh không giới hạn. Ngoài ra, tivi còn đến với chuẩn kết nối MHL cho phép bạn xem mọi nội dung từ điện thoại trên một màn hình lớn, cổng kết nối này cũng kiêm luôn chức năng sạc cho điện thoại để bạn tận hưởng trọn vẹn những nội dung yêu thích mà không lo bị gián đoạn vì hết pin.\n\n			Đẳng cấp đỉnh cao của vẻ đẹp tối giản\n			Thiết kế Lounge Style Concept mang lại một trải nghiệm nghe nhìn thoải mái hơn trong một thiết kế tối giản. Thiết kế dựa trên không gian sống, tôn vinh sự tao nhã, thanh lịch, hòa hợp với từng đường nét của căn phòng bạn.\n\n			Màu sắc rực rỡ hơn bao giờ hết\n			Trải nghiệm trọn vẹn từng khoảnh khắc nhờ vào công nghệ tạo hình CEVO Engine của Toshiba. Công nghệ này sẽ phân tích và tinh chỉnh giúp tái tạo hình ảnh chi tiết hơn và sâu hơn, khiến cho mọi thứ từ màn ảnh tivi sẽ sống động và chân thật.',NULL,0,'Tivi-Toshiba-32-inch.jpg',3,3,NULL,NULL),(16,'Tivi LED Darling 32inch HD - Model 32HD955T2 (Đen)','tivi-led-darling-32inch-hd-model-32hd955t2-den',50000000.00,20,100,NULL,NULL,0,'f016aee13a6605c284fd60d8343b42e2.jpg',3,3,'2017-10-16 21:30:51','2017-10-16 21:30:51'),(17,'Smart Tivi LED LG 43inch 4K UHD - Model 43UH610T (Đen)','smart-tivi-led-lg-43inch-4k-uhd-model-43uh610t-den',40000000.00,30,100,NULL,NULL,0,'990c2a3a9646c9de2af65d3bff634bd8.jpg',3,3,'2017-10-16 21:32:52','2017-10-16 21:32:52'),(18,'Iphone-7(4)','iphone-7-4',17000000.00,0,50,NULL,NULL,0,'117f115d348f8448298a567ed8d0326d.png',1,1,'2017-10-16 22:21:09','2017-10-16 22:21:09'),(19,'Iphone 6 Pink','iphone-6-pink',24000000.00,0,100,NULL,NULL,0,'ca1a32f1c55fe41283a78c41b907aaeb.jpg',1,1,'2017-10-18 05:27:01','2017-10-18 05:27:01'),(20,'Iphone 6 Gold','iphone-6-gold',16000000.00,0,50,NULL,NULL,0,'18236d73b0675f894e6b1f5ce34e10cc.jpg',1,1,'2017-10-18 05:27:54','2017-10-18 05:27:54'),(21,'Iphone 6S Black','iphone-6s-black',18000000.00,0,100,NULL,NULL,0,'7831d99ddcc18aba1c63d45f1ff5da84.jpg',1,1,'2017-10-18 05:28:30','2017-10-18 05:28:30'),(22,'Iphone 7 Red','iphone-7-red',24000000.00,0,50,NULL,NULL,0,'a46df074e98b3e5bad58c553ce42584d.jpg',1,1,'2017-10-18 05:29:03','2017-10-18 05:29:03'),(23,'Iphone 6 Black','iphone-6-black',18000000.00,0,50,NULL,NULL,0,'723423fd3d2db679cbb00c8b894d1ae0.jpg',1,1,'2017-10-18 05:30:05','2017-10-18 05:30:05'),(24,'acer aspire vx5-591g-54pd','acer-aspire-vx5-591g-54pd',24000000.00,0,50,NULL,NULL,0,'ab809dcc622183c3c3586c09428fbdb3.jpg',2,2,'2017-10-18 06:05:03','2017-10-18 06:05:03'),(25,'New XPS 13 Laptop','new-xps-13-laptop',30000000.00,0,50,NULL,NULL,0,'b56b4d6781b3e9639372b26f93d3dcab.jpg',2,2,'2017-10-18 06:09:59','2017-10-18 06:09:59'),(26,'Dell XPS 13 Laptop','dell-xps-13-laptop',35000000.00,0,50,NULL,NULL,0,'f5cf90aa7fbc7e3942faf26f31ed4ce1.jpg',2,2,'2017-10-18 06:17:38','2017-10-18 06:17:38'),(27,'Dell Inspiron 15 7567','dell-inspiron-15-7567',50000000.00,0,50,NULL,NULL,0,'94163cc585d12730fa16a4c762589397.jpg',2,2,'2017-10-18 06:22:05','2017-10-18 06:22:05'),(28,'Dell XP 13','dell-xp-13',41000000.00,0,50,NULL,NULL,0,'49e7efbc427a716acfb4e7261b6601c5.jpg',2,2,'2017-10-18 06:23:04','2017-10-18 06:23:04');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,1,'1','This product quality is good','aaaaaaaaaaaaaaa',NULL,'2017-10-12 07:18:39'),(2,1,'1','My review','bbbbbbbbbbb',NULL,'2017-10-12 07:18:35'),(3,8,'5','Summary','Review','2017-10-19 08:29:08','2017-10-19 08:29:08'),(4,8,'28','quynh4589@gmail.com','aaaaaaaaaaaa','2017-10-25 02:30:30','2017-10-25 02:30:30'),(5,8,'28','duchoang@gmail.com','bbbbbbbbbbbbbbbbbbbbbbbbbb','2017-10-25 02:30:56','2017-10-25 02:30:56'),(6,1,'28','admn@gmail.com','ok','2017-10-25 02:34:00','2017-10-25 02:34:00'),(7,1,'28','sá','aaa','2017-10-25 02:36:45','2017-10-25 02:36:45');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slides`
--

LOCK TABLES `slides` WRITE;
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` VALUES (2,'Ti vi','slide-2-image.jpg','Chỉ còn 10.000.000 VND','30','3',NULL,'2017-10-18 21:15:02'),(3,'Ti vi','slide-3-image.jpg','Chỉ còn 12.000.000 VND','35','3',NULL,'2017-10-17 21:24:52'),(4,'Dien thoai','iphone-7.jpg','Chỉ còn 13.754.000 VND','20','1',NULL,'2017-10-15 01:24:09');
/*!40000 ALTER TABLE `slides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suggest_products`
--

DROP TABLE IF EXISTS `suggest_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suggest_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `suggest_product_id` int(11) NOT NULL,
  `redirect_to_product_id` int(11) NOT NULL,
  `number_redirect` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suggest_products`
--

LOCK TABLES `suggest_products` WRITE;
/*!40000 ALTER TABLE `suggest_products` DISABLE KEYS */;
INSERT INTO `suggest_products` VALUES (29,1,28,18,'2017-10-19 00:06:13','2017-10-20 18:02:44'),(30,28,27,11,'2017-10-19 00:06:17','2017-10-27 04:33:39'),(31,27,26,9,'2017-10-19 00:06:19','2017-10-27 04:33:08'),(32,26,25,3,'2017-10-19 00:06:21','2017-10-19 20:07:33'),(33,25,17,6,'2017-10-19 00:06:23','2017-10-20 18:11:22'),(34,17,16,4,'2017-10-19 00:06:25','2017-10-20 02:42:37'),(35,16,6,2,'2017-10-19 00:06:27','2017-10-19 00:27:40'),(36,6,1,2,'2017-10-19 00:06:30','2017-10-20 18:14:20'),(37,28,1,11,'2017-10-19 00:06:36','2017-10-27 04:33:39'),(38,1,27,18,'2017-10-19 00:06:42','2017-10-20 18:02:44'),(39,26,1,3,'2017-10-19 00:06:46','2017-10-19 20:07:33'),(40,1,25,18,'2017-10-19 00:06:52','2017-10-20 18:02:44'),(41,25,1,6,'2017-10-19 00:06:56','2017-10-20 18:11:22'),(42,1,16,18,'2017-10-19 00:08:06','2017-10-20 18:02:44'),(43,16,1,2,'2017-10-19 00:08:09','2017-10-19 00:27:40'),(44,1,18,18,'2017-10-19 01:09:03','2017-10-20 18:02:44'),(45,18,1,2,'2017-10-19 01:09:05','2017-10-20 07:37:44'),(46,1,19,18,'2017-10-19 01:09:09','2017-10-20 18:02:44'),(47,19,1,3,'2017-10-19 01:10:10','2017-10-19 03:36:21'),(48,1,17,18,'2017-10-19 01:11:13','2017-10-20 18:02:44'),(49,17,1,4,'2017-10-19 01:11:15','2017-10-20 02:42:37'),(50,1,24,18,'2017-10-19 02:37:26','2017-10-20 18:02:44'),(51,24,25,2,'2017-10-19 02:39:23','2017-10-20 06:23:16'),(52,27,1,9,'2017-10-19 02:57:18','2017-10-27 04:33:08'),(53,1,5,18,'2017-10-19 08:06:38','2017-10-20 18:02:44'),(54,5,22,2,'2017-10-19 08:25:15','2017-10-19 08:38:59'),(55,22,5,1,'2017-10-19 08:25:17','2017-10-19 08:25:17'),(56,5,20,2,'2017-10-19 08:25:23','2017-10-19 08:38:59'),(57,20,5,1,'2017-10-19 08:25:25','2017-10-19 08:25:25'),(58,5,26,2,'2017-10-19 08:25:30','2017-10-19 08:38:59'),(59,26,5,3,'2017-10-19 08:25:31','2017-10-19 20:07:33'),(60,5,24,2,'2017-10-19 08:25:35','2017-10-19 08:38:59'),(61,24,5,2,'2017-10-19 08:25:36','2017-10-20 06:23:16'),(62,5,25,2,'2017-10-19 08:34:26','2017-10-19 08:38:59'),(63,27,24,9,'2017-10-19 09:48:56','2017-10-27 04:33:08'),(64,27,28,9,'2017-10-19 10:12:18','2017-10-27 04:33:08'),(65,1,6,18,'2017-10-19 20:04:04','2017-10-20 18:02:44'),(66,6,26,2,'2017-10-19 20:05:33','2017-10-20 18:14:20'),(67,1,26,18,'2017-10-19 20:09:22','2017-10-20 18:02:44'),(68,26,6,1,'2017-10-19 20:16:14','2017-10-19 20:16:14'),(69,6,27,2,'2017-10-19 20:16:26','2017-10-20 18:14:20'),(70,27,16,9,'2017-10-19 20:17:22','2017-10-27 04:33:08'),(71,16,28,1,'2017-10-19 20:17:31','2017-10-19 20:17:31'),(72,28,17,11,'2017-10-19 20:19:22','2017-10-27 04:33:39'),(73,16,26,1,'2017-10-19 20:21:16','2017-10-19 20:21:16'),(74,6,25,2,'2017-10-19 20:32:04','2017-10-20 18:14:20'),(75,25,27,6,'2017-10-19 20:46:56','2017-10-20 18:11:22'),(76,27,17,9,'2017-10-20 02:42:34','2017-10-27 04:33:08'),(77,18,27,2,'2017-10-20 03:28:18','2017-10-20 07:37:44'),(78,16,17,1,'2017-10-20 03:50:29','2017-10-20 03:50:29'),(79,6,28,2,'2017-10-20 05:53:34','2017-10-20 18:14:20'),(80,17,24,1,'2017-10-20 06:19:05','2017-10-20 06:19:05'),(81,25,28,6,'2017-10-20 06:23:19','2017-10-20 18:11:22'),(82,28,21,11,'2017-10-20 18:05:28','2017-10-27 04:33:39'),(83,21,22,1,'2017-10-20 18:05:40','2017-10-20 18:05:40'),(84,22,25,1,'2017-10-20 18:09:54','2017-10-20 18:09:54'),(85,27,6,9,'2017-10-20 18:11:46','2017-10-27 04:33:08'),(86,17,28,1,'2017-10-20 18:18:37','2017-10-20 18:18:37');
/*!40000 ALTER TABLE `suggest_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '3',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','male','admin@gmail.com','$2y$10$JSvw2I.Ubj7zKvcE1D4/Ou3nnqCXm3HjQDWbD.9e/GaynKwFsEQyO','2017-01-01','Hà Nội','0123456789','72dd3eedcc9dcf9ee3114020efd32bb8.png',1,'apWVuMbhkucdEUKFSTuqyEkP9fjFnzxawfqsX1OlvbVWuvzcqAKkC5xzw5q4','2017-09-28 18:13:33','2017-10-14 08:35:26'),(3,'unknown','male','unknown@gmail.com','$2y$10$XBaAljUQ1meyqJVfnmUa6ON5OSbEV5iJgl3f1XIbom04jtq4qoQ/a','1997-09-11','Hà Nội','0123456789','ed4020adefa4d8236d7fba343422e987.png',2,'U8F9yYobLJFqUyEhtWeiDqHh1qmOD6IVwTV51bsQEYpufhlFDkXvc234YBm3','2017-10-02 20:30:32','2017-10-16 00:41:55'),(4,'user1','male','user1@gmail.com','$2y$10$ZYSCK/aEgdLuxtQjAc9k4eOQ8JA4XJ3Kj8pBdYKazKVW.4uGlWwA6','1997-11-09','Hà Nội','0123456789','90b42cab4625069064b6ab3160bc43e5.png',3,'Wnc7uVZDSLQoTanIvrvyagfWs0z4nhIn2l5gSymtaKG9Fp4kVtl4Z6JYI26v','2017-10-09 06:34:52','2017-10-16 00:42:02'),(7,'user2','female','user2@gmail.com','$2y$10$hW0Z7x1rPZ5o1zoNrWgKDeRvKrMdJeghmO3sUJsrUEslhXxzIDCZ2','2012-12-12','TP HCM','35423132741534','5d95060c6939a848a68c1aa123becdce.jpg',3,'iGWJwjFbIhl5vHOmg0ZaDYciT2ihgpH9EkWy6ud3BkuaHhDdm13LnABBOB5T','2017-10-14 02:56:43','2017-10-14 06:52:14'),(8,'Nguyễn Minh Hoàng','male','quynh4589@gmail.com','$2y$10$OTjuc3nwnKyanKIku5vhKOVtBtbz6Iy3uBmQZf3VbeJHUI/v7211.','1997-07-06','Đông Ngạc, Bắc Từ Liêm, Hà Nội','01675460285','no-avatar.png',3,'BXoR7lBZgpfor2CzF1lYjHMNboN7sjlmLeMvgPHlkukSVQYFJfGY9FanIdvh','2017-10-15 07:02:59','2017-10-16 22:50:03'),(9,'Hoàng Minh Đức','male','duchoang11097@gmail.com','$2y$10$lBeP3VTJfEMl/5y7arxgruS3p3m.5Jn6GMOVG6JnEvcz2O3nA0hUW','1997-07-07','Nhật Tảo , Bắc Từ Liêm , Hà Nội','0123456789','no-avatar.png',3,'f1Dj5Wo8PBWfpcfBYGft5HgaD7BfV786PmnM1TAH4NtVT1iFPlBJ7YiSdojT','2017-10-17 01:53:58','2017-10-17 04:34:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-02 17:04:12
