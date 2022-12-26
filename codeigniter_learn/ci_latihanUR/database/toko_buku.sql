/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.38-MariaDB : Database - toko_buku
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`toko_buku` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `toko_buku`;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kode_buku` varchar(100) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `kategori_buku` varchar(100) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_buku` (`kode_buku`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `buku` */

insert  into `buku`(`id`,`kode_buku`,`nama_buku`,`kategori_buku`,`tahun_terbit`,`penerbit`) values (1,'BK-0001','Belajat CodeIgniter Mudah','',2020,'Elexmedia Komputindo');
insert  into `buku`(`id`,`kode_buku`,`nama_buku`,`kategori_buku`,`tahun_terbit`,`penerbit`) values (2,'BK-0002','Mengenal NodeJS','',2021,'Gramedia');
insert  into `buku`(`id`,`kode_buku`,`nama_buku`,`kategori_buku`,`tahun_terbit`,`penerbit`) values (5,'BK-0003','Membuat Website dengan PHP & MySQL','Tutorial',2019,'Media Komputindo');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
