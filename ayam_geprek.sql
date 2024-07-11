/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 8.0.30 : Database - ayam_geprek
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ayam_geprek` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `ayam_geprek`;

/*Table structure for table `tbl_beranda` */

DROP TABLE IF EXISTS `tbl_beranda`;

CREATE TABLE `tbl_beranda` (
  `id_profil` int NOT NULL AUTO_INCREMENT,
  `alamat` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `telepon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_beranda` */

insert  into `tbl_beranda`(`id_profil`,`alamat`,`deskripsi`,`telepon`) values 
(1,'KEDAI NANA(AYAM GEPREK) Jl. Sungai Rongkong No.23, Sabbamparu, Kec. Wara Utara, Kota Palopo, Sulawesi Selatan 91913','Selamat datang di Ayam Geprek Nana, kedai makan yang spesialis dalam hidangan ayam geprek dengan khas tekstur renyah dan rasanya yang lezat. Kami hadir dengan tujuan untuk memberikan pengalaman makan yang unik dan memuaskan bagi setiap pelanggan.','0821879708912');

/*Table structure for table `tbl_informasi` */

DROP TABLE IF EXISTS `tbl_informasi`;

CREATE TABLE `tbl_informasi` (
  `id_informasi` int NOT NULL AUTO_INCREMENT,
  `instagram` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_informasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_informasi` */

insert  into `tbl_informasi`(`id_informasi`,`instagram`,`whatsapp`,`facebook`) values 
(1,'https://www.instagram.com/gepreknana','0821879708912','https://www.facebook.com/gepreknana');

/*Table structure for table `tbl_produk` */

DROP TABLE IF EXISTS `tbl_produk`;

CREATE TABLE `tbl_produk` (
  `id_produk` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_produk` */

insert  into `tbl_produk`(`id_produk`,`image`,`menu`,`harga`) values 
(1,'geprek1.jpg','Ayam Geprek',8000),
(2,'geprek2.jpg','Ayam Geprek + Nasi',10000),
(3,'geprek3.jpg','Nasi Ayam Geprek + Esteh',15000);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `level` enum('1','2','3') DEFAULT NULL,
  `data_state` int DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`nama`,`level`,`data_state`) values 
(1,'admin','25d55ad283aa400af464c76d713c07ad','admin','1',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
