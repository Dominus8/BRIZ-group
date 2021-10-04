-- MySQL dump 10.19  Distrib 10.3.28-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: briz
-- ------------------------------------------------------
-- Server version	10.3.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contact_models`
--

DROP TABLE IF EXISTS `contact_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_models` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `contact_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_models`
--

LOCK TABLES `contact_models` WRITE;
/*!40000 ALTER TABLE `contact_models` DISABLE KEYS */;
INSERT INTO `contact_models` VALUES (3,'storage/8Jyb5h0QhdczIS7kaYul1GkoCbn9kyKVgqXD56Y5.jpg','Красноярский край, Емельяновский район\r\nмуниципальное образование Солонцовский сельский совет, \r\nплощадка Западная, участок №2 А, строение 3, 658083','8 (800) 250-40-92','west@briz.group','2021-08-25 16:21:01','2021-08-25 16:21:01'),(4,'storage/9xBi46of3PThDo0qPEkRV8fUw9c39YwhsVoMZ4xn.jpg','663020 Красноярский край, Емельяновский район, муниципальное образование Солонцовский сельский совет, площадка Западная, участок №2 А, строение 3','8(800) 250-40-92','bc@briz2001.ru','2021-08-25 16:21:56','2021-08-25 16:21:56'),(5,'storage/24XwlSZk4uX3EnFP19DpDI1lAZfRD27lZqQvFRqU.png','658083 Алтайский край, г. Новоалтайск, ул. Дорожная, 86 А','8 (800) 250-40-92','west@briz2001.ru','2021-08-25 16:23:39','2021-08-25 16:23:39'),(6,'storage/JOxfYjyDIEZPy8nNv6wsIFAUJdn5kKDT1bDCrReQ.png','680031 Хабаровский край, Хабаровск​, Окружная, 19, Офис № 104','8 (999) 317-29-29','Dv@briz2001.ru','2021-08-25 16:24:40','2021-08-25 16:24:40'),(7,'storage/O3gxo9yK3aj6CxIq3gabNHhlnxAMXS0tJlWhilHX.png','Модульные системы управления','8 (391) 27-24-24','info@msu24.ru','2021-08-25 16:27:14','2021-08-28 22:58:54'),(8,'storage/4mZfG2jPq2ubHTzFKoO0ksOuJSQrHQ6kIYDG4ii6.png','663020 Красноярский край, Емельяновский район, муниципальное образование Солонцовский сельский совет, площадка Западная, участок №2 А, строение 3','8 (391) 27-10-222','zakaz@i-techniks.ru','2021-08-25 16:29:20','2021-08-28 22:58:38'),(9,'storage/Tara0Vw2k3vdrfz5Olh0jBvIygAcwNqXOxy2Uh1r.png','662523, Красноярский край, Берёзовский район,село Вознесенка, ул. Ленина, 73А','8 (800) 250-40-92','op@krasdorznak.ru','2021-08-25 16:31:01','2021-08-28 23:07:28'),(10,'storage/2ptl4kXjAXiFsnoNKlMy8hxH2pG1oCFhm18nSoSl.png','663020 Красноярский край, Емельяновский район, муниципальное образование Солонцовский сельский совет, площадка Западная, участок №2 А, строение 3','8 (391) 204-03-11','zakaz@24fk.ru','2021-08-25 16:32:27','2021-08-28 22:58:07'),(11,'storage/TkM2nfaPyvcN4QegKrBtf7pUOvqz7VA1BTcON7VY.png','663020 Красноярский край, Емельяновский район, муниципальное образование Солонцовский сельский совет, площадка Западная, участок №2 А, строение 3','8 (800) 250-40-92','mma@24grand.ru','2021-08-25 16:33:15','2021-08-28 23:07:07');
/*!40000 ALTER TABLE `contact_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directions_card_models`
--

DROP TABLE IF EXISTS `directions_card_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directions_card_models` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `directions_card_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directions_card_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directions_card_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directions_card_models`
--

LOCK TABLES `directions_card_models` WRITE;
/*!40000 ALTER TABLE `directions_card_models` DISABLE KEYS */;
INSERT INTO `directions_card_models` VALUES (8,'storage/T45X2yscFxlyj9GfssXM2f77qpZz5hG03zBJWJq3.jpg','Интеллектуальные транспортные системы','www.msu24.ru','2021-08-25 15:41:41','2021-08-25 16:52:45'),(9,'storage/BYpZBkmUkHO4HThRF1UUWzBcfgs8N92FRw5qfHMH.jpg','Светофорное оборудование','www.i-techniks.ru','2021-08-25 15:42:11','2021-08-25 16:57:00'),(10,'storage/OijMf9pcNunUbpuDWrxYzyy4VuyswBhnaNLhdBaO.jpg','Дорожные знаки','www.krasdorznak.ru','2021-08-25 15:43:01','2021-08-25 17:00:02'),(11,'storage/ZaQI2U9XrZEbNOtABepeH1UN4gInwXAsQ2Rs9XMU.jpg','Металлические конструкции','www.krasdorznak.ru','2021-08-25 15:44:08','2021-08-26 09:26:30'),(12,'storage/nzsLo4kvcHdLIPuwJgGKeCqBCvM3pIO6LrgqapAs.jpg','Материалы для разметки дорог','www.24fk.ru','2021-08-25 15:44:55','2021-08-26 09:33:01'),(13,'storage/2q7av0Yl8W1fr0PpvORfCYQl3jMhQz6I8DOU48UO.webp','Разметка дорог и парковок','www.briz2001.ru','2021-08-25 15:45:31','2021-08-25 15:45:31'),(14,'storage/8bzOm2ipaIJHfCWkwRKPCrewBPyXlqnqE5TFxdIS.jpg','Паспортизация дорог','www.24grand.ru','2021-08-25 15:46:14','2021-08-26 09:39:40'),(15,'storage/Xqy3yLxBVz918Pxi80KbTjKpZBY5NdB4ZsBeYIDr.jpg','Испытательная лаборатория','www.24grand.ru','2021-08-25 15:47:04','2021-08-26 09:43:53'),(16,'storage/Akuo9zFNvUJmAlGtAei6EUWyVXlWOvwU7eDpWRDi.webp','Антикоррозийные и огнезащитные и составы','www.24fk.ru','2021-08-25 15:47:42','2021-08-26 09:44:17'),(17,'storage/hgCX1nA6K56mNEk4fzXlshzrfdSy1lZ7rUzAYScS.jpg','Микростекло-шарик','-','2021-08-25 15:48:07','2021-08-26 09:44:47');
/*!40000 ALTER TABLE `directions_card_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `map_models`
--

DROP TABLE IF EXISTS `map_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `map_models` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_region` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=703 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `map_models`
--

LOCK TABLES `map_models` WRITE;
/*!40000 ALTER TABLE `map_models` DISABLE KEYS */;
INSERT INTO `map_models` VALUES (603,'RU-MOW','Москва',0,NULL,NULL),(604,'RU-CHE','Челябинская область',0,NULL,NULL),(605,'RU-ORL','Орловская область',1,NULL,NULL),(606,'RU-OMS','Омская область',1,NULL,NULL),(607,'RU-LIP','Липецкая область',0,NULL,NULL),(608,'RU-KRS','Курская область',0,NULL,NULL),(609,'RU-RYA','Рязанская область',0,NULL,NULL),(610,'RU-BRY','Брянская область',0,NULL,NULL),(611,'RU-KIR','Кировская область',0,NULL,NULL),(612,'RU-ARK','Архангельская область',0,NULL,NULL),(613,'RU-MUR','Мурманская область',0,NULL,NULL),(614,'RU-SPE','Санкт-Петербург',0,NULL,NULL),(615,'RU-YAR','Ярославская область',0,NULL,NULL),(616,'RU-ULY','Ульяновская область',0,NULL,NULL),(617,'RU-NVS','Новосибирская область',1,NULL,NULL),(618,'RU-TYU','Тюменская область',0,NULL,NULL),(619,'RU-SVE','Свердловская область',0,NULL,NULL),(620,'RU-NGR','Новгородская область',0,NULL,NULL),(621,'RU-KGN','Курганская область',0,NULL,NULL),(622,'RU-KGD','Калининградская область',0,NULL,NULL),(623,'RU-IVA','Ивановская область',0,NULL,NULL),(624,'RU-AST','Астраханская область',0,NULL,NULL),(625,'RU-KHA','Хабаровский край',1,NULL,NULL),(626,'RU-CE','Чеченская республика',0,NULL,NULL),(627,'RU-UD','Удмуртская республика',0,NULL,NULL),(628,'RU-SE','Республика Северная Осетия',0,NULL,NULL),(629,'RU-MO','Республика Мордовия',0,NULL,NULL),(630,'RU-KR','Республика  Карелия',0,NULL,NULL),(631,'RU-KL','Республика  Калмыкия',0,NULL,NULL),(632,'RU-IN','Республика  Ингушетия',0,NULL,NULL),(633,'RU-AL','Республика Алтай',1,NULL,NULL),(634,'RU-BA','Республика Башкортостан',0,NULL,NULL),(635,'RU-AD','Республика Адыгея',0,NULL,NULL),(636,'RU-CR','Республика Крым',0,NULL,NULL),(637,'RU-SEV','Севастополь',0,NULL,NULL),(638,'RU-KO','Республика Коми',0,NULL,NULL),(639,'RU-PNZ','Пензенская область',0,NULL,NULL),(640,'RU-TAM','Тамбовская область',0,NULL,NULL),(641,'RU-LEN','Ленинградская область',1,NULL,NULL),(642,'RU-VLG','Вологодская область',0,NULL,NULL),(643,'RU-KOS','Костромская область',0,NULL,NULL),(644,'RU-PSK','Псковская область',0,NULL,NULL),(645,'RU-YAN','Ямало-Ненецкий АО',0,NULL,NULL),(646,'RU-CHU','Чукотский АО',0,NULL,NULL),(647,'RU-YEV','Еврейская автономская область',0,NULL,NULL),(648,'RU-TY','Республика Тыва',1,NULL,NULL),(649,'RU-SAK','Сахалинская область',0,NULL,NULL),(650,'RU-AMU','Амурская область',1,NULL,NULL),(651,'RU-BU','Республика Бурятия',1,NULL,NULL),(652,'RU-KK','Республика Хакасия',1,NULL,NULL),(653,'RU-KEM','Кемеровская область',1,NULL,NULL),(654,'RU-ALT','Алтайский край',1,NULL,NULL),(655,'RU-DA','Республика Дагестан',0,NULL,NULL),(656,'RU-KB','Кабардино-Балкарская республика',0,NULL,NULL),(657,'RU-KC','Карачаевая-Черкесская республика',0,NULL,NULL),(658,'RU-KDA','Краснодарский край',0,NULL,NULL),(659,'RU-ROS','Ростовская область',0,NULL,NULL),(660,'RU-SAM','Самарская область',1,NULL,NULL),(661,'RU-TA','Республика Татарстан',1,NULL,NULL),(662,'RU-ME','Республика Марий Эл',0,NULL,NULL),(663,'RU-CU','Чувашская республика',0,NULL,NULL),(664,'RU-NIZ','Нижегородская край',0,NULL,NULL),(665,'RU-VLA','Владимировская область',0,NULL,NULL),(666,'RU-MOS','Московская область',1,NULL,NULL),(667,'RU-KLU','Калужская область',0,NULL,NULL),(668,'RU-BEL','Белгородская область',0,NULL,NULL),(669,'RU-ZAB','Забайкальский край',1,NULL,NULL),(670,'RU-PRI','Приморский край',0,NULL,NULL),(671,'RU-KAM','Камачатский край',0,NULL,NULL),(672,'RU-MAG','Магаданская область',0,NULL,NULL),(673,'RU-SA','Республика Саха',1,NULL,NULL),(674,'RU-KYA','Красноярский край',1,NULL,NULL),(675,'RU-ORE','Оренбургская область',0,NULL,NULL),(676,'RU-SAR','Саратовская область',0,NULL,NULL),(677,'RU-VGG','Волгоградская область',0,NULL,NULL),(678,'RU-VOR','Ставрополь',0,NULL,NULL),(679,'RU-SMO','Смоленская область',0,NULL,NULL),(680,'RU-TVE','Тверская область',0,NULL,NULL),(681,'RU-PER','Пермская область',0,NULL,NULL),(682,'RU-KHM','Ханты-Мансийский АО',0,NULL,NULL),(683,'RU-TOM','Томская область',1,NULL,NULL),(684,'RU-IRK','Иркутская область',1,NULL,NULL),(685,'RU-NEN','Ненецскй АО',0,NULL,NULL),(686,'RU-STA','Ставропольский край',0,NULL,NULL),(687,'SNG-EST','Эстония',0,NULL,NULL),(688,'SNG-LAT','Латвия',0,NULL,NULL),(689,'SNG-LIT','Литва',0,NULL,NULL),(690,'SNG-BEL','Белорусь',0,NULL,NULL),(691,'SNG-UKR','Украина',0,NULL,NULL),(692,'SNG-MOL','Молдова',0,NULL,NULL),(693,'SNG-ABH','Абхазия',0,NULL,NULL),(694,'SNG-KZ','Казахстан',1,NULL,NULL),(695,'SNG-MG','Монголия',1,NULL,NULL),(696,'SNG-UZ','Узбекистан',0,NULL,NULL),(697,'SNG-KGZ','Киргизия',0,NULL,NULL),(698,'SNG-TGS','Таджикистан',0,NULL,NULL),(699,'SNG-TMS','Туркменистан',0,NULL,NULL),(700,'SNG-AZ','Азербайджан',0,NULL,NULL),(701,'SNG-AR','Армения',0,NULL,NULL),(702,'RU-TUL','Тульская область',0,NULL,NULL);
/*!40000 ALTER TABLE `map_models` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_07_19_113509_create_slide_models_table',1),(5,'2021_07_20_074156_create_directions_card_models_table',2),(6,'2021_07_20_090251_create_contact_models_table',2),(7,'2021_07_27_145702_create_presentation_models_table',3),(8,'2021_08_10_094931_create_map_models_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('ikari162@mail.ru','$2y$10$a2AluJR6j8TkwLq1NwTZA.D0ZIFg/.2.5xH18im9HB6K0z6Sqa3BS','2021-08-02 12:37:06');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presentation_models`
--

DROP TABLE IF EXISTS `presentation_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presentation_models` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `presentation_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentation_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentation_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentation_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presentation_models`
--

LOCK TABLES `presentation_models` WRITE;
/*!40000 ALTER TABLE `presentation_models` DISABLE KEYS */;
INSERT INTO `presentation_models` VALUES (1,'storage/kKR3KpXTNpUFe2p4ky3sX39YQ9JnIBCKJevMtEad.jpg','Преза 1','Описание презы','storage/w1cgB9sXeship4NJ3U6y5DHLdVhMbpZjHCKk8nbu.pdf','2021-07-28 13:32:25','2021-07-28 13:32:25'),(2,'storage/nqaG9W51WR2wCcLJv4EW1CAgfjZcWVyv4Hs5GJM8.jpg','БРИЗ-Центр','Все виды дорожной разметки','storage/NAfyWBg830IYcNK9Iq4Afh29MFhRu2EiwaJB6bE4.pdf','2021-08-02 14:04:47','2021-08-06 12:00:58'),(3,'storage/MPRiAPqy6sNVaude8im82CySJrOJYZJpPXa5tM62.jpg','БРИЗ-Центр','Все виды дорожной разметки','storage/pF9jl5gGnOe0SGCxjyLjuuwoUplnBbkUiAUuT9Ft.pdf','2021-08-06 08:36:55','2021-08-06 08:36:55');
/*!40000 ALTER TABLE `presentation_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide_models`
--

DROP TABLE IF EXISTS `slide_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slide_models` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slide_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide_models`
--

LOCK TABLES `slide_models` WRITE;
/*!40000 ALTER TABLE `slide_models` DISABLE KEYS */;
INSERT INTO `slide_models` VALUES (6,'storage/UOQ0czkK0Px1BU1CCfn8cj0WKrOjf61NLOsxWFXu.webp','КОМПЛЕКСНЫЕ РЕШЕНИЯ ОБУСТРОЙСТВА ДОРОГ','Комплекс услуг по благоустройству автодорог и парковок: нанесение разметки, установка светофоров, дорожно-знаковой информации, проекционная разметка','2021-08-25 15:36:40','2021-08-25 15:36:40'),(19,'storage/jnxzIosITigj337LaYsqTUmMtIgtEtBvAW6hVWtt.png','c1','c1','2021-09-08 10:09:00','2021-09-08 10:09:00'),(20,'storage/gRyMTBchUk6iBQQV6JR5o75W2qCVxi9htwtktIG1.png','c2','c2','2021-09-08 10:09:44','2021-09-08 10:09:44'),(21,'storage/aAZe7LbCowUjXWsmoykorl2xByiRdyQnB328Oppr.png','c3','c3','2021-09-08 10:09:57','2021-09-08 10:09:57'),(22,'storage/f3Xhc9MsfsKR1R3K5kTylwUvODd98T4WdXoiDleO.png','c4','c4','2021-09-08 10:10:13','2021-09-08 10:10:13'),(23,'storage/BMRmgs6woMsr9urusdiRt81ZJGgXXg92z809zBmW.png','c5','c5','2021-09-08 10:10:26','2021-09-08 10:10:26'),(24,'storage/31HTkfXGAnOIpf3nfCvhQjkcKLzy3JaLqBanfTFe.png','c6','c6','2021-09-08 10:10:36','2021-09-08 10:10:36'),(25,'storage/sA8InaRivlAlcuLDZFgxFr80cPrxzLiF9z72XlIQ.png','c7','c7','2021-09-08 10:10:46','2021-09-08 10:10:46'),(26,'storage/1Ic1ySvqaN7kx1YK0c65fUCvmYAkZb37FDtLT2DC.png','c8','c8','2021-09-08 10:10:56','2021-09-08 10:10:56'),(27,'storage/mnMYNocuWp4B8xAtYm1MAtLayeLxylPFpGj3opXE.png','c9','c9','2021-09-08 10:11:06','2021-09-08 10:11:06'),(29,'storage/KX7NzF1LRqsGMt8kxWVUZHeqzd2KIEizsord8CH2.png','c11','c11','2021-09-08 10:11:34','2021-09-08 10:11:34'),(30,'storage/GTmgmN6uApHTiJK4GEQO68xflrfjFLnmq7OLQfi5.png','c12','c12','2021-09-08 10:11:44','2021-09-08 10:11:44'),(31,'storage/wTGrWRp3uYsDUwqYVpWXP0TkMQ6hILwiJDdmFQFh.png','c13','c13','2021-09-08 10:11:55','2021-09-08 10:11:55');
/*!40000 ALTER TABLE `slide_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','ikari162@mail.ru',NULL,'$2y$10$6dglhYfhH4ACh.qFeQ2Mb.CIMyRAXD2Sx0bVrXOzqnUNFRG71bWAy',NULL,'2021-08-01 19:57:05','2021-08-01 19:57:05'),(2,'Марина','shilikova.marina@yandex.ru',NULL,'$2y$10$/H2Hu8deT8tGJM94FiB8m.DskYRG/B2H1Z6UulPK0p4uYS1H6ksNK','1GinZ454qKHNLFt8T7JKFGiPcRaAZWGJlRTnODzy1Ja7IxP87vg7OOODazjo','2021-08-02 10:10:33','2021-08-02 10:10:33'),(3,'Kass','tanchik162@mail.ru',NULL,'$2y$10$YTHRynFkkUBS6mjDmATqXuTdE1M9lDpv3/EqfSxU1x6Jl0ixmuWWu',NULL,'2021-08-18 17:51:33','2021-08-18 17:51:33');
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

-- Dump completed on 2021-09-16 17:26:20
